<div id="modal-addReview" class="mPopup--sm mfp-hide">

    <h3 class="mPopup__title">
        Оставить отзыв
    </h3>
    <div class="pPopup__content">
        <div class="mForm">
            <form action="">
                <div class="mForm__row">
                    <input type="text" class="mForm__input" placeholder="Ф.И.О." name="name">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="mForm__row">
                            <input type="text" class="mForm__input" placeholder="Телефон или e-mail" name="contact">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="mForm__row">
                            <input type="text" class="mForm__input" placeholder="Город" name="city">
                        </div>
                    </div>
                </div>
                <div class="mForm__row">
                    <select name="" id="" class="dropdown" data-settings='{"cutOff": 8}'>
                        <option value="">Выберите товар</option>
                        <?php
                        $products = ['active', 'starlight', 'cool', 'smile', 'kids', 'crystal'];
                        foreach ($products as $k => $product) : ?>
                            <option value=""><?php echo $product ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mForm__row">
                    <textarea name="review" id="" cols="30" rows="10" class="mForm__textarea"
                              placeholder="Текст отзыва"></textarea>
                </div>
                <div class="mForm__btn">
                    <button type="submit" class="eBtn eBtn--pink eBtn--big">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>