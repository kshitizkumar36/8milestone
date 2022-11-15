<?php 




include('../db.php');
                            if(isset($_POST['food']))
                            {
                              $category= $_POST['category'];
$fname= $_POST['kname'];
$about= $_POST['about'];
$price= $_POST['price'];
                                $fname= $_POST['kname'];
                             

                                  $filename= $_FILES['photu']['name'];
                                   $tmpname= $_FILES['photu']['tmp_name'];
                                   $filetype= $_FILES['photu']['type'];
                                    for($i=0; $i<=count($tmpname)-1;$i++)
                                        {

                                               $name= addslashes($filename[$i]);
                                                $tmp= addslashes(file_get_contents($tmpname[$i]));
                                                $addd="INSERT INTO `foodsubcategory`( `foodmenuid`, `name`, `about`, `price`, `img`) VALUES ('$category','$fname','$about','$price','$tmp')";
                                                $iu= mysqli_query($connect,$addd);
                                                if($iu)
                                                {
                                                    echo"<script>alert('Sub Category Added Successfully!!');</script>";
                                                    include('foodsubcategory.php');

                                                }
                                                else
                                                {
                                                     echo"<script>alert('Sub Category Not Added Successfully!!');</script>";
                                                    include('foodsubcategory.php');
                                                }


                                        }


                            }


                             if(isset($_POST['remove']))
                            {
                                $did= $_POST['delid'];
                                $query2= "DELETE FROM `foodsubcategory` WHERE `id`='$did'";
                                $u=mysqli_query($connect,$query2);
                                include('foodsubcategory.php');
                            }













 ?>



