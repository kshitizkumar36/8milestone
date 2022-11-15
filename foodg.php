<?php 
$page='FOOD GALLERY';
include 'header.php';
include 'b.php';
include('db.php');
?>



<div class="container ">
	<div class="row py-3">
	<?php 

	$query="SELECT * FROM `gallery`WHERE `title`='food' ";
	$fly=mysqli_query($connect,$query);
	while($bird=mysqli_fetch_array($fly))
	{
		?>
		<div class="col-sm-4 col-12">

		<?php
		 $pic=print_r('<img style="border-style: solid;border-color: black;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');

		 ?>
		 </div>

		 <?php


	}

	 ?>
</div>
</div>

<?php 
include 'footer.php';
?>