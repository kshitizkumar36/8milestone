<?php
error_reporting(0);

?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>8th Mile Stone </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

<header style="background-color: white;" class="shadow">
    <div style="padding:10px;" class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-3">
                <img style="height:50px; " src="assets/images/logo.png">
            </div>
            <div class="col-sm-2 col-5">
                <h2 style="padding: 10px;color: #04d3fd;"><b>8Mile Stone</b></h2>
            </div>
            <div class="col-sm-9 col-4 text-center">
                   <h2 style="padding: 10px;color: #04d3fd;"><b>Admin Panel</b></h2>
            </div>
        </div>
    </div>
</header>
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                               <!--  <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.php" key="t-default">Default</a></li>
                                    <li><a href="dashboard-saas.php" key="t-saas">Saas</a></li>
                                    <li><a href="dashboard-crypto.php" key="t-crypto">Crypto</a></li>
                                    <li><a href="dashboard-blog.php" key="t-blog">Blog</a></li>
                                </ul> -->
                            </li>


                            <li class="menu-title" key="t-apps">Features</li>

                

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                                    <span key="t-dashboards">Orders</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="foodorder.php" key="t-tui-calendar">Food Orders</a></li>
                                    <li><a href="game.php" key="t-full-calendar">Game Orders</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="user.php" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span key="t-chat">Total User</span>
                                </a>
                            </li>

                           <!--  <li>
                                <a href="apps-filemanager.php" class="waves-effect">
                                    <i class="bx bx-file"></i>
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <span key="t-file-manager">File Manager</span>
                                </a>
                            </li>
 -->
                           

                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-email">Food</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="food.php" key="t-inbox">Category</a></li>
                                    <li><a href="foodsubcategory.php" key="t-read-email">SubCategory</a></li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <span class="badge rounded-pill badge-soft-success float-end" key="t-new">New</span>
                                        </a>
                                        
                                    </li>
                                </ul>
                            </li>




                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Gallery</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="foodgallery.php" key="t-user-grid">Food Gallery</a></li>
                                    <li><a href="sportgallery.php" key="t-user-list">Sport Gallery</a></li>
                                </ul>
                            </li>
                                                        <li>
                                <a href="../index.php">Log Out</a>
                            </li>

                           
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                       <!-- admin panel starts here -->
                     
                     <!-- search starts -->

                     <form method="post" action="foodorder.php">
                     <div class="row">
                         <div class="col-sm-11">
                            <input type="search" name="search" placeholder="Search the Order Id" id="form1" class="form-control" />

                         </div>
                         <div class="col-sm-1">
                             <button name="sear" type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </button>
                         </div>
                     </div>
                 </form>
                        <hr>

                        <!-- backend -->    
                            <?php 
                            if(isset($_POST['sear']))
                            {


                                ?>

                       <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Food Id</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Delivery Address</th>
      <th scope="col">Order Date</th>
      <th scope="col">Stauts</th>
      <th scope="col">Delivery</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>


                                <?php
                                $search= $_POST['search'];
                                $sanjay="SELECT * FROM `foodorder` WHERE `orderid`='$search'";
                                $gita= mysqli_query($connect,$sanjay);
                                $putra=mysqli_fetch_array($gita);
                                

                                    ?>
                                    <tr>
                                      <th scope="row"><?php echo $sid=$putra['id']; ?></th>
                                      <td><?php print_r($putra['orderid']); ?></td>
                                      <td><?php
                                       $fid=$putra['userid'];
                                       $dol="SELECT * FROM `user` WHERE `id`='$fid'";
                                       $upl=mysqli_query($connect,$dol);
                                       $ghee=mysqli_fetch_array($upl);
                                       $gar=$ghee['name'];
                                       echo $gar;

                                        ?></td>
                                      <td><?php print_r($putra['foodid']); ?></td>
                                      <td><?php print_r($putra['payment']); ?></td>
                                      <td><?php print_r($putra['deliveryaddress']); ?></td>
                                      <td><?php print_r($putra['currentdate']); ?></td>
                                      <td><?php print_r($putra['action']); ?></td>
                                      <td>
                                          
                                          <form method="post" action="actionbacnend.php">
                                            <input type="hidden"value="<?php echo $sid; ?>" name="did">
                                              <input type="submit" class="btn btn-success" value="Mark Delivered" name="delilvery">
                                          </form>
                                          <!--  -->
                                       
                                          <!--  -->
                                      </td>
                                      <td>
                                           <form method="post" action="actionbacnend.php">
                                            <input type="hidden" value="<?php echo $sid; ?>" name="rid">
                                              <input type="submit" class="btn btn-danger" value="Mark Cancel" name="remove">
                                          </form>
                                           <!--  -->
                                       

                                          <!--  -->
                                      </td>
                                    </tr>



                                    <?php

                                

                            }
                            else
                            {




                                                                                 ?>
                                                                                                      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Food Id</th>
      <th scope="col">Payment Mode</th>
      <th scope="col">Delivery Address</th>
      <th scope="col">Order Date</th>
      <th scope="col">Stauts</th>
  
    </tr>
  </thead>
  <tbody>


                                                                            <!-- /////backend -->
                                                                         <!-- search ends -->

                                                        <?php 
                                                        include('../db.php');
                                                        $query="SELECT * FROM `foodorder` ";
                                                        $tai=mysqli_query($connect,$query);
                                                        while($awi=mysqli_fetch_array($tai))
                                                        {

                                                            ?>

                                                             <tr>
                                                              <th scope="row"><?php print_r($awi['id']); ?></th>
                                                              <td><?php print_r($awi['orderid']); ?></td>
                                                              <td><?php
                                                               $fid=$awi['userid'];
                                                               $dol="SELECT * FROM `user` WHERE `id`='$fid'";
                                                               $upl=mysqli_query($connect,$dol);
                                                               $ghee=mysqli_fetch_array($upl);
                                                               $gar=$ghee['name'];
                                                               echo $gar;

                                                                ?></td>
                                                              <td><?php print_r($awi['foodid']); ?></td>
                                                              <td><?php print_r($awi['payment']); ?></td>
                                                              <td><?php print_r($awi['deliveryaddress']); ?></td>
                                                              <td><?php print_r($awi['currentdate']); ?></td>
                                                              <td><?php $vari= $awi['action'];
                                                              if($vari=="Delivered")
                                                              {
                                                                echo "<span  class='text-success'><b>Delivered</b></span> ";
                                                              }
                                                             
                                                                elseif($vari=="Order Terminated")
                                                              {
                                                                     echo "<span class='text-danger'><b>Order Terminated</b></span> ";
                                                              } elseif($vari==NULL)
                                                              {
                                                                echo"<span>Pending</span>";
                                                              }


                                                               ?></td>
                                                            </tr>
                                                       


                                                            <?php
                                                        }
                            }


    ?>
   
  </tbody>
</table>



                       <!-- admin panel ends here -->
               

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © 8 Mile Stone.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by VMPHS
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>