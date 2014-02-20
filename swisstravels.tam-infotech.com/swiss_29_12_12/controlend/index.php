<?php
session_start();
require_once("includes/control_functions.php");

/*$querygetUser       =	"select * from ".TABLE_USER."";
$getUserResult		=	mysql_query($querygetUser) or die (mysql_error());

while($row = mysql_fetch_array($getUserResult)) {
    echo $row[userName] ."===>" . $row[passWord] ."<br>";
    
    
}*/


if($_POST) {
	extract($_POST);
	$querySelect		=	"select * from ".TABLE_ADMIN_USERS." where admin_user_name=BINARY('$userName') and admin_pass_word=BINARY('$passWord')";
	$queryResult		=	mysql_query($querySelect) or die (mysql_error());
	$RowCount			=	mysql_num_rows($queryResult);

	if($RowCount > 0 ) {
		setcookie('userName',$userName);
		setcookie('password',$passWord);
		$userRow				=	mysql_fetch_array($queryResult);
		redirect(RELATIVE_PATH."/main.php");
	}
	else {
		$err	=	"Username or Password is invalid";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo ADMIN_TITLE; ?></title>
<link href="<?php echo RELATIVE_PATH; ?>/css/loginstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br/>
<form id="form1" name="form1" method="post" action="">
<table style='background-color:#FF0000;' width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="left" valign="middle"><table width="100%" border="0">
      <tr>
        <td align="left" valign="middle"><img src="<?php echo RELATIVE_PATH; ?>/images/logo.jpg" width="241" height="74" /></td>
        <td>&nbsp;</td>
        <td align="right" valign="middle"><img src="<?php echo RELATIVE_PATH; ?>/images/logo.jpg" width="241" height="74" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="61%" align="left" valign="top"><!--<img src="<?php echo RELATIVE_PATH; ?>/images/logo.jpg" width="634" height="422" />--></td>
        <td width="39%" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="3%"></td>
          </tr>		
		  <tr>
            <td width="3%">&nbsp;</td>
            <td width="97%" align="left" valign="top" class="bgs"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
			 	  
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="29%" align="left" valign="top">User Name </td>
                <td width="68%" align="left" valign="top"><label>
                  <input type="text" name="userName" id="userName"/>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top">Password</td>
                <td align="left" valign="top"><input type="password" name="passWord" id="passWord" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">
                    <label>
                    <input type="submit" name="Submit" value="Submit" />
                    </label>                </td>
              </tr>
              <tr>
                <td height="19">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="19">&nbsp;</td>
                <td colspan="2" align="left" valign="top" style="padding-left:60px;"><?php if($err!='' && isset($err)) { ?>
                  <label style="background:#957580; "><?php echo $err; ?></label>
                  <?php } ?></td>
                </tr>
              <tr>
                <td height="19">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
