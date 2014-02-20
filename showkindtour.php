<?php 
session_start();
require_once 'includes/control_functions.php'; 

$kindtour       =       $_GET['kindtour'];
//exit(0);

if($kindtour == 'All') {   
   $kindtour    =   ''; 
} else {
   $kindtour    =   "AND kindtour = "."'$kindtour'"; 
}

$selectCount	=	"SELECT * from ".TABLE_SRI." WHERE sri_status = '1' $kindtour ";
$selectResult	=	mysql_query($selectCount) or die (mysql_error());
$num		=	mysql_num_rows($selectResult);	

if($num > 0 ) {
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
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
<tr >
<td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
<td width="98%" height="30" align="left" valign="top" class="txt"><span class="suptitxt">Tour - <?php echo $sri_code; ?></span> <span class="rtxtr1"><?php echo $sri_name; ?></span></td>
<td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
</tr>
<tr>
<td align="left" valign="top" class="txt">&nbsp;</td>
<td align="left" valign="top" class="txt"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17%" height="144" align="left" valign="top" nowrap='nowrap'><a href="javascript:void(0);" onclick="beforeCreateChatBox('<?php echo 'controlend/'.$sri_path; ?>','<?php echo $sri_id; ?>')"><img src="<?php echo 'controlend/'.$sri_path; ?>" width="105" height="104" border="0" /></a></td>
    <td width="83%" align="left" valign="top" nowrap='nowrap'><div align="justify">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="92" align="left" valign="top"><div style="width:600px;padding:2px;"><?php echo ucfirst(wordwrap($sri_desc,100,"<br />")); ?></div><br />
              <div style="width:600px;padding:2px;"><strong>Products &amp; Services</strong> : <?php echo ucfirst(wordwrap($sri_ps,100,"<br />")); ?></div><br />
             <div style="width:600px;padding:2px;"> <strong>Touring:</strong> <?php echo ucfirst(wordwrap($sri_touring,100,"<br />")); ?></div> <br />
              <br />
              <br />                   </div> </td>
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
</table>
<?php } } else { ?>
    <tr>
<td align="left" valign="top" class="txt" nowrap='nowrap'>No Records Found</td>
</tr>
    
<?php } 
exit(0);
?>
