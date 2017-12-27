<?
	// include '../lib/Session.php';
	// //Session::init();
	// Session::destroy();
	session_start();
	session_destroy();
	echo "before";
	header('location: login.php');
	echo "before";

?>