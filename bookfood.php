



 <?php 
include('db.php');
$page='FOOD';

$name= $_GET['name'];
$uid= $_GET['uid'];
$id= $_GET['id'];


$fid= $_GET['fid'];


include 'afterloginheader.php';
include 'b.php';
?>
<div style="border-style: solid;border-radius: 60px;"  class="container shadow py-5 p-3 mt-3 mb-3" >
	

	<div class="row p-3">
		<div class="col-sm-6 ">
			<?php 

			$chul= "SELECT * FROM `foodsubcategory` WHERE `id`='$fid'";
			$bad= mysqli_query($connect,$chul);
			$lamba= mysqli_fetch_array($bad);


			$pic=print_r('<img class="p-1" style="height:250px;width:300px;border-style:solid;border-color:white;border-radius:30px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($lamba['img']).'">');

											

			 ?>

			 <br>
			 <h3  class="px-4"><?php print_r($lamba['name']); ?></h3>
			 
			 <hr>
			 <small style="color: #ff6c33;" class="px-3"><?php print_r($lamba['about']); ?></small>
		</div>



		<div class="col-sm-6 shadow p-3 ">
			
			<br><br>
		<div class=" p-1">
				<div class="row">
					<div class="col-6  ">
						<h4>Item Name :</h4>
						<hr>
						<!-- <label>Quantity:</label> -->
						<h4>Price :</h4>
					</div>
					<div class="col-6 text-left">
						<h4 style="color: #ff6c33;"> <?php print_r($lamba['name']); ?> </h4>
						<hr>
						<h4 style="color: #ff6c33;">₹ <?php print_r($lamba['price']); ?> </h4>

					</div>
					
				</div>
				<div class="mt-5 text-center  ">
					<?php  	
					$foodprice= $lamba['price'];

					$foodid= $lamba['id'];



					?>
					<a href="foodcart.php?foodid=<?php echo $foodid;  ?>&uid=<?php echo $uid; ?>&name= <?php echo $name; ?>&id=<?php echo $id; ?>&foodprice=<?php  echo $foodprice; ?>" class="btn btn-primary px-5  form-control text-center mt-3">Add to Cart</a>
					</div>
		</div>


		</div>
	</div>

</div>


<?php 
include 'footer.php';
?>