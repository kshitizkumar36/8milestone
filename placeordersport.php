
<!-- backend -->
<?php
session_start();
include('db.php');
if(isset($_POST['book']))
{
	$sportid= $_POST['sportname'];
	$date= $_POST['date'];
	$member= $_POST['member'];
	$people =$_POST['people'];
	$uid= $_POST['uid'];
	$name= $_POST['name'];



	$yaar="SELECT * FROM `user` WHERE `id`='$uid'";
		$mod= mysqli_query($connect,$yaar);
		$pyar= mysqli_fetch_array($mod);
		$to= $pyar['email'];


	$jina= substr($to, 0, 4);
		$cd= date('H:i:s');
		$ref= $jina.$member.$sportid.$cd;

	$nach="INSERT INTO `sportboooking`( `userid`, `sportid`, `ondate`, `member`, `people`,`refno`) VALUES ('$uid','$sportid','$date','$member','$people','$ref')";
	$aa= mysqli_query($connect,$nach);
	if($aa)
	{

		




		

	
		$sub='Booking Confirmation';
		


		$soni="UPDATE `sportboooking` SET `refno`='$ref' WHERE `id`=''";



		$mess=' Dear '."\r\n"."$to"."\r\n".' Your Booking ID for 8MilestoneRanchi is '."\r\n"."$ref"."\r\n".' kindly save this Reference Number for our Entry Id';
		  $headers= 'From: 8thmilestoneranchi@gmail.com'."\r\n"."$to"."\r\n";
		    $send= mail($to,$sub,$mess,$headers);
	       

	       $_SESSION["uid"]=$uid;
	       $_SESSION["name"]= $name;

		    include('aatma.php');





	}
	
	else
	{

		echo"<script>alert('Booking Not Successfull!!');</script>";
	}




}




?>


<!-- end backend -->