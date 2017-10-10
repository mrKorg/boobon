<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

    <div class="pNotFound">
        <div class="container">
            <div class="row middle-xs center-xs pNotFound__box">
                <div class="col-xs-12">
                    <svg class="pNotFound__img" width="394" height="213">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#404"></use>
                    </svg>
                    <p class="pNotFound__text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt<br> ut laoreet dolore magna aliquam erat volutpat
                    </p>
                    <p>
                        <a href="/pages" class="eBtn--pink eBtn--big">
                            На главную
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>