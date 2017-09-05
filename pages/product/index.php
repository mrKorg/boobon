<?php include_once("../../config.php"); ?>

<?php include (ROOT . '/pages/parts/layoutTop.php') ?>

    <?php
    $title = 'Магазин';
    $align = 'left';
    include (ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pCatalog">
        <span class="pCatalog__line"></span>
        <div class="container">
            <div class="row">
                <?php
                $delay = 200;
                $products = ['active', 'starlight', 'cool', 'smile', 'kids', 'crystal'];
                foreach ($products as $k => $product) : ?>
                    <div class="col-xs-12 col-lg-6 pCatalog__item">
                        <?php include (ROOT . '/pages/product/parts/preview.php') ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php include (ROOT . '/pages/parts/layoutBottom.php') ?>