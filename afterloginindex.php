 <?php 
$page='HOME';

$name= $_GET['name'];
$uid= $_GET['uid'];

include 'afterloginheader.php';
?>
<!-- 
   <form class="py-4">
            <input class="bg-danger" type="date" name="bday" min="2014-05-11" max="2014-05-20">
        </form> -->
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
 <div class="about">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-img">
                            <img src="assets/img/feed.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                        <div>
                            <div class="part-text">
                                <h2>Introducing Our Words</h2>
                                <p>The bigger the sports event the more interest, excitement and media attention on the action. </p>
                            </div>
                            <a href="afterloginfood.php?uid=<?php echo $uid;?>&name=<?php echo $name; ?>" class="about-btn">Let's Food</a>
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
                        <div class="part-img">
                            <img src="assets/img/n.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                        <div>
                            <div class="part-text">
                                <h2>Introducing Our Words</h2>
                                <p>The bigger the sports event the more interest, excitement and media attention on the action. </p>
                            </div>
                            <a href="afterloginsport.php?uid=<?php echo $uid;?>&name=<?php echo $name; ?>" class="about-btn">Check Our Sports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





<?php include 'footer.php'; ?>