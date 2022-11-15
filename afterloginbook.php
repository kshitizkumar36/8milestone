<?php 
include('db.php');

$page='SPORT';

$sid=$_GET['sid'];
$uid= $_GET['uid'];
$name= $_GET['name'];

include 'afterloginheader.php';
include 'b.php';
?>


<form class="py-3 container shadow mt-5" method="post" action="placeordersport.php">
	<h2 class="py-2 text-center">Choose Sports</h2>
	<hr>
	<label>Select Game</label>
	<select name="sportname" class="form-control">
		<option>Choose</option>
		<?php
		include('db.php');
		$query="SELECT * FROM `sports`";
		$fly= mysqli_query($connect,$query);
		while($bird=mysqli_fetch_array($fly))
		{
			?>
			<option value="<?php print_r($bird['id']); ?>"><?php print_r($bird['game']); 

			  print_r('<img style="height:50px;width:50px;border-style: solid;border-color: black;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');

			?></option>

			<?php
		}

		?>
	</select>
	<br>
	<?php
	$currentdate= date('Y-m-d');
	$max=  date('Y-m-d',strtotime($currentdate.'+7 days'));

	?>
	<label>Choose Booking Date:  (mm-dd-yyyy)</label><br>
	<input class="form-control" type="date" min="<?php echo $currentdate; ?>" max="<?php echo $max; ?>"  name="date">

	<label>How many member going with you</label>
	<select name="member" class="form-control">
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
	<br>
	<label>Mention member's Name with seperators(,)</label>
	<input type="text"class="form-control" placeholder="kshitiz kumar, Akash Choubey,....." name="people">
	<br>
	<input type="hidden" value="<?php echo $uid; ?>" name="uid">
	<input type="hidden" value="<?php echo $name; ?>" name="name">
	<input type="submit" class="btn btn-success form-control" value="Book Now" name="book">
</form>





<?php 
include 'footer.php';
?>