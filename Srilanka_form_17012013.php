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

	$selectCount		=	"SELECT * FROM ".TABLE_SRI." WHERE sri_id = '$sri_id'";
	$selectResult		=	mysql_query($selectCount) or die (mysql_error());
	$num				=	mysql_num_rows($selectResult);	
	
	$landbase			=	'';
	$waterbase			=	'';
	$courses			=	'';
	$wellbeingspa		=	'';

	$tourguidestr		=	implode(', ',$tourguide);
	$archaeostr			=	implode(', ',$archaeo);
	$templestr			=	implode(', ',$temple);
	$spiristr			=	implode(', ',$spiri);
	$speplacesanostr	=	implode(', ',$speplacesano);

	echo $addressbr			=	nl2br($address);

	//echo $addressbr			=	str_replace('<br />', "\n", $address);
	exit(0);

	$addmorebr			=	nl2br($addmore);

	$spewishbr			=	nl2br($spewish);

	$speplacesbr		=	nl2br($speplaces);

	$foodallbr			=	nl2br($foodall);

	$anyotherbr			=	nl2br($anyother);

	if(isset($ayurspa)) {
		$wellbeingspa		.=	$treatdays." ".$ayurspa." <br/>";
	} if(isset($massspa)) {
		$wellbeingspa		.=	$massdays." ".$massspa." <br/>";
	} 

	if(isset($trekbase)) {
		$landbase		.=	$trekdays." in ".$trekbase." <br/>";
	} if(isset($hikebase)) {
		$landbase		.=	$hikedays." in ".$hikebase." <br/>";
	} if(isset($campbase)) {
		$landbase		.=	$campdays." in ".$campbase." <br/>";
	} if(isset($birdbase)) {
		$landbase		.=	$birdbase . " <br/>";
	} if(isset($jeepbase)) {
		$landbase		.=	$jeepbase . " <br/>";
	} if(isset($elebase)) {
		$landbase		.=	$elebase . " <br/>";
	} if(isset($turbase)) {
		$landbase		.=	$turbase;
	}

	if(isset($whitebase)) {
		$waterbase		.=	$whitebase." <br/>";
	} if(isset($canbase)) {
		$waterbase		.=	$candays." in ".$canbase." <br/>";
	} if(isset($surfbase)) {
		$waterbase		.=	$surfdays." in ".$surfbase." <br/>";
	} if(isset($scubabase)) {
		$waterbase		.=	$scubadays." in ".$scubabase." <br/>";
	} if(isset($snorkbase)) {
		$waterbase		.=	$snorkdays." in ".$snorkbase." <br/>";
	} if(isset($jetdays)) {
		$waterbase		.=	$jetdays." in ".$jetbase." <br/>";
	} if(isset($whalebase)) {
		$waterbase		.=	$whalebase." <br/>";
	} if(isset($recrbase)) {
		$waterbase		.=	$recrbase." <br/>";
	} if(isset($totalbase)) {
		$waterbase		.=	$totaldays." in ".$totalbase;
	}
	
	if(isset($scubacourse)) {
		$courses		.=	$scubalearn." in ".$scubacourse." <br/>";
	} if(isset($surfcourse)) {
		$courses		.=	$surflearn." in ".$surfcourse." ";
	}

	if($noofdays == '') {
		$noofdays		=		0;
	}
	if($dubaidays == '') {
		$dubaidays		=		0;
	}
	if($maledays == '') {
		$maledays 		=		0;
	}

	$mail_content = "<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
  
  <tr>
    <td width='154' align='left' valign='middle'><strong>Kind of Trip : </strong></td>
    <td width='195' height='40' align='left' valign='middle'>$kindtrip</td>
    <td width='147' align='left' valign='middle'><strong>&nbsp;</strong></td>
    <td width='204' align='left' valign='middle'>&nbsp;</td>
  </tr>
  <tr>
    <td width='154' align='left' valign='middle' nowrap='nowrap'><strong>Departure  date : </strong></td>
    <td width='195' height='40' align='left' valign='middle' nowrap='nowrap'>$deptdate</td>
    <td width='147' align='left' valign='middle' nowrap='nowrap'><strong>Travel  flexibility : </strong></td>
    <td width='204' align='left' valign='middle' nowrap='nowrap'>$traflex</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Return  date : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$retdate</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Preferred  Airport : </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$preair</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Contact Details</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$user_name</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Surname : </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$surname</td>
  </tr>

  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Address : </strong></td>
    <td height='40' colspan='3' align='left' valign='middle' nowrap='nowrap'>$addressbr</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Telephone No : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$telnum</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Mobile No : </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$mobnum</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>E-Mail Id :</strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$user_email</td>
    <td align='left' valign='middle' ><strong>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Adult Passengers :</strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$adultpas</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Child passenger :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$childpas</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Infant Passengers :</strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$infantpas</td>
    <td align='left' valign='middle'></td>
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
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
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
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
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
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
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
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas4dob</td>
  </tr>

  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Passenger 5 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Mr &amp; Mrs </strong></td>
    <td height='40' align='left' valign='middle'>$pas5cre</td>
    <td align='left' valign='middle'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$pas5name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$pas5sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$pas5dob</td>
  </tr>

  

  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Children 1 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Master &amp; Ms. </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$chi1cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle'>$chi1name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$chi1sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$chi1dob</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Children 2 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Master &amp; Ms. </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$chi2cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$chi2name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$chi2sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$chi2dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Children 3 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Master &amp; Ms. </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$chi3cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$chi3name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$chi3sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$chi3dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle' ><strong>Children 4 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Master &amp; Ms. </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$chi4cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$chi4name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$chi4sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$chi4dob</td>
  </tr>

  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Children 5 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Master &amp; Ms. </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$chi5cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$chi5name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$chi5sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$chi5dob</td>
  </tr>





<tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Infant 1 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Baby Boy &amp; Girl </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$inf1cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$inf1name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$inf1sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$inf1dob</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Infant 2 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Baby Boiy &amp; Girl </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$inf2cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$inf2name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$inf2sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$inf2dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Infant 3 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Baby Boy &amp; Girl </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$inf3cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$inf3name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$inf3sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$inf3dob</td>
  </tr>
  
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Infant 4 </strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Baby Boy &amp; Girl </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$inf4cre</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Name :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$inf4name</td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Surname : </strong></td>
    <td height='40' align='left' valign='middle'>$inf4sur</td>
    <td align='left' valign='middle'><strong>Date Of Birth :</strong></td>
    <td align='left' valign='middle'>$inf4dob</td>
  </tr>

<tr>
	<td align='left' valign='middle' nowrap='nowrap'><strong>Add More Passengers: </strong></td>
    <td height='40' colspan='3' align='left' valign='middle' nowrap='nowrap'>$addmorebr</td>
  </tr>

  <tr>
	<td align='left' valign='middle' nowrap='nowrap'><strong>Special Wishes & Rem.: </strong></td>
    <td height='40' colspan='3' align='left' valign='middle' nowrap='nowrap'>$spewishbr</td>
  </tr>



  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Main Destination - Srilanka</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>No of Days in Srilanka:</strong></td>
    <td height='40' align='left' valign='middle'>$noofdays</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Add another country to your tour: you can add Dubai or/and Maldives to your  tour</strong></td>
  </tr>
  <tr>
    <td align='left' valign='middle'><strong>Dubai :</strong></td>
    <td height='40' align='left' valign='middle'>$dubaidays</td>
    <td align='left' valign='middle'><strong>Maldives : </strong></td>
    <td align='left' valign='middle'>$maledays</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'><strong>Choose your place of interest, activities and cities (download price list here)</strong></td>
  </tr>

  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Land  Based : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$landbase</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Water  Based :</strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$waterbase</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Air  Based :</strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$airbase</td>
    <td align='left' valign='middle'><strong nowrap='nowrap'>Special Courses for learners: </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$courses</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Archaeological sites : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$archaeostr</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Religious : </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$templestr</td>
  </tr>
  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Spiritual : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$spiristr</td>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Physical Well Being : </strong></td>
    <td align='left' valign='middle' nowrap='nowrap'>$wellbeingspa</td>
  </tr>

  <tr>
    <td align='left' valign='middle' nowrap='nowrap'><strong>Special Places : </strong></td>
    <td height='40' align='left' valign='middle' nowrap='nowrap'>$speplacesanostr</td>
    <td align='left' valign='middle'>&nbsp;</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

  <tr>
    <td align='left' valign='middle'><strong>Visit Order 1 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day1count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day1city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

  <tr>
    <td align='left' valign='middle'><strong>Visit Order 2 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day2count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day2city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

  <tr>
    <td align='left' valign='middle'><strong>Visit Order 3 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day3count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day3city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 4 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day4count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day4city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 5 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day5count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day5city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 6 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day6count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day6city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 7 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day7count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day7city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 8 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day8count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day8city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 9 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day9count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day9city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 10 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day10count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day10city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 11 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day11count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day11city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 12 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day12count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day12city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 13 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day13count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day13city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 14 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day14count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day14city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 15 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day15count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day15city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

 <tr>
    <td align='left' valign='middle'><strong>Visit Order 16 : </strong></td>
    <td height='40' align='left' valign='middle' align='middle' nowrap='nowrap'>$day16count&nbsp;in&nbsp;</td>
    <td align='left' valign='middle'>$day16city</td>
    <td align='left' valign='middle'>&nbsp;</td>
  </tr>

<tr>
	<td align='left' valign='middle' nowrap='nowrap'><strong>Other special places, activities, events or services that you wish for your tour: </strong></td>
    <td height='40' colspan='3' align='left' valign='middle' nowrap='nowrap'>$speplacesbr</td>
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
    <td align='left' valign='middle'><strong>Preferred Tour guide&nbsp;: </strong></td>
    <td height='40' colspan='3' align='left' valign='middle'>$tourguidestr</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='top'>If  a passenger has any physical disabilities requiring special    attention/arrangements to be made please give details specifying the   kind of  special arrangements to be made at destination hotel/s and in   vehicle.<br />
    Food  allergies if any should be provided in detail in order to advise hotel/s.</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>$foodallbr</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>ANY OTHER INFORMATION YOU COULD PROVIDE THAT MIGHT HELP US MAKE YOUR    STAY AT CHOSEN DESTINATION/S AND OR COUNTRIES MORE COMFORTABLE</td>
  </tr>
  <tr>
    <td height='40' colspan='4' align='left' valign='middle'>$anyotherbr</td>
  </tr>
