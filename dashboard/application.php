<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Application </h2>
                              
		 		<h1 class="text-center">Application Form</h1>
		 		<hr/>
		 		 <form action="applictionrpocess.php" method="POST">

					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name">
					  </div>
					  <div class="form-group">
					    <label for="fname">Father's Name</label>
					    <input type="text" class="form-control" id="fname" name="fname">
					  </div>
					  <div class="form-group">
					    <label for="mname">Mother's Name</label>
					    <input type="text" class="form-control" id="mname" name="mname">
					  </div>
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="dateofbirth">Date of Birth</label>
						    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
					  		</div>
					  	</div>
					  	<div class="col-md-6" style="padding-top: 30px;">
					  		<div class="form-group">
					  			<label for="Gender">Gender</label>
							    <label class="radio-inline">
								 <input type="radio" value="male" name="sex">Male
								</label>
								<label class="checkbox-inline">
								<input type="radio" value="female" name="sex">Female
								</label>
								<label class="radio-inline">
								<input type="radio" value="others" name="sex">Others
								</label>
					  		</div>
					  	</div>
					  </div>
					  
						<div class="row">
						
							<div class="col-md-6">
								 <div class="form-group">			   
								<label>Nationality </label>
								<label class="radio-inline">
								 <input type="radio" value="Bangladeshi" name="country">Bangladeshi
								</label>
								<label class="checkbox-inline">
								 <input type="radio" value="others" name="country">Others
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
						  <select class="form-control" id="fistchoice">
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
						  <select class="form-control" id="fistchoice">
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
						  <select class="form-control" id="fistchoice">
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
										<td>House Road or village</td><td><input type="text" name="hosue"></td>
									</tr><tr>
										<td>Post</td><td><input type="text" name="post"></td>
									</tr><tr>
										<td>P.S or Upojila</td><td><input type="text" name="ps"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zipcode"></td>
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
										<td>House Road or village</td><td><input type="text" name="hosue"></td>
									</tr><tr>
										<td>Post</td><td><input type="text" name="post"></td>
									</tr><tr>
										<td>P.S or Upojila</td><td><input type="text" name="ps"></td>
									</tr>
									<tr>
										<td>Zip Code</td><td><input type="text" name="zipcode"></td>
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
						<div class="form-group">
						<table>
						<tr>
						<td><label for="name">Name</label></td>
						 <td> 
						 	<select class="form-control" id="ssc">
						    <option value="ssc">SSC</option>
						    <option value="Dhakhil">Dhakhil</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>				    
						  </select>
						  </td></tr>				
						  
						  <tr><td><label>Roll</label></td><td><input type="text" name="sscroll"></td></tr>
						  <tr><td><label>CGPA</label></td><td><input type="text" name="ssccgpa"></td></tr>
						  <tr><td><label>Passing Year</label></td><td><input type="text" name="sscpyear"></td></tr>
						  <tr><td><label>Board</label></td><td><input type="text" name="sscboard"></td></tr>
						  <tr><td><label>Name of The Institute</label></td><td><input type="text" name="sscshool"></td></tr>
						</table>
						</div>
						</div>	
						 
						<div class="col-md-6">
						 <div class="form-group">
						 <table>
						 	<tr>
						 	<td><label for="sel1">Name</label></td><td>
						  <select class="form-control" id="hsc">				    
						     <option value="hsc">SSC</option>
						    <option value="alim">Alim</option>
						    <option value="Vocational">Vocational</option>
						    <option value="others">Others</option>				    
						  </select>
						  </td>
						  </tr>
						  <tr>
						  <td><label>Roll</label></td><td><input type="text" name="hscroll"></td>	  
						  </tr>
						   <tr>
						   <td><label>CGPA</label></td><td><input type="text" name="hsccgpa"></td>	  
						  </tr>
						   <tr>
						   <td><label>Passing Year</label></td><td><input type="text" name="hscpyear"></td>  
						  </tr>
						   <tr>
						   <td><label>Board</label></td><td><input type="text" name="hscboard"></td>		  
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


