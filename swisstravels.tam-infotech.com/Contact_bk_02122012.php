<?php
session_start();
require_once 'header.php';

//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'sathish6600@gmail.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Swiss Travels <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
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
<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/logo.png" type="images/logo.png">
<link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
<link href="style.css" rel="stylesheet" type="text/css">
 <link rel="Stylesheet" type="text/css" href="css/default/reset.css" />
    
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" />  
	 <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	// validate signup form on keyup and submit
	var validator = $("#contactform").validate({
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			subject: {
				required: true,
				minlength: 2
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			contactname: {
				required: "Please enter your name",
				minlength: jQuery.format("Your name needs to be at least {0} characters")
			},
			email: {
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address"
			},
			subject: {
				required: "You need to enter a subject!",
				minlength: jQuery.format("Enter at least {0} characters")
			},
			message: {
				required: "You need to enter a message!",
				minlength: jQuery.format("Enter at least {0} characters")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		}
	});
});
</script>
<style type="text/css">
<!--
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
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
   <li><a href="compi_Tours.php">Combi Tours</a></li>
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Contact Us </strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><p class="txt">Swiss Travels GmbH<br />
          Kilchbergstrasse 19<br />
          4800 Zofingen - CH<br />
          T: 062 752 00 11 <br />
          F: 062 752 00 13<br />
          M: 076 411 37 61&nbsp;&nbsp;&nbsp; (For emergency we are reachable at any  time) <br />
          <a href="mailto:info@swisstravels.ch">info@swisstravels.ch</a> <br />
          <a href="http://www.swisstravels.ch" target="_blank">www.swisstravels.ch</a> </p>
          <p><span class="insidetxt">Opening Hours:</span> Mon-Fri <span class="txt">9-12.00</span>  &ndash; <span class="txt">13.30-18.00</span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sat <span class="txt">9.00-13.00</span></p>
          </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" align="left" valign="top"><div class="wrapper">
	<div id="contactWrapper" role="form">
	
		<h1 role="heading">Send us a message</h1>

		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p><strong>Email Successfully Sent!</strong></p>
				<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent.</p>
			</div>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
			<div class="stage clear">
				<label for="name"><strong>Name: <em>*</em></strong></label>
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" autocomplete="off" />
			</div>

			<div class="stage clear">
				<label for="email"><strong>Email: <em>*</em></strong></label>
				<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" autocomplete="off" />
			</div>

			<div class="stage clear">
				<label for="subject"><strong>Subject: <em>*</em></strong></label>
				<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" autocomplete="off" />
			</div>

			<div class="stage clear">
				<label for="message"><strong>Message: <em>*</em></strong></label>
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
			</div>
								
			<p class="requiredNote"><em>*</em> Denotes a required field.</p>
			
			<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
		</form>
	</div>
	

</div></td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
 <?php require_once 'footer.php'; ?>