<?php
session_start();
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

function callingpage(tour_id) {
	//alert(tour_id);

	window.open("goatour.php?tour_id="+tour_id,"_blank");
	//window.location = "goatour.php?tour_id="+tour_id;
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
            <td width="32%" align="left" valign="top" class="btxt">Nr. and openinghours<br />
              00 41 222 33 44 <br /> Mo-Fr 08.00 - 18.00</td>
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>About Swiss Travels </strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><div align="justify"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and   typesetting industry. Lorem Ipsum has been the industry's standard dummy   text ever since the 1500s, when an unknown printer took a galley of   type and scrambled it to make a type specimen book. </div></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
 
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" align="left" valign="top">&nbsp;</td>
        <td colspan="5" align="left" valign="top" class="rtxtr"><strong>Tourist Place </strong></td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      
	<?php	$selectCount	=	"SELECT * from ".TABLE_PLAN." WHERE plan_status = '1' ORDER BY tour_id DESC";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
			$front_order	=	1;
			while($row = mysql_fetch_array($selectResult)) {
				$tour_id				=		$row['tour_id'];
				$thumb_path				=		$row['thumb_path'];
				$tour_desc				=		$row['tour_desc'];
	 
	 if($front_order == 1 || $front_order == 3 || $front_order == 5) { ?>
	 
	  <tr>
        <td height="19" align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
	  <?php } ?>
	 
	 <?php if($front_order == 1 || $front_order == 3 || $front_order == 5) { ?>
      <tr>
		<td height="142" align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo $tour_id; ?>');"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="174" height="142" /></a></td>
        <td align="left" valign="top" class="txt"><div align="justify"><!--<strong>Lorem Ipsum</strong>--><?php echo $tour_desc; ?></div></td>
		<?php } ?>
		
		

		<?php if($front_order == 2 || $front_order == 4 || $front_order == 6) { ?>
		<td align="left" valign="top">&nbsp;</td>
		<td align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo $tour_id; ?>');"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="174" height="142" /></a></td>
        <td align="left" valign="top" class="txt"><div align="justify"><!--<strong>Lorem Ipsum</strong>--><?php echo $tour_desc; ?></div></td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
	  <?php }  //this is for if loop
		$front_order++;
		} //this is for while loop from db
	} //this is for if loop number of rows in db ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="63%" align="left" valign="top"><span class="style3">Flights and Cheap Flights in Europe and World-wide</span></td>
        <td width="35%" align="left" valign="top" class="style3">Latest News </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" align="left" valign="top">&nbsp; </td>
        <td width="62%" height="210" align="left" valign="top" class="bbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="2%" align="left" valign="top">&nbsp;</td>
            <td width="96%" align="left" valign="top">&nbsp;</td>
            <td width="2%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
			<?php
		
		$conWhere		=	" WHERE plan_status = '1' GROUP BY continent_name LIMIT 3";

		$result			=	SingleTon::selectQuery("tour_id,continent_name,country_name,tour_code","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
			
		//exit(0);

		$contName			=	'';
		$k					=	0;
		?>


            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
		<?php if($num_rows > 0) {

		foreach($result[1] as $pathVal){ 
			
			$contName		=	$pathVal[continent_name];
			
			if($contName != $swapCont) { ?>	  			  
                <td width="33%" height="32" align="left" valign="top"class="txt" nowrap="nowrap"><strong><?php foreach($continent_array as $cont_arr_key => $cont_arr_val) { if($cont_arr_key == $pathVal[continent_name]) { echo $cont_arr_val; } } ?></strong></td>
             
			<?php } } } ?>
			 </tr>
			<tr>	
			<?php $conWhere		=	" WHERE plan_status = '1' ORDER BY continent_name";

			$result			=	SingleTon::selectQuery("tour_id,continent_name,country_name,tour_code","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
			
			$num_rows = $result[0];
				
			//exit(0);

			$contName			=	'';
			$k					=	0;

			if($num_rows > 0) {

			foreach($result[1] as $pathVal){ 
			
			if($contName != $swapCont) { ?>	 
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <?php } ?>
				  

				  <tr>
                    <td width="47%" height="27" align="left" valign="top" class="txt"><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $pathVal[country_name]) { echo $coun_arr_val; } } ?> </td>
                    <td width="53%" align="left" valign="top" ><a class="rtxtr" href='javascript:void(0);' onclick="callingpage('<?php echo $pathVal[tour_id]; ?>');"><?php echo $pathVal[tour_code]; ?></a></td>
                  </tr>

				<?php if($contName != $swapCont) { ?>
                </table></td>
				<?php } 
				
			  $swapCont			=	$contName;
			  $k++; } } ?>
                    </tr>
					</table></td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top">&nbsp;</td>
        <td width="36%" height="211" align="left" valign="top" class="sbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="4%" align="left" valign="top">&nbsp;</td>
            <td width="90%" align="left" valign="top">&nbsp;</td>
            <td width="6%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top">&nbsp;</td>

			<td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
			<?php $selectCount	=	"SELECT * from ".TABLE_PLAN." ORDER BY tour_id DESC LIMIT 2";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);

			$latest_inc					=		1;
			if($num > 0 ) {
			
			while($row = mysql_fetch_array($selectResult)) {

				$arrayFormLatest[]	=	$row;	
				$tour_id				=		$row['tour_id'];
				$front_order			=		$row['front_order'];
				$thumb_path				=		$row['thumb_path'];
				$tour_desc				=		$row['tour_desc']; 
				$tour_name				=		strtoupper($row['tour_name']); 
				$tour_code				=		$row['tour_code']; 
				?>          				
                <td width="50%" height="53" align="left" valign="top" class="txt"><strong><?php echo $tour_name; ?></strong><br />
                  <br /><?php echo $tour_desc; ?>                  
				</td>
			
			  <?php } } ?>			
			 </tr>
			<tr>
			<?php //singleTon::debugerr($arrayFormLatest);

			foreach($arrayFormLatest as $latest) {	?>						
			
                <td height="62" align="left" valign="middle" class="lbut"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="6%" align="left" valign="middle">&nbsp;</td>
                    <td width="94%" align="left" valign="middle" ><a class="wtxt" href='javascript:void(0);' onclick="callingpage('<?php echo $latest[tour_id]; ?>');"><?php echo $latest[tour_code]; ?></a></td>
                  </tr>
                </table></td>

			<?php } ?>
			</tr>

            </table>              </td>

            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="0%" align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
		<?php
		
		$conWhere		=	" WHERE plan_status = '1' ORDER BY tour_id DESC LIMIT 5";

		$result			=	SingleTon::selectQuery("tour_id,thumb_path","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $pathVal){
		?>
		
		<td align="center" valign="middle"><a href='javascript:void(0);' onclick="callingpage('<?php echo $pathVal[tour_id]; ?>');"><img src="<?php echo 'controlend/'.$pathVal[thumb_path]; ?>" width="174" height="142" /></a></td>

		<?php } } ?>

      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF" class="linr"><img src="images/rline.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="bottom" class="copy">&nbsp;</td>
        <td align="left" valign="bottom" class="copy">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" height="25" align="left" valign="middle">&nbsp;</td>
        <td width="9%" align="left" valign="middle"><span class="btxt"><a href="AGB.php">AGB</a> | <a href="SLA.php">SLA</a></span> </td>
        <td width="3%" align="left" valign="middle"><span class="copy"><a href="#"><img src="images/Swiss Flag.png" width="25" height="25" border="0" /></a></span></td>
        <td width="56%" align="left" valign="bottom" class="copy"><a href="#"><img src="images/Swiss Flag.png" width="25" height="25" border="0" /></a></td>
        <td width="31%" align="left" valign="middle" class="copy">Copyright &copy;2012 Swiss Travels. All Right Reserved </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
</body>
</html>
