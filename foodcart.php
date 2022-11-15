<?php 
session_start();
$id= $_GET['id'];
$foodid= $_GET['foodid'];
$uid= $_GET['uid'];
$name= $_GET['name'];
$foodprice= $_GET['foodprice'];
$quantity= 1;

include('db.php');

$query="INSERT INTO `cart`(`user`, `food`,`price`,`quantity`) VALUES ('$uid','$foodid','$foodprice','$quantity')";

$fly= mysqli_query($connect,$query);
if($fly)
{


	$_SESSION["id"] = $id;
	$_SESSION["uid"]= $uid;
	$_SESSION["name"]= $name;
	include('hold.php');

	?>

	<!--  -->
	<?php
}


 ?>

 <script>
 	$('#text').on('keyup', function(){
    if($(this).val() == 'ok'){
        $('#button').trigger('click');
    }
 </script>