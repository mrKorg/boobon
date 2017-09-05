<footer class="footer">
    <div class="container">
        <div class="footer__soc">
            <h5 class="footer__title">
                Следите за нами
            </h5>
            <ul>
                <li>
                    <a href="https://ok.ru/" target="_blank">
                        <i aria-hidden="true" class="fa fa-odnoklassniki"></i>
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/feed" target="_blank">
                        <i aria-hidden="true" class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/" target="_blank">
                        <i aria-hidden="true" class="fa fa-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i aria-hidden="true" class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <i aria-hidden="true" class="fa fa-facebook"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row center-xs between-md">
            <div class="footer__menu">
                <ul>
                    <li>
                        <a href="#">
                            Спецпредложения
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HTTP ?>/pages/payment_delivery.php">
                            Оплата и доставка
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HTTP ?>/pages/reviews.php">
                            Отзывы
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            #BOOBONCLUB
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HTTP ?>/pages/wholesale_customers.php">
                            Партнерам
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HTTP ?>/pages/contacts.php">
                            Контакты
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__img">
                <svg width="171" height="182">
                    <use xlink:href="#gadget"></use>
                </svg>
            </div>

            <form class="footer__subscribe"><label for="mailInput">
                    Подписаться на рассылку
                </label>
                <div class="subscribeBox">
                    <input id="mailInput" type="email" placeholder="Ваш e-mail" class="eInput--black eInput--big ">  <!-- Class for error "hasError" -->
                    <button type="submit" class="subscribeBtn">
                        <svg width="30" height="30">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sendBtn--black"></use>
                        </svg>
                    </button>
                </div>
            </form>

            <div class="footer__payment">
                <div class="row">
                    <div class="col-xs-3 col-lg-6">
                        <svg width="135" height="70">
                            <use xlink:href="#footer-pay-mastercard"></use>
                        </svg>
                    </div>
                    <div class="col-xs-3 col-lg-6">
                        <svg width="135" height="70">
                            <use xlink:href="#footer-pay-visa"></use>
                        </svg>
                    </div>
                    <div class="col-xs-3 col-lg-6">
                        <svg width="135" height="70">
                            <use xlink:href="#footer-pay-paypal"></use>
                        </svg>
                    </div>
                    <div class="col-xs-3 col-lg-6">
                        <svg width="135" height="70">
                            <use xlink:href="#footer-pay-privat"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>