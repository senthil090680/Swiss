<?php
session_start();
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);


//debugerr($country_array);

//debugerr($continent_array);

//exit(0);
//ini_set("display_errors",true);

if(!isset($_COOKIE['userName']) && $_COOKIE['userName'] == '') {
	redirect(RELATIVE_PATH."/index.php");
}
else {

if($_REQUEST) {
	extract($_REQUEST);
        
        //echo debugerr($_REQUEST);
        
        //exit(0);
	if(isset($_REQUEST['action']) && $_REQUEST['action'] != '' ) {
		
		if($_POST['action'] == 'edit') {

			$queryUpdate	=	"UPDATE ".TABLE_FLIGHT." SET flight_name='$flight_name',continent_name='$continent_name',country_name='$country_name',flight_cost='$flight_cost',flight_status='$flight_status',updatedDate=NOW() WHERE flight_id='$flight_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
			$selectCount	=	"SELECT * from ".TABLE_FLIGHT." where flight_name='$flight_name'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);

			if($num > 0) { 	
				$queryUpdate	=	"UPDATE ".TABLE_FLIGHT." SET continent_name='$continent_name',country_name='$country_name',flight_cost='$flight_cost',flight_status='$flight_status',updatedDate=NOW() where flight_id='$flight_id'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"INSERT INTO ".TABLE_FLIGHT." (flight_name,continent_name,country_name,flight_cost,flight_status,insertedDate) values ('$flight_name','$continent_name','$country_name','$flight_cost','$flight_status',NOW())";

				$resultInsert	=	mysql_query($queryInsert) or die(mysql_error());;

				if($resultInsert) {
					$msg	=	"Datas inserted successfully";
				}
				else {
					$msg	=	"Datas are not inserted";
				}
			}
		}
		else if($_REQUEST['action'] == 'delete') {
				$queryDelete	=	"DELETE FROM ".TABLE_FLIGHT." WHERE flight_id='$flight_id'";
				$resultDelete	=	mysql_query($queryDelete) or die(mysql_error());;
				$msg	=	"Flight deleted successfully";
		}
	}
}

require_once("header.php");
?>
<script type="text/javascript">

	function validateFlight() {

		var flight_name		=	document.getElementById('flight_name');
		var continent_name		=	document.getElementById('continent_name');
		var country_name	=	document.getElementById('country_name');
		var flight_cost		=	document.getElementById('flight_cost');
		var flight_status	=	document.getElementById('flight_status');
		var action_find		=	document.getElementById('action');
		
		if(flight_name.value == '') {
			document.getElementById('flight_nameSpan').innerHTML					=	"Please enter the flight name";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('flight_costSpan').innerHTML					=	'';
			document.getElementById('flight_statusSpan').innerHTML					=	'';
			flight_name.focus();
			return false;
		}
		else if(continent_name.value == '') {
			document.getElementById('continent_nameSpan').innerHTML					=	"Please select the continent";
			document.getElementById('flight_nameSpan').innerHTML					=	"";
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('flight_costSpan').innerHTML					=	'';
			document.getElementById('flight_statusSpan').innerHTML					=	'';
			continent_name.focus();
			return false;
		}
		else if(country_name.value == '') {
			document.getElementById('country_nameSpan').innerHTML					=	"Please select the country";
			document.getElementById('flight_nameSpan').innerHTML					=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('flight_costSpan').innerHTML					=	'';
			document.getElementById('flight_statusSpan').innerHTML					=	'';
			country_name.focus();
			return false;
		}

		else if(flight_cost.value == '') {
			document.getElementById('flight_costSpan').innerHTML					=	'Please enter the flight cost';
			document.getElementById('flight_nameSpan').innerHTML					=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('flight_statusSpan').innerHTML					=	'';
			flight_cost.focus();
			return false;
		}

		else if(flight_status.value == '') {
			document.getElementById('flight_statusSpan').innerHTML					=	'Please select the status';
			document.getElementById('flight_nameSpan').innerHTML					=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('flight_costSpan').innerHTML					=	'';
			flight_status.focus();
			return false;
		}
		
		else { 
			document.flight_form.action="";
			document.flight_form.method="post";
			document.flight_form.submit();
		}
	}

	function newFlight(){
		d												=	document.flight_form;
		d.flight_id.value									=	"";
		d.flight_name.value								=	"";
		d.continent_name.value							=	"";
		d.country_name.value							=	"";
		d.flight_cost.value								=	"";
		d.flight_status.value							=	"";

		d.action.value									=	"new";
		d.submitFlight.value							=	"Add Flight";
		document.getElementById("form-tab").innerHTML	=	"Add Flight";
		show("formFlight");
		location.href									=	"#formFlight";
	}	
	function editFlight(flight_id){
		d												=	document.flight_form;
		d.flight_id.value								=	flight_id;
		d.flight_name.value								=	document.getElementById('flight_name-'+flight_id).innerHTML; //tour name
		d.continent_name.value							=	document.getElementById('continent_name-'+flight_id).innerHTML; //Continent Name
		d.country_name.value							=	document.getElementById('country_name-'+flight_id).innerHTML;//Country Name
		d.flight_cost.value								=	document.getElementById('flight_cost-'+flight_id).innerHTML;//Tour Code
		d.flight_status.value							=	document.getElementById('flight_status-'+flight_id).innerHTML;//Tour Description
		d.action.value									=	"edit";
		d.submitFlight.value							=	"Edit Flight";
		document.getElementById("form-tab").innerHTML	=	"Edit Flight";
		show("formFlight");
		location.href									=	"#formFlight";
	}	
	function deleteFlight(flight_id){
		if (confirm('Are You Sure You Want to Delete '+document.getElementById('flight_name-'+flight_id).innerHTML+'?'))
		window.location = "flight_prices.php?action=delete&flight_id=" + flight_id;
	}
	

</script>

<?php if(isset($msg) && $msg != '') { ?>
<tr>
	<td>
		<span class='backmsg'><?php echo $msg; ?></span>
	</td>
</tr>
<?php } ?>
<tr>
	<td>
		<p>Manage Your Flight Prices</p>
	</td>
</tr>
<tr>
	<td>
		<div id='formFlight' style="display:none;">
			<div id="form-tab" class="form-tab"></div>
			<div class="clear"></div>
			<form name="flight_form" action="flight_prices.php" method="post" onsubmit="return validateFlight();" enctype='multipart/form-data'>
				<fieldset>
					<p>
						<label style="padding-right:20px;">Flight Name</label>:&nbsp;&nbsp;
						<input name="flight_name" id="flight_name" class="text-long"  type="text" />
					</p>
					<p>
						<span id='flight_nameSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:49px;">Continent</label>:&nbsp;&nbsp;
						<input type="text" name="continent_name" id="continent_name" value=""/>
						
						<!--<select name="continent_name" id="continent_name">
						<option value="">- Select -</option>
						<?php foreach($continent_array as $cont_key=>$cont_value) { ?>
						<option value="<?php echo $cont_key; ?>"><?php echo $cont_value; ?></option>
						<?php } ?>
						</select>-->
						
					</p>
					<p>
						<span id='continent_nameSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:49px;">Country</label>:&nbsp;&nbsp;
						<input type="text" name="country_name" id="country_name" value=""/>

						<!--<select name="country_name" id="country_name">
						<option value="">- Select -</option>
						<?php foreach($country_array as $coun_key=>$coun_value) { ?>
						<option value="<?php echo $coun_key; ?>"><?php echo $coun_value; ?></option>
						<?php } ?>
						</select>-->
					</p>
					<p>
						<span id='country_nameSpan' class='backvalid'></span>
					</p>					
					
					<p>
						<label style="padding-right:20px;">Flight Cost</label>:&nbsp;&nbsp;
						<input name="flight_cost" id="flight_cost" class="text-long"  type="text" />
					</p>
					<p>
						<span id='flight_costSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Flight Status</label>:&nbsp;&nbsp;
						<select name="flight_status" id="flight_status">
						<option value="">- Select -</option>
						<?php foreach($flight_status_array as $flight_status_key=>$flight_status_value) { ?>
						<option value="<?php echo $flight_status_key; ?>"><?php echo $flight_status_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='flight_statusSpan' class='backvalid'></span>
					</p>

					<input id="submitFlight" type="submit" value="" class="button-submit"/>
					<input type="submit" value="Cancel" class="button-cancel" onclick="hide('formFlight');return false;" />
					<input type="hidden" name="flight_id" id="flight_id" value="" />
					<input type="hidden" name="action" id="action" value="" />
				</fieldset>
			</form>
		</div>
	</td>
</tr>
<tr>
	<td>
		<div class="add_link"><a href="" onclick="newFlight();return false;" class="button-submit">New Flight</a></div>
	</td>
</tr>
<tr>
	<td>
		<table class="tablecss" border='1'>
			<tr class="thead">
				<th>Flight Id</th>
				<th>Flight Name</th>
				<th>Continent</th>
				<th>Country</th>
				<th>Flight Cost</th>
				<th>Flight Status</th>
				<th>Edit/Delete</td>
			</tr>
			<?php 
			
			$result = SingleTon::selectQuery("flight_id,flight_name,continent_name,country_name,flight_cost,flight_status","ORDER BY flight_id DESC",TABLE_FLIGHT,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					$flight_id				=	$result["flight_id"];
					$flight_name			=	$result["flight_name"];
					$continent_name			=	$result["continent_name"];
					$country_name			=	$result["country_name"];
					$flight_cost			=	$result["flight_cost"];
					$flight_status			=	$result["flight_status"];

					$row_count++;
					if ($row_count%2 == 0) $row_class = 'class="odd"';
					else $row_class = 'class="even"';

			?>
			<tr <?php echo $row_class;?>>      
				<td><?php echo $flight_id;?></td>
				<td><?php echo $flight_name;?></td>
				<td><?php $fl_con = 0; foreach($continent_array as $cont_key=>$cont_value) { if($cont_key == $continent_name) { $fl_con = 1;
				echo $cont_value; } } 
				
				if($fl_con == 0) {
					echo $continent_name;
				}								
				
				?></td>
				<td><?php $fl_cou = 0; foreach($country_array as $coun_key=>$coun_value) { if($coun_key == $country_name) { 
				$fl_cou = 1;
				echo $coun_value; } } 
				
				if($fl_cou == 0) {
					echo $country_name;
				}
				
				?></td>
				<td><?php echo $flight_cost; ?></td>
				<td><?php foreach($flight_status_array as $flight_status_key=>$flight_status_value) { if($flight_status_key == $flight_status) { echo $flight_status_value; } }  ?>
				<div style="display:none;" id="flight_id-<?php echo $flight_id; ?>"><?php echo $flight_id;?></div>
				<div style="display:none;" id="flight_name-<?php echo $flight_id; ?>"><?php echo $flight_name;?></div>
				<div style="display:none;" id="continent_name-<?php echo $flight_id; ?>"><?php echo $continent_name;?></div>
				<div style="display:none;" id="country_name-<?php echo $flight_id; ?>"><?php echo $country_name;?></div>
				<div style="display:none;" id="flight_cost-<?php echo $flight_id; ?>"><?php echo $flight_cost; ?></div>
				<div style="display:none;" id="flight_status-<?php echo $flight_id; ?>"><?php echo $flight_status; ?></div>
				</td>
				
				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="editFlight('<?php echo $flight_id; ?>');return false;"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deleteFlight('<?php echo $flight_id;?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
				</td>
			</tr>
			<?php } } else { ?>
				<tr <?php echo $row_class; ?>>      
				<td colspan='11' align='center'>No Results Found</td>
				</tr>	

			<?php } ?>
		</table>
	</td>
</tr>
  <tr>
    <td bgcolor="#333333">&nbsp;</td>
  </tr>
<?php } ?>
</table>
</body>
</html>