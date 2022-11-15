<?php 
$page='email';
include 'header.php';
;
?>
 </div>
<!-- put your code here -->


<div style="padding: 20px;background-color: white;" class="container mt-5">
			<h4 class="py-2 text-center">Direct Mail to us</h4>
			<hr><hr>
		<div class="row">
				
				<form method="post" class="shadow p-3" style="padding: 30px;" action="mail.php"> 
					
					<label>Email Subject</label>
					<input type="text" class="form-control" placeholder="Email For" name="sub">
					<hr>
					<label>Write Your Mail</label>
					<input type="text" class="form-control p-4"placeholder="Write Custom text" name="mail">
					<hr>
					<!-- <label>Attachment</label>
					<input type="file" class="form-control" name="attachment[]">
					<hr> -->
					<input type="submit" class="form-control btn btn-success " value="Send Mail" name="sendmail">





				</form>


			</div>

			
	<!--  -->


</main>
