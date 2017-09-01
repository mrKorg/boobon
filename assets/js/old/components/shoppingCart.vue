<template>
    <div>
        <div class="header__cart">
            <a href="#" class="eBtn--blue" id="js_header__cart">
                 <span class="text">
                     Корзина
                 </span>
                <span class="icon">
                 <svg width="15" height="18">
                     <use xlink:href="#header-cart"></use>
                 </svg>
            </span>
                <span v-if="count > 0" class="count">
                {{ count }}
            </span>
            </a>
        </div>

        <div class="mCart">
            <div class="mCart__close">
                <a href="#" class="js_mCart__close">
                    <svg width="88" height="88">
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </a>
            </div>
            <div class="mCart__box">
                <h3 class="mCart__title">
                    Корзина <span class="num"> {{ count }} </span>
                </h3>
                <div class="mCart__list" id="js_mCart__list">
                    <div v-for="(item, index) in items" class="mCart__prod">
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
                <div class="mCart__footer">
                    <p class="mCart__total">
                        К оплате: <strong>{{ sum }} {{currency}}</strong>
                    </p>
                    <p class="mCart__btn">
                        <a href="/cart/horizontal-checkout" class="eBtn--pink eBtn--big">
                            Перейти к покупке
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div id="buyOneClick-modal" class="mCartPopup mfp-hide">
            <div v-if="!done">
                <form @submit.prevent="fastCheckout" action="">
                    <div class="mCartPopup__box">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div class="mCartPopup__list" id="js_mCartPopup__list">
                                <div v-for="(item, index) in items" class="mCartPopup__prod">
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
                                                            Ящики <span>(1 = {{ item.box_count }} шт)</span>
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
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="mCartPopup__formBox--border">
                                <h3 class="mCartPopup__title">
                                    Купить в 1 клик
                                </h3>
                                <div class="mCartPopup__formRow">
                                    <div class="row middle-xs">
                                        <div class="col-xs-12 col-md-7">
                                            <input type="tel" name="tel" placeholder="Ваш телефон" v-model="fast.phone" v-bind:class="{ 'hasError': errors['phone'] }">
                                        </div>
                                        <div class="col-xs-12 col-md-5">
                                            <button @click.prevent="fastCheckout" type="submit" class="eBtn--big" v-bind:class="{ 'eBtn--pinkBorder': !loading, 'eBtn--disabled': loading }">Купить</button>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="errors['phone']" class="errorMessageContainer">
                                    <span v-for="error in errors['phone']" class="errorMessage">{{ error }}</span>
                                </div>
                            </div>
                            <div class="mCartPopup__formBox">
                                <h3 class="mCartPopup__title">
                                    <h3 class="mCartPopup__title">
                                        Оформить покупку с выбором вида<br>
                                        доставки и оплаты
                                    </h3>
                                </h3>
                                <div class="mCartPopup__formRow">
                                    <div class="row middle-xs">
                                        <div class="col-xs-12 col-md-6">
                                            <a href="/cart/vertical-checkout" class="eBtn--pink eBtn--big">Оформить</a>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <p class="mCartPopup__link close-popup-link">
                                                <a href="/products">
                                                    Продолжить покупки
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div v-if="done" style="text-align: center">
                <div class="modalMessage__img">
                    <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xlink:href="#boobon-active"></use>
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
                    <p>Быстрый заказ оформлен, <br>
                        наш менеджер свяжется с Вами в ближайшее время</p>
                </div>
                <div class="modalMessage__btn">
                    <a @click.prevent="closeModal" href="#" class="eBtn eBtn--pink eBtn--big">
                        Купить еще!
                    </a>
                </div>
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
                fast: {
                    phone: null,
                },
                errors: [],
                showCart: false,
                loading:false,
                done: false,
                currency: currency,
                sum: 0

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
                        self.loading = false
                    });
        },
        computed: {
          count: function () {
              let count = 0;
              this.items.forEach(function (item) {
                  count = Math.abs(parseFloat(count) + parseFloat(item.quantity))
              })
              return count;
          }
        },
        watch: {
           count: function (val) {
               if (val == 0 && this.done == false) {
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
                               self.loading = false
                           });
               },
               deep: true
           }
        },
        methods: {
            fastCheckout: function () {
                let self = this
                self.loading = true
                let data = {
                    phone: self.fast.phone,
                    price: self.sum,
                    items: self.items
                }
                axios.post('/cart/fast-checkout', data)
                        .then(function (response) {
                            self.items = []
                            self.errors = []
                            self.done = true
                            self.loading = false
                        })
                        .catch(function (error) {
                            self.errors = error.response.data
                            self.loading = false
                        });
            },
            countSum: function () {
                let sum = 0;
                this.items.forEach(function (item) {
                    sum = Math.abs(parseFloat(sum) + parseFloat(item.sum)).toFixed(2)
                })
                this.sum = sum;
            },
            addToCart: function (item) {
                let self = this
                self.done = false

                let cloned = self.clone(item);
                let same = false;

                if(self.items.length > 0) {
                    self.items.forEach(function (product) {
                        console.log('cloned'+cloned.id+'+'+product.id+'color'+product.color.id+'+'+cloned.color.id)
                        if (product.id == cloned.id && product.color.id == cloned.color.id) {
                            product.quantity++
                            product.sum = Math.abs(parseFloat(product.price) * product.quantity).toFixed(2)
                            console.log('push same color')
                            same = true;
                        }
                    })

                    if(!same) {
                            console.log('push not same color')
                            self.items.push(cloned)
                    }

                } else {
                    console.log('first push')
                    self.items.push(cloned)
                }
                this.countSum()
            },
            removeFromCart: function (index) {
                this.items.splice(index, 1);
                this.countSum()
            },
            minusQuantity: function (index) {
                this.items[index].quantity--
                this.items[index].sum = Math.abs(parseFloat(this.items[index].price) * this.items[index].quantity).toFixed(2)
                this.countSum()
            },
            plusQuantity: function (index) {
                this.items[index].quantity++
                this.items[index].sum = Math.abs(parseFloat(this.items[index].price) * this.items[index].quantity).toFixed(2)
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
            closeModal: function () {
                $.magnificPopup.close()
            }, 
            clone: function (source) {
                return Vue.util.extend({}, source)
            },
            removeDuplicates(changedItem) {
                let self = this
                for (let i2 in self.items) {
                    if (self.items[i2].id == changedItem.id && self.items[i2].color.id == changedItem.color.id) {
                        self.items.splice(i2, 1);
                        self.removeDuplicates(changedItem)
                    }
                }
            }
        }
    }
</script>