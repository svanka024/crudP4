<?php

  include_once "connection.php";

  if(isset($_SESSION['username'])){?>
    <p><?php echo "welcome " . $_SESSION['username']; ?></p>
    <?php
  }  else {
      header("location: login.php");
  }

  if(isset($_POST["submit"])){

    $sql = "INSERT INTO flights
              (beginbestemming, eindbestemming, maatschappij)
              VALUES
              (:beginbestemming, :eindbestemming, :maatschappij)
      ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':beginbestemming', $_POST['beginbestemming']);
      $stmt->bindParam(':eindbestemming', $_POST['eindbestemming']);
      $stmt->bindParam(':maatschappij', $_POST['maatschappij']);
      $stmt->execute();
      header("location: reizen.php");
  }
?>


<form action="" method="post">
beginbestemming<input type="text" name="beginbestemming" id=""><br />
eindbestemming<input type="text" name="eindbestemming" id=""><br />
maatschappij<input type="text" name="maatschappij" id=""><br />
<input type="submit" value="toevoegen" name="submit">
</form>

