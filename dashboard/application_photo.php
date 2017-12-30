
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
 			<ul>
 				<li>Photo should be <span style="color:red;font-weight: bold;">JPEG or JPG or PNG </span>format without these format picture will not submit. </li>
 				<li>Picture have to be<span style="color:red;font-weight: bold;"> 1Mb or less</span>. </li>
 				<li>All photo should be <span style="color:red;font-weight: bold;">Clear, Scaned Copy</span> and proper format</li>
 			</ul>
 		
 		</div>
 		<hr/>
 		 <form action="upload.php" method="post" enctype="multipart/form-data">
 		 <table>
 		 <tr>
 		 	<td>Select Your image to upload:</td><td><input type="file" name="profile_pic" id="profile_pic"></td>
 		 </tr>
 		 <tr>
 		 	<td>Select Singature</td><td><input type="file" name="signature" id="signature"></td>
 		 </tr>
 		 <tr>
 		 	<td>Select SSC Transcript</td><td><input type="file" name="ssc_transcript" id="ssc_transcript"></td>
 		 </tr>
 		 <tr>
 		 	<td>Select HSC Transcript</td><td><input type="file" name="hsc_transcript" id="hsc_transcript"></td>
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



