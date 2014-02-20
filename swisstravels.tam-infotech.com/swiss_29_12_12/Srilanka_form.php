<?php
session_start();
require_once('header.php');

extract($_REQUEST);

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

$sri_id	=	base64_decode($sri_id);


if($_POST) {

	$queryInsert	=	"INSERT INTO ".TABLE_TOUR_ENQUIRY." (user_name,user_email,user_phone,user_msg,tour_id,insertedDate) VALUES ('$user_name','$user_email','$user_phone','$user_msg','$tour_id',NOW())";

	//exit(0);
	//$resultInsert	=	mysql_query($queryInsert) or die(mysql_error());;

	if($resultInsert) {
		$msg	=	"You will be replied back";
	}
	else {
		$msg	=	"Datas are not inserted";
	}

	$msg	=	"Thank you for your enquiry.  You will be replied back";

	$selectCount	=	"SELECT * FROM ".TABLE_SRI." WHERE sri_id = '$sri_id'";
	$selectResult	=	mysql_query($selectCount) or die (mysql_error());
	$num			=	mysql_num_rows($selectResult);	
	
	$mail_content = "<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='154' align='left' valign='middle'><strong>Departure  date : </strong></td>
    <td width='195' height='40' align='left' valign='middle'>$deptdate</td>
    <td width='147' align='left' valign='middle'><strong>Return  date : </strong></td>
    <td width='204' align='left' valign='middle'>$retdate</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Travel  flexibility : </strong></td>
    <td height='40' align='left' valign='middle'>$traflex</td>
    <td align='left' valign='middle'><strong>Preferred  Airport : </strong></td>
    <td align='left' valign='middle'>$preair</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Contact Details</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td height='40' align='left' valign='middle'>$user_name</td>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td align='left' valign='middle'>$surname</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Telephone No : </strong></td>
    <td height='40' align='left' valign='middle'>$telnum</td>
    <td align='left' valign='middle'><strong>Mobile No : </strong></td>
    <td align='left' valign='middle'>$mobnum</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>E-Mail Id :</strong></td>
    <td height='40' align='left' valign='middle'>$user_email</td>
    <td align='left' valign='middle'><strong>Re-enter e-mail address :</strong></td>
    <td align='left' valign='middle'>$re_user_email</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Address : </strong></td>
    <td height='40' colspan='3' align='left' valign='middle'>$address</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Adult Passengers :</strong></td>
    <td height='40' align='left' valign='middle'>$adultpas</td>
    <td align='left' valign='middle'><strong>Child passenger :</strong></td>
    <td align='left' valign='middle'>$childpas</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Infant Passengers :</strong></td>
    <td height='40' align='left' valign='middle'>$infantpas</td>
    <td align='left' valign='middle'><strong>&nbsp;</strong></td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passenger 1 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td height='40' align='left' valign='middle'>$pas1cre</td>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$pas1name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$pas1sur</td>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas1dob</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passenger 2 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td height='40' align='left' valign='middle'>$pas2cre</td>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$pas2name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$pas2sur</td>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas2dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passenger 3 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td height='40' align='left' valign='middle'>$pas3cre</td>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$pas3name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$pas3sur</td>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas3dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passenger 4 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td height='40' align='left' valign='middle'>$pas4cre</td>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$pas4name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$pas4sur</td>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas4dob</td>
  </tr>
  
  <tr>
    <td align='left' valign='middle'><strong>Add more passengers : </strong></td>
    <td height='40' align='left' valign='middle'>$addmore</td>
    <td align='left' valign='middle'><strong>Special Wishes &amp;  rem.</strong></td>
    <td align='left' valign='middle'>$spewish</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Plan My Tour</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>No of Days :</strong></td>
    <td height='40' align='left' valign='middle'>$noofdays Days</td>
    <td align='left' valign='middle'><strong>Of which how many days would you like to spend  at a beach location : <strong></td>
    <td align='left' valign='middle'>$beachdays Days</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Add another country to your tour: you can add Dubai or/and Male to your  tour</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Dubai :</strong></td>
    <td height='40' align='left' valign='middle'>$dubaidays Days</td>
    <td align='left' valign='middle'><strong>Male : </strong></td>
    <td align='left' valign='middle'>$maledays Days </td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Choose the accommodation that you according to your wish and budget</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Star Hotals : </strong></td>
    <td height='40' align='left' valign='middle'>$star1</td>
    <td align='left' valign='middle'><strong>Hotel Category :</strong></td>
    <td align='left' valign='middle'>$hoteltype</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Prefered Meal Plan : </strong></td>
    <td height='40' align='left' valign='middle'>$premeal</td>
    <td align='left' valign='middle'><strong>Rooms :</strong></td>
    <td align='left' valign='middle'>$roomtype</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Children in separate Room : </strong></td>
    <td height='40' align='left' valign='middle'>$chiroom</td>
    <td align='left' valign='middle'><strong>Requirement of Baby Cot : </strong></td>
    <td align='left' valign='middle'>$babycot</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Nature  Based: Nature Parks</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Land  Based : </strong></td>
    <td height='40' align='left' valign='middle'>$landbase</td>
    <td align='left' valign='middle'><strong>Water  Based :</strong></td>
    <td align='left' valign='middle'>$waterbase</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Air  Based :</strong></td>
    <td height='40' align='left' valign='middle'>$airbase</td>
    <td align='left' valign='middle'><strong>Courses : </strong></td>
    <td align='left' valign='middle'>$courses</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Archaeological sites : </strong></td>
    <td height='40' align='left' valign='middle'>$archaeo</td>
    <td align='left' valign='middle'><strong>Religious : </strong></td>
    <td align='left' valign='middle'>$temple</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Spiritual : </strong></td>
    <td height='40' align='left' valign='middle'>$spiri</td>
    <td align='left' valign='middle'><strong>Physical Well Being : </strong></td>
    <td align='left' valign='middle'>$wellbeing</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Preferred Tour guide&nbsp;: </strong></td>
    <td height='40' colspan='3' align='left' valign='middle'>$tourguide</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='top'>If  a passenger has any physical disabilities requiring special    attention/arrangements to be made please give details specifying the   kind of  special arrangements to be made at destination hotel/s and in   vehicle.<br />
    Food  allergies if any should be provided in detail in order to advise hotel/s.</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>$foodall</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>ANY OTHER INFORMATION YOU COULD PROVIDE THAT MIGHT HELP US MAKE YOUR    STAY AT CHOSEN DESTINATION/S AND OR COUNTRIES MORE COMFORTABLE</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>$anyother</td>
  </tr>
</table>";

	$row = mysql_fetch_array($selectResult);
	$tour_name				=		$row['tour_name'];

	$argFromEmailAddress	=	'noreply@swisstravels.com';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'noreply@swisstravels.com';
	$argSubject				=	"Looking for this package details -". $tour_name;
	$argMessage				=	$mail_content;


	$argUserSubject				=	"Package Details Enquiry  -". $tour_name;
	$argUserMessage				=	"You Will be contacted regarding this package details - $tour_name soon "; 

	$argFromEmailAddress	= preg_replace("/\n/", "", $argFromEmailAddress);
	$argReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheaders				.= "MIME-Version: 1.0\n";
	$funheaders				.= "Content-type: text/html\n";
	$funheaders				.= "From: ".$argFromEmailAddress."\n";
	$funheaders				.= "Reply-To: ".$argReplyToEmailAddress."\n";
	$funheaders				.= "Return-Path: noreply@swisstravels.com\n";
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
	$funheadersAdmin				.= "From: " .$argAdminFromEmailAddress."\n";
	$funheadersAdmin				.= "Reply-To: ".$argAdminReplyToEmailAddress."\n";
	$funheadersAdmin				.= "Return-Path: admin@swisstravels.com\n";
	$funheadersAdmin				.= "Sender: admin@swisstravels.com\n";
	$argheadersAdmin				= $funheadersAdmin;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);
	
	//echo $argToEmailAddress."<br>".$argSubject."<br>".$argMessage."<br>".$argheadersAdmin;
	if (mail($argToEmailAddress, $argSubject, $argMessage, $argheadersAdmin)) { $funValue = 'yes'; }//if

}


$selectCount	=	"SELECT * from ".TABLE_SRI." WHERE sri_status = '1' and sri_id = '$sri_id'";
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
					$product_services		=		$row['product_services'];
					$touring				=		$row['touring'];
					$tour_name				=		$row['tour_name'];
					$tour_cost				=		$row['tour_cost'];

?>

<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/popup_open.js"></script>
<script type="text/javascript" src="js/datetimepicker_css.js"></script>
<link href="css/popup_open.css" rel="stylesheet" type="text/css" />

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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>SriLanka</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="76" align="left" valign="top"><div align="justify">
              <p><strong>Tour Enquiries</strong><br />
                Welcome to  Swiss Travels holiday price enquiry. As soon as we receive your request we  check the best price and our holidays are guaranteed to be value for your money  and lower than any other tour operators. Please complete the enquiry form below  to get a no obligation quote. If you do not receive within 5 working days any  communication from our team please contact us on (+41) 062 752 00 11. There  might have been a technical error during the submission of your form              </p>
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
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><iframe align="middle" height="400" id="ss" name="ss" scrolling="no" src="step1.php" title="ss" width="980"></iframe></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
   
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
     
      
    </table></td>
  </tr>
  
<?php } } ?>

   <?php include 'footer.php'; ?>