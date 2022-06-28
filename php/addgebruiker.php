<?php

  include_once "connection.php";

  if(isset($_SESSION['username'])){?>
    <p><?php echo "welcome " . $_SESSION['username']; ?></p>
    <?php
  }  else {
      header("location: login.php");
  }

  if(isset($_POST["submit"])){

    $sql = "INSERT INTO admin
              (username, password)
              VALUES
              (:username, :password)
      ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':username', $_POST['username']);
      $stmt->bindParam(':password', $_POST['password']);
      $stmt->execute();
      header("location: gebruikers.php");
  }
?>


<form action="" method="post">
username<input type="text" name="username" id=""><br />
password<input type="text" name="password" id=""><br />
<input type="submit" value="toevoegen" name="submit">
</form>

