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
    <td height='40' colspan='4' align='left' valign='middle'><strong>Add another country to your tour: you can add Dubai or/and Maldives to your  tour</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Dubai :</strong></td>
    <td height='40' align='left' valign='middle'>$dubaidays Days</td>
    <td align='left' valign='middle'><strong>Maldives : </strong></td>
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
			//if($num > 0 ) {
				$front_order	=	1;
				//while($row = mysql_fetch_array($selectResult)) {
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
<link type="text/css" href="css/common.css" rel="stylesheet"/>
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Plan My SriLanka Tour</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="76" align="left" valign="top"><div align="justify">
              <p>
                With the belowcustomized “PLAN MY SRI LANKA TOUR” form you can plan your Sri Lanka tour according to your interest and budget. Based on the information that you provide in this form our team will send you a no obligation price quote with the tour itinerary. Any time you can make changes in your customized tour itinerary (please note: prices might increase or decrease when changes are made). 
If you do not receive within 5 working days any communication from our team please contact us on (+41) 062 752 00 11. There might have been a technical error during the submission of your form.</p>
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
        <td align="left" valign="top" class="txt"><div class="dbgg">
		<span style="background:yellow; height:20px;"><?php if(isset($msg) && $msg !='') {  echo $msg; unset($msg);        } ?></span>
          <form name="sriinfo" method="post" action="" onsubmit="return sri_vali_submit();">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                
				
				<tr>
                  <td align="left" valign="middle"><strong>Kind of Trip : </strong></td>
                  <td align="left" valign="middle"><select name="kindtrip" id="kindtrip" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Round Trip' >Round Trip</option>
                    <option value='Honeymoon'>Honeymoon</option>
                    <option value='Beach Holiday'>Beach Holiday</option>
					<option value='Mixed Customized Trip'>Mixed Customized Trip</option>
                  </select></td>
                  
				  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
				
				<tr>
                  <td align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 1.<strong><span></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>

				<tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Departure date : </strong></td>
                  <td width="28%" align="left" valign="middle"><input type="text" name="deptdate" id="deptdate" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('deptdate','ddMMyyyy')"/></td>
                  <td width="22%" align="left" valign="middle"><strong>Travel flexibility : </strong></td>
                  <td width="25%" align="left" valign="middle"><select name="traflex" id="traflex" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Not Flexible' >Not Flexible</option>
                    <option value='-1+1'>-1+1</option>
                    <option value='-2+2'>-2+2</option>
                  </select></td>
                </tr>
                
				<tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>			
                 <td align="left" valign="middle"><strong>Return date : </strong></td>
                  <td align="left" valign="middle"><input type="text" name="retdate" id="retdate" size="25" class="input" readonly />
