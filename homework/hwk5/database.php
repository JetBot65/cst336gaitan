<?php


function getConnection($host, $dbname, $user, $pass = '') {
    return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}

?>