<?php
session_start();
require_once('includes/control_functions.php');

if($_POST['sub_chcek'] == 'Login') {
	extract($_POST);
	$querySelect		=	"select * from ".TABLE_ADMIN_USERS." where userName=BINARY('$user_name') and passWord=BINARY('$pass_word')";
	$queryResult		=	mysql_query($querySelect) or die (mysql_error());
	$RowCount			=	mysql_num_rows($queryResult);

	if($RowCount > 0 ) {
		setcookie('userName',$userName);
		setcookie('passWord',$passWord);
		$userRow				=	mysql_fetch_array($queryResult);
		$privilege				=	$userRow['privilege'];
		setcookie('privilege',$privilege);
		redirect(SITE_URL."/main.php");
	}
	else {
		$err	=	"Username or Password is invalid";
	}
}


?>
<form name="login_admin" method="post" >
<span><?php if($err != '') { echo $err; } ?></span>
<input type="text" value="" name="user_name" id="user_name"/>
<input type="password" value="" name="pass_word" id="pass_word"/>
<input type="submit" value="Login" name="sub_check" id="sub_check"/>
</form>