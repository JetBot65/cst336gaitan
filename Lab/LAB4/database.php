<?php
// connect to our mysql database server

function getDatabaseConnection() {
       
    //$connParts = parse_url($url);
    $connUrl = getenv('JAWSDB_MARIA_URL');
    $connUrl = "mysql://e7hgk7zf4zd7h0vk:o3z4gl72119psu30@if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/lbz4ylohgaug7ala";
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