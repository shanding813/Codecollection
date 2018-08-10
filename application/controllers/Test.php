<?php
/**
 * @name IndexController
 * @author gaojunling
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract {

	public function addAction() {
            	//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");
		print_r($get);exit;

	}
}
