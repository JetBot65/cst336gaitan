<?php
// connect to our mysql database server

function getDatabaseConnection() {
       
    //$connParts = parse_url($url);
    $connUrl = getenv('JAWSDB_MARIA_URL');
    $connUrl = "";
    $hasConnUrl = !empty($connUrl);

    $connParts = null;
    if ($hasConnUrl) {
    $connParts = parse_url($connUrl);
}

   //var_dump($hasConnUrl);
    $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
    $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'tech_checkout';
    $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
    $password = $hasConnUrl ? $connParts['pass'] : '';

    return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  
    }


?>