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
				
				$selectCount	=	"SELECT sri_path from ".TABLE_DAY." where sri_id='$sri_id'";
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
				
				$selectCount1	=	"SELECT sri_path1 from ".TABLE_DAY." where sri_id='$sri_id'";
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
				
				$selectCount2	=	"SELECT sri_path2 from ".TABLE_DAY." where sri_id='$sri_id'";
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

			$queryUpdate	=	"UPDATE ".TABLE_DAY." SET sri_name='$sri_name',continent_name='$continent_name',country_name='$country_name',sri_code='$sri_code',sri_ps='$sri_ps',sri_touring='$sri_touring',sri_desc='$sri_desc',sri_cost='$sri_cost',sri_front='$sri_front',sri_status='$sri_status',sri_updatedDate=NOW()".$thumbpath.$thumbpath1.$thumbpath2." WHERE sri_id='$sri_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
			$selectCount	=	"SELECT * from ".TABLE_DAY." where sri_id='$sri_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);


			if($_FILES['day2_path1']['error']>0)
			{
				echo $_FILES['day2_path1']['error']; die($_FILES['day2_path1']['error']);
			}
			else
			{
				$day2_path1_name=$_FILES['day2_path1']['name'];
				$day2_path1_size=$_FILES['day2_path1']['size'];
				$day2_path1_type=$_FILES['day2_path1']['type'];
				$day2_path1_tmp=$_FILES['day2_path1']['tmp_name'];

				$day2_path1_complete_name		=		str_replace(" ",'',basename($day2_path1_name));
				$ran						=		rand () ;
				$day2_path1_target				=		DAY2_PATH1.$ran.'_'.$day2_path1_complete_name;
				move_uploaded_file($day2_path1_tmp,$day2_path1_target);
			}

			if($_FILES['day2_path2']['error']>0)
			{
				echo $_FILES['day2_path2']['error']; die($_FILES['day2_path2']['error']);
			}
			else
			{
				$day2_path2_name=$_FILES['day2_path2']['name'];
				$day2_path2_size=$_FILES['day2_path2']['size'];
				$day2_path2_type=$_FILES['day2_path2']['type'];
				$day2_path2_tmp=$_FILES['day2_path2']['tmp_name'];

				$day2_path2_complete_name		=		str_replace(" ",'',basename($day2_path2_name));
				$ran						=		rand () ;
				$day2_path2_target				=		DAY2_PATH2.$ran.'_'.$day2_path2_complete_name;
				move_uploaded_file($day2_path2_tmp,$day2_path2_target);
			}

			if($_FILES['day2_path2']['error']>0)
			{
				echo $_FILES['day2_path2']['error']; die($_FILES['day2_path2']['error']);
			}
			else
			{
				$thumb_name1=$_FILES['day2_path2']['name'];
				$thumb_size1=$_FILES['day2_path2']['size'];
				$thumb_type1=$_FILES['day2_path2']['type'];
				$thumb_tmp1=$_FILES['day2_path2']['tmp_name'];

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
				$queryUpdate	=	"UPDATE ".TABLE_DAY." set continent_name='$continent_name',country_name='$country_name',sri_ps='$sri_ps',sri_touring='$sri_touring',sri_code='$sri_code',sri_desc='$sri_desc',sri_cost='$sri_cost',sri_status='$sri_status',sri_updatedDate=NOW() where sri_name='$sri_name'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"insert into ".TABLE_DAY." (sri_name,continent_name,country_name,sri_code,sri_ps,sri_touring,sri_desc,sri_cost,sri_path,sri_path1,sri_path2,sri_status,sri_insertedDate) values ('$sri_name','$continent_name','$country_name','$sri_code','$sri_ps','$sri_touring','$sri_desc','$sri_cost','$thumb_target','$thumb_target1','$thumb_target2','$sri_status',NOW())";

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
				$queryDelete	=	"delete from ".TABLE_DAY." where day_id='$day_id'";
				$resultDelete	=	mysql_query($queryDelete) or die(mysql_error());;
				$msg	=	"Days deleted successfully";
		}
	}
}

