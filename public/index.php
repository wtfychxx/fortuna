<?php 
	session_start();	

	define('ROOT', dirname(dirname(__FILE__)));
	define('DS', DIRECTORY_SEPARATOR);

	$url = isset($_GET['url']) ? $_GET['url'] : '';

	require_once(ROOT .'/config/config.php');
	require_once(ROOT .'/library/model.class.php');
	require_once(ROOT .'/library/view.class.php');
	require_once(ROOT .'/library/controller.class.php');

	function __autoload($className){
		$dir = ROOT.DS.str_replace("\\", DS, $className).'.php';
		if(file_exists($dir)) require_once($dir);
	}

	function setReporting(){
		if(DEVELOPMENT_ENVIRONMENT == true){
			error_reporting(E_ALL);
			ini_set('display_error', 'On');
		}else{
			error_reporting(E_ALL);
			ini_set('display_errors', 'Off');
			ini_set('log_errors', 'On');
			ini_set('error_log', ROOT.'/tmp/log/error.log');
		}
	}

	function callHook(){
		global $url;
		$urlArray = explode('/', $url);
		$controller = (!empty($urlArray[0])) ? $urlArray[0] : DEFAULT_CONTROLLER;

		$controllerPath = ROOT.'/app/controller/'.ucfirst($controller) .'Controller.php';
		// print_r($controllerPath); exit;
		if(file_exists($controllerPath)){
			array_shift($urlArray);
			$action = (!empty($urlArray[0])) ? $urlArray[0] : 'index';
			array_shift($urlArray);
			$parameter = $urlArray;

			require_once $controllerPath;
			$controllerName = ucfirst($controller) .'Controller';
			$object = new $controllerName();

			if(method_exists($controllerName, $action)){
				call_user_func_array(array($object, $action), $parameter);
			}else die('Action Not Found');
		} else die('Controller Not Found');
	}

	setReporting();
	callHook();
 ?>