
<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">

                   <div class="container">
 	<div class="row">
 	<p style="margin: 40px"></p>
 		
 		<div class="col-md-8">

 <?php
 //For Profile Picture

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $permited1  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name1 = $_FILES['profile_pic']['name'];
    $file_size1 = $_FILES['profile_pic']['size'];
    $file_temp1 = $_FILES['profile_pic']['tmp_name'];
    $div = explode('.', $file_name1);
    $file_ext1 = strtolower(end($div));
    $unique_image1 = substr(md5(time()), 0, 10).'.'.$file_ext1;
    $uploaded_image1 = "uploads/".$unique_image1;

     
//For Signature
    

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $permited2  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name2 = $_FILES['signature']['name'];
    $file_size2 = $_FILES['signature']['size'];
    $file_temp2 = $_FILES['signature']['tmp_name'];

    $div = explode('.', $file_name2);
    $file_ext2 = strtolower(end($div));
    $unique_image2 = substr(md5(time()), 0, 10).'.'.$file_ext2;
    $uploaded_image2 = "uploads/".$unique_image2;

   //For SSC Transcript

     if($_SERVER["REQUEST_METHOD"] == "POST") {
    $permited3  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name3 = $_FILES['ssc_transcript']['name'];
    $file_size3 = $_FILES['ssc_transcript']['size'];
    $file_temp3 = $_FILES['ssc_transcript']['tmp_name'];

    $div = explode('.', $file_name3);
    $file_ext3 = strtolower(end($div));
    $unique_image3 = substr(md5(time()), 0, 10).'.'.$file_ext3;
    $uploaded_image3 = "uploads/".$unique_image3;

    //For HSC Transcript

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $permited4  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name4 = $_FILES['hsc_transcript']['name'];
    $file_size4 = $_FILES['hsc_transcript']['size'];
    $file_temp4 = $_FILES['hsc_transcript']['tmp_name'];

    $div = explode('.', $file_name4);
    $file_ext4 = strtolower(end($div));
    $unique_image4 = substr(md5(time()), 0, 10).'.'.$file_ext4;
    $uploaded_image4 = "uploads/".$unique_image4;

     if (empty($file_name)||) {
     echo "<span class='error'>Please Select any Image !</span>";
    }elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
    move_uploaded_file($file_temp, $uploaded_image);
    $query = "INSERT INTO tbl_image(image) 
    VALUES('$uploaded_image')";
    $inserted_rows = $db->insert($query);
  }

  

     }
  

     }
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



