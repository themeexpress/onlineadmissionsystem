  <?php
  session_start();
  require 'connection.php';
  if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $_SESSION['username']=$username;

  $select=$mysqli->query("select * from registration where username='$username' AND password='$password'");
  $row=$select->fetch_assoc();
    

  if ($row){

       header('location:profile.php');
    }

  else 
    echo"Username or password in incorrect";

}

?>

<?php include('header.php');?>
  </div>
  <div class="container">   
      <!-- Carousel
    ================================================== -->
    <?php include('homeslider.php');?>    
    
  </div>

  <div class="content_area"><!--content container area-->
    <div class="container tbpadding">
      <div class="row">
        <div class="col-md-4">  
           <div class="row">
            <div class="col-md-3"><i class="fa fa-telegram" aria-hidden="true"></i></div>
            <div class="col-md-9"><h2>How to Apply</h2>
           <ul>
             <li>Registration</li>
             <li>Login</li>
             <li>Apply Online</li>
             <li>Confirm Payment</li>             
           </ul>

            <a href="registration.php"><button class="btn btn-default">Register</button></a> 
            </div>

          </div>

        </div>
        <div class="col-md-4"> 
          <div class="row">
            <div class="col-md-3"><i class="fa fa-cube" aria-hidden="true"></i></i></div>
            <div class="col-md-9"><h2>Our Departments</h2>
           <ul>
             <li><a href="cse.php">Computer Science and Engineering</a></li>
             <li>Electrical and Electronics Engineering</li>
             <li>Civil Engineering</li>
             <li>Textile Engineering</li>
           </ul>

            <a href="registration.php"><button class="btn btn-default">Register</button></a> 
            </div>


          </div>     
        </div>
        <div class="col-md-4">
          <form class="form-horizontal" role="form" action="index.php" method="POST">
           <fieldset>
              <legend>Login</legend>
          
                <div class="form-group">
                  <div class="col-sm-8">

                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Username" aria-describedby="basic-addon1"><br/>
                    </div>
                    
                  </div>
                  </div>
                  <div class="input-group">
                    <button type="submit" class="btn btn-default" name="login">Login</button> <span> New User? <a class="btn btn-primary" href="registration.php">Register</a></span>
                    
                  </div>
                  
                </div> 
               </fieldset>
              </form>
        </div>
      </div>
    </div>
  </div><!--content container area-->

  
 <?php include('footer.php');?>