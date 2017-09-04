<div class="mCart">
    <div class="mCart__close">
        <a href="#" class="js_mCart__close">
            <svg width="88" height="88">
                <use xlink:href="#icon-close"></use>
            </svg>
        </a>
    </div>
    <div class="mCart__box">
        <h3 class="mCart__title">
            Корзина <span class="num">34</span>
        </h3>
        <div class="mCart__list js_scroll">
            <div class="mCart__prod">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/version-1/parts/productPreview.php') ?>
            </div>
            <div class="mCart__prod">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/version-1/parts/productPreview.php') ?>
            </div>
            <div class="mCart__prod">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/cart/version-1/parts/productPreview.php') ?>
            </div>
        </div>
        <div class="mCart__footer">
            <p class="mCart__total">
                К оплате: <strong>278 874 руб</strong>
            </p>
            <p class="mCart__btn">
                <a href="/pages/cart/version-1/index.php" class="eBtn--pink eBtn--big">
                    Перейти к покупке
                </a>
            </p>
        </div>
    </div>
</div>