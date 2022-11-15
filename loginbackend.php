<?php
error_reporting(0);
session_start();
$userid= $_POST['userid'];
$pass= $_POST['pass'];

include('db.php');


$query="SELECT * FROM `user` WHERE `email`= '$userid'";
$fly= mysqli_query($connect,$query);





$bird= mysqli_fetch_array($fly);
if($bird['pass']==$pass)
{

$name= $bird['name'];
$uid= $bird['id'];
	$_SESSION["name"]= $name;
$_SESSION["uid"]= $uid;

	include('afterloginhold.php');
}
else
{
	echo"<script>alert('Login Failed!!');</script>";
	include('login.php');
}

?>