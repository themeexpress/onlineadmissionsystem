<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Application </h2> 

                              
		 		<h1 class="text-center">Application Form</h1>
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
							$data_of_birth 	= $fm->validation($_POST['data_of_birth']);
							$gender 		= $fm->validation($_POST['gender']);
							$nationality 	= $fm->validation($_POST['nationality']);
							$maritalstatus 	= $fm->validation($_POST['maritalstatus']);
							$first_choice 	= $fm->validation($_POST['first_choice']);
							$second_choice 	= $fm->validation($_POST['second_choice']);
							$third_choice 	= $fm->validation($_POST['third_choice']);

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
							$degree_name 		= $fm->validation($_POST['degree_name']);
							$ssc_roll 			= $fm->validation($_POST['ssc_roll']);
							$ssc_cgpa 			= $fm->validation($_POST['ssc_cgpa']);
							$subject 			= $fm->validation($_POST['subject']);
							$passing_year 		= $fm->validation($_POST['passing_year']);
							$board 				= $fm->validation($_POST['board']);
							$institute 			= $fm->validation($_POST['institute']);

							//THESE DATA WILL GO HSC TABLE						
							
							$degree_name 		= $fm->validation($_POST['degree_name']);
							$roll 				= $fm->validation($_POST['roll']);
							$subject 			= $fm->validation($_POST['subject']);
							$passing_year 		= $fm->validation($_POST['passing_year']);	
							$cgpa 				= $fm->validation($_POST['cgpa']);				
							$board 				= $fm->validation($_POST['board']);
							$institute 			= $fm->validation($_POST['institute']);

							if ($name 		=="" || $father_name 	=="" || 
							$mother_name 	=="" || $data_of_birth 	=="" ||
							$gender 		=="" || $nationality 	=="" || 
							$maritalstatus 	=="" ||	$first_choice 	=="" || 
							$second_choice 	=="" ||	$third_choice 	=="" || 
							$careof 		=="" || $houseorvillage =="" ||
							$post_office 	=="" || $police_station =="" ||
							$zip_code 		=="" ||	$district 		=="" || 
							$careof 		=="" || $houseorvillage =="" ||
							$post_office 	=="" ||	$police_station =="" ||			
							$zip_code 		=="" ||	$district 		=="" ||
							$degree_name 	=="" ||	$ssc_roll 		=="" ||
							$ssc_cgpa 		=="" ||	$subject 		=="" ||
							$passing_year 	=="" ||	$board 			=="" ||
							$institute 		=="" ||	$degree_name	=="" ||
							$roll		 	=="" ||	$subject 	 	=="" ||
							$passing_year	=="" ||	$cgpa 			=="" ||
							$board 			=="" ||	$institute 		=="") 
							{
								echo "<span style='font-size:18px; color:red;'>Required Field Must not be Empty !!<span>";
							}else{

								//Query for Applicaiton Table

							$appquery = "INSERT INTO application1 (
								user_id,name,father_name,mother_name,date_of_birth,gender,nationality,maritalstatus,first_choice,second_choice,third_choice)
								VALUES('$userId','$name','$father_name','$mother_name','$data_of_birth','$gender','$nationality','$maritalstatus',
								'$first_choice','$second_choice','$third_choice')";

								// Permanent address query
							 $permanent_query = "INSERT INTO permanent_address (
								user_id,careof,houseorvillage,post_office,police_station,zip_code,district)
								VALUES('$userId','$careof','$houseorvillage','$post_office','$police_station','$zip_code','$district')";

								//Query for Mailing Address
								//present_address

								$present_query ="INSERT INTO present_address (
								user_id,careof,houseorvillage,post_office,police_station,zip_code,district)
								VALUES('$userId','$careof','$houseorvillage','$post_office','$police_station','$zip_code','$district')";

								//Query for SCC Table
								//ssc
								$ssc_query ="INSERT INTO 
								ssc (user_id, degree_name,ssc_roll,ssc_cgpa,subject,passing_year,board,institute)
								VALUES('$userId','$degree_name','$ssc_roll','$ssc_cgpa','$subject','$passing_year','$board','$institute')";

								//Query for HSC table
								$hsc_query ="INSERT INTO 
								hsc (user_id,degree_name,roll,subject,passing_year,cgpa,board,institute)
								VALUES('$userId','$degree_name','$roll','$subject','$passing_year','$cgpa','$board','$institute')";

								$appresult=$db->insert($appquery);
								$permanetresult=$db->insert($permanent_query);
								$presentresult=$db->insert($present_query);
								$sscresult=$db->insert($ssc_query);
								$hscresult=$db->insert($hsc_query);
								echo "All data inserted successfully";




							}



										
						}
					?>

		 		</div>
		 		 <form action="application.php" method="POST">

					  <div class="form-group">
					    <label for="name">Name <span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" id="name" name="name">
					  </div>
					  <div class="form-group">
					    <label for="father_name">Father's Name<span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" id="father_name" name="father_name">
					  </div>
					  <div class="form-group">
					    <label for="mother_name">Mother's Name <span style="color:red;font-size: 18px;">*</span></label>
					    <input type="text" class="form-control" id="mother_name" name="mother_name">
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="data_of_birth">Date of Birth<span style="color:red;font-size: 18px;">*</span></label>
						    <input type="date" class="form-control" id="data_of_birth" name="data_of_birth">
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
						  <label for="sel1">First Choice <span style="color:red;font-size: 18px;">*</span></label>
						  <select class="form-control" id="first_choice" name="first_choice">
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
						  <select class="form-control" id="second_choice" name="second_choice">
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
						  <select class="form-control" id="third_choice" name="third_choice">
						   <option value="CSE">CSE</option>
						    <option value="EEE">EEE</option>
						    <option value="Civil">Civil</option>
						    <option value="Mechanical">Mechanical</option>
						    <option value="Textile">Textile</option>
						  </select>
						</div>
						</div>	
						 
						</div><!--//rowdiv-->
						
						<div class="row" style="border: 1px solid #a1a1a1;padding: 10px;margin:0px;margin-bottom: 15px;">
						<legend align="center"> DETAILS ADDRESS</legend>
				
							<div class="col-md-6">
								<table>
									<th>Permanent Address <span style="color:red;font-size: 18px;">*</span></th>
									<tr>
										<td>Care Of</td><td><input type="text" name="careof"></td>
									</tr>
									<tr>
										<td>House Road or village</td><td><input type="text" name="houseorvillage"></td>
									</tr>
									<tr>
										<td>Post</td><td><input type="text" name="post_office"></td>
									</tr>
									<tr>
										<td>P.S or Upojila</td><td><input type="text" name="police_station"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zip_code"></td>
									</tr>
									<tr>
										<td>District</td><td><input type="text" name="district"></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table>
									<th>Present or Mailing Address <span style="color:red;font-size: 18px;">*</span></th>
									<tr>
										<td>Care Of</td><td><input type="text" name="careof"></td>
									</tr><tr>
										<td>House Road or village</td><td><input type="text" name="houseorvillage"></td>
									</tr><tr>
										<td>Post</td><td><input type="text" name="post_office"></td>
									</tr><tr>
										<td>P.S or Upojila</td><td><input type="text" name="police_station"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zip_code"></td>
									</tr>
									<tr>
										<td>District</td><td><input type="text" name="district"></td>
									</tr>
								</table>
							</div>
						</fieldset>
						</div>

						<div class="row" style="border: 1px solid #a1a1a1;padding: 10px;margin:0px;margin-bottom: 15px;">
						<legend align="center"> EDUCATONAL DETAILS</legend>
						
					   <div class="col-md-6">
					   	<h4>SSC/Equivalant <span style="color:red;font-size: 18px;">*</span></h4>
						<div class="form-group">
						<table>
						<tr>
						<td><label for="name">Name</label></td>
						 <td> 
						 <select class="form-control" id="degree_name" name="degree_name">
						    <option value="SSC">SSC</option>
						    <option value="Dhakhil">Dhakhil</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>		    
						  </select>
						  </td>
						</tr>				
						  
						  <tr>
						  	<td><label>Roll</label></td>
						  	<td><input type="number" name="ssc_roll"></td>
						  </tr>
						  <tr>
						  	<td><label>CGPA</label></td>
						  	<td><input type="text" name="ssc_cgpa"></td>
						  </tr>
						  <tr>
						  	<td><label>Subject</label></td>
						  <td>
						  <select class="form-control" id="subject" name="subject">		    
								    <option value="science">Science</option>
								    <option value="arts">Arts</option>
								    <option value="commerce">Commerce</option>
								    <option value="Vocational">Vocational</option>
								    <option value="others">Others</option>	    
						    </select>
						  </td>
						  </tr>
						  <tr><td><label>Passing Year</label></td>
						  	<td><input type="number" name="passing_year"></td>
						  </tr>
						  <tr>
						  	<td><label>Board</label></td>
						  	<td><input type="text" name="board"></td>
						  </tr>
						  <tr>
						  	<td><label>Name of The Institute</label></td>
						  	<td><input type="text" name="institute"></td>
						  </tr>
						</table>
						</div>
						</div>	
						 
						<div class="col-md-6">
							<h4>HSC/Equivalant <span style="color:red;font-size: 18px;">*</span></h4>
						 <div class="form-group">
						 <table>
						 	<tr>
						 <td><label for="name">Name</label></td><td>
						  <select class="form-control" id="degree_name" name="degree_name">				    
						     <option value="hsc">HSC</option>
						    <option value="alim">Alim</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>	    
						  </select>
						  </td>
						  </tr>
						  <tr>
							  <td><label>Roll</label></td>
							  <td><input type="number" name="roll"></td>	  
						  </tr>	
						  	<tr>
						   <td><label>Subject</label></td>
						   <td>
						   	<select class="form-control" id="subject" name="subject">		    
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
						   <td><input type="text" name="passing_year"></td>  
						  </tr>
						  <tr>
						   <td><label>CGPA</label></td>
						   <td><input type="text" name="cgpa"></td>	  
						  </tr>
						   <tr>
						   <td><label>Board</label></td>
						   <td><input type="text" name="board"></td>		  
						  </tr>
						  <tr>
						   <td><label>Institute</label></td>
						   <td><input type="text" name="institute"></td>		  
						  </tr>
						   
						 </table>
						  
						</div>
						</div>	
						 
						</div><!--//rowdiv-->
					  
					  <div class="row" style="margin: 20px;">
					  	<div class="col-md-4"></div>
						<div class="col-md-4">
							<button style="width: 100%;text-align: center;padding: 4px;  background: #204562;color: #fff;" type="submit" class="btn btn-default btn-lg" name="submit">Submit</button>
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


