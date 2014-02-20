<?php 
session_start();
require_once 'header.php'; 

extract($_REQUEST);
$country_id	=	base64_decode($country_id);
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
        <td height="30" align="left" valign="top" class="rtxtr"><strong><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $country_id) { $country_name_stored = $coun_arr_val; echo $coun_arr_val; } } ?></strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td width="83%" height="2" align="left" valign="top"><div align="justify">
              <p class="suptitxt">Tours in <?php echo $country_name_stored; ?></p>
              <!--<p class="txt">If you are looking to arrange tour in Sri Lanka, you have come to the correct place.<br />
              You will find a difference with   our individual attention and personalising your tour exactly to your   requirement. Our team who are specialised in tours in Sri Lanka will   help you to get best out of the tour.</p>
              <p class="txt">We arrange cultural tours, eco   tours, adventure tours, wildlife/nature tours, city shopping tours,   luxury tours, bird watching tours, tailor made tours and sightseeing   helicopter tours. Our tours will cover special sightseeing, witness the   wildlife, adventure, ayurvedic, beach and get an insight into the   culture which is embedded in the destinations and so on.</p>
              <p class="txt">Please select a tour/s that would   suit your requirement or let us customise it for you. The rates are not   published for tours as it could vary according to no of persons and   hotels to be included. Please go ahead and click on the &quot;Book Now&quot;   button to make a request. We will respond at the very earliest with all   relevant details.</p>
              <p class="txt"><br />
              </p>-->
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
			$selectCount	=	"SELECT * from ".TABLE_PLAN." WHERE plan_status = '1' AND country_name = '$country_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			
			if($num > 0 ) {
				$front_order	=	1;
				while($row = mysql_fetch_array($selectResult)) {
					$tour_id				=		$row['tour_id'];
					$thumb_path				=		$row['thumb_path'];
					$thumb_path1			=		$row['thumb_path1'];
					$thumb_path2			=		$row['thumb_path2'];
					$tour_desc				=		$row['tour_desc'];
					$product_services		=		$row['product_services'];
					$touring				=		$row['touring'];
					$tour_name				=		$row['tour_name'];
					$tour_code				=		$row['tour_code'];
					$tour_cost				=		$row['tour_cost'];
?>
	  
	  <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="txt"><span class="suptitxt">Tour Code - <?php echo $tour_code; ?></span> <span class="rtxtr1"><?php echo $tour_name; ?></span></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="17%" height="144" align="left" valign="top"><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$thumb_path; ?>','1')"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="105" height="104" /></a></td>
            <td width="83%" align="left" valign="top"><div align="justify">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="92" align="left" valign="top"><?php echo $tour_desc; ?><br />
                      <strong>Products &amp; Services</strong> : <?php echo $product_services; ?> <br />
                      <strong>Touring:</strong> <?php echo $touring; ?><br />
                      <br />
                      <br />                    </td>
                </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="67%" align="left" valign="top">&nbsp;</td>
                      <td width="11%" align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($tour_id); ?>');"><img src="images/readmore.jpg" width="211" height="31" border="0" /></a></td>
                      <!--<td width="11%" align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($tour_id); ?>');"></a></td>
                      <td width="11%" align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($tour_id); ?>');"><img src="images/rate.jpg" width="80" height="22" border="0" /></a></td>-->
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


      <!--<tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="txt"><span class="suptitxt">Tour - 02)</span> 04 Days 03 Nights<span class="rtxtr1"> Seasonal Tour</span></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="17%" height="100" align="left" valign="top"><img src="Sritour/seasonal.jpg" width="150" height="100" /></td>
            <td width="83%" align="left" valign="top"><div align="justify">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="71" align="left" valign="top"><strong>Touring:</strong> Airport Katunayake - Dambulla - Sigiriya - Kandy - Pinnawela - Airport Katunayake or Hotel in Negombo.<br />
                      <strong>Products &amp; Services</strong> :<br />
                      Please Submit Booking Request to get Tour Package Price.</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="67%" height="28" align="left" valign="top">&nbsp;</td>
                          <td width="11%" align="left" valign="top"><a href="#"><img src="images/moredetails.jpg" width="80" height="22" border="0" /></a></td>
                          <td width="11%" align="left" valign="top"><a href="#"><img src="images/booknow.jpg" width="80" height="22" border="0" /></a></td>
                          <td width="11%" align="left" valign="top"><a href="#"><img src="images/rate.jpg" width="80" height="22" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
            </div></td>
          </tr>
        </table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>-->
      
	  
	  <!--<tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="lin">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>-->
    </table></td>
  </tr>
  <div id="backgroundChatPopup"></div>
<?php require_once 'footer.php'; ?>