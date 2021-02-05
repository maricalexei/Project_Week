<?php 
   require_once 'navbar.php';
  if(isset($_GET['name'])) {
    require_once 'connect_db.php';
    require_once 'functions.php';
   

    $name = sanitize($_GET['name']);

    $sql = "SELECT * FROM csgowiki WHERE name='$name'";
    echo $sql;
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    var_dump($row);
  } else {
    echo 'doei';
  }
?>

<h1><?-$row['name']?></h1>
<p><?-$row['info']?></p>




