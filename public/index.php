<?php 
use Illuminate\Database\Capsule\Manager as Capsule;
	error_reporting(0);

	define('BASE_PATH', dirname(__DIR__));
	//autoload 自动载入
	require '../vendor/autoload.php';

	$capsule = new Capsule;
	$capsule->addConnection(require '../config/database.php');
	$capsule->bootEloquent();

	//路由配置
	require '../config/routes.php';