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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/2.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-outline-primary"" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->       
    
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
             <li>Computer Science & Engineering</li>
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
                        <input type="text" class="form-control" name="password" placeholder="Username" aria-describedby="basic-addon1"><br/>
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