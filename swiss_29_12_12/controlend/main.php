<?php 
session_start();
require_once("includes/control_functions.php");

if(!isset($_COOKIE['userName']) && $_COOKIE['userName'] == '') {
	redirect(RELATIVE_PATH."/index.php");
}
else {
	require_once("header.php");
?>
 <tr>
    <td align="center" valign="top"><h2>WELCOME TO ADMINISTRATION PANEL</h2>
	</td>
</tr>
 <tr>
 <td align="left" valign="top"><div align="justify">


 </div></td></tr>
  <tr>
    <td bgcolor="#333333">&nbsp;</td>
  </tr>
</body>
</html>
<?php } ?>