<?php 
include('db.php');
$page='FOOD';
include 'header.php';
include 'b.php';
?>

<br><br>
	<div class="text-center pb-4">
	<a  class="py-5 p-5 text-center " href=""><h3 class="btn btn-warning form-control w-50 ">Play Now</h3></a>
</div>

<div class="container">
	<div class="row p-3" >
<?php 

$query="SELECT * FROM `foodmenu` ";
$fly= mysqli_query($connect,$query);
while($bird= mysqli_fetch_array($fly))

{
	?> 


	
		<div style="border-style:solid;border-color:white;border-radius:100px;" class="col-sm-3 col-12  p-2 bg-dark   ">
			<a href="food2.php?id=<?php print_r($bird['id']); ?>">
				<div class="text-center">
			<?php

				$pic=print_r('<img class="p-1" style="height:200px;width:200px;border-style:solid;border-color:white;border-radius:100px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');

				?>

				<hr style="background-color: white;">
				<h3 class="text-white p-3"><?php print_r($bird['name']) ;?></h3>
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