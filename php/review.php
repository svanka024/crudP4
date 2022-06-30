<?php 
include_once "connection.php";
if(isset($_POST["submit"])){

    $sql = "INSERT INTO recensies
              (naam, email, sterren, review)
              VALUES
              (:naam, :email, :sterren, :review)
      ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':naam', $_POST['naam']);
      $stmt->bindParam(':email', $_POST['email']);
      $stmt->bindParam(':sterren', $_POST['sterren']);
      $stmt->bindParam(':review', $_POST['review']);
      $stmt->execute();
      header("location: reviewgeslaagd.php");
  }
?>

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
        <a class="navbar-brand text-info" href="../information.html">information</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="aboutus.php">about us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-info" href="php/contact.php"><strong>Contact</strong></a>
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
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div id="booking" class="sectionlogin">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-white text-info" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
    
                <div class="mb-md-5 mt-md-4 pb-5">
    
                  <h2 class="fw-bold mb-2 text-uppercase">review</h2>
                  <p class="text-info-50 mb-5">plaats hier uw review!!</p>
                  <form action="" method="post">
                  <div class="form-outline form-white mb-4" id="loginForm">
                    <input type="text" id="naam" name="naam" class="form-control form-control-lg" value=""/>
                    <label class="form-label" for="typeEmailX">Naam</label>
                  </div>
    
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" value=""/>
                    <label class="form-label" for="typePasswordX">E-mail</label>
                  </div>   
                  <div class="form-outline form-white mb-4" id="loginForm">
                  <label class="my-1 mr-2" name="sterren" for="inlineFormCustomSelectPref">aantal sterren</label>
                    <select class="custom-select my-1 mr-sm-2" name="sterren" id="inlineFormCustomSelectPref">
                      <option selected>1</option>
                      <option value="1">2</option>
                      <option value="2">3</option>
                      <option value="3">4</option>
                      <option value="3">5</option>
                    </select>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="review" rows="3"></textarea>
                    <label class="form-label" for="typePasswordX">Bericht</label>
                    <p><a href="contact.php">stel hier uw vragen!</a></p>
                  </div>     
                  <input class="btn btn-primary btn-lg px-5" type="submit" value="Submit" name="submit"/>     
                  </form> 
                </div>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
