<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
</head>
<body>
    <h1>Weather Forecast</h1>
    

    <?php

function convertor($f){
 $c = round(($f-32) * (5/9));
switch($c){
    case $c < 5:
    echo "<h1>Today is very cold</h1>";
    echo "<img src='https://cdn.pixabay.com/photo/2016/01/08/06/13/woman-1127201_960_720.jpg' />";
    break;
    case $c < 10:
    echo "<h1>Today is cold</h1>";
    echo "<img src='https://cdn.pixabay.com/photo/2016/12/19/21/36/woman-1919143_960_720.jpg' />";
    break;
    case $c < 15:
     echo "<h1>Today is pleasant</h1>";
     echo "<img src='https://cdn.pixabay.com/photo/2016/08/04/18/30/model-1569741_960_720.jpg' />";
    break;
    case $c < 20:
     echo "<h1>Today is warm</h1>";
    echo "<img src='https://cdn.pixabay.com/photo/2021/06/20/16/57/woman-6351539_960_720.jpg' />";
     break;
     case $c > 20:
        echo "<h1>Today is hot</h1>";
       echo "<img src='https://cdn.pixabay.com/photo/2017/05/23/17/54/summer-2337955_960_720.jpg' />";
        break;
        default:
            echo "Something is not right";
}

}

convertor(65);

?>

</body>
</html>