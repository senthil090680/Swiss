<?php 
session_start();
require_once 'header.php'; ?>

<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/popup_open.js"></script>
<link href="css/popup_open.css" rel="stylesheet" type="text/css" />

<style  type="text/css">

#end{
	width:600px;
	padding:2px;
}
</style>
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong>SriLanka</strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="256" align="left" valign="top"><div align="justify">
              <p class="suptitxt">Tours in Sri Lanka</p>
              <p class="txt">If you are looking to arrange tour in Sri Lanka, you have come to the correct place.<br />
              You will find a difference with   our individual attention and personalising your tour exactly to your   requirement. Our team who are specialised in tours in Sri Lanka will   help you to get best out of the tour.</p>
              <p class="txt">We arrange cultural tours, eco   tours, adventure tours, wildlife/nature tours, city shopping tours,   luxury tours, bird watching tours, tailor made tours and sightseeing   helicopter tours. Our tours will cover special sightseeing, witness the   wildlife, adventure, ayurvedic, beach and get an insight into the   culture which is embedded in the destinations and so on.</p>
              <p class="txt">Please select a tour/s that would   suit your requirement or let us customise it for you. The rates are not   published for tours as it could vary according to no of persons and   hotels to be included. Please go ahead and click on the &quot;Book Now&quot;   button to make a request. We will respond at the very earliest with all   relevant details.</p>
              <p class="txt"><br />
              </p>
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
            <td width="72%" align="center" valign="middle"><select name="kindtour" id="kindtour" class="input" style="width:200px" onChange="showkindtour(this.value);">
                    <option value='' >- Select -</option>
                    <option value='All'>All</option>
                    <option value='Round Trip'>Round Trip</option>
                    <option value='Honeymoon'>Honeymoon</option>
                    <option value='Beach Holiday'>Beach Holiday</option>
                    <option value='Mixed Customized Trip'>Mixed Customized Trip</option>
                  </select></td>
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
        <td align="left" valign="top" class="lin">
            <span id='showtour'>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <?php  
	$selectCount	=	"SELECT * from ".TABLE_SRI." WHERE sri_status = '1'";
	$selectResult	=	mysql_query($selectCount) or die (mysql_error());
	$num			=	mysql_num_rows($selectResult);	
	
	if($num > 0 ) {
		$front_order	=	1;
		while($row = mysql_fetch_array($selectResult)) {
			$sri_id					=		$row['sri_id'];
			$sri_path				=		$row['sri_path'];
			$sri_path1				=		$row['sri_path1'];
			$sri_path2				=		$row['sri_path2'];
			$sri_desc				=		$row['sri_desc'];
			$sri_ps					=		$row['sri_ps'];
			$sri_touring                            =		$row['sri_touring'];
			$sri_name				=		$row['sri_name'];
			$sri_code				=		$row['sri_code'];
			$sri_cost				=		$row['sri_cost'];
                        $kindtour				=		$row['kindtour'];
?>
          <tr>
            <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
            <td width="98%" height="30" align="left" valign="top" class="txt"><span class="suptitxt">Tour - <?php echo $sri_code; ?></span> <span class="rtxtr1"><?php echo $sri_name; ?></span></td>
            <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
          </tr>
          <tr >
            <td align="left" valign="top" class="txt">&nbsp;</td>
            <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="17%" height="144" align="left" valign="top" nowrap='nowrap'><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$sri_path; ?>','<?php echo $sri_id; ?>')"><img src="<?php echo 'controlend/'.$sri_path; ?>" width="105" height="104" border="0" /></a></td>
                  <td width="83%" align="left" valign="top" nowrap='nowrap'><div align="justify">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="92" align="left" valign="top"><div id="end"><p style="width:590px;"><?php 
                    echo ucfirst(wordwrap($sri_desc,100,"<br />"));
                    //echo htmlspecialchars(str_replace(array("\r", "\n"), '<br/>', $sri_desc)); ?></p><br />
                      <strong>Products &amp; Services : </strong> <p style="width:590px;"><?php 
                      echo ucfirst(wordwrap($sri_ps,100,"<br />")); ?></p><br />
                      <strong>Touring:</strong> <p style="width:590px;"><?php 
                      echo ucfirst(wordwrap($sri_touring,100,"<br />")); ?></p><br />
					  <strong>Tour Cost : </strong> <p style="width:590px;"><?php 
                      echo $sri_cost; ?></p><br />

                      <br />
                      <br />                    </div></td>
                </tr>
                <tr>
                  <td align="left" valign="top" nowrap='nowrap'><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="70%" align="left" valign="top">&nbsp;</td>
                      <td width="30%" align="left" valign="top"><a href="javascript:void(0);" onclick="callingsridispage('<?php echo base64_encode($sri_id); ?>')" ><img src="images/more.jpg" width="102" height="31" /></a><a href="javascript:void(0);" onclick="callingsripage('<?php echo base64_encode($sri_id); ?>')"><img src="images/Price.jpg" width="109" height="31" /></a></td>
                      <td width="0%" align="left" valign="top"></td>                      
                    </tr>
                  </table></td>
                </tr>
              </table>
              </div></td>
                </tr>
            </table></td>
            <td align="left" valign="top" class="txt">&nbsp;</td>
          </tr>
          <tr >
            <td align="left" valign="top" class="txt">&nbsp;</td>
            <td align="left" valign="top" class="txt">&nbsp;</td>
            <td align="left" valign="top" class="txt">&nbsp;</td>
          </tr>
          <tr >
            <td align="left" valign="top" class="txt">&nbsp;</td>
            <td align="left" valign="top" class="lin">&nbsp;</td>
            <td align="left" valign="top" class="txt">&nbsp;</td>
          </tr>
          <?php } } ?>
        </table>
            </span>
            </td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
        
      <tr>
        <td >&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
<?php require_once 'footer.php'; ?>