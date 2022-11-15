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
              \
                            <div class="container shadow">
                                <form style="padding: 30px; border-style: solid;border-color: black;padding: 10px;" action="foodsubcategoryback.php" method="post" enctype="multipart/form-data">
                                   
                                    
                                    <br>

                                    <label>Choose Food Category </label>

                                    <br>
                                    <select name="category" class="form-control">
                                        <option>Choose</option>
                                        <?php   
                                        include('../db.php');
                                        $fa= "SELECT * FROM `foodmenu`";
                                        $pp= mysqli_query($connect,$fa);
                                        while($no= mysqli_fetch_array($pp))
                                        {
                                               ?>
                                               <option value="<?php  print_r($no['id']) ;?>"><?php  print_r($no['name']) ;?></option>


                                            <?php
                                        }
                                        ?>
                                    </select>

                                    <br>
                                    <label>Enter Food Name</label>
                                    <input type="text" class="form-control" placeholder="Dal, Roti, Manchurian....." name="kname">
                                    
                                    <br>
                                     <label>Describe the food</label>
                                    <input type="text" class="form-control" placeholder="Made up from....." name="about">
                                        
                                    <br>
                                     <label>Enter Food Price</label>
                                    <input type="number" class="form-control" placeholder="169.00" name="price">
                                    
                                    <br>
                                    <label>Upload Food picture</label>
                                    <input type="file" class="form-control" name="photu[]">
                                    <hr>

                                    
                                    <hr>
                                    
                                    <br>
                                    <input type="submit" value="Add Category" class="form-control btn btn-success" name="food">
                                </form>
                            </div>




                            <!-- fetch starts -->

                            <div class="container">
                                <div class="row">
                                    


                                    <table class="table">
                                          <thead>
                                            <tr>
                                              <th scope="col">Food Menu</th>
                                              <th scope="col">Food Name</th>
                                              <th scope="col">About</th>
                                                <th scope="col">price</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                             
                                            </tr>
                                          </thead>
                                          <tbody>

                                            <?php
                                            include('../db.php');
                                            $query= "SELECT * FROM `foodsubcategory` ";
                                            $fly= mysqli_query($connect,$query);
                                            while($bird= mysqli_fetch_array($fly))
                                            {   
                                                ?>
                                                <tr>
                                              <th scope="row"><?php 
                                              $fid=$bird['foodmenuid'];  
                                              $fq="SELECT * FROM `foodmenu` WHERE `id`='$fid'";
                                              $qfe= mysqli_query($connect,$fq);
                                              $aaja= mysqli_fetch_array($qfe);
                                              print_r($aaja['name']);

                                              ?></th>
                                                  <td><?php print_r($bird['name']);  ?></td>
                                                    <td><?php print_r($bird['about']);  ?></td>
                                                      <td><?php print_r($bird['price']);  ?></td>
                                              <td>
                                                       <?php
                                $pic=print_r('<img style="height: 80px; width: 80px; border-style: solid;border-color: black;border-radius: 50px;padding: 2px;" src="data:image/jpeg;base64,'.base64_encode($bird['img']).'">');
                             ?>
                                              </td>
                                              <td>
                                                  <form method="post" action="foodsubcategoryback.php">
                                                      <input type="hidden" value="<?php print_r($bird['id']);  ?>" name="delid">
                                                      <input type="submit" value="Remove" class="btn btn-danger" name="remove">
                                                  </form>

                                              </td>
                                              
                                            </tr>
                                                <?php



                                            }


                                            ?> 
                                            
                                           
                                          </tbody>
                                        </table>
                                </div>
                            </div>

                       <!-- admin panel ends here -->
               

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © 8MILE STONE
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