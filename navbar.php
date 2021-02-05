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
      <!-- This is the Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
  <div class="container-fluid">
      <img src="./img/icons/csgoicon.png" id="csicon" alt="Icon">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Weapons
          </a>
          <!-- This is the dropdown for the weapons -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./weapons.php?name=knifes">Knifes</a></li>
            <li><a class="dropdown-item" href="./weapons.php?name=pistols">Pistols</a></li>
            <li><a class="dropdown-item" href="./weapons.php?name=submachineguns">Submachine guns</a></li>
            <li><a class="dropdown-item" href="./weapons.php?name=rifles">Rifles</a></li>
            <li><a class="dropdown-item" href="./weapons.php?name=heavy">Heavy</a></li>
          </ul>
          <!-- <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Equipment
          </a>
                   
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./Equipment/grenades.php">Grenades</a></li>
            <li><a class="dropdown-item" href="./Equipment/gear.php">Gear</a></li>
          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gamemodes
          </a>
                    
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./Gamemodes/bom.php">Bom Defuse</a></li>
            <li><a class="dropdown-item" href="./Gamemodes/deathmatch.php">Deathmatch</a></li>
            <li><a class="dropdown-item" href="./Gamemodes/hostage.php">Hostage Situation</a></li>
            <li><a class="dropdown-item" href="./Gamemodes/wingman.php">Wingman</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Maps
          </a>
                   
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./Maps/dust.php">Dust-2</a></li>
            <li><a class="dropdown-item" href="./Maps/mirage.php">Mirage</a></li>
            <li><a class="dropdown-item" href="./Maps/inferno.php">Inferno</a></li>
            <li><a class="dropdown-item" href="./Maps/duke.php">Duke</a></li>
          </ul> -->
        </li>
      </ul>
    </div>
  </div>
</nav>