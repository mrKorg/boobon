/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Slick = require('vue-slick');
window.Scroll = require('perfect-scrollbar');
window.Magnific = require('magnific-popup');
window.VueGoogleMap = require('vue2-google-maps');
window.VueSelect = require('vue-select');
window.AOS = require('aos');

Vue.config.devtools = true;
Vue.config.debug = true;
Vue.config.silent = true;

window.eventHub = new Vue();

Vue.component('vue-shops-map', require('./components/shopsMap.vue'));
Vue.component('vue-contacts-map', require('./components/contactsMap.vue'));
Vue.component('vue-home-slider', require('./components/homeSlider.vue'));
Vue.component('vue-contact-form', require('./components/contactForm.vue'));
Vue.component('vue-subscribe-form', require('./components/subscribeForm.vue'));
Vue.component('vue-subscribe-form-in-blog', require('./components/subscribeFormInBlog.vue'));
Vue.component('vue-shopping-cart', require('./components/shoppingCart.vue'));
Vue.component('vue-block-products', require('./components/blockProducts.vue'));
Vue.component('vue-single-product', require('./components/singleProduct.vue'));
Vue.component('vue-home-products', require('./components/homeProducts.vue'));
Vue.component('vue-page-products', require('./components/pageProducts.vue'));
Vue.component('vue-page-product', require('./components/pageProduct.vue'));

Vue.component('vue-horizontal-checkout', require('./components/horizontalCheckout.vue'));
Vue.component('vue-vertical-checkout', require('./components/verticalCheckout.vue'));

Vue.component('vue-add-review', require('./components/addReview.vue'));

Vue.component('vue-partner-modal', require('./components/modals/partner.vue'));
Vue.component('vue-message-modal', require('./components/modals/message.vue'));
Vue.component('vue-content-modal', require('./components/modals/content.vue'));

Vue.component('vue-wholesale-customers-who', require('./components/wholesale-customers-who.vue'));
Vue.component('vue-payment-shipping-page', require('./components/payment-shipping-page.vue'));

Vue.component('v-select', VueSelect.VueSelect);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const front = new Vue({
    el: '#front',
    data: {
        item: null
    }
});


