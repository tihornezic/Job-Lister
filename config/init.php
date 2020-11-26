
<?php
// config file
require_once 'config.php';

/* auto loader: it will include a file whenever you
instantiate a class */
function __autoload($class_name){
    require_once 'lib/' .$class_name .'.php';
}

// echo 'test';

?>