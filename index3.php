<?php

function result($math,$physics,$english){
    $sum=$math + $physics + $english;
    $avg = $sum/3;
    echo "Sum: $sum <br>";
    echo "Average: $avg";
}

result(1,2,3);