<?php

function getDatabaseConnection($dbname){
    $host = "localhost";
   //$dbname = "otter_express";
   //this is assuming that everyone has the same username and password
    $username = "web_user";
    $password = "s3cr3t";
    
    //connecting to the database
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //Setting Errorhandling to Exception
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    return $dbConn; 
}  

?>