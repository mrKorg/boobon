<?php

define("ROOT", __DIR__);
define("HTTP", ($_SERVER["SERVER_NAME"] == "boobon")
    ? "http://boobon"
    : "http://your-webmasters.com/demo/boobon"
);