
  <?php
  session_start();
  require 'connection.php';
  if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $_SESSION['email']=$email;

  $select=$mysqli->query("select * from user where email='$email' AND password='$password'");
  $row=$select->fetch_assoc();
    

  if ($row){

       header('location:profile.php');
    }

  else 
    echo "Username or password in incorrect";

}

?>
<form class="form-horizontal" role="form" action="index.php" method="POST">
           <fieldset>
              <legend>Login</legend>
          
                <div class="form-group">
                  <div class="col-sm-8">

                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1"><br/>
                    </div>
                    
                  </div>
                  </div>
                  <div class="input-group">
                    <button type="submit" class="btn btn-default" name="login">Login</button> <span> New User? <a class="btn btn-primary" href="registration.php">Register</a></span>
                    
                  </div>
                  
                </div> 
               </fieldset>
              </form>