<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Тестовая страница';
include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/pageHeader.php') ?>

    <div class="container">
        <h3>
            Modals
        </h3>
        <a href="#modal-offer" class="open-popup-link">modal-offer</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-offer.php') ?>
        <a href="#modal-addReview" class="open-popup-link">modal-addReview</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-addReview.php') ?>
        <a href="#modal-payment-shipment" class="open-popup-link">modal-payment-shipment</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-payment-shipment.php') ?>
        <a href="#modal-payment-shipment-more" class="open-popup-link">modal-payment-shipment-more</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-payment-shipment-more.php') ?>
        <a href="#modal-message" class="open-popup-link">modal-message</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-message.php') ?>
        <a href="#modal-login" class="open-popup-link">modal-login</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-login.php') ?>
        <a href="#modal-partner" class="open-popup-link">modal-partner</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-partner.php') ?>
        <a href="#modal-resetPassword" class="open-popup-link">modal-resetPassword</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/modals/modal-resetPassword.php') ?>

        <h3>
            Cart
        </h3>
        <p>
            <a href="#" id="js_header__cart">Version 1 sideBar cart</a>
        </p>
        <a href="#modal-cart" class="open-popup-link">Modal cart version 2</a><br>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/version-2/parts/modal--cart.php') ?>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutBottom.php') ?>