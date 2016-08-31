<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
       $this->getView()->assign("content", "Hello World");
       $conf = Yaf_Registry::get('config')->get('resources.database.params')->toArray();
       print_r($conf);
   }
}
?>