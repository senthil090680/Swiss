<?php
session_start();
require_once 'header.php'; 

extract($_REQUEST);

$sri_id	=	base64_decode($sri_id);

$selectCount	=	"SELECT day_id,sri_id,day_name,day1_title,day2_title,day2_place,day2_desc,day2_path1,day2_path2,day2_path3,day2_path4,day2_stay,day3_title,day3_place,day3_desc,day3_path1,day3_path2,day3_path3,day3_path4,day3_stay,day4_title,day4_place,day4_desc,day4_path1,day4_path2,day4_path3,day4_path4,day4_stay,day5_title,day5_place,day5_desc,day5_path1,day5_path2,day5_path3,day5_path4,  day5_stay,day6_title,day6_place,day6_desc,day6_path1,day6_path2,day6_path3,day6_path4,day6_stay,day7_title,day7_place,day7_desc,day7_path1,day7_path2,day7_path3,day7_path4,day7_stay,day8_title,day8_place,day8_desc,day8_path1,day8_path2,day8_path3,day8_path4,day8_stay,day9_title,day9_place,day9_desc,day9_path1,day9_path2,day9_path3,day9_path4,day9_stay,day10_title,day10_place,day10_desc,day10_path1,day10_path2,day10_path3,day10_path4,day10_stay,day11_title,day11_place,day11_desc,day11_path1,day11_path2,day11_path3,day11_path4,day11_stay,day12_title,price_include,price_notinclude,day_status from ".TABLE_DAY." WHERE day_status = '1' AND sri_id = '$sri_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
				while($row = mysql_fetch_array($selectResult)) {
					$sri_id					=	$row["sri_id"];
					$day_id					=	$row["day_id"];
					$day_name				=	$row["day_name"];
					$day1_title				=	$row["day1_title"];
					$day2_title				=	$row["day2_title"];
					$day2_place				=	$row["day2_place"];
					$day2_desc				=	$row["day2_desc"];
					$day2_path1				=	$row["day2_path1"];
					$day2_path2				=	$row["day2_path2"];
					$day2_path3				=	$row["day2_path3"];
					$day2_path4				=	$row["day2_path4"];
					$day2_stay				=	$row["day2_stay"];
					$day3_title				=	$row["day3_title"];
					$day3_place				=	$row["day3_place"];
					$day3_desc				=	$row["day3_desc"];
					$day3_path1				=	$row["day3_path1"];
					$day3_path2				=	$row["day3_path2"];
					$day3_path3				=	$row["day3_path3"];
					$day3_path4				=	$row["day3_path4"];
					$day3_stay				=	$row["day3_stay"];	
					$day4_title				=	$row["day4_title"];
					$day4_place				=	$row["day4_place"];
					$day4_desc				=	$row["day4_desc"];
					$day4_path1				=	$row["day4_path1"];
					$day4_path2				=	$row["day4_path2"];
					$day4_path3				=	$row["day4_path3"];
					$day4_path4				=	$row["day4_path4"];
					$day4_stay				=	$row["day4_stay"];	
					$day5_title				=	$row["day5_title"];
					$day5_place				=	$row["day5_place"];
					$day5_desc				=	$row["day5_desc"];
					$day5_path1				=	$row["day5_path1"];
					$day5_path2				=	$row["day5_path2"];
					$day5_path3				=	$row["day5_path3"];
					$day5_path4				=	$row["day5_path4"];
					$day5_stay				=	$row["day5_stay"];
					$day6_title				=	$row["day6_title"];
					$day6_place				=	$row["day6_place"];
					$day6_desc				=	$row["day6_desc"];
					$day6_path1				=	$row["day6_path1"];
					$day6_path2				=	$row["day6_path2"];
					$day6_path3				=	$row["day6_path3"];
					$day6_path4				=	$row["day6_path4"];
					$day6_stay				=	$row["day6_stay"];
					$day7_title				=	$row["day7_title"];
					$day7_place				=	$row["day7_place"];
					$day7_desc				=	$row["day7_desc"];
					$day7_path1				=	$row["day7_path1"];
					$day7_path2				=	$row["day7_path2"];
					$day7_path3				=	$row["day7_path3"];
					$day7_path4				=	$row["day7_path4"];
					$day7_stay				=	$row["day7_stay"];
					$day8_title				=	$row["day8_title"];
					$day8_place				=	$row["day8_place"];
					$day8_desc				=	$row["day8_desc"];
					$day8_path1				=	$row["day8_path1"];
					$day8_path2				=	$row["day8_path2"];
					$day8_path3				=	$row["day8_path3"];
					$day8_path4				=	$row["day8_path4"];
					$day8_stay				=	$row["day8_stay"];
					$day9_title				=	$row["day9_title"];
					$day9_place				=	$row["day9_place"];
					$day9_desc				=	$row["day9_desc"];
					$day9_path1				=	$row["day9_path1"];
					$day9_path2				=	$row["day9_path2"];
					$day9_path3				=	$row["day9_path3"];
					$day9_path4				=	$row["day9_path4"];
					$day9_stay				=	$row["day9_stay"];
					$day10_title			=	$row["day10_title"];
					$day10_place			=	$row["day10_place"];
					$day10_desc				=	$row["day10_desc"];
					$day10_path1			=	$row["day10_path1"];
					$day10_path2			=	$row["day10_path2"];
					$day10_path3			=	$row["day10_path3"];
					$day10_path4			=	$row["day10_path4"];
					$day10_stay				=	$row["day10_stay"];
					$day11_title			=	$row["day11_title"];
					$day11_place			=	$row["day11_place"];
					$day11_desc				=	$row["day11_desc"];
					$day11_path1			=	$row["day11_path1"];
					$day11_path2			=	$row["day11_path2"];
					$day11_path3			=	$row["day11_path3"];
					$day11_path4			=	$row["day11_path4"];
					$day11_stay				=	$row["day11_stay"];
					$day12_title			=	$row["day12_title"];
					$day_status				=	$row["day_status"];
					$price_include			=	$row["price_include"];
					$price_notinclude		=	$row["price_notinclude"];

?>

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
        <td width="1%" rowspan="10" align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Srilanka</strong></td>
        <td width="1%" rowspan="9" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="98%" align="left" valign="top" class="rtxtr"><?php echo $day_name; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="rtxtr">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="rtxtr"><strong>Day 1:</strong> <span class="txt"><?php echo $day1_title; ?></span></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt"><hr/></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="rtxtr"><strong>DAY 2: </strong><span class="txt"><?php echo $day2_title; ?></span></td>
      </tr>
      <tr>
        <td height="19" align="left" valign="top" class="rtxtr">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt"><strong><?php echo $day2_place; ?></strong></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt"><p align="justify"><?php echo $day2_desc; ?> <br />
          <br />
        </p>        </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day2_path1; ?>','1')"><img src="<?php echo 'controlend/'.$day2_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day2_path2; ?>','2')"><img src="<?php echo 'controlend/'.$day2_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day2_path3; ?>','3')"><img src="<?php echo 'controlend/'.$day2_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day2_path4; ?>','4')"><img src="<?php echo 'controlend/'.$day2_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong><em>Overnight Stay At: <span class="rtxtr"> <?php echo $day2_stay; ?>.</span><u></u></em></strong><br />
        </p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 3: </strong></span><?php echo $day3_title; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day3_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify">
          <p><?php echo $day3_desc; ?>.<br />
            <br />
          </p></div>          </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day3_path1; ?>','5')"><img src="<?php echo 'controlend/'.$day3_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day3_path2; ?>','6')"><img src="<?php echo 'controlend/'.$day3_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day3_path3; ?>','7')"><img src="<?php echo 'controlend/'.$day3_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day3_path4; ?>','8')"><img src="<?php echo 'controlend/'.$day3_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight  Stay <em>At: <span class="rtxtr"> <?php echo $day3_stay; ?>.</span></em><u> </u></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"> <span class="rtxtr"><strong>DAY 4:</strong></span> <?php echo $day4_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day4_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p align="justify"><?php echo $day4_desc; ?>.<br />
          <br />
        </p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day4_path1; ?>','9')"><img src="<?php echo 'controlend/'.$day4_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day4_path2; ?>','10')"><img src="<?php echo 'controlend/'.$day4_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day4_path3; ?>','11')"><img src="<?php echo 'controlend/'.$day4_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day4_path4; ?>','12')"><img src="<?php echo 'controlend/'.$day4_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day4_stay; ?>.</span></em><u> </u></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 5:</strong></span> <?php echo $day5_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day5_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><?php echo $day5_desc; ?>.<br />
          <br />
        </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day5_path1; ?>','13')"><img src="<?php echo 'controlend/'.$day5_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day5_path2; ?>','14')"><img src="<?php echo 'controlend/'.$day5_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day5_path3; ?>','15')"><img src="<?php echo 'controlend/'.$day5_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day5_path4; ?>','16')"><img src="<?php echo 'controlend/'.$day5_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day5_stay; ?>.</span></em><u> </u></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 6:</strong></span> <?php echo $day6_title; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day6_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><?php echo $day6_desc; ?>.<br />
          <br />
        </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day6_path1; ?>','17')"><img src="<?php echo 'controlend/'.$day6_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day6_path2; ?>','18')"><img src="<?php echo 'controlend/'.$day6_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day6_path3; ?>','19')"><img src="<?php echo 'controlend/'.$day6_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day6_path4; ?>','20')"><img src="<?php echo 'controlend/'.$day6_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day6_stay; ?>.</span></em><u> </u></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 7:</strong></span> <?php echo $day7_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day7_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify">
          <p><?php echo $day7_desc; ?>.<br />
            <br />
          </p>
        </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
             <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day7_path1; ?>','21')"><img src="<?php echo 'controlend/'.$day7_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day7_path2; ?>','22')"><img src="<?php echo 'controlend/'.$day7_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day7_path3; ?>','23')"><img src="<?php echo 'controlend/'.$day7_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day7_path4; ?>','24')"><img src="<?php echo 'controlend/'.$day7_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day7_stay; ?>.</span></em></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 8:</strong></span> <?php echo $day8_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day8_place; ?>.</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><p><?php echo $day8_desc; ?>.</p> </div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day8_path1; ?>','25')"><img src="<?php echo 'controlend/'.$day8_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day8_path2; ?>','26')"><img src="<?php echo 'controlend/'.$day8_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day8_path3; ?>','27')"><img src="<?php echo 'controlend/'.$day8_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day8_path4; ?>','28')"><img src="<?php echo 'controlend/'.$day8_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day8_stay; ?>.</span></em></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 09:</strong></span> <?php echo $day9_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day9_place; ?>.</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><p><?php echo $day9_desc; ?>.</p></div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day9_path1; ?>','29')"><img src="<?php echo 'controlend/'.$day9_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day9_path2; ?>','30')"><img src="<?php echo 'controlend/'.$day9_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day9_path3; ?>','31')"><img src="<?php echo 'controlend/'.$day9_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day9_path4; ?>','32')"><img src="<?php echo 'controlend/'.$day9_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day9_stay; ?>.</span></em></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 10: </strong></span><?php echo $day10_title; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day10_place; ?>.</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><p><?php echo $day10_desc; ?>.</p></div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day10_path1; ?>','33')"><img src="<?php echo 'controlend/'.$day10_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day10_path2; ?>','34')"><img src="<?php echo 'controlend/'.$day10_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day10_path3; ?>','35')"><img src="<?php echo 'controlend/'.$day10_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day10_path4; ?>','36')"><img src="<?php echo 'controlend/'.$day10_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day10_stay; ?>.</span></em></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr> 
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><span class="rtxtr"><strong>DAY 11:</strong></span> <?php echo $day11_title; ?>.</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><strong><?php echo $day11_place; ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><div align="justify"><p><?php echo $day11_desc; ?>.</p></div></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day11_path1; ?>','37')"><img src="<?php echo 'controlend/'.$day11_path1; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day11_path2; ?>','38')"><img src="<?php echo 'controlend/'.$day11_path2; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day11_path3; ?>','39')"><img src="<?php echo 'controlend/'.$day11_path3; ?>" width="200" height="146" border="0" /></a></td>

            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$day11_path4; ?>','40')"><img src="<?php echo 'controlend/'.$day11_path4; ?>" width="200" height="146" border="0" /></a></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><strong>Overnight Stay <em>At: <span class="rtxtr"><?php echo $day11_stay; ?>.</span></em></strong></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><hr/></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"> <span class="rtxtr"><strong>DAY 12: </strong></span><?php echo $day12_title; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><u>Price Includes</u></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">
          <p><?php echo $price_include; ?></p>
		  <!--<ul>
            <li>Return flight ticket:  Zurich/Geneva/Milano/Frankfurt&nbsp; - Colombo</li>
            <li>Private luxury vehicle with  driver/tour guide (English/German/French/Italian)</li>
            <li>Visa fee</li>
            <li>Accommodation </li>
            <li>Bottled mineral water for  consummation while traveling only.</li>
            <li>A mobile telephone device to  communicate with the local office and the Guide during the tour.</li>
          </ul>-->        </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><p><u>Price does NOT include the following:</u></p></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">
		<p><?php echo $price_notinclude; ?></p>

		<!--<ul>          
            <li>Lunch atreservedhotels. </li>
            <li>Archeological/Buddhist Shrine  Entrance Fee.</li>
            <li>Video Camera Fee.</li>
            <li>Extra Beverages&amp; Food. </li>
            <li>Any other not mentioned under above  &lsquo;does include&rsquo; section.</li>
            <li>Entrancefee.</li>
            <li>Travel Insurance fee</li>
          </ul>-->
        </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>   
  </table></td>
</tr>

<?php } } else { ?>
 <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">No Data to display.</td>
 </tr>
<?php } require_once 'footer.php'; ?>