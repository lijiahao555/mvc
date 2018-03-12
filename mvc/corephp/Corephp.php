<?php

namespace corephp;

// 框架根目录         如果没有定义则定义  类似三元运算
defined('CORE_PATH') or define('CORE_PATH', __DIR__);

/**
* 框架核心类
*/
class Corephp
{

	protected $config;

	public function __construct($config)
	{
		$this->config = $config;
	}

	public function run()
	{
		echo 1;
	}

}