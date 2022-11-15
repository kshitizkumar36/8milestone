   <!-- backend -->
                                                  <?php
                                                  include('../db.php');
                                                  if(isset($_POST['remove']))
                                                  {
                                                    $id= $_POST['delid'];
                                                    $query2="DELETE FROM `sports` WHERE `id`='$id'";
                                                    $ch=mysqli_query($connect,$query2);
                                                    header("refresh");

                                                    header("Location: sport.php");


                                                  }

                                                  ?>

                                                  <!-- backend// -->