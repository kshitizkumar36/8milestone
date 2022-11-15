


 <?php 
include('db.php');
$page='SPORT';
$name= "". $_SESSION["name"]  ."";
$uid= "". $_SESSION["uid"]  ."";







include 'afterloginheader.php';
include 'b.php';
?>

	<div class="container shadow py-4">
			<div class="text-center">
				<img style="height: 100px;" src="assets/img/logo.png">
			</div>
			<h3 class="py-3  text-center text-success">Order Placed Successful</h3>
			<div class="text-center">
			<small class="text-center">Call <a href="tel:8877779988">8877779988</a>for any query</small></div>
			<hr>
		<!--  -->
		<?php
		$query="SELECT * FROM `sportboooking` WHERE `userid`='$uid'";
		$mi=mysqli_query($connect,$query);
		$vid=mysqli_fetch_array($mi);


		?>


		<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Order Id</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php echo $vid['refno']; ?></label>
			</div>
		</div>

		<!--  --><hr>
			
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Name</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php $c=$vid['userid'];

				$ks="SELECT * FROM `user` WHERE `id`='$c'";
				$bhag=mysqli_query($connect,$ks);
				$says=mysqli_fetch_array($bhag);
				echo $says['name'];

				 ?></label>
			</div>
		</div>

		<!--  --><hr>
			<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Sport</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php  
				 
				$aru=$vid['sportid'];
				$c=$vid['userid'];

				$ks="SELECT * FROM `sports` WHERE `id`='$aru'";
				$bhag=mysqli_query($connect,$ks);
				$says=mysqli_fetch_array($bhag);
				echo $says['game'];

				 ?></label>
			</div>
		</div>

		<!--  --><hr>
			<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Booking Date</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php echo $vid['ondate']; ?></label>
			</div>
		</div>

		<!--  --><hr>
			<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Members</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php echo $vid['member']; ?></label>
			</div>
		</div>

		<!--  --><hr>
			<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Member's Name</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php echo $vid['people']; ?></label>
			</div>
		</div>

		<!--  --><hr>
			<!--  -->
				<div class="row  px-3">
			<div class="col-sm-6  col-6">
				<label>Action</label>
			</div>
			<div class="col-sm-6  col-6">
				<label><?php echo $vid['action']; ?></label>
			</div>
		</div>

		
	</div>









<?php 
include 'footer.php';
?>