<div id="buyOneClick-modal" class="mCartPopup mfp-hide">
    <form action="">
        <div class="mCartPopup__box">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <div class="mCartPopup__list" id="js_mCartPopup__list">

                        @for ($i=1; $i<5; $i++)

                            <div class="mCartPopup__prod">
                                @include('front.pages.cart.version-2.parts.productPreview')
                            </div>

                        @endfor

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
                                    <input type="tel" name="tel" placeholder="Ваш телефон">
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <button type="submit" class="eBtn--pinkBorder eBtn--big">Купить</button>
                                </div>
                            </div>
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
                                    <button type="submit" class="eBtn--pink eBtn--big">Оформить</button>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <p class="mCartPopup__link">
                                        <a href="#">
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