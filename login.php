<?php
include 'header.php'
?>
<section class="h-100 gradient-form popup" style="background-color: #eee; margin-bottom: 250px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/img/logo.png" 
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Log in to explore More</h4>
                </div>

                <form method="post" action="loginbackend.php">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder=" email address"  name="userid"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" placeholder="**********" class="form-control" name="pass"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="register.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than Just a Gaming Zone</h4>
                <p class="small mb-0">8 Mile Stone Ranchi is the Number One Zone where you can Enjoy your best holidays.
                8 Mile stone brings to you variety of games and variety of food,starters, underground parties etc....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php
include 'footer.php'
?>