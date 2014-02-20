<?php 
session_start();
require_once("includes/control_functions.php");

if(isset($_COOKIE['userName']) && $_COOKIE['userName'] == '') {
	redirect(RELATIVE_PATH."/index.php");
}
else {
	unset($_COOKIE['userName']);
	unset($_COOKIE['password']);
	unset($_COOKIE['privilege']);
	setcookie("userName", "", time()-3600);
	setcookie("password", "", time()-3600);
	redirect(RELATIVE_PATH."/index.php");
}
echo "Sdfdsfds";
?>