<?php
include 'header.php'
?>

<form style="background-color: #eeeeee;" class="py-5 mt-5 mb-5 container shadow" method="post"action="registerbackend.php">
	    <div class="text-center">
                  <img src="assets/img/logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Log in to explore More</h4>
                  <hr>
                </div>

                <label>Enter Your Full Name</label>
                <input type="text" class="form-control" placeholder="Kshitiz kumar" name="name">
                <br>

                <label>Enter Your Email Id</label>
                  <input type="email" class="form-control" placeholder="Kshitiz.ranchi@gmail.com" name="email">
                  <br>

                <label>Enter Your Mobile Number</label>
                  <input type="number" class="form-control" placeholder="+91 900 60 42011" name="mobile">
                  <br>
                     <label>Create Password</label>
                  <input type="text" class="form-control" placeholder="absdJ@3jl9u" name="pass">
                  <br>


                <label>Enter DOB</label>
                  <input type="date" class="form-control" placeholder="Kshitiz.ranchi@gmail.com" name="dob">
                  <br>


                <label>Enter Your Full Address</label>
                  <input type="text" class="form-control" placeholder="karam chowk, Harmu Ranchi Jharkhand" name="address">
                  <br>
                  <hr>
                  <input type="submit" class="form-control btn btn-dark" value="Add to 8th Mile Family" name="add">

</form>











</body>
</html>
<?php
include 'footer.php'
?>