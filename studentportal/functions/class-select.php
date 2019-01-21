<?php
	/**
	 * Created by PhpStorm.
	 * User: Engr
	 * Date: 11/22/2018
	 * Time: 9:08 PM
	 */
	require "../configuration.php";
	
	class Select
	{
		public $condition = array();
		
		function __construct($table, $column, $condition, $conn)
		{
			//
			if (!empty($condition)) {
				foreach ($condition as $cond) {
					$conditions = $cond . " AND ";
				}
				
			} else {
				$condition = "";
			}
			
			$condition = "WHERE ${conditions} ";
			$result = $conn->query("SELECT ${column} FROM ${table} ${condition}")->fetchAll();
		}
		
		
	}