<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Тестовая страница';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="container">
        <h3>
            Modals
        </h3>
        <a href="#modal-offer" class="open-popup-link">modal-offer</a><br>
        <a href="#modal-addReview" class="open-popup-link">modal-addReview</a><br>
        <a href="#modal-payment-shipment" class="open-popup-link">modal-payment-shipment</a><br>
        <a href="#modal-payment-shipment-more" class="open-popup-link">modal-payment-shipment-more</a><br>
        <a href="#modal-message" class="open-popup-link">modal-message</a><br>
        <a href="#modal-login" class="open-popup-link">modal-login</a><br>
        <a href="#modal-partner" class="open-popup-link">modal-partner</a><br>
        <a href="#modal-resetPassword" class="open-popup-link">modal-resetPassword</a><br>

        <h3>
            Cart
        </h3>
        <p>
            <a href="<?php echo HTTP ?>/pages/cart/version-1/index.php">Go to cart 1</a>
        </p>
        <p>
            <a href="#" id="js_header__cart">Version 1 sideBar cart</a>
        </p>
        <p>
            <a href="<?php echo HTTP ?>/pages/cart/version-2/index.php">Go to cart 2</a>
        </p>
        <a href="#modal-cart" class="open-popup-link">Modal cart version 2</a><br>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>