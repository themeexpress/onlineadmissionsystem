<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block"> 
                             
                        
                </div>
                <div class="row">
                    <div class="col-4">Your Application Status</div>
                    <div class="col-4"><?php echo Session::get('userId');?></div>
                    <div class="col-4">Edit<?php echo  Session::testo();?></div>
                </div>
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
   <?php include "inc/footer.php";?>