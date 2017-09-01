<template>
    <div class="eProductPreview">
        <div class="eProductPreview__slider">
            <div class="js_eProductPreview__slider">
                <div v-for="image in item.images">
                    <div class="eProductPreview__item">
                        <img :src="image.home_image_url" :alt="item.title">
                    </div>
                </div>
            </div>
        </div>
        <div class="eProductPreview__info">
            <h2 class="eProductPreview__title">
                {{ item.title }}
            </h2>
            <a v-bind:href="item.url" class="eProductPreview__image">
            <span class="body">
                <!--<svg width="178" height="226">-->
                    <!--<use xlink:href="#boobon-active"></use>-->
                <!--</svg>-->
                <img v-bind:src="item.home_image_url" :alt="item.title">
            </span>
                <span class="shadow">
                <svg width="92" height="6">
                    <use xlink:href="#boobon-shadow"></use>
                </svg>
            </span>
                <span class="title">
                <!--<svg width="194" height="83">-->
                    <!--<use xlink:href="#boobon-active-title"></use>-->
                <!--</svg>-->
                <svg width="194" height="39">
                    <use xlink:href="#boobon-title"></use>
                </svg>
                <img v-bind:src="item.home_title_image_url" :alt="item.title">
            </span>
            </a>
            <p class="eProductPreview__price">
                {{ item.price }} {{ currency }}
            </p>
            <p class="eProductPreview__btn">
                <a v-bind:href="item.url" class="eBtn--pink">
                    Купить
                </a>
            </p>
        </div>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home page product mounted.');
            this.$nextTick(function () {
                $('.js_eProductPreview__slider').each(function () {
                    let slider = $(this).slick({
                        dots: false,
                        arrows: false,
                        infinite: true,
                        speed: 500,
                        fade: true,
                        autoplay: false,
                        autoplaySpeed: 2000
                    });
                    if (window.matchMedia('(min-width: 1200px)').matches) {
                        $(this).hover(
                                function () {
                                    slider.slick('slickNext');
                                    slider.slick('slickPlay');
                                }, function () {
                                    slider.slick('slickPause');
                                }
                        );
                    } else {
                        $(this).on('click', function () {
                            slider.slick('slickNext');
                        })
                    }
                });
                console.log('Home page product updated.');
            })
        },
        components: { Slick },
        props: ['item'],
        methods: {
        }
    }
</script>