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
	
	$mail_content = "<table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='top'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                      <td width='23%' align='left' valign='middle'class='txt'></td>
                      <td width='23%' align='left' valign='middle'class='txt'>Email Id : </td>
                      <td width='30%' align='left' valign='middle'class='txt'>Telephone / Mobile : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$creden $user_name $surname</label></td>
                      <td align='left' valign='middle'><label > </label></td>
                      <td align='left' valign='middle'><label >$user_email</label></td>
                      <td align='left' valign='middle'><label >$mobilenum</label></td>
                    </tr>
                    <tr>
                      <td height='29' align='left' valign='middle'>Land : </td>
                      <td align='left' valign='middle'>Date of departure : </td>
                      <td align='left' valign='middle'>Date of arrival</td>
                      <td align='left' valign='middle'>Departure airport : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$landplace </label></td>
                      <td align='left' valign='middle'><label >$departure </label></td>
                      <td align='left' valign='middle'><label >$arrival </label></td>
                      <td align='left' valign='middle'><label >$depair </label></td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'>Destination/airport : </td>
                      <td align='left' valign='middle'>Currency : </td>
                      <td align='left' valign='middle'>Preferred airline : </td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$destair </label></td>
                      <td align='left' valign='middle'><label >$curr </label></td>
                      <td align='left' valign='middle'><label >$preair </label></td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                  
                    

                  </table></td>
                </tr>
                <tr>
                  <td align='left' valign='top'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='top'><strong>Passengers Information 1 </strong></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                      <td width='23%' align='left' valign='middle'class='txt'>Surname : </td>
                      <td width='53%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$pas1name </label></td>
                      <td align='left' valign='middle'><label >$pas1sur </label></td>
                      <td align='left' valign='middle'><label >$pas1dob </label></td>
                    </tr>
                  
                    
                    <tr>
                      <td height='18' align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><strong>Passengers Information 2 </strong></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                      <td width='23%' align='left' valign='middle'class='txt'>Surname : </td>
                      <td width='53%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$pas2name </label></td>
                      <td align='left' valign='middle'><label >$pas2sur </label></td>
                      <td align='left' valign='middle'><label >$pas2dob </label></td>
                    </tr>
                    <tr>
                      <td height='18' align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><strong>Passengers Information 3 </strong></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                      <td width='23%' align='left' valign='middle'class='txt'>Surname : </td>
                      <td width='53%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$pas3name </label></td>
                      <td align='left' valign='middle'><label >$pas3sur </label></td>
                      <td align='left' valign='middle'><label >$pas3dob </label></td>
                    </tr>
                    <tr>
                      <td height='18' align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><strong>Passengers Information 4 </strong></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td width='24%' height='25' align='left' valign='middle' class='txt'>Name : </td>
                      <td width='23%' align='left' valign='middle'class='txt'>Surname : </td>
                      <td width='53%' align='left' valign='middle'class='txt'>Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height='25' align='left' valign='middle'><label >$pas4name </label></td>
                      <td align='left' valign='middle'><label >$pas4sur </label></td>
                      <td align='left' valign='middle'><label >$pas4dob </label></td>
                    </tr>
                    <tr>
                      <td height='18' align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                      <td align='left' valign='middle'>&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height='50' align='left' valign='top'><strong>Additional Information</strong></td>
                </tr>
                <tr>
                  <td align='left' valign='top'><p >$otherpas</p></td>
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
            <td align="left" valign="top" class="suptitxt">&nbsp;</td>
            <td height="30" align="left" valign="top" class="suptitxt">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top"><div class="dbgg">
			<span style="background:yellow; height:20px;"><?php if(isset($msg) && $msg !='') {  echo $msg; unset($msg);        } ?></span>
			<form name="userinfo" method="post" action="" onsubmit="return vali_submit();">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                      <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="23%" align="left" valign="middle"class="txt">Email Id : </td>
                      <td width="30%" align="left" valign="middle"class="txt">Telephone / Mobile : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle">
                        
                          <input type="text" name="user_name" id="user_name" size="25" class="input" />                      </td>
                      <td align="left" valign="middle"><input type="text" name="surname" id="surname" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="user_email" id="user_email" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="mobilenum" id="mobilenum" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="29" align="left" valign="middle">Land : </td>
                      <td align="left" valign="middle">Date of departure : </td>
                      <td align="left" valign="middle">Date of arrival</td>
                      <td align="left" valign="middle">Departure airport : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="landplace" id="landplace" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="departure" id="departure" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="arrival" id="arrival" size="25" class="input" /></td>
                      <td align="left" valign="middle"><select name="depair" id="depair" class="input" style="width:200px">
                        <option value='' selected="selected">- select -</option>
                        <option value='Zurich'>Z&uuml;rich</option>
                        <option value='Basel'>Basel </option>
                        <option value='Geneva'>Geneva</option>
                        <option value='Frankfurt'>Frankfurt</option>
                        <option value='Milano'>Milano</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle">Destination/airport : </td>
                      <td align="left" valign="middle">Currency : </td>
                      <td align="left" valign="middle">Preferred airline : </td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="destair" id="destair" size="25" class="input" /></td>
                      <td align="left" valign="middle"><select name="curr" id="curr" class="input" style="width:200px">
                        <option value='' selected="selected">- select -</option>
                        <option value='CHF'>CHF</option>
                        <option value='EUR'>EUR</option>
                      </select></td>
                      <td align="left" valign="middle"><input type="text" name="preair" id="preair" size="25" class="input" /></td>
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
                      <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="pas1name" id="pas1name" size="25" class="input" />                      </td>
                      <td align="left" valign="middle"><input type="text" name="pas1sur" id="pas1sur" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" /></td>
                    </tr>
                  
                    
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
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
                      <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="pas2name" size="25" class="input" />
                      </td>
                      <td align="left" valign="middle"><input type="text" name="pas2sur" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="pas2dob" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
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
                      <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="pas3name" size="25" class="input" />
                      </td>
                      <td align="left" valign="middle"><input type="text" name="pas3sur" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="pas3dob" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
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
                      <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                      <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
                    </tr>
                    <tr>
                      <td height="25" align="left" valign="middle"><input type="text" name="pas4name" size="25" class="input" />
                      </td>
                      <td align="left" valign="middle"><input type="text" name="pas4sur" size="25" class="input" /></td>
                      <td align="left" valign="middle"><input type="text" name="pas4dob" size="25" class="input" /></td>
                    </tr>
                    <tr>
                      <td height="18" align="left" valign="middle">&nbsp;</td>
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