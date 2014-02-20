<?php
//ini_set("display_errors",true);
//ini_set("session.save_path","Severn"); 
require_once('control_config.php');
//require_once('class.main.inc');
require_once('class.main.php');

$con		=	SingleTon::getInstance(DBNAME,DBUSERNAME,DBPASS,SERVERNAME);

function imageResize($width, $height, $target) { 

//takes the larger size of the width and height and applies the  formula accordingly...this is so this script will work  dynamically with any size image 
if ($width > $height) { 
$percentage = ($target / $width); 
} else { 
$percentage = ($target / $height); 
} 

//gets the new value and applies the percentage, then rounds the value 
$width = round($width * $percentage); 
$height = round($height * $percentage); 

//returns the new sizes in html image tag format...this is so you can plug this function inside an image tag and just get the 

return "width=\"$width\" height=\"$height\""; 

} 

function redirect($url)
{
	if(!(headers_sent()))
	{
		header('Location:'.$url);
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'window.location.href="'.$url.'";';
		echo '</script>';
	}
}

function formfieldsaddupdate($valueName='', $fieldName='', $fieldActualName='', $FriendlyName='') {
	$msg = '';
	$selectFormCount		=	"select idField from ".TABLE_FORMFIELD." where fieldName = '$fieldName' and valueName = '$valueName'";	

	$selectFormResult		=	mysql_query($selectFormCount) or die (mysql_error());
	$formNum				=	mysql_num_rows($selectFormResult);
	
	if($formNum > 0) { 	
		$queryFormUpdate	=	"update ".TABLE_FORMFIELD." set fieldActualName='$fieldActualName',valueFriendlyName='$FriendlyName',fieldStatus='1',updatedDate=NOW() where fieldName='$fieldName' and valueName='$valueName'";			
		
		$resultFormUpdate	=	mysql_query($queryFormUpdate) or die (mysql_error());

		if($resultFormUpdate) {
			$msg	=	"Datas updated successfully";
		}
		else {
			$msg	=	"Datas are not inserted";
		}
	}
	else if($formNum == 0) { 	
		$queryFormInsert	=	"INSERT INTO ".TABLE_FORMFIELD." (fieldName, fieldActualName,valueName,valueFriendlyName,fieldStatus,insertedDate) values ('$fieldName','$fieldActualName','$valueName','$FriendlyName','1',NOW())";
		
		$resultFormInsert	= $selectFormResult;
		$resultFormInsert	=	mysql_query($queryFormInsert)  or die (mysql_error());

		if($resultFormInsert) {
			$msg	=	"Datas inserted successfully";
		}
	}
	return $msg;
}


?>