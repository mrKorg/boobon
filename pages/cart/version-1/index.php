<?php include_once("../../../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Корзина';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pCart1">
        <div class="container">
            <div class="pCart1__topRow">
                <div class="row middle-md">
                    <div class="col-xs-12 col-lg-8">
                        <div class="pCart1__list">
                            <div class="js_pCart1__list noSlider">

                                <?php for ($i=0; $i < 4; $i++) : ?>

                                <div>
                                    <div class="pCart1__prod">
                                        <?php include(ROOT . '/pages/cart/version-1/parts/productPreview.php') ?>
                                    </div>
                                </div>

                                <?php endfor; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="pCart1__totalMoney">
                            <p>
                                К оплате:
                                <strong>
                                    298 874 руб
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
                                <div class="pCart1__step active">
                                    <span class="num">1</span>
                                </div>
                                <div class="pCart1__formBox">
                                    <p class="pCart1__formRow">
                                        <input type="text" name="name" placeholder="Ф.И.О.">
                                    </p>
                                    <p class="pCart1__formRow">
                                        <input type="email" name="email" placeholder="E-mail">
                                    </p>
                                    <p class="pCart1__formRow">
                                        <input type="tel" name="tel" placeholder="Телефон">
                                    </p>
                                </div>
                                <div class="pCart1__formBox">
                                    <h4 class="pCart1__formLabel">
                                        Способ оплаты:
                                    </h4>
                                    <div class="pCart1__formRow pCart1__checkBtns">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="Наличными">
                                                    <span>
                                                        Наличными
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="Наложенный платёж">
                                                    <span>
                                                        Наложенный платёж
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="payment" value="Visa, Mastercard, Paypal">
                                                    <span>
                                                        Visa, Mastercard, Paypal
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                                <div class="pCart1__step">
                                    <span class="num">2</span>
                                </div>
                                <div class="pCart1__formBox ">
                                    <h4 class="pCart1__formLabel">
                                        Способ доставки:
                                    </h4>
                                    <div class="pCart1__formRow pCart1__checkBtns">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="shipment"
                                                           value="Visa, Mastercard, Paypal">
                                                    <span>
                                                        Курьер
                                                    </span>
                                                </label>
                                                <span class="desc">
                                                    50 грн
                                                </span>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="shipment"
                                                           value="Visa, Mastercard, Paypal">
                                                    <span>
                                                        Новая почта
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-4">
                                                <label class="checkBtn js_checkBtn">
                                                    <input type="radio" name="shipment"
                                                           value="Visa, Mastercard, Paypal">
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
                                    <div class="pCart1__formRow">
                                        <input type="text" name="address" placeholder="Адрес доставки">
                                    </div>
                                    <div class="pCart1__formRow">
                                        <textarea name="comment" placeholder="Комментарий"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                                <div class="pCart1__step">
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
                                                298 874 руб
                                            </strong>
                                        </p>
                                        <p class="pCart1__formRow">
                                            <span class="label">
                                                Доставка:
                                            </span>
                                            <strong class="total">
                                                298 874 руб
                                            </strong>
                                        </p>
                                        <p class="pCart1__formRow">
                                            <span class="label">
                                                К оплате:
                                            </span>
                                            <strong class="total">
                                                298 874 руб
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="pCart1__formBox">
                                        <p class="pCart1__check">
                                            <label>
                                                <span class="eCheckBox">
                                                    <input type="checkbox" name="callback">
                                                </span>
                                                Не перезванивать
                                            </label>
                                        </p>
                                        <p class="pCart1__check">
                                            <label>
                                                <span class="eCheckBox">
                                                    <input type="checkbox" name="terms">
                                                </span>
                                                Соглащаюсь с условиями
                                                <a href="#">Публичной оферты</a>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="pCart1__formBox">
                                        <p class="pCart1__btn">
                                            <a href="#" class="eBtn--pink eBtn--big">
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

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>