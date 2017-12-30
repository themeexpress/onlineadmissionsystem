<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Application </h2>                
                              
		 		<h1 class="text-center">Application Form</h1>

		 		<hr/>
		 		<div class="error">
		 			<?php 
		 			if ($_SERVER['REQUEST_METHOD']=='POST') {
		 				//THESE DATA WILL INSERT IN APPLICATION TABLE
							$name 		= $fm->validation($_POST['name']);
							$password 	= $fm->validation($_POST['father_name']));
							$email 		= $fm->validation($_POST['mother_name']);
							$password 	= $fm->validation(md5($_POST['data_of_birth']));
							$email 		= $fm->validation($_POST['gender']);
							$password 	= $fm->validation(md5($_POST['nationality']));
							$email 		= $fm->validation($_POST['maritalstatus']);
							$password 	= $fm->validation(md5($_POST['first_choice']));
							$email 		= $fm->validation($_POST['second_choice']);
							$password 	= $fm->validation(md5($_POST['third_choice']));

							//This data will go to permanent address table
							$email 		= $fm->validation($_POST['careof']);
							$password 	= $fm->validation(md5($_POST['houseorvillage']));
							$email 		= $fm->validation($_POST['post_office']);
							$email 		= $fm->validation($_POST['police_station']);
							$password 	= $fm->validation(md5($_POST['zip_code']));
							$email 		= $fm->validation($_POST['district']);

							//THIS DATA WILL GO MAILING ADDRESS
							$email 		= $fm->validation($_POST['careof']);
							$password 	= $fm->validation(md5($_POST['houseorvillage']));
							$email 		= $fm->validation($_POST['post_office']);
							$email 		= $fm->validation($_POST['police_station']);						
							$password 	= $fm->validation(md5($_POST['zip_code']));
							$email 		= $fm->validation($_POST['district']);

							//THIS DATA WILL SSC TABLE//
							$email 		= $fm->validation($_POST['degree_name']);
							$password 	= $fm->validation(md5($_POST['ssc_roll']));
							$email 		= $fm->validation($_POST['ssc_cgpa']);
							$email 		= $fm->validation($_POST['subject']);
							$email 		= $fm->validation($_POST['passing_year']);
							$password 	= $fm->validation(md5($_POST['board']));
							$email 		= $fm->validation($_POST['institute']);


							//THESE DATA WILL GO HSC TABLE							
							
							$email 		= $fm->validation($_POST['degree_name']);
							$password 	= $fm->validation(md5($_POST['roll']));
							$email 		= $fm->validation($_POST['subject']);
							$email 		= $fm->validation($_POST['passing_year']);							
							$password 	= $fm->validation(md5($_POST['cgpa']));							
							$password 	= $fm->validation(md5($_POST['board']));
							$email 		= $fm->validation($_POST['institute']);


										$query = "select * from user where email='$email' and password='$password' ";
						}
					?>
					
		 		</div>
		 		 <form action="applictionrpocess.php" method="POST">

					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name">
					  </div>
					  <div class="form-group">
					    <label for="father_name">Father's Name</label>
					    <input type="text" class="form-control" id="father_name" name="father_name">
					  </div>
					  <div class="form-group">
					    <label for="mother_name">Mother's Name</label>
					    <input type="text" class="form-control" id="mother_name" name="mother_name">
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="data_of_birth">Date of Birth</label>
						    <input type="date" class="form-control" id="data_of_birth" name="data_of_birth">
					  		</div>
					  	</div>
					  	<div class="col-md-6" style="padding-top: 30px;">
					  		<div class="form-group">
					  			<label for="gender">Gender</label>
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
								<label>Nationality </label>
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
									<label for="maritalstatus">Marital Status</label>
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
						<legend align="center"> CHOICE YOUR SUBJECT</legend>
					  <div class="col-md-4">
					  	<div class="form-group">
						  <label for="sel1">First Choice</label>
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
						  <label for="sel1">Second Choice</label>
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
						  <label for="sel1">Third Choice</label>
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
									<th>Permanent Address</th>
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
							<div class="col-md-6">
								<table>
									<th>Present or Mailing Address</th>
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
					   	<h1>SSC/Equivalant</h1>
						<div class="form-group">
						<table>
						<tr>
						<td><label for="name">Name</label></td>
						 <td> 
						 	<select class="form-control" id="ssc" name="degree_name">
						    <option value="SSC">SSC</option>
						    <option value="Dhakhil">Dhakhil</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>		    
						  </select>
						  </td></tr>				
						  
						  <tr><td><label>Roll</label></td><td><input type="number" name="ssc_roll"></td></tr>
						  <tr><td><label>CGPA</label></td><td><input type="text" name="ssc_cgpa"></td></tr>
						  <tr><td><label>Subject</label>
						  </td>
						  <select class="form-control" id="subject" name="subject">		    
								    <option value="science">Science</option>
								    <option value="arts">Arts</option>
								    <option value="commerce">Commerce</option>
								    <option value="Vocational">Vocational</option>
								    <option value="others">Others</option>	    
						    </select>
						  <td>
						  </tr>
						  <tr><td><label>Passing Year</label></td><td><input type="number" name="passing_year"></td></tr>
						  <tr><td><label>Board</label></td><td><input type="text" name="board"></td></tr>
						  <tr><td><label>Name of The Institute</label></td><td><input type="text" name="institute"></td></tr>
						</table>
						</div>
						</div>	
						 
						<div class="col-md-6">
							<h1>HSC/Equivalant</h1>
						 <div class="form-group">
						 <table>
						 	<tr>
						 	<td><label for="sel1">Name</label></td><td>
						  <select class="form-control" id="degree_name">				    
						     <option value="hsc">HSC</option>
						    <option value="alim">Alim</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>	    
						  </select>
						  </td>
						  </tr>
						  <tr>
						  <td><label>Roll</label></td><td><input type="number" name="roll"></td>	  
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
						   <td><label>Passing Year</label></td><td><input type="text" name="passing_year"></td>  
						  </tr>
						  <tr>
						   <td><label>CGPA</label></td><td><input type="text" name="cgpa"></td>	  
						  </tr>
						   <tr>
						   <td><label>Board</label></td><td><input type="text" name="board"></td>		  
						  </tr>
						  <tr>
						   <td><label>Institute</label></td><td><input type="text" name="institute"></td>		  
						  </tr>
						   <tr>
						   <td style="margin-right: 40px;"><label>Name of The Institute</label></td><td> <input type="text" name="hscshool"></td>
						  
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


