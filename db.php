


<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);



if (!defined("DB_TYPE")){
    define("DB_TYPE","mysql");
}
if (!defined("DB_HOST")){
    define("DB_HOST","localhost");
}
if (!defined("DB_NAME")){
    define("DB_NAME","campusv2");
}

if (!defined("DB_USER")){
    define("DB_USER","campus");
}

if (!defined("DB_PWD")){
    define("DB_PWD","campus2023");
}

?>