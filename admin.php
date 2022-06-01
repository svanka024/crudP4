<?php
include_once "connection.php";
if(isset($_SESSION['username'])){?>
   <p><?php echo "welcome " . $_SESSION['username']; ?> <a href="logout.php"> uitloggen</a></p>
   <?php
}  else {
    header("location: login.php");
} 
$sql = "SELECT * FROM flights";
$stmt = $conn->prepare($sql);
$stmt->execute();
//  WHERE TYPE = "male" (voor welke tabel)
//$stmt->debugDumpParams();

$result = $stmt->fetchAll();
?>

<h1></h1>