<form action="" class="footer__subscribe">
    <label for="mailInput">
        Подписаться на рассылку
    </label>
    <div class="subscribeBox">
        <input id="mailInput" type="email" placeholder="Ваш e-mail"
               class="eInput--black eInput--big <?php /* hasError */ ?>">
        <button class="subscribeBtn" type="submit">
            <svg width="30" height="30">
                <use xlink:href="#sendBtn--black"></use>
            </svg>
        </button>
    </div>
</form>

