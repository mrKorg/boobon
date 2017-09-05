<div class="mainReviews">
    <div class="container">
        <div class="mainReviews__box">
            <div class="mainReviews__info">
                <h3 class="mainReviews__title">
                    Отзывы
                </h3>
                <p class="mainReviews__desc">
                    Мы всегда рады получать приятные слова, советы и замечания. Мы хотим быть максимально
                    клиентоориентированными, поэтому:
                </p>
                <div class="mainReviews__btn">
                    <div>
                        <p>
                            <a class="eBtn--blue eBtn--big">
                                Добавить отзыв
                            </a>
                        </p>
                    </div>
                    <p>
                        <a href="/pages/reviews.php" class="link">
                            Все отзывы
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="co-xs-12 col-lg-6">

                        <div class="eReview--white">
                            <p class="eReview__image">
                                <?php
                                $imageOfReview = false;
                                if ($imageOfReview) : ?>
                                    <img src="<?php echo HTTP ?>/assets/images/placeholder-user.png" alt="">
                                <?php else : ?>
                                    <img src="<?php echo HTTP ?>/assets/images/placeholder-user.png" alt="">
                                <?php endif; ?>
                            </p>
                            <p class="eReview__name">
                                Тестовое Имя
                            </p>
                            <div class="eReview__text">
                                <div class="eReview__content js_scroll">
                                    Non porro ipsum sapiente quasi rerum repellat. Mollitia minima fugit minima tenetur
                                    illo reiciendis. Minus est eveniet et minus ut dolorem. Quis et unde aperiam magnam
                                    tempore est. Minus est eveniet et minus ut dolorem. Quis et unde aperiam magnam
                                    tempore est. Minus est eveniet et minus ut dolorem. Quis et unde aperiam magnam
                                    tempore est.
                                </div>
                                <?php
                                $socReview = false;
                                if ($socReview) : ?>
                                    <p>
                                        <a href="#" target="_blank">
                                            Профиль VK
                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
