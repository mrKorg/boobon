<template>
    <div class="pCart1">
        <div class="container">
            <div class="pCart1__topRow">
                <div class="row middle-md">
                    <div class="col-xs-12 col-lg-8">
                        <div class="pCart1__list">
                            <div class="js_pCart1__list noSlider">

                                <div v-for="(item, index) in items">
                                    <div class="pCart1__prod">
                                        <div class="eProductCart">
                                            <h4 class="eProductCart__title">
                                                {{ item.title }}
                                            </h4>
                                            <a href="#" class="eProductCart__image">
                                                <span class="body">
                                                    <img width="100" height="135" v-bind:src="item.home_image_url" :alt="item.title" class="eProductCart__home_image">
                                                </span>
                                                                <span class="shadow">
                                                    <svg width="50" height="3">
                                                        <use xlink:href="#boobon-shadow"></use>
                                                    </svg>
                                                </span>
                                                                <span class="title">
                                                    <img  width="105" height="40" v-bind:src="item.home_title_image_url" :alt="item.title" class="eProductCart__title_image">
                                                </span>
                                            </a>
                                            <div v-if="item.is_box == true">
                                                <div  class="eProductCart__row--cols">
                                                    <div class="row middle-xs">
                                                        <div class="col-xs-6">
                                                            <!--<div class="eSizeSelect&#45;&#45;white">-->
                                                            <!--<div class="eSizeSelect__val {{&#45;&#45; if isset sizes &#45;&#45;}}eSizeSelect__val&#45;&#45;withDrop{{&#45;&#45; endifs &#45;&#45;}}">-->
                                                            <!--<p>Большой</p>-->
                                                            <!--</div>-->
                                                            <!--{{&#45;&#45; if isset sizes &#45;&#45;}}-->
                                                            <!--<div class="eSizeSelect__drop">-->
                                                            <!--<p>-->
                                                            <!--<a href="#">-->
                                                            <!--Маленький-->
                                                            <!--</a>-->
                                                            <!--</p>-->
                                                            <!--<p>-->
                                                            <!--<a href="#">-->
                                                            <!--Большой-->
                                                            <!--</a>-->
                                                            <!--</p>-->
                                                            <!--</div>-->
                                                            <!--{{&#45;&#45; endif isset sizes &#45;&#45;}}-->
                                                            <!--</div>-->
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="eColorSelect eColorSelect--white">
                                                                <div class="eColorSelect__val">
                                                                    <p>
                                                                        <span class="eColorSelect__label">Цвет</span>
                                                                        <span class="colorPreview" :style="{ background:item.color.hex }"></span>
                                                                    </p>
                                                                </div>
                                                                <div class="eColorSelect__drop">
                                                                    <div class="row">
                                                                        <div v-for="color in item.colors" class="col">
                                                                            <a @click.prevent="setColor(index, color)" href="#" class="colorPreview" :style="{ background:color.hex }"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eProductCart__row--center">
                                                    <div class="row middle-xs">
                                                        <div class="col-xs-6">
                                                            <p class="eProductCart__amount">
                                                                <strong>
                                                                    Ящики
                                                                </strong><br>
                                                                <span>
                                                    ( 1 = {{ item.box_count }} шт )
                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="eQtySelect eQtySelect--white">
                                                                <div class="eQtySelect__val">
                                                                    <p>
                                                                        <span> {{ item.quantity }} </span>
                                                                        шт
                                                                    </p>
                                                                </div>
                                                                <a @click.prevent="minusQuantity(index)" href="#" class="eQtySelect__btn--minus">
                                                                    <svg width="20" height="20">
                                                                        <use xlink:href="#icon-qtyMinus"></use>
                                                                    </svg>
                                                                </a>
                                                                <a @click.prevent="plusQuantity(index)" href="#" class="eQtySelect__btn--plus">
                                                                    <svg width="20" height="20">
                                                                        <use xlink:href="#icon-qtyPlus"></use>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eProductCart__row--price">
                                                    <p class="eProductCart__price">
                                                        3777 {{currency}}
                                                    </p>
                                                </div>
                                                <div class="eProductCart__row--desc eProductCart__row--last">
                                                    <p>
                                                        <strong>
                                                            Ваша скидка - 16%
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        Чтобы получить скидку <span>23%</span>,<br>
                                                        купите еще <span>3</span> ящика
                                                    </p>
                                                </div>
                                            </div>

                                            <div v-if="item.is_box == false">
                                                <div  class="eProductCart__row">
                                                    <div class="row middle-xs">
                                                        <div class="col-xs-6">
                                                            <!--<div class="eSizeSelect&#45;&#45;white">-->
                                                            <!--<div class="eSizeSelect__val {{&#45;&#45; if isset sizes &#45;&#45;}}eSizeSelect__val&#45;&#45;withDrop{{&#45;&#45; endifs &#45;&#45;}}">-->
                                                            <!--<p>Большой</p>-->
                                                            <!--</div>-->
                                                            <!--{{&#45;&#45; if isset sizes &#45;&#45;}}-->
                                                            <!--<div class="eSizeSelect__drop">-->
                                                            <!--<p>-->
                                                            <!--<a href="#">-->
                                                            <!--Маленький-->
                                                            <!--</a>-->
                                                            <!--</p>-->
                                                            <!--<p>-->
                                                            <!--<a href="#">-->
                                                            <!--Большой-->
                                                            <!--</a>-->
                                                            <!--</p>-->
                                                            <!--</div>-->
                                                            <!--{{&#45;&#45; endif isset sizes &#45;&#45;}}-->
                                                            <!--</div>-->
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p class="eProductCart__price">
                                                                {{ item.sum }} {{ currency }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eProductCart__row--cols eProductCart__row--last">
                                                    <div class="row middle-xs">
                                                        <div class="col-xs-6">
                                                            <div class="eQtySelect eQtySelect--white">
                                                                <div class="eQtySelect__val">
                                                                    <p>
                                                                        <span>{{ item.quantity }}</span>
                                                                        шт
                                                                    </p>
                                                                </div>
                                                                <a @click.prevent="minusQuantity(index)" href="#" class="eQtySelect__btn--minus">
                                                                    <svg width="20" height="20">
                                                                        <use xlink:href="#icon-qtyMinus"></use>
                                                                    </svg>
                                                                </a>
                                                                <a @click.prevent="plusQuantity(index)" href="#" class="eQtySelect__btn--plus">
                                                                    <svg width="20" height="20">
                                                                        <use xlink:href="#icon-qtyPlus"></use>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="eColorSelect eColorSelect--white">
                                                                <div class="eColorSelect__val">
                                                                    <p>
                                                                        <span class="eColorSelect__label">Цвет</span>
                                                                        <span class="colorPreview" :style="{ background:item.color.hex }"></span>
                                                                    </p>
                                                                </div>
                                                                <div class="eColorSelect__drop">
                                                                    <div class="row">
                                                                        <div v-for="color in item.colors" class="col">
                                                                            <a @click.prevent="setColor(index, color)" href="#" class="colorPreview" :style="{ background:color.hex }"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="eProductCart__delete">
                                                <a @click.prevent="removeFromCart(index)" href="#">
                                                    <svg width="28" height="28">
                                                        <use xlink:href="#icon-close"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="pCart1__totalMoney">
                            <p>
                                К оплате:
                                <strong>
                                    {{ total_sum }} {{ currency }}
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pCart1__bottomRow">
                <h2 class="pCart1__title">
                    Оформить заказ
                </h2>
                <form action="">
                    <div class="pCart1__cols">
                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <div class="pCart1__step" v-bind:class="{ 'active': steps.one }">
                                    <span class="num">1</span>
                                </div>
                                <div class="pCart1__formBox">
                                    <p class="pCart1__formRow">
                                        <input type="text" name="name" v-model="order.name" placeholder="Ф.И.О." v-bind:class="{ 'hasError': errors['name'] }">
                                    </p>
                                    <div v-if="errors['name']" class="errorMessageContainer">
                                        <span v-for="error in errors['name']" class="errorMessage">{{ error }}</span>
                                    </div>
                                    <p class="pCart1__formRow">
                                        <input type="email" name="email" v-model="order.email" placeholder="E-mail" v-bind:class="{ 'hasError': errors['email'] }">
                                    </p>
                                    <div v-if="errors['email']" class="errorMessageContainer">
                                        <span v-for="error in errors['email']" class="errorMessage">{{ error }}</span>
                                    </div>
                                    <p class="pCart1__formRow">
                                        <input type="tel" name="tel" v-model="order.phone" placeholder="Телефон" v-bind:class="{ 'hasError': errors['phone'] }">
                                    </p>
                                    <div v-if="errors['email']" class="errorMessageContainer">
                                        <span v-for="error in errors['phone']" class="errorMessage">{{ error }}</span>
                                    </div>
                                </div>
                                <div class="pCart1__formBox">
                                    <h4 class="pCart1__formLabel">
                                        Способ оплаты:
                                    </h4>
                                    <div class="pCart1__formRow pCart1__checkBtns">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="wayforpay" v-model="order.payment">
                                                    <span>
                                                        Visa, Mastercard, Paypal
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="cash" v-model="order.payment">
                                                    <span>
                                                        Наличными
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="cod" v-model="order.payment">
                                                    <span>
                                                        Наложенный платёж
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                                <div class="pCart1__step" v-bind:class="{ 'active': steps.two }">
                                    <span class="num">2</span>
                                </div>
                                <div class="pCart1__formBox">
                                    <h4 class="pCart1__formLabel">
                                        Способ доставки:
                                    </h4>
                                    <div class="pCart1__formRow pCart1__checkBtns">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="method" value="courier" v-model="order.method">
                                                    <span>
                                                        Курьер
                                                    </span>
                                                </label>
                                                <span class="desc">
                                                    50 {{ currency }}
                                                </span>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="method" value="newpost" v-model="order.method">
                                                    <span>
                                                        Новая почта
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="method" value="self" v-model="order.method">
                                                    <span>
                                                        Самовывоз
                                                    </span>
                                                </label>
                                                <span class="desc">
                                                    Бесплатно
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="order.method != 'self'">
                                        <div v-if="order.method == 'courier'" class="pCart1__formRow">
                                            <input type="text"
                                                   name="address"
                                                   placeholder="Адрес доставки" v-model="order.address">
                                        </div>

                                        <div v-if="order.method == 'newpost'" class="pCart1__formRow">
                                            <div>
                                                <p>
                                                    <v-select
                                                            :on-change="setCity"
                                                            :debounce="250"
                                                            :on-search="getCities"
                                                            :value.sync="order.city"
                                                            :options="cities"
                                                            placeholder="Город"
                                                            label="label"
                                                    >
                                                    </v-select>
                                                </p>
                                            </div>
                                            <div v-if="order.city != ''">
                                                <p>
                                                    <v-select
                                                            :debounce="250"
                                                            :on-search="getWarehouses"
                                                            :value.sync="order.warehouse"
                                                            :options="warehouses"
                                                            placeholder="Отделение"
                                                            label="label"
                                                    >
                                                    </v-select>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="pCart1__formRow">
                                            <textarea name="comment"
                                                      placeholder="Комментарий"
                                                      v-model="order.comment" v-bind:disabled="order.method == 'self'"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                                <div class="pCart1__step" v-bind:class="{ 'active': steps.three }">
                                    <span class="num">3</span>
                                </div>
                                <div class="pCart1__total">
                                    <div class="pCart1__formBox--center">
                                        <h4 class="pCart1__formLabel">
                                            Подтверждение:
                                        </h4>
                                        <p class="pCart1__formRow">
                                    <span class="label">
                                        Общая сумма покупки:
                                    </span>
                                            <strong class="total">
                                                {{ sum }} {{ currency }}
                                            </strong>
                                        </p>
                                        <p class="pCart1__formRow">
                                    <span class="label">
                                        Доставка:
                                    </span>
                                            <strong class="total">
                                                {{ delivery_sum }} {{ currency }}
                                            </strong>
                                        </p>
                                        <p class="pCart1__formRow">
                                            <span class="label">
                                                К оплате:
                                            </span>
                                            <strong class="total">
                                                {{ total_sum }} {{ currency }}
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="pCart1__formBox">
                                        <p class="pCart1__check">
                                            <label>
                                                <span class="eCheckBox">
                                                    <input type="checkbox" name="callback" v-model="order.callback">
                                                </span>
                                                Не перезванивать
                                            </label>
                                        </p>
                                        <div v-if="errors['callback']" class="errorMessageContainer">
                                            <span v-for="error in errors['callback']" class="errorMessage">{{ error }}</span>
                                        </div>
                                        <p class="pCart1__check">
                                            <label>
                                                <span class="eCheckBox">
                                                    <input type="checkbox" name="terms" v-model="order.terms">
                                                </span>
                                                Соглащаюсь с условиями <a href="#modal-offer" class="open-popup-link">Публичной оферты</a>
                                            </label>
                                        </p>
                                        <div v-if="errors['terms']" class="errorMessageContainer">
                                            <span v-for="error in errors['terms']" class="errorMessage">{{ error }}</span>
                                        </div>
                                    </div>
                                    <div class="pCart1__formBox">
                                        <p class="pCart1__btn">
                                            <a href="#" class="eBtn--big" v-bind:class="{ 'eBtn--pink': ready, 'eBtn--disabled': !ready }">
                                                Оформить
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        components: { Slick },
        data: function() {
            return{
                items: [],
                order: {
                    name: '',
                    email: '',
                    phone: '',
                    payment: null,
                    method: null,
                    address: '',
                    city: '',
                    warehouse: '',
                    comment: '',
                    callback: false,
                    terms: false,
                },
                steps: {
                    one: false,
                    two: false,
                    three: false,
                },
                errors: [],
                delivery_sum: 0,
                currency: currency,
                sum: 0,
                showCart: false,
                ready: false,
                loading:false,
                cities: [],
                warehouses: []

            }
        },
        mounted: function () {
            console.log('Home shopping cart mounted.');
        },
        created: function () {
            eventHub.$on('add-to-cart', this.addToCart)
            let self = this
            self.loading = true
            axios.get('/cart/restore')
                    .then(function (response) {
                        if (response.data.items != null) {
                            self.items = response.data.items
                            self.$nextTick(function () {
                                self.countSum()
                                if (self.items.length > 2) {
                                    $('.js_pCart1__list').removeClass('noSlider');
                                    $('.js_pCart1__list').slick({
                                        autoplay: false,
                                        dots: true,
                                        arrows: true,
                                        infinite: true,
                                        speed: 500,
                                        fade: false,
                                        slidesToShow: 3,
                                        slidesToScroll: 3,
                                        nextArrow: '<a href="#" class="next"><svg width="14" height="23"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sliderArrow--next"></use></svg></a>',
                                        prevArrow: '<a href="#" class="prev"><svg width="14" height="23"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sliderArrow--prev"></use></svg></a>',
                                        responsive: [
                                            {
                                                breakpoint: 1500,
                                                settings: {
                                                    slidesToShow: 2,
                                                    slidesToScroll: 2,
                                                }
                                            },
                                            {
                                                breakpoint: 1200,
                                                settings: {
                                                    arrows: false,
                                                    slidesToShow: 2,
                                                    slidesToScroll: 2,
                                                }
                                            },
                                            {
                                                breakpoint: 768,
                                                settings: {
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1
                                                }
                                            }
                                        ]
                                    });
                                }
                            })
                        }
                        self.loading = false
                    })
                    .catch(function (error) {
                        console.log(error)
                        self.loading = false
                    });
        },
        computed: {
            count: function () {
                return this.items.length
            },
            weight: function () {
                let weight = 0;
                this.items.forEach(function (item) {
                    weight = Math.abs(+weight + +item.weight)
                })
                return Math.abs(+weight / 1000);
            },
            total_sum: function () {
                return Math.abs(+this.sum + +this.delivery_sum);
            }
        },
        watch: {
            count: function (val) {
                if (val == 0) {
                    $.magnificPopup.close()
                    let body = document.getElementsByTagName('body')[0];
                    body.classList.remove('openSidePanelCart');
                }
            },
            items: {
                handler: function (after, before) {
                    let self = this
                    self.loading = true
                    axios.post('/cart/store', {cart: self.items})
                            .then(function (response) {
                                self.loading = false
                            })
                            .catch(function (error) {
                                console.log(error)
                                self.loading = false
                            });
                },
                deep: true
            },
            order: {
                handler: function (after, before) {
                    console.log(this.order)
                    this.steps.one = false
                    this.steps.two = false
                    this.steps.three = false
                    if(this.order.name != '' && (this.order.email != '') && this.order.phone != '' && this.order.payment != null) {
                        let self = this
                        if(!self.steps.one) {
                            self.loading = true
                            axios.post('/cart/check-first-step', self.order)
                                    .then(function (response) {
                                        self.errors = []
                                        self.steps.one = true
                                        self.loading = false
                                    })
                                    .catch(function (error) {
                                        self.steps.one = false
                                        self.errors = error.response.data
                                        self.loading = false
                                    });
                        }
                    } else {
                        this.steps.one = false
                    }

                    if(this.order.method != null && (this.order.address != '' || this.order.city != '')) {
                        let self = this
                        if(!self.steps.two) {
                            self.loading = true
                            axios.post('/cart/check-second-step', self.order)
                                .then(function (response) {
                                    self.errors = []
                                    self.steps.two = true
                                    self.loading = false
                                })
                                .catch(function (error) {
                                    self.steps.two = false
                                    self.errors = error.response.data
                                    self.loading = false
                                });
                            }
                    } else {
                        this.steps.two = false
                    }

                    if(this.order.method == 'courier') {
                        this.delivery_sum = 50
                    }

                    if(this.order.method == 'self') {
                        this.delivery_sum = 0
                    }

                    if(this.order.terms != false) {
                        let self = this
                        if(!self.steps.three) {
                            self.loading = true
                            axios.post('/cart/check-third-step', self.order)
                                    .then(function (response) {
                                        self.errors = []
                                        self.steps.three = true
                                        self.loading = false
                                    })
                                    .catch(function (error) {
                                        self.steps.three = false
                                        self.errors = error.response.data
                                        self.loading = false
                                    });
                        }
                    } else {
                        this.steps.three = false
                    }
                },
                deep: true,
            },
            steps: {
                handler: function (after, before) {
                    if (this.steps.one == true && this.steps.two == true && this.steps.three == true) {
                        this.ready = true
                    } else {
                        this.ready = false
                    }
                },
                deep: true,
            }

        },
        methods: {
            addToCart: function (item, type) {
                this.items.push(item)
                this.countSum()
            },
            countSum: function () {
                let sum = 0;
                this.items.forEach(function (item) {
                    sum = Math.abs(+sum + +item.sum)
                })
                console.log(sum)
                this.sum = sum;
            },
            removeFromCart: function (index) {
                console.log('remove')
                this.items.splice(index, 1);
                this.countSum()
            },
            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                if(typeof this.$refs.slick != 'undefined') {
                    this.$refs.slick.reSlick();
                }
            },
            validateEmail: function (email) {
                let re = /\S+@\S+\.\S+/;
                return re.test(email);
            },
            getCities: function (city) {
                let self = this
                self.loading = true
                axios.post('/cart/get-cities', {city: city})
                        .then(function (response) {
                            self.cities = response.data.cities
                            self.loading = false
                        })
                        .catch(function (error) {
                            console.log(error)
                            self.loading = false
                        });
            },
            getWarehouses: function (warehouses) {
                let self = this
                self.loading = true
                axios.post('/cart/get-warehouses', {city: self.order.city.id})
                        .then(function (response) {
                            self.warehouses = response.data.warehouses
                            self.loading = false
                        })
                        .catch(function (error) {
                            console.log(error)
                            self.loading = false
                        });
                console.log(self.warehouses)
            },
            setCity: function (val) {
                if(val) {
                    this.order.city = val
                    let self = this
                    self.getWarehouses()
                    self.loading = true
                    let data = {
                        city: self.order.city.id,
                        weight: self.weight,
                        price: self.sum
                    }
                    axios.post('/cart/get-delivery-price', data)
                            .then(function (response) {
                                console.log(response.data)
                                self.delivery_sum = response.data.cost
                                self.loading = false
                            })
                            .catch(function (error) {
                                console.log(error)
                                self.loading = false
                            });
                }
            },
            setWarehouse: function (val) {
                if(val) {
                    this.order.warehouse = val
                }
            },
            minusQuantity: function (index) {
                this.items[index].quantity--
                this.items[index].sum = Math.abs(this.items[index].price * this.items[index].quantity)
                this.countSum()
            },
            plusQuantity: function (index) {
                this.items[index].quantity++
                this.items[index].sum = Math.abs(this.items[index].price * this.items[index].quantity)
                this.countSum()
            },
            setColor: function (index, color) {
                let self = this
                let changedItem = self.items[index]
                changedItem.color = color

                let merges = []

                for (let i in self.items) {
                    console.log(self.items[index].id)
                    if (self.items[index].id == self.items[i].id && self.items[index].color.id == self.items[i].color.id) {
                        console.log('push merges')
                        merges.push(self.items[i])
                    }
                }

                if (merges.length > 1) {
                    let merged = self.clone(merges[0]);
                    merged.sum = 0
                    merged.quantity = 0
                    for (let i in merges) {
                        console.log('sum merges')
                        merged.sum = Math.abs(parseFloat(merged.sum) + parseFloat(merges[i].sum)).toFixed(2)
                        merged.quantity = Math.abs(merged.quantity + merges[i].quantity)
                    }

                    self.removeDuplicates(merged)
                    self.items.push(merged)
                }

                this.countSum()
            },
            removeDuplicates(changedItem) {
                let self = this
                for (let i2 in self.items) {
                    if (self.items[i2].id == changedItem.id && self.items[i2].color.id == changedItem.color.id) {
                        self.items.splice(i2, 1);
                        self.removeDuplicates(changedItem)
                    }
                }
            },
        }
    }
</script>