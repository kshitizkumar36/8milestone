 <?php 
 include('../db.php');
                
                                          if(isset($_POST['done']))
                                          {
                                            $id= $_POST['did'];
                                            $var="Done";
                                            $sankar="UPDATE `sportboooking` SET `action`='$var' WHERE `id`='$id'";
                                            $yeu=mysqli_query($connect,$sankar);
                                            if($yeu){
                                            	include('game.php');
                                            }else{echo"not deliver";}

                                          }
                                          


                                           ?>



                                              <?php 
                                          if(isset($_POST['remove']))
                                          {
                                            $id= $_POST['rid'];
                                            $var="Order Terminated";
                                            $sankar="UPDATE `sportboooking` SET `action`='$var' WHERE `id`='$id'";
                                            $yeu=mysqli_query($connect,$sankar);
                                            if($yeu){
                                            	include('game.php');
                                            }else{echo"not cancel";}
                                          }


                                           ?>