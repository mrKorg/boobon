<?php if (isset($title)) : ?>
    <div class="pageHead <?php echo (isset($align)) ? 'pageHead--' . $align : ''?>">
        <div class="container">
            <h1 class="pageHead__title">
                <?php echo $title ?>
            </h1>
        </div>
    </div>
<?php endif; ?>