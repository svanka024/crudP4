<?php

function (is_user_logged_in()){
include_once "connection.php";
if(isset($_SESSION['username'])){?>
  <div class="text-center">
   <h1><a href="logout.php"> uitloggen</a></h1> <h2><a href="admin.php">Terug</a></h2>
   </div>
   <?php
}  else {
    header("location: login.php");
} 
};

$sql = "SELECT * FROM admin";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
      <link rel="stylesheet" href="style/style.css">    <title>Document</title>
</head>
<body>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">img</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
  <?php
foreach($result as $res){ ?>
    <tr>
      <th><img ></th>
      <td><?php echo $res['username'];?></td>
      <td><?php echo $res['password'];?></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
</body>
</html>
