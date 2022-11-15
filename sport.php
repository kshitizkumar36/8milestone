<?php 
include('db.php');

$page='SPORT';
include 'header.php';
include 'b.php';
?>
<br><br>
	<div class="text-center pb-4">
	<a  class="py-5 p-5 text-center " href="login.php"><h3 class="btn btn-warning form-control w-50 ">Play Now</h3></a>
</div>
<?php 

$query="SELECT * FROM `sports` ";
$fly= mysqli_query($connect,$query);
while($bird= mysqli_fetch_array($fly))

{
	?>


<div class="container bg-dark">

		<div class="row py-3 shadow">
			<div class="col-sm-6 col-12">
				<a href="login.php">
				<br>
				<?php

				$pic=print_r('<img style="border-style:solid;border-color:white;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');

				?>

			</div>


			<div class="col-sm-6 col-12">
				<h3 class="py-3 text-white text-center"><?php print_r($bird['game']);  ?></h3>
				<hr class="bg-white">
				<p class="py-2 p-3 text-white"><?php print_r($bird['about']); ?></p>



				<div class="text-center">
	<a  class="py-5 p-5 text-center pt-4 " href="login.php"><h3 class="btn btn-success">Start Booking Now</h3></a>
</div>
</a>

			</div>
		</div>
<hr class= "bg-white">
</div>

	<?php
}

 ?>

<?php 
include 'footer.php';
?>