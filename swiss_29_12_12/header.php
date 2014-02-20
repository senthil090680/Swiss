<?php
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Swiss Travels - welcome to our  home page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu-v.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script>  
	
	
	  <link rel="Stylesheet" type="text/css" href="css/default/reset.css" />
    
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" /> 
<script type="text/javascript">

function callingpage(tour_id) {
	//alert(tour_id);

	//window.open("goatour.php?tour_id="+tour_id,"_blank");
	window.location = "goatour.php?tour_id="+tour_id;
}

function callingsridispage(sri_id) {
	//alert(tour_id);

	//window.open("goatour.php?tour_id="+tour_id,"_blank");
	window.location = "Srilanka_Display_New.php?sri_id="+sri_id;
}

function callingsripage(sri_id) {
	//alert(tour_id);

	//window.open("goatour.php?tour_id="+tour_id,"_blank");
	window.location = "Srilanka_form.php?sri_id="+sri_id;
}



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
                <td width="19%" height="94" align="center" valign="middle"><img src="images/flaght.png" width="57" height="57" /></td>
                <td width="48%" align="left" valign="top" class="rtxtr"><p>&nbsp;</p>
                  <p><a href="Flight_Price.php">Flight Prices</a> </p></td>
                <td width="33%" align="right" valign="middle"><img src="images/oneticket.jpg" /></td>
              </tr>
            </table></td>
          </tr>
      
        </table></td>
        <td width="49%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" height="145" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top"><img src="images/contact.png" width="52" height="44" /></td>
            <td width="42%" align="left" valign="top" class="btxt">
              <div align="left"><span class="insidetxt">Opening Hours:</span></span><br />
                <span class="txt">Mon-Fri 9-12.00  &ndash; 13.30-18.00<br /> 
                  Sat 9.00-13.00
                  </span>
                </p>
              </div>              <p align="left"><span class="txt"><strong>                T: 062 752 00 11 <br />
                F: 062 752 00 13<br />
                M: 076 411 37 61</strong></span><br />
                </p></td>
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

<?php
		
		$conWhere		=	" WHERE plan_status = '1' AND thumb_path != '' GROUP BY continent_name";

		$result			=	SingleTon::selectQuery("tour_id,continent_name","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
		
		if($num_rows > 0) {

		foreach($result[1] as $pathVal){ ?>
		

  <li><a href="#"><?php foreach($continent_array as $cont_arr_key => $cont_arr_val) { if($cont_arr_key == $pathVal[continent_name]) { echo $cont_arr_val; } } ?></a>


   <ul>    	
	<?php $conWhere		=	" WHERE plan_status = '1' AND thumb_path != '' AND continent_name = '$pathVal[continent_name]' GROUP BY country_name";

		$result			=	SingleTon::selectQuery("tour_id,country_name","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
		
		if($num_rows > 0) {

		foreach($result[1] as $pathVal){ ?>
    		<li><a href="country_package.php?country_id=<?php echo base64_encode($pathVal[country_name]); ?>"><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $pathVal[country_name]) { echo $coun_arr_val; } } ?></a></li>
			<?php } } ?>
	</ul>
  </li>

	<?php } }  ?>
  <li><a href="#">Africa Tours</a></li>
   <!--<li><a href="compi_Tours.php">Combi Tours</a></li>-->
 </ul>
   <li><a href="#">Srilanka</a>
  <ul>
    		
    		<li><a href="#">About Srilanka</a></li>
    		<li><a href="Srilanka.php">Srilanka Tours</a></li>
    		</ul>
  
  </li>
  
   <li><a href="#">Israel</a>
  <ul>
    		
    		<li><a href="#">About Israel</a></li>
    		<li><a href="Israel.php">Israel Tours</a></li>
    		</ul>
  
  </li>
  <li><a href="#">Plan My Tour</a></li>
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