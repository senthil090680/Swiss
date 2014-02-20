<?php
session_start();
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);

extract($_REQUEST);



if($_POST) {
	$queryInsert	=	"INSERT INTO ".TABLE_TOUR_ENQUIRY." (user_name,user_email,user_phone,user_msg,tour_id,insertedDate) VALUES ('$user_name','$user_email','$user_phone','$user_msg','$tour_id',NOW())";

	$resultInsert	=	mysql_query($queryInsert) or die(mysql_error());;

	if($resultInsert) {
		$msg	=	"You will be replied back";
	}
	else {
		$msg	=	"Datas are not inserted";
	}

	$selectCount	=	"SELECT * FROM ".TABLE_PLAN." WHERE tour_id = '$tour_id'";
	$selectResult	=	mysql_query($selectCount) or die (mysql_error());
	$num			=	mysql_num_rows($selectResult);	

	$row = mysql_fetch_array($selectResult);
	$thumb_path				=		$row['thumb_path'];
	$tour_name				=		$row['tour_name'];
	$tour_desc				=		$row['tour_desc'];

	$argFromEmailAddress	=	'noreply@swisstravels.com';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'noreply@swisstravels.com';
	$argSubject				=	"Looking for this package details -". $tour_name;
	$argMessage				=	$user_msg;


	$argUserSubject				=	"Package Details Enquiry  -". $tour_name;
	$argUserMessage				=	"You Will be contacted regarding this package details - $tour_name soon "; 

	$argFromEmailAddress	= preg_replace("/\n/", "", $argFromEmailAddress);
	$argReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheaders				.= "MIME-Version: 1.0\n";
	$funheaders				.= "Content-type: text/html\n";
	$funheaders				.= "From:"."<".$argFromEmailAddress.">\n";
	$funheaders				.= "Reply-To: "."<".$argReplyToEmailAddress.">\n";
	$funheaders				.= "Return-Path: <noreply@swisstravels.com>\n";
	$funheaders				.= "Sender: info@swisstravels.com\n";
	$argheaders				= $funheaders;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);

	if (mail($argToEmailAddress, $argUserSubject, $argUserMessage, $argheaders)) { $funValue = 'yes'; }//if
	
	$argFromEmailAddress	=	'admin@swisstravels.com';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'admin@swisstravels.com';
	
	$argAdminFromEmailAddress		= preg_replace("/\n/", "", $argFromEmailAddress);
	$argAdminReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheadersAdmin				.= "MIME-Version: 1.0\n";
	$funheadersAdmin				.= "Content-type: text/html\n";
	$funheadersAdmin				.= "From:"."<".$argAdminFromEmailAddress.">\n";
	$funheadersAdmin				.= "Reply-To: "."<".$argAdminReplyToEmailAddress.">\n";
	$funheadersAdmin				.= "Return-Path: <admin@swisstravels.com>\n";
	$funheadersAdmin				.= "Sender: admin@swisstravels.com\n";
	$argheadersAdmin				= $funheadersAdmin;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);

	if (mail($argToEmailAddress, $argSubject, $argMessage, $argheadersAdmin)) { $funValue = 'yes'; }//if

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Swiss Travels - welcome to our  home page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

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
.style1 {
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>



<?php


$selectCount	=	"SELECT * from ".TABLE_PLAN." WHERE plan_status = '1' AND tour_id = '$tour_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
				$front_order	=	1;
				while($row = mysql_fetch_array($selectResult)) {
					$tour_id				=		$row['tour_id'];
					$thumb_path				=		$row['thumb_path'];
					$thumb_path1			=		$row['thumb_path1'];
					$thumb_path2			=		$row['thumb_path2'];
					$tour_desc				=		$row['tour_desc'];
					$tour_name				=		$row['tour_name'];
					$tour_cost				=		$row['tour_cost'];

?>
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
            <td width="32%" align="left" valign="top" class="btxt">Nr. andopeninghours<br />
              +91 9999 8888 </td>
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
   <li><a href="Srilanka.php">Srilanka Tours</a></li>
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
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><img src="images/wightlin.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><img src="images/banner.jpg" width="990" height="252" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Goa</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="insidetxt"><?php echo $tour_name; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="240" height="180" /></td>
            <td align="center" valign="middle"><img src="<?php echo 'controlend/'.$thumb_path1; ?>" width="240" height="180" /></td>
            <td align="center" valign="middle"><img src="<?php echo 'controlend/'.$thumb_path2; ?>" width="240" height="180" /></td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td height="463" align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="67%" align="left" valign="top"><h3 align="justify" class="suptitxt"><?php echo $tour_name; ?></h3>
              <div align="justify"><?php echo $tour_desc; ?> <br />
                  <br />
                  <span class="rtxtr">Package highlights </span>
                  <ul>
                    <li> Spend leisure time on Calangute, Baga and Candolim beaches<br />
                    </li>
                    <li> Indulge in watersports like parasailing, scuba diving, etc on the beaches during the season<br />
                    </li>
                    <li> Take sightseeing trips to explore the local attractions</li>
                  </ul>
                <p>All the tourists wanting to enjoy a scenic and relaxing holiday on the   beaches should take up this Goa holiday package. While on this tour   tourists will also get great opportunities to enjoy the local culture of   the region. </p>
                <p class="suptitxt">Rates applicable for<br />
                      <br />
                  Per Couple <br />
                  <span class="rtxtr"><?php echo $tour_cost; ?></span>                </p>
                <table width="646">
                    <tbody>
                      <tr>
                        <td width="638" align="left" valign="top"><div id="package_sidebar_hotel_cart_details">
                            <div id="package_sidebar_hotel_cart_details-9_0">
                              <div id="package_sidebar_hotel_cart_details-9_0-details"> <span id="package_detail_season_changer"><strong>Accommodation</strong> &nbsp;&nbsp; <a href="http://book.mustseeindia.com/2nt-goa-candolim-beach-package-book-14100#package-customize" onclick="push_page_operation(121);_gaq.push(['_trackEvent','Package', 'Package Details','Cart Hotel Change',0,true]);switch_tab('package_hotels');tabhotel_change_city('9_0');"></a> <br />
                                Hotel:&nbsp;Le Seasons Beach Resort&nbsp;&nbsp;(3 Star)<br />
                                Room:&nbsp;Superior Room&nbsp;  	    (1 room)<br />
                                Meal Plan:&nbsp;Daily Breakfast included</span></div>
                            </div>
                        </div></td>
                      </tr>
                    </tbody>
                  </table>
              </div></td>
            <td width="2%" align="left" valign="top">&nbsp;</td>
            <td width="31%" align="left" valign="top"><div class="fbg">
              <form name="enquiry_form" method="post" action="" >
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="35" align="center" valign="middle" bgcolor="blue"><span class="style1"><?php if(isset($msg) && $msg != '') {
			echo $msg;
			unset($msg);
		} ?></span></td>
                </tr>
				
				<tr>
                  <td height="35" align="center" valign="middle" bgcolor="#FF0000"><span class="style1">Enquery</span></td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="bottom">Name : </td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="middle"><label>
                    <input type="text" name="user_name" size="43" />
                  </label></td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="bottom">E-Mail ID : </td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="middle"><input type="text" name="user_email" size="43" /></td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="bottom">Phone No : </td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="middle"><input type="text" name="user_phone" size="43" /></td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="bottom">Message : </td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="middle"><label>
                    <textarea name="user_msg" cols="33"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td height="18" align="left" valign="bottom">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center" valign="middle"><input type="image"  src="images/send-button-sprite.png" width="280" height="49" /></td>
                </tr>
              </table>
			  </form>
</div></td>
          </tr>
        </table>          
          </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    </table></td>
  </tr>

				
			<?php 	}
			} ?>

 
 
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF" class="linr"><img src="images/rline.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="bottom" class="copy">&nbsp;</td>
        <td align="left" valign="bottom" class="copy">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" height="25" align="left" valign="middle">&nbsp;</td>
        <td width="9%" align="left" valign="middle"><span class="btxt"><a href="AGB.php">AGB</a> | <a href="SLA.php">SLA</a></span> </td>
        <td width="3%" align="left" valign="middle"><span class="copy"><a href="#"><img src="images/Swiss Flag.png" width="25" height="25" border="0" /></a></span></td>
        <td width="56%" align="left" valign="bottom" class="copy"><a href="#"><img src="images/Swiss Flag.png" width="25" height="25" border="0" /></a></td>
        <td width="31%" align="left" valign="middle" class="copy">Copyright &copy;2012 Swiss Travels. All Right Reserved </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
</body>
</html>
