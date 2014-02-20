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
    <td width='174' align='left' valign='middle'><strong>Departure Date </strong></td>
    <td width='175' height='40' align='left' valign='middle'>$deptdate</td>
    <td width='147' align='left' valign='middle'><strong>Arrival Date : </strong></td>
    <td width='204' align='left' valign='middle'>$arrdate</td>
  </tr>
  <tr>
    <td width='174' align='left' valign='middle'><strong>Dubai Days </strong></td>
    <td width='175' height='40' align='left' valign='middle'>$dubaidays</td>
    <td width='147' align='left' valign='middle'><strong>Srilanka Days : </strong></td>
    <td width='204' align='left' valign='middle'>$sridays</td>
  </tr>
  <tr>
    <td width='174' align='left' valign='middle'><strong>Male Days </strong></td>
    <td width='175' height='40' align='left' valign='middle'>$maledays</td>
    <td width='147' align='left' valign='middle'><strong>South India Days : </strong></td>
    <td width='204' align='left' valign='middle'>$southdays</td>
  </tr>
  <tr>
    <td width='174' align='left' valign='middle'><strong>Name </strong></td>
    <td width='175' height='40' align='left' valign='middle'>$user_name</td>
    <td width='147' align='left' valign='middle'><strong>&nbsp; </strong></td>
    <td width='204' align='left' valign='middle'>&nbsp;</td>
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Compi Tour </strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="suptitxt">Plan My Tour </td>
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
		<form name="combiinfo" method="post" action="" onsubmit="return combi_submit();">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" height="30" align="left" valign="middle"><strong>Depature Date</strong> : </td>
            <td width="26%" align="left" valign="middle"><label><strong>Arrival Date</strong> : </label></td>
            <td width="25%" align="left" valign="middle">&nbsp;</td>
            <td width="25%" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle"><p>
              <input type="text" name="deptdate" id="deptdate" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('deptdate','ddMMyyyy')"/>
            </p></td>
            <td align="left" valign="middle"><p>
              <input type="text" name="arrdate" id="arrdate" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('arrdate','ddMMyyyy')"/>
            </p></td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle"><strong>Dubai : </strong></td>
            <td align="left" valign="middle"><strong>Sir lanka : </strong></td>
            <td align="left" valign="middle"><strong>Male : </strong></td>
            <td align="left" valign="middle"><strong>South  India : </strong></td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle"><label>
              <select name="dubaidays" id="dubaidays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>
            Days</label></td>
            <td align="left" valign="middle"><select name="sridays" id="sridays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>             
              Days </td>
            <td align="left" valign="middle"><select name="maledays" id="maledays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>             
              Days </td>
            <td align="left" valign="middle"><select name="southdays" id="southdays" class="input" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select>            
              Days </td>
          </tr>
          <tr>
            <td height="19" align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" colspan="4" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                <td width="26%" align="left" valign="middle"class="txt">Surname : </td>
                <td width="25%" align="left" valign="middle"class="txt">Email Id : </td>
                <td width="25%" align="left" valign="middle"class="txt">Telephone / Mobile : </td>
              </tr>
              <tr>
                <td height="25" align="left" valign="middle"><input type="text" name="user_name" id="user_name" size="25" class="input" />                      </td>        </td>
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
				  <td align="left" valign="middle" nowrap="nowrap" ><input type="text" name="departure" id="departure" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('departure','ddMMyyyy')"/></td>&nbsp;
				  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="arrival" id="arrival" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('arrival','ddMMyyyy')"/></td>&nbsp;
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
            <td height="19" colspan="4" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" colspan="4" align="left" valign="middle"><strong>Passengers Information 1 </strong></td>
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
				  <td align="left" valign="middle"><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
				</tr>
			  
				
				<tr>
				  <td height="18" align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				</tr>
			  </table></td>
			</tr>
          <tr>
            <td height="19" colspan="4" align="left" valign="middle"><strong>Passengers Information 2 </strong></td>
          </tr>
          <tr>
			  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
				  <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
				  <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
				</tr>
				<tr>
				  <td height="25" align="left" valign="middle"><input type="text" name="pas2name" id="pas2name" size="25" class="input" />
				  </td>
				  <td align="left" valign="middle"><input type="text" name="pas2sur" id="pas2sur" size="25" class="input" /></td>
				  <td align="left" valign="middle"><input type="text" name="pas2dob" id="pas2dob" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas2dob','ddMMyyyy')"/></td>
				</tr>
				<tr>
				  <td height="18" align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				</tr>
			  </table></td>
			</tr>
          <tr>
            <td height="30" colspan="4" align="left" valign="middle"><strong>Passengers Information 3 </strong></td>
          </tr>
          <tr>
			  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
				  <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
				  <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
				</tr>
				<tr>
				  <td height="25" align="left" valign="middle"><input type="text" name="pas3name" id="pas3name" size="25" class="input" />
				  </td>
				  <td align="left" valign="middle"><input type="text" name="pas3sur" id="pas3sur" size="25" class="input" /></td>
				  <td align="left" valign="middle"><input type="text" name="pas3dob" id="pas3dob" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas3dob','ddMMyyyy')"/></td>
				</tr>
				<tr>
				  <td height="18" align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				</tr>
			  </table></td>
			</tr>
          <tr>
            <td height="30" colspan="4" align="left" valign="middle"><strong>Passengers Information 4 </strong></td>
          </tr>
          <tr>
			  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
				  <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
				  <td width="53%" align="left" valign="middle"class="txt">Data Of Birth : </td>
				</tr>
				<tr>
				  <td height="25" align="left" valign="middle"><input type="text" name="pas4name" id="pas4name" size="25" class="input" />
				  </td>
				  <td align="left" valign="middle"><input type="text" name="pas4sur" id="pas4sur"  size="25" class="input" /></td>
				  <td align="left" valign="middle"><input type="text" name="pas4dob" id="pas4dob" size="25" class="input" readonly />&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('pas4dob','ddMMyyyy')"/></td>
				</tr>
				<tr>
				  <td height="18" align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				  <td align="left" valign="middle">&nbsp;</td>
				</tr>
			  </table></td>
			</tr>
          <tr>
            <td height="30" colspan="4" align="left" valign="middle"><strong>Remarks or further passenger name/ surname /  date of birth and your personal wishes</strong></td>
          </tr>
          <tr>
            <td height="30" colspan="4" align="left" valign="middle"><textarea name="otherpas" class="textarea"  cols="120" rows="5"></textarea></td>
          </tr>
          <tr>
            <td height="35" colspan="4" align="center" valign="middle"><button name="reg" type="submit" class="submit button">Submit</button></td>
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
  
 
  <?php include 'footer.php'; ?>
