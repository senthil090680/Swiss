<?php
session_start();
require_once('header.php');

extract($_REQUEST);

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

$tour_id	=	base64_decode($tour_id);


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

	$msg	=	"Thank you for your enquiry. You will be replied back";

	$selectCount	=	"SELECT * FROM ".TABLE_PLAN." WHERE tour_id = '$tour_id'";
	$selectResult	=	mysql_query($selectCount) or die (mysql_error());
	$num			=	mysql_num_rows($selectResult);	
	
	$mail_content = "<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='174' align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td width='175' height='40' align='left' valign='middle'>$creden</td>
    <td width='147' align='left' valign='middle'><strong>Name : </strong></td>
    <td width='204' align='left' valign='middle'>$user_name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname :</strong></td>
    <td height='40' align='left' valign='middle'>$surname</td>
    <td align='left' valign='middle'><strong>Email Id :</strong></td>
    <td align='left' valign='middle'>$user_email</td>
  </tr>
 
  <tr>
    <td align='left' valign='middle'><strong>Telephone / Mobile :</strong></td>
    <td height='40' align='left' valign='middle'>$mobilenum</td>
    <td align='left' valign='middle'><strong>Land : </strong></td>
    <td align='left' valign='middle'>$landplace</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Date of departure :</strong></td>
    <td height='40' align='left' valign='middle'>$departure</td>
    <td align='left' valign='middle'><strong>Date of arrival : </strong></td>
    <td align='left' valign='middle'>$arrival</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Departure airport : </strong></td>
    <td height='40' align='left' valign='middle'>$depair</td>
    <td align='left' valign='middle'><strong>Destination/airport :</strong></td>
    <td align='left' valign='middle'>$destair</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Currency : </strong></td>
   <td height='40' align='left' valign='middle'>$curr</td>
   <td align='left' valign='middle'><strong>Preferred airline : </strong></td>
   <td align='left' valign='middle'><strong>$preair</strong></td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passengers Information 1 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Name : </strong></td>
    <td height='40' align='left' valign='middle'>$pas1name</td>
    <td align='left' valign='middle'><strong>Surname :</strong></td>
    <td align='left' valign='middle'>$pas1sur</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td height='40' align='left' valign='middle'>$pas1dob</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passengers Information 2 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Name : </strong></td>
    <td height='40' align='left' valign='middle'>$pas2name</td>
    <td align='left' valign='middle'><strong>Surname :</strong></td>
    <td align='left' valign='middle'>$pas2sur</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td height='40' align='left' valign='middle'>$pas2dob</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passengers Information 3 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Name : </strong></td>
    <td height='40' align='left' valign='middle'>$pas3name</td>
    <td align='left' valign='middle'><strong>Surname :</strong></td>
    <td align='left' valign='middle'>$pas3sur</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td height='40' align='left' valign='middle'>$pas3dob</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passengers Information 4 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Name : </strong></td>
    <td height='40' align='left' valign='middle'>$pas4name</td>
    <td align='left' valign='middle'><strong>Surname :</strong></td>
    <td align='left' valign='middle'>$pas4sur</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Data Of Birth :</strong></td>
    <td height='40' align='left' valign='middle'>$pas4dob</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Remarks or further passenger name/ surname /  date of birth and your personal wishes</strong></td>
  </tr>
 
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>$otherpas</td>
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
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$thumb_path; ?>','1')"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="240" height="180" /></a></td>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$thumb_path1; ?>','2')"><img src="<?php echo 'controlend/'.$thumb_path1; ?>" width="240" height="180" /></a></td>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$thumb_path2; ?>','3')"><img src="<?php echo 'controlend/'.$thumb_path2; ?>" width="240" height="180" /></a></td>
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
        <td height="409" align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="100%" align="left" valign="top"><h3 align="justify" class="suptitxt"><?php echo $tour_name; ?></h3>
              <div align="justify"> 
                  <span class="rtxtr">Package highlights </span>
                  <p>
                    <?php echo $tour_desc; ?>
                  </p>
                <p><?php echo $product_services; ?></p>
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
                                <?php echo $product_services; ?></span></div>
                            </div>
                        </div></td>
                      </tr>
                    </tbody>
                  </table>
              </div></td>
            <td width="0%" align="left" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="100%" align="left" valign="top" class="suptitxt">&nbsp;</td>
            <td width="0%" align="left" valign="top" class="suptitxt">&nbsp;</td>
          </tr>
          <tr>
            
            <td height="19" align="left" valign="top" class="suptitxt">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top"><div class="dbgg">
			<span style="background:yellow; height:20px;"><?php if(isset($msg) && $msg !='') {  echo $msg; unset($msg);        } ?></span>
			<form name="userinfo" method="post" action="" onsubmit="return vali_submit();">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Departure date : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="deptdate" id="deptdate" size="25" class="input" readonly="readonly" />
