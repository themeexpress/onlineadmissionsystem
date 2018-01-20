<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Admin Dashbord</h2>
                <div class="block">
                <h3 class="text-center" style="color:green;"> Enter OMR Mark</h3> 
                <hr>

                   <div class="container">
                       <div class="row">
                            <div class="col-md-10">
                                <?php 
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "onlineadmission";
                                $id=$_GET['regid'] ?? '';

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
                                  $mark=$_POST['mark'];
                               
                            $sql = "UPDATE application1 SET mark='$mark' WHERE reg_id='$id'";
                            if (mysqli_query($conn, $sql)) {
                                echo "Record updated successfully";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }

                            mysqli_close($conn);
                        
                             
                                }                             
                        ?>
                                
                                <form action="enteromrmark.php" method="POST">
                                <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>OMR Mark <span style="color:red;font-size: 18px;">
                                        *</span></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                        <input type="number" class="form-control" name="mark">
                                        
                                </div>
                                
                                <div class="col-md-3">
                                    <button style="text-align: center;padding: 4px;  background: #204562;color: #fff;" type="submit" class="btn btn-default btn-lg" name="submit">Enter OMR Mark</button>
                                </div>
                                </div>
                                       
                                </form>
                            
                            </div>
                       </div>
                   </div>          
                        
                </div>
               
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
   <?php include "inc/footer.php";?>