<?php
// session_start();
$userid= $_POST['userid'];
$pass= $_POST['pass'];

include('../db.php');


$query="SELECT * FROM `admin` WHERE `userid`= '$userid'";
$fly= mysqli_query($connect,$query);





$bird= mysqli_fetch_array($fly);
if($bird['pass']==$pass)
{

// $name= $bird['name'];
// $uid= $bird['id'];
// 	$_SESSION["name"]= $name;
// $_SESSION["uid"]= $uid;

	include('index.php');
}
else
{
	echo"<script>alert('Login Failed!!');</script>";
	include('login.php');

}

?>