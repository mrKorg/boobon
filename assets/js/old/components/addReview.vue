<template>
    <div>
        <p>
            <a @click="showModal()" class="eBtn--blue eBtn--big">
                Добавить отзыв
            </a>
        </p>
        <transition name="isModalShow">
            <div v-if="isModalShow" @click="closeModal()" class="mfp-bg mfp-fade mfp-ready"></div>
        </transition>
        <transition name="isModalShow">
            <div v-if="isModalShow"  class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1"
                 style="overflow-x: hidden; overflow-y: auto;">
                <div v-on:click.self="closeModal()" class="mfp-container mfp-s-ready mfp-inline-holder">
                    <div v-on:click.self="closeModal()" class="mfp-content">
                        <div id="modal-addReview" class="mPopup--sm">
                            <h3 v-if="!done" class="mPopup__title">
                                Оставить отзыв
                            </h3>
                            <h3 v-if="done" class="mPopup__title">
                                Спасибо за отзыв
                            </h3>
                            <div class="pPopup__content">
                                <div v-if="!done" class="mForm">
                                    <form @submit.prevent="submit">
                                        <div class="mForm__row">
                                            <input type="text"
                                                   placeholder="Ф.И.О."
                                                   v-model="form.name"
                                                   v-bind:class="[errors.name ? 'mForm__input hasError' : 'mForm__input']">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="mForm__row">
                                                    <input type="text"
                                                           placeholder="Телефон или e-mail"
                                                           v-model="form.contact"
                                                           v-bind:class="[errors.contact ? 'mForm__input hasError' : 'mForm__input']">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="mForm__row">
                                                    <input type="text"
                                                           placeholder="Город"
                                                           v-model="form.city"
                                                           v-bind:class="[errors.city ? 'mForm__input hasError' : 'mForm__input']">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mForm__row">
                                            <div class="eCustomSelect">
                                                <div class="eCustomSelect__value" v-bind:class="{ active: current_product}">
                                                    <p v-if="current_product">{{ current_product }}</p>
                                                    <p v-else>Выберите снежколеп</p>
                                                </div>
                                                <div class="eCustomSelect__drop">
                                                    <div class="eCustomSelect__scroll js_eCustomSelect__scroll">
                                                        <a v-for="(product, index) in products.data" v-html="product.title" @click="setProduct(product)"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mForm__row">
                                <textarea placeholder="Текст отзыва"
                                          v-model="form.text"
                                          v-bind:class="[errors.text ? 'mForm__textarea hasError' : 'mForm__textarea']"></textarea>
                                        </div>
                                        <div class="mForm__btn">
                                            <button type="submit" class="eBtn eBtn--pink eBtn--big">
                                                Отправить

                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div v-if="done">
                                    Ваш отзыв будет опубликован после проверки модератором.
                                </div>
                            </div>
                            <button @click="closeModal()" title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        mounted: function () {
            console.log('Add review mounted');
            this.getProducts();
        },
        data: function () {
            return {
                isModalShow: false,
                isFormValid: false,
                form: {
                    name: null,
                    contact: null,
                    city: null,
                    product_id: null,
                    text: null
                },
                errors: {
                    name: null,
                    contact: null,
                    city: null,
                    product_id: null,
                    text: null
                },
                loading: false,
                done: false,
                url: '/add-review',
                products: [],
                current_product: false
            }
        },
        methods: {
            showModal: function () {
                this.isModalShow = true;
                document.getElementsByTagName('html')[0].classList.add('openModal');
                this.getProducts();
            },
            closeModal: function () {
                this.done = false;
                this.isModalShow = false;
                document.getElementsByTagName('html')[0].classList.remove('openModal');
            },
            submit: function () {
                let self = this;
                self.loading = true;
                self.validation(self.form);
                if (self.isFormValid) {
                    axios.post(self.url, self.form)
                        .then(function (response) {
                            self.form = {
                                name: null,
                                contact: null,
                                city: null,
                                text: null,
                            };
                            self.done = true;
                            self.loading = false;
                            self.isFormValid = false;
                            setTimeout(function () {
                                self.closeModal();
                                self.done = false;
                            }, 4000)
                        })
                        .catch(function (error) {
                            console.log(error);
                            let errors = JSON.parse(error.response.request.response);
                            for (let key in errors) {
                                self.errors[key] = true;
                            }
                            setTimeout(function () {
                                self.clearErrors();
                            }, 4000)
                        });
                } else {
                    setTimeout(function () {
                        self.clearErrors();
                    }, 4000)
                }
            },
            validation: function (data) {
                let self = this;
                let isExistError = false;
                for (let key in data) {
                    if (data.hasOwnProperty(key)) {
                        if (data[key] === '' || data[key] === null) {
                            self.errors[key] = true;
                            isExistError = true;
                            console.log("Empty field " + key);
                        } else if (key === 'contact') {
                            if (!self.validateEmail(data.contact) && !self.validatePhone(data.contact)) {
                                self.errors[key] = true;
                                isExistError = true;
                                console.log("Invalid field " + key);
                            }
                        }
                    }
                }
                if (!isExistError) {
                    self.isFormValid = true;
                }
            },
            validateEmail: function (email) {
                let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            },
            validatePhone: function (phone) {
                let re = /^[0-9\+\-\(\)\s]+$/;
                return re.test(phone);
            },
            clearErrors: function () {
                for (let key in this.errors) {
                    this.errors[key] = false;
                }
            },
            getProducts: function () {
                let self = this;
                self.loading = true;
                axios.get('/api/products')
                    .then(function (response) {
                        self.products = response.data.items; console.log(self.products);
                        self.loading = false;

                    })
                    .catch(function (error) {
                        console.log(error);
                        self.loading = false;
                    });
            },
            setProduct: function (product) {
                this.current_product = product.title;
                this.form.product_id = product.id;
            }
        }
    }
</script>

<style>
    .isModalShow-enter,
    .isModalShow-enter-active,
    .isModalShow-leave-active {
        transition: opacity .3s
    }

    .isModalShow-enter,
    .isModalShow-leave-active {
        opacity: 0
    }
</style>