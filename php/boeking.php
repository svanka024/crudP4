<?php include_once "connection.php";

//dit stuk haalt de data op
$sql = "SELECT * FROM flights";
$stmt = $conn->prepare($sql);
$stmt->execute();
//haal alle data op en knal die in een variabele genaam results
$results = $stmt->fetchAll();
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>fly away</title>
    <script src="script/script.js" defer></script>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link type="text/css" rel="stylesheet" href="../css/main.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white super_float">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="" width="160" height="160">
          </a>
        <a class="navbar-brand text-info" href="../index.php">home</a>
        <button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="boeking.php"><strong>booking</strong></a>
        <button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="../information.html">information</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="aboutus.php">about us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="contact.php">Contact</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="../fotos.html">fotos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="login.php">login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="logout.php">logout</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <form action="flights.php" class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </div>
      </div>
    </nav>
    <div id="booking" class="section">
      <div class="conttop">
        <div>
          <h1 class="flyaway">fly<strong class="text-info">away</strong></h1>
        </div>
      </div>
      <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
        <?php foreach($results as $res){   ?>

          <div class="col mb-5">
            <div class="card h-100">
              <div class="card-body p-4">
                <div class="text-center">
                  <h5 class="fw-bolder">van <?php echo $res['beginbestemming'];?> naar <?php echo $res['eindbestemming'];?></h5>
                  <p class="card-text"><?php echo $res['maatschappij'];?></p>  
                  <?php 
 // als session bekend is, dan laat je die knop zien
                    if(isset($_SESSION['ID'])){

                  ?>
                  <a href="boekingafronden.php?id=<?php $res['ID']?>" class="btn btn-primary">Boek</a>   
                  <?php   }?>   
                </div>
              </div>
            </div>
          </div>

    <?php  }   ?>
    
    </div>
    </div>
    <footer class="sticky-footer">
      <ul class="ul1">
        <li><a class="text-info">info@FlyAway.com</a></li>
        <li><a class="text-info">06 16436963</a></li>
        <li><a class="text-info">instagram: fly.away</a></li>
        <li><a class="text-info" href="voorwaarden.html">algemene voorwaarden</a></li>
      </ul>
      <p class="text-info">made by Jasper and Sven</p>
    </footer>
  </body>
</html>
