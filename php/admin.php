<?php
include_once "connection.php";
 
$sql = "SELECT * FROM flights";
$stmt = $conn->prepare($sql);
$stmt->execute();
//  WHERE TYPE = "male" (voor welke tabel)
//$stmt->debugDumpParams();

$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>fly away</title>
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
    <link type="text/css" rel="stylesheet" href="css/main.css" />
  </head>
  <body> 
      <div class="text-center">
          <h1>admin pagina 
</h1>
<p><a href="logout.php">uitloggen.</a></p>
      </div>      
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <div class="centered">
              <a href="berichten.php"><button type="button" class="btn btn-info btn-lg">Berichten beheren</button></a>
              <a href="gebruikers.php"><button type="button" class="btn btn-info btn-lg">Gebruikers beheren</button></a>
              <a href="reizen.php"><button type="button" class="btn btn-info btn-lg">vluchten beheren</button></a>
            </div>
          </div>
        </div>
      </div>
  </body>
  </html>