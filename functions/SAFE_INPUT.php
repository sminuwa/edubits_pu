<?php
	/**
	 * Created by PhpStorm.
	 * User: Engr
	 * Date: 11/19/2018
	 * Time: 9:12 AM
	 */
	
	function safe_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data, ENT_QUOTES);
		return $data;
	}