<div id="modal-message" class="mPopup--md mfp-hide">

    <div class="pPopup__content">
        <div class="modalMessage">

            <?php $content = 'error' ?>
            <?php if ($content == 'error') : ?>

                <div class="modalMessage__img">
                    <svg width="190" height="190">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gadget"></use>
                    </svg>
                </div>
                <div class="modalMessage__text">
                    <h3>Упс...</h3>
                    <p>Скорей всего что-то пошло не так и ваш платеж не прошел. Свяжитесь, пожалуйста, с вашим банком!</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Попробовать снова
                    </a>
                </div>

            <?php elseif ($content == 'subscribe') : ?>

                <div class="modalMessage__img">
                    <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xlink:href="#boobon-kids"></use>
                        </svg>
                    </span>
                        <span class="shadow">
                        <svg width="92" height="6">
                            <use xlink:href="#boobon-shadow"></use>
                        </svg>
                    </span>
                    </p>
                </div>
                <div class="modalMessage__text">
                    <p>Ура! Теперь вы будете получать полезные<br>
                        письма от Бубона!</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Хорошо
                    </a>
                </div>

            <?php elseif ($content == 'review') : ?>

                <div class="modalMessage__img">
                    <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xlink:href="#boobon-cool"></use>
                        </svg>
                    </span>
                        <span class="shadow">
                        <svg width="92" height="6">
                            <use xlink:href="#boobon-shadow"></use>
                        </svg>
                    </span>
                    </p>
                </div>
                <div class="modalMessage__text">
                    <p>Спасибо за то, что помогаете нам становиться лучше,<br>
                        скоро ваш отзыв будет опубликован на сайте</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Хорошо
                    </a>
                </div>

            <?php elseif ($content == 'buy') : ?>

                <div class="modalMessage__img">
                    <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xlink:href="#boobon-active"></use>
                        </svg>
                    </span>
                        <span class="shadow">
                        <svg width="92" height="6">
                            <use xlink:href="#boobon-shadow"></use>
                        </svg>
                    </span>
                    </p>
                </div>
                <div class="modalMessage__text">
                    <p>Спасибо за то, что купили данный товар, <br>
                        наш менеджер свяжется с Вами в ближайшее время</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Попробовать снова
                    </a>
                </div>

            <?php elseif ($content == 'callback') : ?>

                <div class="modalMessage__img">
                    <p class="image">
                    <span class="body">
                        <svg width="178" height="226">
                            <use xlink:href="#boobon-cool"></use>
                        </svg>
                    </span>
                        <span class="shadow">
                        <svg width="92" height="6">
                            <use xlink:href="#boobon-shadow"></use>
                        </svg>
                    </span>
                    </p>
                </div>
                <div class="modalMessage__text">
                    <p>Наш менеджер свяжется с Вами в ближайшее время</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Хорошо
                    </a>
                </div>

            <?php endif ?>
        </div>
    </div>

</div>