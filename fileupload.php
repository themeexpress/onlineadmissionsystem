<?php
include 'lib/Database.php';
$db= new Database();

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $_FILES['profile']['name'];
	    $file_size = $_FILES['profile']['size'];
	    $file_temp = $_FILES['profile']['tmp_name'];

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


	    if (empty($file_name)||empty($signature)) {
	     echo "<span style='color:red;'>Please Select any Image !</span>";
	    }elseif ($file_size>1048567 || $signaturesize>1048567){
	     echo "<span class='error'>Image Size should be less then 1MB!
	     </span>";
	    } elseif (in_array($file_ext, $permited) === false && in_array($file_ext1 , $permited=== false)){
	     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
	    } else{
	    move_uploaded_file($file_temp, $profileupload);
	    move_uploaded_file($signaturtemp, $signatureupload);
	    $query = "INSERT INTO  imgtest(profile,signature) 
	    VALUES('$profileupload','$signatureupload')";
	    $inserted_rows = $db->insert($query);
	    if ($inserted_rows) {
	     echo "<span class='success'>Image Inserted Successfully.
	     </span>";
	    }else {
	     echo "<span class='error'>Image Not Inserted !</span>";
	    }
	    }
	   }
	  ?>
	  <form action="" method="post" enctype="multipart/form-data">
	  <table>
	  	<tr>
	  		<td>profile</td><td><input type="file" name="profile"></td>
	  	</tr>
	  	<tr>
	  		<td>Signature</td><td><input type="file" name="signature"></td>
	  	</tr>
	  	<tr>
	  		<td></td><td><input type="submit" name="submit" value="upload"></td>
	  	</tr>
	  	
	  </table>
	  </form>