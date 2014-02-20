<?php
session_start();
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Swiss Travels - welcome to our  home page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="/css/ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

function callingpage(tour_id) {
	//alert(tour_id);

	window.open("goatour.php?tour_id="+tour_id,"_blank");
	//window.location = "goatour.php?tour_id="+tour_id;
}



ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<style type="text/css">
<!--
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; color: #333333; }
-->
</style>
</head>

<body>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td width="11" align="left" valign="top">&nbsp;</td>
        <td width="712" align="left" valign="top"><img src="images/logo.jpg" width="211" height="82" /></td>
        <td width="267" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="69%" height="19" align="left" valign="top">&nbsp;</td>
                <td width="14%" align="left" valign="top"><a href="#"><img src="images/dushfg.jpg" width="22" height="14" border="0" /></a></td>
                <td width="17%" align="left" valign="top"><a href="#"><img src="images/usfg.jpg" width="24" height="14" border="0" /></a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="29%" height="19" align="left" valign="top">&nbsp;</td>
                <td width="35%" align="left" valign="top" class="btxt"><a href="About.php" target="_self">About Us </a>&nbsp;| </td>
                <td width="36%" align="left" valign="top" class="btxt"><a href="Contact.php">Contact Us</a> </td>
              </tr>
            </table></td>
          </tr>

        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF" class="linr"><img src="images/rline.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" align="left" valign="top">&nbsp;</td>
        <td width="49%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
       
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td align="left" valign="middle" class="rtxtr"><a href="Flight_Price.php" class="rtxtr">Flight Prices </a></td>
                </tr>
              <tr>
                <td width="18%" align="center" valign="top"><img src="images/flaght.png" width="57" height="57" /></td>
                <td align="center" valign="middle"><a href="#"></a><a href="#"></a><a href="#"></a></td>
                </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td align="center" valign="middle" class="btxt"><a href="#"></a><a href="#"></a><a href="#"></a></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="49%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="57%" align="left" valign="top">&nbsp;</td>
            <td width="11%" align="left" valign="top"><img src="images/contact.png" width="52" height="44" /></td>
            <td width="32%" align="left" valign="top" class="btxt">Nr. and openinghours<br />
              00 41 222 33 44 <br /> Mo-Fr 08.00 - 18.00</td>
          </tr>
        </table></td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="Flights.php">Flights</a></li>
<li><a href="#">Tours</a>
<ul>
  <li><a href="#">Asia Tours</a>
   <ul>
    		
    		<li><a href="#">India</a></li>
    		<li><a href="#">Male</a></li>
    		</ul>
  </li>
  <li><a href="#">Africa Tours</a></li>
   <li><a href="#">Combi Tours</a></li>
 </ul>
  <li><a href="#">Srilanka</a>
  <ul>
    		
    		<li><a href="#">About Srilanka</a></li>
    		<li><a href="Srilanka.php">Srilanka Tours</a></li>
    		</ul>
  
  </li>
  
  
  
  
<li><a href="Hotal.php">Hotels</a></li>
<li><a href="Rentcar.php">Rent a Car</a></li>
<li><a href="Insurance.php">Insurance</a></li>
<li><a href="CSR.php">CSR</a></li>
<li><a href="Payment.php">Payments</a></li>
<li><a href="link.php">Other Links</a></li>
</ul>
<br style="clear: left" />
</div></td>
  </tr>