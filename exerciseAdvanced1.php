<?php

function convertor($f){
 $c = round(($f-32) * (5/9));
 return "$f F converted to C is $c ";
}

echo convertor(50);