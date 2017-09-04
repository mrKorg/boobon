<div id="modal-partner" class="mPopup--sm mfp-hide">
    <h3 class="mPopup__title">
        Стать партнёром
    </h3>
    <div class="pPopup__content">
        <div class="mForm">
            <form method="post" action="">
                <div class="mForm__row">
                    <input type="text" class="mForm__input hasError" placeholder="Ф.И.О." name="name" v-model="form.name">
                </div>
                <div class="errorMessageContainer">
                    <span class="errorMessage">
                        Сообщение об ошибке
                    </span>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="mForm__row">
                            <input type="text" class="mForm__input" placeholder="E-mail" name="email" v-model="form.email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="mForm__row">
                            <input type="text" class="mForm__input" placeholder="Телефон" name="phone" v-model="form.phone">
                        </div>
                    </div>
                </div>
                <div class="mForm__row">
                    <div class="mForm__row">
                        <input type="text" class="mForm__input" placeholder="Город" name="city" v-model="form.city">
                    </div>
                </div>
                <div class="mForm__btn">
                    <button type="submit" class="eBtn eBtn--big eBtn--pink">
                        Подать заявку
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>