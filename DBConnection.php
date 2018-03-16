<?php
// connect to our mysql database server

function getDatabaseConnection() {
    $host = "localhost";
    $dbname = " "; 
    $username = "jetblack65";
    $password = "tman65";
     
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}





?><?php
