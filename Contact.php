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
	
	$argFromEmailAddress	=	EMAIL_ADMIN_SENDER;
	$argToEmailAddress		=	$email;
	$argReplyToEmailAddress	=	EMAIL_ADMIN_SENDER;
	$argSubject				=	$subject;
	$argMessage				=	$comments;

	$argFromEmailAddress	= preg_replace("/\n/", "", $argFromEmailAddress);
	$argReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheaders				.= "MIME-Version: 1.0\n";
	$funheaders				.= "Content-type: text/html\n";
	$funheaders				.= "From:"."<".$argFromEmailAddress.">\n";
	$funheaders				.= "Reply-To: "."<".$argReplyToEmailAddress.">\n";
	$funheaders				.= "Return-Path: ".EMAIL_ADMIN_SENDER."\n";
	$funheaders				.= "Sender: ".EMAIL_ADMIN_SENDER."\n";
	$argheaders				= $funheaders;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);
	
	
	$argAdminFromEmailAddress			=	EMAIL_ADMIN_SENDER;

	$argToAdminEmailAddress				=	EMAIL_ADMIN_RECEIVER;	// REMOVE THE COMMENT LINE FOR MAKING LIVE

	//$argToAdminEmailAddress				=	$email;				// FOR TESTING ONLY
	$argAdminReplyToEmailAddress		=	EMAIL_ADMIN_SENDER;
		
	$argUserSubject						=	"Enquiry Success Message";
	$argUserMessage						=	"Thanks for Contacting Us.<br/>You Will be contacted regarding your enquiry"; 
	
	$argAdminFromEmailAddress			=	preg_replace("/\n/", "", $argFromEmailAddress);
	$argAdminReplyToEmailAddress		=	preg_replace("/\n/", "", $argAdminReplyToEmailAddress);
	$funheadersAdmin					.=	"MIME-Version: 1.0\n";
	$funheadersAdmin					.=	"Content-type: text/html\n";
	$funheadersAdmin					.=	"From:"."<".$argAdminFromEmailAddress.">\n";
	$funheadersAdmin					.=	"Reply-To: "."<".$argAdminReplyToEmailAddress.">\n";
	$funheadersAdmin					.=	"Return-Path: ".EMAIL_ADMIN_SENDER."\n";
	$funheadersAdmin					.=	"Sender: ".EMAIL_ADMIN_SENDER."\n";
	$argheadersAdmin					=	$funheadersAdmin;
	$argToAdminEmailAddress				=	preg_replace("/\n/", "", $argToAdminEmailAddress);

	if(!isset($hasError)) {

		if(!isset($hasError)) {
			//User Mail
			if (mail($argToEmailAddress, $argUserSubject, $argUserMessage, $argheaders)) { $funValue = 'yes'; }//if
			
			//Admin Mail
			if (mail($argToAdminEmailAddress, $argSubject, $argMessage, $argheadersAdmin)) { $funValue = 'yes'; }//if
				$emailSent = true;
		}
	}

	//If there is no error, send the email
	
	/*if(!isset($hasError)) {
		$emailTo = 'sathish6600@gmail.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Swiss Travels <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}*/
}
?>
<link rel="icon" type="images/logo.png"  href="images/logo.png">
<link rel="stylesheet" type="text/css" href="menu_assets/styles.css" >
<link rel="stylesheet" type="text/css" href="menu_style.css" media="all"/>
<link rel="stylesheet" type="text/css" href="style.css" >

<!-- <link rel="Stylesheet" type="text/css" href="css/default/reset.css" />    
<link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="css/default/default.css" /> -->

<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script> -->
<!-- <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script> -->
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