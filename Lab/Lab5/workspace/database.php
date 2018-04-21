<?php

function getDatabaseConnection()
{
    
    
    //$host = "localhost";
    //$username = "jetblack65";
    //$password = "";
    //$dbname="techcheckout";
    
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "bb108e997bcdab";
    $password = "7b071f8b";
    $dbname = "heroku_3d24ca78bc82e88"; 

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>