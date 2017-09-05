<?php include_once("../../../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Корзина';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pCart2">
        <div class="container">
            <div class="pCart2__box">
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        <h2 class="pCart2__title">
                            Состав заказа
                        </h2>
                        <div class="pCart2__list js_scroll">

                            <?php for ($i = 0; $i < 4; $i++) : ?>

                                <div class="pCart2__prod">
                                    <?php include(ROOT . '/pages/cart/version-2/parts/productPreview.php') ?>
                                </div>

                            <?php endfor; ?>

                        </div>
                        <div class="pCart2__formBox">
                            <p class="pCart2__total">
                                <span class="label">
                                    Сумма:
                                </span>
                                <strong class="total">
                                    345 752 руб
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-7">
                        <h2 class="pCart2__title">
                            Ваши данные
                        </h2>
                        <div class="pCart2__formBox--border">
                            <p class="pCart2__formRow">
                                <input type="text" name="name" placeholder="Ф.И.О.">
                            </p>
                            <p class="pCart2__formRow">
                                <input type="email" name="email" placeholder="E-mail">
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-7">
                                    <p class="pCart2__formRow">
                                        <input type="tel" name="tel" placeholder="Телефон">
                                    </p>
                                </div>
                                <div class="col-xs-12 col-md-5">
                                    <p class="pCart2__btnFast">
                                        <a href="#" class="eBtn eBtn--pink eBtn--big">
                                            Быстрый заказ
                                        </a>
                                        <span class="desc">
                                            Заказ отправится сразу в обработку, а все детали вы оговорите с менеджером.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pCart2__formBox--border">
                            <h4 class="pCart2__formLabel">
                                На кого оформляется заказ?
                            </h4>
                            <div class="pCart2__formRow">
                                <p class="pCart2__radio">
                                    <label>
                                        <span class="eRadioBox">
                                            <input type="radio" name="who" value="">
                                        </span>
                                        На себя
                                    </label>
                                    <label>
                                        <span class="eRadioBox">
                                            <input type="radio" name="who" value="">
                                        </span>
                                        На другое лицо
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="pCart2__formBox--border">
                            <h4 class="pCart2__formLabel">
                                Ваш город?
                            </h4>
                            <div class="pCart2__formRow">
                                <select name="" id="" class="dropdown" data-settings='{"cutOff": 8}'>
                                    <option value="">Выберите город</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                    <option value="">Днепр</option>
                                    <option value="">Харьков</option>
                                    <option value="">Киев</option>
                                </select>
                            </div>
                        </div>
                        <div class="pCart2__formBox--border">
                            <h4 class="pCart2__formLabel">
                                Оплата
                            </h4>
                            <div class="pCart2__formRow">
                                <p class="pCart2__radio">
                                    <label>
                                        <span class="eRadioBox">
                                            <input type="radio" name="payment" value="">
                                        </span>
                                        Наличными
                                    </label>
                                    <label>
                                        <span class="eRadioBox">
                                            <input type="radio" name="payment" value="">
                                        </span>
                                        Наложенный платеж
                                    </label>
                                    <label>
                                        <span class="eRadioBox">
                                            <input type="radio" name="payment" value="">
                                        </span>
                                        Visa, Mastercard, PayPal
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="pCart2__formBox">
                            <h4 class="pCart2__formLabel">
                                Комментарий к заказу
                            </h4>
                            <div class="pCart2__formRow">
                                <textarea name="comment" placeholder="Комментарий"></textarea>
                            </div>
                        </div>
                        <div class="pCart2__formBox--check">
                            <p class="pCart2__check">
                                <label>
                                    <span class="eCheckBox">
                                        <input type="checkbox" name="callback">
                                    </span>
                                    Не перезванивать
                                </label>
                            </p>
                            <p class="pCart2__check">
                                <label>
                                    <span class="eCheckBox">
                                        <input type="checkbox" name="terms">
                                    </span>
                                    Соглащаюсь с условиями
                                    <a href="#">Публичной оферты</a>
                                </label>
                            </p>
                        </div>
                        <div class="pCart2__formBox">
                            <p class="pCart2__total">
                                <span class="label">
                                    К оплате:
                                </span>
                                <strong class="total">
                                    345 752 руб
                                </strong>
                            </p>
                        </div>
                        <div class="pCart2__btn">
                            <a href="#" class="eBtn--pink eBtn--big">
                                Оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>