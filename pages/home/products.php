<div class="mainProducts">
    <span class="mainProducts__line"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">

                <div class="mainSLiderSmall">
                    <div class="js_mainSliderSmall">

                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <div>

                                <div class="mainSLiderSmall__item">
                                    <p class="mainSLiderSmall__title">
                                        Миссия
                                    </p>
                                    <div class="mainSLiderSmall__content">
                                        <p>
                                            Движение - это жизнь. Нам больно смотреть как миллионы людей все меньше
                                            двигаются, предпочитая интернет и компьютерные игры. Игрушки Бубон это не
                                            бездушный пластик, а веселые персонажи, которые помогут Вам и Вашим детям по
                                            настоящему оторваться на свежем воздухе.
                                        </p>
                                    </div>
                                    <p class="mainSLiderSmall__btn">
                                        <a href="#" class="eBtn--pink eBtn--big" tabindex="0">
                                            Стать партнёром
                                        </a>
                                    </p>
                                </div>

                            </div>
                        <?php endfor; ?>

                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6">

                <div class="mainAdvantages">
                    <div class="mainAdvantages__item">
                        <div class="mainAdvantages__icon">
                            <svg width="76" height="76">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#advantages-1"></use>
                            </svg>
                        </div>
                        <h4 class="mainAdvantages__title">
                            Качественные снежколепы
                        </h4>
                        <p class="mainAdvantages__text">
                            Устойчивые к морозам и механическим повреждениям
                        </p>
                    </div>
                    <div class="mainAdvantages__item">
                        <div class="mainAdvantages__icon">
                            <svg width="76" height="76">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#advantages-2"></use>
                            </svg>
                        </div>
                        <h4 class="mainAdvantages__title">
                            Экологически чистые материалы
                        </h4>
                        <p class="mainAdvantages__text">
                            Подтверждено санитарно-гигиеническим сертификатом
                        </p>
                    </div>
                    <div class="mainAdvantages__item">
                        <div class="mainAdvantages__icon">
                            <svg width="76" height="76">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#advantages-3"></use>
                            </svg>
                        </div>
                        <h4 class="mainAdvantages__title">
                            Понятны детям и взрослым
                        </h4>
                        <p class="mainAdvantages__text">
                            Понятны в использовании даже для детей от 4 лет
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="mainProducts__box">
            <div class="row">
                <?php
                $delay = 200;
                $products = ['active', 'light', 'cool'];
                foreach ($products as $k => $product) : ?>
                    <div class="col-xs-12 col-lg-6 pCatalog__item <?php echo (count($products) == $k) ? 'last-lg' : '' ?>"> <!-- TODO: return aos data-aos="fade-up" data-aos-delay="< ?php echo $k * 100 + $delay ?>"-->
                        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/pages/product/parts/preview.php') ?>
                    </div>
                <?php endforeach; ?>

                <div class="col-xs-12 col-lg-6" <?php /* data-aos="fade-up" data-aos-delay="500" */ ?>>

                    <div class="mainProducts__gadget">
                        <p class="title">Злой монстр <strong>ГАД
                                <span>ЖЕТ</span>
                            </strong></p>
                        <p class="image">
                            <svg width="265" height="295">
                                <use xlink:href="#gadget"></use>
                            </svg>
                        </p>
                        <p class="text">
                            Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum
                            является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
                            безымянный печатник.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mainProducts__btn">
            <a href="/pages/product/index.php" class="eBtn--pink eBtn--big">
                Весь арвенал Бубонов
            </a>
        </div>

    </div>
</div>
