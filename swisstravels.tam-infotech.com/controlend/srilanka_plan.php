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


			if($_FILES['sri_path']['name'] != '') {
				$thumb_name=$_FILES['sri_path']['name'];
				$thumb_size=$_FILES['sri_path']['size'];
				$thumb_type=$_FILES['sri_path']['type'];
				$thumb_tmp=$_FILES['sri_path']['tmp_name'];
		
				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		SRI_PATH_INFO.$ran.'_'.$thumb_complete_name;
				$thumbpath					=		",sri_path='$thumb_target'";
				
				$selectCount	=	"SELECT sri_path from ".TABLE_SRI." where sri_id='$sri_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if(file_exists($row['sri_path'])) {
					unlink($row['sri_path']);
				} else {	
					echo "not deleted";
				}

				move_uploaded_file($thumb_tmp,$thumb_target);
			} else {
				$thumbpath					=		'';
			}


			if($_FILES['sri_path1']['name'] != '') {
				$thumb_name1=$_FILES['sri_path1']['name'];
				$thumb_size1=$_FILES['sri_path1']['size'];
				$thumb_type1=$_FILES['sri_path1']['type'];
				$thumb_tmp1=$_FILES['sri_path1']['tmp_name'];
		
				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		SRI_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				$thumbpath1					=		",sri_path1='$thumb_target1'";
				
				$selectCount1	=	"SELECT sri_path1 from ".TABLE_SRI." where sri_id='$sri_id'";
				$selectResult1	=	mysql_query($selectCount1) or die (mysql_error());
				$num1			=	mysql_num_rows($selectResult1);	
				$row1			=	mysql_fetch_array($selectResult1);

				if(file_exists($row['sri_path1'])) {
					unlink($row['sri_path1']);
				} else {	
					echo "not deleted";
				}
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			} else {
				$thumbpath1					=		'';
			}

			if($_FILES['sri_path2']['name'] != '') {
				$thumb_name2=$_FILES['sri_path2']['name'];
				$thumb_size2=$_FILES['sri_path2']['size'];
				$thumb_type2=$_FILES['sri_path2']['type'];
				$thumb_tmp2=$_FILES['sri_path2']['tmp_name'];
		
				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		SRI_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				$thumbpath2					=		",sri_path2='$thumb_target2'";
				
				$selectCount2	=	"SELECT sri_path2 from ".TABLE_SRI." where sri_id='$sri_id'";
				$selectResult2	=	mysql_query($selectCount2) or die (mysql_error());
				$num2			=	mysql_num_rows($selectResult2);	
				$row2			=	mysql_fetch_array($selectResult2);
				
				if(file_exists($row['sri_path2'])) {
					unlink($row['sri_path2']);
				} else {	
					echo "not deleted";
				}

				move_uploaded_file($thumb_tmp2,$thumb_target2);
			} else {
				$thumbpath2				=		'';
			}

			$queryUpdate	=	"UPDATE ".TABLE_SRI." SET sri_name='$sri_name',continent_name='$continent_name',country_name='$country_name',sri_code='$sri_code',sri_ps='$sri_ps',sri_touring='$sri_touring',sri_desc='$sri_desc',sri_cost='$sri_cost',sri_front='$sri_front',sri_status='$sri_status',sri_updatedDate=NOW()".$thumbpath.$thumbpath1.$thumbpath2." WHERE sri_id='$sri_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
			$selectCount	=	"SELECT * from ".TABLE_SRI." where sri_name='$sri_name'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);


			if($_FILES['sri_path']['error']>0)
			{
				echo $_FILES['sri_path']['error']; die($_FILES['sri_path']['error']);
			}
			else
			{
				$thumb_name=$_FILES['sri_path']['name'];
				$thumb_size=$_FILES['sri_path']['size'];
				$thumb_type=$_FILES['sri_path']['type'];
				$thumb_tmp=$_FILES['sri_path']['tmp_name'];

				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		SRI_PATH_INFO.$ran.'_'.$thumb_complete_name;
				move_uploaded_file($thumb_tmp,$thumb_target);
			}

			if($_FILES['sri_path1']['error']>0)
			{
				echo $_FILES['sri_path1']['error']; die($_FILES['sri_path1']['error']);
			}
			else
			{
				$thumb_name1=$_FILES['sri_path1']['name'];
				$thumb_size1=$_FILES['sri_path1']['size'];
				$thumb_type1=$_FILES['sri_path1']['type'];
				$thumb_tmp1=$_FILES['sri_path1']['tmp_name'];

				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		SRI_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			}

			if($_FILES['sri_path2']['error']>0)
			{
				echo $_FILES['sri_path2']['error']; die($_FILES['sri_path2']['error']);
			}
			else
			{
				$thumb_name2=$_FILES['sri_path2']['name'];
				$thumb_size2=$_FILES['sri_path2']['size'];
				$thumb_type2=$_FILES['sri_path2']['type'];
				$thumb_tmp2=$_FILES['sri_path2']['tmp_name'];

				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		SRI_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				move_uploaded_file($thumb_tmp2,$thumb_target2);
			}
		
			if($num > 0) { 	
				$queryUpdate	=	"UPDATE ".TABLE_SRI." set continent_name='$continent_name',country_name='$country_name',sri_ps='$sri_ps',sri_touring='$sri_touring',sri_code='$sri_code',sri_desc='$sri_desc',sri_cost='$sri_cost',sri_status='$sri_status',sri_updatedDate=NOW() where sri_name='$sri_name'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"insert into ".TABLE_SRI." (sri_name,continent_name,country_name,sri_code,sri_ps,sri_touring,sri_desc,sri_cost,sri_path,sri_path1,sri_path2,sri_status,sri_insertedDate) values ('$sri_name','$continent_name','$country_name','$sri_code','$sri_ps','$sri_touring','$sri_desc','$sri_cost','$thumb_target','$thumb_target1','$thumb_target2','$sri_status',NOW())";

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
				$queryDelete	=	"delete from ".TABLE_SRI." where sri_id='$sri_id'";
				$resultDelete	=	mysql_query($queryDelete) or die(mysql_error());;
				$msg	=	"Plan deleted successfully";
		}
	}
}