&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('deptdate','ddMMyyyy')"/></td>
                      <td width="18%" align="left" valign="middle"class="txt">Travel flexibility : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><select name="traflex" id="traflex" class="input" style="width:200px">
                        <option value='' >- select -</option>
                        <option value='Not Flexible' >Not Flexible</option>
                        <option value='-1+1'>-1+1</option>
                        <option value='-2+2'>-2+2</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">Return date : </td>
                      <td align="left" valign="middle"><input type="text" name="pas1dob2" id="pas1dob2" size="25" class="input" readonly="readonly" />
                        &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                      <td align="left" valign="middle">Preferred Airport : </td>
                      <td align="left" valign="middle"><select name="select" id="select" class="input" style="width:200px">
                        <option value='' selected="selected" >- select -</option>
                        <option value='Zurich' >Z&uuml;rich</option>
                        <option value='Basel'>Basel </option>
                        <option value='Geneva'>Geneva</option>
                        <option value='Frankfurt'>Frankfurt</option>
                        <option value='Milano'>Milano</option>
                                            </select></td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><p><strong>Contact Details</strong></p></td>
                </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top"><select name="creden" id="creden" style="width:200px" class="input">
                    <option value=''>- Select -</option>
                    <option value='Mr'>Mr</option>
                    <option value='Mrs'>Mrs</option>
                                    </select>
                    <strong>(As it is in the passport)</strong> </td>
                </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="user_name" id="user_name" size="25" class="input" /></td>
                      <td width="18%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><input type="text" name="surname" id="surname" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">Email Id : </td>
                      <td align="left" valign="middle"><input type="text" name="user_email" id="user_email" size="25" class="input" /></td>
                      <td align="left" valign="middle">Re-enter  e-mail address*:</td>
                      <td align="left" valign="middle"><input type="text" name="mobilenum" id="mobilenum" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="29" align="left" valign="middle">Mobile No : </td>
                      <td align="left" valign="middle"><input type="text" name="landplace" id="landplace" size="25" class="input" /></td>
                      <td align="left" valign="middle">Telephone No: </td>
                      <td align="left" valign="middle">&nbsp;
                        <input type="text" name="landplace2" id="landplace2" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle" nowrap="nowrap" >&nbsp;</td> 
                      <td align="left" valign="middle" nowrap="nowrap">&nbsp;</td> 
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                
                  
                    

                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                      <td align="left" valign="middle"><select name="adultpas" id="adultpas" class="input" size:width="200" >
                          <option value=''>- select -</option>
                          <?php for($w=1; $w < 5; $w++) { ?>
                          <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td align="left" valign="middle"><strong>Children  (Age 2-11) : </strong></td>
                      <td align="left" valign="middle"><select name="childpas" id="childpas" class="input" size:width="200" >
                          <option value=''>- select -</option>
                          <?php for($w=1; $w < 5; $w++) { ?>
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
                      <td align="left" valign="middle"><select name="infantpas" id="infantpas" class="input" size:width="200" >
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
                <tr>
                  <td align="left" valign="top"><strong>Passengers Information 1 </strong></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="pas1name" id="pas1name" size="25" class="input" /></td>
                      <td width="18%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><input type="text" name="pas1sur" id="pas1sur" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">Data Of Birth : </td>
                      <td align="left" valign="middle"><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" readonly="readonly" />
                        &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  
                    
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><strong>Passengers Information 2 </strong></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="pas2name" id="pas2name" size="25" class="input" /></td>
                      <td width="18%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><input type="text" name="pas2sur" id="pas2sur" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle">Data Of Birth : </td>
                      <td align="left" valign="middle"><input type="text" name="pas2dob" id="pas2dob" size="25" class="input" readonly="readonly" />
                        &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas2dob','ddMMyyyy')"/></td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><strong>Passengers Information 3 </strong></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="pas3name" id="pas3name" size="25" class="input" /></td>
                      <td width="18%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><input type="text" name="pas3sur" id="pas3sur" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">Data Of Birth : </td>
                      <td align="left" valign="middle"><input type="text" name="pas3dob" id="pas3dob" size="25" class="input" readonly="readonly" />
                        &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas3dob','ddMMyyyy')"/></td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><strong>Passengers Information 4 </strong></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                      <td width="28%" align="left" valign="middle"class="txt"><input type="text" name="pas4name" id="pas4name" size="25" class="input" /></td>
                      <td width="18%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="30%" align="left" valign="middle"class="txt"><input type="text" name="pas4sur" id="pas4sur"  size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="19" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle">Data Of Birth : </td>
                      <td align="left" valign="middle"><input type="text" name="pas4dob" id="pas4dob" size="25" class="input" readonly="readonly" />
                        &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas4dob','ddMMyyyy')"/></td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="50" align="left" valign="top"><strong>Remarks or further passenger name/ surname /  date of birth and your personal wishes</strong></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><textarea name="otherpas" class="textarea"  cols="120" rows="5"></textarea></td>
                </tr>
            
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="50" align="center" valign="middle"><button name="reg" type="submit" class="submit button">Submit</button></td>
                      </tr>
                  </table></td>
                </tr>
              </table>
			  </form>
</div></td>
            <td align="right" valign="top">&nbsp;</td>
          </tr>
        </table></td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>          
          </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    </table></td>
  </tr>

				
			<?php 	}
			} ?>
<div id="backgroundChatPopup"></div>
<?php require_once 'footer.php'; ?>