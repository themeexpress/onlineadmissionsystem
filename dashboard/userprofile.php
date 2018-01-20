<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block"> 
                    <div class="container">
                     <div class="row">
                         <div class="col-md-3 text-center">
                            <img class="img-responsive" style="max-width: 150px;  max-height: 101px; margin: auto;" src="img/application.png">
                            <h3 class="text-center">Application Status</h3>
                            <p class="text-center">your application status is: </p>
                          
                            <?php $userID=Session::get('userId');
                            $query="select user_id from application1 where user_id='$userID'";
                            $res=$db->select($query);
                            if($res->num_rows>0){

                            ?>
                            <p style="color:green;">You have Already Applied</p>
                            <a class="btn btn-info disabled" style="padding: 0 15px;" href="application.php">Apply Now</a>
                            <?php } else{?>  
                            <a class="btn btn-primary" class="btn btn-info disabled" style="padding: 0 15px;" href="application.php">Apply Now</a>
                            <?php } ?>                       

                         </div>
                         <div class="col-md-3 text-center">
                            <img class="img-responsive uicon" style="max-width: 150px;  max-height: 101px; margin: auto;" src="img/admit.png">
                            <h3 class="text-center">Collect Admit Card</h3>
                            <p class="text-center">Collect Admit Card to seat in Test </p>
                            <a class="btn btn-primary" style="padding: 0 15px;" href="admitcard.php">ADMIT CARD</a> 
                         </div>
                         <div class="col-md-3 text-center">
                            <img class="img-responsive uicon" style="max-width: 150px;  max-height: 101px; margin: auto;" src="img/result.png">
                            <h3 class="text-center">Admission Result</h3>
                            <p class="text-center">Admission Merit List and Wating Lists </p>
                             <a class="btn btn-primary" style="padding: 0 15px;" href="studentresult.php">RESULT</a> 
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