</table>";

	$row = mysql_fetch_array($selectResult);
	$tour_name				=		$row['tour_name'];

	$argFromEmailAddress	=	'noreply@swisstravels.ch';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'noreply@swisstravels.ch';
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
	$funheaders				.= "Return-Path: noreply@swisstravels.ch\n";
	$funheaders				.= "Sender: info@swisstravels.ch\n";
	$argheaders				= $funheaders;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);

	if (mail($argToEmailAddress, $argUserSubject, $argUserMessage, $argheaders)) { $funValue = 'yes'; }//if
	
	$argFromEmailAddress	=	'info@swisstravels.ch';
	$argToEmailAddress		=	$user_email;
	$argReplyToEmailAddress	=	'info@swisstravels.ch';
	
	$argAdminFromEmailAddress		= preg_replace("/\n/", "", $argFromEmailAddress);
	$argAdminReplyToEmailAddress	= preg_replace("/\n/", "", $argReplyToEmailAddress);
	$funheadersAdmin				.= "MIME-Version: 1.0\n";
	$funheadersAdmin				.= "Content-type: text/html\n";
	$funheadersAdmin				.= "From: " .$argAdminFromEmailAddress."\n";
	$funheadersAdmin				.= "Reply-To: ".$argAdminReplyToEmailAddress."\n";
	$funheadersAdmin				.= "Return-Path: info@swisstravels.ch\n";
	$funheadersAdmin				.= "Sender: info@swisstravels.ch\n";
	$argheadersAdmin				= $funheadersAdmin;
	$argToEmailAddress		= preg_replace("/\n/", "", $argToEmailAddress);
	
	//echo $argToEmailAddress."<br>".$argSubject."<br>".$argMessage."<br>".$argheadersAdmin;
	if (mail($argToEmailAddress, $argSubject, $argMessage, $argheadersAdmin)) { $funValue = 'yes'; }//if

}


$selectCount	=	"SELECT * from ".TABLE_SRI." WHERE sri_status = '1' and sri_id = '$sri_id'";
			//$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			//$num			=	mysql_num_rows($selectResult);	
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
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="82%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Plan My SriLanka Tour</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="99%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="76" align="left" valign="top"><div align="justify">
              <p>
                With the belowcustomized “PLAN MY SRI LANKA TOUR” form you can plan your Sri Lanka tour according to your interest and budget. Based on the information that you provide in this form our team will send you a no obligation price quote with the tour itinerary. Any time you can make changes in your customized tour itinerary (please note: prices might increase or decrease when changes are made). 
