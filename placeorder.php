


 <?php 
include('db.php');
$page='FOOD';
$name= $_GET['name'];
$uid= $_GET['uid'];

$mob= $_GET['mob'];
$area= $_GET['area'];
$city= $_GET['dcity'];
$distict= $_GET['Distict'];
$state= $_GET['state'];
$country= $_GET['country'];
$location=$_GET['location'];

$address= $area." ". $location   ." ".$city." ".$distict." ".$state." ".$country;
$query1="INSERT INTO  `cart2` SELECT * FROM `cart`  WHERE `user` ='$uid'";
$said= mysqli_query($connect,$query1);
if($said)
{
	$raham="DELETE FROM `cart` WHERE `user`='$uid'";
	$lagadi= mysqli_query($connect,$raham);
}







include 'afterloginheader.php';
include 'b.php';
?>

<br><br>

<?php  
 $v1="8mile";
 $v2= rand(5,15);
 $c1= substr($mob, 0, 4);
 $t= date('h:i:s');
 $ref= $v1.$page.$v2.$c1.$t;



$query2="SELECT * FROM `cart2` WHERE `user`='$uid'";
$yar=mysqli_query($connect,$query2);
$amountt=NULL;
while($super=mysqli_fetch_array($yar))
{
	
	$var[]= $super['id'];
	$amountt += $super['price'];

}

$keep= implode(",",$var);

$yaar="SELECT * FROM `user` WHERE `id`='$uid'";
		$mod= mysqli_query($connect,$yaar);
		$pyar= mysqli_fetch_array($mod);
		$to= $pyar['email'];

$pay="cash";
$bad=date('y-m-d');

$query3="INSERT INTO `foodorder`( `orderid`, `userid`, `foodid`, `payment`, `deliveryaddress`) VALUES ('$ref','$uid','$keep','$pay','$address')";
$mercy= mysqli_query($connect,$query3);
if($mercy)
{




	// tiral


						

						$dd=explode(",",$keep);
						foreach($dd as $o=>$key)
						{
							$o>0;

							$anmol="SELECT * FROM `cart2` WHERE `id`='$key'";
							$nahi=mysqli_query($connect,$anmol);
							$eye=mysqli_fetch_array($nahi);
							$jaan= $eye['food'];

							$sukk="SELECT * FROM `foodsubcategory` WHERE `id`='$jaan'";
							$jinda=mysqli_query($connect,$sukk);
							$sans= mysqli_fetch_array($jinda);
							$bol[]=$sans['name'];






						}
						$papa= implode(",",$bol);


	// ends

	$san="INSERT INTO  `userorderedfood` SELECT * FROM `cart2`  WHERE `user` ='$uid'";
	$mata=mysqli_query($connect,$san);
	if($mata)
	{
			$bhai="DELETE FROM `cart2` WHERE `user`='$uid'";
		$behn= mysqli_query($connect,$bhai);
	}
	


	$sub='Order Confirmation';
	$mess='Dear Sir/Mam  Your Order has been placed with Order Id'."\r\n"."$ref"."\r\n".'  Kindly keep this Order Id  for your delivery.
			The Delivery Agent will ask your Order Id before delivering fodd Know more about 8 MileStone Ranchi  providing you best service for your holiday
			and party event celebration. Kindly visit the website 8milestoneranchi.com or contact with the Email Id : 8milestoneranchi@gmail.com. Thank You
	';
	  $headers= 'From: 8thmilestoneranchi@gmail.com'."\r\n"."$to"."\r\n";
	   $send= mail($to,$sub,$mess,$headers);

	?>


		<div class="container shadow p-4 py-3">
			<div class="text-center">
				<img style="height: 100px;" src="assets/img/logo.png">
			</div>
			<h3 class="py-3  text-center text-success">Order Placed Successful</h3>
			<div class="text-center">
			<small class="text-center">Call <a href="tel:8877779988">8877779988</a>for any query</small></div>
			<hr>
				<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Order ID</label>


				</div>
				<div class="col-sm-6 col-8">
						<label class="text-danger"><?php echo $ref; ?></label>

				</div>
			</div>
				<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Booking Date</label>


				</div>
				<div class="col-sm-6 col-8">
						<label><?php echo $bad; ?></label>

				</div>
			</div>
				<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>All Food</label>


				</div>
				<div class="col-sm-6 col-8">
						<label><?php
						
						
						$komal= explode(",",$papa);
						
						foreach($komal as $o=>$key)
						{
							$o>0;

							echo $key;
							echo " ";



						}echo "<br>";
						

						?></label>
						

				</div>
			</div>
				<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Payment</label>


				</div>
				<div class="col-sm-6 col-8">
						<label><?php echo $pay; ?></label>

				</div>
			</div>
				<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Total Amount</label>


				</div>
				<div class="col-sm-6 col-8">
						<label>₹<?php echo $amountt; ?></label>

				</div>
			</div>
				<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Delivery Address</label>


				</div>
				<div class="col-sm-6 col-8">
						<label><?php echo $address; ?></label>

				</div>
			</div>
				<!--  -->
					<!--  -->
				<hr>
					<!--  -->
			<div class="row px-5">
				<div class="col-sm-6 col-4">
					<label>Status</label>


				</div>
				<div class="col-sm-6 col-8">
						<label><?php

						$gyan="SELECT * FROM `foodorder` WHERE `userid`='$uid'";
						$bhav=mysqli_query($connect,$gyan);
						$sach=mysqli_fetch_array($bhav);
						if($sach){
						 $hati=$sach['action'];
						 echo $hati;}
						

						?></label>

				</div>
			</div>
				<!--  -->


		</div>






<?php






}

 ?>












<?php 
include 'footer.php';
?>