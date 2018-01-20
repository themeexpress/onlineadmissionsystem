<?php 
include '../lib/Session.php';
Session::init();

include '../lib/format.php'; 
include '../lib/Database.php';

 $db = new Database();
 $fm = new Format();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script type="text/javascript script" src="js/bootstrap.min.js"></script>	

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<img class="img-responsive" src="img/banner.png">
		</div>
	

<div class="container formdiv">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php 
									if ($_SERVER['REQUEST_METHOD']=='POST') {
										$email = $fm->validation($_POST['email']);
										$password = $fm->validation(md5($_POST['password']));
										$email = mysqli_real_escape_string($db->link,$email);
										$password = mysqli_real_escape_string($db->link,$password);

										$query = "select * from user where email='$email' and password='$password' AND role='student' ";
										$result= $db->select($query);
										if ($result!=false) {
											$value= mysqli_fetch_array($result);
											$row =mysqli_num_rows($result);
											if ($row>0) {
												Session::set('login',true);
												Session::set('email',$value['email']);
												Session::set('userId',$value['user_id']);
												Session::set('username',$value['username']);
												header('location: userprofile.php');

											}else{
												echo "<span style='color:red;font-size:18px;'>NO result Found!!</span>";

											}
										}else{
											echo "<span style='color:red;font-size:18px;text-align:center;'>Email or password not Matched!!</span>";
										}

									}

									//Admin login
									
									elseif($_SERVER['REQUEST_METHOD']=='POST') {
										$email = $fm->validation($_POST['email']);
										$password = $fm->validation(md5($_POST['password']));
										$email = mysqli_real_escape_string($db->link,$email);
										$password = mysqli_real_escape_string($db->link,$password);

										$query = "select * from user where email='$email' and password='$password' AND role='admin'";
										$result= $db->select($query);
										if ($result!=false) {
											$value= mysqli_fetch_array($result);
											$row =mysqli_num_rows($result);
											if ($row>0) {
												Session::set('login',true);
												Session::set('email',$value['email']);
												Session::set('userId',$value['user_id']);
												Session::set('username',$value['username']);
												header('location: admin.php');

											}else{
												echo "<span style='color:red;font-size:18px;'>NO result Found!!</span>";

											}
										}else{
											echo "<span style='color:red;font-size:18px;text-align:center;'>Email or password not Matched!!</span>";
										}

									}
								?>
								<form id="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								<form id="register-form" action="register.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<input type="hidden" name="role" value="student">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register" id="register" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
	<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/myjs.js"></script>
</body>
</html>>