// Scroll Bar
let js_mCart__list = document.getElementById('js_mCart__list');
if (js_mCart__list) {
    Scroll.initialize(js_mCart__list, {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}
let js_pCart2__list = document.getElementById('js_pCart2__list');
if (js_pCart2__list) {
    Scroll.initialize(js_pCart2__list, {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}
let js_mCartPopup__list = document.getElementById('js_mCartPopup__list');
if (js_mCartPopup__list) {
    Scroll.initialize(js_mCartPopup__list, {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}
let js_payment_shipment__scroll = document.getElementsByClassName('js_payment-shipment__scroll');
for (let i = 0; i < js_payment_shipment__scroll.length; i++) {
    Scroll.initialize(js_payment_shipment__scroll[i], {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}
let js_eReview__content = document.getElementsByClassName('js_eReview__content');
for (let i = 0; i < js_eReview__content.length; i++) {
    Scroll.initialize(js_eReview__content[i], {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}
let js_eCustomSelect__scroll = document.getElementsByClassName('js_eCustomSelect__scroll');
for (let i = 0; i < js_eCustomSelect__scroll.length; i++) {
    Scroll.initialize(js_eCustomSelect__scroll[i], {
        maxScrollbarLength: 18,
        suppressScrollX: true
    });
}

// Show SidePanel Cart
let body = document.getElementsByTagName('body')[0];
let headerCartBtn = document.getElementById('js_header__cart');
if(headerCartBtn) {
    headerCartBtn.onclick = function (e) {
        body.className += ' openSidePanelCart';
        e.preventDefault();
    };
}
let shadowForClose = document.getElementsByClassName('js_wrapper__bg'),
    cartForClose = document.getElementsByClassName('js_mCart__close'),
    closeModalElements = [].concat(Array.prototype.slice.call(shadowForClose), Array.prototype.slice.call(cartForClose));
for (let key = 0; key < closeModalElements.length; key++) {
    if (closeModalElements.hasOwnProperty(key)) {
        closeModalElements[key].onclick = function (e) {
            body.classList.remove('openSidePanelCart');
            e.preventDefault();
        }
    }
}

// Check method
let methodBtns = document.getElementsByClassName('js_checkBtn');
for (let key = 0; key < methodBtns.length; key++) {
    if (methodBtns.hasOwnProperty(key)) {
        let input = methodBtns[key].children[0];
        if (input.checked) methodBtns[key].className += 'active';
        input.onchange = function (e) {
            let other = document.getElementsByName(input.getAttribute('name'));
            for (let i = 0; i < other.length; i++) {
                if (other.hasOwnProperty(i)) other[i].parentNode.classList.remove('active');
            }
            (input.checked) ? this.parentNode.classList.add('active') : this.parentNode.classList.remove('active');
        }
    }
}


// Custom Checkbox
let checkBoxes = document.getElementsByClassName('eCheckBox');
for (let key = 0; key < checkBoxes.length; key++) {
    if (checkBoxes.hasOwnProperty(key)) {
        let input = checkBoxes[key].children[0];
        if (input.checked) checkBoxes[key].className += 'active';
        input.onclick = function (e) {
            this.parentNode.classList.toggle('active');
        }
    }
}


// // Custom Checkbox
// let radioBoxes = document.getElementsByClassName('eRadioBox');
// for (let key = 0; key < radioBoxes.length; key++) {
//     if (radioBoxes.hasOwnProperty(key)) {
//         let input = radioBoxes[key].children[0];
//         if (input.checked) radioBoxes[key].className += 'active';
//         input.onclick = function (e) {
//             this.parentNode.classList.toggle('active');
//         };
//         input.onchange = function (e) {
//             let other = document.getElementsByName(input.getAttribute('name'));
//             for (let i = 0; i < other.length; i++) {
//                 if (other.hasOwnProperty(i)) other[i].parentNode.classList.remove('active');
//             }
//             (input.checked) ? this.parentNode.classList.add('active') : this.parentNode.classList.remove('active');
//         }
//     }
// }


$(window).on('load', function () {
    AOS.refresh();
});

$(document).ready(function () {

    "use strict";

    // Reset on resize
    let windowWidth = $(window).width();
    $(window).resize(function () {
        if (windowWidth != $(window).width()) {
            $('body').removeClass('openMenu openMenuDesktop');
            setProductSliderHeight();
        }
    });

    // AOS
    AOS.init();

    // Sticky
    let header = $('.header');
    let wrapper = $('.wrapper');
    let scrollOffset = 100;
    let isEnableFixedHeader = false;

    function enableFixedHeader() {
        isEnableFixedHeader = ($(window).height() + header.innerHeight() * 2 + scrollOffset) < wrapper.innerHeight();
    }

    enableFixedHeader();

    $(window).resize(function () {
        setTimeout(function () {
            enableFixedHeader()
        }, 1000);
    });

    $(window).scroll(function () {
        if (isEnableFixedHeader) {
            if ($(window).scrollTop() > (header.height() + scrollOffset)) {
                header.addClass('fixed');
            } else {
                header.removeClass('fixed');
                $('body').removeClass('openMenuDesktop');
            }
        }
    });


    // Menu
    $('.js_menuBtn').on('click', function (e) {
        $('body').toggleClass('openMenu');
        e.preventDefault();
    });
    $('.js_menuBtnDesktop').on('click', function (e) {
        $('body').toggleClass('openMenuDesktop');
        e.preventDefault();
    });

    // Main slider
    $('.js_mainSlider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        asNavFor: '.js_mainSliderSmall'
    });
    $('.js_mainSliderSmall').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        asNavFor: '.js_mainSlider',
    });
    $('.js_mainSlider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        if(window.matchMedia('(min-width: 1200px)').matches) {
            $('.js_mainSlider').find('.slick-dots').css({
                'transform': 'translateX(-' + (currentSlide * (40 + 18)) + 'px)'
            });
        } else {
            $('.js_mainSlider').find('.slick-dots').css({
                'transform': 'translateX(0px)'
            });
        }
    });
    $(window).resize(function () {
        if(window.matchMedia('(min-width: 1200px)').matches) {
            let currentSlide = $('.js_mainSlider').slick('slickCurrentSlide');
            console.log(currentSlide);
            $('.js_mainSlider').find('.slick-dots').css({
                'transform': 'translateX(-' + (currentSlide * (40 + 18)) + 'px)'
            });
        } else {
            $('.js_mainSlider').find('.slick-dots').css({
                'transform': 'translateX(0px)'
            });
        }
    });

    // Home Blog slider
    $('.js_mainBlog__slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    // Shops slider
    $('.js_mainShops').slick({
        autoplay: true,
        autoplaySpeed: 7000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    // Quote slider
    $('.js_quoteSlider').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // Product head slider
    let productSlider = $('.js_pProductSlider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: false,
        autoplaySpeed: 2000
    });
    $('.js_pProductInfo__colors').on('click', 'a', function (e) {
        $('.js_pProductInfo__colors a').not(this).removeClass('active');
        $(this).addClass('active');
        $('#productColor').val($(this).data('color'));
        productSlider.slick('slickGoTo', $(this).index());
        e.preventDefault();
    });
    function setProductSliderHeight() {
        $('.pProductSlider__item').height($('.pProduct__slider').height());
    }

    setProductSliderHeight();

    // Other products
    $('.js_otherProducts__slider').slick({
        autoplay: false,
        autoplaySpeed: 7000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: false,
        variableWidth: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false
                }
            }
        ]
    });

    // Product preview slider
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

    // Product size demo
    $('.pProductSize__nav a').on('click', function (e) {
        $('.pProductSize__nav a').not($(this)).removeClass('active')
        $('.pProductSize').removeClass('standart small');
        $(this).addClass('active');
        let className = $(this).data('size');
        $('.pProductSize').addClass(className);
        $('.js_size').each(function () {
            $(this).text($(this).data(className));
        });
        e.preventDefault();
    });

    // Shops slider
    if ($('.pCart1__prod').length > 2) {
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

    // Modals
    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    $(document).on('click', '.close-popup-link', function () {
        $.magnificPopup.close()
    });

    $('#showCartModal').magnificPopup({
        callbacks: {
            open: function () {
                Scroll.update(js_mCartPopup__list);
            }
        }
    });



});