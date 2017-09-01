<template>
    <div id="modal-partner" class="mPopup--sm mfp-hide">
        <h3 class="mPopup__title">
            Стать партнёром
        </h3>
        <div class="pPopup__content">
            <div v-if="done">
                <div class="modalMessage">
                    <div class="modalMessage__img">
                        <p class="image">
                        <span class="body">
                            <svg width="178" height="226">
                                <use xlink:href="#boobon-cool"></use>
                            </svg>
                        </span>
                            <span class="shadow">
                            <svg width="92" height="6">
                                <use xlink:href="#boobon-shadow"></use>
                            </svg>
                        </span>
                        </p>
                    </div>
                    <div class="modalMessage__text">
                        <p>Наш менеджер свяжется с Вами в ближайшее время</p>
                    </div>
                    <div class="modalMessage__btn">
                        <a @click.prevent="closeModal" href="#" class="eBtn eBtn--pink eBtn--big">
                            Хорошо
                        </a>
                    </div>
                </div>
            </div>
            <div v-if="!done">
                <div class="mForm">
                <form @submit.prevent="submit" action="">
                    <div class="mForm__row">
                        <input type="text" class="mForm__input" placeholder="Ф.И.О." name="name" v-model="form.name" v-bind:class="{ 'hasError': errors['name'] }">
                    </div>
                    <div v-if="errors['name']" class="errorMessageContainer">
                        <span v-for="error in errors['name']" class="errorMessage">{{ error }}</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="mForm__row">
                                <input type="text" class="mForm__input" placeholder="E-mail" name="email" v-model="form.email" v-bind:class="{ 'hasError': errors['email'] }">
                            </div>
                            <div v-if="errors['email']" class="errorMessageContainer">
                                <span v-for="error in errors['email']" class="errorMessage">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="mForm__row">
                                <input type="text" class="mForm__input" placeholder="Телефон" name="phone" v-model="form.phone" v-bind:class="{ 'hasError': errors['phone'] }">
                            </div>
                            <div v-if="errors['phone']" class="errorMessageContainer">
                                <span v-for="error in errors['phone']" class="errorMessage">{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mForm__row">
                        <div class="mForm__row">
                            <input type="text" class="mForm__input" placeholder="Город" name="city" v-model="form.city" v-bind:class="{ 'hasError': errors['city'] }">
                        </div>
                        <div v-if="errors['city']" class="errorMessageContainer">
                            <span v-for="error in errors['city']" class="errorMessage">{{ error }}</span>
                        </div>
                    </div>
                    <div class="mForm__btn">
                        <button @onclick.prevent="submit" type="submit" class="eBtn eBtn--big"  v-bind:class="{ 'eBtn--pink': !loading, 'eBtn--disabled': !loading }">
                            Подать заявку
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home partner form modal mounted.');
        },
        data: function() {
            return{
                form: {
                    name: null,
                    email: null,
                    phone: null,
                    city: null,
                },
                loading: false,
                done: false,
                errors: [],
                url: '/user/store-partner',
            }
        },
        methods: {
            submit: function () {
                var self = this
                self.loading = true
                axios.post(self.url, self.form)
                        .then(function (response) {
                            self.items = response.data.items;
                            self.form = {
                                name: null,
                                email: null,
                                phone: null,
                                message: null,
                            }
                            self.errors = []
                            self.done = true
                            self.loading = false
                        })
                        .catch(function (error) {
                            self.errors = error.response.data
                            self.loading = false
                            setTimeout(function () {
                                this.errors = []
                            }, 4000)
                        });
            },
            closeModal: function () {
                $.magnificPopup.close()
            }
        }
    }
</script>