


 <?php 
include('db.php');
$page='FOOD';
$name= $_GET['name'];
$uid= $_GET['uid'];
$quantity= $_GET['quantity'];
$cartid= $_GET['cartid'];


  	$query4="SELECT * FROM `cart` WHERE `user`='$uid'";
  	$fly4= mysqli_query($connect,$query4);
  	$piche= mysqli_fetch_array($fly4);
  	$pprice= $piche['price'];
  	$total= $pprice*$quantity;


$bus= "UPDATE `cart` SET `quantity`='$quantity',`price`='$total' WHERE `id`='$cartid'";
$launda= mysqli_query($connect,$bus);

include 'afterloginheader.php';
include 'b.php';
?>

<br><br>

<div style="border-style: solid;border-radius: 60px;" class="container py-3 p-3 shadow">
	<div class="text-center">
		<h3> <?php echo $name ?>'s Cart</h3>
		<hr>
	</div>			
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
            <th scope="col">Quantity</th>
        <th scope="col">Photo</th>
       <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  	<?php  
  	$query="SELECT * FROM `cart` WHERE `user`='$uid'";
  	$fly= mysqli_query($connect,$query);
  	while($bird=mysqli_fetch_array($fly))
  	{
  		$le=$bird['food'];
  		?>

  			 <tr>
		      

		   <?php
		   $query2="SELECT * FROM `foodsubcategory` WHERE `id`='$le'";
		   $base= mysqli_query($connect,$query2);
		   $patiya=mysqli_fetch_array($base);


		    

		    ?>
		    <td><?php 
		   print_r($patiya['name']);

		     ?>
		    	

		    </td>
		      <td>₹<?php 
		     print_r($bird['price']);
		       ?></td>


		       <td>
		      <?php  $rokaid= $bird['id']; ?>

		       	<form action="cartbackend.php" method="GET">
		       		<input type="hidden" value="<?php echo $uid?>" name="uid">
		       		<input type="hidden" value="<?php echo $rokaid?>" name="cartid">

		       		<input type="hidden" value="<?php echo $name?>" name="name">
		       		<select onchange='this.form.submit()'  onchange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');" name="quantity" >
		       		<option class="text-success"><?php  print_r($bird['quantity']);?></option>
		       		<option>__</option>
		       			<option>1</option>
		       			<option>2</option>
		       			<option>3</option>
		       			<option>4</option>
		       			<option>5</option>
		       			<option>6</option>
		       			<option>7</option>
		       			<option>8</option>
		       			<option>9</option>
		       			<option>10</option>



		       		</select>
		       	</form>
		       </td>
		      <td>


		      	<?php 


		      $pic=print_r('<img class="p-1" style="height:100px;width:150px;border-style:solid;border-color:white;border-radius:30px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($patiya['img']).'">');

		       ?></td>
		       <td>
		       	<a href="">Remove</a>
		       </td>

		  
		    </tr>
		    <!-- <hr> -->

  		<?php


  	}


  	?>
   
   
  </tbody>
</table>		
</div>


<?php 
include 'footer.php';
?>