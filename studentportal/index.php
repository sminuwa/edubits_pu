<?php
	/**
	 * Created by PhpStorm.
	 * User: Engr
	 * Date: 11/23/2018
	 * Time: 7:56 AM
	 */
	
	require "init.php";
	
	$URL = explode("/", $_SERVER["QUERY_STRING"]);



//	echo "<pre>";
//	echo print_r($URL);
//	echo print_r($_SERVER);
//	echo "</pre>";
	if(file_exists( "view/".$URL[0].".php")){
		require "view/".$URL[0].".php";
	}else{
		require "view/404.php";
	}
	