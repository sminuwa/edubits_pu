<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 8/4/2018
 * Time: 7:25 PM
 */

require_once("DBConnection.php");

DBCOnnect("localhost","root", "", "edubits");




$query = $conn->prepare("insert into bits_students (student_firstname) values(:firstname) ");
$query->bindParam(":firstname", $name);

$name = "Sunusi";

$query->execute();