&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('retdate','ddMMyyyy')"/></td>
                  <td align="left" valign="middle"><strong>Preferred Airport : </strong></td>
                  <td align="left" valign="middle"><select name="preair" id="preair" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Zurich' >Z&uuml;rich</option>
                    <option value='Basel'>Basel </option>
                    <option value='Geneva'>Geneva</option>
                    <option value='Frankfurt'>Frankfurt</option>
                    <option value='Milano'>Milano</option>
                  </select></td>
                </tr>

				<tr>
                  <td align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 2.<strong><span></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
               
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Contact Details</strong></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="user_name" id="user_name" size="25" class="input" /></td>
                  <td width="22%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="surname" id="surname" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td height="19" align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="middle"><label></label></td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>

				<tr>
				  <td height="25" align="left" valign="top">Address *: </td>
				  <td align="left" valign="top"><textarea name="address" id="address" class="textarea"  cols="120" rows="5"></textarea></td>
				  <td align="left" valign="middle">Telephone No *:</td>
				  <td align="left" valign="middle"><input type="text" name="telnum" id="telnum" size="25" class="input" /></td>
				</tr>
				
				<tr>
                  <td height="19" align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>

				<tr>
				  <td height="29" align="left" valign="middle">Mobile No *: </td>
				  <td align="left" valign="middle"><input type="text" name="mobnum" id="mobnum" size="25" class="input" /></td>
				  <td align="left" valign="middle">Email Address *: </td>
				  <td align="left" valign="middle">&nbsp;
					<input type="text" name="user_email" id="user_email" size="25" class="input" /></td>
				</tr>

				<tr>
				  <td height="19" align="left" valign="middle"> Re-enter  e-mail address *: </td>
				  <td align="left" valign="middle"><input type="text" name="re_user_email" id="re_user_email" size="25" class="input" /></td>
				  <td align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				</tr>

                <tr>
                  <td colspan="4" align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                
				<tr>
                  <td align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 3. Please enter the names exactly as they are in the passport <strong><span></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
				
				<tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Passenger</strong></td>
                  <td width="28%" align="left" valign="middle">&nbsp;</td>
                  <td width="22%" align="left" valign="middle">&nbsp;</td>
                  <td width="25%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Adult  (+12) : </strong></td>
                  <td align="left" valign="middle"><select name="adultpas" id="adultpas" class="input" size:width="200" onChange="showPass(this.value);" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 6; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>								</td>
                  <td align="left" valign="middle"><strong>Children  (Age 2-11) : </strong></td>
                  <td align="left" valign="middle"><select name="childpas" id="childpas" class="input" size:width="200" onChange="showChild(this.value);">
                    <option value=''>- select -</option>
                    <?php for($w=1; $w < 6; $w++) { ?>
                    <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                    <?php } ?>
                  </select></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Infant  (under 2 years) : </strong></td>
                  <td align="left" valign="middle"><select name="infantpas" id="infantpas" class="input" size:width="200" onChange="showInfant(this.value);">
                    <option value=''>- select -</option>
                    <?php for($w=1; $w < 5; $w++) { ?>
                    <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                    <?php } ?>
                  </select></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            
			<tr id="pashead1" class="shownone">
              <td align="left" valign="top"><strong>Passenger</strong> 1 </td>
            </tr>
            <tr id="pas1" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas1cre" id="pas1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas1name" id="pas1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas1sur" id="pas1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" readonly />
                    <img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="pashead2" class="shownone">
              <td align="left" valign="top"><strong>Passenger</strong> 2 </td>
            </tr>
            <tr id="pas2" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas2cre" id="pas2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas2name" id="pas2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas2sur" id="pas2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas2dob" id="pas2dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas2dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="pashead3" class="shownone">
              <td align="left" valign="top"><strong>Passenger </strong>3</td>
            </tr>
            <tr id="pas3" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas3cre" id="pas3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas3name" id="pas3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas3sur" id="pas3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas3dob" id="pas3dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas3dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="pashead4" class="shownone">
              <td align="left" valign="top"><strong>Passenger </strong>4</td>
            </tr>
            <tr id="pas4" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas4cre" id="pas4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas4name" id="pas4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="19" align="left" valign="middle"><input type="text" name="pas4sur" id="pas4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas4dob" id="pas4dob" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas4dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
			<tr id="pashead5" class="shownone">
              <td align="left" valign="top"><strong>Passenger </strong>5</td>
            </tr>
            <tr id="pas5" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas5cre" id="pas5cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas5name" id="pas5name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="19" align="left" valign="middle"><input type="text" name="pas5sur" id="pas5sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas5dob" id="pas5dob" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas5dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>






			<tr id="chihead1" class="shownone">
              <td align="left" valign="top"><strong>Children</strong> 1 </td>
            </tr>
            <tr id="chi1" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="chi1cre" id="chi1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="chi1name" id="chi1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="chi1sur" id="chi1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi1dob" id="chi1dob" size="25" class="input" readonly />
                    <img src="images/cal.gif" onclick="javascript:NewCssCal ('chi1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="chihead2" class="shownone">
              <td align="left" valign="top"><strong>Children</strong> 2 </td>
            </tr>
            <tr id="chi2" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="chi2cre" id="chi2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="chi2name" id="chi2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="chi2sur" id="chi2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi2dob" id="chi2dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('chi2dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="chihead3" class="shownone">
              <td align="left" valign="top"><strong>Children </strong>3</td>
            </tr>
            <tr id="chi3" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="chi3cre" id="chi3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="chi3name" id="chi3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="chi3sur" id="chi3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi3dob" id="chi3dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('chi3dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="chihead4" class="shownone">
              <td align="left" valign="top"><strong>Children </strong>4</td>
            </tr>
            <tr id="chi4" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="chi4cre" id="chi4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="chi4name" id="chi4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="19" align="left" valign="middle"><input type="text" name="chi4sur" id="chi4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi4dob" id="chi4dob" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('chi4dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
			<tr id="chihead5" class="shownone">
              <td align="left" valign="top"><strong>Children </strong>5</td>
            </tr>
            <tr id="chi5" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="chi5cre" id="chi5cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="chi5name" id="chi5name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="19" align="left" valign="middle"><input type="text" name="chi5sur" id="chi5sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi5dob" id="chi5dob" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('chi5dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>





			<tr id="infhead1" class="shownone">
              <td align="left" valign="top"><strong>Infant</strong> 1 </td>
            </tr>
            <tr id="inf1" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="inf1cre" id="inf1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="inf1name" id="inf1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="inf1sur" id="inf1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf1dob" id="inf1dob" size="25" class="input" readonly />
                    <img src="images/cal.gif" onclick="javascript:NewCssCal ('inf1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="infhead2" class="shownone">
              <td align="left" valign="top"><strong>Infant</strong> 2 </td>
            </tr>
            <tr id="inf2" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="inf2cre" id="inf2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="inf2name" id="inf2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="inf2sur" id="inf2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf2dob" id="inf2dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('inf2dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="infhead3" class="shownone">
              <td align="left" valign="top"><strong>Infant </strong>3</td>
            </tr>
            <tr id="inf3" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="inf3cre" id="inf3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="inf3name" id="inf3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="inf3sur" id="inf3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf3dob" id="inf3dob" size="25" class="input" readonly="readonly" />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('inf3dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr id="infhead4" class="shownone">
              <td align="left" valign="top"><strong>Infant </strong>4</td>
            </tr>
            <tr id="inf4" class="shownone">
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="inf4cre" id="inf4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt"> &nbsp; Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="inf4name" id="inf4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="19" align="left" valign="middle"><input type="text" name="inf4sur" id="inf4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap='nowrap'>Data Of Birth : </td>
                  <td align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf4dob" id="inf4dob" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('inf4dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>



            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt"><p><strong>Add more passengers</strong></p></td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><p><strong>Special Wishes &amp;  rem.</strong></p></td>
                  <td width="26%" align="left" valign="middle"class="txt">&nbsp;</td>
                  <td width="25%" align="left" valign="middle"class="txt">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top"><input type="text" name="addmore" id="addmore" size="25" class="input" /></td>
                  <td height="25" colspan="3" align="left" valign="middle"><textarea name="spewish" id="spewish" cols="70" class="textarea"></textarea></td>
                  </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <!--<tr>
                  <td align="left" valign="top" class="rtxtr"><strong>Plan My Tour</strong></td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>-->
                <tr>
                  <td align="left" valign="top" class="txt">Main Destination</td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
					<tr>
					  <td align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 4. <strong><span></td>
					</tr>

					
					<tr>
                      <td height="30" align="left" valign="top" class="rtxtr">Srilanka</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="12%" align="left" valign="top" class="txt">No of Days :</td>
                            <td width="23%" align="left" valign="top"><select name="noofdays" id="noofdays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>							</td>
							<td width="46%" align="left" valign="top" class="txt">&nbsp; </td>
                            <td width="19%" align="left" valign="top">&nbsp;</td>

                            <!--<td width="46%" align="left" valign="top" class="txt">Of which how many days would you like to spend  at a beach location : </td>
                            <td width="19%" align="left" valign="top"><select name="beachdays" id="beachdays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select></td>-->

                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top" class="txt"><p><strong>Add another country to your tour: you can add Dubai or/and Maldives to your  tour</strong></p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="12%" align="left" valign="middle" class="txt">Dubai : </td>
                            <td width="25%" height="50" align="left" valign="middle"><select name="dubaidays" id="dubaidays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>
                              days</td>
                            <td width="63%" align="left" valign="middle" class="txt">If you wish to make a stopover in Dubai</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle" class="txt">Male : </td>
                            <td height="50" align="left" valign="middle"><select name="maledays" id="maledays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>
                              days </td>
                            <td align="left" valign="middle" class="txt">If you wish to make a stopover in Maldives</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top" class="txt"><p><strong>Step 5. Choose your place of interest, activities and cities (download price list here) </strong></p></td>
                    </tr>
                    
					<!--<tr>
                      <td height="30" align="left" valign="top">Preferred Hotel Category : </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="11%" align="left" valign="middle">Star Hotals : </td>
                            <td width="26%" align="left" valign="middle" class="txt"><select name="star1" id="star1" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='1*'>1*</option>
                                <option value='2*'>2*</option>
                                <option value='3*'>3*</option>
                                <option value='4*'>4*</option>
                                <option value='5*'>5*</option>
                            </select>							</td>
                            <td width="63%" height="35" align="left" valign="middle"><select name="hoteltype" id="hoteltype" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='Boutique Hotel'>Boutique Hotel</option>
                                <option value='Colonial Bungalows'>Colonial Bungalows</option>
                                <option value='Guest Houses'>Guest Houses</option>
                                <option value='Eco Lodge'>Eco Lodge</option>
                                <option value='Appartments'>Appartments</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle" class="txt">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>-->


                    <!--<tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Prefered Meal Plan</td>
                            <td width="24%" height="25" align="left" valign="top" class="txt"><select name="premeal" id="premeal" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='B/B'>B/B</option>
                              <option value='H/B'>H/B</option>
                              <option value='F/B'>F/B</option>
                              <option value='All Inclusive'>All Inclusive </option>
                            </select></td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Rooms :</td>
                            <td width="25%" height="30" align="left" valign="top"class="txt"><select name="roomtype" id="roomtype" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Double room sharing'>Double room sharing</option>
                              <option value='Single room'>Single room</option>
                              <option value='Triple room'>Triple room</option>
                              <option value='Family Room'>Family Room</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Children in separate Room : </td>
                            <td height="25" align="left" valign="middle"><select name="chiroom" id="chiroom" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>
                            </select></td>
                            <td align="left" valign="middle">Requirement of Baby Cot : </td>
                            <td align="left" valign="middle"><select name="babycot" id="babycot" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td height="30" colspan="4" align="left" valign="middle" class="txt">(For Round tours we provide B/B, and H/B)</td>
                          </tr>
                      </table></td>
                    </tr>-->
                    
					<!--<tr>
                      <td height="30" align="left" valign="middle" class="txt"><p><strong>Nature  Based: Nature Parks</strong></p></td>
                    </tr>-->

                    <tr>
                      <td height="30" align="left" valign="top"><p>Adventure :</p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt"> Land  Based : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt" nowrap='nowrap'>
								
							<select name="trekdays" id="trekdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="landbase[]" id="landbase" value="Trecking"/>Trecking

							<select name="hikedays" id="hikedays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="landbase[]" id="landbase" value="Hiking"/>Hiking

							<select name="campdays" id="campdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="landbase[]" id="landbase" value="Camping"/>Camping

							<input type="checkbox" name="landbase[]" id="landbase" value="Bird Watching"/>Bird Watching
							<input type="checkbox" name="landbase[]" id="landbase" value="Jeep Safari (Yala National Park/Minneriya National Park)"/>Jeep Safari (Yala National Park/Minneriya National Park)
							<input type="checkbox" name="landbase[]" id="landbase" value="Elephant Orphanage (pinnawala)"/>Elephant Orphanage (pinnawala)
							<input type="checkbox" name="landbase[]" id="landbase" value="Turtle farm (Hikkaduwa)"/>Turtle farm (Hikkaduwa)


							<!--<select name="landbase" id="landbase" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Trecking'>Trecking</option>
                              <option value='Hiking'>Hiking</option>
                              <option value='Camping'>Camping</option>
                              <option value='Bird Watching'>Bird Watching</option>
                              <option value='Jeep Safari (Yala National Park/Minneriya National Park)'>Jeep Safari (Yala National Park/Minneriya National Park)</option>
							  <option value='Elephant Orphanage (pinnawala)'>Elephant Orphanage (pinnawala)</option>
							  <option value='Turtle farm (Hikkaduwa)'>Turtle farm (Hikkaduwa)</option>
                            </select>-->
																				
							</td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Water  Based : </td>
                            <td width="25%" height="30" align="left" valign="top"class="txt" nowrap='nowrap'>
							
							<input type="checkbox" name="waterbase[]" id="waterbase" value="White Water Rafting"/>White Water Rafting

							<select name="candays" id="candays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Hiking"/>Canoeing

							<select name="surfdays" id="surfdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Surfing"/>Surfing

							<select name="scubadays" id="scubadays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Scuba Diving (licence required)"/>Scuba Diving (licence required)

							<select name="snorkdays" id="snorkdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Snorkelling"/>Snorkelling

							<select name="jetdays" id="jetdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Jet Skiing"/>Jet Skiing

							<input type="checkbox" name="waterbase[]" id="waterbase" value="Whale/Dolphin Watching"/>Whale/Dolphin Watching
							<input type="checkbox" name="waterbase[]" id="waterbase" value="Recreational Fishing"/>Recreational Fishing
							
							<select name="totaldays" id="totaldays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="waterbase[]" id="waterbase" value="Total days at the beach (with or without activities)"/>Total days at the beach (with or without activities)


							
							
							<!--<select name="waterbase" id="waterbase" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='White Water Rafting'>White Water Rafting</option>
                              <option value='Canoeing'>Canoeing</option>
                              <option value='Surfing'>Surfing</option>
                              <option value='SCUBA Diving'>SCUBA Diving</option>
                              <option value='Snorkling'>Snorkling</option>
                              <option value='Jet Sking'>Jet Sking</option>
                              <option value='Whale/Dolphin Watching'>Whale/Dolphin Watching</option>
                              <option value='Recreational Fishing'>Recreational Fishing</option>
                            </select>--></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Air  Based : </td>
                            <td height="25" align="left" valign="middle"><select name="airbase" id="airbase" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Hot Air Ballooning'>Hot Air Ballooning</option>
                            </select></td>
                            <td align="left" valign="middle">Special Courses for learners: </td>
                            <td align="left" valign="middle" nowrap='nowrap'>
							
							<select name="scubalearn" id="scubalearn" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="courses[]" id="courses" value="Scuba Diving (min. 5 days)"/>Scuba Diving (min. 5 days)

							<select name="surflearn" id="surflearn" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="courses[]" id="courses" value="Surfing"/>Surfing
							
							<!-- <select name="courses" id="courses" class="input" style="width:200px">
							  <option value=''>- select -</option>
							  <option value='Scuba Diving'>Scuba Diving</option>
							  <option value='Surfing' >Surfing</option>
							</select> -->
							</td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="middle" class="txt">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Archaeological sites : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt" nowrap='nowrap'>
							
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Anuradhapura"/>Anuradhapura
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Polonnaruwa"/>Polonnaruwa
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Dambulla Rock Temple"/>Dambulla Rock Temple
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Sigiriya"/>Sigiriya
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Alu Vihara Cave Temple"/>Alu Vihara Cave Temple
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Mihintale"/>Mihintale
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Kandy"/>Kandy
							
							<!-- <select name="archaeo" id="archaeo" class="input" style="width:200px">
							  <option value=''>- select -</option>
							  <option value='Anuradhapura'>Anuradhapura</option>
							  <option value='Polonnaruwa'>Polonnaruwa</option>
							  <option value='Dambulla Rock Temple'>Dambulla Rock Temple</option>
							  <option value='Sigiriya'>Sigiriya</option>
							  <option value='Alu Vihara Cave Temple'>Alu Vihara Cave Temple</option>
							  <option value='Mihintale, Kandy'>Mihintale, Kandy</option>
							</select> -->
							
							</td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Religious : </td>
                            <td width="25%" height="30" align="left" valign="top"class="txt" nowrap='nowrap'>
							
							<input type="checkbox" name="temple[]" id="temple" value="Hindu temple"/>Hindu temple
							<input type="checkbox" name="temple[]" id="temple" value="Ramayana Temples"/>Ramayana Temples
							<input type="checkbox" name="temple[]" id="temple" value="Buddhist Temples"/>Buddhist Temples
							<input type="checkbox" name="temple[]" id="temple" value="Christian Churches"/>Christian Churches
																			
							<!-- <select name="temple" id="temple" class="input" style="width:200px">
							  <option value=''>- select -</option>
							  <option value='Hindu temple'>Hindu temple</option>
							  <option value='Ramayana Temples'>Ramayana Temples</option>
							  <option value='Buddhist Temples'>Buddhist Temples</option>
							  <option value='Christian Churches'>Christian Churches</option>
							</select> -->
							
							</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Spiritual : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>
							
							<input type="checkbox" name="spiri[]" id="spiri" value="Meditation"/>Meditation
							<input type="checkbox" name="spiri[]" id="spiri" value="Yoga"/>Yoga
							
							<!--<select name="spiri" id="spiri" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Meditation'>Meditation</option>
                              <option value='Yoga'>Yoga</option>
                            </select>-->
														
							</td>
                            <td align="left" valign="middle">Wellness & SPA : </td>
                            <td align="left" valign="middle" nowrap='nowrap'>
							
							<select name="treatdays" id="treatdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="wellness[]" id="wellness" value="Ayurveda Treatments"/>Ayurveda Treatments

							<select name="massdays" id="massdays" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select> <input type="checkbox" name="wellness[]" id="wellness" value="Ayurveda massage"/>Ayurveda massage

							
							
							<!--<select name="wellbeing" id="wellbeing" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Ayurveda Treatments'>Ayurveda Treatments</option>
                              <option value='Ayurveda massage'>Ayurveda massage</option>
                            </select>-->
							
							</td>
                          </tr>

						  <tr>
                            <td align="left" valign="middle">Special Places : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>
							
							<input type="checkbox" name="speplaces[]" id="speplaces" value="Tea Plantations"/>Tea Plantations
							<input type="checkbox" name="speplaces[]" id="speplaces" value="Diamond Mine"/>Diamond Mine
							
							<!--<select name="spiri" id="spiri" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Meditation'>Meditation</option>
                              <option value='Yoga'>Yoga</option>
                            </select>-->
														
							</td>
                            
							<td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
							
						<tr>
                            <td align="left" valign="middle">Please Choose the city that you wish to visit.</td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>&nbsp;</td>                            
							<td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle" nowrap='nowrap'>&nbsp;</td>
					   </tr>

						  <tr>
                            <td align="left" valign="middle">Day 1 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day1count" id="day1count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day1city" id="day1city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 2 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day2count" id="day2count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day2city" id="day2city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>
						
						<tr>
                            <td align="left" valign="middle">Day 3 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day3count" id="day3count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day3city" id="day3city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 4 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day4count" id="day4count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day4city" id="day4city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>


						  <tr>
                            <td align="left" valign="middle">Day 5 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day5count" id="day5count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day5city" id="day5city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 6 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day6count" id="day6count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day6city" id="day6city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>

						  <tr>
                            <td align="left" valign="middle">Day 7 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day7count" id="day7count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day7city" id="day7city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 8 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day8count" id="day8count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day8city" id="day8city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>


						  <tr>
                            <td align="left" valign="middle">Day 9 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day9count" id="day9count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day9city" id="day9city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 10 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day10count" id="day10count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day10city" id="day10city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>

						  <tr>
                            <td align="left" valign="middle">Day 11 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day11count" id="day11count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day11city" id="day11city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 12 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day12count" id="day12count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day12city" id="day12city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>

						  <tr>
                            <td align="left" valign="middle">Day 13 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day13count" id="day13count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day13city" id="day13city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 14 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day14count" id="day14count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day14city" id="day14city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>

						  <tr>
                            <td align="left" valign="middle">Day 15 : </td>
                            <td height="25" align="left" valign="middle" nowrap='nowrap'>														
							<select name="day15count" id="day15count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day15city" id="day15city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>						
							</td>
							
							<td align="left" valign="middle">Day 16 :</td>
                            <td align="left" valign="middle" nowrap='nowrap'>							
							<select name="day16count" id="day16count" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { ?>
							<option value='<?php echo $w; ?>'><?php echo $w; ?></option>
							<?php } ?>
							</select>

							<select name="day16city" id="day16city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>
							</td>
                          </tr>

                          <tr>
                            <td align="left" valign="middle" nowrap='nowrap'><strong>Please mention other special places, activities, events or services that you wish for your tour:<strong></td>
							<td height="25" align="left" valign="middle" nowrap='nowrap'><textarea name="speplaces" id="speplaces" class="textarea"  cols="120" rows="5"></textarea>

							</td>

							<td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle" nowrap='nowrap'>&nbsp;</td>

                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                      <td height="30" align="left" valign="top" class="txt"><p><strong>Choose the accommodation that you according to your wish and budget</strong></p></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top">Preferred Hotel Category : </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="11%" align="left" valign="middle">Star Hotals : </td>
                            <td width="26%" align="left" valign="middle" class="txt"><select name="star1" id="star1" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='1*'>1*</option>
                                <option value='2*'>2*</option>
                                <option value='3*'>3*</option>
                                <option value='4*'>4*</option>
                                <option value='5*'>5*</option>
                            </select>							</td>
                            <td width="63%" height="35" align="left" valign="middle"><select name="hoteltype" id="hoteltype" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='Boutique Hotel'>Boutique Hotel</option>
                                <option value='Colonial Bungalows'>Colonial Bungalows</option>
                                <option value='Guest Houses'>Guest Houses</option>
                                <option value='Eco Lodge'>Eco Lodge</option>
                                <option value='Appartments'>Appartments</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle" class="txt">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Prefered Meal Plan</td>
                            <td width="24%" height="25" align="left" valign="top" class="txt"><select name="premeal" id="premeal" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='B/B'>B/B</option>
                              <option value='H/B'>H/B</option>
                              <option value='F/B'>F/B</option>
                              <option value='All Inclusive'>All Inclusive </option>
                            </select></td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">Rooms :</td>
                            <td width="25%" height="30" align="left" valign="top"class="txt"><select name="roomtype" id="roomtype" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Double room sharing'>Double room sharing</option>
                              <option value='Single room'>Single room</option>
                              <option value='Triple room'>Triple room</option>
                              <option value='Family Room'>Family Room</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Children in separate Room : </td>
                            <td height="25" align="left" valign="middle"><select name="chiroom" id="chiroom" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>
                            </select></td>
                            <td align="left" valign="middle">Requirement of Baby Cot : </td>
                            <td align="left" valign="middle"><select name="babycot" id="babycot" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>
                            </select></td>
                          </tr>
						  
						  
						  <tr>
                            <td width="25%" height="25" align="left" valign="top" class="txt">Preferred Tour guide&nbsp;  : </td>
                            <td width="24%" height="25" align="left" valign="top" class="txt" nowrap='nowrap'>
							
							<input type="checkbox" name="tourguide[]" id="tourguide" value="English"/>English
							<input type="checkbox" name="tourguide[]" id="tourguide" value="German"/>German
							<input type="checkbox" name="tourguide[]" id="tourguide" value="French"/>French
							<input type="checkbox" name="tourguide[]" id="tourguide" value="Italian"/>Italian

							
							<!--<select name="tourguide" id="tourguide" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='English'>English</option>
                                <option value='German'>German</option>
                                <option value='French'>French</option>
                                <option value='Italian'>Italian</option>
                            </select>-->
							
							</td>
                            <td width="26%" height="30" align="left" valign="top"class="txt">&nbsp;</td>
                            <td width="25%" height="30" align="left" valign="top"class="txt">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="25" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="top" class="txt"><div align="justify">If  a passenger has any physical disabilities requiring special attention/arrangements to be made please give details specifying the kind of  special arrangements to be made at destination hotel/s and in vehicle.<br />
                                    <br />
                              If you have any special requests regarding food or allergies, please specify clearly in order to advise hotels:<br />
                              <br />
                            </div></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="57" align="left" valign="middle"><textarea name="foodall" id="foodall" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><p align="justify"><br />
                        ANY OTHER REMARKS<br />
                      </p></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><textarea name="anyother" id="anyother" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td height="40" align="center" valign="middle"><button name="reg" onclick="return reg_vali();" type="submit" class="submit button">Submit</button></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table>
		  </form>
        </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
   
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
     
      
    </table></td>
  </tr>
  
<?php //} } ?>

   <?php include 'footer.php'; ?>