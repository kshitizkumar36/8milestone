


 <?php 
include('db.php');
$page='FOOD';
$name= $_GET['name'];
$uid= $_GET['uid'];
$quantity= $_GET['quantity'];
$cartid= $_GET['cartid'];
$foodprice= $_GET['foodprice'];


  
  	$total= $foodprice*$quantity;


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
	<table class="col-sm-12">
  <thead>
    <tr>
      <th scope="col text-center">Food Name</th>
      <th scope="col text-center">Price</th>
            <th scope="col text-center">Quantity</th>
        <th scope="col text-center">Photo</th>
       <th scope="col text-center">Action</th>


    </tr>
  </thead>
  <tbody>
  	<?php  
  	$total= NULL;
  	$query="SELECT * FROM `cart` WHERE `user`='$uid'";
  	$fly= mysqli_query($connect,$query);
  	while($bird=mysqli_fetch_array($fly))
  	{
  		$le=$bird['food'];
  		$cartid= $bird['id'];
  		?>

  			 <tr>
		      

		   <?php
		   $query2="SELECT * FROM `foodsubcategory` WHERE `id`='$le'";
		   $base= mysqli_query($connect,$query2);
		   $patiya=mysqli_fetch_array($base);


		    

		    ?>
		    <td class="text-center"><?php  
		   print_r($patiya['name']);

		     ?>
		    	

		    </td>
		      <td class="text-center">₹<?php 
		      $foodprice = $patiya['price'];
		       $total+= $bird['price'];
		      print_r($bird['price']);
		      
		       ?></td>


		       <td class="text-center">
		       	<form action="cartbackend.php" method="GET">
		       		<input type="hidden" value="<?php echo $uid?>" name="uid">
		       		<input type="hidden" value="<?php echo $cartid?>" name="cartid">
		       		<input type="hidden" value="<?php echo $foodprice?>" name="foodprice">
		       		<input type="hidden" value="<?php echo $name?>" name="name">
		       		<select onchange='this.form.submit()'  onchange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');" name="quantity" >
		       			<option><?php $kh=$bird['quantity'];echo $kh; ?></option>
		       			<?php  for($i= $kh+1;$i<10;$i++)
		       			{

		       				?>	<option><?php  echo $i; ?></option>


		       				<?php

		       			} ?>
		       		



		       		</select>
		       	</form>
		       </td>
		      <td class="text-center">


		      	<?php 


		      $pic=print_r('<img class="py-2 d-block" style="height:100px;width:150px;border-style:solid;border-color:white;border-radius:30px;padding:5px;" src="data:image/jpeg;base64,'.base64_encode($patiya['img']).'">');

		       ?></td>
		       <td class="text-center">
		       	
		       	<a style="text-align:center" class="text-danger" href="removefood1.php?name=<?php echo $name; ?>&uid=<?php echo $uid;  ?>&cartid=<?php echo $cartid; ?>">X</a>
		       </td>

		  
		    </tr>
		    <!-- <hr> -->

  		<?php


  	}


  	?>
   
   
  </tbody>
</table>	
<div class="row">
	<div class="col-sm-6">
		       		</div>
		       		<div class="col-sm-6">
		       			<h3>Total Amount : <span class="text-success">₹<?php echo $total; ?></span></h3>
		       		</div>
		       		
		       	</div>
<div class="text-center">

