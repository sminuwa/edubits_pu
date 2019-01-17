<?php
/**
 * Created by PhpStorm.
 * User: Sunusi Mohd Inuwa
 * Date: 8/1/2018
 * Time: 11:14 PM
 */

const DBHOSTNAME = "localhost";
const DBUSERNAME = "root";
const DBPASSWORD = "";
const DBDATABASE = "edubits";


try{
    $conn = new PDO("mysql:host=".DBHOSTNAME.";dbname=".DBDATABASE."", DBUSERNAME, DBPASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo "Error say: # ".$e;
}

class DBQuery
{

    /*Creating PDO database connection*/
    /**
     * @param $tablename
     * @param array $values
     */
    public function INSERTQuery($tablename, array $values){


    }

    function SQL(){

    }
}