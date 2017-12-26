<?php 
session_start();
require_once "../lib/Database.php"; 
$db = new Database();

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$role=$_POST['role'];
	$_SESSION['username']=$username;
	$squery=("select * from user where email='$email'");
	$checkemail= $db->select($squery);
	if ($checkemail!=0) {
		echo "Email is Already Taken";
	}
	else
	{
		$iquery="INSERT INTO user(username,email,password,role) values('$username','$email ','$password','$role')";
		$insertquery=$db->insert($iquery);
		header('Location:userprofile.php');
		
	}


}

?>
