<?php

namespace app\controllers;

/**
* 测试
*/
class IndexController extends \corephp\base\Controller
{

	// public $layout = 'layout.php';

	public function actionIndex()
	{
		// $this->assign('a','b');
		$this->render(['b'=> 1]);
	}
}