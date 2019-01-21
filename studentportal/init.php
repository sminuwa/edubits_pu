<?php
	/**
	 * Created by PhpStorm.
	 * User: Sunusi Mohd Inuwa, Fokalbits Technologies Ltd.
	 * Date: 11/20/2018
	 * Time: 7:36 AM
	 */
	
	//including functions and classes
	
	require_once "functions/queries.php";
	require_once "../functions/PDO_DBQuery.php";
	require_once "../functions/TIME_ELAPSE.php";
	require_once "../functions/SAFE_INPUT.php";
	
	function path(){
		$path = str_replace("index.php", "", $_SERVER['PHP_SELF']);
		return $path;
	}
	
	//constant variables declaration
	define("vPATH", path()."view/");
	define("imgPATH", path()."assets/images/");
	define("cssPATH", path()."assets/css/");
	define("jsPATH", path()."assets/js/");
	define("fontsPATH", path()."assets/fonts/");
	define("pluginPATH", path()."plugins/");
	
	
	
	
	