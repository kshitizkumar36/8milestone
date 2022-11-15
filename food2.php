<?php 
include('db.php');
$page='FOOD';
include 'header.php';
include 'b.php';
?>
<?php

$id= $_GET['id'];


?>


<h2 class="text-center py-3 bg-dark text-white mt-3">
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




								
					 

					?>
					<div class="col-sm-3 col-6">
						<a href="login.php"><div>


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
										</div>
							<hr>
				 </div>
				</a>
				</div>





					<?php



				}
			
			
?>
</div>
</div>


<?php 
include 'footer.php';
?>