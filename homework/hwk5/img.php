<?php

function displayRandomImg()
{
    $images = array("/img/captain_america.png", "", "/img/wonder_woman.png", "", "img/hulk.png", "img/iron_man.png" ,"img/spiderman.png","img/superman.png", "img/batman.png" );

    $randomNumber = rand(0, (count($images) - 1));

    echo '<img src="' . $images[$randomNumber] . '" width="725" height="194">';

};
 return $images
?>