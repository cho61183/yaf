<?php
define("APP_PATH", realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app = new Yaf_Application(APP_PATH . "/conf/application.ini",ini_get("yaf.environ"));
Yaf_Dispatcher::getInstance()->catchException(TRUE);
$app->Bootstrap()->run();
