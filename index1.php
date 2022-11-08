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
    <h3 class=text-center>GET Method</h3>
    <form method="GET">
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name">
            <div class="form-text">We’ll share your name and surname in the URL.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        if ($_GET['first_name'] && $_GET['last_name']) {
            echo "Welcome " . $_GET['first_name'] . " " . $_GET['last_name'];
        } else {
            echo "Please insert your first and your last name.";
        }
    }
   
    ?>

    <!-- bootstrap version 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>