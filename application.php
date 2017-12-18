<?php include('loggedinheader.php');?>

 <div class="container">
 	<div class="row">
 		<div class="col-md-3" style="margin-top: 80px;">
	 		<ul class="nav nav-pills nav-stacked">			
				<li role="presentation" style="background: #4c87b9;"><a href="profile.php">Profile</a></li>
				<li class="active"  role="presentation"> <a href="application.php">Application Form</a></li>
				<li style="background: #4c87b9;" role="presentation"><a href="status.php">Status</a></li> 
				<li style="background: #4c87b9;" role="presentation"><a href="paymenthistory.php">Payment History</a></li>		 				
			</ul> 	
 		</div>
 		<div class="col-md-9">
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
			  			<label for="email">Gender</label>
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
						 <input type="checkbox" value="Bangladeshi" name="country">Bangladeshi
						</label>
						<label class="checkbox-inline">
						 <input type="checkbox" value="others" name="country">Others
						</label>								
					    </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="maritalstatus">Marital Status</label>
						    <label class="checkbox-inline">
							 <input type="checkbox" value="single" name="maritalstatus">Single
							</label>
							<label class="checkbox-inline">
							<input type="checkbox" value="married" name="maritalstatus">Married
							</label>			   								
			  			</div>
					</div>
				</div>			  			   
			  <div class="row" style="border: 2px solid #a1a1a1;padding: 10px;margin-bottom: 10px;">
				<legend align="center"> CHOICE YOUR SUBJECT</legend>
			  <div class="col-md-4">
			  	<div class="form-group">
				  <label for="sel1">First Choice</label>
				  <select class="form-control" id="fistchoice">
				    <option>CSE</option>
				    <option>EEE</option>
				    <option>Civil</option>
				    <option>Mechanical</option>
				    <option>Textile</option>
				  </select>
				</div>
			  </div>		  

				<div class="col-md-4">
				<div class="form-group">
				  <label for="sel1">Second Choice</label>
				  <select class="form-control" id="fistchoice">
				    <option>CSE</option>
				    <option>EEE</option>
				    <option>Civil</option>
				    <option>Mechanical</option>
				    <option>Textile</option>
				  </select>
				</div>
				</div>	
				 
				<div class="col-md-4">
				 <div class="form-group">
				  <label for="sel1">Third Choice</label>
				  <select class="form-control" id="fistchoice">
				    <option>CSE</option>
				    <option>EEE</option>
				    <option>Civil</option>
				    <option>Mechanical</option>
				    <option>Textile</option>
				  </select>
				</div>
				</div>	
				 
				</div><!--//rowdiv-->
				
				<div class="row" style="border: 2px solid #a1a1a1;padding: 10px;">
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
				<div class="row" style="border: 2px solid #a1a1a1;padding: 10px;margin-top: 10px;">
				<legend align="center"> EDUCATONAL DETAILS</legend>
				
			   <div class="col-md-6">
				<div class="form-group">
				<table>
				<tr>
				<td><label for="sel1">Name</label></td>
				 <td> <select class="form-control" id="fistchoice">
				    <option>SSC</option>
				    <option>Dhakhil</option>
				    <option>Vocational</option>
				    <option>Others</option>				    
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
				    <option>SSC</option>
				    <option>Dhakhil</option>
				    <option>Vocational</option>
				    <option>Diploma</option>
				    <option>Others</option>				    
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
					<button style="width: 50%;" type="submit" class="btn btn-default btn-lg" name="submit">Submit</button>
				</div>
				<div class="col-md-4"></div>
			    
			  </div>
			  
			</form>
 		</div>
 	</div>
 </div>
  

  
<?php include('footer.php');?>