If you do not receive within 5 working days any communication from our team please contact us on (+41) 062 752 00 11. There might have been a technical error during the submission of your form.</p>
              </div></td>
          </tr>
        </table></td>
        <td width="0%" align="left" valign="top" class="txt">&nbsp;</td>
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
          <form name="sriinfo" method="post" action="" onsubmit="return plan_sri_submit();">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="20%" height="30" align="left" valign="middle"><strong>Kind of Trip : </strong></td>
                  <td width="34%" align="left" valign="middle"><select name="kindtrip" id="kindtrip" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Round Trip' >Round Trip</option>
                    <option value='Honeymoon'>Honeymoon</option>
                    <option value='Beach Holiday'>Beach Holiday</option>
					<option value='Mixed Customized Trip'>Mixed Customized Trip</option>
                  </select></td>
                  <td width="15%" align="left" valign="middle">&nbsp;</td>
                  <td width="31%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 1.<strong></span></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="left" valign="middle"><strong>Departure date : </strong></td>
                  <td align="left" valign="middle"><input type="text" name="deptdate" id="deptdate" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('deptdate','ddMMyyyy')"/></td>
                  <td align="left" valign="middle"><strong>Travel flexibility : </strong></td>
                  <td height="30" align="left" valign="middle"><select name="traflex" id="traflex" class="input" style="width:200px">
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
                  <td height="30" align="left" valign="middle"><strong>Return date : </strong>
                    </td>
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
               
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><span style="color:#FF3A3A;"><strong>Step 2.<strong></span></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="25" align="left" valign="middle" class="txt">Name : </td>
                  <td width="21%" align="left" valign="middle"class="txt"><input type="text" name="user_name" id="user_name" size="25" class="input" /></td>
                  <td width="23%" align="left" valign="middle"class="txt">Surname : </td>
                  <td width="32%" align="left" valign="middle"class="txt"><input type="text" name="surname" id="surname" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td height="19" align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="middle"><label></label></td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>

				<tr>
				  <td height="25" align="left" valign="top">Address *: </td>
				  <td colspan='3' align="left" valign="top"><textarea name="address" id="address" class="textarea"  cols="120" rows="5"></textarea></td>
				</tr>
				
				<tr>
                  <td height="19" align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>

				<tr>
				  <td height="29" align="left" valign="middle">Telephone No *:</td>
				  <td align="left" valign="middle"><input type="text" name="telnum" id="telnum" size="25" class="input" /></td>
				  <td align="left" valign="middle">Mobile No *: </td>
				  <td align="left" valign="middle"><input type="text" name="mobnum" id="mobnum" size="25" class="input" /></td>
				</tr>
				
				<tr>
                  <td height="19" align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>

				<tr>
				  <td height="19" align="left" valign="middle"> Email Address *:   </td>
				  <td align="left" valign="middle"><input type="text" name="user_email" id="user_email" size="25" class="input" /></td>
				  <td align="left" valign="middle">Re-enter  e-mail address *:</td>
				  <td align="left" valign="middle"><input type="text" name="re_user_email" id="re_user_email" size="25" class="input" /></td>
				</tr>

                <tr>
                  <td colspan="4" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" align="left" valign="middle"><span style="color:#FF3A3A;"><strong>Step 3. Please enter the names exactly as they are in the passport <strong></span></td>
                </tr>
                <tr>
                  <td colspan="4" align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="20%" height="25" align="left" valign="middle"><strong>Passenger</strong></td>
                  <td width="17%" align="left" valign="middle">&nbsp;</td>
                  <td width="17%" align="left" valign="middle">&nbsp;</td>
                  <td width="46%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Adult  (+12) : </strong></td>
                  <td align="left" valign="middle"><select name="adultpas" id="adultpas" class="numb" size:width="200" onChange="showPass(this.value);" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 6; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
								<?php } ?>
								</select></td>
                  <td align="left" valign="middle"><strong>Children  (Age 2-11) : </strong></td>
                  <td align="left" valign="middle"><select name="childpas" id="childpas" class="numb" size:width="200" onchange="showChild(this.value);">
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
                  <td align="left" valign="middle"><select name="infantpas" id="infantpas" class="numb" size:width="200" onChange="showInfant(this.value);">
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Mr / Mrs : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="pas1cre" id="pas1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="pas1name" id="pas1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas1sur" id="pas1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap" >Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Mr / Mrs : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="pas2cre" id="pas2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="pas2name" id="pas2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas2sur" id="pas2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="pas2dob" id="pas2dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Mr / Mrs : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="pas3cre" id="pas3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="pas3name" id="pas3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas3sur" id="pas3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="pas3dob" id="pas3dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Mr / Mrs : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="pas4cre" id="pas4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="pas4name" id="pas4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="19" align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas4sur" id="pas4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="pas4dob" id="pas4dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Mr / Mrs : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="pas5cre" id="pas5cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Mr.'>Mr.</option>
                    <option value='Mrs.'>Mrs.</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="pas5name" id="pas5name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="19" align="left" valign="middle" nowrap='nowrap'><input type="text" name="pas5sur" id="pas5sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="pas4dob" id="pas5dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Master / Miss : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="chi1cre" id="chi1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Master'>Master</option>
                    <option value='Miss' >Miss</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="chi1name" id="chi1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi1sur" id="chi1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="chi1dob" id="chi1dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Master / Miss : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="chi2cre" id="chi2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Master'>Master</option>
                    <option value='Miss'>Miss</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="chi2name" id="chi2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi2sur" id="chi2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="chi2dob" id="chi2dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Master / Miss : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="chi3cre" id="chi3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Master'>Master</option>
                    <option value='Miss'>Miss</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="chi3name" id="chi3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi3sur" id="chi3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="chi3dob" id="chi3dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Master / Miss : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="chi4cre" id="chi4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Master'>Master</option>
                    <option value='Miss'>Miss</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="chi4name" id="chi4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="19" align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi4sur" id="chi4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="chi4dob" id="chi4dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Master / Miss : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="chi5cre" id="chi5cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Master'>Master</option>
                    <option value='Miss'>Miss</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="chi5name" id="chi5name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="19" align="left" valign="middle" nowrap='nowrap'><input type="text" name="chi5sur" id="chi5sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="chi5dob" id="chi5dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Baby Boy / Girl : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="inf1cre" id="inf1cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Baby Boy'>Baby Boy</option>
                    <option value='Baby Girl' >Baby Girl</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="inf1name" id="inf1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp; </td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf1sur" id="inf1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="inf1dob" id="inf1dob" size="25" class="input" readonly />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Baby Boy / Girl : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="inf2cre" id="inf2cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Baby Boy'>Baby Boy</option>
                    <option value='Baby Girl'>Baby Girl</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="inf2name" id="inf2name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf2sur" id="inf2sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="inf2dob" id="inf2dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Baby Boy / Girl : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="inf3cre" id="inf3cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Baby Boy'>Baby Boy</option>
                    <option value='Baby Girl'>Baby Girl</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="inf3name" id="inf3name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="25" align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf3sur" id="inf3sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="inf3dob" id="inf3dob" size="25" class="input" readonly="readonly" />
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
                  <td width="19%" align="left" valign="middle" class="txt" nowrap='nowrap'>Baby Boy / Girl : </td>
                  <td width="25%" height="25" align="left" valign="middle" class="txt" nowrap='nowrap'><select name="inf4cre" id="inf4cre" class="input" style="width:200px">
                    <option value=''>- select -</option>
                    <option value='Baby Boy'>Baby Boy</option>
                    <option value='Baby Girl'>Baby Girl</option>
                  </select></td>
                  <td width="19%" align="left" valign="middle"class="txt" nowrap='nowrap'>Name : </td>
                  <td width="37%" align="left" valign="middle"class="txt" nowrap='nowrap'><input type="text" name="inf4name" id="inf4name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="25" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" nowrap='nowrap'>Surname : </td>
                  <td height="19" align="left" valign="middle" nowrap='nowrap'><input type="text" name="inf4sur" id="inf4sur" size="25" class="input" /></td>
                  <td align="left" valign="middle" nowrap="nowrap">Date Of Birth : </td>
                  <td align="left" valign="middle" nowrap="nowrap"><input type="text" name="inf4dob" id="inf4dob" size="25" class="input" readonly />
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
                  <td width="20%" align="left" valign="middle" class="txt"><p><strong>Add more passengers</strong></p></td>
                  <td width="29%" height="25" align="left" valign="middle" class="txt"><p>
                    <input type="text" name="addmore" id="addmore" size="25" class="input" />
                  </p></td>
                  <td width="26%" align="left" valign="middle"class="txt">&nbsp;</td>
                  <td width="25%" align="left" valign="middle"class="txt">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                  <td height="19" colspan="3" align="left" valign="middle">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="left" valign="top"><strong>Special Wishes &amp;  rem.</strong></td>
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
                
				<!--<tr>
                  <td align="left" valign="top" class="txt">Main Destination</td>
                  <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
                </tr>-->

                <tr>
                  <td height="30" colspan="4" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                    <tr>
                      <td align="left" valign="top">Main Destination</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><span style="color:#FF3A3A;"><strong>Step 4. <strong></span></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" class="rtxtr">Srilanka</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                   
					
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="20%" align="left" valign="middle">No of Days :</td>
                          <td width="17%" align="left" valign="middle" class="txt"><select name="noofdays" id="noofdays" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 61; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>                          </td>
                          <td width="63%" height="35" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <?php /*for($w=1; $w < 61; $w++) { 
							echo $w; ?>'&gt;<?php echo $w; 
                        <?php } */?>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle" class="txt">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><strong>Add another country to your tour: you can add Dubai or/and Maldives to your  tour</strong></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="20%" height="25" align="left" valign="top" class="txt">Dubai :</td>
                            <td width="21%" height="25" align="left" valign="top" class="txt"><select name="dubaidays" id="dubaidays" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 61; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>                              
                              days</td>
                            <td width="44%" height="30" align="left" valign="middle"class="txt">If you wish to make a stopover in Dubai</td>
                            <td width="15%" height="30" align="left" valign="top"class="txt">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Male :</td>
                            <td height="19" align="left" valign="middle"><select name="maledays" id="maledays" class="numb" size:width="200" >
                                <option value=''>- select -</option>
								<?php for($w=1; $w < 61; $w++) { 
								if($w  == 1) { ?>
								<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
								<?php }  else { ?>
                                <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
								<?php } } ?>
								</select>
                              days </td>
                            <td align="left" valign="middle">If you wish to make a stopover in Maldives</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="19" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                       
                          <tr>
                            <td height="30" colspan="4" align="left" valign="middle" class="txt"><span style="color:#FF3A3A;"><strong>Step 5. Choose your place of interest, activities and cities (download price list here) </strong></span></td>
                          </tr>
                          <tr>
                            <td height="19" colspan="4" align="left" valign="middle" class="txt">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    
					 <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="19%" height="31" align="left" valign="top" class="txt" nowrap='nowrap'>Land  Based :</td>
                            <td height="31" colspan="3" align="left" valign="top" nowrap="nowrap" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="29%" height="31" align="left" valign="middle" class="txt"><select name="trekdays" id="trekdays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
									
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php } else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php }  } ?>
                                  </select>
                                    <input type="checkbox" name="trekbase" id="trekbase" value="Trecking"/>
                                  Trecking </td>
                                <td width="29%" align="left" valign="middle" class="txt"><select name="hikedays" id="hikedays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
										
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days' ><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="hikebase" id="hikebase" value="Hiking"/>
                                  Hiking</td>
                                <td width="29%" align="left" valign="middle" class="txt"><select name="campdays" id="campdays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
										
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="campbase" id="campbase" value="Camping"/>
                                  Camping </td>
                                <td width="13%" align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31" align="left" valign="middle" class="txt"><input type="checkbox" name="birdbase" id="birdbase" value="Bird Watching"/>
                                  Bird Watching</td>
                                <td align="left" valign="middle" class="txt"><input type="checkbox" name="jeepbase" id="jeepbase" value="Jeep Safari (Yala National Park/Minneriya National Park)"/>
                                  Jeep Safari (Yala National<br />
                                  Park/Minneriya National Park) </td>
                                <td align="left" valign="middle" class="txt"><input type="checkbox" name="elebase" id="elebase" value="Elephant Orphanage (pinnawala)"/>
                                  Elephant Orphanage <br />
                                  (pinnawala)</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31" align="left" valign="middle" class="txt"><input type="checkbox" name="turbase" id="turbase" value="Turtle farm (Hikkaduwa)"/>
                                  Turtle farm 
                                  (Hikkaduwa)</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>

							
							<!-- Start of This is added today 18/01/2013 -->
							<tr>
							  <td height="19" align="left" valign="top" class="txt" nowrap='nowrap'>&nbsp;</td>
							  <td height="19" colspan="3" align="left" valign="top" nowrap="nowrap" class="txt"></td>
							  </tr>
							<tr>
							  <td height="19" align="left" valign="top" class="txt" nowrap='nowrap'>&nbsp;</td>
							  <td height="19" colspan="3" align="left" valign="top" nowrap="nowrap" class="txt"></td>
							  </tr>
							<tr>
                            <td width="19%" height="31" align="left" valign="top" class="txt" nowrap='nowrap'>Water Based :</td>
                            <td height="31" colspan="3" align="left" valign="top" nowrap="nowrap" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="25%" height="31" align="left" valign="middle" class="txt"><input type="checkbox" name="whitebase" id="whitebase" value="White Water Rafting"/>
                                  White Water Rafting</td>
                                <td width="28%" align="left" valign="middle"><select name="candays" id="candays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
								
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="canbase" id="canbase" value="Canoeing"/>
                                  Canoeing </td>
                                <td width="25%" align="left" valign="middle" class="txt"><select name="surfdays" id="surfdays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
										
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="surfbase" id="surfbase" value="Surfing"/>
                                  Surfing</td>
                                <td width="22%" align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" colspan="2" align="left" valign="middle"><select name="scubadays" id="scubadays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
									
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php }  } ?>
                                  </select>
                                    <input type="checkbox" name="scubabase" id="scubabase" value="Scuba Diving (licence required)"/>
                                  Scuba Diving (licence required)</td>
                                <td align="left" valign="middle"><select name="snorkdays" id="snorkdays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
									
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="snorkbase" id="snorkbase" value="Snorkelling"/>
                                  Snorkelling</td>
                                <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31" align="left" valign="middle" class="txt"><select name="jetdays" id="jetdays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
									
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="jetbase" id="jetbase" value="Jet Skiing"/>
                                  Jet Skiing </td>
                                <td align="left" valign="middle"><input type="checkbox" name="whalebase" id="whalebase" value="Whale/Dolphin Watching"/>
                                  Whale/Dolphin Watching</td>
                                <td align="left" valign="middle" class="txt"><input type="checkbox" name="recrbase" id="recrbase" value="Recreational Fishing"/>
                                  Recreational Fishing</td>
                                <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                                <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31" colspan="2" align="left" valign="middle" class="txt"><select name="totaldays" id="totaldays" class="numb" size:width="200" >
                                    <option value=''>- select -</option>
                                    <?php for($w=1; $w < 16; $w++) { 
									
									if($w  == 1) { ?>
									<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
									<?php }  else { ?>
                                    <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                    <?php } } ?>
                                  </select>
                                    <input type="checkbox" name="totalbase" id="totalbase" value="Total days at the beach (with or without activities)"/>
                                  Total days at the beach (with or without activities)</td>
                                <td align="left" valign="middle" class="txt"><br /></td>
                                <td align="left" valign="middle" class="txt">&nbsp;</td>
                              </tr>
                            </table></td>
							</tr>

							<!-- End of This is added today 18/01/2013 -->



                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td width="35%" height="25" align="left" valign="middle">&nbsp;</td>
                            <td width="22%" align="left" valign="middle">&nbsp;</td>
                            <td width="24%" align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="25" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Air  Based :</td>
                            <td height="25" align="left" valign="middle"><select name="airbase" id="airbase" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='Hot Air Ballooning'>Hot Air Ballooning</option>
                            </select></td>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td height="25" align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Special Courses for learners:</td>
                            <td height="25" align="left" valign="middle"><select name="scubalearn" id="scubalearn" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>
                              <input type="checkbox" name="scubacourse" id="scubacourse" value="Scuba Diving (min. 5 days)"/>
                              Scuba Diving (min. 5 days)</td>
                            <td align="left" valign="top"><select name="surflearn" id="surflearn" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>
                              <input type="checkbox" name="surfcourse" id="surfcourse" value="Surfing"/>
