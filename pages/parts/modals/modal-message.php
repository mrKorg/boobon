<div id="modal-message" class="mPopup--md mfp-hide">

    <div class="pPopup__content">
        <div class="modalMessage">

            @php($content = 'callback')
            @if ($content == 'error')
                {{--  Error  --}}
                <div class="modalMessage__img">
                    <svg width="190" height="190">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gadget"></use>
                    </svg>
                </div>
                <div class="modalMessage__text">
                    <p>К сожалению оплата не прошла.</p>
                    <p>Что-то пошло не так</p>
                </div>
                <div class="modalMessage__btn">
                    <a href="#" class="eBtn eBtn--pink eBtn--big">
                        Попробовать снова
                    </a>
                </div>
                {{--  Error  --}}
            @elseif ($content == 'subscribe')
                {{--  Subscribe  --}}
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
                {{--  Subscribe  --}}
            @elseif ($content == 'review')
                {{--  Review  --}}
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
                {{--  Review  --}}
            @elseif ($content == 'buy')
                {{--  Buy  --}}
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
                {{--  Buy  --}}
            @elseif ($content == 'callback')
                {{--  callback  --}}
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
                {{--  callback  --}}
            @endif
        </div>
    </div>

</div>