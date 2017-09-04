<?php
$modifier = 'black';
$sizes = true;
$opt = false;
?>

<div class="eProductCart2">

    <div class="eProductCart2__body">
        <div class="eProductCart2__delete">
            <a href="#">
                <svg width="28" height="28">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </a>
        </div>
        <div class="row middle-xs">
            <div class="col-xs-4">
                <a href="#" class="eProductCart2__image">
                    <img src="/assets/images/products/preview.png" alt="">
                </a>
            </div>
            <div class="col-xs-8">
                <a href="" class="eProductCart2__title">
                    Снежколеп
                    <strong>
                        «BOOBON SMILE»
                    </strong>
                </a>
                <p class="eProductCart2__size">
                    <a href="#" class="item active">
                        Большой
                    </a>
                    <?php if ($sizes) : ?>
                    <a href="#" class="item">
                        Маленький
                    </a>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="eProductCart2__footer">
        <div class="row">
            <div class="col">
                <span class="label">
                    <?php if ($opt) : ?>
                        <strong>
                            Ящики <span>(1 = 50 шт)</span>
                        </strong>
                    <?php else : ?>
                        Количетсво:
                    <?php endif ?>
                </span>

                <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eQtySelect.php') ?>

            </div>
            <div class="col">
                <span class="label">
                    Цвет:
                </span>

                <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/parts/eColorSelect.php') ?>

            </div>
            <div class="col">
                <p class="eProductCart2__price">
                    <span class="label">
                        Стоимость:
                    </span>
                    <strong class="price">
                        3777 руб
                    </strong>
                </p>
            </div>

        </div>
        <?php if ($opt) : ?>
            <div class="row middle-xs">
                <div class="col">
                    <p class="text"><strong>Ваша скидка = 31%</strong></p>
                </div>
                <div class="col">
                    <p class="text">Чтобы получить скидку 23%,<br>
                        купите еще 3 ящика</p>
                </div>
            </div>
        <?php endif ?>
    </div>

</div>