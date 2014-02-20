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
        
        $isrl_name       =       mysql_real_escape_string(nl2br($isrl_name));
        $isrl_code       =       mysql_real_escape_string(nl2br($isrl_code));
        $isrl_ps         =       mysql_real_escape_string(nl2br($isrl_ps));
        $isrl_touring    =       mysql_real_escape_string(nl2br($isrl_touring));
        $isrl_desc       =       mysql_real_escape_string(nl2br($isrl_desc));
        $isrl_cost       =       mysql_real_escape_string(nl2br($isrl_cost));
                
        //echo debugerr($_REQUEST);
        
        //exit(0);
	if(isset($_REQUEST['action']) && $_REQUEST['action'] != '' ) {
		
		if($_POST['action'] == 'edit') {


			if($_FILES['isrl_path']['name'] != '') {
				$thumb_name=$_FILES['isrl_path']['name'];
				$thumb_size=$_FILES['isrl_path']['size'];
				$thumb_type=$_FILES['isrl_path']['type'];
				$thumb_tmp=$_FILES['isrl_path']['tmp_name'];
		
				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		ISRL_PATH_INFO.$ran.'_'.$thumb_complete_name;
				$thumbpath					=		",isrl_path='$thumb_target'";
				
				$selectCount	=	"SELECT isrl_path from ".TABLE_ISRL." where isrl_id='$isrl_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if(file_exists($row['isrl_path'])) {
					unlink($row['isrl_path']);
				} else {	
					echo "not deleted";
				}

				move_uploaded_file($thumb_tmp,$thumb_target);
			} else {
				$thumbpath					=		'';
			}


			if($_FILES['isrl_path1']['name'] != '') {
				$thumb_name1=$_FILES['isrl_path1']['name'];
				$thumb_size1=$_FILES['isrl_path1']['size'];
				$thumb_type1=$_FILES['isrl_path1']['type'];
				$thumb_tmp1=$_FILES['isrl_path1']['tmp_name'];
		
				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		ISRL_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				$thumbpath1					=		",isrl_path1='$thumb_target1'";
				
				$selectCount1	=	"SELECT isrl_path1 from ".TABLE_ISRL." where isrl_id='$isrl_id'";
				$selectResult1	=	mysql_query($selectCount1) or die (mysql_error());
				$num1			=	mysql_num_rows($selectResult1);	
				$row1			=	mysql_fetch_array($selectResult1);

				if(file_exists($row['isrl_path1'])) {
					unlink($row['isrl_path1']);
				} else {	
					echo "not deleted";
				}
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			} else {
				$thumbpath1					=		'';
			}

			if($_FILES['isrl_path2']['name'] != '') {
				$thumb_name2=$_FILES['isrl_path2']['name'];
				$thumb_size2=$_FILES['isrl_path2']['size'];
				$thumb_type2=$_FILES['isrl_path2']['type'];
				$thumb_tmp2=$_FILES['isrl_path2']['tmp_name'];
		
				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		ISRL_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				$thumbpath2					=		",isrl_path2='$thumb_target2'";
				
				$selectCount2	=	"SELECT isrl_path2 from ".TABLE_ISRL." where isrl_id='$isrl_id'";
				$selectResult2	=	mysql_query($selectCount2) or die (mysql_error());
				$num2			=	mysql_num_rows($selectResult2);	
				$row2			=	mysql_fetch_array($selectResult2);
				
				if(file_exists($row['isrl_path2'])) {
					unlink($row['isrl_path2']);
				} else {	
					echo "not deleted";
				}

				move_uploaded_file($thumb_tmp2,$thumb_target2);
			} else {
				$thumbpath2				=		'';
			}

			$queryUpdate	=	"UPDATE ".TABLE_ISRL." SET isrl_name='$isrl_name',continent_name='$continent_name',country_name='$country_name',isrl_code='$isrl_code',isrl_ps='$isrl_ps',isrl_touring='$isrl_touring',isrl_desc='$isrl_desc',isrl_cost='$isrl_cost',isrl_front='$isrl_front',isrl_status='$isrl_status',isrl_updatedDate=NOW()".$thumbpath.$thumbpath1.$thumbpath2." WHERE isrl_id='$isrl_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
			$selectCount	=	"SELECT * from ".TABLE_ISRL." where isrl_name='$isrl_name'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);


			if($_FILES['isrl_path']['error']>0)
			{
				echo $_FILES['isrl_path']['error']; die($_FILES['isrl_path']['error']);
			}
			else
			{
				$thumb_name=$_FILES['isrl_path']['name'];
				$thumb_size=$_FILES['isrl_path']['size'];
				$thumb_type=$_FILES['isrl_path']['type'];
				$thumb_tmp=$_FILES['isrl_path']['tmp_name'];

				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		ISRL_PATH_INFO.$ran.'_'.$thumb_complete_name;
				move_uploaded_file($thumb_tmp,$thumb_target);
			}

			if($_FILES['isrl_path1']['error']>0)
			{
				echo $_FILES['isrl_path1']['error']; die($_FILES['isrl_path1']['error']);
			}
			else
			{
				$thumb_name1=$_FILES['isrl_path1']['name'];
				$thumb_size1=$_FILES['isrl_path1']['size'];
				$thumb_type1=$_FILES['isrl_path1']['type'];
				$thumb_tmp1=$_FILES['isrl_path1']['tmp_name'];

				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		ISRL_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			}

			if($_FILES['isrl_path2']['error']>0)
			{
				echo $_FILES['isrl_path2']['error']; die($_FILES['isrl_path2']['error']);
			}
			else
			{
				$thumb_name2=$_FILES['isrl_path2']['name'];
				$thumb_size2=$_FILES['isrl_path2']['size'];
				$thumb_type2=$_FILES['isrl_path2']['type'];
				$thumb_tmp2=$_FILES['isrl_path2']['tmp_name'];

				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		ISRL_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				move_uploaded_file($thumb_tmp2,$thumb_target2);
			}
		
			if($num > 0) { 	
				$queryUpdate	=	"UPDATE ".TABLE_ISRL." set continent_name='$continent_name',country_name='$country_name',isrl_ps='$isrl_ps',isrl_touring='$isrl_touring',isrl_code='$isrl_code',isrl_desc='$isrl_desc',isrl_cost='$isrl_cost',isrl_status='$isrl_status',isrl_updatedDate=NOW() where isrl_name='$isrl_name'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"insert into ".TABLE_ISRL." (isrl_name,continent_name,country_name,isrl_code,isrl_ps,isrl_touring,isrl_desc,isrl_cost,isrl_path,isrl_path1,isrl_path2,isrl_status,isrl_insertedDate) values ('$isrl_name','$continent_name','$country_name','$isrl_code','$isrl_ps','$isrl_touring','$isrl_desc','$isrl_cost','$thumb_target','$thumb_target1','$thumb_target2','$isrl_status',NOW())";

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
				$queryDelete	=	"delete from ".TABLE_ISRL." where isrl_id='$isrl_id'";
				$resultDelete	=	mysql_query($queryDelete) or die(mysql_error());;
				$msg	=	"Plan deleted successfully";
		}
	}
}

