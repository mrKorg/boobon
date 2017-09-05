<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Оптовым клиентам';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pWholesaleCustomers">
        <div class="container">
            <div class="pWholesaleCustomers__auth">
                <p>
                    <?php
                    $check = true;
                    if ($check) : ?>
                        <a href="#modal-partner" class="eBtn eBtn--pink eBtn--xl open-popup-link">
                            Подать заявку
                        </a>
                        <span class="text">
                            или выполните
                            <a href="#" class="loginLink">вход</a>
                        </span>
                    <?php else : ?>
                        Добрый день, <strong>Игнат!</strong>
                        <a href="#" class="logoutLink">
                            Выход
                        </a>
                    <?php endif ?>
                </p>
            </div>
            <div class="pWholesaleCustomers__cooperation">
                <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#boobon-starlight"></use>
                        </svg>
                    </span>
                    <span class="shadow">
                        <svg width="92" height="6">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xlink:href="#boobon-shadow"></use>
                        </svg>
                    </span>
                </p>
                <p class="text">
                    Мы заинтересованы в долгосрочном сотрудничестве и партнерстве с:
                </p>
            </div>
            <div class="pWholesaleCustomers__who">
                <div class="row">
                    <div class="pWholesaleCustomers__col">
                        <a href="#modal-offer" class="open-popup-link image">
                            <svg width="84" height="74">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cooperation-1"></use>
                            </svg>
                        </a>
                        <p class="text">
                            Торговыми сетям
                        </p>
                    </div>
                    <div class="pWholesaleCustomers__col">
                        <a href="#modal-offer" class="open-popup-link image">
                            <svg width="80" height="80">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cooperation-3"></use>
                            </svg>
                        </a>
                        <p class="text">
                            Дистрибьюторами
                        </p>
                    </div>
                    <div class="pWholesaleCustomers__col">
                        <a href="#modal-offer" class="open-popup-link image">
                            <svg width="100" height="80">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cooperation-5"></use>
                            </svg>
                        </a>
                        <p class="text">
                            Оптовикам
                        </p>
                    </div>
                    <div class="pWholesaleCustomers__col">
                        <a href="#modal-offer" class="open-popup-link image">
                            <svg width="86" height="82">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cooperation-2"></use>
                            </svg>
                        </a>
                        <p class="text">
                            Интернет-магазинами
                        </p>
                    </div>
                    <div class="pWholesaleCustomers__col">
                        <a href="#modal-offer" class="open-popup-link image">
                            <svg width="68" height="76">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cooperation-4"></use>
                            </svg>
                        </a>
                        <p class="text">
                            Крутыми мамами, папами, дядями и тётями
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="pWholesaleCustomers__cooperationElse">
                            и всеми, кто хочет дарить детям счастливое, здоровое детство!
                        </p>
                    </div>
                </div>
            </div>
            <div class="bAdvantages--white">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="bAdvantages__title">
                            Почему мы
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                1
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Собственное<br> производство
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                2
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Вся продукция<br> сертифицирована
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                3
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Качественные экологичные<br> материалы
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                4
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Цена<br> производителя
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                5
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Поставки любого<br> объема по пред заказу
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                6
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Лидирующие<br> тенденции, 6 линеек
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                7
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Палитра цветов,<br> дизайн
                        </p>
                    </div>
                    <div class="col-xs-6 col-lg-3 bAdvantages__item">
                        <div class="bAdvantages__icon">
                            <span>
                                8
                            </span>
                        </div>
                        <p class="bAdvantages__name">
                            Яркие, запоминающиеся<br> персонажи BOOBON
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#modal-partner" class="open-popup-link eBtn--pink eBtn--xl">
                            Стать партнером
                        </a>
                    </div>
                </div>
            </div>
            <div class="mainShops">
                <h3 class="mainShops__title">
                    <span>
                        Наши партнёры
                    </span>
                </h3>
                <div class="mainShops__slider">
                    <div class="js_mainShops">
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-01.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-02.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-03.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-04.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-01.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-02.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-03.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="mainShops__item">
                                <img src="<?php echo HTTP ?>/assets/images/shops/shop-04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>