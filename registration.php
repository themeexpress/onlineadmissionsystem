
<?php 
 require 'connection.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$select=$mysqli->query("select * from registration");
  $row=$select->fetch_assoc();
  $user=$row['username'];
  $email=$row['email'];
  echo $user . $email;

  if ($user==$_POST['username'] || ($email==$_POST['email']))
  {
    echo "User is axist try another username or email";
  }
  else{
    $stmt=$mysqli->query("insert into registration(name, email, username, password) 
    values('$name','$email','$username','$password')");
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
      <!-- Registration form
    ================================================== -->
    <div class="row">
      <div class="col-md-3"></div>
      
      <div class="col-md-6 eg">
      <div class="formwrapper"><!--formwrapper-->
        <h1 class="regheading">Student Registration Form</h1>       

        <form class="form-horizontal" role="form" action="registration.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>            
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">User Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-large btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>
         </div><!--/formwrapper-->
       </div>
       <div class="col-md-3"></div>
    </div>
    
    <!-- /.Registration form -->       
    
  </div>

  <?php include('middlecontent.php');?>
  
 <?php include('footer.php');?>