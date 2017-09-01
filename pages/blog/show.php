<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Блог';
include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/pageHeader.php') ?>

    <div class="pArticle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    <div class="pArticle__content">
                        <h2 class="pArticle__title">
                            Тестовый заголовок записи
                        </h2>
                        <div class="pArticle__share">

                            <div class="eSharePage">
                                <div class="eSharePage__box">
                                    <div class="row middle-xs">
                                        <div class="col">
                                            <a href="#">
                                                <svg width="64" height="64">
                                                    <use xlink:href="#icon-share-01"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <svg width="64" height="64">
                                                    <use xlink:href="#icon-share-02"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <svg width="64" height="64">
                                                    <use xlink:href="#icon-share-03"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col eSharePage__label">
                                            Поделиться
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <p>Distinctio incidunt expedita aliquam inventore et fugit alias. Illum laborum neque qui
                               aut sit fugit. Omnis hic vel et eum esse quos minima laboriosam. Quibusdam deserunt
                               dolorum et aspernatur et eum enim. Deserunt voluptatibus voluptates quis illo quasi.
                               Deserunt sunt aut nulla quo assumenda.
                            </p>
                            <p>Distinctio incidunt expedita aliquam inventore et fugit alias. Illum laborum neque qui
                               aut sit fugit. Omnis hic vel et eum esse quos minima laboriosam. Quibusdam deserunt
                               dolorum et aspernatur et eum enim. Deserunt voluptatibus voluptates quis illo quasi.
                               Deserunt sunt aut nulla quo assumenda.
                            </p>
                            <p>Distinctio incidunt expedita aliquam inventore et fugit alias. Illum laborum neque qui
                               aut sit fugit. Omnis hic vel et eum esse quos minima laboriosam. Quibusdam deserunt
                               dolorum et aspernatur et eum enim. Deserunt voluptatibus voluptates quis illo quasi.
                               Deserunt sunt aut nulla quo assumenda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">

                    <div class="bSideBar">

                        <div class="bSideBar__banner">
                            <a href="#" target="_blank">
                                <img src="/assets/images/banner.svg" alt="">
                            </a>
                        </div>

                        <div class="bSideBar__module">
                            <h5 class="bSideBar__title">
                                <span>
                                    Популярные статьи
                                </span>
                            </h5>
                            <div class="row">
                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                    <div class="col-xs-12 col-md-4 col-lg-12">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/blog/parts/preview.php') ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/subscribeFormBig.php') ?>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/pages/parts/layoutBottom.php') ?>