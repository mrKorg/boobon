<?php include_once("../../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$products = ['active', 'starlight', 'cool', 'smile', 'kids', 'crystal'];
$product = $products[array_rand($products)];
?>

    <div class="pProduct">
        <div class="pProduct__header">
            <div class="pProduct__slider">
                <div class="pProductSlider">
                    <div class="js_pProductSlider">
                        <div class="pProductSlider__item" style="background: rgb(255, 52, 67);"></div>
                        <div class="pProductSlider__item" style="background: rgb(0, 16, 174);"></div>
                        <div class="pProductSlider__item" style="background: rgb(255, 213, 95);"></div>
                    </div>
                </div>
            </div>
            <div class="pProduct__info">

                <div class="container">
                    <div class="row center-xs end-lg">
                        <div class="col">

                            <div class="pProductInfo">
                                <h1 class="pProductInfo__title">
                                    <span>
                                        Boobon
                                    </span>
                                    <!-- Use svg from sprite -->
                                    <svg width="194" height="83">
                                        <use xlink:href="#boobon-<?php echo $product ?>-title"></use>
                                    </svg>
                                    <!-- or image png -->
                                    <?php /*
                                    <svg width="194" height="39">
                                        <use xlink:href="#boobon-title"></use>
                                    </svg>
                                    <img src="<?php echo HTTP ?>/assets/images/products/boobon-<?php echo $product ?>-title.png" alt="">
                                    */ ?>
                                </h1>
                                <p class="pProductInfo__desc">
                                    Снежколеп BOOBON серии FUN - это качественная игрушка с веселым сюжетом. Снежколеп
                                    выпускается в 3-х цветах. Порадуйте себя и своих детей хорошим настроением)
                                </p>
                                <p class="pProductInfo__colors js_pProductInfo__colors">
                                    <a href="#" class="active" style="background: rgb(255, 52, 67);"></a>
                                    <a href="#" class="" style="background: rgb(0, 16, 174);"></a>
                                    <a href="#" class="" style="background: rgb(255, 213, 95);"></a>
                                </p>
                                <div class="pProductInfo__size">
                                    <div class="eSizeSelect--black">
                                        <?php $hasSizes = true; ?>
                                        <div class="eSizeSelect__val <?php echo ($hasSizes) ? 'eSizeSelect__val--withDrop' : '' ?>">
                                            <p>Большой</p>
                                        </div>
                                        <?php if ($hasSizes) : ?>
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
                                <div class="pProductInfo__row">
                                    <p class="pProductInfo__price">
                                        95.00 грн
                                    </p>
                                    <p class="pProductInfo__btn">
                                        <a href="#" class="eBtn--pink eBtn--big">
                                            Купить позитив
                                        </a>
                                    </p>
                                </div>
                                <p class="pProductInfo__links">
                                    <a href="#buyOneClick-modal" class="pink open-popup-link">
                                        Купить в один клик
                                    </a>
                                    <a href="/payment_and_shipping">
                                        Оплата и доставка
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pProduct__content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-8">
                        <div class="pProductContent">
                            <h3 class="pProductContent__title">
                                <strong>
                                    Мы - производители
                                </strong>
                                и гарантируем что снежколеп BOOBON:
                            </h3>
                            <ul class="pProductContent__list">
                                <li>
                                    <div class="num">
                                        1
                                    </div>
                                    <p>
                                        Изготовлен из качественного пластика АБС,
                                        устойчивого к морозам и механическим
                                        повреждениям
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        2
                                    </div>
                                    <p>
                                        Экологически чистый материал с
                                        использованием безопасных красителей.
                                        Имеется
                                        <a href="#">
                                            санитарно-гигиенический
                                            сертификат
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        3
                                    </div>
                                    <p>
                                        Прост и понятен<br> в использовании даже<br> для
                                        детей до 4х лет
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        4
                                    </div>
                                    <p>
                                        Имеет удобные и прочные ручки, которые
                                        надежно закреплены винтом и не
                                        расшатываются
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        5
                                    </div>
                                    <p>
                                        Упакован в индивидуальную упаковку, что
                                        обеспечивает его защиту при
                                        транспортировке
                                    </p>
                                </li>
                                <li>
                                    <div class="num">
                                        6
                                    </div>
                                    <p>
                                        Два размера:<br> стандартный (для взрослых
                                        и детей) и маленький (для детей до 4-х лет)
                                    </p>
                                </li>
                            </ul>
                            <div class="pProductContent__more">
                                <p>
                                    <span class="num">
                                        7
                                    </span>
                                    Снежколеп <strong>BOOBON</strong> - это больше, чем бездушный пластик,
                                    а значит больше <strong>веселья</strong> и <strong>позитивных эмоций!</strong>
                                    <span class="boobon">
                                        <span class="body">
                                            <svg width="160" height="216">
                                                <use xlink:href="#boobon-kids"></use>
                                            </svg>
                                        </span>
                                        <span class="shadow">
                                            <svg width="92" height="6">
                                                <use xlink:href="#boobon-shadow"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="row between-md middle-md">
                                <div class="col-xs-12 col-lg-6">

                                    <div class="pProductContent__gallery">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <a href="<?php echo HTTP ?>/assets/images/placeholder-image.jpg">
                                                    <img src="<?php echo HTTP ?>/assets/images/placeholder-image.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="<?php echo HTTP ?>/assets/images/placeholder-image.jpg">
                                                    <img src="<?php echo HTTP ?>/assets/images/placeholder-image.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="<?php echo HTTP ?>/assets/images/placeholder-image.jpg">
                                                    <img src="<?php echo HTTP ?>/assets/images/placeholder-image.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">

                                    <div class="pProductContent__box">
                                        <p class="pProductContent__price">
                                            95.00 грн
                                        </p>
                                        <p class="pProductContent__btn">
                                            <a href="#" class="eBtn--pink eBtn--big">
                                                Купить позитив
                                            </a>
                                        </p>
                                        <div class="pProductContent__link">
                                            <a href="#" class="pink">
                                                Купить в 1 клик
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4 first-lg">

                        <div class="pProductSize standart">
                            <p class="pProductSize__nav">
                                <a href="#" class="active" data-size="standart">
                                    Стандарт
                                </a>
                                <?php if ($hasSizes) : ?>
                                    <a href="#" data-size="small">
                                        Маленький
                                    </a>
                                <?php endif; ?>
                            </p>
                            <div class="pProductSize__head">
                                <p class="pProductSize__size">
                                    <span class="js_size" data-standart="100 мм" data-small="50 мм">
                                        100 мм
                                    </span>
                                </p>
                                <img src="<?php echo HTTP ?>/assets/images/products/snowboll-faceted.png" alt="">
                                <!--<img src="<?php echo HTTP ?>/assets/images/products/snowboll-smooth.png" alt="">-->
                                <p class="label">
                                    Идеальная
                                    граненая
                                    снежка
                                </p>
                            </div>
                            <div class="pProductSize__body">
                                <p class="pProductSize__size">
                                    <span class="js_size" data-standart="500 мм" data-small="350 мм">
                                        500 мм
                                    </span>
                                </p>
                                <img src="<?php echo HTTP ?>/assets/images/products/preview.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include(ROOT . '/pages/parts/reviews.php') ?>
        <div class="shopsMap">
            <div class="shopsMap__container">
                <div class="shopsMap__nav">
                    <h3 class="shopsMap__title">
                        Заехать, пощупать
                    </h3>
                    <div class="shopsMap__select">
                        <div class="eCustomSelect">
                            <div class="eCustomSelect__value">
                                <p>Выберите город</p>
                            </div>
                            <div class="eCustomSelect__drop">
                                <div class="eCustomSelect__scroll js_scroll">
                                    <a>Днепр</a>
                                    <a>Харьков</a>
                                    <a>Киев</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopsMap__list">
                        <a>Все</a>
                        <a>Днепр</a>
                        <a>Киев</a>
                    </div>
                </div>
            </div>
            <div id="map" class="map"></div>
            <script type="text/javascript">
                // Google map
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 15,
                        center: {lat: 49.430049, lng: 32.008778},
                        scrollwheel: false
                    });
                    var beachMarker = new google.maps.Marker({
                        position: {lat: 49.430049, lng: 32.008778},
                        map: map
                    });
                }
            </script>
        </div>
        <?php include(ROOT . '/pages/product/parts/otherProducts.php') ?>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>