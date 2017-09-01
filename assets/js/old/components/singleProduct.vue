<template>
    <div>
        <div class="pProduct__header">
            <div class="pProduct__slider">
                <div class="pProductSlider">
                    <div class="js_pProductSlider">
                        <div v-for="(color, index) in item.colors" class="pProductSlider__item" :style="{ background:color.hex }">

                        </div>
                    </div>
                </div>
            </div>
            <div class="pProduct__info">

                <div class="container">
                    <div class="row center-xs end-lg">
                        <div class="col">

                            <div class="pProductInfo">
                                <h1 class="pProductInfo__title">
                                    <span>
                                        {{ item.title }}
                                    </span>
                                    <img  width="194" height="83" v-bind:src="item.home_title_image_url" :alt="item.title">
                                </h1>
                                <p class="pProductInfo__desc">
                                    {{ item.description }}
                                </p>
                                <p class="pProductInfo__colors js_pProductInfo__colors">
                                    <a v-for="(color, index) in item.colors" @click.prevent="setColor(color)" href="#" :style="{ background:color.hex }"
                                       v-bind:class="{ active: color.is_root == true }"
                                    ></a>
                                </p>
                                <!--<div class="pProductInfo__size">-->
                                    <!--<div class="eSizeSelect&#45;&#45;black">-->
                                        <!--<div class="eSizeSelect__val {{&#45;&#45; if isset sizes &#45;&#45;}}eSizeSelect__val&#45;&#45;withDrop{{&#45;&#45; endifs &#45;&#45;}}">-->
                                            <!--<p>Большой</p>-->
                                        <!--</div>-->
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
                                    <!--</div>-->
                                <!--</div>-->
                                <div class="pProductInfo__row">
                                    <p class="pProductInfo__price">
                                        {{ item.price }} {{ currency }}
                                    </p>
                                    <p class="pProductInfo__btn">
                                        <a @click.prevent="addToCart(item, 'regular')" href="#" class="eBtn--pink eBtn--big">
                                            Купить позитив
                                        </a>
                                    </p>
                                </div>
                                <p class="pProductInfo__links">
                                    <a @click.prevent="addToCart(item, 'fast')" href="#buyOneClick-modal" class="pink open-popup-link">
                                        Купить в один клик
                                    </a>
                                    <a href="/payment_and_shipping">
                                        Оплата и доставка
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pProduct__content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-8">
                        <div class="pProductContent">
                            <h3 class="pProductContent__title">
                                <strong>
                                    Мы - производители
                                </strong>
                                и гарантируем что снежколеп BOOBON:
                            </h3>
                            <ul class="pProductContent__list">
                                <li>
                                    <div class="num">
                                        1
                                    </div>
                                    <p>
                                        Изготовлен из качественного пластика АБС,
                                        устойчивого к морозам и механическим
                                        повреждениям
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        2
                                    </div>
                                    <p>
                                        Экологически чистый материал с
                                        использованием безопасных красителей.
                                        Имеется <a href="#">
                                        санитарно-гигиенический
                                        сертификат
                                    </a>
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        3
                                    </div>
                                    <p>
                                        Прост и понятен<br> в использовании даже<br> для
                                        детей до 4х лет
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        4
                                    </div>
                                    <p>
                                        Имеет удобные и прочные ручки, которые
                                        надежно закреплены винтом и не
                                        расшатываются
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        5
                                    </div>
                                    <p>
                                        Упакован в индивидуальную упаковку, что
                                        обеспечивает его защиту при
                                        транспортировке
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        6
                                    </div>
                                    <p>
                                        Два размера:<br> стандартный (для взрослых
                                        и детей) и маленький (для детей до 4-х лет)
                                    </p>
                                </li>
                            </ul>
                            <div class="pProductContent__more">
                                <p>
                                    <span class="num">
                                        7
                                    </span>
                                    Снежколеп <strong>BOOBON</strong> - это больше, чем бездушный пластик,
                                    а значит больше <strong>веселья</strong> и <strong>позитивных эмоций!</strong>
                                    <span class="boobon">
                                        <span class="body">
                                            <svg width="160" height="216">
                                                <use xlink:href="#boobon-kids"></use>
                                            </svg>
                                        </span>
                                        <span class="shadow">
                                            <svg width="92" height="6">
                                                <use xlink:href="#boobon-shadow"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="row between-md middle-md">
                                <div class="col-xs-12 col-lg-6">

                                    <div class="pProductContent__gallery">
                                        <div class="row">
                                            <div v-for="image in item.images" class="col-xs-4">
                                                <a href="#">
                                                    <img :src="image.user_image_url" v-bind:alt="item.title">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">

                                    <div class="pProductContent__box">
                                        <p class="pProductContent__price">
                                            {{ item.price }} {{ currency }}
                                        </p>
                                        <p class="pProductContent__btn">
                                            <a @click.prevent="addToCart(item, 'regular')" href="#" class="eBtn--pink eBtn--big">
                                                Купить позитив
                                            </a>
                                        </p>
                                        <div class="pProductContent__link">
                                            <a @click.prevent="addToCart(item, 'fast')" href="#buyOneClick-modal" class="pink open-popup-link">
                                                Купить в 1 клик
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4 first-lg">

                        <div class="pProductSize standart">
                            <p class="pProductSize__nav">
                                <a href="#" class="active" data-size="standart">
                                    Стандарт
                                </a>
                                <a href="#" data-size="small">
                                    Маленький
                                </a>
                            </p>
                            <div class="pProductSize__head">
                                <p class="pProductSize__size">
                                    <span class="js_size" data-standart="100 мм" data-small="50 мм">
                                        100 мм
                                    </span>
                                </p>
                                <img src="/images/products/snowboll-faceted.png" alt="">
                                <!--<img src="images/products/snowboll-smooth.png" alt="">-->
                                <p class="label">
                                    Идеальная
                                    граненая
                                    снежка
                                </p>
                            </div>
                            <div class="pProductSize__body">
                                <p class="pProductSize__size">
                                    <span class="js_size" data-standart="500 мм" data-small="350 мм">
                                        500 мм
                                    </span>
                                </p>
                                <img src="/images/products/preview.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home single product mounted.');
        },
        components: { Slick },
        data: function() {
            return{
                item: product,
                loading:false

            }
        },
        methods: {
            addToCart: function (item) {
                eventHub.$emit('add-to-cart', item)
            },
            setColor: function (color) {
                this.item.color = color
            },
        }
    }
</script>