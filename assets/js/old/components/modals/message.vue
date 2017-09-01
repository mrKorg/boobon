<template>
    <div>
        <transition name="isModalShow">
            <div v-if="isModalShow" @click="closeModal()" class="mfp-bg mfp-fade mfp-ready"></div>
        </transition>
        <transition name="isModalShow">
            <div v-if="isModalShow"  class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1"
                 style="overflow-x: hidden; overflow-y: auto;">
                <div v-on:click.self="closeModal()" class="mfp-container mfp-s-ready mfp-inline-holder">
                    <div v-on:click.self="closeModal()" class="mfp-content">
                        <div id="modal-message" class="mPopup--md">

                            <div class="pPopup__content">
                                <div v-if="type == 'error'" class="modalMessage">
                                    <div class="modalMessage__img">
                                        <svg width="190" height="190">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gadget"></use>
                                        </svg>
                                    </div>
                                    <div class="modalMessage__text">
                                        <p>К сожалению оплата не прошла.</p>
                                        <p>Что-то пошло не так</p>
                                    </div>
                                    <div class="modalMessage__btn">
                                        <a @click.prevent="closeModal()" href="#" class="eBtn eBtn--pink eBtn--big">
                                            Попробовать снова
                                        </a>
                                    </div>
                                </div>
                                <div v-if="type == 'subscribe'" class="modalMessage">
                                    <div class="modalMessage__img">
                                        <p class="image">
                                            <span class="body">
                                                <svg width="178" height="226">
                                                    <use xlink:href="#boobon-kids"></use>
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
                                        <p>Ура! Теперь вы будете получать полезные<br>
                                            письма от Бубона!</p>
                                    </div>
                                    <div class="modalMessage__btn">
                                        <a @click="closeModal()" href="#" class="eBtn eBtn--pink eBtn--big">
                                            Хорошо
                                        </a>
                                    </div>
                                </div>
                                <div v-if="type == 'review'" class="modalMessage">
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
                                        <p>Спасибо за то, что помогаете нам становиться лучше,<br>
                                            скоро ваш отзыв будет опубликован на сайте</p>
                                    </div>
                                    <div class="modalMessage__btn">
                                        <a @click="closeModal()" href="#" class="eBtn eBtn--pink eBtn--big">
                                            Хорошо
                                        </a>
                                    </div>
                                </div>
                                <div v-if="type == 'buy'" class="modalMessage">
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
                                        <p>Спасибо за то, что купили наши товары, <br>
                                            наш менеджер свяжется с Вами в ближайшее время</p>
                                    </div>
                                    <div class="modalMessage__btn">
                                        <a @click.prevent="closeModal()" href="#" class="eBtn eBtn--pink eBtn--big">
                                            Попробовать снова
                                        </a>
                                    </div>
                                </div>
                                <div v-if="type == 'callback'" class="modalMessage">
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
                                        <a @click.prevent="closeModal()" href="#" class="eBtn eBtn--pink eBtn--big">
                                            Хорошо
                                        </a>
                                    </div>

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
        props: ['type', 'isModalShow', 'url'],
        data: function () {
            return {
                url: null,
                isModalShow: false
            }
        },
        mounted: function () {
            this.showModal();
        },
        methods: {
            showModal: function () {
                this.isModalShow = true;
                document.getElementsByTagName('html')[0].classList.add('openModal');
            },
            closeModal: function () {
                console.log(this.url)
                if (!this.url) {
                    this.isModalShow = false;
                    document.getElementsByTagName('html')[0].classList.remove('openModal');
                } else {
                    window.location.href = this.url
                }
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