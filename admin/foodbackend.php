
                            <!-- codin -->
                            <?php
                            include('../db.php');
                            if(isset($_POST['food']))
                            {
                                $fname= $_POST['foodname'];
                             

                                  $filename= $_FILES['cat']['name'];
                                   $tmpname= $_FILES['cat']['tmp_name'];
                                   $filetype= $_FILES['cat']['type'];
                                    for($i=0; $i<=count($tmpname)-1;$i++)
                                        {

                                               $name= addslashes($filename[$i]);
                                                $tmp= addslashes(file_get_contents($tmpname[$i]));
                                                $addd="INSERT INTO `foodmenu`( `name`, `img`) VALUES ('$fname','$tmp')";
                                                $iu= mysqli_query($connect,$addd);
                                                if($iu)
                                                {
                                                    echo"<script>alert('Category Added Successfully!!');</script>";
                                                    include('food.php');

                                                }
                                                else
                                                {
                                                     echo"<script>alert('Category Not Added Successfully!!');</script>";
                                                    include('food.php');
                                                }


                                        }


                            }


                            if(isset($_POST['remove']))
                            {
                                $did= $_POST['delid'];
                                $query2= "DELETE FROM `foodmenu` WHERE `id`='$did'";
                                $u=mysqli_query($connect,$query2);
                                include('food.php');
                            }


                            ?>