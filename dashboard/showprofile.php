
<?php include "inc/header.php" ;?>

        <div class="grid_10">
        	 <?php $userId=Session::get('userId');
        	 $query="SELECT application1.name,application1.father_name,application1.mother_name,application1.mobile_number, application1.date_of_birth,application1.gender, application1.nationality, application1.maritalstatus, application1.first_choice,application1.second_choice, application1.third_choice, present_address.careof,present_address.houseorvillage,present_address.post_office,present_address.police_station,present_address.zip_code, present_address.district,permanent_address.houseorvillage,permanent_address.post_office,permanent_address.police_station,permanent_address.zip_code, permanent_address.district,ssc.ssc_degree_name,ssc.ssc_roll,ssc.ssc_cgpa,ssc.ssc_subject,ssc.ssc_passing_year,ssc.ssc_board,ssc.ssc_institute,hsc.hsc_degree_name,hsc.hsc_roll, hsc.hsc_subject,hsc.hsc_passing_year,hsc.hsc_cgpa,hsc.hsc_board,hsc.hsc_institute,user.email,images.profile_pic,images.signature FROM application1, present_address, permanent_address,ssc,hsc,user,images WHERE application1.user_id=permanent_address.user_id AND application1.user_id=present_address.user_id AND application1.user_id=ssc.user_id AND application1.user_id=hsc.user_id AND application1.user_id=user.user_id AND application1.user_id=images.user_id AND application1.user_id='$userId'";
			   $result=$db->select($query);
				while($row = mysqli_fetch_array($result)) {				
					$profile_pic=$row['profile_pic'];
			 ?>
		
            <div class="box round first grid">
                <h2>Application Details</h2>
                <div class="block">
                   <div class="container">
				 	<div class="row">				 			 		
				 		<div class="col-md-2">			     
							<img class="img-responsive" style="border: 1px solid #ddd;padding: 10px;" src="img/logo.png" alt="">			 
				 		</div>
				 		<div class="col-md-6">				     
						<h2 class="text-center">BANGLADESH UNIVERSITY OF BUSINESS AND TECHNOLOGY (BUBT)</h2>
						<h4 class="text-center">Rupnagar R/A, Mirpur-2, Dhaka-1216, Bangladesh </h4>
						<p class="text-center">Phone: 01967169189, 01845734337, 01680050630 </p>
						<p class="text-center">Email: info@bubt.edu.bd</p>
						<p class="text-center" style="padding-top:10px;color:#1E90FF;"><u><b>DETAILS PROFILE</b></u></p>
				 
				 		</div>
				 		<div class="col-md-2">	
				 			<img class="img-responsive" style="border: 1px solid #ddd;padding: 10px;" src="<?php echo $profile_pic; ?>" alt="">	   
				 		</div>
				 	</div>
				 	<hr>
				 	<div class="row">
				 		<div class="col-md-10">
				 	<div class="table-responsive">    				
    				<table class="table table-bordered">
				       	<tr>
				       		<th>Name </th>
				       		<td colspan="3"><?php echo $row['name'] ?></td>
				       	</tr>
				       	<tr>
				       		<th>Father's Name </th>
				       		<td colspan="3"><?php echo $row['father_name']; ?></td>
				       	</tr>
				       	<tr>
				       		<th>Mother's Name </th>
				       		<td colspan="3"><?php echo $row['mother_name']; ?></td>
				       	</tr>
				       	<tr>
				       		<th>Mobile Number </th>
				       		<td colspan="3"><?php echo $row['mobile_number']; ?></td>
				       	</tr>				       					       
				       	<tr>
				       		<th>Date of Birth </th>
				       		<td><?php echo $fm->formatdate($row['date_of_birth']); ?></td>
				       		<th>Gender</th>
				       		<td style="text-transform: capitalize;"><?php echo $row['gender']; ?></td>
				       					       		
				       	</tr>
				       	<tr>
				       		<th>Nationality </th><td><?php echo $row['nationality']; ?></td>
				       		<th>Email Address </th><td><?php echo $row['email']; ?></td>
				       					       		
				       	</tr>
				       	<tr>
				       		<th>Marital Status </th><td><?php echo $row['maritalstatus']; ?></td>
				       		<th>First Choice </th><td><?php echo $row['first_choice']; ?></td>
				       					       		
				       	</tr>
				       	<tr>
				       		<th>Second Choice </th><td><?php echo $row['second_choice']; ?></td>
				       		<th>Third Choice </th><td><?php echo $row['third_choice']; ?></td>
				       					       		
				       	</tr>
				       		<tr>
				       		<th>Permanent Address </th><td>
				       			<?php echo "<b>House or Road: </b>". $row['houseorvillage'];echo "<br>";
				       		echo "<b>Post Office: </b>". $row['post_office']; echo "<br>";
				       		echo "<b>Police Station: </b>". $row['police_station']; echo "<br>";
				       		echo "<b>Zip Code: </b>". $row['zip_code']; echo "<br>";
				       		echo "<b>District: </b>". $row['district']; 
				       		
				       		?>
				       		</td>
				       		<th>Present Address </th><td>
				       		<?php echo "<b>House or Road: </b>". $row['houseorvillage'];echo "<br>";
				       		echo "<b>Post Office: </b>". $row['post_office']; echo "<br>";
				       		echo "<b>Police Station: </b>". $row['police_station']; echo "<br>";
				       		echo "<b>Zip Code: </b>". $row['zip_code']; echo "<br>";
				       		echo "<b>District: </b>". $row['district']; 
				       		
				       		?></td>
				       					       		
				       	</tr>
				       	<tr>
				       		<th>SSC Detaisls </th><td>
				       			<?php echo "<b>Degree Name: </b>". $row['ssc_degree_name'];echo "<br>";
				       		echo "<b>SSC Roll: </b>". $row['ssc_roll']; echo "<br>";
				       		echo "<b>SSC CGPA: </b>". $row['ssc_cgpa']; echo "<br>";
				       		echo "<b>Group: </b>". $row['ssc_subject']; echo "<br>";
				       		echo "<b>Board: </b>". $row['ssc_board']; echo "<br>";
				       		echo "<b>Institute: </b>". $row['ssc_institute']; echo "<br>";
				       		echo "<b>Passing Year: </b>". $row['ssc_passing_year']; 				       	
				       		?>
				       		</td>
				       		<th>HSC Details </th><td>
				       		<?php echo "<b>Degree Name: </b>". $row['hsc_degree_name'];echo "<br>";
				       		echo "<b>HSC Roll: </b>". $row['hsc_roll']; echo "<br>";
				       		echo "<b>HSC CGPA: </b>". $row['hsc_cgpa']; echo "<br>";
				       		echo "<b>Group: </b>". $row['hsc_subject']; echo "<br>";
				       		echo "<b>Board: </b>". $row['hsc_board']; echo "<br>";
				       		echo "<b>Institute: </b>". $row['hsc_institute']; echo "<br>";
				       		echo "<b>Passing Year: </b>". $row['hsc_passing_year'];
				       		
				       		?></td>
				       					       		
				       	</tr>
				       	<tr>
				       		<th>Signature </th>
				       		<td colspan="3">
				       		<img style="width: 120px;height: 50px;padding: 10px;" src="<?php echo $row['signature'];?>">
				       		</td>
				       					       		
				       	</tr>

				       </table>
				       </div>
				       </div>
				   </div>
				 		
					</div>
					
 					</div>
            
                        
                </div>
                <?php } ?>
                
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
   <?php include "inc/footer.php";?>