Surfing</td>
                            <td align="left" valign="middle">&nbsp;</td>
                          </tr>
                          <!--<tr>
                            <td height="19" colspan="4" align="left" valign="top" class="txt"><div align="justify">If  a passenger has any physical disabilities requiring special attention/arrangements to be made please give details specifying the kind of  special arrangements to be made at destination hotel/s and in vehicle.<br />
                                    <br />
                              Food  allergies if any should be provided in detail in order to advise hotel/s.<br />
                              <br />
                            </div></td>
                          </tr>-->
                      </table></td>
                    </tr>
                    <!--<tr>
                      <td height="57" align="left" valign="middle"><textarea name="foodall" id="foodall" cols="70" class="textarea"></textarea></td>
                    </tr>-->
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="19%" align="left" valign="top">Archaeological sites :</td>
                          <td width="81%" height="35" align="left" valign="middle"><input type="checkbox" name="archaeo[]" id="archaeo" value="Anuradhapura"/>Anuradhapura
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Polonnaruwa"/>Polonnaruwa
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Dambulla Rock Temple"/>Dambulla Rock Temple
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Sigiriya"/>Sigiriya
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Alu Vihara Cave Temple"/>Alu Vihara Cave Temple
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Mihintale"/>Mihintale
							<br />
							<input type="checkbox" name="archaeo[]" id="archaeo" value="Kandy"/>Kandy</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Religious :</td>
                          <td height="35" align="left" valign="middle"><input type="checkbox" name="temple[]" id="temple" value="Hindu temple"/>Hindu temple
							<input type="checkbox" name="temple[]" id="temple" value="Ramayana Temples"/>Ramayana Temples
							<input type="checkbox" name="temple[]" id="temple" value="Buddhist Temples"/>Buddhist Temples
							<input type="checkbox" name="temple[]" id="temple" value="Christian Churches"/>Christian Churches</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Spiritual :</td>
                          <td height="35" align="left" valign="middle"><input type="checkbox" name="spiri[]" id="spiri" value="Meditation"/>Meditation
							<input type="checkbox" name="spiri[]" id="spiri" value="Yoga"/>Yoga</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Wellness &amp; SPA :</td>
                          <td height="31" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="40%" height="31" align="left" valign="middle"><select name="treatdays" id="treatdays" class="numb" size:width="200" >
                                <option value=''>- select -</option>
                                <?php for($w=1; $w < 16; $w++) { 
								
								if($w  == 1) { ?>
								<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
								<?php }  else { ?>								
                                <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                <?php } } ?>
                              </select>
                                <input type="checkbox" name="ayurspa" id="ayurspa" value="Ayurveda Treatments"/>
