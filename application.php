<?php include('loggedinheader.php');?>

 <div class="container">
      <img class="img-responsive" src="img/reg.jpg">
    
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-4">
	 		<?php include('profilenav.php');?>				
 		</div>
 		<div class="col-md-8">
 		<h1 class="text-center">Application Form</h1>
 		<hr/>
 		 <form>
			  <div class="form-group">
			    <label for="email">Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="email">Father's Name</label>
			    <input type="text" class="form-control" id="fname" name="fname">
			  </div>
			  <div class="form-group">
			    <label for="email">Mother's Name</label>
			    <input type="text" class="form-control" id="mname" name="mname">
			  </div>
			  <div class="form-group">
			    <label for="dateofbirth">Date of Birth</label>
			    <input type="text" class="form-control" id="dateofbirth" name="dateofbirth">
			  </div>
			   <div class="form-group">
			   <label for="email">Gender</label>
			    <label class="checkbox-inline">
				 <input type="checkbox" value="">Male
				</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="">Female
				</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="">Others
				</label>
				<label>Nationality </label>
				<label class="checkbox-inline">
				 <input type="checkbox" value="">Bangladeshi
				</label>
				<label class="checkbox-inline">
				 <input type="checkbox" value="">Others
				</label>				
			  </div>
			    <div class="form-group">
			   <label for="email">Marital Status</label>
			    <label class="checkbox-inline">
				 <input type="checkbox" value="">Single
				</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="">Married
				</label>								
			  </div>
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
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <div class="checkbox">
			    <label><input type="checkbox"> Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
 		</div>
 	</div>
 </div>
  

  
<?php include('footer.php');?>