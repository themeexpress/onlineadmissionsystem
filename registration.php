
<?php 
 require 'connection.php';
if(isset($_POST['submit'])){

$email=$_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$select=$mysqli->query("select * from user where email='$email'");
  $row=$select->fetch_assoc();
  $user_email=$row['email'];
  
  if ($user_email==$_POST['email'])
  {
    echo "Sorry!! Email Address Already Taken";
  }
  else{
    $stmt=$mysqli->query("insert into user(email, password, role) 
    values('$email','$password','$role')");
    if(!$stmt){
      echo "Data is not inserted query problem";
    }
    else{
      header('location:index.php');  
    }
    
}
}

?>


<?php include('header.php');?>
  </div>
  <div class="container regmain">   
      <!-- Registration form -->
    <div class="row">
      <div class="col-md-1"></div>
      
      <div class="col-md-10 eg">
      <div class="formwrapper"><!--formwrapper-->
        <h1 class="regheading">Student Registration Form</h1>

      <form class="form-horizontal" id="registraion_form" role="form" action="registration.php" method="POST" />          
              
              <!-- <div class="form-group">
                <label class="control-label col-sm-4" for="username">User Name:</label>
                <div class="col-sm-8">
                  <input type="text" name="username" id="form_username" class="from_text" required> <span class="error_from" id="username_error_message"></span>
                </div>
              </div> -->
              <div class="form-group">
                <label class="control-label col-sm-4" for="email">Email:</label>
                <div class="col-sm-8">
                  <input type="email" name="email" id="form_email" class="from_text" required> <span class="error_from" id="email_error_message"></span> <span>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm-8">
                  <input type="password" name="password" id="form_password" class="from_text" required> <span class="error_from" id="password_error_message"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4" for="password">Confirm Password:</label>
                <div class="col-sm-8">
                  <input type="password" name="confirm_password" id="form_confirm_password" class="from_text" required></td><td><span class="error_from" id="confirm_password_error_message"></span>
                </div>
              </div>

              <input type="hidden" name="role" value="student">
              
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                  <button type="submit" class="btn btn-large btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>
         </div><!--/formwrapper-->
       </div>
       <div class="col-md-1"></div>
    </div>
    
    <!-- /.Registration form -->       
    
  </div>

  <?php include('middlecontent.php');?>
  
 <?php include('footer.php');?>