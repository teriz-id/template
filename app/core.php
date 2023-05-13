<?php

date_default_timezone_set('Asia/Jakarta');

define("_ver", "1.12");

define("baseurl", "//" . $_SERVER['HTTP_HOST']);
if ($_SERVER['HTTP_HOST'] == 'localhost:1234') :
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'qondangan');
else :
    define('DB_HOST', 'localhost');
    define('DB_USER', 'u1604216_qondangan');
    define('DB_PASS', '!T3rsm2nz');
    define('DB_NAME', 'u1604216_qondangan');
endif;

define("ROOT", dirname(dirname(__FILE__)));
define("APP", ROOT . '/app');
define("PUB", ROOT . "/public");

include(APP . "/App/Language.php");
include(APP . "/App/Flasher.php");
include(APP . "/App/Config.php");

include(APP . "/routes.php");
