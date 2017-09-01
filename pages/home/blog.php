<div class="mainBlog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mainBlog__title">
                    <span>
                        Лайфхаки от Бубона
                    </span>
                </h3>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3 mainBlog__icon">
                <svg width="285" height="230">
                    <use xlink:href="#boobon-blog"></use>
                </svg>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="mainBlog__slider">
                    <div class="js_mainBlog__slider">

                        <?php for ($i=0; $i < 10; $i++) : ?>
                            <div>

                                <?php include 'blog/parts/preview.php'?>

                            </div>
                        <?php endfor; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>