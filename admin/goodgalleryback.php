
                            <!-- codin -->
                            <?php
                            include('../db.php');
                            if(isset($_POST['food']))
                            {
                                $title= "food";
                             

                                  $filename= $_FILES['cat']['name'];
                                   $tmpname= $_FILES['cat']['tmp_name'];
                                   $filetype= $_FILES['cat']['type'];
                                    for($i=0; $i<=count($tmpname)-1;$i++)
                                        {

                                               $name= addslashes($filename[$i]);
                                                $tmp= addslashes(file_get_contents($tmpname[$i]));
                                                $addd="INSERT INTO `gallery`( `title`, `img`) VALUES ('$title','$tmp')";
                                                $iu= mysqli_query($connect,$addd);
                                                if($iu)
                                                {
                                                    echo"<script>alert('Photo Added Successfully!!');</script>";
                                                    include('foodgallery.php');

                                                }
                                                else
                                                {
                                                     echo"<script>alert('Photo Not Added Successfully!!');</script>";
                                                    include('foodgallery.php');
                                                }


                                        }


                            }


                            if(isset($_POST['remove']))
                            {
                                $did= $_POST['delid'];
                                $query2= "DELETE FROM `gallery` WHERE `id`='$did'";
                                $u=mysqli_query($connect,$query2);
                                include('foodgallery.php');
                            }


                            ?>