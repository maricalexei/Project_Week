<?php 
   require_once 'navbar.php';
  if(isset($_GET['name'])) {
    require_once 'connect_db.php';
    require_once 'functions.php';
   

    $name = sanitize($_GET['name']);
    //  $info = sanitize($_GET['info']);

    $sql = "SELECT * FROM csgowiki WHERE name='$name'";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    // var_dump($row);
  } else {
    echo 'doei';
  }
?>

<!-- <h1><?=$row['name']?></h1> -->
<!-- <p><?=$row['info']?></p> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon">

    <title>CS:GO Wiki</title>
  </head>
  <body>
<!-- this is the card for all the information -->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-9" id="card1">
    <div class="card text-white bg-dark mb-3">
  <div class="card-body">
    <h5 class="card-title"><?=$row['name']?></h5>
    <p class="card-text"><?=$row['info']?></p>
  </div>
     </div>
    </div>
   </div>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>




