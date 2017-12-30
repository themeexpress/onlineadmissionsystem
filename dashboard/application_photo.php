
<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">

                   <div class="container">
 	<div class="row">
 	<p style="margin: 40px"></p>
 		
 		<div class="col-md-8">
 		<p style>
 		<h1 class="text-center"><u>Upload Your Photo and signature</u></h1>

 		<div><h3>Photo and Signature Upload Instruction</h3>
 		<p>Photo should be <span style="color:red;font-weight: bold;">JPEG or JPG </span>format without these format picture will not submit. Picture have to be<span style="color:red;font-weight: bold;"> 200kb or less</span>. Size have to be <span style="color:red;font-weight: bold;">300x300 pixel</span>. Signature have to be<span style="color:red;font-weight: bold;"> JPG or JPEG </span>format and have to be 100kb or less. Size have to be <span style="color:red;font-weight: bold;">300x80 pixel</span>. </p>
 		</div>
 		<hr/>
 		 <form action="upload.php" method="post" enctype="multipart/form-data">
 		 <table>
 		 <tr>
 		 	<td>Select Your image to upload:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
 		 </tr>
 		 <tr>
 		 	<td>Select Singature</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
 		 </tr>
 		 <tr><td></td><td><br/></td></tr>
 		 <tr><td></td><td><button type="submit" class="btn btn-default btn-lg" name="submit">Upload</button></td></tr>

 		 		    
 		 </table>
 		 
		    

		</form>
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



