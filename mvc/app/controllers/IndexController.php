<?php

namespace app\controllers;

use app\Models\GoodsModel as Goods;

/**
* 测试
*/
class IndexController extends \corephp\base\Controller
{

	// public $layout = 'layout.php';

	public function actionIndex()
	{
		$goods = new Goods;
		$data = $goods->where(['id = ?'], [3])->fetchAll();
		var_dump($data);die;
		// $this->assign('a','b');
		$this->render(['b'=> 1]);
	}
}