<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Оплата и доставка';
include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/pageHeader.php') ?>

    <div class="pPaymentShipping">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <h3 class="pPaymentShipping__titleSmall">
                        Способы доставки
                    </h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <p class="pPaymentShipping__delivery">
                                <span class="image">
                                    <img src="/assets/images/shipping/npost.jpg" alt="">
                                </span>
                                <span class="text">
                                    Новая почта
                                </span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <p class="pPaymentShipping__delivery">
                                <span class="image">
                                    <img src="/assets/images/shipping/ukrpost.jpg" alt="">
                                </span>
                                <span class="text">
                                    Укрпочта
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">

                    <div class="pPaymentShipping__payment">
                        <h3 class="pPaymentShipping__titleBig">
                            Способы оплаты
                        </h3>
                        <ul>
                            <li>
                                <img src="/assets/images/payment/privat.jpg" alt="">
                            </li>
                            <li>
                                <img src="/assets/images/payment/master.jpg" alt="">
                            </li>
                            <li>
                                <img src="/assets/images/payment/visa.jpg" alt="">
                            </li>
                            <li>
                                <img src="/assets/images/payment/paypal.jpg" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutBottom.php') ?>