require_once("header.php");
?>
<script type="text/javascript">

	function validateDay() {

		var day1_title			=	document.getElementById('day1_title');
		var day2_title			=	document.getElementById('day2_title');
		var day3_title			=	document.getElementById('day3_title');
		var day4_title			=	document.getElementById('day4_title');
		var day5_title			=	document.getElementById('day5_title');
		var day6_title			=	document.getElementById('day6_title');
		var day7_title			=	document.getElementById('day7_title');
		var day8_title			=	document.getElementById('day8_title');
		var day9_title			=	document.getElementById('day9_title');
		var day10_title			=	document.getElementById('day10_title');
		var day11_title			=	document.getElementById('day11_title');
		var day12_title			=	document.getElementById('day12_title');
		var action_find			=	document.getElementById('action');
		
		if(day1_title == '' && day2_title == '' && day3_title == '' && day4_title == '' && day5_title == '' && day6_title == '' && day7_title == '' && day8_title == '' && day9_title == '' && day10_title == '' && day11_title == '' && day12_title == '') {
			alert("Please enter the days plan");
		} else { 
			document.day_form.action="";
			document.day_form.method="post";
			document.day_form.submit();
		}
	}

	function newDay(){
		d												=	document.day_form;
		d.sri_id.value									=	"";
		d.day_id.value									=	"";
		d.day_name.value								=	"";
		d.day1_title.value								=	"";

		d.day2_title.value								=	"";
		d.day2_place.value								=	"";
		d.day2_desc.value								=	"";
		d.day2_path1.value								=	"";
		d.day2_path2.value								=	"";
		d.day2_path3.value								=	"";
		d.day2_path4.value								=	"";
		d.day2_stay.value								=	"";

		d.day3_title.value								=	"";
		d.day3_place.value								=	"";
		d.day3_desc.value								=	"";
		d.day3_path1.value								=	"";
		d.day3_path2.value								=	"";
		d.day3_path3.value								=	"";
		d.day3_path4.value								=	"";
		d.day3_stay.value								=	"";

		d.day4_title.value								=	"";
		d.day4_place.value								=	"";
		d.day4_desc.value								=	"";
		d.day4_path1.value								=	"";
		d.day4_path2.value								=	"";
		d.day4_path3.value								=	"";
		d.day4_path4.value								=	"";
		d.day4_stay.value								=	"";

		d.day5_title.value								=	"";
		d.day5_place.value								=	"";
		d.day5_desc.value								=	"";
		d.day5_path1.value								=	"";
		d.day5_path2.value								=	"";
		d.day5_path3.value								=	"";
		d.day5_path4.value								=	"";
		d.day5_path5.value								=	"";
		d.day5_path6.value								=	"";
		d.day5_path7.value								=	"";
		d.day5_path8.value								=	"";
		d.day5_place1.value								=	"";
		d.day5_desc1.value								=	"";

		d.day6_title.value								=	"";
		d.day6_place.value								=	"";
		d.day6_desc.value								=	"";
		d.day6_path1.value								=	"";
		d.day6_path2.value								=	"";
		d.day6_path3.value								=	"";
		d.day6_path4.value								=	"";
		d.day6_stay.value								=	"";

		d.day7_title.value								=	"";
		d.day7_place.value								=	"";
		d.day7_desc.value								=	"";
		d.day7_path1.value								=	"";
		d.day7_path2.value								=	"";
		d.day7_path3.value								=	"";
		d.day7_path4.value								=	"";
		d.day7_stay.value								=	"";

		d.day8_title.value								=	"";
		d.day8_place.value								=	"";
		d.day8_desc.value								=	"";
		d.day8_path1.value								=	"";
		d.day8_path2.value								=	"";
		d.day8_path3.value								=	"";
		d.day8_path4.value								=	"";
		d.day8_stay.value								=	"";

		d.day9_title.value								=	"";
		d.day9_place.value								=	"";
		d.day9_desc.value								=	"";
		d.day9_path1.value								=	"";
		d.day9_path2.value								=	"";
		d.day9_path3.value								=	"";
		d.day9_path4.value								=	"";
		d.day9_stay.value								=	"";

		d.day10_title.value								=	"";
		d.day10_place.value								=	"";
		d.day10_desc.value								=	"";
		d.day10_path1.value								=	"";
		d.day10_path2.value								=	"";
		d.day10_path3.value								=	"";
		d.day10_path4.value								=	"";
		d.day10_path5.value								=	"";
		d.day10.value									=	"";
		d.day10_path7.value								=	"";
		d.day10.value									=	"";
		d.day10_place1.value							=	"";
		d.day10_desc1.value								=	"";

		d.day11_title.value								=	"";
		d.day11_place.value								=	"";
		d.day11_desc.value								=	"";
		d.day11_path1.value								=	"";
		d.day11_path2.value								=	"";
		d.day11_path3.value								=	"";
		d.day11_path4.value								=	"";
		d.day11_stay.value								=	"";

		d.day12_title.value								=	"";

		d.day_status.value								=	"";
		d.price_include.value							=	"";
		d.price_notinclude.value						=	"";

		d.action.value									=	"new";
		d.submitDay.value								=	"Add Day";
		document.getElementById("form-tab").innerHTML	=	"Add Day";
		show("formDay");
		location.href									=	"#formDay";
	}	
	function editDay(day_id){
		d												=	document.day_form;
		d.day_id.value									=	day_id;
		d.sri_id.value									=	sri_id;

		d.day_name.value								=	document.getElementById('day_name-'+day_id).innerHTML; //Day name
		d.day1_title.value								=	document.getElementById('day1_title-'+day_id).innerHTML; //Day 1 Title Name
		d.day2_title.value								=	document.getElementById('day2_title-'+day_id).innerHTML;//Day 2 Title Name
		d.day2_place.value								=	document.getElementById('day2_place-'+day_id).innerHTML;//Day 2 Place
		d.day2_desc.value								=	document.getElementById('day2_desc-'+day_id).innerHTML;//Day 2 Description
		d.day2_path1.value								=	document.getElementById('day2_path1-'+day_id).innerHTML;//Day 2 Image 1
		d.day2_path2.value								=	document.getElementById('day2_path2-'+day_id).innerHTML;//Day 2 Image 2
		d.day2_path3.value								=	document.getElementById('day2_path3-'+day_id).innerHTML;//Day 2 Image 3
		d.day2_path4.value								=	document.getElementById('day2_path4-'+day_id).innerHTML;//Day 2 Image 4
		d.day2_stay.value								=	document.getElementById('day2_stay-'+day_id).innerHTML;//Day 2 Halt

		d.day3_title.value								=	document.getElementById('day3_title-'+day_id).innerHTML;//Day 3 Title Name
		d.day3_place.value								=	document.getElementById('day3_place-'+day_id).innerHTML;//Day 3 Place
		d.day3_desc.value								=	document.getElementById('day3_desc-'+day_id).innerHTML;//Day 3 Description
		d.day3_path1.value								=	document.getElementById('day3_path1-'+day_id).innerHTML;//Day 3 Image 1
		d.day3_path2.value								=	document.getElementById('day3_path2-'+day_id).innerHTML;//Day 3 Image 2
		d.day3_path3.value								=	document.getElementById('day3_path3-'+day_id).innerHTML;//Day 3 Image 3
		d.day3_path4.value								=	document.getElementById('day3_path4-'+day_id).innerHTML;//Day 3 Image 4
		d.day3_stay.value								=	document.getElementById('day3_stay-'+day_id).innerHTML;//Day 3 Halt

		d.day4_title.value								=	document.getElementById('day4_title-'+day_id).innerHTML;//Day 4 Title Name
		d.day4_place.value								=	document.getElementById('day4_place-'+day_id).innerHTML;//Day 4 Place
		d.day4_desc.value								=	document.getElementById('day4_desc-'+day_id).innerHTML;//Day 4 Description
		d.day4_path1.value								=	document.getElementById('day4_path1-'+day_id).innerHTML;//Day 4 Image 1
		d.day4_path2.value								=	document.getElementById('day4_path2-'+day_id).innerHTML;//Day 4 Image 2
		d.day4_path3.value								=	document.getElementById('day4_path3-'+day_id).innerHTML;//Day 4 Image 3
		d.day4_path4.value								=	document.getElementById('day4_path4-'+day_id).innerHTML;//Day 4 Image 4
		d.day4_stay.value								=	document.getElementById('day4_stay-'+day_id).innerHTML;//Day 4 Halt
		
		d.day5_title.value								=	document.getElementById('day5_title-'+day_id).innerHTML;//Day 5 Title Name
		d.day5_place.value								=	document.getElementById('day5_place-'+day_id).innerHTML;//Day 5 Place 1
		d.day5_desc.value								=	document.getElementById('day5_desc-'+day_id).innerHTML;//Day 5 Description 1
		d.day5_path1.value								=	document.getElementById('day5_path1-'+day_id).innerHTML;//Day 5 Image 1
		d.day5_path2.value								=	document.getElementById('day5_path2-'+day_id).innerHTML;//Day 5 Image 2
		d.day5_path3.value								=	document.getElementById('day5_path3-'+day_id).innerHTML;//Day 5 Image 3
		d.day5_path4.value								=	document.getElementById('day5_path4-'+day_id).innerHTML;//Day 5 Image 4
		d.day5_stay.value								=	document.getElementById('day5_stay-'+day_id).innerHTML;//Day 5 Halt
		d.day5_place1.value								=	document.getElementById('day5_place1-'+day_id).innerHTML;//Day 5 Place 2
		d.day5_desc1.value								=	document.getElementById('day5_desc1-'+day_id).innerHTML;//Day 5 Description 2
		d.day5_path5.value								=	document.getElementById('day5_path5-'+day_id).innerHTML;//Day 5 Image 5
		d.day5_path6.value								=	document.getElementById('day5_path6-'+day_id).innerHTML;//Day 5 Image 6
		d.day5_path7.value								=	document.getElementById('day5_path7-'+day_id).innerHTML;//Day 5 Image 7
		d.day5_path8.value								=	document.getElementById('day5_path8-'+day_id).innerHTML;//Day 5 Image 8

		d.day6_title.value								=	document.getElementById('day6_title-'+day_id).innerHTML;//Day 6 Title Name
		d.day6_place.value								=	document.getElementById('day6_place-'+day_id).innerHTML;//Day 6 Place
		d.day6_desc.value								=	document.getElementById('day6_desc-'+day_id).innerHTML;//Day 6 Description
		d.day6_path1.value								=	document.getElementById('day6_path1-'+day_id).innerHTML;//Day 6 Image 1
		d.day6_path2.value								=	document.getElementById('day6_path2-'+day_id).innerHTML;//Day 6 Image 2
		d.day6_path3.value								=	document.getElementById('day6_path3-'+day_id).innerHTML;//Day 6 Image 3
		d.day6_path4.value								=	document.getElementById('day6_path4-'+day_id).innerHTML;//Day 6 Image 4
		d.day6_stay.value								=	document.getElementById('day6_stay-'+day_id).innerHTML;//Day 6 Halt

		d.day7_title.value								=	document.getElementById('day7_title-'+day_id).innerHTML;//Day 7 Title Name
		d.day7_place.value								=	document.getElementById('day7_place-'+day_id).innerHTML;//Day 7 Place
		d.day7_desc.value								=	document.getElementById('day7_desc-'+day_id).innerHTML;//Day 7 Description
		d.day7_path1.value								=	document.getElementById('day7_path1-'+day_id).innerHTML;//Day 7 Image 1
		d.day7_path2.value								=	document.getElementById('day7_path2-'+day_id).innerHTML;//Day 7 Image 2
		d.day7_path3.value								=	document.getElementById('day7_path3-'+day_id).innerHTML;//Day 7 Image 3
		d.day7_path4.value								=	document.getElementById('day7_path4-'+day_id).innerHTML;//Day 7 Image 4
		d.day7_stay.value								=	document.getElementById('day7_stay-'+day_id).innerHTML;//Day 7 Halt

		d.day8_title.value								=	document.getElementById('day8_title-'+day_id).innerHTML;//Day 8 Title Name
		d.day8_place.value								=	document.getElementById('day8_place-'+day_id).innerHTML;//Day 8 Place
		d.day8_desc.value								=	document.getElementById('day8_desc-'+day_id).innerHTML;//Day 8 Description
		d.day8_path1.value								=	document.getElementById('day8_path1-'+day_id).innerHTML;//Day 8 Image 1
		d.day8_path2.value								=	document.getElementById('day8_path2-'+day_id).innerHTML;//Day 8 Image 2
		d.day8_path3.value								=	document.getElementById('day8_path3-'+day_id).innerHTML;//Day 8 Image 3
		d.day8_path4.value								=	document.getElementById('day8_path4-'+day_id).innerHTML;//Day 8 Image 4
		d.day8_stay.value								=	document.getElementById('day8_stay-'+day_id).innerHTML;//Day 8 Halt

		d.day9_title.value								=	document.getElementById('day9_title-'+day_id).innerHTML;//Day 9 Title Name
		d.day9_place.value								=	document.getElementById('day9_place-'+day_id).innerHTML;//Day 9 Place
		d.day9_desc.value								=	document.getElementById('day9_desc-'+day_id).innerHTML;//Day 9 Description
		d.day9_path1.value								=	document.getElementById('day9_path1-'+day_id).innerHTML;//Day 9 Image 1
		d.day9_path2.value								=	document.getElementById('day9_path2-'+day_id).innerHTML;//Day 9 Image 2
		d.day9_path3.value								=	document.getElementById('day9_path3-'+day_id).innerHTML;//Day 9 Image 3
		d.day9_path4.value								=	document.getElementById('day9_path4-'+day_id).innerHTML;//Day 9 Image 4
		d.day9_stay.value								=	document.getElementById('day9_stay-'+day_id).innerHTML;//Day 9 Halt

		d.day10_title.value								=	document.getElementById('day10_title-'+day_id).innerHTML;//Day 10 Title Name
		d.day10_place.value								=	document.getElementById('day10_place-'+day_id).innerHTML;//Day 10 Place 1
		d.day10_desc.value								=	document.getElementById('day10_desc-'+day_id).innerHTML;//Day 10 Description 1
		d.day10_path1.value								=	document.getElementById('day10_path1-'+day_id).innerHTML;//Day 10 Image 1
		d.day10_path2.value								=	document.getElementById('day10_path2-'+day_id).innerHTML;//Day 10 Image 2
		d.day10_path3.value								=	document.getElementById('day10_path3-'+day_id).innerHTML;//Day 10 Image 3
		d.day10_path4.value								=	document.getElementById('day10_path4-'+day_id).innerHTML;//Day 10 Image 4
		d.day10_stay.value								=	document.getElementById('day10_stay-'+day_id).innerHTML;//Day 10 Halt
		d.day10_place1.value							=	document.getElementById('day10_place1-'+day_id).innerHTML;//Day 10 Place 2
		d.day10_desc1.value								=	document.getElementById('day10_desc1-'+day_id).innerHTML;//Day 10 Description 2
		d.day10_path10.value							=	document.getElementById('day10_path5-'+day_id).innerHTML;//Day 10 Image 5
		d.day10_path6.value								=	document.getElementById('day10_path6-'+day_id).innerHTML;//Day 10 Image 6
		d.day10_path7.value								=	document.getElementById('day10_path7-'+day_id).innerHTML;//Day 10 Image 7
		d.day10_path8.value								=	document.getElementById('day10_path8-'+day_id).innerHTML;//Day 10 Image 8

		d.day11_title.value								=	document.getElementById('day11_title-'+day_id).innerHTML;//Day 11 Title Name
		d.day11_place.value								=	document.getElementById('day11_place-'+day_id).innerHTML;//Day 11 Place
		d.day11_desc.value								=	document.getElementById('day11_desc-'+day_id).innerHTML;//Day 11 Description
		d.day11_path1.value								=	document.getElementById('day11_path1-'+day_id).innerHTML;//Day 11 Image 1
		d.day11_path2.value								=	document.getElementById('day11_path2-'+day_id).innerHTML;//Day 11 Image 2
		d.day11_path3.value								=	document.getElementById('day11_path3-'+day_id).innerHTML;//Day 11 Image 3
		d.day11_path4.value								=	document.getElementById('day11_path4-'+day_id).innerHTML;//Day 11 Image 4
		d.day11_stay.value								=	document.getElementById('day11_stay-'+day_id).innerHTML;//Day 11 Halt

		d.day12_title.value								=	document.getElementById('day12_title-'+day_id).innerHTML;//Day 12 Title Name

		d.day_status.value								=	document.getElementById('day_status-'+day_id).innerHTML;//Day Status
		d.price_include.value							=	document.getElementById('price_include-'+day_id).innerHTML;//Price Included
		d.price_notinclude.value						=	document.getElementById('price_notinclude-'+day_id).innerHTML;//Price Not Included

		d.action.value									=	"edit";
		d.submitDay.value								=	"Edit Day";
		document.getElementById("form-tab").innerHTML	=	"Edit Day";
		show("formDay");
		location.href									=	"#formDay";
	}	
	function deleteDay(day_id){
		if (confirm('Are You Sure You Want to Delete '+document.getElementById('day_name-'+day_id).innerHTML+'?'))
		window.location = "srilanka_days.php?action=delete&day_id=" + day_id;
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
		<p>Manage Your Tour Days</p>
	</td>
</tr>
<tr>
	<td>
		<div id='formDay' style="display:none;">
			<div id="form-tab" class="form-tab"></div>
			<div class="clear"></div>
			<form name="day_form" action="srilanka_days.php" method="post" onsubmit="return validateDay();" enctype='multipart/form-data'>
				<fieldset>
					
					<p>
						<label style="padding-right:20px;">Srilanka Package</label>:&nbsp;&nbsp;
						<select name="sri_id" id="sri_id">
						<option value="">- Select -</option>

				<?php echo $selectCount1	=	"SELECT sri_name,sri_id FROM ".TABLE_DAY." ORDER BY sri_name";
				$selectResult1	=	mysql_query($selectCount1) or die (mysql_error());
				$num1			=	mysql_num_rows($selectResult1);	
				

						while($row1			=	mysql_fetch_array($selectResult1)) { ?>
						<option value="<?php echo $row1[sri_id]; ?>"><?php echo $row1[sri_name]; ?></option>
						<?php } ?>
						</select>
					</p>

					<p>
						<span id='sri_idSpan' class='backvalid'></span>
					</p>
					
					<?php exit(0); ?>
					
					
					<p>
						<label style="padding-right:20px;">Day Plan</label>:&nbsp;&nbsp;
						<textarea name="day_name" id="day_name" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day_nameSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 1 Title</label>:&nbsp;&nbsp;
						<textarea name="day1_title" id="day1_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day1_titleSpan' class='backvalid'></span>
					</p>				

					<p>
						<label style="padding-right:20px;">Day 2 Title</label>:&nbsp;&nbsp;
						<textarea name="day2_title" id="day2_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day2_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Place</label>:&nbsp;&nbsp;
						<input name="day2_place" id="day2_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day2_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Description</label>:&nbsp;&nbsp;
						<textarea name="day2_desc" id="day2_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day2_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 2 Image 1</label>:&nbsp;&nbsp;
						<input name="day2_path1" id="day2_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 2</label>:&nbsp;&nbsp;
						<input name="day2_path2" id="day2_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 3</label>:&nbsp;&nbsp;
						<input name="day2_path3" id="day2_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 4</label>:&nbsp;&nbsp;
						<input name="day2_path4" id="day2_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Stay</label>:&nbsp;&nbsp;
						<input name="day2_stay" id="day2_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day2_staySpan' class='backvalid'></span>
					</p>
					
					
					
					<p>
						<label style="padding-right:20px;">Day 3 Title</label>:&nbsp;&nbsp;
						<textarea name="day3_title" id="day3_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day3_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Place</label>:&nbsp;&nbsp;
						<input name="day3_place" id="day3_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day3_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Description</label>:&nbsp;&nbsp;
						<textarea name="day3_desc" id="day3_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day3_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 3 Image 1</label>:&nbsp;&nbsp;
						<input name="day3_path1" id="day3_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 2</label>:&nbsp;&nbsp;
						<input name="day3_path2" id="day3_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 3</label>:&nbsp;&nbsp;
						<input name="day3_path3" id="day3_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 4</label>:&nbsp;&nbsp;
						<input name="day3_path4" id="day3_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Stay</label>:&nbsp;&nbsp;
						<input name="day3_stay" id="day3_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day3_staySpan' class='backvalid'></span>
					</p>



					<p>
						<label style="padding-right:20px;">Day 4 Title</label>:&nbsp;&nbsp;
						<textarea name="day4_title" id="day4_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day4_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Place</label>:&nbsp;&nbsp;
						<input name="day4_place" id="day4_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day4_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Description</label>:&nbsp;&nbsp;
						<textarea name="day4_desc" id="day4_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day4_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 4 Image 1</label>:&nbsp;&nbsp;
						<input name="day4_path1" id="day4_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 2</label>:&nbsp;&nbsp;
						<input name="day4_path2" id="day4_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 3</label>:&nbsp;&nbsp;
						<input name="day4_path3" id="day4_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 4</label>:&nbsp;&nbsp;
						<input name="day4_path4" id="day4_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Stay</label>:&nbsp;&nbsp;
						<input name="day4_stay" id="day4_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day4_staySpan' class='backvalid'></span>
					</p>





					<p>
						<label style="padding-right:20px;">Day 5 Title</label>:&nbsp;&nbsp;
						<textarea name="day5_title" id="day5_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day5_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Place</label>:&nbsp;&nbsp;
						<input name="day5_place" id="day5_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day5_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Description</label>:&nbsp;&nbsp;
						<textarea name="day5_desc" id="day5_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day5_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 5 Image 1</label>:&nbsp;&nbsp;
						<input name="day5_path1" id="day5_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 2</label>:&nbsp;&nbsp;
						<input name="day5_path2" id="day5_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 3</label>:&nbsp;&nbsp;
						<input name="day5_path3" id="day5_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 4</label>:&nbsp;&nbsp;
						<input name="day5_path4" id="day5_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path4Span' class='backvalid'></span>
					</p>


					<p>
						<label style="padding-right:20px;">Day 5 Place 2</label>:&nbsp;&nbsp;
						<input name="day5_place1" id="day5_place1" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day5_place1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Place 2 Description</label>:&nbsp;&nbsp;
						<textarea name="day5_desc1" id="day5_desc1" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day5_desc1Span' class='backvalid'></span>
					</p>


					<p>
						<label style="padding-right:20px;">Day 5 Image 5</label>:&nbsp;&nbsp;
						<input name="day5_path5" id="day5_path5" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path5Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 6</label>:&nbsp;&nbsp;
						<input name="day5_path6" id="day5_path6" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path6Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 7</label>:&nbsp;&nbsp;
						<input name="day5_path7" id="day5_path7" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path7Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 8</label>:&nbsp;&nbsp;
						<input name="day5_path8" id="day5_path8" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path8Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Stay</label>:&nbsp;&nbsp;
						<input name="day5_stay" id="day5_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day5_staySpan' class='backvalid'></span>
					</p>








					<p>
						<label style="padding-right:20px;">Day 6 Title</label>:&nbsp;&nbsp;
						<textarea name="day6_title" id="day6_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day6_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Place</label>:&nbsp;&nbsp;
						<input name="day6_place" id="day6_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day6_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Description</label>:&nbsp;&nbsp;
						<textarea name="day6_desc" id="day6_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day6_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 6 Image 1</label>:&nbsp;&nbsp;
						<input name="day6_path1" id="day6_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 2</label>:&nbsp;&nbsp;
						<input name="day6_path2" id="day6_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 3</label>:&nbsp;&nbsp;
						<input name="day6_path3" id="day6_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 4</label>:&nbsp;&nbsp;
						<input name="day6_path4" id="day6_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Stay</label>:&nbsp;&nbsp;
						<input name="day6_stay" id="day6_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day6_staySpan' class='backvalid'></span>
					</p>











					<p>
						<label style="padding-right:20px;">Day 7 Title</label>:&nbsp;&nbsp;
						<textarea name="day7_title" id="day7_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day7_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Place</label>:&nbsp;&nbsp;
						<input name="day7_place" id="day7_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day7_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Description</label>:&nbsp;&nbsp;
						<textarea name="day7_desc" id="day7_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day7_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 7 Image 1</label>:&nbsp;&nbsp;
						<input name="day7_path1" id="day7_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 2</label>:&nbsp;&nbsp;
						<input name="day7_path2" id="day7_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 3</label>:&nbsp;&nbsp;
						<input name="day7_path3" id="day7_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 4</label>:&nbsp;&nbsp;
						<input name="day7_path4" id="day7_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Stay</label>:&nbsp;&nbsp;
						<input name="day7_stay" id="day7_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day7_staySpan' class='backvalid'></span>
					</p>


	








					

					<p>
						<label style="padding-right:20px;">Day 8 Title</label>:&nbsp;&nbsp;
						<textarea name="day8_title" id="day8_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day8_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Place</label>:&nbsp;&nbsp;
						<input name="day8_place" id="day8_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day8_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Description</label>:&nbsp;&nbsp;
						<textarea name="day8_desc" id="day8_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day8_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 8 Image 1</label>:&nbsp;&nbsp;
						<input name="day8_path1" id="day8_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 2</label>:&nbsp;&nbsp;
						<input name="day8_path2" id="day8_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 3</label>:&nbsp;&nbsp;
						<input name="day8_path3" id="day8_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 4</label>:&nbsp;&nbsp;
						<input name="day8_path4" id="day8_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Stay</label>:&nbsp;&nbsp;
						<input name="day8_stay" id="day8_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day8_staySpan' class='backvalid'></span>
					</p>












					<p>
						<label style="padding-right:20px;">Day 9 Title</label>:&nbsp;&nbsp;
						<textarea name="day9_title" id="day9_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day9_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Place</label>:&nbsp;&nbsp;
						<input name="day9_place" id="day9_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day9_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Description</label>:&nbsp;&nbsp;
						<textarea name="day9_desc" id="day9_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day9_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 9 Image 1</label>:&nbsp;&nbsp;
						<input name="day9_path1" id="day9_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 2</label>:&nbsp;&nbsp;
						<input name="day9_path2" id="day9_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 3</label>:&nbsp;&nbsp;
						<input name="day9_path3" id="day9_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 4</label>:&nbsp;&nbsp;
						<input name="day9_path4" id="day9_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Stay</label>:&nbsp;&nbsp;
						<input name="day9_stay" id="day9_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day9_staySpan' class='backvalid'></span>
					</p>




					







					<p>
						<label style="padding-right:20px;">Day 10 Title</label>:&nbsp;&nbsp;
						<textarea name="day10_title" id="day10_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day10_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Place</label>:&nbsp;&nbsp;
						<input name="day10_place" id="day10_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day10_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Description</label>:&nbsp;&nbsp;
						<textarea name="day10_desc" id="day10_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day10_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 10 Image 1</label>:&nbsp;&nbsp;
						<input name="day10_path1" id="day10_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 2</label>:&nbsp;&nbsp;
						<input name="day10_path2" id="day10_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 3</label>:&nbsp;&nbsp;
						<input name="day10_path3" id="day10_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 4</label>:&nbsp;&nbsp;
						<input name="day10_path4" id="day10_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path4Span' class='backvalid'></span>
					</p>


					<p>
						<label style="padding-right:20px;">Day 10 Place 2</label>:&nbsp;&nbsp;
						<input name="day10_place1" id="day10_place1" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day10_place1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Place 2 Description</label>:&nbsp;&nbsp;
						<textarea name="day10_desc1" id="day10_desc1" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day10_desc1Span' class='backvalid'></span>
					</p>

						
					<p>
						<label style="padding-right:20px;">Day 10 Image 5</label>:&nbsp;&nbsp;
						<input name="day10_path5" id="day10_path5" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path5Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 6</label>:&nbsp;&nbsp;
						<input name="day10_path6" id="day10_path6" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path6Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 7</label>:&nbsp;&nbsp;
						<input name="day10_path7" id="day10_path7" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path7Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 8</label>:&nbsp;&nbsp;
						<input name="day10_path8" id="day10_path8" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path8Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Stay</label>:&nbsp;&nbsp;
						<input name="day10_stay" id="day10_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day10_staySpan' class='backvalid'></span>
					</p>


				



					
					<p>
						<label style="padding-right:20px;">Day 11 Title</label>:&nbsp;&nbsp;
						<textarea name="day11_title" id="day11_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day11_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Place</label>:&nbsp;&nbsp;
						<input name="day11_place" id="day11_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day11_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Description</label>:&nbsp;&nbsp;
						<textarea name="day11_desc" id="day11_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day11_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 11 Image 1</label>:&nbsp;&nbsp;
						<input name="day11_path1" id="day11_path1" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 2</label>:&nbsp;&nbsp;
						<input name="day11_path2" id="day11_path2" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 3</label>:&nbsp;&nbsp;
						<input name="day11_path3" id="day11_path3" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 4</label>:&nbsp;&nbsp;
						<input name="day11_path4" id="day11_path4" class="text-long"  type="file" /><img src='' id='image_holder' name='image_holder1' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Stay</label>:&nbsp;&nbsp;
						<input name="day11_stay" id="day11_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day11_staySpan' class='backvalid'></span>
					</p>










					<p>
						<label style="padding-right:20px;">Day 12 Title</label>:&nbsp;&nbsp;
						<textarea name="day12_title" id="day12_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day12_titleSpan' class='backvalid'></span>
					</p>
		

					
					<p>
						<label style="padding-right:20px;">Price Included</label>:&nbsp;&nbsp;
						<textarea name="price_include" id="price_include" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='price_includeSpan' class='backvalid'></span>
					</p>



					<p>
						<label style="padding-right:20px;">Price Not Included</label>:&nbsp;&nbsp;
						<textarea name="price_notinclude" id="price_notinclude" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='price_notincludeSpan' class='backvalid'></span>
					</p>


					<p>
						<label style="padding-right:20px;">Status</label>:&nbsp;&nbsp;
						<select name="day_status" id="day_status">
						<option value="">- Select -</option>
						<?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { ?>
						<option value="<?php echo $plan_status_key; ?>"><?php echo $plan_status_value; ?></option>
						<?php } ?>
						</select>
					</p>
					<p>
						<span id='day_statusSpan' class='backvalid'></span>
					</p>

					<input id="submitDay" type="submit" value="" class="button-submit"/>
					<input type="submit" value="Cancel" class="button-cancel" onclick="hide('formDay');return false;" />
					<input type="hidden" name="day_id" id="day_id" value="" />
					<input type="hidden" name="action" id="action" value="" />
				</fieldset>
			</form>
		</div>
	</td>
</tr>
<tr>
	<td>
		<div class="add_link"><a href="" onclick="newDay();return false;" class="button-submit">New Days</a></div>
	</td>
</tr>
<tr>
	<td>
		<table class="tablecss" border='1'>
			<tr class="thead">
				<th>Day Id</th>
				<th>Day Name</th>
				<th>Day 1 Title</th>
				<th>Day 2 Title</th>
				<th>Day 2 Place</th>
				<th>Day 2 Description</th>
				<th>Day Status</th>
				<th>Day 2 Image 1</th>
				<th>Day 2 Image 2</th>
				<th>Day 2 Image 3</th>
				<th>Day 2 Image 4</th>
				<th>Day 2 Stay</th>
				<th>Edit/Delete</td>
			</tr>
			<?php 
			
			$result = SingleTon::selectQuery("day_id,sri_id,day_name,day1_title,day2_title,day2_place,day2_desc,day2_path1,day2_path2,day2_path3,day2_path4,day2_stay,day3_title,day3_place,day3_desc,day3_path1,day3_path2,day3_path3,day3_path4,day3_stay,day4_title,day4_place,day4_desc,day4_path1,day4_path2,day4_path3,day4_path4,day4_stay,day5_title,day5_place,day5_desc,day5_path1,day5_path2,day5_path3,day5_path4,  day5_stay,day5_place1,day5_desc1,day5_path5,day5_path6,day5_path7,day5_path8,day6_title,day6_place,day6_desc,day6_path1,day6_path2,day6_path3,day6_path4,day6_stay,day7_title,day7_place,day7_desc ,day7_path1,day7_path2,day7_path3,day7_path4,day7_stay,day8_title,day8_place,day8_desc,day8_path1 ,day8_path2,day8_path3,day8_path4,day8_stay,day9_title,day9_place,day9_desc,day9_path1,day9_path2 ,day9_path3,day9_path4,day9_stay,day10_title,day10_place,day10_desc,day10_path1,day10_path2,day10_path3,day10_path4,day10_stay,day10_place1,day10_desc1,day10_path5,day10_path6,day10_path7,day10_path8,day11_title,day11_place,day11_desc,day11_path1,day11_path2,day11_path3,day11_path4,day11_stay ,day12_title,price_include,price_notinclude,day_status","ORDER BY day_id DESC",TABLE_DAY,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					
					$sri_id					=	$result["sri_id"];
					$day_id					=	$result["day_id"];
					$day_name				=	$result["day_name"];
					$day1_title				=	$result["day1_title"];
					$day2_title				=	$result["day2_title"];
					$day2_place				=	$result["day2_place"];
					$day2_desc				=	$result["day2_desc"];
					$day2_path1				=	$result["day2_path1"];
					$day2_path2				=	$result["day2_path2"];
					$day2_path3				=	$result["day2_path3"];
					$day2_path4				=	$result["day2_path4"];
					$day2_stay				=	$result["day2_stay"];
					$day3_title				=	$result["day3_title"];
					$day3_place				=	$result["day3_place"];
					$day3_desc				=	$result["day3_desc"];
					$day3_path1				=	$result["day3_path1"];
					$day3_path2				=	$result["day3_path2"];
					$day3_path3				=	$result["day3_path3"];
					$day3_path4				=	$result["day3_path4"];
					$day3_stay				=	$result["day3_stay"];	
					$day4_title				=	$result["day4_title"];
					$day4_place				=	$result["day4_place"];
					$day4_desc				=	$result["day4_desc"];
					$day4_path1				=	$result["day4_path1"];
					$day4_path2				=	$result["day4_path2"];
					$day4_path3				=	$result["day4_path3"];
					$day4_path4				=	$result["day4_path4"];
					$day4_stay				=	$result["day4_stay"];	
					$day5_title				=	$result["day5_title"];
					$day5_place				=	$result["day5_place"];
					$day5_desc				=	$result["day5_desc"];
					$day5_path1				=	$result["day5_path1"];
					$day5_path2				=	$result["day5_path2"];
					$day5_path3				=	$result["day5_path3"];
					$day5_path4				=	$result["day5_path4"];
					$day5_path5				=	$result["day5_path5"];
					$day5_path6				=	$result["day5_path6"];
					$day5_path7				=	$result["day5_path7"];
					$day5_path8				=	$result["day5_path8"];
					$day5_stay				=	$result["day5_stay"];
					$day5_place1			=	$result["day5_place1"];
					$day5_desc1				=	$result["day5_desc1"];
					$day6_title				=	$result["day6_title"];
					$day6_place				=	$result["day6_place"];
					$day6_desc				=	$result["day6_desc"];
					$day6_path1				=	$result["day6_path1"];
					$day6_path2				=	$result["day6_path2"];
					$day6_path3				=	$result["day6_path3"];
					$day6_path4				=	$result["day6_path4"];
					$day6_stay				=	$result["day6_stay"];
					$day7_title				=	$result["day7_title"];
					$day7_place				=	$result["day7_place"];
					$day7_desc				=	$result["day7_desc"];
					$day7_path1				=	$result["day7_path1"];
					$day7_path2				=	$result["day7_path2"];
					$day7_path3				=	$result["day7_path3"];
					$day7_path4				=	$result["day7_path4"];
					$day7_stay				=	$result["day7_stay"];
					$day8_title				=	$result["day8_title"];
					$day8_place				=	$result["day8_place"];
					$day8_desc				=	$result["day8_desc"];
					$day8_path1				=	$result["day8_path1"];
					$day8_path2				=	$result["day8_path2"];
					$day8_path3				=	$result["day8_path3"];
					$day8_path4				=	$result["day8_path4"];
					$day8_stay				=	$result["day8_stay"];
					$day9_title				=	$result["day9_title"];
					$day9_place				=	$result["day9_place"];
					$day9_desc				=	$result["day9_desc"];
					$day9_path1				=	$result["day9_path1"];
					$day9_path2				=	$result["day9_path2"];
					$day9_path3				=	$result["day9_path3"];
					$day9_path4				=	$result["day9_path4"];
					$day9_stay				=	$result["day9_stay"];
					$day10_title			=	$result["day10_title"];
					$day10_place			=	$result["day10_place"];
					$day10_desc				=	$result["day10_desc"];
					$day10_path1			=	$result["day10_path1"];
					$day10_path2			=	$result["day10_path2"];
					$day10_path3			=	$result["day10_path3"];
					$day10_path4			=	$result["day10_path4"];
					$day10_path5			=	$result["day10_path5"];
					$day10_path6			=	$result["day10_path6"];
					$day10_path7			=	$result["day10_path7"];
					$day10_path8			=	$result["day10_path8"];
					$day10_stay				=	$result["day10_stay"];
					$day10_place1			=	$result["day10_place1"];
					$day10_desc1			=	$result["day10_desc1"];
					$day11_title			=	$result["day11_title"];
					$day11_place			=	$result["day11_place"];
					$day11_desc				=	$result["day11_desc"];
					$day11_path1			=	$result["day11_path1"];
					$day11_path2			=	$result["day11_path2"];
					$day11_path3			=	$result["day11_path3"];
					$day11_path4			=	$result["day11_path4"];
					$day11_stay				=	$result["day11_stay"];
					$day12_title			=	$result["day12_title"];
					$day_status				=	$result["day_status"];
					$price_include			=	$result["price_include"];
					$price_notinclude		=	$result["price_notinclude"];
					
					$row_count++;
					if ($row_count%2 == 0) $row_class = 'class="odd"';
					else $row_class = 'class="even"';

			?>
			<tr <?php echo $row_class;?>>      
				<td><?php echo $day_id;?></td>
				<td><?php echo $day_name;?></td>
				<td><?php echo $day1_title;?></td>
				<td><?php echo $day2_title;?></td>
				<td><?php echo $day2_place;?></td>
				<td><?php echo $day2_desc;?></td>
				<td><?php foreach($plan_status_array as $plan_status_key=>$plan_status_value) { if($plan_status_key == $day_status) { echo $plan_status_value; } } ?></td>
				<td><img src='<?php echo $day2_path1; ?>' width='30' height='30' /></td>
				<td><img src='<?php echo $day2_path2; ?>' width='30' height='30' /></td>
				<td><img src='<?php echo $day2_path3; ?>' width='30' height='30' /></td>
				<td><img src='<?php echo $day2_path4; ?>' width='30' height='30' /></td>

				<td><?php echo $day2_stay;?>

				<div style="display:none;" id="sri_id-<?php echo $day_id; ?>"><?php echo $sri_id;?></div>
				<div style="display:none;" id="day_id-<?php echo $day_id; ?>"><?php echo $day_id;?></div>
				<div style="display:none;" id="day_name-<?php echo $day_id; ?>"><?php echo $day_name;?></div>
				<div style="display:none;" id="day1_title-<?php echo $day_id; ?>"><?php echo $day1_title;?></div>
				<div style="display:none;" id="day2_title-<?php echo $day_id; ?>"><?php echo $day2_title;?></div>
				<div style="display:none;" id="day2_place-<?php echo $day_id; ?>"><?php echo $day2_place; ?></div>
				<div style="display:none;" id="day2_desc-<?php echo $day_id; ?>"><?php echo $day2_desc; ?></div>
				<div style="display:none;" id="day2_path1-<?php echo $day_id; ?>"><?php echo $day2_path1; ?></div>
				<div style="display:none;" id="day2_path2-<?php echo $day_id; ?>"><?php echo $day2_path2; ?></div>
				<div style="display:none;" id="day2_path3-<?php echo $day_id; ?>"><?php echo $day2_path3; ?></div>
				<div style="display:none;" id="day2_path4-<?php echo $day_id; ?>"><?php echo $day2_path4; ?></div>
				<div style="display:none;" id="day2_stay-<?php echo $day_id; ?>"><?php echo $day2_stay; ?></div>

				<div style="display:none;" id="day3_title-<?php echo $day_id; ?>"><?php echo $day3_title;?></div>
				<div style="display:none;" id="day3_place-<?php echo $day_id; ?>"><?php echo $day3_place; ?></div>
				<div style="display:none;" id="day3_desc-<?php echo $day_id; ?>"><?php echo $day3_desc; ?></div>
				<div style="display:none;" id="day3_path1-<?php echo $day_id; ?>"><?php echo $day3_path1; ?></div>
				<div style="display:none;" id="day3_path2-<?php echo $day_id; ?>"><?php echo $day3_path2; ?></div>
				<div style="display:none;" id="day3_path3-<?php echo $day_id; ?>"><?php echo $day3_path3; ?></div>
				<div style="display:none;" id="day3_path4-<?php echo $day_id; ?>"><?php echo $day3_path4; ?></div>
				<div style="display:none;" id="day3_stay-<?php echo $day_id; ?>"><?php echo $day3_stay; ?></div>

				<div style="display:none;" id="day4_title-<?php echo $day_id; ?>"><?php echo $day4_title;?></div>
				<div style="display:none;" id="day4_place-<?php echo $day_id; ?>"><?php echo $day4_place; ?></div>
				<div style="display:none;" id="day4_desc-<?php echo $day_id; ?>"><?php echo $day4_desc; ?></div>
				<div style="display:none;" id="day4_path1-<?php echo $day_id; ?>"><?php echo $day4_path1; ?></div>
				<div style="display:none;" id="day4_path2-<?php echo $day_id; ?>"><?php echo $day4_path2; ?></div>
				<div style="display:none;" id="day4_path3-<?php echo $day_id; ?>"><?php echo $day4_path3; ?></div>
				<div style="display:none;" id="day4_path4-<?php echo $day_id; ?>"><?php echo $day4_path4; ?></div>
				<div style="display:none;" id="day4_stay-<?php echo $day_id; ?>"><?php echo $day4_stay; ?></div>

				<div style="display:none;" id="day5_title-<?php echo $day_id; ?>"><?php echo $day5_title;?></div>
				<div style="display:none;" id="day5_place-<?php echo $day_id; ?>"><?php echo $day5_place; ?></div>
				<div style="display:none;" id="day5_desc-<?php echo $day_id; ?>"><?php echo $day5_desc; ?></div>
				<div style="display:none;" id="day5_path1-<?php echo $day_id; ?>"><?php echo $day5_path1; ?></div>
				<div style="display:none;" id="day5_path2-<?php echo $day_id; ?>"><?php echo $day5_path2; ?></div>
				<div style="display:none;" id="day5_path3-<?php echo $day_id; ?>"><?php echo $day5_path3; ?></div>
				<div style="display:none;" id="day5_path4-<?php echo $day_id; ?>"><?php echo $day5_path4; ?></div>
				<div style="display:none;" id="day5_stay-<?php echo $day_id; ?>"><?php echo $day5_stay; ?></div>
				<div style="display:none;" id="day5_place1-<?php echo $day_id; ?>"><?php echo $day5_place1; ?></div>
				<div style="display:none;" id="day5_desc1-<?php echo $day_id; ?>"><?php echo $day5_desc1; ?></div>
				<div style="display:none;" id="day5_path5-<?php echo $day_id; ?>"><?php echo $day5_path5; ?></div>
				<div style="display:none;" id="day5_path6-<?php echo $day_id; ?>"><?php echo $day5_path6; ?></div>
				<div style="display:none;" id="day5_path7-<?php echo $day_id; ?>"><?php echo $day5_path7; ?></div>
				<div style="display:none;" id="day5_path8-<?php echo $day_id; ?>"><?php echo $day5_path8; ?></div>

				<div style="display:none;" id="day6_title-<?php echo $day_id; ?>"><?php echo $day6_title;?></div>
				<div style="display:none;" id="day6_place-<?php echo $day_id; ?>"><?php echo $day6_place; ?></div>
				<div style="display:none;" id="day6_desc-<?php echo $day_id; ?>"><?php echo $day6_desc; ?></div>
				<div style="display:none;" id="day6_path1-<?php echo $day_id; ?>"><?php echo $day6_path1; ?></div>
				<div style="display:none;" id="day6_path2-<?php echo $day_id; ?>"><?php echo $day6_path2; ?></div>
				<div style="display:none;" id="day6_path3-<?php echo $day_id; ?>"><?php echo $day6_path3; ?></div>
				<div style="display:none;" id="day6_path4-<?php echo $day_id; ?>"><?php echo $day6_path4; ?></div>
				<div style="display:none;" id="day6_stay-<?php echo $day_id; ?>"><?php echo $day6_stay; ?></div>

				<div style="display:none;" id="day7_title-<?php echo $day_id; ?>"><?php echo $day7_title;?></div>
				<div style="display:none;" id="day7_place-<?php echo $day_id; ?>"><?php echo $day7_place; ?></div>
				<div style="display:none;" id="day7_desc-<?php echo $day_id; ?>"><?php echo $day7_desc; ?></div>
				<div style="display:none;" id="day7_path1-<?php echo $day_id; ?>"><?php echo $day7_path1; ?></div>
				<div style="display:none;" id="day7_path2-<?php echo $day_id; ?>"><?php echo $day7_path2; ?></div>
				<div style="display:none;" id="day7_path3-<?php echo $day_id; ?>"><?php echo $day7_path3; ?></div>
				<div style="display:none;" id="day7_path4-<?php echo $day_id; ?>"><?php echo $day7_path4; ?></div>
				<div style="display:none;" id="day7_stay-<?php echo $day_id; ?>"><?php echo $day7_stay; ?></div>

				<div style="display:none;" id="day8_title-<?php echo $day_id; ?>"><?php echo $day8_title;?></div>
				<div style="display:none;" id="day8_place-<?php echo $day_id; ?>"><?php echo $day8_place; ?></div>
				<div style="display:none;" id="day8_desc-<?php echo $day_id; ?>"><?php echo $day8_desc; ?></div>
				<div style="display:none;" id="day8_path1-<?php echo $day_id; ?>"><?php echo $day8_path1; ?></div>
				<div style="display:none;" id="day8_path2-<?php echo $day_id; ?>"><?php echo $day8_path2; ?></div>
				<div style="display:none;" id="day8_path3-<?php echo $day_id; ?>"><?php echo $day8_path3; ?></div>
				<div style="display:none;" id="day8_path4-<?php echo $day_id; ?>"><?php echo $day8_path4; ?></div>
				<div style="display:none;" id="day8_stay-<?php echo $day_id; ?>"><?php echo $day8_stay; ?></div>

				<div style="display:none;" id="day9_title-<?php echo $day_id; ?>"><?php echo $day9_title;?></div>
				<div style="display:none;" id="day9_place-<?php echo $day_id; ?>"><?php echo $day9_place; ?></div>
				<div style="display:none;" id="day9_desc-<?php echo $day_id; ?>"><?php echo $day9_desc; ?></div>
				<div style="display:none;" id="day9_path1-<?php echo $day_id; ?>"><?php echo $day9_path1; ?></div>
				<div style="display:none;" id="day9_path2-<?php echo $day_id; ?>"><?php echo $day9_path2; ?></div>
				<div style="display:none;" id="day9_path3-<?php echo $day_id; ?>"><?php echo $day9_path3; ?></div>
				<div style="display:none;" id="day9_path4-<?php echo $day_id; ?>"><?php echo $day9_path4; ?></div>
				<div style="display:none;" id="day9_stay-<?php echo $day_id; ?>"><?php echo $day9_stay; ?></div>

				<div style="display:none;" id="day10_title-<?php echo $day_id; ?>"><?php echo $day10_title;?></div>
				<div style="display:none;" id="day10_place-<?php echo $day_id; ?>"><?php echo $day10_place; ?></div>
				<div style="display:none;" id="day10_desc-<?php echo $day_id; ?>"><?php echo $day10_desc; ?></div>
				<div style="display:none;" id="day10_path1-<?php echo $day_id; ?>"><?php echo $day10_path1; ?></div>
				<div style="display:none;" id="day10_path2-<?php echo $day_id; ?>"><?php echo $day10_path2; ?></div>
				<div style="display:none;" id="day10_path3-<?php echo $day_id; ?>"><?php echo $day10_path3; ?></div>
				<div style="display:none;" id="day10_path4-<?php echo $day_id; ?>"><?php echo $day10_path4; ?></div>
				<div style="display:none;" id="day10_stay-<?php echo $day_id; ?>"><?php echo $day10_stay; ?></div>
				<div style="display:none;" id="day10_place1-<?php echo $day_id; ?>"><?php echo $day10_place1; ?></div>
				<div style="display:none;" id="day10_desc1-<?php echo $day_id; ?>"><?php echo $day10_desc1; ?></div>
				<div style="display:none;" id="day10_path5-<?php echo $day_id; ?>"><?php echo $day10_path5; ?></div>
				<div style="display:none;" id="day10_path6-<?php echo $day_id; ?>"><?php echo $day10_path6; ?></div>
				<div style="display:none;" id="day10_path7-<?php echo $day_id; ?>"><?php echo $day10_path7; ?></div>
				<div style="display:none;" id="day10_path8-<?php echo $day_id; ?>"><?php echo $day10_path8; ?></div>

				<div style="display:none;" id="day11_title-<?php echo $day_id; ?>"><?php echo $day11_title;?></div>
				<div style="display:none;" id="day11_place-<?php echo $day_id; ?>"><?php echo $day11_place; ?></div>
				<div style="display:none;" id="day11_desc-<?php echo $day_id; ?>"><?php echo $day11_desc; ?></div>
				<div style="display:none;" id="day11_path1-<?php echo $day_id; ?>"><?php echo $day11_path1; ?></div>
				<div style="display:none;" id="day11_path2-<?php echo $day_id; ?>"><?php echo $day11_path2; ?></div>
				<div style="display:none;" id="day11_path3-<?php echo $day_id; ?>"><?php echo $day11_path3; ?></div>
				<div style="display:none;" id="day11_path4-<?php echo $day_id; ?>"><?php echo $day11_path4; ?></div>
				<div style="display:none;" id="day11_stay-<?php echo $day_id; ?>"><?php echo $day11_stay; ?></div>

				<div style="display:none;" id="day12_title-<?php echo $day_id; ?>"><?php echo $day12_title;?></div>

				<div style="display:none;" id="price_include-<?php echo $day_id; ?>"><?php echo $price_include; ?></div>
				<div style="display:none;" id="price_notinclude-<?php echo $day_id; ?>"><?php echo $price_notinclude; ?></div>

				<div style="display:none;" id="day_status-<?php echo $day_id; ?>"><?php echo $day_status; ?></div></td>

				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="editDay('<?php echo $day_id; ?>');return false;"><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deleteDay('<?php echo $day_id; ?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
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