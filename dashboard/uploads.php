
<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Image and Documents Upload</h2>
                <div class="block">
                   <div class="container">
 	<div class="row">
 	<p style="margin: 40px"></p>
 		
 		<div class="col-md-8">
      <?php $userId=Session::get('userId');?>

 <?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //profile Picture
      $permited  = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['profile_pic']['name'];
      $file_size = $_FILES['profile_pic']['size'];
      $file_temp = $_FILES['profile_pic']['tmp_name'];

       $div = explode('.', $file_name);
       $file_ext = strtolower(end($div));
       $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
       $profileupload = "uploads/".$unique_image;


      //signature
      $signature=$_FILES['signature']['name'];
      $signaturesize=$_FILES['signature']['size'];
      $signaturtemp=$_FILES['signature']['tmp_name'];     

      $div1 = explode('.', $signature);
      $file_ext1 = strtolower(end($div1));
      $unique_image1 = substr(md5(time()), 0, 10).'.'.$file_ext1;
      $signatureupload = "uploads/".$unique_image1;

      //SSC transcript

      $ssc_transcript=$_FILES['ssc_transcript']['name'];
      $ssc_transcriptsize=$_FILES['ssc_transcript']['size'];
      $ssc_transcripttemp=$_FILES['ssc_transcript']['tmp_name'];     

      $div2= explode('.', $ssc_transcript);
      $file_ext2 = strtolower(end($div2));
      $unique_image2 = substr(md5(time()), 0, 10).'.'.$file_ext2;
      $ssc_transcriptupload = "uploads/".$unique_image2;

      //HSC Transcript

      $hsc_transcript=$_FILES['hsc_transcript']['name'];
      $hsc_transcriptsize=$_FILES['hsc_transcript']['size'];
      $hsc_transcripttemp=$_FILES['hsc_transcript']['tmp_name'];     

      $div3= explode('.', $hsc_transcript);
      $file_ext3 = strtolower(end($div3));
      $unique_image3 = substr(md5(time()), 0, 10).'.'.$file_ext3;
      $hsc_transcriptupload = "uploads/".$unique_image3;


      if (empty($file_name)||empty($signature)||empty($ssc_transcript)||empty($hsc_transcript)) {
       echo "<span style='color:red;'>Please Select any Image !</span>";
      }elseif ($file_size>1048567 || $signaturesize>1048567 || $ssc_transcriptsize>1048567 || $hsc_transcriptsize>1048567){
       echo "<span style='color:red;'>Image Size should be less then 1MB!
       </span>";
      } elseif (in_array($file_ext, $permited) === false || in_array($file_ext1 , $permited)=== false || in_array($file_ext2 , $permited)=== false || in_array($file_ext3 , $permited)=== false){
       echo "<span style='color:red;'>You can upload only:-".implode(', ', $permited)."</span>";
      } else{
      move_uploaded_file($file_temp, $profileupload);
      move_uploaded_file($signaturtemp, $signatureupload);
      move_uploaded_file($ssc_transcripttemp, $ssc_transcriptupload);
      move_uploaded_file($hsc_transcripttemp, $hsc_transcriptupload);


      $query = "INSERT INTO  images(user_id,profile_pic,signature,ssc_transcript,hsc_transcript) 
      VALUES('$userId','$profileupload','$signatureupload','$ssc_transcriptupload ','$hsc_transcriptupload')";
      $inserted_rows = $db->insert($query);
      header('location :initprofile.php');
      }
     }
    ?>
 		<h1 class="text-center"><u>Upload Your Photo and signature</u></h1>

 		<div><h3>Photo and Signature Upload Instruction</h3>
 			<ul>
 				<li>Photo should be <span style="color:red;font-weight: bold;">JPEG or JPG or PNG </span>format without these format picture will not submit. </li>
 				<li>Picture have to be<span style="color:red;font-weight: bold;"> 1Mb or less</span>. </li>
 				<li>All photo should be <span style="color:red;font-weight: bold;">Clear, Scaned Copy</span> and proper format</li>
 			</ul>
 		
 		</div>
 		<hr/>
 		 <form action="" method="post" enctype="multipart/form-data">
 		 <table>
 		 <tr>
 		 	<td style="padding: 10px;">Select Profile Picture: </td><td><input type="file" name="profile_pic" id="profile_pic"></td>
 		 </tr>
 		 <tr>
 		 	<td style="padding: 10px;">Select Singature</td><td><input type="file" name="signature" id="signature"></td>
 		 </tr>
 		 <tr>
 		 	<td style="padding: 10px;">Select SSC Transcript</td><td><input type="file" name="ssc_transcript" id="ssc_transcript"></td>
 		 </tr>
 		 <tr>
 		 	<td style="padding: 10px;">Select HSC Transcript</td><td><input type="file" name="hsc_transcript" id="hsc_transcript"></td>
 		 </tr>
 		 
 		 <tr><td></td><td><br/></td></tr>
 		 <tr><td></td><td><button type="submit" style="padding: 5px;width: 65%;" class="btn btn-default btn-lg" name="submit">Upload</button></td></tr>

 		 		    
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



