

<body>

<table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="dbgg"><form name="sriinfo" method="post" action="" onsubmit="return sri_vali_submit();">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Passenger</strong></td>
                  <td width="28%" align="left" valign="middle">&nbsp;</td>
                  <td width="22%" align="left" valign="middle">&nbsp;</td>
                  <td width="25%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Adult  (+12) : </strong></td>
                  <td align="left" valign="middle"><select name="adultpas" id="adultpas" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 5; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                    </select>                  </td>
                  <td align="left" valign="middle"><strong>Children  (Age 2-11) : </strong></td>
                  <td align="left" valign="middle"><select name="childpas" id="childpas" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 5; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                  </select></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Infant  (under 2 years) : </strong></td>
                  <td align="left" valign="middle"><select name="infantpas" id="infantpas" class="input" size:width="200" >
                      <option value=''>- select -</option>
                      <?php for($w=1; $w < 5; $w++) { ?>
                      <option value='<?php echo $w; ?>'><?php echo $w; ?></option>
                      <?php } ?>
                  </select></td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 1 </td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="pas1cre" id="pas1cre" class="input" style="width:200px">
                      <option value=''>- select -</option>
                      <option value='Mr.'>Mr.</option>
                      <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt">Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas1name" id="pas1name" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas1sur" id="pas1sur" size="25" class="input" /></td>
                  <td align="left" valign="middle">Data Of Birth : </td>
                  <td align="left" valign="middle"><input type="text" name="pas1dob" id="pas1dob" size="25" class="input" readonly />
                      <img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 2</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="select" id="select" class="input" style="width:200px">
                      <option value=''>- select -</option>
                      <option value='Mr.'>Mr.</option>
                      <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt">Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas1name2" id="pas1name2" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas1sur2" id="pas1sur2" size="25" class="input" /></td>
                  <td align="left" valign="middle">Data Of Birth : </td>
                  <td align="left" valign="middle"><input type="text" name="pas1dob2" id="pas1dob2" size="25" class="input" readonly />
                      <img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 3 </td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="select2" id="select2" class="input" style="width:200px">
                      <option value=''>- select -</option>
                      <option value='Mr.'>Mr.</option>
                      <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt">Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas1name3" id="pas1name3" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas1sur3" id="pas1sur3" size="25" class="input" /></td>
                  <td align="left" valign="middle">Data Of Birth : </td>
                  <td align="left" valign="middle"><input type="text" name="pas1dob3" id="pas1dob3" size="25" class="input" readonly />
                      <img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><strong>Passenger</strong> 4 </td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" align="left" valign="middle" class="txt">Mr / Mrs : </td>
                  <td width="24%" height="25" align="left" valign="middle" class="txt"><select name="select3" id="select3" class="input" style="width:200px">
                      <option value=''>- select -</option>
                      <option value='Mr.'>Mr.</option>
                      <option value='Mrs.' >Mrs.</option>
                  </select></td>
                  <td width="26%" align="left" valign="middle"class="txt">Name : </td>
                  <td width="25%" align="left" valign="middle"class="txt"><input type="text" name="pas1name4" id="pas1name4" size="25" class="input" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="19" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Surname : </td>
                  <td height="25" align="left" valign="middle"><input type="text" name="pas1sur4" id="pas1sur4" size="25" class="input" /></td>
                  <td align="left" valign="middle">Data Of Birth : </td>
                  <td align="left" valign="middle"><input type="text" name="pas1dob4" id="pas1dob4" size="25" class="input" readonly />
                      <img src="images/cal.gif" onclick="javascript:NewCssCal ('pas1dob','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td height="18" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle"><a href="step.php" target="ss">Step4</a></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            </div>
</table>

</body>
</html>
