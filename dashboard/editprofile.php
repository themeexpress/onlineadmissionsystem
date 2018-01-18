<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Application </h2> 

                              
		 		<h1 class="text-center">Update Application's Data</h1>
		 		<?php $userId=Session::get('userId');?>

		 		<hr/>
		 		<h5 class="text-center" style="color:red;">* Mark indicate Required Field</h5>  
		 		<div class="error">
		 			<?php 
		 			if ($_SERVER['REQUEST_METHOD']=='POST') {
		 				//THESE DATA WILL INSERT IN APPLICATION TABLE
							$name 			= $fm->validation($_POST['name']);
							$father_name 	= $fm->validation($_POST['father_name']);
							$mother_name 	= $fm->validation($_POST['mother_name']);
							$mobile_number	= $_POST['mobile_number'];
							$date_of_birth 	= $_POST['date_of_birth'];
							$gender 		= $_POST['gender'];
							$nationality 	= $_POST['nationality'];
							$maritalstatus 	= $_POST['maritalstatus'];
							$first_choice 	= $_POST['first_choice'];
							$second_choice 	= $_POST['second_choice'];
							$third_choice 	= $_POST['third_choice'];

							//This data will go to permanent address table
							$careof 			= $fm->validation($_POST['careof']);
							$houseorvillage 	= $fm->validation($_POST['houseorvillage']);
							$post_office 		= $fm->validation($_POST['post_office']);
							$police_station 	= $fm->validation($_POST['police_station']);
							$zip_code 			= $fm->validation($_POST['zip_code']);
							$district 			= $fm->validation($_POST['district']);

							//THIS DATA WILL GO MAILING ADDRESS
							$careof 			= $fm->validation($_POST['careof']);
							$houseorvillage 	= $fm->validation($_POST['houseorvillage']);
							$post_office 		= $fm->validation($_POST['post_office']);
							$police_station 	= $fm->validation($_POST['police_station']);			
							$zip_code 			= $fm->validation($_POST['zip_code']);
							$district 			= $fm->validation($_POST['district']);

							//THIS DATA WILL SSC TABLE//
							$ssc_degree_name 	= $fm->validation($_POST['ssc_degree_name']);
							$ssc_roll 			= $fm->validation($_POST['ssc_roll']);
							$ssc_cgpa 			= $fm->validation($_POST['ssc_cgpa']);
							$ssc_subject 		= $fm->validation($_POST['ssc_subject']);
							$ssc_passing_year 	= $fm->validation($_POST['ssc_passing_year']);
							$ssc_board 			= $fm->validation($_POST['ssc_board']);
							$ssc_institute 		= $fm->validation($_POST['ssc_institute']);

							//THESE DATA WILL GO HSC TABLE						
							
							$hsc_degree_name 	= $fm->validation($_POST['hsc_degree_name']);
							$hsc_roll 			= $fm->validation($_POST['hsc_roll']);
							$hsc_subject 		= $fm->validation($_POST['hsc_subject']);
							$hsc_passing_year 	= $fm->validation($_POST['hsc_passing_year']);	
							$hsc_cgpa 			= $fm->validation($_POST['hsc_cgpa']);			
							$hsc_board 			= $fm->validation($_POST['hsc_board']);
							$hsc_institute 		= $fm->validation($_POST['hsc_institute']);

							//Query for Applicaiton Table						
						 
	$appquery="UPDATE application1 SET name='$name',father_name='$father_name', mother_name='$mother_name',mobile_number='$mobile_number',date_of_birth='$date_of_birth', gender='$gender', nationality='$nationality', maritalstatus='$maritalstatus', first_choice='$first_choice',second_choice='$second_choice',third_choice='$third_choice'
							 WHERE user_id='$userId'";

								// Permanent address query

	$permanent_query = "UPDATE permanent_address SET careof='$careof',houseorvillage='$houseorvillage',post_office='$post_office',police_station='$police_station',zip_code='$zip_code',district='$district' WHERE user_id='$userId'";

								//present_address

	$present_query ="UPDATE present_address SET careof='$careof',houseorvillage='$houseorvillage',post_office='$post_office',police_station='$police_station',zip_code='$zip_code',district='$district' WHERE user_id='$userId'";
	
	//Query for SCC Table
	//ssc

	$ssc_query ="UPDATE ssc SET ssc_degree_name='$ssc_degree_name',ssc_roll='$ssc_roll',
	ssc_cgpa='$ssc_cgpa',ssc_subject='$ssc_subject',ssc_passing_year='$ssc_passing_year',ssc_board='$ssc_board',ssc_institute='$ssc_institute' WHERE user_id='$userId'"; 

	//Query for HSC table
	$hsc_query ="UPDATE hsc SET hsc_degree_name='$hsc_degree_name',hsc_roll='$hsc_roll',hsc_subject='$hsc_subject',hsc_passing_year='$hsc_passing_year',hsc_cgpa='$hsc_cgpa',hsc_board='$hsc_board',hsc_institute='$hsc_institute' WHERE user_id='$userId' ";

			$appresult=$db->update($appquery);
			$permanetresult=$db->update($permanent_query);
			$presentresult=$db->update($present_query);
			$sscresult=$db->update($ssc_query);
			$hscresult=$db->update($hsc_query);
			echo "Data successfully submited "."<a href='uploads.php'>Next upload images </a>";
			
	    }

		?>

		 		</div>
		 		
		 		<?php 
		 		//selecting Data from tables
		 		$query="SELECT * FROM application1 WHERE user_id='$userId'";
		 		$appdata=$db->select($query);
		 		if(is_array($appdata) || is_object($appdata)){
		 			foreach ($appdata as $data) { 				
		 			
		 		?>

		 		 <form action="editprofile.php" method="POST">

					  <div class="form-group">
					    <label for="name">Name <span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" value="<?php echo $data['name']?>" name="name">
					  </div>
					  <div class="form-group">
					    <label for="father_name">Father's Name<span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" name="father_name" value="<?php echo $data['father_name']?>">
					  </div>
					  <div class="form-group">
					    <label for="mother_name">Mother's Name <span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" name="mother_name" value="<?php echo $data['mother_name']?>">
					  </div>
					  <div class="form-group">
					    <label for="mobile_number">Mobile Number <span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" name="mobile_number" value="<?php echo $data['mobile_number']?>">
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="data_of_birth">Date of Birth<span style="color:red;font-size: 18px;">*</span></label>
						    <input type="date" class="form-control" name="date_of_birth" value="<?php echo $data['date_of_birth']; ?>">
					  		</div>
					  	</div>
					  	<div class="col-md-6" style="padding-top: 30px;">
					  		<div class="form-group">
					  			<label for="gender">Gender <span style="color:red;font-size: 18px;">*</span></label>
							    <label class="radio-inline">
								 <input type="radio" value="male" name="gender">Male
								</label>
								<label class="checkbox-inline">
								<input type="radio" value="female" name="gender">Female
								</label>
								<label class="radio-inline">
								<input type="radio" value="others" name="gender">Others
								</label>
					  		</div>
					  	</div>
					  </div>
					  
						<div class="row">
						
							<div class="col-md-6">
								 <div class="form-group">			   
								<label>Nationality <span style="color:red;font-size: 18px;">*</span></label>
								<label class="radio-inline">
								 <input type="radio" value="Bangladeshi" name="nationality">Bangladeshi
								</label>
								<label class="checkbox-inline">
								 <input type="radio" value="others" name="nationality">Others
								</label>								
							    </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="maritalstatus">Marital Status <span style="color:red;font-size: 18px;">*</span></label>
								    <label class="radio-inline">
									 <input type="radio" value="single" name="maritalstatus">Single
									</label>
									<label class="radio-inline">
									<input type="radio" value="married" name="maritalstatus">Married
									</label>			   								
					  			</div>
							</div>
						</div>			  			   
					  <div class="row" style="border: 1px solid #a1a1a1;padding: 10px;margin:0px;margin-bottom: 15px;">
					  <div class="col-md-4">
					  	<div class="form-group">
						  <label>First Choice <span style="color:red;font-size: 18px;">*</span></label>
						  <select class="form-control" name="first_choice" value="<?php echo $data['first_choice']?>">
						    <option value="CSE">CSE</option>
						    <option value="EEE">EEE</option>
						    <option value="Civil">Civil</option>
						    <option value="Mechanical">Mechanical</option>
						    <option value="Textile">Textile</option>
						  </select>
						</div>
					  </div>		  

						<div class="col-md-4">
						<div class="form-group">
						  <label for="sel1">Second Choice <span style="color:red;font-size: 18px;">*</span></label>
						  <select class="form-control" name="second_choice" value="<?php echo $data['second_choice']?>">
						    <option value="CSE">CSE</option>
						    <option value="EEE">EEE</option>
						    <option value="Civil">Civil</option>
						    <option value="Mechanical">Mechanical</option>
						    <option value="Textile">Textile</option>
						  </select>
						</div>
						</div>	
						 
						<div class="col-md-4">
						 <div class="form-group">
						  <label for="sel1">Third Choice <span style="color:red;font-size: 18px;">*</span></label>
						  <select class="form-control" name="third_choice" value="<?php echo $data['third_choice']?>">
						   <option value="CSE">CSE</option>
						    <option value="EEE">EEE</option>
						    <option value="Civil">Civil</option>
						    <option value="Mechanical">Mechanical</option>
						    <option value="Textile">Textile</option>
						  </select>
						</div>
						</div>	
						 
						</div><!--//rowdiv-->
						<?php } }?>

						<?php 
					 		//selecting Data from tables
					 		$query="SELECT * FROM permanent_address WHERE user_id='$userId'";
					 		$paddressdata=$db->select($query);
					 		while ($row=$paddressdata->fetch_assoc()) {
					 		 					 					
					 			
					 		?>
						
						<div class="row" style="border: 1px solid #a1a1a1;padding: 10px;margin:0px;margin-bottom: 15px;">
						<legend align="center"> DETAILS ADDRESS</legend>
				
							<div class="col-md-6">
								<table>
									<th>Permanent Address <span style="color:red;font-size: 18px;">*</span></th>
									<tr>
										<td>Care Of</td><td><input type="text" name="careof" value="<?php echo $row['careof']?>"></td>
									</tr>
									<tr>
										<td>House Road or village</td><td><input type="text" name="houseorvillage" value="<?php echo $row['houseorvillage']?>"></td>
									</tr>
									<tr>
										<td>Post</td><td><input type="text" name="post_office" value="<?php echo $row['post_office']?>"></td>
									</tr>
									<tr>
										<td>P.S or Upojila</td><td><input type="text" name="police_station" value="<?php echo $row['police_station']?>"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zip_code" value="<?php echo $row['zip_code']?>"></td>
									</tr>
									<tr>
										<td>District</td><td><input type="text" name="district" value="<?php echo $row['district']?>"></td>
									</tr>
								</table>
							</div>
							<?php } ?>

							<?php 
					 		//selecting Data from tables
					 		$query="SELECT * FROM present_address WHERE user_id='$userId'";
					 		$preaddressdata=$db->select($query);
					 		while ($row=$preaddressdata->fetch_assoc()) {
					 		 					 					
					 			
					 		?>

							<div class="col-md-6">
								<table>
									<th>Present or Mailing Address <span style="color:red;font-size: 18px;">*</span></th>
									<tr>
										<td>Care Of</td><td><input type="text" name="careof" value="<?php echo $row['careof'];?>"></td>
									</tr><tr>
										<td>House Road or village</td><td><input type="text" name="houseorvillage" value="<?php echo $row['houseorvillage'];?>"></td>
									</tr><tr>
										<td>Post</td><td><input type="text" name="post_office" value="<?php echo $row['post_office'];?>"></td>
									</tr><tr>
										<td>P.S or Upojila</td><td><input type="text" name="police_station" value="<?php echo $row['police_station'];?>"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zip_code" value="<?php echo $row['zip_code'];?>"></td>
									</tr>
									<tr>
										<td>District</td><td><input type="text" name="district" value="<?php echo $row['district'];?>"></td>
									</tr>
								</table>
							</div>
						</fieldset>
						</div>
						<?php }?>


						<div class="row" style="border: 1px solid #a1a1a1;padding: 10px;margin:0px;margin-bottom: 15px;">
						<legend align="center"> EDUCATONAL DETAILS</legend>
						<?php 
					 		//selecting Data from tables
					 		$query="SELECT * FROM ssc WHERE user_id='$userId'";
					 		$sscdata=$db->select($query);
					 		while ($row=$sscdata->fetch_assoc()) {
					 		 					 					
					 			
					 		?>
						
					   <div class="col-md-6">
					   	<h4>SSC/Equivalant <span style="color:red;font-size: 18px;">*</span></h4>
						<div class="form-group">
						<table>
						<tr>
						<td><label for="name">Name</label></td>
						 <td> 
						 <select class="form-control" name="ssc_degree_name">
						    <option value="SSC">SSC</option>
						    <option value="Dhakhil">Dhakhil</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>		    
						  </select>
						  </td>
						</tr>				
						  
						  <tr>
						  	<td><label>Roll</label></td>
						  	<td><input type="number" name="ssc_roll" value="<?php echo $row['ssc_roll'];?>"></td>
						  </tr>
						  <tr>
						  	<td><label>CGPA</label></td>
						  	<td><input type="text" name="ssc_cgpa" value="<?php echo $row['ssc_cgpa'];?>"></td>
						  </tr>
						  <tr>
						  	<td><label>Subject</label></td>
						  <td>
						  <select class="form-control" name="ssc_subject">		    
								    <option value="science">Science</option>
								    <option value="arts">Arts</option>
								    <option value="commerce">Commerce</option>
								    <option value="Vocational">Vocational</option>
								    <option value="others">Others</option>	    
						    </select>
						  </td>
						  </tr>
						  <tr><td><label>Passing Year</label></td>
						  	<td><input type="number" name="ssc_passing_year" value="<?php echo $row['ssc_passing_year'];?>"></td>
						  </tr>
						  <tr>
						  	<td><label>Board</label></td>
						  	<td><input type="text" name="ssc_board" value="<?php echo $row['ssc_board'];?>"></td>
						  </tr>
						  <tr>
						  	<td><label>Name of The Institute</label></td>
						  	<td><input type="text" name="ssc_institute" value="<?php echo $row['ssc_institute'];?>"></td>
						  </tr>
						</table>
						</div>
						</div>	
						<?php } ?>
						<?php 
					 		//selecting Data from tables
					 		$query="SELECT * FROM hsc WHERE user_id='$userId'";
					 		$hscdata=$db->select($query);
					 		while ($row=$hscdata->fetch_assoc()) {					 		 
					 	?>
						 
						<div class="col-md-6">
							<h4>HSC/Equivalant <span style="color:red;font-size: 18px;">*</span></h4>
						 <div class="form-group">
						 <table>
						 	<tr>
						 <td><label for="name">Name</label></td><td>
						  <select class="form-control" name="hsc_degree_name" value="<?php echo $row['hsc_degree_name'];?>" >				    
						     <option value="hsc">HSC</option>
						    <option value="alim">Alim</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>	    
						  </select>
						  </td>
						  </tr>
						  <tr>
							  <td><label>Roll</label></td>
							  <td><input type="number" name="hsc_roll" value="<?php echo $row['hsc_roll'];?>" ></td>	  
						  </tr>	
						  	<tr>
						   <td><label>Subject</label></td>
						   <td>
						   	<select class="form-control" name="hsc_subject" value="<?php echo $row['hsc_subject'];?>" >		    
								    <option value="science">Science</option>
								    <option value="arts">Arts</option>
								    <option value="commerce">Commerce</option>
								    <option value="Vocational">Vocational</option>
								    <option value="others">Others</option>	    
						    </select>
						</td>  
						  </tr>				   
						   <tr>
						   <td><label>Passing Year</label></td>
						   <td><input type="text" name="hsc_passing_year" value="<?php echo $row['hsc_passing_year'];?>" ></td>  
						  </tr>
						  <tr>
						   <td><label>CGPA</label></td>
						   <td><input type="text" name="hsc_cgpa" value="<?php echo $row['hsc_cgpa'];?>"></td>	  
						  </tr>
						   <tr>
						   <td><label>Board</label></td>
						   <td><input type="text" name="hsc_board" value="<?php echo $row['hsc_board'];?>" ></td>		  
						  </tr>
						  <tr>
						   <td><label>Institute</label></td>
						   <td><input type="text" name="hsc_institute" value="<?php echo $row['hsc_institute'];?>" ></td>		  
						  </tr>
						   
						 </table>
						  
						</div>
						<?php } ?>
						</div>	
						 
						</div><!--//rowdiv-->
					  
					  <div class="row" style="margin: 20px;">
					  	<div class="col-md-4"></div>
						<div class="col-md-4">
							<button style="width: 100%;text-align: center;padding: 4px;  background: #204562;color: #fff;" type="submit" class="btn btn-default btn-lg" name="submit">Update and Next</button>
						</div>
						<div class="col-md-4"></div>
					    
					  </div>
					  
					</form>
					
				
 		
 			</div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
   <?php include "inc/footer.php";?>


