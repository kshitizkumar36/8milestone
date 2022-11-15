 <?php 
 include('../db.php');
                
                                          if(isset($_POST['delilvery']))
                                          {
                                            $id= $_POST['did'];
                                            $var="Delivered";
                                            $sankar="UPDATE `foodorder` SET `action`='$var' WHERE `id`='$id'";
                                            $yeu=mysqli_query($connect,$sankar);
                                            if($yeu){
                                            	include('foodorder.php');
                                            }else{echo"not deliver";}

                                          }
                                          


                                           ?>



                                              <?php 
                                          if(isset($_POST['remove']))
                                          {
                                            $id= $_POST['rid'];
                                            $var="Order Terminated";
                                            $sankar="UPDATE `foodorder` SET `action`='$var' WHERE `id`='$id'";
                                            $yeu=mysqli_query($connect,$sankar);
                                            if($yeu){
                                            	include('foodorder.php');
                                            }else{echo"not cancel";}
                                          }


                                           ?>