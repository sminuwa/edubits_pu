<?php
	
	/**
	 * Created by PhpStorm.
	 * User: Sunusi Mohd Inuwa
	 * Date: 11/18/2018
	 * Time: 11:02 AM
	 */
	
	require "config.php";
	
	class Query
	{
		
		public static function INSERT($table, $data)
		{
			
			$config = new Config();
			
			$conn = Config::$conn;
			
			//variable declaration
			$columns = "";
			$valueset = "";
			$values = "";
			
			//loop
			foreach ($data as $column => $value) {
				$columns = $columns . ', ' . $column;
				$valueset = $valueset . ', ?';
				$values = $values . ',' . $value;
			}
			
			//trimming the first comma from the result above
			$columns = ltrim($columns, ',');
			$valueset = ltrim($valueset, ',');
			$values = ltrim($values, ',');
			
			//statement
			$sql = "INSERT INTO ${table} ( ${columns} ) VALUES ( ${valueset} )";
			
			//convert values to array
			$values = explode(',', $values);
			
			//query
			$query = $conn->prepare($sql);
			$query->execute($values);
			//$query = $conn->prepare($sql)->execute([$values]);;
			
			
		}
	}


?>