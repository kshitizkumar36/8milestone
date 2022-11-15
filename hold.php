<?php 

$id= "". $_SESSION["id"] ."";
$uid= "". $_SESSION["uid"] ."";
$name= "". $_SESSION["name"] ."";

 ?>


 <?php 
include('db.php');
$page='FOOD';


include 'afterloginheader.php';
include 'b.php';
?>
<?php



?>


<h2 class="text-center py-3 bg-dark text-white mt-3">
	<div class="container">
		<div class="text-center pb-4">
	<a  class="py-5 p-5 text-center " href="cart.php?uid=<?php  echo $uid; ?>&name=<?php echo $name; ?>"><h3 class="btn btn-warning form-control w-50 "><b>My Cart</b></h3></a>
</div>
	<?php 

	$query="SELECT * FROM `foodmenu`WHERE `id`='$id' ";
$fly= mysqli_query($connect,$query);
$bird= mysqli_fetch_array($fly);

		$pic=print_r('<img class="p-1" style="height:100px;width:100px;border-style:solid;border-color:white;border-radius:100px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');

				
	 ?> <br><?php print_r($bird['name']); ?>
	 <!-- <h3 class="text-dark"></h3> -->
</h2>

<div class="container">
	<div class="row">

<?php



$duhai= " SELECT * FROM `foodsubcategory` WHERE `foodmenuid`= '$id'";
$samat= mysqli_query($connect,$duhai);

				while($botal= mysqli_fetch_array($samat))
				{




								
					 	$fid= $botal['id'];

					?>
					<div class="col-sm-3 col-6">
						<a href="bookfood.php?uid=<?php echo $uid; ?>&fid=<?php echo $fid; ?>&name=<?php echo $name; ?>&id=<?php echo $id; ?>">
							<div>


							<?php
										$pic=print_r('<img class="p-1" style="height:250px;width:300px;border-style:solid;border-color:white;border-radius:30px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($botal['img']).'">');

										?>
									
										<div class="px-4">
												<div class="row">	
														<div class="col-6">
														<b><?php  print_r($botal['name']) ;?></b>
														</div>
														<div class="col-6 text-right">
														<span style="color: green;">₹<?php  print_r($botal['price']) ;?></span>
														</div>
														<hr>

														<small class="px-3"><?php  print_r($botal['about']); ?></small>

												</div>
												
							<hr>
									 </div>
				</a>
					</div>
				</div>





					<?php



				}
			
			
?>
</div>
</div>


<?php 
include 'footer.php';
?>