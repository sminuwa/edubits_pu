

<?php

include "DBQuery.php";

/*Creating the instance of the DBQuery class*/
$DBQuery = new DBQuery();

//fetching all the information

function arrayValues(array $arrayValues){
    /** @var $post_array */
    $post_array = json_encode($_POST);
    $arrayValues = json_decode($post_array);
}


if (!empty($array)) {
    foreach ($arrValues as $values){
        $arrValues[] = $values;
    }
    echo $DBQuery->INSERTQuery("TableName", $arrValues);
}

$state = $conn->prepare($DBQuery->INSERTQuery("bits_students_records", $arrValues))

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST REQUEST</title>
</head>
<body style="text-align: center;">

<form action="index.php" method="POST">
    <input type = "text" name="fullname" title=""> <br>
    <input type = "text" name="username" title=""> <br>
    <input type = "password" name="password" title=""> <br>
    <input type = "submit" value="Register">
</form>

</body>
</html>

