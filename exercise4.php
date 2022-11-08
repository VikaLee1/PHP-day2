<?php

function result($width,$height,$depth){
    $area = $width * $height;
    $volume=$width*$height*$depth;
    return "The area of the box is : $area <br> The volume of the box: $volume";
    
}

echo result(2,7,5);