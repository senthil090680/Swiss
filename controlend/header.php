<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo ADMIN_TITLE; ?></title>
<link href="<?php echo RELATIVE_PATH; ?>/css/homestyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo RELATIVE_PATH; ?>/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RELATIVE_PATH; ?>/css/ddsmoothmenu-v.css" />
<link rel="stylesheet" href="<?php echo RELATIVE_PATH; ?>/css/common.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo RELATIVE_PATH; ?>/css/formcss.css" type="text/css"/>

<script type="text/javascript" src="<?php echo RELATIVE_PATH; ?>/js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_PATH; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_PATH; ?>/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_PATH; ?>/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_PATH; ?>/js/common.js" ></script>

<script type="text/javascript">

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
});

</script>

</head>

<body>
<table width="1110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="right" valign="middle"><a href="<?php echo RELATIVE_PATH; ?>/main.php"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/logo.jpg" width="241" height="74" /></a></td>
  </tr>
  
  <tr>
    <td height="30" align="left" valign="top" bgcolor="#FF0000"><div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="<?php echo RELATIVE_PATH; ?>/main.php">Home</a></li>
<li><a href="#">Manage Plans</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/new_plan.php">New Plan</a></li>
  </ul>
</li>

<li><a href="#">Manage Srilankan Plans</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/srilanka_plan.php">Srilanka Plan</a></li>
  </ul>
</li>

<li><a href="#">Manage Days</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/srilanka_days.php">All Srilankan Days</a></li>
  </ul>
</li>

<li><a href="#">Manage Israel Plans</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/israel_plan.php">Israel Plan</a></li>
  </ul>
</li>

<li><a href="#">Manage Flights</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/flight_prices.php">New Flight</a></li>
  </ul>
</li>

<!--
<li><a href="#">Input</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/home.php">New</a></li>
  <li><a href="<?php echo RELATIVE_PATH; ?>/viewform.php" >View</a></li>
  </ul>
</li>
<li><a href="#">Data</a>
  <ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/import.php">Import</a></li>
  <li><a href="<?php echo RELATIVE_PATH; ?>/partimport.php">Partial Import</a></li>
  <li><a href="<?php echo RELATIVE_PATH; ?>/importnewcolm.php">New Column Import</a></li>
  <li><a href="<?php echo RELATIVE_PATH; ?>/newcolmupdate.php">New Column Update</a></li>
  </ul>
</li>

<li><a href="#">Search</a>
<ul>
  <li><a href="<?php echo RELATIVE_PATH; ?>/search.php">Quick Search</a></li>
  <li><a href="<?php echo RELATIVE_PATH; ?>/advanced.php" >Advanced Search</a></li>
</ul>
</li>
-->

<li><a href="<?php echo RELATIVE_PATH; ?>/logout.php">Logout</a></li>
</ul>
<br style="clear: left" />
</div></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>