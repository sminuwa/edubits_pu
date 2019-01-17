<?php
	/**
	 * Created by PhpStorm.
	 * User: Sunusi Mohd Inuwa
	 * Date: 11/17/2018
	 * Time: 9:23 PM
	 */
	
	class Config
	{
		const HOSTNAME = "localhost";
		const USERNAME = "root";
		const PASSWORD = "";
		const DATABASE = "edubits";
		public static $conn;
		
		function connection(){
			try
			{
				$conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DATABASE . ";", USERNAME, PASSWORD);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			}
			
			catch
			(PDOException $e) {
				echo $e;
			}
			self::$conn;
		}
	
	
	}
	
	
	
