<?php
ob_start();//Turns output buffering on
session_start();

date_default_timezone_set("Asia/Kolkata");

try{
    $con = new PDO("mysql:dbname=desiflix;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

}
catch(PDOException $e){
    exit("Connection failed: " . $e->getMessage());
}


?>