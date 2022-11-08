<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap version 5.2 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Weather Forecast</h1>
    
    <div class="position-absolute top-50 start-50 translate-middle">
     <div class="card " style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
         <div class="card-body">
            <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  
  </div>
</div>
<br>
<div class="text-center">
  <a class="btn btn-primary ">Try again</a>  
</div>
    </div>
  

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

    <!-- bootstrap version 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>