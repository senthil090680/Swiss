<?php
session_start();
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);


$conWhere		=	" WHERE 1 = 1 ORDER BY name ASC";

$country_result			=	SingleTon::selectQuery("iso3,printable_name","$conWhere",TABLE_COUNTRY,MY_ASSOC,NOR_YES);

//$num_rows = $result[0];
	
//debugerr($result[1]);

//exit(0);

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

		$tour_name				=       mysql_real_escape_string($tour_name);
		$continent_name			=       mysql_real_escape_string($continent_name);
		$country_name			=       mysql_real_escape_string($country_name);
		$tour_code				=       mysql_real_escape_string($tour_code);		
		$product_services		=       mysql_real_escape_string($product_services);
		$touring				=       mysql_real_escape_string($touring);
		$tour_desc				=       mysql_real_escape_string(nl2br($tour_desc));
		$ratesFor				=       mysql_real_escape_string($ratesFor);
		$tour_cost				=       mysql_real_escape_string(nl2br($tour_cost));
		$plan_status			=       mysql_real_escape_string($plan_status);
		
		if($_POST['action'] == 'edit') {


			if($_FILES['thumb_path']['name'] != '') {
				$thumb_name=$_FILES['thumb_path']['name'];
				$thumb_size=$_FILES['thumb_path']['size'];
				$thumb_type=$_FILES['thumb_path']['type'];
				$thumb_tmp=$_FILES['thumb_path']['tmp_name'];
		
				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		THUMB_PATH_INFO.$ran.'_'.$thumb_complete_name;
				$thumbpath					=		",thumb_path='$thumb_target'";
				
				$selectCount	=	"SELECT thumb_path from ".TABLE_PLAN." where tour_id='$tour_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if(file_exists($row['thumb_path'])) {
					unlink($row['thumb_path']);
				} else {	
					echo "not deleted 1"; exit(0);
				}

				move_uploaded_file($thumb_tmp,$thumb_target);
			} else {
				$thumbpath					=		'';
			}


			if($_FILES['thumb_path1']['name'] != '') {
				$thumb_name1=$_FILES['thumb_path1']['name'];
				$thumb_size1=$_FILES['thumb_path1']['size'];
				$thumb_type1=$_FILES['thumb_path1']['type'];
				$thumb_tmp1=$_FILES['thumb_path1']['tmp_name'];
		
				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		THUMB_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				$thumbpath1					=		",thumb_path1='$thumb_target1'";
				
				$selectCount1	=	"SELECT thumb_path1 from ".TABLE_PLAN." where tour_id='$tour_id'";
				$selectResult1	=	mysql_query($selectCount1) or die (mysql_error());
				$num1			=	mysql_num_rows($selectResult1);	
				$row1			=	mysql_fetch_array($selectResult1);

				if(file_exists($row1['thumb_path1'])) {
					unlink($row1['thumb_path1']);
				} else {	
					//echo $row1['thumb_path1']."<br>";
					echo "Old Image Not deleted 2"; exit(0);
				}
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			} else {
				$thumbpath1					=		'';
			}

			if($_FILES['thumb_path2']['name'] != '') {
				$thumb_name2=$_FILES['thumb_path2']['name'];
				$thumb_size2=$_FILES['thumb_path2']['size'];
				$thumb_type2=$_FILES['thumb_path2']['type'];
				$thumb_tmp2=$_FILES['thumb_path2']['tmp_name'];
		
				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		THUMB_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				$thumbpath2					=		",thumb_path2='$thumb_target2'";
				
				$selectCount2	=	"SELECT thumb_path2 from ".TABLE_PLAN." where tour_id='$tour_id'";
				$selectResult2	=	mysql_query($selectCount2) or die (mysql_error());
				$num2			=	mysql_num_rows($selectResult2);	
				$row2			=	mysql_fetch_array($selectResult2);
				
				if(file_exists($row2['thumb_path2'])) {
					unlink($row2['thumb_path2']);
				} else {	
					//echo $row2['thumb_path2']."<br>";
					echo "not deleted 3"; exit(0); 
				}

				move_uploaded_file($thumb_tmp2,$thumb_target2);
			} else {
				$thumbpath2				=		'';
			}

			$queryUpdate	=	"UPDATE ".TABLE_PLAN." SET tour_name='$tour_name',continent_name='$continent_name',country_name='$country_name',tour_code='$tour_code',product_services='$product_services',touring='$touring',tour_desc='$tour_desc',ratesFor='$ratesFor',tour_cost='$tour_cost',front_order='$front_order',plan_status='$plan_status',updatedDate=NOW()".$thumbpath.$thumbpath1.$thumbpath2." WHERE tour_id='$tour_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
			$selectCount	=	"SELECT * from ".TABLE_PLAN." where tour_name='$tour_name'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);


			if($_FILES['thumb_path']['error']>0)
			{
				echo $_FILES['thumb_path']['error']; die($_FILES['thumb_path']['error']);
			}
			else
			{
				$thumb_name=$_FILES['thumb_path']['name'];
				$thumb_size=$_FILES['thumb_path']['size'];
				$thumb_type=$_FILES['thumb_path']['type'];
				$thumb_tmp=$_FILES['thumb_path']['tmp_name'];

				$thumb_complete_name		=		str_replace(" ",'',basename($thumb_name));
				$ran						=		rand () ;
				$thumb_target				=		THUMB_PATH_INFO.$ran.'_'.$thumb_complete_name;
				move_uploaded_file($thumb_tmp,$thumb_target);
			}

			if($_FILES['thumb_path1']['error']>0)
			{
				echo $_FILES['thumb_path1']['error']; die($_FILES['thumb_path1']['error']);
			}
			else
			{
				$thumb_name1=$_FILES['thumb_path1']['name'];
				$thumb_size1=$_FILES['thumb_path1']['size'];
				$thumb_type1=$_FILES['thumb_path1']['type'];
				$thumb_tmp1=$_FILES['thumb_path1']['tmp_name'];

				$thumb_complete_name1		=		str_replace(" ",'',basename($thumb_name1));
				$ran1						=		rand () ;
				$thumb_target1				=		THUMB_PATH_INFO1.$ran1.'_'.$thumb_complete_name1;
				move_uploaded_file($thumb_tmp1,$thumb_target1);
			}

			if($_FILES['thumb_path2']['error']>0)
			{
				echo $_FILES['thumb_path2']['error']; die($_FILES['thumb_path2']['error']);
			}
			else
			{
				$thumb_name2=$_FILES['thumb_path2']['name'];
				$thumb_size2=$_FILES['thumb_path2']['size'];
				$thumb_type2=$_FILES['thumb_path2']['type'];
				$thumb_tmp2=$_FILES['thumb_path2']['tmp_name'];

				$thumb_complete_name2		=		str_replace(" ",'',basename($thumb_name2));
				$ran2						=		rand () ;
				$thumb_target2				=		THUMB_PATH_INFO2.$ran2.'_'.$thumb_complete_name2;
				move_uploaded_file($thumb_tmp2,$thumb_target2);
			}
		
			if($num > 0) { 	
				$queryUpdate	=	"UPDATE ".TABLE_PLAN." set continent_name='$continent_name',country_name='$country_name',product_services='$product_services',touring='$touring',tour_code='$tour_code',tour_desc='$tour_desc',ratesFor='$ratesFor',tour_cost='$tour_cost',plan_status='$plan_status',updatedDate=NOW() where tour_name='$tour_name'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"insert into ".TABLE_PLAN." (tour_name,continent_name,country_name,tour_code,product_services,touring,tour_desc,ratesFor,tour_cost,thumb_path,thumb_path1,thumb_path2,plan_status,insertedDate) values ('$tour_name','$continent_name','$country_name','$tour_code','$product_services','$touring','$tour_desc','$ratesFor','$tour_cost','$thumb_target','$thumb_target1','$thumb_target2','$plan_status',NOW())";

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

				$selectCount2	=	"SELECT thumb_path,thumb_path1,thumb_path2 from ".TABLE_PLAN." where tour_id='$tour_id'";
				$selectResult2	=	mysql_query($selectCount2) or die (mysql_error());
				$num2			=	mysql_num_rows($selectResult2);	
				$row2			=	mysql_fetch_array($selectResult2);
				
				if(file_exists($row2['thumb_path'])) {
					unlink($row2['thumb_path']);
				} else {	
					//echo $row2['thumb_path']."<br>";
					echo "not deleted 1"; exit(0);
				}
				
				if(file_exists($row2['thumb_path1'])) {
					unlink($row2['thumb_path1']);
				} else {	
					//echo $row2['thumb_path1']."<br>";
					echo "not deleted 2"; exit(0);
				}

				if(file_exists($row2['thumb_path2'])) {
					unlink($row2['thumb_path2']);
				} else {	
					echo $row2['thumb_path2']."<br>";
					echo "not deleted 3"; exit(0);
				}

				$queryDelete	=	"delete from ".TABLE_PLAN." where tour_id='$tour_id'";
				$resultDelete	=	mysql_query($queryDelete) or die(mysql_error());
				$msg	=	"Plan deleted successfully";
		}
	}
}