<form action="placeorder.php" method="GET">
	<input type="number" class="form-control"placeholder="Enter Calling Number" name="mob">
	<input type="hidden" value="<?php echo $name; ?>" name="name">
		<input type="hidden" value="<?php echo $uid; ?>" name="uid">

	<input type="text" class="form-control"placeholder="Enter Area" name="area">

	<select name="location" class="form-control">
		<option>Choose Location</option>
		<option>Adarsh Nagar</option>
		<option>Argora</option>
		<option>Argora Chowk</option>
		<option>Ashok Nagar</option>
		<option>Bahu Bazar</option>
		<option>Balsiring</option>
		<option>Bara Ghagra</option>
		<option>Bariatu Road</option>
		<option>Bhumiartoli</option>
		<option>Birsa Nagar</option>
		<option>Bogaicholi</option>
		<option>Booti More</option>
		<option>Booty Road</option>
		<option>Burdwan Compound</option>
		<option>Chutia</option>
		<option>Circular Road</option>
		<option>Daladili Bhonda Road</option>
		<option>Daud Nagar</option>
		<option>Delatoli</option>
		<option>Dhurwa</option>
		<option>Dibdih</option>
		<option>Doranda</option>
		<option>Dwarikapuri</option>
		<option>Firayalal</option>
		<option>Gandhi Nagar Colony</option>
		<option>Gitilpiri</option>
		<option>Gosaintola</option>
		<option>H.B Road</option>
		<option>Harihar Singh ROad</option>
		<option>Harmu Colony Road</option>
		<option>Harmu Housing Colony</option>
		<option>Hatiya</option>
		<option>Hazaribag Road</option>
		<option>Hesag</option>
		<option>Hindpiri</option>
		<option>Hinoo</option>
		<option>Income Tax Colony</option>
		<option>Indira Nagar Colony</option>
		<option>Indrapuri Colony</option>
		<option>Industrial Estate</option>
		<option>Jagannathpur</option>
		<option>Jai Prakash Nagar</option>
		<option>Jawahar Nagar</option>
		<option>Kadru</option>
		<option>Kali Nagar</option>
		<option>Kalyanpur</option>
		<option>Kanchnatoli</option>
		<option>Kanke</option>
		<option>Kanke Chowk</option>
		<option>Kantatoli</option>
		<option>Karam Toli Chowk</option>
		<option>Kathalkocha	</option>
		<option>Kathartoli</option>
		<option>Kishoreganj</option>
		<option>Karam Chowk</option>
		<option>kokar</option>
		<option>Kumhartoli</option>
		<option>Kusai</option>
		<option>Kutchery Road</option>
		<option>L N Mishra Colony</option>
		<option>Lalpur</option>
		<option>Lalpur CHowk</option>
		<option>Latma Road</option>
		<option>Maharatoli</option>
		<option>Main Road</option>
		<option>Masibari</option>
		<option>Morabadi</option>
		<option>Nagra Toli</option>
		<option>Namkum</option>
		<option>Upper Chutia</option>
		<option>Vikash Nagar</option>
		<option>Nayatoli</option>
		<option>New Alkapuri</option>
		<option>New Barhi Toli</option>
		<option>New SBI Colony</option>
		<option>NH-23</option>
		<option>NH-33</option>
		<option>Old AG Colony</option>
		<option>Pahartoli</option>
		<option>Panchsheel Colony</option>
		<option>Patel Nagar</option>
		<option>Pathalkudwa</option>
		<option>Patratoli</option>
		<option>Pithiyatil</option>
		<option>Prem Nagar</option>
		<option>Pundag</option>
		<option>Purulia Road</option>
		<option>Radium Road</option>
		<option>Ramgarh Cantt</option>
		<option>Rani Bagan</option>
		<option>Ratu</option>
		<option>Ratu Road</option>
		<option>RIng Road</option>
		<option>Rishab Nagar</option>
		<option>Samlong</option>
		<option>Shanti Nagar</option>
		<option>Shri Krishna Nagar Colony</option>
		<option>Shukla Colony</option>
		<option>Simlia</option>
		<option>Singh More</option>
		<option>Siram Toli Chowk</option>
		<option>Tiril</option>
		<option>Tongritoli</option>
		<option>Tupudana</option>
		<option>Upper Bazar</option>





















	</select>

	<select name="dcity" class="form-control">
		<option>Ranchi</option>
	</select>

	<select name="Distict" class="form-control">
		<option>Ranchi</option>
	</select>
	
	<select name="state" class="form-control">
		<option>Jharkhand</option>
	</select>
	

	<select name="country" class="form-control">
		<option>India</option>
	</select>
	



	<input type="submit" class="form-control btn btn-success mb-3" value="Place Order" name="">
</form>

	
</div	>		
</div>


<?php 
include 'footer.php';
?>