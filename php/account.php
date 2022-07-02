<?php
include_once "connection.php";
if(isset($_SESSION['username'])){?>
  <div class="text-center">
   <h1><a href="logout.php"> uitloggen</a></h1> <h2><a href="admin.php">Terug</a></h2>
   </div>
   <?php
}  else {
    header("location: login.php");
} 

$sql = "SELECT admin.*, boekingen.* FROM admin JOIN boekingen ON admin.ID = boekingen.ID WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $_SESSION['username']);
$stmt->execute();
$result = $stmt->fetch();

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
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">flightsID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $result['username'];?></td>
      <td><?php echo $result['password'];?></td>
      <td><?php echo $result['ID'];?></td>
      <td><?php echo $result['userID'];?></td>
      <td><?php echo $result['reisID'];?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
