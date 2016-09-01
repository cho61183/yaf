<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{

    /**
     * 初始化配置文件
     */
    public function _initConfig()
    {
        $config = Yaf_application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }
    public function _initRegistry(){
        Yaf_Registry::set('config', 'demos');
    }
}