require_once("header.php");
?>
<script type="text/javascript">

	function validatePlan() {

		var tour_name			=	document.getElementById('tour_name');
		var continent_name		=	document.getElementById('continent_name');
		var country_name		=	document.getElementById('country_name');
		var tour_code			=	document.getElementById('tour_code');
		var tour_desc			=	document.getElementById('tour_desc');
		var product_services	=	document.getElementById('product_services');
		var touring				=	document.getElementById('touring');
		var ratesFor			=	document.getElementById('ratesFor');
		var tour_cost			=	document.getElementById('tour_cost');
		var plan_status			=	document.getElementById('plan_status');
		var thumb_path			=	document.getElementById('thumb_path');
		var thumb_path1			=	document.getElementById('thumb_path1');
		var thumb_path2			=	document.getElementById('thumb_path2');
		var action_find			=	document.getElementById('action');
		
		if(tour_name.value == '') {
			document.getElementById('tour_nameSpan').innerHTML						=	"Please enter the tour name";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('tour_codeSpan').innerHTML						=	'';
			document.getElementById('tour_descSpan').innerHTML						=	'';
			document.getElementById('product_servicesSpan').innerHTML				=	'';
			document.getElementById('touringSpan').innerHTML						=	'';
			document.getElementById('ratesForSpan').innerHTML						=	'';
			document.getElementById('tour_costSpan').innerHTML						=	'';
			document.getElementById('plan_statusSpan').innerHTML					=	'';
			document.getElementById('thumb_pathSpan').innerHTML						=	'';
			document.getElementById('thumb_path1Span').innerHTML					=	'';
			document.getElementById('thumb_path2Span').innerHTML					=	'';
			tour_name.focus();
			return false;
		}
		else if(continent_name.value == '') {
			document.getElementById('continent_nameSpan').innerHTML					=	"Please select the continent";
			document.getElementById('tour_nameSpan').innerHTML						=	"";
			document.getElementById('country_nameSpan').innerHTML					=	'';
			document.getElementById('tour_codeSpan').innerHTML						=	'';
			document.getElementById('tour_descSpan').innerHTML						=	'';
			document.getElementById('product_servicesSpan').innerHTML				=	'';
			document.getElementById('touringSpan').innerHTML						=	'';
			document.getElementById('ratesForSpan').innerHTML						=	'';
			document.getElementById('tour_costSpan').innerHTML						=	'';
			document.getElementById('plan_statusSpan').innerHTML					=	'';
			document.getElementById('thumb_pathSpan').innerHTML						=	'';
			document.getElementById('thumb_path1Span').innerHTML					=	'';
			document.getElementById('thumb_path2Span').innerHTML					=	'';
			continent_name.focus();
			return false;
		}

		else if(country_name.value == '') {
			document.getElementById('country_nameSpan').innerHTML					=	"Please select the country";
			document.getElementById('tour_nameSpan').innerHTML						=	"";
			document.getElementById('continent_nameSpan').innerHTML					=	'';
			document.getElementById('tour_codeSpan').innerHTML						=	'';
			document.getElementById('tour_descSpan').innerHTML						=	'';
			document.getElementById('product_servicesSpan').innerHTML				=	'';
			document.getElementById('touringSpan').innerHTML						=	'';
			document.getElementById('ratesForSpan').innerHTML						=	'';
			document.getElementById('tour_costSpan').innerHTML						=	'';
			document.getElementById('plan_statusSpan').innerHTML					=	'';
			document.getElementById('thumb_pathSpan').innerHTML						=	'';
			document.getElementById('thumb_path1Span').innerHTML					=	'';
			document.getElementById('thumb_path2Span').innerHTML					=	'';
			country_name.focus();
			return false;
		}

		else if(tour_code.value == '') {
			document.getElementById('tour_codeSpan').innerHTML			=	'Please enter the tour code';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('tour_descSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			tour_code.focus();
			return false;
		}

		else if(tour_desc.value == '') {
			//alert('sdfsdf');
			document.getElementById('tour_descSpan').innerHTML			=	'Please enter the tour description';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			tour_desc.focus();
			return false;
		}

		else if(product_services.value == '') {
			document.getElementById('product_servicesSpan').innerHTML			=	'Please enter Product & Services';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			product_services.focus();
			return false;
		}

		else if(touring.value == '') {
			document.getElementById('touringSpan').innerHTML			=	'Please enter touring details';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			touring.focus();
			return false;
		} else if(ratesFor.value == '') {
			document.getElementById('ratesForSpan').innerHTML			=	'Please enter rates specific (Ex: Per Person, Per Couple, Per Family, etc)';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			ratesFor.focus();
			return false;
		} else if(tour_cost.value == '') {
			document.getElementById('tour_costSpan').innerHTML			=	'Please enter the tour cost';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('tour_descSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path1Span').innerHTML		=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			tour_cost.focus();
			return false;
		}
		else if(plan_status.value == '') {
			document.getElementById('plan_statusSpan').innerHTML			=	'Please select the status';
			document.getElementById('tour_nameSpan').innerHTML				=	"";
			document.getElementById('continent_nameSpan').innerHTML			=	"";
			document.getElementById('country_nameSpan').innerHTML			=	'';
			document.getElementById('tour_codeSpan').innerHTML				=	'';
			document.getElementById('tour_descSpan').innerHTML				=	'';
			document.getElementById('product_servicesSpan').innerHTML		=	'';
			document.getElementById('touringSpan').innerHTML				=	'';
			document.getElementById('ratesForSpan').innerHTML				=	'';
			document.getElementById('tour_costSpan').innerHTML				=	'';
			document.getElementById('thumb_pathSpan').innerHTML				=	'';
			document.getElementById('thumb_path1Span').innerHTML			=	'';
			document.getElementById('thumb_path2Span').innerHTML			=	'';
			plan_status.focus();
			return false;
		}
		
		if(action_find.value == 'new') {

			if(thumb_path.value == '') {
				document.getElementById('thumb_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('tour_nameSpan').innerHTML			=	"";
				document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';
				document.getElementById('tour_codeSpan').innerHTML			=	'';
				document.getElementById('tour_descSpan').innerHTML			=	'';
				document.getElementById('product_servicesSpan').innerHTML	=	'';
				document.getElementById('touringSpan').innerHTML			=	'';
				document.getElementById('ratesForSpan').innerHTML			=	'';
				document.getElementById('tour_costSpan').innerHTML			=	'';
				document.getElementById('plan_statusSpan').innerHTML		=	'';
				document.getElementById('thumb_path1Span').innerHTML		=	'';
				document.getElementById('thumb_path2Span').innerHTML		=	'';
				thumb_path.focus();
				return false;
			} 
			if(thumb_path1.value == '') {
			document.getElementById('thumb_pathSpan').innerHTML			=	'Please pick the thumb image';
			document.getElementById('tour_nameSpan').innerHTML			=	"";
			document.getElementById('continent_nameSpan').innerHTML		=	"";
			document.getElementById('country_nameSpan').innerHTML		=	'';
			document.getElementById('tour_codeSpan').innerHTML			=	'';
			document.getElementById('tour_descSpan').innerHTML			=	'';
			document.getElementById('product_servicesSpan').innerHTML	=	'';
			document.getElementById('touringSpan').innerHTML			=	'';
			document.getElementById('ratesForSpan').innerHTML			=	'';
			document.getElementById('tour_costSpan').innerHTML			=	'';
			document.getElementById('plan_statusSpan').innerHTML		=	'';
			document.getElementById('thumb_pathSpan').innerHTML			=	'';
			document.getElementById('thumb_path2Span').innerHTML		=	'';
			thumb_path.focus();
			return false;
			} if(thumb_path2.value == '') {
				document.getElementById('thumb_pathSpan').innerHTML			=	'Please pick the thumb image';
				document.getElementById('tour_nameSpan').innerHTML			=	"";
				document.getElementById('continent_nameSpan').innerHTML		=	"";
				document.getElementById('country_nameSpan').innerHTML		=	'';
				document.getElementById('tour_codeSpan').innerHTML			=	'';
				document.getElementById('tour_descSpan').innerHTML			=	'';
				document.getElementById('product_servicesSpan').innerHTML	=	'';
				document.getElementById('touringSpan').innerHTML			=	'';
				document.getElementById('ratesForSpan').innerHTML			=	'';
				document.getElementById('tour_costSpan').innerHTML			=	'';
				document.getElementById('plan_statusSpan').innerHTML		=	'';
				document.getElementById('thumb_pathSpan').innerHTML			=	'';
				document.getElementById('thumb_path1Span').innerHTML		=	'';
				thumb_path.focus();
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
		d.tour_id.value									=	"";
		d.tour_name.value								=	"";
		d.continent_name.value							=	"";
		d.country_name.value							=	"";
		d.tour_code.value								=	"";
		d.tour_desc.value								=	"";
		d.product_services.value						=	"";
		d.touring.value									=	"";
		d.ratesFor.value								=	"";
		d.tour_cost.value								=	"";
		d.plan_status.value								=	"";
		d.thumb_path.value								=	"";
		d.thumb_path1.value								=	"";
		d.thumb_path2.value								=	"";

		d.action.value									=	"new";
		d.submitPlan.value								=	"Add Plan";
		document.getElementById("form-tab").innerHTML	=	"Add Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function editPlan(tour_id){
		d												=	document.plan_form;
		d.tour_id.value									=	tour_id;
		d.tour_name.value								=	document.getElementById('tour_name-'+tour_id).innerHTML; //tour name
		d.continent_name.value							=	document.getElementById('continent_name-'+tour_id).innerHTML; //Continent Name
		d.country_name.value							=	document.getElementById('country_name-'+tour_id).innerHTML;//Country Name
		d.tour_code.value								=	document.getElementById('tour_code-'+tour_id).innerHTML;//Tour Code
		d.tour_desc.value								=	document.getElementById('tour_desc-'+tour_id).innerHTML;//Tour Description
		d.product_services.value						=	document.getElementById('product_services-'+tour_id).innerHTML;//Tour Product & Services
		d.touring.value									=	document.getElementById('touring-'+tour_id).innerHTML;//Touring details
		d.ratesFor.value								=	document.getElementById('ratesFor-'+tour_id).innerHTML;//Rates Specific
		d.tour_cost.value								=	document.getElementById('tour_cost-'+tour_id).innerHTML;//Tour Cost
		d.plan_status.value								=	document.getElementById('plan_status-'+tour_id).innerHTML;//Plan Status
		d.image_holder.src								=	document.getElementById('thumb_path-'+tour_id).innerHTML;//Thumb Path
		d.image_holder1.src								=	document.getElementById('thumb_path1-'+tour_id).innerHTML;//Thumb Path
		d.image_holder2.src								=	document.getElementById('thumb_path2-'+tour_id).innerHTML;//Thumb Path
		d.action.value									=	"edit";
		d.submitPlan.value								=	"Edit Plan";
		document.getElementById("form-tab").innerHTML	=	"Edit Plan";
		show("formPlan");
		location.href									=	"#formPlan";
	}	
	function deletePlan(tour_id){
		if (confirm('Are You Sure You Want to Delete '+document.getElementById('tour_name-'+tour_id).innerHTML+'?'))
		window.location = "new_plan.php?action=delete&tour_id=" + tour_id;
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
			<form name="plan_form" action="new_plan.php" method="post" onsubmit="return validatePlan();" enctype='multipart/form-data'>
				<fieldset>
					<p>
						<label style="padding-right:20px;">Tour Name</label>:&nbsp;&nbsp;
						<input name="tour_name" id="tour_name" class="text-long"  type="text" />
					</p>
					<p>
						<span id='tour_nameSpan' class='backvalid'></span>
					</p>
					<p>
						<label style="padding-right:49px;">Continent</label>:&nbsp;&nbsp;
						<select name="continent_name" id="continent_name">
						<option value="">- Select -</option>
						<?php foreach($continent_array as $cont_key=>$cont_value) { ?>
						<option value="<?php echo $cont_key; ?>"><?php echo $cont_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='continent_nameSpan' class='backvalid'></span>
					</p>
					<p>
						<label style="padding-right:49px;">Country</label>:&nbsp;&nbsp;
						<select name="country_name" id="country_name">
						<option value="">- Select -</option>


						<?php //foreach($country_array as $coun_key=>$coun_value) { ?>
						<?php foreach($country_result[1] as $country_result_value) { ?>
						<option value="<?php echo $country_result_value[iso3]; ?>"><?php echo $country_result_value[printable_name]; ?></option>
						<!-- <option value="<?php echo $coun_key; ?>"><?php echo $coun_value; ?></option> -->
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='country_nameSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Tour Code</label>:&nbsp;&nbsp;
						<input name="tour_code" id="tour_code" class="text-long"  type="text" />
					</p>
					<p>
						<span id='tour_codeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Tour Description</label>:&nbsp;&nbsp;
						<textarea name="tour_desc" id="tour_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='tour_descSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Product & Services</label>:&nbsp;&nbsp;
						<textarea name="product_services" id="product_services" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='product_servicesSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Touring Details</label>:&nbsp;&nbsp;
						<textarea name="touring" id="touring" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='touringSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Rates Specific</label>:&nbsp;&nbsp;
						<input name="ratesFor" id="ratesFor" class="text-long"  type="text" />
					</p>
					<p>
						<span id='ratesForSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Tour Cost</label>:&nbsp;&nbsp;
						<input name="tour_cost" id="tour_cost" class="text-long"  type="text" />
					</p>
					<p>
						<span id='tour_costSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Plan Status</label>:&nbsp;&nbsp;
						<select name="plan_status" id="plan_status">
						<option value="">- Select -</option>
						<?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { ?>
						<option value="<?php echo $plan_status_key; ?>"><?php echo $plan_status_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='plan_statusSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 1</label>:&nbsp;&nbsp;
						<input name="thumb_path" id="thumb_path" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder' height='50' width='50' />
					</p>
					<p>
						<span id='thumb_pathSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 2</label>:&nbsp;&nbsp;
						<input name="thumb_path1" id="thumb_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='thumb_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Thumb Image 3</label>:&nbsp;&nbsp;
						<input name="thumb_path2" id="thumb_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder2' height='50' width='50' />
					</p>
					<p>
						<span id='thumb_path2Span' class='backvalid'></span>
					</p>

					<input id="submitPlan" type="submit" value="" class="button-submit"/>
					<input type="submit" value="Cancel" class="button-cancel" onclick="hide('formPlan');return false;" />
					<input type="hidden" name="tour_id" id="tour_id" value="" />
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
				<th>Rates Specific</th>
				<th>Tour Cost</th>
				<th>Plan Status</th>
				<th>Thumb Image 1</th>
				<th>Thumb Image 2</th>
				<th>Thumb Image 3</th>
				<th>Edit/Delete</td>
			</tr>
			<?php 
			
			$result = SingleTon::selectQuery("tour_id,tour_name,continent_name,country_name,product_services,touring,tour_code,tour_desc,ratesFor,tour_cost,thumb_path,thumb_path1,thumb_path2,plan_status","ORDER BY tour_id DESC",TABLE_PLAN,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					$tour_id				=	$result["tour_id"];
					$tour_name				=	stripslashes($result["tour_name"]);
					$continent_name			=	$result["continent_name"];
					$country_name			=	$result["country_name"];
					$tour_code				=	stripslashes($result["tour_code"]);
					$tour_desc				=	stripslashes($result["tour_desc"]);
					$product_services		=	stripslashes($result["product_services"]);
					$touring				=	stripslashes($result["touring"]);
					$ratesFor				=	stripslashes($result["ratesFor"]);
					$tour_cost				=	stripslashes($result["tour_cost"]);
					$plan_status			=	$result["plan_status"];
					$thumb_path				=	$result["thumb_path"];
					$thumb_path1			=	$result["thumb_path1"];
					$thumb_path2			=	$result["thumb_path2"];

					$row_count++;
					if ($row_count%2 == 0) $row_class = 'class="odd"';
					else $row_class = 'class="even"';

			?>
			<tr <?php echo $row_class;?>>      
				<td><?php echo $tour_id;?></td>
				<td><?php echo $tour_name;?></td>
				<td><?php foreach($continent_array as $cont_key=>$cont_value) { if($cont_key == $continent_name) { echo $cont_value; } } ?></td>
				<td><?php 
					foreach($country_result[1] as $country_result_value) { if($country_result_value[iso3] == $country_name) { echo $country_result_value[printable_name]; } } ?></td>
				<td><?php echo $tour_code; ?></td>
				<td><?php echo $tour_desc; ?></td>
				<td><?php echo $ratesFor; ?></td>
				<td><?php echo $tour_cost; ?></td>
				<td><?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { if($plan_status_key == $plan_status) { echo $plan_status_value; } } ?></td>
				<td><img src='<?php echo $thumb_path; ?>' width='30' height='30' />

				<div style="display:none;" id="tour_id-<?php echo $tour_id; ?>"><?php echo $tour_id;?></div>
				<div style="display:none;" id="tour_name-<?php echo $tour_id; ?>"><?php echo $tour_name;?></div>
				<div style="display:none;" id="continent_name-<?php echo $tour_id; ?>"><?php echo $continent_name;?></div>
				<div style="display:none;" id="country_name-<?php echo $tour_id; ?>"><?php echo $country_name;?></div>
				<div style="display:none;" id="tour_code-<?php echo $tour_id; ?>"><?php echo $tour_code; ?></div>
				<div style="display:none;" id="tour_desc-<?php echo $tour_id; ?>"><?php echo $tour_desc; ?></div>
				<div style="display:none;" id="product_services-<?php echo $tour_id; ?>"><?php echo $product_services; ?></div>
				<div style="display:none;" id="touring-<?php echo $tour_id; ?>"><?php echo $touring; ?></div>
				<div style="display:none;" id="ratesFor-<?php echo $tour_id; ?>"><?php echo $ratesFor; ?></div>
				<div style="display:none;" id="tour_cost-<?php echo $tour_id; ?>"><?php echo $tour_cost; ?></div>
				<div style="display:none;" id="plan_status-<?php echo $tour_id; ?>"><?php echo $plan_status; ?></div>
				<div style="display:none;" id="thumb_path-<?php echo $tour_id; ?>"><?php echo $thumb_path; ?></div>
				<div style="display:none;" id="thumb_path1-<?php echo $tour_id; ?>"><?php echo $thumb_path1; ?></div>
				<div style="display:none;" id="thumb_path2-<?php echo $tour_id; ?>"><?php echo $thumb_path2; ?></div></td>
				
				<td><img src='<?php echo $thumb_path1; ?>' width='30' height='30' /></td>				
				<td><img src='<?php echo $thumb_path2; ?>' width='30' height='30' /></td>

				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="editPlan('<?php echo $tour_id; ?>');return false;"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deletePlan('<?php echo $tour_id;?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
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