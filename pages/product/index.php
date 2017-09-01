<?php include ($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutTop.php') ?>

    <?php
    $title = 'Магазин';
    $align = 'left';
    include ($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/pageHeader.php') ?>

    <div class="pCatalog">
        <span class="pCatalog__line"></span>
        <div class="container">
            <div class="row">
                <?php
                $delay = 200;
                $products = ['active', 'light', 'cool', 'smile', 'kids', 'crystal'];
                foreach ($products as $k => $product) : ?>
                    <div class="col-xs-12 col-lg-6 pCatalog__item"> <!-- TODO: return aos data-aos="fade-up" data-aos-delay="< ?php echo $k * 100 + $delay ?>"-->
                        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/pages/product/parts/preview.php') ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutBottom.php') ?>