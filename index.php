<?php

define('APPLICATION_PATH', dirname(__FILE__));
try{
$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");
}catch(Exception $e){
    var_dump($e);exit;
}
$application->bootstrap()->run();
?>
