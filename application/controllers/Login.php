<?php

/**
 * 测试下登录的控制层视图
 * @author lyf
 *
 */
class LoginController extends Yaf_Controller_Abstract
{

    public function indexAction($name)
    {
        $router = Yaf_Dispatcher::getInstance()->getRequest();
        //print_r($router);
        $this->getView()->assign("content", "");
        
        //echo Yaf_Registry::get('config');
        
        echo $this->getRequest()->getParam("name");
        /*
         * 获得模块名称,默认Index
         */
        echo $this->getModuleName();
        
        $response = $this->getResponse();
        
        print_r($response);
        
        echo "current Controller:" . $this->getRequest()->getControllerName();
        
        
        echo '---------'.$name.'==========';
        
        print_r($this->getRequest()->getParams());
        
        echo "user id:" . $this->getRequest()->getParam("userid", 0);
    }
    
    public function listAction($idss){
        echo $idss;
        exit;
    }
}