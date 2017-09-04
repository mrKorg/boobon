<?php
$modifier = 'white';
$sizes = true;
$opt = true;
?>

<div class="eProductCart">
    <h4 class="eProductCart__title">
        Boobon kids
    </h4>
    <a href="#" class="eProductCart__image">
        <span class="body">
            <svg width="100" height="135">
                <use xlink:href="#boobon-cool"></use>
            </svg>
        </span>
        <span class="shadow">
            <svg width="50" height="3">
                <use xlink:href="#boobon-shadow"></use>
            </svg>
        </span>
        <span class="title">
            <svg width="105" height="40">
                <use xlink:href="#boobon-cool-title"></use>
            </svg>
        </span>
    </a>

    <?php if ($opt) : ?>
        <div class="eProductCart__row--cols">
            <div class="row middle-xs">
                <div class="col-xs-6">
                    <div class="eSizeSelect--white">
                        <div class="eSizeSelect__val <?php echo ($sizes) ? 'eSizeSelect__val--withDrop' : '' ?>">
                            <p>Большой</p>
                        </div>
                        <?php if ($sizes) : ?>
                            <div class="eSizeSelect__drop">
                                <p>
                                    <a href="#">
                                        Маленький
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        Большой
                                    </a>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-6">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eColorSelect.php') ?>
                </div>
            </div>
        </div>
        <div class="eProductCart__row--center">
            <div class="row middle-xs">
                <div class="col-xs-6">
                    <p class="eProductCart__amount">
                        <strong>
                            Ящики
                        </strong><br>
                        <span>
                            ( 1 = 500 шт )
                        </span>
                    </p>
                </div>
                <div class="col-xs-6">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eQtySelect.php') ?>
                </div>
            </div>
        </div>
        <div class="eProductCart__row--price">
            <p class="eProductCart__price">
                3777 руб
            </p>
        </div>
        <div class="eProductCart__row--desc eProductCart__row--last">
            <p>
                <strong>
                    Ваша скидка - 16%
                </strong>
            </p>
            <p>
                Чтобы получить скидку
                <span>23%</span>
                ,<br>
                купите еще
                <span>3</span>
                ящика
            </p>
        </div>
    <?php else : ?>
        <div class="eProductCart__row">
            <div class="row middle-xs">
                <div class="col-xs-6">
                    <div class="eSizeSelect--white">
                        <div class="eSizeSelect__val <?php echo ($sizes) ? 'eSizeSelect__val--withDrop' : '' ?>">
                            <p>Большой</p>
                        </div>
                        <?php if ($sizes) : ?>
                            <div class="eSizeSelect__drop">
                                <p>
                                    <a href="#">
                                        Маленький
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        Большой
                                    </a>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-6">
                    <p class="eProductCart__price">
                        3777 руб
                    </p>
                </div>
            </div>
        </div>
        <div class="eProductCart__row--cols eProductCart__row--last">
            <div class="row middle-xs">
                <div class="col-xs-6">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eQtySelect.php') ?>
                </div>
                <div class="col-xs-6">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eColorSelect.php') ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="eProductCart__delete">
        <a href="#">
            <svg width="28" height="28">
                <use xlink:href="#icon-close"></use>
            </svg>
        </a>
    </div>
</div>