
<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Show Profile Or Edit Profile</h2>
                <div class="block">
                   <div class="container">
 	<div class="row">
 	<p style="margin: 40px"></p>
 		
 		<div class="col-md-8">
      <?php $userId=Session::get('userId');?>

 
 		<h1 class="text-center" style="color:green;">Application Submitted Successfully!!</h1>

 		<div><h3 class="text-center">Your Application is under supervision. We will issue an <span style="color:#1E90FF;"><b>Admit Card</b></span> for you with in 24 hours if your applicaton is is approved.</h3>
 		<p style="padding: 20px;"></p>			
 		
 		</div>
 		<a class="btn btn-default" style="padding: 0px;width: 40%;background: #4D68A1;color: #fff;" href="showprofile.php">Show My Profile</a> 
 		<a class="btn btn-default" style="padding: 0px;width: 40%;background: #1E90FF;color: #fff;" href="editprofile.php">Edit My Profile</a> 
		<p style="margin: 50px"></p>
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



