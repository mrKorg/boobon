<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Оплата и доставка';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pPaymentShipping">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <h3 class="pPaymentShipping__titleSmall">
                        Способы доставки
                    </h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="#modal-payment-shipment-more" class="open-popup-link pPaymentShipping__delivery">
                                <span class="image">
                                    <img src="<?php echo HTTP ?>/assets/images/shipping/npost.jpg" alt="">
                                </span>
                                <span class="text">
                                    Новая почта
                                </span>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="#modal-payment-shipment-more" class="open-popup-link pPaymentShipping__delivery">
                                <span class="image">
                                    <img src="<?php echo HTTP ?>/assets/images/shipping/ukrpost.jpg" alt="">
                                </span>
                                <span class="text">
                                    Укрпочта
                                </span>
                            </a>
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
                                <a href="#modal-payment-shipment-more" class="open-popup-link">
                                    <img src="<?php echo HTTP ?>/assets/images/payment/privat.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#modal-payment-shipment-more" class="open-popup-link">
                                    <img src="<?php echo HTTP ?>/assets/images/payment/master.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#modal-payment-shipment-more" class="open-popup-link">
                                    <img src="<?php echo HTTP ?>/assets/images/payment/visa.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#modal-payment-shipment-more" class="open-popup-link">
                                    <img src="<?php echo HTTP ?>/assets/images/payment/paypal.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>