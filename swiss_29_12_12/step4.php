

<body>

<table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="dbgg"><form name="sriinfo" method="post" action="" onsubmit="return sri_vali_submit();">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><strong>Main Destination</strong></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="12%" align="left" valign="top" class="txt">No of Days :</td>
                  <td width="23%" align="left" valign="top"><select name="noofdays" id="noofdays" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 61; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                    </select>                  </td>
                  <td width="46%" align="left" valign="top" class="txt">Of which how many days would you like to spend  at a beach location : </td>
                  <td width="19%" align="left" valign="top"><select name="beachdays" id="beachdays" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 61; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                  </select></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Add another country to your tour: you can add Dubai or/and Male to your  tour</strong></td>
            </tr>
            <tr>
              <td height="100" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="12%" align="left" valign="middle" class="txt">Dubai : </td>
                  <td width="25%" height="50" align="left" valign="middle"><select name="dubaidays" id="dubaidays" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 61; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                    </select>
                    days</td>
                  <td width="63%" align="left" valign="middle" class="txt">If you wish to make a stopover in Dubai</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="txt">Male : </td>
                  <td height="50" align="left" valign="middle"><select name="maledays" id="maledays" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 61; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                    </select>
                    days </td>
                  <td align="left" valign="middle" class="txt">If you wish to make a stopover in Male</td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="txt">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle" class="txt"><a href="step5.php" target="ss">Step5</a></td>
                </tr>
              </table></td>
            </tr>
            </div>
</table>

</body>
</html>
