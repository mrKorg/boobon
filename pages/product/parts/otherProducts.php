<div class="otherProducts">
    <div class="container">
        <h3 class="otherProducts__title">
            <span>
                Другие модели
            </span>
        </h3>
        <div class="otherProducts__slider">
            <div class="js_otherProducts__slider">
                <?php
                $delay = 200;
                $products = ['active', 'starlight', 'cool', 'smile', 'kids', 'crystal'];
                foreach ($products as $k => $product) : ?>
                    <div>
                        <div class="otherProducts__item">
                            <?php include (ROOT . '/pages/product/parts/preview.php') ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>