require_once("header.php");
?>
<script type="text/javascript">

	function validatePlan() {

		var sri_name			=	document.getElementById('sri_name');
		/*var continent_name		=	document.getElementById('continent_name');
		var country_name		=	document.getElementById('country_name');*/
		var sri_code			=	document.getElementById('sri_code');
		var sri_desc			=	document.getElementById('sri_desc');
		var sri_ps				=	document.getElementById('sri_ps');
		var sri_touring			=	document.getElementById('sri_touring');
		var sri_cost			=	document.getElementById('sri_cost');
		var sri_status			=	document.getElementById('sri_status');
		var sri_path			=	document.getElementById('sri_path');
		var sri_path1			=	document.getElementById('sri_path1');
		var sri_path2			=	document.getElementById('sri_path2');
		var action_find			=	document.getElementById('action');
		
		if(sri_name.value == '') {
			document.getElementById('sri_nameSpan').innerHTML						=	"Please enter the tour name";
			/*document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';*/
			document.getElementById('sri_codeSpan').innerHTML						=	'';
			document.getElementById('sri_descSpan').innerHTML						=	'';
			document.getElementById('sri_psSpan').innerHTML				=	'';
			document.getElementById('sri_touringSpan').innerHTML						=	'';
			document.getElementById('sri_costSpan').innerHTML						=	'';
			document.getElementById('sri_statusSpan').innerHTML					=	'';
			document.getElementById('sri_pathSpan').innerHTML						=	'';
			document.getElementById('sri_path1Span').innerHTML					=	'';
			document.getElementById('sri_path2Span').innerHTML					=	'';
			sri_name.focus();
			return false;
		}
		/*else if(continent_name.value == '') {
			document.getElementById('continent_nameSpan').innerHTML					=	"Please select the continent";
			document.getElementById('sri_nameSpan').innerHTML						=	"";
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('sri_codeSpan').innerHTML						=	'';
			document.getElementById('sri_descSpan').innerHTML						=	'';
			document.getElementById('sri_psSpan').innerHTML				=	'';
			document.getElementById('sri_touringSpan').innerHTML						=	'';
			document.getElementById('sri_costSpan').innerHTML						=	'';
			document.getElementById('sri_statusSpan').innerHTML					=	'';
			document.getElementById('sri_pathSpan').innerHTML						=	'';
			document.getElementById('sri_path1Span').innerHTML					=	'';
			document.getElementById('sri_path2Span').innerHTML					=	'';
			continent_name.focus();
			return false;
		}

		else if(country_name.value == '') {
			document.getElementById('country_nameSpan').innerHTML					=	"Please select the country";
			document.getElementById('sri_nameSpan').innerHTML						=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('sri_codeSpan').innerHTML						=	'';
			document.getElementById('sri_descSpan').innerHTML						=	'';
			document.getElementById('sri_psSpan').innerHTML				=	'';
			document.getElementById('sri_touringSpan').innerHTML						=	'';
			document.getElementById('sri_costSpan').innerHTML						=	'';
			document.getElementById('sri_statusSpan').innerHTML					=	'';
			document.getElementById('sri_pathSpan').innerHTML						=	'';
			document.getElementById('sri_path1Span').innerHTML						=	'';
			document.getElementById('sri_path2Span').innerHTML						=	'';
			country_name.focus();
			return false;
		}*/

		else if(sri_code.value == '') {
			document.getElementById('sri_codeSpan').innerHTML			=	'Please enter the tour code';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('continent_nameSpan').innerHTML		=	"";*/
			document.getElementById('sri_descSpan').innerHTML			=	'';
			document.getElementById('sri_psSpan').innerHTML				=	'';
			document.getElementById('sri_touringSpan').innerHTML						=	'';
			document.getElementById('sri_costSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML			=	'';
			document.getElementById('sri_path1Span').innerHTML						=	'';
			document.getElementById('sri_path2Span').innerHTML						=	'';
			sri_code.focus();
			return false;
		}

		else if(sri_desc.value == '') {
			document.getElementById('sri_descSpan').innerHTML			=	'Please enter the tour description';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('sri_codeSpan').innerHTML			=	'';
			document.getElementById('sri_psSpan').innerHTML	=	'';
			document.getElementById('sri_touringSpan').innerHTML			=	'';
			document.getElementById('sri_costSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML			=	'';
			document.getElementById('sri_path1Span').innerHTML		=	'';
			document.getElementById('sri_path2Span').innerHTML		=	'';
			sri_desc.focus();
			return false;
		}

		else if(sri_ps.value == '') {
			document.getElementById('sri_psSpan').innerHTML			=	'Please enter Product & Services';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('sri_codeSpan').innerHTML			=	'';
			document.getElementById('sri_touringSpan').innerHTML			=	'';
			document.getElementById('sri_costSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML			=	'';
			document.getElementById('sri_path1Span').innerHTML		=	'';
			document.getElementById('sri_path2Span').innerHTML		=	'';
			sri_desc.focus();
			return false;
		}

		else if(sri_touring.value == '') {
			document.getElementById('sri_touringSpan').innerHTML			=	'Please enter sri_touring details';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('sri_codeSpan').innerHTML			=	'';
			document.getElementById('sri_psSpan').innerHTML	=	'';
			document.getElementById('sri_costSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML			=	'';
			document.getElementById('sri_path1Span').innerHTML		=	'';
			document.getElementById('sri_path2Span').innerHTML		=	'';
			sri_desc.focus();
			return false;
		}

		else if(sri_cost.value == '') {
			document.getElementById('sri_costSpan').innerHTML			=	'Please enter the tour cost';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('sri_codeSpan').innerHTML			=	'';
			document.getElementById('sri_descSpan').innerHTML			=	'';
			document.getElementById('sri_psSpan').innerHTML	=	'';
			document.getElementById('sri_touringSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML			=	'';
			document.getElementById('sri_path1Span').innerHTML		=	'';
			document.getElementById('sri_path2Span').innerHTML		=	'';
			sri_cost.focus();
			return false;
		}
		else if(sri_status.value == '') {
			document.getElementById('sri_statusSpan').innerHTML			=	'Please select the status';
			document.getElementById('sri_nameSpan').innerHTML				=	"";
			/*document.getElementById('continent_nameSpan').innerHTML			=	"";
			document.getElementById('country_nameSpan').innerHTML			=	'';*/
			document.getElementById('sri_codeSpan').innerHTML				=	'';
			document.getElementById('sri_descSpan').innerHTML				=	'';
			document.getElementById('sri_psSpan').innerHTML		=	'';
			document.getElementById('sri_touringSpan').innerHTML				=	'';
			document.getElementById('sri_costSpan').innerHTML				=	'';
			document.getElementById('sri_pathSpan').innerHTML				=	'';
			document.getElementById('sri_path1Span').innerHTML						=	'';
			document.getElementById('sri_path2Span').innerHTML						=	'';
			sri_status.focus();
			return false;
		}
		
		if(action_find.value == 'new') {

			if(sri_path.value == '') {
				document.getElementById('sri_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('sri_nameSpan').innerHTML			=	"";
				/*document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';*/
				document.getElementById('sri_codeSpan').innerHTML			=	'';
				document.getElementById('sri_descSpan').innerHTML			=	'';
				document.getElementById('sri_psSpan').innerHTML	=	'';
				document.getElementById('sri_touringSpan').innerHTML			=	'';
				document.getElementById('sri_costSpan').innerHTML			=	'';
				document.getElementById('sri_statusSpan').innerHTML		=	'';
				document.getElementById('sri_path1Span').innerHTML						=	'';
				document.getElementById('sri_path2Span').innerHTML						=	'';
				sri_path.focus();
				return false;
			} 
			if(sri_path1.value == '') {
			document.getElementById('sri_pathSpan').innerHTML			=	'Please pick the thumb image';
			document.getElementById('sri_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('sri_codeSpan').innerHTML			=	'';
			document.getElementById('sri_descSpan').innerHTML			=	'';
			document.getElementById('sri_psSpan').innerHTML	=	'';
			document.getElementById('sri_touringSpan').innerHTML			=	'';
			document.getElementById('sri_costSpan').innerHTML			=	'';
			document.getElementById('sri_statusSpan').innerHTML		=	'';
			document.getElementById('sri_pathSpan').innerHTML						=	'';
			document.getElementById('sri_path2Span').innerHTML						=	'';
			sri_path1.focus();
			return false;
			} if(sri_path2.value == '') {
				document.getElementById('sri_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('sri_nameSpan').innerHTML			=	"";
				/*document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';*/
				document.getElementById('sri_codeSpan').innerHTML			=	'';
				document.getElementById('sri_descSpan').innerHTML			=	'';
				document.getElementById('sri_psSpan').innerHTML	=	'';
				document.getElementById('sri_touringSpan').innerHTML			=	'';
				document.getElementById('sri_costSpan').innerHTML			=	'';
				document.getElementById('sri_statusSpan').innerHTML		=	'';
				document.getElementById('sri_pathSpan').innerHTML						=	'';
				document.getElementById('sri_path1Span').innerHTML						=	'';
				sri_path2.focus();
				return false;
			} else { 
				document.plan_form.action="";
				document.plan_form.method="post";
				document.plan_form.submit();
			}
		}
		else { 
			document.plan_form.action="";
			document.plan_form.method="post";
			document.plan_form.submit();
		}
	}

	function newPlan(){
		d												=	document.plan_form;
		d.sri_id.value									=	"";
		d.sri_name.value								=	"";
		d.continent_name.value							=	d.continent_name.value;
		d.country_name.value							=	d.country_name.value;
		d.sri_code.value								=	"";
		d.sri_desc.value								=	"";
		d.sri_ps.value						=	"";
		d.sri_touring.value									=	"";
		d.sri_cost.value								=	"";
		d.sri_status.value								=	"";
		d.sri_path.value								=	"";
		d.sri_path1.value								=	"";
		d.sri_path2.value								=	"";

		d.action.value									=	"new";
		d.submitPlan.value								=	"Add Plan";
		document.getElementById("form-tab").innerHTML	=	"Add Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function editPlan(sri_id){
		d												=	document.plan_form;
		d.sri_id.value									=	sri_id;
		d.sri_name.value								=	document.getElementById('sri_name-'+sri_id).innerHTML; //tour name
		d.continent_name.value							=	document.getElementById('continent_name-'+sri_id).innerHTML; //Continent Name
		d.country_name.value							=	document.getElementById('country_name-'+sri_id).innerHTML;//Country Name
		d.sri_code.value								=	document.getElementById('sri_code-'+sri_id).innerHTML;//Tour Code
		d.sri_desc.value								=	document.getElementById('sri_desc-'+sri_id).innerHTML;//Tour Description
		d.sri_ps.value								=	document.getElementById('sri_ps-'+sri_id).innerHTML;//Tour Product & Services
		d.sri_touring.value								=	document.getElementById('sri_touring-'+sri_id).innerHTML;//sri_touring details
		d.sri_cost.value								=	document.getElementById('sri_cost-'+sri_id).innerHTML;//Tour Cost
		d.sri_status.value								=	document.getElementById('sri_status-'+sri_id).innerHTML;//Plan Status
		d.image_holder.src								=	document.getElementById('sri_path-'+sri_id).innerHTML;//Thumb Path
		d.image_holder1.src								=	document.getElementById('sri_path1-'+sri_id).innerHTML;//Thumb Path
		d.image_holder2.src								=	document.getElementById('sri_path2-'+sri_id).innerHTML;//Thumb Path
		d.action.value									=	"edit";
		d.submitPlan.value								=	"Edit Plan";
		document.getElementById("form-tab").innerHTML	=	"Edit Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function deletePlan(sri_id){
		if (confirm('Are You Sure You Want to Delete '+document.getElementById('sri_name-'+sri_id).innerHTML+'?'))
		window.location = "srilanka_plan.php?action=delete&sri_id=" + sri_id;
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
		<p>Manage Your Tour Plans</p>
	</td>
</tr>
<tr>
	<td>
		<div id='formPlan' style="display:none;">
			<div id="form-tab" class="form-tab"></div>
			<div class="clear"></div>
			<form name="plan_form" action="srilanka_plan.php" method="post" onsubmit="return validatePlan();" enctype='multipart/form-data'>
				<fieldset>
					<p>
						<label style="padding-right:20px;">Tour Name</label>:&nbsp;&nbsp;
						<input name="sri_name" id="sri_name" class="text-long"  type="text" />
						<input name="continent_name" id="continent_name" class="text-long"  value="ASI" readonly type="hidden" />
						<input name="country_name" id="country_name" class="text-long"  value="SRI" readonly type="hidden" />
					</p>
					<p>
						<span id='sri_nameSpan' class='backvalid'></span>
					</p>
					
					<!--<p>
						<label style="padding-right:49px;">Continent</label>:&nbsp;&nbsp;
						<input name="continent_name" id="continent_name" class="text-long"  value="ASI" readonly type="hidden" />
					</p>
					<p>
						<span id='continent_nameSpan' class='backvalid'></span>
					</p>
					<p>
						<label style="padding-right:49px;">Country</label>:&nbsp;&nbsp;
						<input name="country_name" id="country_name" class="text-long"  value="SRI" readonly type="hidden" />
					</p>
					<p>
						<span id='country_nameSpan' class='backvalid'></span>
					</p>-->
					
					<p>
						<label style="padding-right:20px;">Tour Code</label>:&nbsp;&nbsp;
						<input name="sri_code" id="sri_code" class="text-long"  type="text" />
					</p>
					<p>
						<span id='sri_codeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Tour Description</label>:&nbsp;&nbsp;
						<textarea name="sri_desc" id="sri_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='sri_descSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Product & Services</label>:&nbsp;&nbsp;
						<textarea name="sri_ps" id="sri_ps" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='sri_psSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Touring Details</label>:&nbsp;&nbsp;
						<textarea name="sri_touring" id="sri_touring" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='sri_touringSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Tour Cost</label>:&nbsp;&nbsp;
						<input name="sri_cost" id="sri_cost" class="text-long"  type="text" />
					</p>
					<p>
						<span id='sri_costSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Plan Status</label>:&nbsp;&nbsp;
						<select name="sri_status" id="sri_status">
						<option value="">- Select -</option>
						<?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { ?>
						<option value="<?php echo $plan_status_key; ?>"><?php echo $plan_status_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='sri_statusSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 1</label>:&nbsp;&nbsp;
						<input name="sri_path" id="sri_path" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder' height='50' width='50' />
					</p>
					<p>
						<span id='sri_pathSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 2</label>:&nbsp;&nbsp;
						<input name="sri_path1" id="sri_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='sri_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 3</label>:&nbsp;&nbsp;
						<input name="sri_path2" id="sri_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder2' height='50' width='50' />
					</p>
					<p>
						<span id='sri_path2Span' class='backvalid'></span>
					</p>

					<input id="submitPlan" type="submit" value="" class="button-submit"/>
					<input type="submit" value="Cancel" class="button-cancel" onclick="hide('formPlan');return false;" />
					<input type="hidden" name="sri_id" id="sri_id" value="" />
					<input type="hidden" name="action" id="action" value="" />
				</fieldset>
			</form>
		</div>
	</td>
</tr>
<tr>
	<td>
		<div class="add_link"><a href="" onclick="newPlan();return false;" class="button-submit">New Plan</a></div>
	</td>
</tr>
<tr>
	<td>
		<table class="tablecss" border='1'>
			<tr class="thead">
				<th>Tour Id</th>
				<th>Tour Name</th>
				<th>Continent</th>
				<th>Country</th>
				<th>Tour Code</th>
				<th>Tour Description</th>
				<th>Tour Cost</th>
				<th>Plan Status</th>
				<th>Thumb Image 1</th>
				<th>Thumb Image 2</th>
				<th>Thumb Image 3</th>
				<th>Edit/Delete</td>
			</tr>
			<?php 
			
			$result = SingleTon::selectQuery("sri_id,sri_name,continent_name,country_name,sri_ps,sri_touring,sri_code,sri_desc,sri_cost,sri_path,sri_path1,sri_path2,sri_status","ORDER BY sri_id DESC",TABLE_SRI,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					$sri_id					=	$result["sri_id"];
					$sri_name				=	$result["sri_name"];
					$continent_name			=	$result["continent_name"];
					$country_name			=	$result["country_name"];
					$sri_code				=	$result["sri_code"];
					$sri_desc				=	$result["sri_desc"];
					$sri_ps					=	$result["sri_ps"];
					$sri_touring			=	$result["sri_touring"];
					$sri_cost				=	$result["sri_cost"];
					$sri_status				=	$result["sri_status"];
					$sri_path				=	$result["sri_path"];
					$sri_path1				=	$result["sri_path1"];
					$sri_path2				=	$result["sri_path2"];

					$row_count++;
					if ($row_count%2 == 0) $row_class = 'class="odd"';
					else $row_class = 'class="even"';

			?>
			<tr <?php echo $row_class;?>>      
				<td><?php echo $sri_id;?></td>
				<td><?php echo $sri_name;?></td>
				<td><?php foreach($continent_array as $cont_key=>$cont_value) { if($cont_key == $continent_name) { echo $cont_value; } } ?></td>
				<td><?php foreach($country_array as $coun_key=>$coun_value) { if($coun_key == $country_name) { echo $coun_value; } } ?></td>
				<td><?php echo $sri_code; ?></td>
				<td><?php echo $sri_desc; ?></td>
				<td><?php echo $sri_cost; ?></td>
				<td><?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { if($plan_status_key == $sri_status) { echo $plan_status_value; } } ?></td>
				<td><img src='<?php echo $sri_path; ?>' width='30' height='30' />

				<div style="display:none;" id="sri_id-<?php echo $sri_id; ?>"><?php echo $sri_id;?></div>
				<div style="display:none;" id="sri_name-<?php echo $sri_id; ?>"><?php echo $sri_name;?></div>
				<div style="display:none;" id="continent_name-<?php echo $sri_id; ?>"><?php echo $continent_name;?></div>
				<div style="display:none;" id="country_name-<?php echo $sri_id; ?>"><?php echo $country_name;?></div>
				<div style="display:none;" id="sri_code-<?php echo $sri_id; ?>"><?php echo $sri_code; ?></div>
				<div style="display:none;" id="sri_desc-<?php echo $sri_id; ?>"><?php echo $sri_desc; ?></div>
				<div style="display:none;" id="sri_ps-<?php echo $sri_id; ?>"><?php echo $sri_ps; ?></div>
				<div style="display:none;" id="sri_touring-<?php echo $sri_id; ?>"><?php echo $sri_touring; ?></div>
				<div style="display:none;" id="sri_cost-<?php echo $sri_id; ?>"><?php echo $sri_cost; ?></div>
				<div style="display:none;" id="sri_status-<?php echo $sri_id; ?>"><?php echo $sri_status; ?></div>
				<div style="display:none;" id="sri_path-<?php echo $sri_id; ?>"><?php echo $sri_path; ?></div>
				<div style="display:none;" id="sri_path1-<?php echo $sri_id; ?>"><?php echo $sri_path1; ?></div>
				<div style="display:none;" id="sri_path2-<?php echo $sri_id; ?>"><?php echo $sri_path2; ?></div></td>
				
				<td><img src='<?php echo $sri_path1; ?>' width='30' height='30' /></td>				
				<td><img src='<?php echo $sri_path2; ?>' width='30' height='30' /></td>

				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="editPlan('<?php echo $sri_id; ?>');return false;"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deletePlan('<?php echo $sri_id;?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
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