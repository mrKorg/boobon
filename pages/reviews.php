<?php include_once("../config.php"); ?>

<?php include(ROOT . '/pages/parts/layoutTop.php') ?>

    <?php
    $title = 'Отзывы';
    include (ROOT . '/pages/parts/pageHeader.php') ?>

    <div class="pReviews">
        <div class="container">
            <div class="pReviews__list">
                <?php for ($i=0; $i<12; $i++) : ?>
                    <div class="pReviews__item">
                        <div class="eReview--black">
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
                                Non porro ipsum sapiente quasi rerum repellat. Mollitia minima fugit minima tenetur
                                illo reiciendis. Minus est eveniet et minus ut dolorem. Quis et unde aperiam magnam
                                tempore est.
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

<?php include(ROOT . '/pages/parts/layoutBottom.php') ?>