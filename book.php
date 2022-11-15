<?php 
$page='book';
include 'header.php';
;
?>
 </div>
<form class="py-3 container shadow mt-5">
	<h2 class="py-2 text-center">Choose Sports</h2>
	<hr>
	<label>Select Game</label>
	<select class="form-control">
		<option>Choose</option>
		<?php
		include('db.php');
		$query="SELECT * FROM `sports`";
		$fly= mysqli_query($connect,$query);
		while($bird=mysqli_fetch_array($fly))
		{
			?>
			<option><?php print_r($bird['game']); ?></option>

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
	<input class="form-control" type="date" min="<?php echo $currentdate; ?>" max="<?php echo $max; ?>"  name="">

	<label>How many member going with you</label>
	<select class="form-control">
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
	<input type="text"class="form-control" placeholder="kshitiz kumar, Akash Choubey,....." name="">
</form>










</main>