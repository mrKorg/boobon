<?php include_once("../../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Блог';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pBlog">
        <div class="container">
            <div class="row">

                <?php for ($i = 0; $i < 12; $i++) : ?>

                    <?php if ($i == 0) : ?>
                        <div class="col-xs-6 col-lg-3">
                            <div class="pBlog__icon">
                                <svg width="285" height="230">
                                    <use xlink:href="#boobon-blog"></use>
                                </svg>
                            </div>
                        </div>
                    <?php endif ?>

                    <div class="col-xs-6 col-lg-3">
                        <?php include(ROOT . '/pages/blog/parts/preview.php') ?>
                    </div>

                    <?php if ($i == 2) : ?>
                        <div class="col-xs-12">

                            <div class="pBlog__quoteSlider">
                                <?php include(ROOT . '/pages/parts/quoteSlider.php') ?>
                            </div>

                        </div>
                    <?php endif ?>

                <?php endfor; ?>

                <div class="col-xs-12">
                    <ul class="pagination pagination">
                        <li class="active">
                            <span>1</span>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/subscribeFormBig.php') ?>


<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>