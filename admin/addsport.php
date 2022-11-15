<?php 

$game= $_POST['game'];
include('../db.php');
$query="INSERT INTO `sports`(`game`) VALUES ('$game')";
$fly= mysqli_query($connect,$query);
header("Location: sport.php");

 ?>