<?php include_once "connection.php";

//dit stuk haalt de data op
$sql = "SELECT * FROM recensies";
$stmt = $conn->prepare($sql);
$stmt->execute();
//haal alle data op en knal die in een variabele genaam results
$results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>fly away</title>
    <script src="../script/script.js" defer></script>
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
        <a class="navbar-brand text-info" href="boeking.php">booking</a>
        <button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="../information.html">information</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="aboutus.php"><strong>About us</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="contact.php">contact</a>
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
        </div>
      </div>
    </nav>
    <div id="booking" class="section">
      <div class="conttop">
        <div>
          <h1 class="flyaway">fly<strong class="text-info">away</strong></h1>
        </div>
      </div>
        <div class="textau text-white">
          <h1 class="font-weight-bold"><strong>over ons: wij hebben 8 gespecialeerde vakantie boekers in huis met ieder hun eigen specialitiet.
            al ons personeel kan u alles vertellen over de cultuur van het land waar u naartoe wilt.
            ze hebben zelf ook veel ervaring opgedaan in het land en weten leuke hotspots.
            het personeel spreekt zelf ook veel talen van het gebied waar ze geweest zijn.
          </strong></h1>
        </div>
        <div class="cards-spacer text-right">
          <h1 class="font-weight-bold text-white"><strong>medewerkers: </strong></h1>     
          <div class="cards">
            <div class="card">
              <img class="card-img-top" src="../img/pas1.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Ravi</strong></h5>
                <p class="card-text">ravi is gespecializeerd in reizen in azie.
                  <strong>talen:</strong>nederlands, engels, chinees, japans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas2.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Dario</strong></h5>
                <p class="card-text">Dario is gespecializeerd in reizen in afrika.
                  <strong>talen:</strong>nederlands, engels.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas3.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Leslie</strong></h5>
                <p class="card-text">leslie is gespecializeerd in reizen in noord europa.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas4.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Arielle</strong></h5>
                <p class="card-text">arielle is gespecializeerd in reizen in oost europa.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas5.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Aliza</strong></h5>
                <p class="card-text">Aliza is gespecializeerd in reizen in zuid auropa.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas6.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Casper</strong></h5>
                <p class="card-text">casper is gespecializeerd in roadtrip reizen.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas7.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Marcus</strong></h5>
                <p class="card-text">marcus is gespecializeerd in reizen met of op een boot.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../img/pas8.au" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><strong>Kelly</strong></h5>
                <p class="card-text">kelly is gespecializeerd in reizen in west europa.
                  <strong>talen:</strong>nederlands, engels, frans, duits, spaans.
                </p>
              </div>
            </div>
          </div>
      </div>
      <div class="container text-center">
        <br>
        <br>
        <h1 class="font-weight-bold text-white"><strong>reviews </strong></h1>     
      </div>
      <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
        <?php foreach($results as $res){   ?>

          <div class="col mb-5">
            <div class="card h-100">
              <div class="card-body p-4">
                <div class="text-center">
                  <h5 class="fw-bolder"><?php echo $res['naam'];?></h5>
                  <p class="card-text">aantal sterren:<?php echo $res['sterren'];?></p>        
                  <p class="card-text"><?php echo $res['review'];?></p>            
                </div>
              </div>
            </div>
          </div>

    <?php  }   ?>
    
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
