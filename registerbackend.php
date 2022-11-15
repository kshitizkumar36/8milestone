<?php
error_reporting(0);
if(isset($_POST['add']))
{
	include('db.php');
	$name = $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$dob= $_POST['dob'];
	$pass= $_POST['pass'];
	$address= $_POST['address'];

	$query="INSERT INTO `user`( `name`, `email`, `mobile`,`pass`, `dob`, `address`) VALUES ('$name','$email','$mobile','$pass','$dob','$address')";
	$fy= mysqli_query($connect,$query);
	if($fy)
	{
		echo"<script>alert('Congratulations!! You are now 8th Mile Stone Family');</script>";
		include('login.php');
	}
	else
	{
		echo"<script>alert('Something went wrong!!');</script>";
		include('register.php');

	}
}








?>