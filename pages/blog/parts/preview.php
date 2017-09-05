<div class="eBlogPreview">
    <p class="eBlogPreview__image">
        <a href="<?php echo HTTP ?>/pages/blog/show.php">
            <img src="<?php echo HTTP ?>/assets/images/placeholder-blog-preview.jpg" alt="">
        </a>
    </p>
    <h5 class="eBlogPreview__title">
        <a href="<?php echo HTTP ?>/pages/blog/show.php">
           Тестовый заголовок записи блога
        </a>
    </h5>

    <p class="eBlogPreview__views">
        <svg width="26px" height="18px" viewBox="0 0 26 26" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <path d="M0,15.089434 C0,16.3335929 5.13666091,24.1788679 14.9348958,24.1788679 C24.7325019,24.1788679 29.8697917,16.3335929 29.8697917,15.089434 C29.8697917,13.8456167 24.7325019,6 14.9348958,6 C5.13666091,6 0,13.8456167 0,15.089434 Z"
                      id="outline<?php echo $i ?>"></path>
                <mask id="mask<?php echo $i ?>">
                    <rect width="100%" height="100%" fill="white"></rect>
                    <use xlink:href="#outline<?php echo $i ?>" class="lid" fill="black"/>
                </mask>
            </defs>
            <g class="eye">
                <path d="M0,15.089434 C0,16.3335929 5.13666091,24.1788679 14.9348958,24.1788679 C24.7325019,24.1788679 29.8697917,16.3335929 29.8697917,15.089434 C29.8697917,13.8456167 24.7325019,6 14.9348958,6 C5.13666091,6 0,13.8456167 0,15.089434 Z M14.9348958,22.081464 C11.2690863,22.081464 8.29688487,18.9510766 8.29688487,15.089434 C8.29688487,11.2277914 11.2690863,8.09740397 14.9348958,8.09740397 C18.6007053,8.09740397 21.5725924,11.2277914 21.5725924,15.089434 C21.5725924,18.9510766 18.6007053,22.081464 14.9348958,22.081464 L14.9348958,22.081464 Z M18.2535869,15.089434 C18.2535869,17.0200844 16.7673289,18.5857907 14.9348958,18.5857907 C13.1018339,18.5857907 11.6162048,17.0200844 11.6162048,15.089434 C11.6162048,13.1587835 13.1018339,11.593419 14.9348958,11.593419 C15.9253152,11.593419 14.3271242,14.3639878 14.9348958,15.089434 C15.451486,15.7055336 18.2535869,14.2027016 18.2535869,15.089434 L18.2535869,15.089434 Z"
                      fill="#092444"></path>
                <use xlink:href="#outline<?php echo $i ?>" mask="url(#mask<?php echo $i ?>)" fill="#092444"/>
            </g>
        </svg>
        3
    </p>
</div>