<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 8/4/2018
 * Time: 5:59 PM
 */

function DBConnect($host,$user,$pass,$dbase){
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error say: # ".$e;
    }

    return $conn;


}
