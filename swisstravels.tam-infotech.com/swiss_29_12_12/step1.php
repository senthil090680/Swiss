

<body>

<table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="dbgg"><form name="sriinfo" method="post" action="" onsubmit="return sri_vali_submit();">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25%" height="25" align="left" valign="middle"><strong>Departure  date : </strong></td>
                  <td width="28%" align="left" valign="middle"><input type="text" name="deptdate" id="deptdate" size="25" class="input" readonly />
                    &nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('deptdate','ddMMyyyy')"/></td>
                  <td width="22%" align="left" valign="middle"><strong>Return  date : </strong></td>
                  <td width="25%" align="left" valign="middle"><input type="text" name="retdate" id="retdate" size="25" class="input" readonly />
&nbsp;<img src="images/cal.gif" onclick="javascript:NewCssCal ('retdate','ddMMyyyy')"/></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Travel  flexibility : </strong></td>
                  <td align="left" valign="middle"><select name="traflex" id="traflex" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Not Flexible' >Not Flexible</option>
                    <option value='-1+1'>-1+1</option>
                    <option value='-2+2'>-2+2</option>
                  </select></td>
                  <td align="left" valign="middle"><strong>Preferred  Airport : </strong></td>
                  <td align="left" valign="middle"><select name="preair" id="preair" class="input" style="width:200px">
                    <option value='' >- select -</option>
                    <option value='Zurich' >Z&uuml;rich</option>
                    <option value='Basel'>Basel </option>
                    <option value='Geneva'>Geneva</option>
                    <option value='Frankfurt'>Frankfurt</option>
                    <option value='Milano'>Milano</option>
                  </select></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle"><a href="step2.php" target="ss">Step2</a></td>
                </tr>
               
              </table></td>
  </tr></div>
</table>

</body>
</html>
