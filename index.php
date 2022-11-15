<?php 
$page='HOME';
include 'header.php';
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" id="b" src="assets/img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="b" src="assets/img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " id="b" src="assets/img/1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
 <!-- about begin -->
 <div class="about"  >
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-img leftn"  >
                            <img src="assets/img/feed.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                        <div>
                            <div class="part-text uper">
                                <h2>Introducing Our Words</h2>
                                <p>The bigger the sports event the more interest, excitement and media attention on the action. </p>
                            </div>
                            <a href="login.php" class="about-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->

        <div class="about">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-img leftn">
                            <img src="assets/img/n.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                        <div>
                            <div class="part-text uper">
                                <h2>Introducing Our Words</h2>
                                <p>The bigger the sports event the more interest, excitement and media attention on the action. </p>
                            </div>
                            <a href="login.php" class="about-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- gallery -->


<div class="container">
    
</div>


<!-- gallerye nd -->

                <div   class="login-popup shadow p-4">
                <div class="close">&times;</div>
              <div class="d-flex justify-content-center">  
            

<div class="text-center">
  <img src="assets/img/logo.png"
    style="width: 185px;" alt="logo">
  <h4 class="mt-1 mb-5 pb-1">Login to Explore</h4>
  <hr>
</div>
</div>
<div style=" margin-top: -100px; " class=" d-flex justify-content-center ">

<form class="py-2 p-5" action="loginbackend.php" method="post">
  <div class="form-outline mb-0">
    <input type="text" name="userid"id="form2Example11" class="form-control"
      placeholder=" email address" />
  </div>    <br>

  <div class="form-outline mb-0">
    <input name="pass" type="password" placeholder="***********"id="form2Example22" class="form-control" />
  </div>

  <div class="text-center pt-1 mb-2 pb-1">
    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
      in</button>
    <a class="text-muted text-white" href="#!">Forgot password?</a>
  </div>

  <div class="d-flex align-items-center justify-content-center pb-1">
    <small class="mb-0 me-2"> No account?</small>
    <a href="register.php"  class="btn btn-outline-danger">Create New</a>
  </div>

</form>
</div>
</div> 
</div>


<?php include 'footer.php'; ?>