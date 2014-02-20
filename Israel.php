<?php 
session_start();
require_once 'header.php'; 

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
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>ISRAEL</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="2" align="left" valign="top"><div align="justify">
              <p class="suptitxt">Tours in Israel</p>
            </div></td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="28%" height="30" align="center" valign="middle" bgcolor="#FF0000" class="wtxt style4">TOUR PACKAGES -  LISTING</a></td>
            <td width="72%" align="center" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="lin">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    <?php  
			$selectCount	=	"SELECT * from ".TABLE_ISRL." WHERE isrl_status = '1'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			
			if($num > 0 ) {
				while($row = mysql_fetch_array($selectResult)) {
					$isrl_id				=		$row['isrl_id'];
					$isrl_path				=		$row['isrl_path'];
					$isrl_path1			=		$row['isrl_path1'];
					$isrl_path2			=		$row['isrl_path2'];
					$isrl_desc				=		$row['isrl_desc'];
					$isrl_ps                        =		$row['isrl_ps'];
					$isrl_touring				=		$row['isrl_touring'];
					$isrl_name				=		$row['isrl_name'];
					$isrl_code				=		$row['isrl_code'];
					$isrl_cost				=		$row['isrl_cost'];
?>
	  
	  <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="txt"><span class="suptitxt">Tour Code - <?php echo $isrl_code; ?></span> <span class="rtxtr1"><?php echo $isrl_name; ?></span></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="17%" height="144" align="left" valign="top"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$isrl_path; ?>','<?php echo $isrl_id; ?>')"><img src="<?php echo 'controlend/'.$isrl_path; ?>" width="105" height="104" /></a></td>
            <td width="83%" align="left" valign="top"><div align="justify">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="92" align="left" valign="top"><?php echo $isrl_desc; ?><br />
                      <strong>Products &amp; Services</strong> : <?php echo $isrl_ps; ?> <br />
                      <strong>Touring:</strong> <?php echo $isrl_touring; ?><br />
                      <br />
                      <br />                    </td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="67%" align="left" valign="top">&nbsp;</td>
                      <td width="11%" align="left" valign="top"><a href='javascript:void(0);' onclick="callingisrlpage('<?php echo base64_encode($isrl_id); ?>');"><img src="images/readmore.jpg" width="211" height="31" border="0" /></a></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              </div></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="lin">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
	<?php } } ?>

    </table></td>
  </tr>
  <div id="backgroundChatPopup"></div>
<?php require_once 'footer.php'; ?>