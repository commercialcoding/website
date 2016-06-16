<?php
function myAutoloader($className){
   
    $path = $_SERVER['DOCUMENT_ROOT'].'/development/inc/classes/'.$className.'.class.php';
    include $path;
}
spl_autoload_register('myAutoloader');

?>