require_once("header.php");
?>
<script type="text/javascript">

	function validateIsrael() {

		var isrl_name			=	document.getElementById('isrl_name');
		/*var continent_name		=	document.getElementById('continent_name');
		var country_name		=	document.getElementById('country_name');*/
		var isrl_code			=	document.getElementById('isrl_code');
		var isrl_desc			=	document.getElementById('isrl_desc');
		var isrl_ps				=	document.getElementById('isrl_ps');
		var isrl_touring			=	document.getElementById('isrl_touring');
		var isrl_cost			=	document.getElementById('isrl_cost');
                var isrl_status			=	document.getElementById('isrl_status');
		var isrl_path			=	document.getElementById('isrl_path');
		var isrl_path1			=	document.getElementById('isrl_path1');
		var isrl_path2			=	document.getElementById('isrl_path2');
		var action_find			=	document.getElementById('action');
		
		if(isrl_name.value == '') {
			document.getElementById('isrl_nameSpan').innerHTML						=	"Please enter the tour name";
			/*document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML						=	'';
			document.getElementById('isrl_descSpan').innerHTML						=	'';
			document.getElementById('isrl_psSpan').innerHTML				=	'';
			document.getElementById('isrl_touringSpan').innerHTML						=	'';
			document.getElementById('isrl_costSpan').innerHTML						=	'';                                               
			document.getElementById('isrl_statusSpan').innerHTML					=	'';
			document.getElementById('isrl_pathSpan').innerHTML						=	'';
			document.getElementById('isrl_path1Span').innerHTML					=	'';
			document.getElementById('isrl_path2Span').innerHTML					=	'';
			isrl_name.focus();
			return false;
		}
		/*else if(continent_name.value == '') {
			document.getElementById('continent_nameSpan').innerHTML					=	"Please select the continent";
			document.getElementById('isrl_nameSpan').innerHTML						=	"";
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('isrl_codeSpan').innerHTML						=	'';
			document.getElementById('isrl_descSpan').innerHTML						=	'';
			document.getElementById('isrl_psSpan').innerHTML				=	'';
			document.getElementById('isrl_touringSpan').innerHTML						=	'';
			document.getElementById('isrl_costSpan').innerHTML						=	'';
			document.getElementById('isrl_statusSpan').innerHTML					=	'';
			document.getElementById('isrl_pathSpan').innerHTML						=	'';
			document.getElementById('isrl_path1Span').innerHTML					=	'';
			document.getElementById('isrl_path2Span').innerHTML					=	'';
			continent_name.focus();
			return false;
		}

		else if(country_name.value == '') {
			document.getElementById('country_nameSpan').innerHTML					=	"Please select the country";
			document.getElementById('isrl_nameSpan').innerHTML						=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('isrl_codeSpan').innerHTML						=	'';
			document.getElementById('isrl_descSpan').innerHTML						=	'';
			document.getElementById('isrl_psSpan').innerHTML				=	'';
			document.getElementById('isrl_touringSpan').innerHTML						=	'';
			document.getElementById('isrl_costSpan').innerHTML						=	'';
			document.getElementById('isrl_statusSpan').innerHTML					=	'';
			document.getElementById('isrl_pathSpan').innerHTML						=	'';
			document.getElementById('isrl_path1Span').innerHTML						=	'';
			document.getElementById('isrl_path2Span').innerHTML						=	'';
			country_name.focus();
			return false;
		}*/

		else if(isrl_code.value == '') {
			document.getElementById('isrl_codeSpan').innerHTML			=	'Please enter the tour code';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('continent_nameSpan').innerHTML		=	"";*/
			document.getElementById('isrl_descSpan').innerHTML			=	'';
			document.getElementById('isrl_psSpan').innerHTML				=	'';
			document.getElementById('isrl_touringSpan').innerHTML						=	'';
			document.getElementById('isrl_costSpan').innerHTML			=	'';
			document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML			=	'';
			document.getElementById('isrl_path1Span').innerHTML						=	'';
			document.getElementById('isrl_path2Span').innerHTML						=	'';
			isrl_code.focus();
			return false;
		}

		else if(isrl_desc.value == '') {
			document.getElementById('isrl_descSpan').innerHTML			=	'Please enter the tour description';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML			=	'';
			document.getElementById('isrl_psSpan').innerHTML	=	'';
			document.getElementById('isrl_touringSpan').innerHTML			=	'';
			document.getElementById('isrl_costSpan').innerHTML			=	'';
			document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML			=	'';
			document.getElementById('isrl_path1Span').innerHTML		=	'';
			document.getElementById('isrl_path2Span').innerHTML		=	'';
			isrl_desc.focus();
			return false;
		}

		else if(isrl_ps.value == '') {
			document.getElementById('isrl_psSpan').innerHTML			=	'Please enter Product & Services';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML			=	'';
			document.getElementById('isrl_touringSpan').innerHTML			=	'';
			document.getElementById('isrl_costSpan').innerHTML			=	'';
			document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML			=	'';
			document.getElementById('isrl_path1Span').innerHTML		=	'';
			document.getElementById('isrl_path2Span').innerHTML		=	'';
			isrl_desc.focus();
			return false;
		}

		else if(isrl_touring.value == '') {
			document.getElementById('isrl_touringSpan').innerHTML			=	'Please enter isrl_touring details';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML			=	'';
			document.getElementById('isrl_psSpan').innerHTML	=	'';
			document.getElementById('isrl_costSpan').innerHTML			=	'';
                        document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML			=	'';
			document.getElementById('isrl_path1Span').innerHTML		=	'';
			document.getElementById('isrl_path2Span').innerHTML		=	'';
			isrl_desc.focus();
			return false;
		}

		else if(isrl_cost.value == '') {
			document.getElementById('isrl_costSpan').innerHTML			=	'Please enter the tour cost';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML			=	'';
			document.getElementById('isrl_descSpan').innerHTML			=	'';
			document.getElementById('isrl_psSpan').innerHTML	=	'';
			document.getElementById('isrl_touringSpan').innerHTML			=	'';
                        document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML			=	'';
			document.getElementById('isrl_path1Span').innerHTML		=	'';
			document.getElementById('isrl_path2Span').innerHTML		=	'';
			isrl_cost.focus();
			return false;
		}                
		else if(isrl_status.value == '') {
			document.getElementById('isrl_statusSpan').innerHTML			=	'Please select the status';
			document.getElementById('isrl_nameSpan').innerHTML				=	"";
			/*document.getElementById('continent_nameSpan').innerHTML			=	"";
			document.getElementById('country_nameSpan').innerHTML			=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML				=	'';
			document.getElementById('isrl_descSpan').innerHTML				=	'';
			document.getElementById('isrl_psSpan').innerHTML		=	'';
			document.getElementById('isrl_touringSpan').innerHTML				=	'';
			document.getElementById('isrl_costSpan').innerHTML				=	'';
			document.getElementById('isrl_pathSpan').innerHTML				=	'';
			document.getElementById('isrl_path1Span').innerHTML						=	'';
			document.getElementById('isrl_path2Span').innerHTML						=	'';
			isrl_status.focus();
			return false;
		}
		
		if(action_find.value == 'new') {

			if(isrl_path.value == '') {
				document.getElementById('isrl_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('isrl_nameSpan').innerHTML			=	"";
				/*document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';*/
				document.getElementById('isrl_codeSpan').innerHTML			=	'';
				document.getElementById('isrl_descSpan').innerHTML			=	'';
				document.getElementById('isrl_psSpan').innerHTML	=	'';
				document.getElementById('isrl_touringSpan').innerHTML			=	'';
				document.getElementById('isrl_costSpan').innerHTML			=	'';
				document.getElementById('isrl_statusSpan').innerHTML		=	'';
				document.getElementById('isrl_path1Span').innerHTML						=	'';
				document.getElementById('isrl_path2Span').innerHTML						=	'';
				isrl_path.focus();
				return false;
			} 
			if(isrl_path1.value == '') {
			document.getElementById('isrl_pathSpan').innerHTML			=	'Please pick the thumb image';
			document.getElementById('isrl_nameSpan').innerHTML			=	"";
			/*document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';*/
			document.getElementById('isrl_codeSpan').innerHTML			=	'';
			document.getElementById('isrl_descSpan').innerHTML			=	'';
			document.getElementById('isrl_psSpan').innerHTML	=	'';
			document.getElementById('isrl_touringSpan').innerHTML			=	'';
			document.getElementById('isrl_costSpan').innerHTML			=	'';
			document.getElementById('isrl_statusSpan').innerHTML		=	'';
			document.getElementById('isrl_pathSpan').innerHTML						=	'';
			document.getElementById('isrl_path2Span').innerHTML						=	'';
			isrl_path1.focus();
			return false;
			} if(isrl_path2.value == '') {
				document.getElementById('isrl_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('isrl_nameSpan').innerHTML			=	"";
				/*document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';*/
				document.getElementById('isrl_codeSpan').innerHTML			=	'';
				document.getElementById('isrl_descSpan').innerHTML			=	'';
				document.getElementById('isrl_psSpan').innerHTML	=	'';
				document.getElementById('isrl_touringSpan').innerHTML			=	'';
				document.getElementById('isrl_costSpan').innerHTML			=	'';
				document.getElementById('isrl_statusSpan').innerHTML		=	'';
				document.getElementById('isrl_pathSpan').innerHTML						=	'';
				document.getElementById('isrl_path1Span').innerHTML						=	'';
				isrl_path2.focus();
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
		d.isrl_id.value									=	"";
		d.isrl_name.value								=	"";
		d.continent_name.value							=	d.continent_name.value;
		d.country_name.value							=	d.country_name.value;
		d.isrl_code.value								=	"";
		d.isrl_desc.value								=	"";
		d.isrl_ps.value						=	"";
		d.isrl_touring.value									=	"";
		d.isrl_cost.value								=	"";
		d.isrl_status.value								=	"";
		d.isrl_path.value								=	"";
		d.isrl_path1.value								=	"";
		d.isrl_path2.value								=	"";

		d.action.value									=	"new";
		d.submitPlan.value								=	"Add Plan";
		document.getElementById("form-tab").innerHTML	=	"Add Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function editPlan(isrl_id){
		d												=	document.plan_form;
		d.isrl_id.value									=	isrl_id;
		d.isrl_name.value								=	document.getElementById('isrl_name-'+isrl_id).innerHTML; //tour name
		d.continent_name.value							=	document.getElementById('continent_name-'+isrl_id).innerHTML; //Continent Name
		d.country_name.value							=	document.getElementById('country_name-'+isrl_id).innerHTML;//Country Name
		d.isrl_code.value								=	document.getElementById('isrl_code-'+isrl_id).innerHTML;//Tour Code
		d.isrl_desc.value								=	document.getElementById('isrl_desc-'+isrl_id).innerHTML;//Tour Description
		d.isrl_ps.value								=	document.getElementById('isrl_ps-'+isrl_id).innerHTML;//Tour Product & Services
		d.isrl_touring.value								=	document.getElementById('isrl_touring-'+isrl_id).innerHTML;//isrl_touring details
		d.isrl_cost.value								=	document.getElementById('isrl_cost-'+isrl_id).innerHTML;//Tour Cost
		d.isrl_status.value								=	document.getElementById('isrl_status-'+isrl_id).innerHTML;//Plan Status
		d.image_holder.src								=	document.getElementById('isrl_path-'+isrl_id).innerHTML;//Thumb Path
		d.image_holder1.src								=	document.getElementById('isrl_path1-'+isrl_id).innerHTML;//Thumb Path
		d.image_holder2.src								=	document.getElementById('isrl_path2-'+isrl_id).innerHTML;//Thumb Path
		d.action.value									=	"edit";
		d.submitPlan.value								=	"Edit Plan";
		document.getElementById("form-tab").innerHTML	=	"Edit Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function deletePlan(isrl_id){
		if (confirm('Are You Sure You Want to Delete '+document.getElementById('isrl_name-'+isrl_id).innerHTML+'?'))
		window.location = "israel_plan.php?action=delete&isrl_id=" + isrl_id;
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
			<form name="plan_form" action="israel_plan.php" method="post" onsubmit="return validateIsrael();" enctype='multipart/form-data'>
				<fieldset>
					<p>
						<label style="padding-right:20px;">Tour Name</label>:&nbsp;&nbsp;
						<input name="isrl_name" id="isrl_name" class="text-long"  type="text" />
						<input name="continent_name" id="continent_name" class="text-long"  value="ASI" readonly type="hidden" />
						<input name="country_name" id="country_name" class="text-long"  value="ISR" readonly type="hidden" />
					</p>
					<p>
						<span id='isrl_nameSpan' class='backvalid'></span>
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
						<input name="country_name" id="country_name" class="text-long"  value="ISR" readonly type="hidden" />
					</p>
					<p>
						<span id='country_nameSpan' class='backvalid'></span>
					</p>-->
					
					<p>
						<label style="padding-right:20px;">Tour Code</label>:&nbsp;&nbsp;
						<input name="isrl_code" id="isrl_code" class="text-long"  type="text" />
					</p>
					<p>
						<span id='isrl_codeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Tour Description</label>:&nbsp;&nbsp;
						<textarea  style="width: 590px;" name="isrl_desc" id="isrl_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='isrl_descSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Product & Services</label>:&nbsp;&nbsp;
						<textarea style="width: 550px;" name="isrl_ps" id="isrl_ps" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='isrl_psSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Touring Details</label>:&nbsp;&nbsp;
						<textarea style="width: 570px;" name="isrl_touring" id="isrl_touring" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='isrl_touringSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Tour Cost</label>:&nbsp;&nbsp;
						<input name="isrl_cost" id="isrl_cost" class="text-long"  type="text" />
					</p>
					<p>
						<span id='isrl_costSpan' class='backvalid'></span>
					</p>                                                                                                                        
					<p>
						<label style="padding-right:20px;">Plan Status</label>:&nbsp;&nbsp;
						<select name="isrl_status" id="isrl_status">
						<option value="">- Select -</option>
						<?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { ?>
						<option value="<?php echo $plan_status_key; ?>"><?php echo $plan_status_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='isrl_statusSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 1</label>:&nbsp;&nbsp;
						<input name="isrl_path" id="isrl_path" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder' height='50' width='50' />
					</p>
					<p>
						<span id='isrl_pathSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 2</label>:&nbsp;&nbsp;
						<input name="isrl_path1" id="isrl_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='isrl_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 3</label>:&nbsp;&nbsp;
						<input name="isrl_path2" id="isrl_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder2' height='50' width='50' />
					</p>
					<p>
						<span id='isrl_path2Span' class='backvalid'></span>
					</p>

					<input id="submitPlan" type="submit" value="" class="button-submit"/>
					<input type="submit" value="Cancel" class="button-cancel" onclick="hide('formPlan');return false;" />
					<input type="hidden" name="isrl_id" id="isrl_id" value="" />
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
			
			$result = SingleTon::selectQuery("isrl_id,isrl_name,continent_name,country_name,isrl_ps,isrl_touring,isrl_code,isrl_desc,isrl_cost,isrl_path,isrl_path1,isrl_path2,isrl_status","ORDER BY isrl_id DESC",TABLE_ISRL,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					$isrl_id					=	$result["isrl_id"];
					$isrl_name				=	$result["isrl_name"];
					$continent_name			=	$result["continent_name"];
					$country_name			=	$result["country_name"];
					$isrl_code				=	$result["isrl_code"];
					$isrl_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"),'',$result["isrl_desc"]);
					$isrl_ps					=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"),'',$result["isrl_ps"]);
					$isrl_touring			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"),'',$result["isrl_touring"]);
					$isrl_cost				=	$result["isrl_cost"];
                                       
					$isrl_status				=	$result["isrl_status"];
					$isrl_path				=	$result["isrl_path"];
					$isrl_path1				=	$result["isrl_path1"];
					$isrl_path2				=	$result["isrl_path2"];
                                                                                
					$row_count++;
					if ($row_count%2 == 0) $row_class = 'class="odd"';
					else $row_class = 'class="even"';

			?>
			<tr <?php echo $row_class;?>>      
				<td><?php echo $isrl_id;?></td>
				<td><?php echo $isrl_name;?></td>
				<td><?php foreach($continent_array as $cont_key=>$cont_value) { if($cont_key == $continent_name) { echo $cont_value; } } ?></td>
				<td><?php foreach($country_array as $coun_key=>$coun_value) { if($coun_key == $country_name) { echo $coun_value; } } ?></td>
				<td><?php echo $isrl_code; ?></td>
				<td><?php echo $isrl_desc; ?></td>
				<td><?php echo $isrl_cost; ?></td>
				<td><?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { if($plan_status_key == $isrl_status) { echo $plan_status_value; } } ?></td>
				<td><img src='<?php echo $isrl_path; ?>' width='30' height='30' />

				<div style="display:none;" id="isrl_id-<?php echo $isrl_id; ?>"><?php echo $isrl_id;?></div>
				<div style="display:none;" id="isrl_name-<?php echo $isrl_id; ?>"><?php echo $isrl_name;?></div>
				<div style="display:none;" id="continent_name-<?php echo $isrl_id; ?>"><?php echo $continent_name;?></div>
				<div style="display:none;" id="country_name-<?php echo $isrl_id; ?>"><?php echo $country_name;?></div>
				<div style="display:none;" id="isrl_code-<?php echo $isrl_id; ?>"><?php echo $isrl_code; ?></div>
				<div style="display:none;" id="isrl_desc-<?php echo $isrl_id; ?>"><?php echo $isrl_desc; ?></div>
				<div style="display:none;" id="isrl_ps-<?php echo $isrl_id; ?>"><?php echo $isrl_ps; ?></div>
				<div style="display:none;" id="isrl_touring-<?php echo $isrl_id; ?>"><?php echo $isrl_touring; ?></div>
				<div style="display:none;" id="isrl_cost-<?php echo $isrl_id; ?>"><?php echo $isrl_cost; ?></div>
				<div style="display:none;" id="isrl_status-<?php echo $isrl_id; ?>"><?php echo $isrl_status; ?></div>
				<div style="display:none;" id="isrl_path-<?php echo $isrl_id; ?>"><?php echo $isrl_path; ?></div>
				<div style="display:none;" id="isrl_path1-<?php echo $isrl_id; ?>"><?php echo $isrl_path1; ?></div>
				<div style="display:none;" id="isrl_path2-<?php echo $isrl_id; ?>"><?php echo $isrl_path2; ?></div></td>
				
				<td><img src='<?php echo $isrl_path1; ?>' width='30' height='30' /></td>				
				<td><img src='<?php echo $isrl_path2; ?>' width='30' height='30' /></td>

				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="editPlan('<?php echo $isrl_id; ?>');return false;"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deletePlan('<?php echo $isrl_id;?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
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