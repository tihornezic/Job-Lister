
<?php

// in order for session variables to work
session_start();

// config file
require_once 'config.php';

// include helpers
require_once 'helpers/system_helper.php';

/* auto loader: it will include a file whenever you
instantiate a class */
function __autoload($class_name){
    require_once 'lib/' .$class_name .'.php';
}

// echo 'test';

?>