<?php

function hourMinute($mins){
    if($mins<60){
        $h=0;
    $m=$mins;}
    else{
    $h=round($mins/60);
    $m=$mins%60;
    
}
return "$h hours and $m minutes";
}

echo hourMinute(200);