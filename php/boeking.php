<!-- 
// dit stuk haalt de data op
// $sql = "SELECT * FROM flights";
// $stmt = $conn->prepare($sql);
// $stmt->execute();

//               $filter = $_GET['zoekopdracht'];
 
//               $kandidaat_flights = $flights;
//               $flights = [];
  
//               foreach($kandidaat_flights as $flight) {
//                 foreach($flight['eindbestemming'] as $tag) {
//                   if ($tag == $filter) {
//                     array_push($flights, $flight);
//                   }
//                 }
//               }
               -->

<?php

include_once "connection.php";

$sql = "SELECT * FROM flights";
$stmt = $conn->prepare($sql);
$stmt->execute();

if (isset($_POST['search'])) {

     $Name = $_POST['search'];

     $Query = "SELECT eindbestemming FROM search WHERE eindbestemming LIKE '%$einbestemming%' LIMIT 11";

     $ExecQuery = MySQLi_query($con, $Query);};

     echo '
  <ul>
     ';

     while ($Result = ($ExecQuery)) {};
         ?>

     <li onclick='fill("<?php echo $Result['eindbestemming']?>")
     <a>

         <?php echo $Result['eindbestemming']; 

         ?>
     </li></a>

<script>

function fill(Value) {
   //Assigning value to "search" div in "search.php" file.
   $('#search').val(Value);
   //Hiding "display" div in "search.php" file.
   $('#display').hide();
}
$(document).ready(function() {
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
   $("#search").keyup(function() {
       //Assigning search box value to javascript variable named as "name".
       var eindbestemming = $('#search').val();
       //Validating, if "name" is empty.
       if (eindbestemming == "") {
           //Assigning empty value to "display" div in "search.php" file.
           $("#display").html("");
       }
       //If name is not empty.
       else {
           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "boeking.php",
               //Data, that will be sent to "ajax.php".
               data: {
                   //Assigning value of "name" into "search" variable.
                   search: eindbestemming
               },
               //If result found, this funtion will be called.
               success: function(html) {
                   //Assigning result to "display" div in "search.php" file.
                   $("#display").html(html).show();
               }
           });
       }
   });
});

</script>

<!DOCTYPE html>
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

        <input type="text" id="search" placeholder="Search" />
   <br>
   <b>Ex: </b><i>barcelona, parijs, sidney, lissabon, rome, istanbul, madrid, los angles, new york, munchen, las vegas</i>
   <br />
   <div id="display"></div>

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
                  <a href="boekingafronden.php?id=<?php echo $res['ID']?>" class="btn btn-primary" name="submit">Boek</a>   
                 <?php   } ?>
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
