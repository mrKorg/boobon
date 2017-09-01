<div class="eProductPreview">
    <div class="eProductPreview__slider">
        <div class="js_eProductPreview__slider">
            <div>
                <div class="eProductPreview__item">
                    <img src="/assets/images/product/slide1.jpg" alt="">
                </div>
            </div>
            <div>
                <div class="eProductPreview__item">
                    <img src="/assets/images/product/slide2.jpg" alt="">
                </div>
            </div>
            <div>
                <div class="eProductPreview__item">
                    <img src="/assets/images/product/slide3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="eProductPreview__info">
        <h2 class="eProductPreview__title">
            Boobon kids
        </h2>
        <a href="/pages/product/show.php" class="eProductPreview__image">
            <span class="body">
                <!-- Use svg from sprite -->
                <svg width="178" height="226">
                    <use xlink:href="#boobon-<?php echo $product ?>"></use>
                </svg>
                <!-- or image png -->
                <?php /*
                <img src="/assets/images/products/boobon-<?php echo $product?>.png" alt="">
                */ ?>
            </span>
            <span class="shadow">
                <svg width="92" height="6">
                    <use xlink:href="#boobon-shadow"></use>
                </svg>
            </span>
            <span class="title">
                <!-- Use svg from sprite -->
                <svg width="194" height="83">
                    <use xlink:href="#boobon-<?php echo $product ?>-title"></use>
                </svg>
                <!-- or image png -->
                <?php /*
                <svg width="194" height="39">
                    <use xlink:href="#boobon-title"></use>
                </svg>
                <img src="/assets/images/products/boobon-<?php echo $product ?>-title.png" alt="">
                */ ?>
            </span>
        </a>
        <p class="eProductPreview__price">
            1255 руб
        </p>
        <p class="eProductPreview__btn">
            <a href="/pages/product/show.php" class="eBtn--pink">
                Купить
            </a>
        </p>
    </div>
</div>