Ayurveda Treatments</td>
                              <td width="60%" align="left" valign="middle"><select name="massdays" id="massdays" class="numb" size:width="200" >
                                <option value=''>- select -</option>
                                <?php for($w=1; $w < 16; $w++) { 
								if($w  == 1) { ?>
								<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
								<?php }  else { ?>
                                <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                                <?php } } ?>
                              </select>
                                <input type="checkbox" name="massspa" id="massspa" value="Ayurveda massage"/>
Ayurveda massage</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Special Places :</td>
                          <td height="35" align="left" valign="middle"><input type="checkbox" name="speplacesano[]" id="speplacesano" value="Tea Plantations"/>Tea Plantations
							<input type="checkbox" name="speplacesano[]" id="speplacesano" value="Diamond Mine"/>Diamond Mine</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td height="19" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">Please Choose the city that you wish to visit.</td>

					  <!--<td>Please Choose the visit order in which you wish to visit.</td>-->
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>

					

                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
					  <td width="19%" height="30" align="left" valign="middle" class="txt">Visit Orders:</td>
                      <td width="36%" align="left" valign="middle"><select name="visitorder" id="visitorder" class="numb" size:width="200" onChange="showVisitOrder(this.value);" >
                                <option value=''>- select -</option>
                                <?php for($w=1; $w < 17; $w++) { ?>
                                <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                                <?php } ?>
                              </select>
					  </td>
					  <td >&nbsp;</td>
					  <td width="10%" align="left" valign="middle">&nbsp;</td>
                      <td width="35%" align="left" valign="middle">&nbsp;</td>
                    </tr>


					<tr id='visithead' class='shownone'>
					  <td width="19%" height="30" align="left" valign="middle" class="txt" nowrap='nowrap'>Visiting Sequence:</td>
                      <td width="36%" align="left" valign="middle" nowrap='nowrap'>How Many Days
					  </td>
					  <td nowrap='nowrap'>Cities</td>
					  <td width="10%" align="left" valign="middle">&nbsp;</td>
                      <td width="35%" align="left" valign="middle">&nbsp;</td>
                    </tr>
						
						
						<tr id="day1" class="shownone">
                          <td width="19%" height="30" align="left" valign="middle" class="txt" nowrap='nowrap'>Visit Order 1 : </td>
                          <td width="36%" align="left" valign="middle" nowrap='nowrap'><select name="day1count" id="day1count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>&nbsp;in&nbsp;
							 </td>
							<td>
							<select name="day1city" id="day1city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>		</td>
                          <td width="10%" align="left" valign="middle">&nbsp;</td>
                          <td width="35%" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit2" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day2" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap'>Visit Order 2 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day2count" id="day2count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>
							
							&nbsp;in&nbsp;

                              <select name="day2city" id="day2city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit3" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day3" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap'>Visit Order 3 :                            </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day3count" id="day3count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day3city" id="day3city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit4" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day4" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap'>Visit Order 4 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day4count" id="day4count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							   if($w  == 1) { ?>
							   <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							   <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day4city" id="day4city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit5" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day5" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap'>Visit Order 5 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day5count" id="day5count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day5city" id="day5city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit6" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day6" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 6 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day6count" id="day6count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day6city" id="day6city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit7" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day7" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap' >Visit Order 7 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day7count" id="day7count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day7city" id="day7city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit8" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day8" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 8 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day8count" id="day8count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day8city" id="day8city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit9" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day9" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap' >Visit Order 9 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day9count" id="day9count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
						    if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day9city" id="day9city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit10" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day10" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 10 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day10count" id="day10count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day10city" id="day10city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit11" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day11" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap' >Visit Order 11 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day11count" id="day11count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day11city" id="day11city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit12" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day12" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 12 :</td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day12count" id="day12count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day12city" id="day12city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit13" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day13" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap' >Visit Order 13 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day13count" id="day13count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

                            <select name="day13city" id="day13city" class="input" size:width="200" >
                              <option value=''>- select -</option>
                              <?php foreach($sri_city as $cityval) { ?>
                              <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                              <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit14" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day14" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 14 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day14count" id="day14count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day14city" id="day14city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
                                <?php } ?>
                            </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit15" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day15" class="shownone">
                          <td height="30" align="left" valign="middle" class="txt" nowrap='nowrap' >Visit Order 15 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day15count" id="day15count" class="numb" size:width="200" >
							<option value=''>- select -</option>
							<?php for($w=1; $w < 16; $w++) { 
							if($w  == 1) { ?>
							<option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							<?php }  else { ?>
							<option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
							<?php } } ?>
							</select>

							&nbsp;in&nbsp;

							<select name="day15city" id="day15city" class="input" size:width="200" >
							<option value=''>- select -</option>
							<?php foreach($sri_city as $cityval) { ?>
							<option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
							<?php } ?>
							</select>	</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="visit16" class="shownone">
                          <td height="19" align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr id="day16" class="shownone">
                          <td height="30" align="left" valign="middle" nowrap='nowrap' >Visit Order 16 : </td>
                          <td align="left" valign="middle" nowrap='nowrap'><select name="day16count" id="day16count" class="numb" size:width="200" >
                              <option value=''>- select -</option>
                              <?php for($w=1; $w < 16; $w++) { 
							  if($w  == 1) { ?>
							  <option value='<?php echo $w; ?> Day'><?php echo $w." Day"; ?></option>
							  <?php }  else { ?>
                              <option value='<?php echo $w; ?> Days'><?php echo $w." Days"; ?></option>
                              <?php } } ?>
                            </select>

							&nbsp;in&nbsp;

                              <select name="day16city" id="day16city" class="input" size:width="200" >
                                <option value=''>- select -</option>
                                <?php foreach($sri_city as $cityval) { ?>
                                <option value='<?php echo $cityval; ?>'><?php echo $cityval; ?></option>
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
                      <td align="left" valign="top" class="txt"><strong>Please mention other special places, activities, events or services that you wish for your tour:</strong></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><textarea name="speplaces" id="speplaces" class="textarea"  cols="120" rows="5"></textarea></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><strong>Choose the accommodation that you according to your wish and budget</strong></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">Preferred Hotel Category : </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="19%" align="left" valign="middle">Star Hotals :</td>
                          <td width="24%" align="left" valign="middle"><select name="star1" id="star1" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='1*'>1*</option>
                                <option value='2*'>2*</option>
                                <option value='3*'>3*</option>
                                <option value='4*'>4*</option>
                                <option value='5*'>5*</option>
                            </select>			</td>
                          <td width="57%" align="left" valign="middle"><select name="hoteltype" id="hoteltype" class="input" style="width:200px">
                                <option value=''>- select -</option>
                                <option value='Boutique Hotel'>Boutique Hotel</option>
                                <option value='Colonial Bungalows'>Colonial Bungalows</option>
                                <option value='Guest Houses'>Guest Houses</option>
                                <option value='Eco Lodge'>Eco Lodge</option>
                                <option value='Appartments'>Appartments</option>
                            </select></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="19%" align="left" valign="middle" class="txt">Prefered Meal Plan</td>
                          <td width="24%" align="left" valign="middle"><select name="premeal" id="premeal" class="input" style="width:200px">
                              <option value=''>- select -</option>
                              <option value='B/B'>B/B</option>
                              <option value='H/B'>H/B</option>
                              <option value='F/B'>F/B</option>
                              <option value='All Inclusive'>All Inclusive </option>
                            </select></td>
                          <td width="18%" align="left" valign="middle">Rooms :</td>
                          <td width="39%" align="left" valign="middle"><select name="roomtype" id="roomtype" class="input" style="width:200px">
                            <option value=''>- select -</option>
                            <option value='Double room sharing'>Double room sharing</option>
                            <option value='Single room'>Single room</option>
                            <option value='Triple room'>Triple room</option>
                            <option value='Family Room'>Family Room</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" class="txt">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" class="txt">Children in separate Room :</td>
                          <td align="left" valign="middle"><select name="chiroom" id="chiroom" class="input" style="width:200px">
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
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="19%" align="left" valign="middle" class="txt">Preferred Tour guide&nbsp;  : </td>
                          <td width="81%" align="left" valign="middle"><input type="checkbox" name="tourguide[]" id="tourguide" value="English"/>English
							<input type="checkbox" name="tourguide[]" id="tourguide" value="German"/>German
							<input type="checkbox" name="tourguide[]" id="tourguide" value="French"/>French
							<input type="checkbox" name="tourguide[]" id="tourguide" value="Italian"/>Italian</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" class="txt"><div align="justify">If  a passenger has any physical disabilities requiring special attention/arrangements to be made please give details specifying the kind of  special arrangements to be made at destination hotel/s and in vehicle.<br />
                                    <br />
                              If you have any special requests regarding food or allergies, please specify clearly in order to advise hotels:<br />
                              <br />
                            </div></td>
                    </tr>
                   
                    <tr>
                      <td height="50" align="left" valign="middle"><textarea name="foodall" id="foodall" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td height="35" align="left" valign="middle"><p align="justify"><!--ANY OTHER INFORMATION YOU COULD PROVIDE THAT MIGHT HELP US MAKE YOUR  STAY AT CHOSEN DESTINATION/S AND OR COUNTRIES MORE COMFORTABLE-->
                        ANY OTHER REMARKS
                      
                        </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><textarea name="anyother" id="anyother" cols="70" class="textarea"></textarea></td>
                    </tr>
                    <tr>
                      <td height="40" align="center" valign="middle"><button name="reg" type="submit" class="submit button">Submit</button></td>
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
<?php //} } 
include 'footer.php'; ?>