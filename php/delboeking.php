<?php
include 'connection.php';
if(isset($_SESSION['username'])){
    //echo "welcome " . $_SESSION['username'];
} else {
    header("location: admin.php");
}

$sql = "DELETE FROM boekingen WHERE ID = :id;
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("location: boekingbeheren.php");