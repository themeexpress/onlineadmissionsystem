<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Admin Dashbord</h2>
                <div class="block">
                <h3 class="text-center" style="color:green;"> All Applicants Here</h3> 
                
						<?php
                         //All Student Query
						$id=$_GET['id']??'';
                        $querya="DELETE FROM application1
                        WHERE user_id='$id'";

                         $queryp="DELETE FROM permanent_address
                        WHERE user_id='$id'";

                         $querypp="DELETE FROM present_address
                        WHERE user_id='$id'";
                         $querys="DELETE FROM ssc
                        WHERE user_id='$id'";
                        $queryh="DELETE FROM hsc
                        WHERE user_id='$id'";

                        $result1= $db->delete($querya);
                        $result2= $db->delete($queryp);
                        $result3= $db->delete($querypp);
                        $result4= $db->delete($querys);
                        $result5= $db->delete($queryh);

                        header('location:allstudents.php');


                        ?>
                           
                       
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