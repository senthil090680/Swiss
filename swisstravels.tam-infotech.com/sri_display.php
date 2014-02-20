<?php
session_start();
require_once('header.php');

extract($_REQUEST);

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

$sri_id	=	base64_decode($sri_id);

$selectCount	=	"SELECT * from ".TABLE_SRI." WHERE sri_status = '1' AND sri_id = '$sri_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
				$front_order	=	1;
				while($row = mysql_fetch_array($selectResult)) {
					$sri_id				=		$row['sri_id'];
					$sri_path				=		$row['sri_path'];
					$sri_path1			=		$row['sri_path1'];
					$sri_path2			=		$row['sri_path2'];
					$sri_desc				=		$row['sri_desc'];
					$sri_ps		=		$row['sri_ps'];
					$sri_touring				=		$row['sri_touring'];
					$sri_name				=		$row['sri_name'];
					$sri_cost				=		$row['sri_cost'];

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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>Srilanka</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="insidetxt"><?php echo $sri_name; ?></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$sri_path; ?>','1')"><img src="<?php echo 'controlend/'.$sri_path; ?>" width="240" height="180" /></a></td>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$sri_path1; ?>','2')"><img src="<?php echo 'controlend/'.$sri_path1; ?>" width="240" height="180" /></a></td>
            <td align="center" valign="middle"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$sri_path2; ?>','3')"><img src="<?php echo 'controlend/'.$sri_path2; ?>" width="240" height="180" /></a></td>
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
            <td width="100%" align="left" valign="top"><h3 align="justify" class="suptitxt"><?php echo $sri_name; ?></h3>
              <div align="justify"> 
                  <span class="rtxtr">Package highlights </span>
                  <p>
                    <?php echo $sri_desc; ?>
                  </p>
                <p><?php echo $sri_ps; ?></p>
                <p class="suptitxt">Rates applicable for<br />
                      <br />
                  Per Couple <br />
                  <span class="rtxtr"><?php echo $sri_cost; ?></span>                </p>
                <table width="646">
                    <tbody>
                      <tr>
                        <td width="638" align="left" valign="top"><div id="package_sidebar_hotel_cart_details">
                            
							<div id="package_sidebar_hotel_cart_details-9_0">
                              <div id="package_sidebar_hotel_cart_details-9_0-details"> <span id="package_detail_season_changer"><strong>Accommodation</strong> &nbsp;&nbsp; <a href="http://book.mustseeindia.com/2nt-goa-candolim-beach-package-book-14100#package-customize" onclick="push_page_operation(121);_gaq.push(['_trackEvent','Package', 'Package Details','Cart Hotel Change',0,true]);switch_tab('package_hotels');tabhotel_change_city('9_0');"></a> <br />
                                <?php echo $sri_ps; ?></span></div>
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
          <!--<tr>
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
          </tr>-->
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