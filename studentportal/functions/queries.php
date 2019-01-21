<?php
	/**
	 * Created by PhpStorm.
	 * User: Sunusi Mohd Inuwa
	 * Date: 11/21/2018
	 * Time: 6:35 PM
	 */
	require_once "../configuration.php";
	require_once "../functions/TIME_ELAPSE.php";
	
	
	/*
	 * get the host name
	 * through where the portal is accesses*/
	$client_host = $_SERVER['HTTP_HOST'];
	$client = $conn->query("SELECT * FROM bits_clients WHERE client_host = '${client_host}' ")->fetch();
	
	/*
	 * check if the client has been registered with edubits system
	 * if registered then assign client
	 * else display an error*/
	if (empty($client)) {
		die("<h1>Client \"<strong><i>" . $client_host . "</i></strong>\" has not been registered</h1>");
	}
	$client_id = $client['client_id'];
	
	/*
	 * checking whether client registered this module
	 * give access if registered
	 * else deny access to this module*/
	$module = $conn->query("SELECT * FROM bits_clients_modules WHERE client_id = '${client_id}' ")->fetchAll();
	
	/*echo "<pre>";
	print_r($module);
	echo "</pre>";*/
	
	
	class Setting
	{
		function __construct($conn, $client_id)
		{
			$query_setting = $conn->query("SELECT * FROM job_settings WHERE client_id = '${client_id}' ");
			$setting = $query_setting->fetch();
			$this->is_payable = $setting['is_payable'];
			if ($this->is_payable == 1) {
				$this->amount = $setting['amount'];
			} else {
				$this->amount = "";
			}
		}
	}
	
	class Client
	{
		function __construct($conn, $client_id)
		{
			$query_client = $conn->query("SELECT `bits_clients`.* FROM `bits_clients` WHERE `client_id` = '${client_id}' ");
			$client = $query_client->fetch();
			$this->name = $client['client_name'];
			$this->logo = $client['client_logo'];
			$this->acronym = $client['client_acronym'];
			$this->address = $client['client_address'];
			$this->phone_primary = $client['client_phone_primary'];
			$this->phone_secondary = $client['client_phone_secondary'];
			$this->email = $client['client_email'];
		}
	}
	
	class Job
	{
		
		function __construct($conn, $client_id)
		{
			$stmt = "SELECT job_jobs.*,job_categories.*,job_types.*
					   FROM job_jobs
					   JOIN job_categories
						ON job_jobs.category_id = job_categories.category_id
						JOIN job_types
						ON job_jobs.type_id = job_types.type_id
						WHERE job_jobs.client_id = '${client_id}'
						AND job_status = 1
						ORDER BY job_id DESC
						";
			$query_job = $conn->query($stmt);
			$this->jobs = $query_job->fetchAll();
			/*echo "<pre>";
			print_r($this->jobs);
			echo "</pre>";*/
		}
		
		
	}
	
	/*single job details*/
	
	class JobDetails extends Job
	{
		
		public function singleJobDetails($conn, $job_id)
		{
			$stmt = "SELECT job_jobs.*,job_categories.*,job_types.*
					   FROM job_jobs
					   JOIN job_categories
						ON job_jobs.category_id = job_categories.category_id
						JOIN job_types
						ON job_jobs.type_id = job_types.type_id
						WHERE job_jobs.job_id = '${job_id}'
						AND job_status = 1
						ORDER BY job_id DESC
						";
			
			$jobDetails = $query_singleJobDetails = $conn->query($stmt)->fetch();
			return $jobDetails;
		}
		
		public function jobRequirements($conn, $job_id)
		{
			$stmt = "SELECT t.* FROM edubits.job_requirements t WHERE job_id = '${job_id}' ";
			$jobRequirements = ($query_jobRequirements = $conn->query($stmt)->fetchAll());
			/*checking if this query returns a value
			if no result found in the query
			then set the $jobRequirement to nothing
			and finally return the JobRequirements*/
			if(empty($jobRequirements)){
				$jobRequirements = null;
			}return $jobRequirements;
		}
		
	}
	
	$client = new Client($conn, $client_id);
	$setting = new Setting($conn, $client_id);
	$job = new Job($conn, $client_id);
