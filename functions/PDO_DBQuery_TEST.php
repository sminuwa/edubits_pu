<!DOCTYPE html>
<html>
<head>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
       $("document").ready(function(){
           $(".js-ajax-php-json").submit(function(){

               var data = $(this).serialize();
               $.ajax({
                   type: "POST",
                   dataType: "json",
                   url: "response.php", //Relative or absolute path to response.php file
                   data: data,
                   success: function(data) {
                       /*$(".the-return").html(
								 "Favorite beverage: " + data["favorite_beverage"] + "<br />Favorite restaurant: " + data["favorite_restaurant"] + "<br />Gender: " + data["gender"] + "<br />JSON: " + data["json"]
							  );*/

                       alert("Form submitted successfully.\nReturned json: " + data["json"]);
                   }
               });

           });
       });
	</script>-->
</head>
<body style="text-align:center">

<?php
	
	include "../configuration.php";
	include "PDO_DBQuery.php";
	
	$insert = new QUERY();
	if (isset($_POST) && !empty($_POST)) { //Checks if action value exists
		 $insert->INSERT('job_jobs', $_POST, $conn);
	}
?>

<form action="" class="js-ajax-php-json" method="post" accept-charset="utf-8"> <br>
	<input type="text" name="job_title" value="Assistant Lecturer" placeholder="Favorite restaurant" />  <br>
	<input type="text" name="category_id" value="1" placeholder="Favorite beverage" /> <br>
	<input type="text" name="job_nature" value="full Time" placeholder="Favorite beverage" />  <br>
	<input type="text" name="type_id" value="1" placeholder="Favorite beverage" /> <br>
	<input type="text" name="job_position" value="Assistant Lecturer" placeholder="Favorite beverage" />   <br>
	<input type="text" name="job_description" value="The quick brown fox jumps over the lazy dog" placeholder="Favorite beverage" />   <br>
	<input type="text" name="job_status" value="1" placeholder="Favorite beverage" />   <br>
	<input type="text" name="job_salary" value="1000" placeholder="Favorite beverage" /><br>
	<input type="text" name="job_location" value="Katsina" placeholder="Favorite beverage" />  <br>
	<input type="text" name="client_id" value="1" placeholder="Favorite beverage" />  <br>
	
	
	
	
<!--	category insert test -->
	<!--<input type="text" name="category_details" value="Lecturer" placeholder="" />  <br>
	<input type="text" name="client_id" value="1" placeholder="" /> <br>-->
	
	<!--	skills insert test -->
	<!--<input type="text" name="skill_details" value="Lecturer" placeholder="" />  <br>
	<input type="text" name="client_id" value="1" placeholder="" /> <br>-->
	
<!--	submit button for test-->
	<input type="submit" value="Submit form"  />
</form>




</body>
</html>