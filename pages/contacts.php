<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

<?php
$title = 'Контакты';
include(ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pContacts">
        <div class="container">
            <div class="pContacts__container">
                <div class="pContacts__content">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div class="pContacts__name">
                                <h4 class="pContacts__title">
                                    ТМ BOOBON
                                </h4>
                                <p>
                                    Официальный производитель игрушки Снежколеп
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="pContacts__address">
                                <p><strong>
                                        Мы находимся по адресу
                                    </strong></p>
                                <p>
                                    Украина, 61001 г.Харьков, ул. Отакара Яроша, 25/46
                                </p>
                            </div>
                            <div class="pContacts__address">
                                <p>
                                    <strong>
                                        Телефоны
                                    </strong>
                                </p>
                                <p>
                                    <a href="tel:+38 (068) 025 49 45">+38 (068) 025 49 45</a>
                                    ,
                                    <a href="tel:+38 (068) 025 49 75">+38 (068) 025 49 75</a>
                                    ,
                                    <a href="tel:+38 (099) 248 41 20">+38 (099) 248 41 20</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pContacts__map">
                    <div id="map" class="map"></div>
                    <script type="text/javascript">
                        // Google map
                        function initMap() {
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 15,
                                center: {lat: 49.430049, lng: 32.008778},
                                scrollwheel: false
                            });
                            var beachMarker = new google.maps.Marker({
                                position: {lat: 49.430049, lng: 32.008778},
                                map: map
                            });
                        }
                    </script>
                </div>
                <div class="pContacts__form">
                    <form class="contactsForm">
                        <h5 class="contactsForm__title">
                            Напишите нам
                        </h5>
                        <p class="contactsForm__row">
                            <input type="text" placeholder="Имя" name="name" class="eInput--gray">
                        </p>
<!--                        <div class="errorMessageContainer">-->
<!--                            <span class="errorMessage">Ф.И.О обязательно для заполнения</span>-->
<!--                        </div>-->
                        <p class="contactsForm__row">
                            <input type="email" placeholder="E-mail" name="email" class="eInput--gray">
                        </p>
                        <p class="contactsForm__row">
                            <input type="tel" placeholder="Телефон" name="phone" class="eInput--gray">
                        </p>
                        <p class="contactsForm__row">
                            <textarea placeholder="Сообщение" name="message" class="eTextarea--gray"></textarea>
                        </p>
                        <p class="contactsForm__btn">
                            <button type="submit" class="eBtn--big eBtn--pink">
                                Отправить
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>