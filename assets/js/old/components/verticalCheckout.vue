<template>
    <div class="pCart2">
        <vue-message-modal v-if="showMessage" :type="messageType" url="/products"></vue-message-modal>
        <div class="container">
            <form @submit.prevent="storeFullOrder" action="">
                <div class="pCart2__box">
                        <div class="row">
                                <div class="col-xs-12 col-lg-5">
                                    <h2 class="pCart2__title">
                                        Состав заказа
                                    </h2>
                                    <div  class="pCart2__list" id="js_pCart2__list">
                                        <div v-for="(item, index) in items" class="pCart2__prod">
                                            <div class="eProductCart2">
                                                <div class="eProductCart2__body">
                                                    <div class="eProductCart2__delete">
                                                        <a href="#" @click.prevent="removeFromCart(index)">
                                                            <svg width="28" height="28">
                                                                <use xlink:href="#icon-close"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="row middle-xs">
                                                        <div class="col-xs-4">
                                                            <a v-bind:href="item.url" class="eProductCart2__image">
                                                                <img src="/images/products/preview.png" v-bind:alt="item.title">
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <a href="" class="eProductCart2__title">
                                                                Снежколеп
                                                                <strong>
                                                                    {{ item.title }}
                                                                </strong>
                                                            </a>
                                                            <!--<p class="eProductCart2__size">-->
                                                            <!--<a href="#" class="item active">-->
                                                            <!--Большой-->
                                                            <!--</a>-->
                                                            <!--{{&#45;&#45;  if isset small size &#45;&#45;}}-->
                                                            <!--<a href="#" class="item">-->
                                                            <!--Маленький-->
                                                            <!--</a>-->
                                                            <!--{{&#45;&#45;  endif &#45;&#45;}}-->
                                                            <!--</p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eProductCart2__footer">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span class="label">
                                                                    <strong v-if="item.is_box == true">
                                                                        Ящики <span>(1 = 50 шт)</span>
                                                                    </strong>
                                                                    <span v-if="item.is_box == false">
                                                                        Количетсво:
                                                                    </span>
                                                            </span>
                                                            <div class="eQtySelect eQtySelect--black ">
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
                                                        <div class="col">
                                                                <span class="label">
                                                                    Цвет:
                                                                </span>
                                                            <div class="eColorSelect eColorSelect--black">
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
                                                        <div class="col">
                                                            <p class="eProductCart2__price">
                                                                    <span class="label">
                                                                        Стоимость:
                                                                    </span>
                                                                <strong class="price">
                                                                    {{item.sum}}  {{currency}}
                                                                </strong>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div v-if="item.is_box == true" class="row middle-xs">
                                                        <div class="col">
                                                            <p class="text"><strong>Ваша скидка = 31%</strong></p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="text">Чтобы получить скидку 23%,<br>
                                                                купите еще 3 ящика</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pCart2__formBox">
                                        <p class="pCart2__total">
                                            <span class="label">
                                                Сумма:
                                            </span>
                                            <strong class="total">
                                                {{ total_sum }} {{ currency }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-7">
                                    <div>
                                        <h2 class="pCart2__title">
                                            Ваши данные
                                        </h2>
                                        <div class="pCart2__formBox--border">
                                            <p class="pCart2__formRow">
                                                <input type="text" name="name" placeholder="Ф.И.О." v-model="order.name" v-bind:class="{ 'hasError': errors['name'] }">
                                            </p>
                                            <div v-if="errors['name']" class="errorMessageContainer">
                                                <span v-for="error in errors['name']" class="errorMessage">{{ error }}</span>
                                            </div>
                                            <p class="pCart2__formRow">
                                                <input type="email" name="email" placeholder="E-mail" v-model="order.email" v-bind:class="{ 'hasError': errors['email'] }">
                                            </p>
                                            <div v-if="errors['email']" class="errorMessageContainer">
                                                <span v-for="error in errors['email']" class="errorMessage">{{ error }}</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-7">
                                                    <p class="pCart2__formRow">
                                                        <input type="tel" name="tel" placeholder="Телефон" v-model="order.phone" v-bind:class="{ 'hasError': errors['phone'] }">
                                                    </p>
                                                    <div v-if="errors['phone']" class="errorMessageContainer">
                                                        <span v-for="error in errors['phone']" class="errorMessage">{{ error }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-5">
                                                    <p class="pCart2__btnFast">
                                                        <a  @click.prevent="fastCheckout" href="#" class="eBtn eBtn--big" v-bind:class="{ 'eBtn--pink': !loading, 'eBtn--disabled': loading }">
                                                            Быстрый заказ
                                                        </a>
                                                        <span class="desc">
                                                        Заказ отправится сразу в обработку, а все детали вы оговорите с менеджером.
                                                    </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pCart2__formBox--border">
                                        <h4 class="pCart2__formLabel">
                                            На кого оформляется заказ?
                                        </h4>
                                        <div class="pCart2__formRow">
                                            <p class="pCart2__radio">
                                                <label for="one">
                                                    <span class="eRadioBox" v-bind:class="{'active': (order.is_gift == false || order.is_gift == 'false'), 'hasError': errors['is_gift']}">
                                                        <input type="radio" id="one" v-model="order.is_gift" value="false" checked>
                                                    </span>
                                                    На себя
                                                </label>
                                                <label for="two">
                                                    <span class="eRadioBox" v-bind:class="{'active': (order.is_gift == true || order.is_gift == 'true'), 'hasError': errors['is_gift']}">
                                                        <input type="radio" id="two" v-model="order.is_gift" value="true" >
                                                    </span>
                                                    На другое лицо
                                                </label>
                                            </p>
                                            <div v-if="errors['is_gift']" class="errorMessageContainer">
                                                <span v-for="error in errors['is_gift']" class="errorMessage">{{ error }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pCart2__formBox--border">
                                        <h4 class="pCart2__formLabel">
                                            Оплата
                                        </h4>
                                        <div class="pCart2__formRow">
                                            <p class="pCart2__radio">
                                                <label>
                                                    <span class="eRadioBox" v-bind:class="{'active': order.payment == 'wayforpay'}">
                                                        <input type="radio" name="payment" value="wayforpay" v-model="order.payment" checked>
                                                    </span>
                                                    Visa, Mastercard, PayPal
                                                </label>
                                                <label>
                                                    <span class="eRadioBox" v-bind:class="{'active': order.payment == 'cash'}">
                                                        <input type="radio" name="payment" value="cash" v-model="order.payment">
                                                    </span>
                                                    Наличными
                                                </label>
                                                <label>
                                                    <span class="eRadioBox" v-bind:class="{'active': order.payment == 'cod'}">
                                                        <input type="radio" name="payment" value="cod" v-model="order.payment">
                                                    </span>
                                                    Наложенный платеж
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div v-if="order.payment == 'cod' || order.payment == 'wayforpay'" class="pCart2__formBox--border">
                                        <h4 class="pCart2__formLabel">
                                            Ваш город?
                                        </h4>
                                        <div class="pCart2__formRow">
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
                                                            :on-change="setWarehouse"
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
                                    </div>
                                    <div class="pCart2__formBox">
                                        <h4 class="pCart2__formLabel">
                                            Комментарий к заказу
                                        </h4>
                                        <div class="pCart2__formRow">
                                            <textarea name="comment" placeholder="Комментарий" v-model="order.comment" v-bind:class="{'hasError': errors['comment']}"></textarea>
                                        </div>
                                        <div v-if="errors['comment']" class="errorMessageContainer">
                                            <span v-for="error in errors['comment']" class="errorMessage">{{ error }}</span>
                                        </div>
                                    </div>

                                    <div class="pCart2__formBox--check">
                                        <p class="pCart2__check">
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
                                        <p class="pCart2__check">
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

                                    <div class="pCart2__formBox">
                                        <p class="pCart2__total">
                                            <span class="label">
                                                К оплате:
                                            </span>
                                            <strong class="total">
                                                {{ total_sum }} {{ currency }}
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="pCart2__btn">
                                        <a @click.prevent="storeFullOrder" href="#" class="eBtn--pink eBtn--big">
                                            Оформить заказ
                                        </a>
                                    </div>
                                </div>
                        </div>
                </div>
            </form>
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
                    payment: 'wayforpay',
                    method: 'newpost',
                    address: '',
                    city: '',
                    warehouse: '',
                    is_gift: false,
                    comment: null,
                    callback: false,
                    terms: false,
                },
                errors: [],
                currency: currency,
                sum: 0,
                delivery_sum: 0,
                showCart: false,
                loading:false,
                cities: [],
                warehouses: [],
                showMessage: false,
                messageType: 'buy',
                wayforpay: wayforpay,

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
                            self.countSum()
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
            items: {
                handler: function (after, before) {
                    let self = this
//                    self.loading = true
                    axios.post('/cart/store', {cart: self.items})
                            .then(function (response) {
//                                self.loading = false
                            })
                            .catch(function (error) {
                                console.log(error)
//                                self.loading = false
                            });
                },
                deep: true
            },
        },
        methods: {
            storeFullOrder: function () {
                let self = this
                self.loading = true
                let data = {
                    name: self.order.name,
                    email: self.order.email,
                    phone: self.order.phone,
                    price: self.sum,
                    items: self.items,
                    payment: self.order.payment,
                    method: self.order.method,
                    address: self.order.city.label +', '+ self.order.warehouse.label,
                    city: self.order.city,
                    warehouse: self.order.warehouse,
                    is_gift: self.order.is_gift,
                    comment: self.order.comment,
                    callback: self.order.callback,
                    terms: self.order.terms,
                }
                axios.post('/cart/full-checkout', data)
                        .then(function (response) {
                            self.pay()

                        })
                        .catch(function (error) {
                            self.errors = error.response.data
                            self.loading = false
                        });
            },
            fastCheckout: function () {
                let self = this
                self.loading = true
                let data = {
                    name: self.order.name,
                    email: self.order.email,
                    phone: self.order.phone,
                    price: self.sum,
                    items: self.items
                }
                axios.post('/cart/fast-checkout-two', data)
                        .then(function (response) {
                            self.order = {
                                name: null,
                                phone: null,
                                email: null,
                                payment: 'wayforpay',
                                method: 'newpost',
                                address: '',
                                city: '',
                                warehouse: '',
                                is_gift: false,
                                comment: null,
                                callback: false,
                                terms: false,
                            }
                            self.sum = 0
                            self.items = []
                            self.errors = []
                            self.loading = false
                            self.showMessage = true
                        })
                        .catch(function (error) {
                            self.errors = error.response.data
                            self.loading = false
                        });
            },
            addToCart: function (item, type) {
                this.items.push(item)
                this.countSum()

            },
            countSum: function () {
                let sum = 0;
                this.items.forEach(function (item) {
                    sum = Math.abs(+sum + +item.sum)
                })
                this.sum = sum;
            },
            removeFromCart: function (index) {
                console.log('remove')
                this.items.splice(index, 1);
                this.countSum()
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
                console.log('fire')
                if(val) {
                    this.order.warehouse = val
                }
            },
            pay: function () {
                var self = this
                self.wayforpay.run({
                            merchantAccount : "uasnow_pavlov_od_ua",
                            merchantDomainName : "uasnow.dev",
                            authorizationType : "SimpleSignature",
                            requestType: "VERIFY",
                            merchantSignature : "08aa632bc06d9a46040c075723ae978fa0357e9f",
                            clientFirstName : "Вася",
                            clientLastName : "Васечкин",
                            clientEmail : "some@mail.com",
                            clientPhone: "380631234567"
                        },
                        function (response) {
                            console.log(response)
                            self.order = {
                                name: null,
                                phone: null,
                                email: null,
                                payment: 'wayforpay',
                                method: 'newpost',
                                address: '',
                                city: '',
                                warehouse: '',
                                is_gift: false,
                                comment: null,
                                callback: false,
                                terms: false,
                            }
                            self.sum = 0
                            self.items = []
                            self.errors = []
                            self.loading = false
                            self.showMessage = true;
                        },
                        function (response) {
                            console.log('declined')
                        },
                        function (response) {
                            console.log('processing')
                        }
                );
            }
        }
    }
</script>