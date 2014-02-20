<?php
session_start();
require_once("includes/control_functions.php");
require_once("array_call.php");

error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);

ini_set('max_execution_time','20000');
//ini_set('upload_max_filesize','500G');
//ini_set('display_errors',1);
//error_reporting(E_ALL);

//ini_set('max_file_uploads','70');  // maximum number of files can be uploaded in a single request

//echo ini_get('max_file_uploads');

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
		
                /*echo "<pre>";
                print_r($_REQUEST);
                echo "</pre>";

                echo "<pre>";
                print_r($_FILES);
                echo "</pre>";
                exit(0);*/

            
                /*echo $_FILES['day7_path1']['name']."helodf";
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		exit(0);*/
            
            
                $day_name           =       mysql_real_escape_string(nl2br($day_name));
                $day1_title         =       mysql_real_escape_string(nl2br($day1_title));
                $day2_title         =       mysql_real_escape_string(nl2br($day2_title));
                $day2_place         =       mysql_real_escape_string(nl2br($day2_place));
                $day2_desc          =       mysql_real_escape_string(nl2br($day2_desc));                      
				$day2_stay          =       mysql_real_escape_string(nl2br($day2_stay));
                
                $day3_title         =       mysql_real_escape_string(nl2br($day3_title));
                $day3_place         =       mysql_real_escape_string(nl2br($day3_place));
                $day3_desc          =       mysql_real_escape_string(nl2br($day3_desc));
                $day3_stay          =       mysql_real_escape_string(nl2br($day3_stay));
                
                $day4_title         =       mysql_real_escape_string(nl2br($day4_title));
                $day4_place         =       mysql_real_escape_string(nl2br($day4_place));
                $day4_desc          =       mysql_real_escape_string(nl2br($day4_desc));

				$day4a_title         =       mysql_real_escape_string(nl2br($day4a_title));
                $day4a_place         =       mysql_real_escape_string(nl2br($day4a_place));
                $day4a_desc          =       mysql_real_escape_string(nl2br($day4a_desc));
                $day4a_stay          =       mysql_real_escape_string(nl2br($day4a_stay));

                $day5_title         =       mysql_real_escape_string(nl2br($day5_title));
                $day5_place         =       mysql_real_escape_string(nl2br($day5_place));
                $day5_desc          =       mysql_real_escape_string(nl2br($day5_desc));
                $day5_stay          =       mysql_real_escape_string(nl2br($day5_stay));
                
                $day6_title         =       mysql_real_escape_string(nl2br($day6_title));
                $day6_place         =       mysql_real_escape_string(nl2br($day6_place));
                $day6_desc          =       mysql_real_escape_string(nl2br($day6_desc));
                $day6_stay          =       mysql_real_escape_string(nl2br($day6_stay));
                
                $day7_title         =       mysql_real_escape_string(nl2br($day7_title));
                $day7_place         =       mysql_real_escape_string(nl2br($day7_place));
                $day7_desc          =       mysql_real_escape_string(nl2br($day7_desc));
                $day7_stay          =       mysql_real_escape_string(nl2br($day7_stay));
                
                $day8_title         =       mysql_real_escape_string(nl2br($day8_title));
                $day8_place         =       mysql_real_escape_string(nl2br($day8_place));
                $day8_desc          =       mysql_real_escape_string(nl2br($day8_desc));
                $day8_stay          =       mysql_real_escape_string(nl2br($day8_stay));
                
                $day9_title         =       mysql_real_escape_string(nl2br($day9_title));
                $day9_place         =       mysql_real_escape_string(nl2br($day9_place));
                $day9_desc          =       mysql_real_escape_string(nl2br($day9_desc));
                $day9_stay          =       mysql_real_escape_string(nl2br($day9_stay));
                
                $day10_title         =       mysql_real_escape_string(nl2br($day10_title));
                $day10_place         =       mysql_real_escape_string(nl2br($day10_place));
                $day10_desc          =       mysql_real_escape_string(nl2br($day10_desc));
                $day10_stay          =       mysql_real_escape_string(nl2br($day10_stay));
                
                $day11_title         =       mysql_real_escape_string(nl2br($day11_title));
                $day11_place         =       mysql_real_escape_string(nl2br($day11_place));
                $day11_desc          =       mysql_real_escape_string(nl2br($day11_desc));
                $day11_stay          =       mysql_real_escape_string(nl2br($day11_stay));
                
                $day12_title         =       mysql_real_escape_string(nl2br($day12_title));
               
                $day13_title         =       mysql_real_escape_string(nl2br($day13_title));
                $day13_place         =       mysql_real_escape_string(nl2br($day13_place));
                $day13_desc          =       mysql_real_escape_string(nl2br($day13_desc));
                $day13_stay          =       mysql_real_escape_string(nl2br($day13_stay));
                
                $day14_title         =       mysql_real_escape_string(nl2br($day14_title));
                $day14_place         =       mysql_real_escape_string(nl2br($day14_place));
                $day14_desc          =       mysql_real_escape_string(nl2br($day14_desc));
                $day14_stay          =       mysql_real_escape_string(nl2br($day14_stay));
                
                $price_include       =       mysql_real_escape_string(nl2br($price_include));
                $price_notinclude    =      mysql_real_escape_string(nl2br($price_notinclude));
                              
		if($_POST['action'] == 'edit') {
                    
                   

			if($_FILES['day2_path1']['name'] != '') {
				$day2_path1_name=$_FILES['day2_path1']['name'];
				$day2_path1_size=$_FILES['day2_path1']['size'];
				$day2_path1_type=$_FILES['day2_path1']['type'];
				$day2_path1_tmp=$_FILES['day2_path1']['tmp_name'];
		
				$day2_path1_complete_name		=		str_replace(" ",'',basename($day2_path1_name));
				$day2_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path1_complete_name));
				$day2_path1_ran							=		rand () ;
				$day2_path1_target				=		DAY2_PATH1.$day2_path1_ran.$day2_path1_complete_name;
				$day2_path1_path					=		",day2_path1='$day2_path1_target'";
				
				$selectCount	=	"SELECT day2_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day2_path1'] != '') {
					if(file_exists($row['day2_path1'])) {
						unlink($row['day2_path1']);
					} else {	
						echo "not deleted"; exit(0); exit(0);
					}
				}

				move_uploaded_file($day2_path1_tmp,$day2_path1_target);
			} else {
				$day2_path1_path					=		'';
			}


			if($_FILES['day2_path2']['name'] != '') {
				$day2_path2_name=$_FILES['day2_path2']['name'];
				$day2_path2_size=$_FILES['day2_path2']['size'];
				$day2_path2_type=$_FILES['day2_path2']['type'];
				$day2_path2_tmp=$_FILES['day2_path2']['tmp_name'];
		
				$day2_path2_complete_name		=		str_replace(" ",'',basename($day2_path2_name));
				$day2_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path2_complete_name));
				$day2_path2_ran							=		rand () ;
				$day2_path2_target				=		DAY2_PATH2.$day2_path2_ran.$day2_path2_complete_name;
				$day2_path2_path					=		",day2_path2='$day2_path2_target'";
				
				$selectCount            =	"SELECT day2_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult           =	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day2_path2'] != '') {
					if(file_exists($row['day2_path2'])) {
						unlink($row['day2_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day2_path2_tmp,$day2_path2_target);
			} else {
				$day2_path2_path					=		'';
			}

			if($_FILES['day2_path3']['name'] != '') {
				$day2_path3_name=$_FILES['day2_path3']['name'];
				$day2_path3_size=$_FILES['day2_path3']['size'];
				$day2_path3_type=$_FILES['day2_path3']['type'];
				$day2_path3_tmp=$_FILES['day2_path3']['tmp_name'];
		
				$day2_path3_complete_name		=		str_replace(" ",'',basename($day2_path3_name));
				$day2_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path3_complete_name));
				$day2_path3_ran							=		rand () ;
				$day2_path3_target				=		DAY2_PATH3.$day2_path3_ran.$day2_path3_complete_name;
				$day2_path3_path					=		",day2_path3='$day2_path3_target'";
				
				$selectCount	=	"SELECT day2_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day2_path3'] != '') {
					if(file_exists($row['day2_path3'])) {
						unlink($row['day2_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day2_path3_tmp,$day2_path3_target);
			} else {
				$day2_path3_path					=		'';
			}

			if($_FILES['day2_path4']['name'] != '') {
				$day2_path4_name=$_FILES['day2_path4']['name'];
				$day2_path4_size=$_FILES['day2_path4']['size'];
				$day2_path4_type=$_FILES['day2_path4']['type'];
				$day2_path4_tmp=$_FILES['day2_path4']['tmp_name'];
		
				$day2_path4_complete_name		=		str_replace(" ",'',basename($day2_path4_name));
				$day2_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path4_complete_name));
				$day2_path4_ran							=		rand () ;
				$day2_path4_target				=		DAY2_PATH4.$day2_path4_ran.$day2_path4_complete_name;
				$day2_path4_path					=		",day2_path4='$day2_path4_target'";
				
				$selectCount	=	"SELECT day2_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day2_path4'] != '') {
					if(file_exists($row['day2_path4'])) {
						unlink($row['day2_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day2_path4_tmp,$day2_path4_target);
			} else {
				$day2_path4_path					=		'';
			}


			if($_FILES['day3_path1']['name'] != '') {
				$day3_path1_name=$_FILES['day3_path1']['name'];
				$day3_path1_size=$_FILES['day3_path1']['size'];
				$day3_path1_type=$_FILES['day3_path1']['type'];
				$day3_path1_tmp=$_FILES['day3_path1']['tmp_name'];
		
				$day3_path1_complete_name		=		str_replace(" ",'',basename($day3_path1_name));
				$day3_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path1_complete_name));
				$day3_path1_ran							=		rand () ;
				$day3_path1_target				=		DAY3_PATH1.$day3_path1_ran.$day3_path1_complete_name;
				$day3_path1_path					=		",day3_path1='$day3_path1_target'";
				
				$selectCount	=	"SELECT day3_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day3_path1'] != '') {
					if(file_exists($row['day3_path1'])) {
						unlink($row['day3_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day3_path1_tmp,$day3_path1_target);
			} else {
				$day3_path1_path					=		'';
			}
			
			if($_FILES['day3_path2']['name'] != '') {
				$day3_path2_name=$_FILES['day3_path2']['name'];
				$day3_path2_size=$_FILES['day3_path2']['size'];
				$day3_path2_type=$_FILES['day3_path2']['type'];
				$day3_path2_tmp=$_FILES['day3_path2']['tmp_name'];
		
				$day3_path2_complete_name		=		str_replace(" ",'',basename($day3_path2_name));
				$day3_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path2_complete_name));
				$day3_path2_ran							=		rand () ;
				$day3_path2_target				=		DAY3_PATH2.$day3_path2_ran.$day3_path2_complete_name;
				$day3_path2_path					=		",day3_path2='$day3_path2_target'";
				
				$selectCount	=	"SELECT day3_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day3_path2'] != '') {
					if(file_exists($row['day3_path2'])) {
						unlink($row['day3_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day3_path2_tmp,$day3_path2_target);
			} else {
				$day3_path2_path					=		'';
			}

			if($_FILES['day3_path3']['name'] != '') {
				$day3_path3_name=$_FILES['day3_path3']['name'];
				$day3_path3_size=$_FILES['day3_path3']['size'];
				$day3_path3_type=$_FILES['day3_path3']['type'];
				$day3_path3_tmp=$_FILES['day3_path3']['tmp_name'];
		
				$day3_path3_complete_name		=		str_replace(" ",'',basename($day3_path3_name));
				$day3_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path3_complete_name));
				$day3_path3_ran							=		rand () ;
				$day3_path3_target				=		DAY3_PATH3.$day3_path3_ran.$day3_path3_complete_name;
				$day3_path3_path					=		",day3_path3='$day3_path3_target'";
				
				$selectCount	=	"SELECT day3_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day3_path3'] != '') {
					if(file_exists($row['day3_path3'])) {
						unlink($row['day3_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day3_path3_tmp,$day3_path3_target);
			} else {
				$day3_path3_path					=		'';
			}

			if($_FILES['day3_path4']['name'] != '') {
				$day3_path4_name=$_FILES['day3_path4']['name'];
				$day3_path4_size=$_FILES['day3_path4']['size'];
				$day3_path4_type=$_FILES['day3_path4']['type'];
				$day3_path4_tmp=$_FILES['day3_path4']['tmp_name'];
		
				$day3_path4_complete_name		=		str_replace(" ",'',basename($day3_path4_name));
				$day3_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path4_complete_name));
				$day3_path4_ran							=		rand () ;
				$day3_path4_target				=		DAY3_PATH4.$day3_path4_ran.$day3_path4_complete_name;
				$day3_path4_path					=		",day3_path4='$day3_path4_target'";
				
				$selectCount	=	"SELECT day3_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day3_path4'] != '') {
					if(file_exists($row['day3_path4'])) {
						unlink($row['day3_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day3_path4_tmp,$day3_path4_target);
			} else {
				$day3_path4_path					=		'';
			}


			if($_FILES['day4_path1']['name'] != '') {
				$day4_path1_name=$_FILES['day4_path1']['name'];
				$day4_path1_size=$_FILES['day4_path1']['size'];
				$day4_path1_type=$_FILES['day4_path1']['type'];
				$day4_path1_tmp=$_FILES['day4_path1']['tmp_name'];
		
				$day4_path1_complete_name		=		str_replace(" ",'',basename($day4_path1_name));
				$day4_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path1_complete_name));
				$day4_path1_ran							=		rand () ;
				$day4_path1_target				=		DAY4_PATH1.$day4_path1_ran.$day4_path1_complete_name;
				$day4_path1_path					=		",day4_path1='$day4_path1_target'";
				
				$selectCount	=	"SELECT day4_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				//echo $row['day4_path1'];

				if($row['day4_path1'] != '') {
					if(file_exists($row['day4_path1'])) {
						unlink($row['day4_path1']);
					} else {	
						//echo "not deleted 7gg"; exit(0);
					}
				}

				move_uploaded_file($day4_path1_tmp,$day4_path1_target);
			} else {
				$day4_path1_path					=		'';
			}

			if($_FILES['day4_path2']['name'] != '') {
				$day4_path2_name=$_FILES['day4_path2']['name'];
				$day4_path2_size=$_FILES['day4_path2']['size'];
				$day4_path2_type=$_FILES['day4_path2']['type'];
				$day4_path2_tmp=$_FILES['day4_path2']['tmp_name'];
		
				$day4_path2_complete_name		=		str_replace(" ",'',basename($day4_path2_name));
				$day4_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path2_complete_name));
				$day4_path2_ran							=		rand () ;
				$day4_path2_target				=		DAY4_PATH2.$day4_path2_ran.$day4_path2_complete_name;
				$day4_path2_path					=		",day4_path2='$day4_path2_target'";
				
				$selectCount	=	"SELECT day4_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4_path2'] != '') {
					if(file_exists($row['day4_path2'])) {
						unlink($row['day4_path2']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4_path2_tmp,$day4_path2_target);
			} else {
				$day4_path2_path					=		'';
			}

			if($_FILES['day4_path3']['name'] != '') {
				$day4_path3_name=$_FILES['day4_path3']['name'];
				$day4_path3_size=$_FILES['day4_path3']['size'];
				$day4_path3_type=$_FILES['day4_path3']['type'];
				$day4_path3_tmp=$_FILES['day4_path3']['tmp_name'];
		
				$day4_path3_complete_name		=		str_replace(" ",'',basename($day4_path3_name));
				$day4_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path3_complete_name));
				$day4_path3_ran							=		rand () ;
				$day4_path3_target				=		DAY4_PATH3.$day4_path3_ran.$day4_path3_complete_name;
				$day4_path3_path					=		",day4_path3='$day4_path3_target'";
				
				$selectCount	=	"SELECT day4_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4_path3'] != '') {
					if(file_exists($row['day4_path3'])) {
						unlink($row['day4_path3']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4_path3_tmp,$day4_path3_target);
			} else {
				$day4_path3_path					=		'';
			}

			if($_FILES['day4_path4']['name'] != '') {
				$day4_path4_name=$_FILES['day4_path4']['name'];
				$day4_path4_size=$_FILES['day4_path4']['size'];
				$day4_path4_type=$_FILES['day4_path4']['type'];
				$day4_path4_tmp=$_FILES['day4_path4']['tmp_name'];
		
				$day4_path4_complete_name		=		str_replace(" ",'',basename($day4_path4_name));
				$day4_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path4_complete_name));
				$day4_path4_ran							=		rand () ;
				$day4_path4_target				=		DAY4_PATH4.$day4_path4_ran.$day4_path4_complete_name;
				$day4_path4_path					=		",day4_path4='$day4_path4_target'";
				
				$selectCount	=	"SELECT day4_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4_path4'] != '') {
					if(file_exists($row['day4_path4'])) {
						unlink($row['day4_path4']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4_path4_tmp,$day4_path4_target);
			} else {
				$day4_path4_path					=		'';
			}




			if($_FILES['day4a_path1']['name'] != '') {
				$day4a_path1_name=$_FILES['day4a_path1']['name'];
				$day4a_path1_size=$_FILES['day4a_path1']['size'];
				$day4a_path1_type=$_FILES['day4a_path1']['type'];
				$day4a_path1_tmp=$_FILES['day4a_path1']['tmp_name'];
		
				$day4a_path1_complete_name		=		str_replace(" ",'',basename($day4a_path1_name));
				$day4a_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path1_complete_name));
				$day4a_path1_ran							=		rand () ;
				$day4a_path1_target				=		DAY4A_PATH1.$day4a_path1_ran.$day4a_path1_complete_name;
				$day4a_path1_path					=		",day4a_path1='$day4a_path1_target'";
				
				$selectCount	=	"SELECT day4a_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4a_path1'] != '') {
					if(file_exists($row['day4a_path1'])) {
						unlink($row['day4a_path1']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4a_path1_tmp,$day4a_path1_target);
			} else {
				$day4a_path1_path					=		'';
			}

			if($_FILES['day4a_path2']['name'] != '') {
				$day4a_path2_name=$_FILES['day4a_path2']['name'];
				$day4a_path2_size=$_FILES['day4a_path2']['size'];
				$day4a_path2_type=$_FILES['day4a_path2']['type'];
				$day4a_path2_tmp=$_FILES['day4a_path2']['tmp_name'];
		
				$day4a_path2_complete_name		=		str_replace(" ",'',basename($day4a_path2_name));
				$day4a_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path2_complete_name));
				$day4a_path2_ran							=		rand () ;
				$day4a_path2_target				=		DAY4A_PATH2.$day4a_path2_ran.$day4a_path2_complete_name;
				$day4a_path2_path					=		",day4a_path2='$day4a_path2_target'";
				
				$selectCount	=	"SELECT day4a_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4a_path2'] != '') {
					if(file_exists($row['day4a_path2'])) {
						unlink($row['day4a_path2']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4a_path2_tmp,$day4a_path2_target);
			} else {
				$day4a_path2_path					=		'';
			}

			if($_FILES['day4a_path3']['name'] != '') {
				$day4a_path3_name=$_FILES['day4a_path3']['name'];
				$day4a_path3_size=$_FILES['day4a_path3']['size'];
				$day4a_path3_type=$_FILES['day4a_path3']['type'];
				$day4a_path3_tmp=$_FILES['day4a_path3']['tmp_name'];
		
				$day4a_path3_complete_name		=		str_replace(" ",'',basename($day4a_path3_name));
				$day4a_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path3_complete_name));
				$day4a_path3_ran							=		rand () ;
				$day4a_path3_target				=		DAY4A_PATH3.$day4a_path3_ran.$day4a_path3_complete_name;
				$day4a_path3_path					=		",day4a_path3='$day4a_path3_target'";
				
				$selectCount	=	"SELECT day4a_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4a_path3'] != '') {
					if(file_exists($row['day4a_path3'])) {
						unlink($row['day4a_path3']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4a_path3_tmp,$day4a_path3_target);
			} else {
				$day4a_path3_path					=		'';
			}

			if($_FILES['day4a_path4']['name'] != '') {
				$day4a_path4_name=$_FILES['day4a_path4']['name'];
				$day4a_path4_size=$_FILES['day4a_path4']['size'];
				$day4a_path4_type=$_FILES['day4a_path4']['type'];
				$day4a_path4_tmp=$_FILES['day4a_path4']['tmp_name'];
		
				$day4a_path4_complete_name		=		str_replace(" ",'',basename($day4a_path4_name));
				$day4a_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path4_complete_name));
				$day4a_path4_ran							=		rand () ;
				$day4a_path4_target				=		DAY4A_PATH4.$day4a_path4_ran.$day4a_path4_complete_name;
				$day4a_path4_path					=		",day4a_path4='$day4a_path4_target'";
				
				$selectCount	=	"SELECT day4a_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day4a_path4'] != '') {
					if(file_exists($row['day4a_path4'])) {
						unlink($row['day4a_path4']);
					} else {	
						//echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day4a_path4_tmp,$day4a_path4_target);
			} else {
				$day4a_path4_path					=		'';
			}


			if($_FILES['day5_path1']['name'] != '') {
				$day5_path1_name=$_FILES['day5_path1']['name'];
				$day5_path1_size=$_FILES['day5_path1']['size'];
				$day5_path1_type=$_FILES['day5_path1']['type'];
				$day5_path1_tmp=$_FILES['day5_path1']['tmp_name'];
		
				$day5_path1_complete_name		=		str_replace(" ",'',basename($day5_path1_name));
				$day5_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path1_complete_name));
				$day5_path1_ran							=		rand () ;
				$day5_path1_target				=		DAY5_PATH1.$day5_path1_ran.$day5_path1_complete_name;
				$day5_path1_path					=		",day5_path1='$day5_path1_target'";
				
				$selectCount	=	"SELECT day5_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day5_path1'] != '') {
					if(file_exists($row['day5_path1'])) {
						unlink($row['day5_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day5_path1_tmp,$day5_path1_target);
			} else {
				$day5_path1_path					=		'';
			}

			if($_FILES['day5_path2']['name'] != '') {
				$day5_path2_name=$_FILES['day5_path2']['name'];
				$day5_path2_size=$_FILES['day5_path2']['size'];
				$day5_path2_type=$_FILES['day5_path2']['type'];
				$day5_path2_tmp=$_FILES['day5_path2']['tmp_name'];
		
				$day5_path2_complete_name		=		str_replace(" ",'',basename($day5_path2_name));
				$day5_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path2_complete_name));
				$day5_path2_ran							=		rand () ;
				$day5_path2_target				=		DAY5_PATH2.$day5_path2_ran.$day5_path2_complete_name;
				$day5_path2_path					=		",day5_path2='$day5_path2_target'";
				
				$selectCount	=	"SELECT day5_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day5_path2'] != '') {
					if(file_exists($row['day5_path2'])) {
						unlink($row['day5_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day5_path2_tmp,$day5_path2_target);
			} else {
				$day5_path2_path					=		'';
			}

			if($_FILES['day5_path3']['name'] != '') {
				$day5_path3_name=$_FILES['day5_path3']['name'];
				$day5_path3_size=$_FILES['day5_path3']['size'];
				$day5_path3_type=$_FILES['day5_path3']['type'];
				$day5_path3_tmp=$_FILES['day5_path3']['tmp_name'];
		
				$day5_path3_complete_name		=		str_replace(" ",'',basename($day5_path3_name));
				$day5_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path3_complete_name));
				$day5_path3_ran							=		rand () ;
				$day5_path3_target				=		DAY5_PATH3.$day5_path3_ran.$day5_path3_complete_name;
				$day5_path3_path					=		",day5_path3='$day5_path3_target'";
				
				$selectCount	=	"SELECT day5_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day5_path3'] != '') {
					if(file_exists($row['day5_path3'])) {
						unlink($row['day5_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day5_path3_tmp,$day5_path3_target);
			} else {
				$day5_path3_path					=		'';
			}

			if($_FILES['day5_path4']['name'] != '') {
				$day5_path4_name=$_FILES['day5_path4']['name'];
				$day5_path4_size=$_FILES['day5_path4']['size'];
				$day5_path4_type=$_FILES['day5_path4']['type'];
				$day5_path4_tmp=$_FILES['day5_path4']['tmp_name'];
		
				$day5_path4_complete_name		=		str_replace(" ",'',basename($day5_path4_name));
				$day5_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path4_complete_name));
				$day5_path4_ran							=		rand () ;
				$day5_path4_target				=		DAY5_PATH4.$day5_path4_ran.$day5_path4_complete_name;
				$day5_path4_path					=		",day5_path4='$day5_path4_target'";
				
				$selectCount	=	"SELECT day5_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day5_path4'] != '') {
					if(file_exists($row['day5_path4'])) {
						unlink($row['day5_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day5_path4_tmp,$day5_path4_target);
			} else {
				$day5_path4_path					=		'';
			}

			if($_FILES['day6_path1']['name'] != '') {
				$day6_path1_name=$_FILES['day6_path1']['name'];
				$day6_path1_size=$_FILES['day6_path1']['size'];
				$day6_path1_type=$_FILES['day6_path1']['type'];
				$day6_path1_tmp=$_FILES['day6_path1']['tmp_name'];
		
				$day6_path1_complete_name		=		str_replace(" ",'',basename($day6_path1_name));
				$day6_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path1_complete_name));
				$day6_path1_ran							=		rand () ;
				$day6_path1_target				=		DAY6_PATH1.$day6_path1_ran.$day6_path1_complete_name;
				$day6_path1_path					=		",day6_path1='$day6_path1_target'";
				
				$selectCount	=	"SELECT day6_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day6_path1'] != '') {
					if(file_exists($row['day6_path1'])) {
						unlink($row['day6_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day6_path1_tmp,$day6_path1_target);
			} else {
				$day6_path1_path					=		'';
			}

			if($_FILES['day6_path2']['name'] != '') {
				$day6_path2_name=$_FILES['day6_path2']['name'];
				$day6_path2_size=$_FILES['day6_path2']['size'];
				$day6_path2_type=$_FILES['day6_path2']['type'];
				$day6_path2_tmp=$_FILES['day6_path2']['tmp_name'];
		
				$day6_path2_complete_name		=		str_replace(" ",'',basename($day6_path2_name));
				$day6_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path2_complete_name));
				$day6_path2_ran							=		rand () ;
				$day6_path2_target				=		DAY6_PATH2.$day6_path2_ran.$day6_path2_complete_name;
				$day6_path2_path					=		",day6_path2='$day6_path2_target'";
				
				$selectCount	=	"SELECT day6_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day6_path2'] != '') {
					if(file_exists($row['day6_path2'])) {
						unlink($row['day6_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day6_path2_tmp,$day6_path2_target);
			} else {
				$day6_path2_path					=		'';
			}

			if($_FILES['day6_path3']['name'] != '') {
				$day6_path3_name=$_FILES['day6_path3']['name'];
				$day6_path3_size=$_FILES['day6_path3']['size'];
				$day6_path3_type=$_FILES['day6_path3']['type'];
				$day6_path3_tmp=$_FILES['day6_path3']['tmp_name'];
		
				$day6_path3_complete_name		=		str_replace(" ",'',basename($day6_path3_name));
				$day6_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path3_complete_name));
				$day6_path3_ran							=		rand () ;
				$day6_path3_target				=		DAY6_PATH3.$day6_path3_ran.$day6_path3_complete_name;
				$day6_path3_path					=		",day6_path3='$day6_path3_target'";
				
				$selectCount	=	"SELECT day6_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day6_path3'] != '') {
					if(file_exists($row['day6_path3'])) {
						unlink($row['day6_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day6_path3_tmp,$day6_path3_target);
			} else {
				$day6_path3_path					=		'';
			}

			if($_FILES['day6_path4']['name'] != '') {
				$day6_path4_name=$_FILES['day6_path4']['name'];
				$day6_path4_size=$_FILES['day6_path4']['size'];
				$day6_path4_type=$_FILES['day6_path4']['type'];
				$day6_path4_tmp=$_FILES['day6_path4']['tmp_name'];
		
				$day6_path4_complete_name		=		str_replace(" ",'',basename($day6_path4_name));
				$day6_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path4_complete_name));
				$day6_path4_ran							=		rand () ;
				$day6_path4_target				=		DAY6_PATH4.$day6_path4_ran.$day6_path4_complete_name;
				$day6_path4_path					=		",day6_path4='$day6_path4_target'";
				
				$selectCount	=	"SELECT day6_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day6_path4'] != '') {
					if(file_exists($row['day6_path4'])) {
						unlink($row['day6_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day6_path4_tmp,$day6_path4_target);
			} else {
				$day6_path4_path					=		'';
			}

			if($_FILES['day7_path1']['name'] != '') {
				$day7_path1_name=$_FILES['day7_path1']['name'];
				$day7_path1_size=$_FILES['day7_path1']['size'];
				$day7_path1_type=$_FILES['day7_path1']['type'];
				$day7_path1_tmp=$_FILES['day7_path1']['tmp_name'];
		
				$day7_path1_complete_name		=		str_replace(" ",'',basename($day7_path1_name));
				$day7_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path1_complete_name));
				$day7_path1_ran							=		rand () ;
				$day7_path1_target				=		DAY7_PATH1.$day7_path1_ran.$day7_path1_complete_name;
				$day7_path1_path					=		",day7_path1='$day7_path1_target'";
				
				$selectCount	=	"SELECT day7_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day7_path1'] != '') {
					if(file_exists($row['day7_path1'])) {
						unlink($row['day7_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day7_path1_tmp,$day7_path1_target);
			} else {
				$day7_path1_path					=		'';
			}

			if($_FILES['day7_path2']['name'] != '') {
				$day7_path2_name=$_FILES['day7_path2']['name'];
				$day7_path2_size=$_FILES['day7_path2']['size'];
				$day7_path2_type=$_FILES['day7_path2']['type'];
				$day7_path2_tmp=$_FILES['day7_path2']['tmp_name'];
		
				$day7_path2_complete_name		=		str_replace(" ",'',basename($day7_path2_name));
				$day7_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path2_complete_name));
				$day7_path2_ran							=		rand () ;
				$day7_path2_target				=		DAY7_PATH2.$day7_path2_ran.$day7_path2_complete_name;
				$day7_path2_path					=		",day7_path2='$day7_path2_target'";
				
				$selectCount	=	"SELECT day7_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day7_path2'] != '') {
					if(file_exists($row['day7_path2'])) {
						unlink($row['day7_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day7_path2_tmp,$day7_path2_target);
			} else {
				$day7_path2_path					=		'';
			}

			if($_FILES['day7_path3']['name'] != '') {
				$day7_path3_name=$_FILES['day7_path3']['name'];
				$day7_path3_size=$_FILES['day7_path3']['size'];
				$day7_path3_type=$_FILES['day7_path3']['type'];
				$day7_path3_tmp=$_FILES['day7_path3']['tmp_name'];
		
				$day7_path3_complete_name		=		str_replace(" ",'',basename($day7_path3_name));
				$day7_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path3_complete_name));
				$day7_path3_ran							=		rand () ;
				$day7_path3_target				=		DAY7_PATH3.$day7_path3_ran.$day7_path3_complete_name;
				$day7_path3_path					=		",day7_path3='$day7_path3_target'";
				
				$selectCount	=	"SELECT day7_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day7_path3'] != '') {
					if(file_exists($row['day7_path3'])) {
						unlink($row['day7_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day7_path3_tmp,$day7_path3_target);
			} else {
				$day7_path3_path					=		'';
			}

			if($_FILES['day7_path4']['name'] != '') {
				$day7_path4_name=$_FILES['day7_path4']['name'];
				$day7_path4_size=$_FILES['day7_path4']['size'];
				$day7_path4_type=$_FILES['day7_path4']['type'];
				$day7_path4_tmp=$_FILES['day7_path4']['tmp_name'];
		
				$day7_path4_complete_name		=		str_replace(" ",'',basename($day7_path4_name));
				$day7_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path4_complete_name));
				$day7_path4_ran							=		rand () ;
				$day7_path4_target				=		DAY7_PATH4.$day7_path4_ran.$day7_path4_complete_name;
				$day7_path4_path					=		",day7_path4='$day7_path4_target'";
				
				$selectCount	=	"SELECT day7_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day7_path4'] != '') {
					if(file_exists($row['day7_path4'])) {
						unlink($row['day7_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day7_path4_tmp,$day7_path4_target);
			} else {
				$day7_path4_path					=		'';
			}

			if($_FILES['day8_path1']['name'] != '') {
				$day8_path1_name=$_FILES['day8_path1']['name'];
				$day8_path1_size=$_FILES['day8_path1']['size'];
				$day8_path1_type=$_FILES['day8_path1']['type'];
				$day8_path1_tmp=$_FILES['day8_path1']['tmp_name'];
		
				$day8_path1_complete_name		=		str_replace(" ",'',basename($day8_path1_name));
				$day8_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path1_complete_name));
				$day8_path1_ran							=		rand () ;
				$day8_path1_target				=		DAY8_PATH1.$day8_path1_ran.$day8_path1_complete_name;
				$day8_path1_path					=		",day8_path1='$day8_path1_target'";
				
				$selectCount	=	"SELECT day8_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day8_path1'] != '') {
					if(file_exists($row['day8_path1'])) {
						unlink($row['day8_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day8_path1_tmp,$day8_path1_target);
			} else {
				$day8_path1_path					=		'';
			}

			if($_FILES['day8_path2']['name'] != '') {
				$day8_path2_name=$_FILES['day8_path2']['name'];
				$day8_path2_size=$_FILES['day8_path2']['size'];
				$day8_path2_type=$_FILES['day8_path2']['type'];
				$day8_path2_tmp=$_FILES['day8_path2']['tmp_name'];
		
				$day8_path2_complete_name		=		str_replace(" ",'',basename($day8_path2_name));
				$day8_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path2_complete_name));
				$day8_path2_ran							=		rand () ;
				$day8_path2_target				=		DAY8_PATH2.$day8_path2_ran.$day8_path2_complete_name;
				$day8_path2_path					=		",day8_path2='$day8_path2_target'";
				
				$selectCount	=	"SELECT day8_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day8_path2'] != '') {
					if(file_exists($row['day8_path2'])) {
						unlink($row['day8_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day8_path2_tmp,$day8_path2_target);
			} else {
				$day8_path2_path					=		'';
			}

			if($_FILES['day8_path3']['name'] != '') {
				$day8_path3_name=$_FILES['day8_path3']['name'];
				$day8_path3_size=$_FILES['day8_path3']['size'];
				$day8_path3_type=$_FILES['day8_path3']['type'];
				$day8_path3_tmp=$_FILES['day8_path3']['tmp_name'];
		
				$day8_path3_complete_name		=		str_replace(" ",'',basename($day8_path3_name));
				$day8_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path3_complete_name));
				$day8_path3_ran							=		rand () ;
				$day8_path3_target				=		DAY8_PATH3.$day8_path3_ran.$day8_path3_complete_name;
				$day8_path3_path					=		",day8_path3='$day8_path3_target'";
				
				$selectCount	=	"SELECT day8_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day8_path3'] != '') {
					if(file_exists($row['day8_path3'])) {
						unlink($row['day8_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day8_path3_tmp,$day8_path3_target);
			} else {
				$day8_path3_path					=		'';
			}

			if($_FILES['day8_path4']['name'] != '') {
				$day8_path4_name=$_FILES['day8_path4']['name'];
				$day8_path4_size=$_FILES['day8_path4']['size'];
				$day8_path4_type=$_FILES['day8_path4']['type'];
				$day8_path4_tmp=$_FILES['day8_path4']['tmp_name'];
		
				$day8_path4_complete_name		=		str_replace(" ",'',basename($day8_path4_name));
				$day8_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path4_complete_name));
				$day8_path4_ran							=		rand () ;
				$day8_path4_target				=		DAY8_PATH4.$day8_path4_ran.$day8_path4_complete_name;
				$day8_path4_path					=		",day8_path4='$day8_path4_target'";
				
				$selectCount	=	"SELECT day8_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day8_path4'] != '') {
					if(file_exists($row['day8_path4'])) {
						unlink($row['day8_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day8_path4_tmp,$day8_path4_target);
			} else {
				$day8_path4_path					=		'';
			}

			if($_FILES['day9_path1']['name'] != '') {
				$day9_path1_name=$_FILES['day9_path1']['name'];
				$day9_path1_size=$_FILES['day9_path1']['size'];
				$day9_path1_type=$_FILES['day9_path1']['type'];
				$day9_path1_tmp=$_FILES['day9_path1']['tmp_name'];
		
				$day9_path1_complete_name		=		str_replace(" ",'',basename($day9_path1_name));
				$day9_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path1_complete_name));
				$day9_path1_ran							=		rand () ;
				$day9_path1_target				=		DAY9_PATH1.$day9_path1_ran.$day9_path1_complete_name;
				$day9_path1_path					=		",day9_path1='$day9_path1_target'";
				
				$selectCount	=	"SELECT day9_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day9_path1'] != '') {
					if(file_exists($row['day9_path1'])) {
						unlink($row['day9_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day9_path1_tmp,$day9_path1_target);
			} else {
				$day9_path1_path					=		'';
			}

			if($_FILES['day9_path2']['name'] != '') {
				$day9_path2_name=$_FILES['day9_path2']['name'];
				$day9_path2_size=$_FILES['day9_path2']['size'];
				$day9_path2_type=$_FILES['day9_path2']['type'];
				$day9_path2_tmp=$_FILES['day9_path2']['tmp_name'];
		
				$day9_path2_complete_name		=		str_replace(" ",'',basename($day9_path2_name));
				$day9_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path2_complete_name));
				$day9_path2_ran							=		rand () ;
				$day9_path2_target				=		DAY9_PATH2.$day9_path2_ran.$day9_path2_complete_name;
				$day9_path2_path					=		",day9_path2='$day9_path2_target'";
				
				$selectCount	=	"SELECT day9_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day9_path2'] != '') {
					if(file_exists($row['day9_path2'])) {
						unlink($row['day9_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day9_path2_tmp,$day9_path2_target);
			} else {
				$day9_path2_path					=		'';
			}

			if($_FILES['day9_path3']['name'] != '') {
				$day9_path3_name=$_FILES['day9_path3']['name'];
				$day9_path3_size=$_FILES['day9_path3']['size'];
				$day9_path3_type=$_FILES['day9_path3']['type'];
				$day9_path3_tmp=$_FILES['day9_path3']['tmp_name'];
		
				$day9_path3_complete_name		=		str_replace(" ",'',basename($day9_path3_name));
				$day9_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path3_complete_name));
				$day9_path3_ran							=		rand () ;
				$day9_path3_target				=		DAY9_PATH3.$day9_path3_ran.$day9_path3_complete_name;
				$day9_path3_path					=		",day9_path3='$day9_path3_target'";
				
				$selectCount	=	"SELECT day9_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day9_path3'] != '') {
					if(file_exists($row['day9_path3'])) {
						unlink($row['day9_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day9_path3_tmp,$day9_path3_target);
			} else {
				$day9_path3_path					=		'';
			}

			if($_FILES['day9_path4']['name'] != '') {
				$day9_path4_name=$_FILES['day9_path4']['name'];
				$day9_path4_size=$_FILES['day9_path4']['size'];
				$day9_path4_type=$_FILES['day9_path4']['type'];
				$day9_path4_tmp=$_FILES['day9_path4']['tmp_name'];
		
				$day9_path4_complete_name		=		str_replace(" ",'',basename($day9_path4_name));
				$day9_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path4_complete_name));
				$day9_path4_ran							=		rand () ;
				$day9_path4_target				=		DAY9_PATH4.$day9_path4_ran.$day9_path4_complete_name;
				$day9_path4_path					=		",day9_path4='$day9_path4_target'";
				
				$selectCount	=	"SELECT day9_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day9_path4'] != '') {
					if(file_exists($row['day9_path4'])) {
						unlink($row['day9_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day9_path4_tmp,$day9_path4_target);
			} else {
				$day9_path4_path					=		'';
			}

			if($_FILES['day10_path1']['name'] != '') {
				$day10_path1_name=$_FILES['day10_path1']['name'];
				$day10_path1_size=$_FILES['day10_path1']['size'];
				$day10_path1_type=$_FILES['day10_path1']['type'];
				$day10_path1_tmp=$_FILES['day10_path1']['tmp_name'];
		
				$day10_path1_complete_name		=		str_replace(" ",'',basename($day10_path1_name));
				$day10_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path1_complete_name));
				$day10_path1_ran							=		rand () ;
				$day10_path1_target				=		DAY10_PATH1.$day10_path1_ran.$day10_path1_complete_name;
				$day10_path1_path					=		",day10_path1='$day10_path1_target'";
				
				$selectCount	=	"SELECT day10_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day10_path1'] != '') {
					if(file_exists($row['day10_path1'])) {
						unlink($row['day10_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day10_path1_tmp,$day10_path1_target);
			} else {
				$day10_path1_path					=		'';
			}

			if($_FILES['day10_path2']['name'] != '') {
				$day10_path2_name=$_FILES['day10_path2']['name'];
				$day10_path2_size=$_FILES['day10_path2']['size'];
				$day10_path2_type=$_FILES['day10_path2']['type'];
				$day10_path2_tmp=$_FILES['day10_path2']['tmp_name'];
		
				$day10_path2_complete_name		=		str_replace(" ",'',basename($day10_path2_name));
				$day10_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path2_complete_name));
				$day10_path2_ran							=		rand () ;
				$day10_path2_target				=		DAY10_PATH2.$day10_path2_ran.$day10_path2_complete_name;
				$day10_path2_path					=		",day10_path2='$day10_path2_target'";
				
				$selectCount	=	"SELECT day10_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day10_path2'] != '') {
					if(file_exists($row['day10_path2'])) {
						unlink($row['day10_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day10_path2_tmp,$day10_path2_target);
			} else {
				$day10_path2_path					=		'';
			}

			if($_FILES['day10_path3']['name'] != '') {
				$day10_path3_name=$_FILES['day10_path3']['name'];
				$day10_path3_size=$_FILES['day10_path3']['size'];
				$day10_path3_type=$_FILES['day10_path3']['type'];
				$day10_path3_tmp=$_FILES['day10_path3']['tmp_name'];
		
				$day10_path3_complete_name		=		str_replace(" ",'',basename($day10_path3_name));
				$day10_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path3_complete_name));
				$day10_path3_ran							=		rand () ;
				$day10_path3_target				=		DAY10_PATH3.$day10_path3_ran.$day10_path3_complete_name;
				$day10_path3_path					=		",day10_path3='$day10_path3_target'";
				
				$selectCount	=	"SELECT day10_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day10_path3'] != '') {
					if(file_exists($row['day10_path3'])) {
						unlink($row['day10_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day10_path3_tmp,$day10_path3_target);
			} else {
				$day10_path3_path					=		'';
			}

			if($_FILES['day10_path4']['name'] != '') {
				$day10_path4_name=$_FILES['day10_path4']['name'];
				$day10_path4_size=$_FILES['day10_path4']['size'];
				$day10_path4_type=$_FILES['day10_path4']['type'];
				$day10_path4_tmp=$_FILES['day10_path4']['tmp_name'];
		
				$day10_path4_complete_name		=		str_replace(" ",'',basename($day10_path4_name));
				$day10_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path4_complete_name));
				$day10_path4_ran							=		rand () ;
				$day10_path4_target				=		DAY10_PATH4.$day10_path4_ran.$day10_path4_complete_name;
				$day10_path4_path					=		",day10_path4='$day10_path4_target'";
				
				$selectCount	=	"SELECT day10_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day10_path4'] != '') {
					if(file_exists($row['day10_path4'])) {
						unlink($row['day10_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day10_path4_tmp,$day10_path4_target);
			} else {
				$day10_path4_path					=		'';
			}

			if($_FILES['day11_path1']['name'] != '') {
				$day11_path1_name=$_FILES['day11_path1']['name'];
				$day11_path1_size=$_FILES['day11_path1']['size'];
				$day11_path1_type=$_FILES['day11_path1']['type'];
				$day11_path1_tmp=$_FILES['day11_path1']['tmp_name'];
		
				$day11_path1_complete_name		=		str_replace(" ",'',basename($day11_path1_name));
				$day11_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path1_complete_name));
				$day11_path1_ran							=		rand () ;
				$day11_path1_target				=		DAY11_PATH1.$day11_path1_ran.$day11_path1_complete_name;
				$day11_path1_path					=		",day11_path1='$day11_path1_target'";
				
				$selectCount	=	"SELECT day11_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day11_path1'] != '') {
					if(file_exists($row['day11_path1'])) {
						unlink($row['day11_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day11_path1_tmp,$day11_path1_target);
			} else {
				$day11_path1_path					=		'';
			}

			if($_FILES['day11_path2']['name'] != '') {
				$day11_path2_name=$_FILES['day11_path2']['name'];
				$day11_path2_size=$_FILES['day11_path2']['size'];
				$day11_path2_type=$_FILES['day11_path2']['type'];
				$day11_path2_tmp=$_FILES['day11_path2']['tmp_name'];
		
				$day11_path2_complete_name		=		str_replace(" ",'',basename($day11_path2_name));
				$day11_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path2_complete_name));
				$day11_path2_ran							=		rand () ;
				$day11_path2_target				=		DAY11_PATH2.$day11_path2_ran.$day11_path2_complete_name;
				$day11_path2_path					=		",day11_path2='$day11_path2_target'";
				
				$selectCount	=	"SELECT day11_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day11_path2'] != '') {
					if(file_exists($row['day11_path2'])) {
						unlink($row['day11_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day11_path2_tmp,$day11_path2_target);
			} else {
				$day11_path2_path					=		'';
			}

			if($_FILES['day11_path3']['name'] != '') {
				$day11_path3_name=$_FILES['day11_path3']['name'];
				$day11_path3_size=$_FILES['day11_path3']['size'];
				$day11_path3_type=$_FILES['day11_path3']['type'];
				$day11_path3_tmp=$_FILES['day11_path3']['tmp_name'];
		
				$day11_path3_complete_name		=		str_replace(" ",'',basename($day11_path3_name));
				$day11_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path3_complete_name));
				$day11_path3_ran							=		rand () ;
				$day11_path3_target				=		DAY11_PATH3.$day11_path3_ran.$day11_path3_complete_name;
				$day11_path3_path					=		",day11_path3='$day11_path3_target'";
				
				$selectCount	=	"SELECT day11_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day11_path3'] != '') {
					if(file_exists($row['day11_path3'])) {
						unlink($row['day11_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day11_path3_tmp,$day11_path3_target);
			} else {
				$day11_path3_path					=		'';
			}

			if($_FILES['day11_path4']['name'] != '') {
				$day11_path4_name=$_FILES['day11_path4']['name'];
				$day11_path4_size=$_FILES['day11_path4']['size'];
				$day11_path4_type=$_FILES['day11_path4']['type'];
				$day11_path4_tmp=$_FILES['day11_path4']['tmp_name'];
		
				$day11_path4_complete_name		=		str_replace(" ",'',basename($day11_path4_name));
				$day11_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path4_complete_name));
				$day11_path4_ran							=		rand () ;
				$day11_path4_target				=		DAY11_PATH4.$day11_path4_ran.$day11_path4_complete_name;
				$day11_path4_path					=		",day11_path4='$day11_path4_target'";
				
				$selectCount	=	"SELECT day11_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day11_path4'] != '') {
					if(file_exists($row['day11_path4'])) {
						unlink($row['day11_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day11_path4_tmp,$day11_path4_target);
			} else {
				$day11_path4_path					=		'';
			}
                        
                        
			if($_FILES['day13_path1']['name'] != '') {
				$day13_path1_name=$_FILES['day13_path1']['name'];
				$day13_path1_size=$_FILES['day13_path1']['size'];
				$day13_path1_type=$_FILES['day13_path1']['type'];
				$day13_path1_tmp=$_FILES['day13_path1']['tmp_name'];
		
				$day13_path1_complete_name		=		str_replace(" ",'',basename($day13_path1_name));
				$day13_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path1_complete_name));
				$day13_path1_ran							=		rand () ;
				$day13_path1_target				=		DAY13_PATH1.$day13_path1_ran.$day13_path1_complete_name;
				$day13_path1_path					=		",day13_path1='$day13_path1_target'";
				
				$selectCount	=	"SELECT day13_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day13_path1'] != '') {
					if(file_exists($row['day13_path1'])) {
						unlink($row['day13_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day13_path1_tmp,$day13_path1_target);
			} else {
				$day13_path1_path					=		'';
			}

			if($_FILES['day13_path2']['name'] != '') {
				$day13_path2_name=$_FILES['day13_path2']['name'];
				$day13_path2_size=$_FILES['day13_path2']['size'];
				$day13_path2_type=$_FILES['day13_path2']['type'];
				$day13_path2_tmp=$_FILES['day13_path2']['tmp_name'];
		
				$day13_path2_complete_name		=		str_replace(" ",'',basename($day13_path2_name));
				$day13_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path2_complete_name));
				$day13_path2_ran							=		rand () ;
				$day13_path2_target				=		DAY13_PATH2.$day13_path2_ran.$day13_path2_complete_name;
				$day13_path2_path					=		",day13_path2='$day13_path2_target'";
				
				$selectCount	=	"SELECT day13_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day13_path2'] != '') {
					if(file_exists($row['day13_path2'])) {
						unlink($row['day13_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day13_path2_tmp,$day13_path2_target);
			} else {
				$day13_path2_path					=		'';
			}

			if($_FILES['day13_path3']['name'] != '') {
				$day13_path3_name=$_FILES['day13_path3']['name'];
				$day13_path3_size=$_FILES['day13_path3']['size'];
				$day13_path3_type=$_FILES['day13_path3']['type'];
				$day13_path3_tmp=$_FILES['day13_path3']['tmp_name'];
		
				$day13_path3_complete_name		=		str_replace(" ",'',basename($day13_path3_name));
				$day13_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path3_complete_name));
				$day13_path3_ran							=		rand () ;
				$day13_path3_target				=		DAY13_PATH3.$day13_path3_ran.$day13_path3_complete_name;
				$day13_path3_path					=		",day13_path3='$day13_path3_target'";
				
				$selectCount	=	"SELECT day13_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day13_path3'] != '') {
					if(file_exists($row['day13_path3'])) {
						unlink($row['day13_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day13_path3_tmp,$day13_path3_target);
			} else {
				$day13_path3_path					=		'';
			}

			if($_FILES['day13_path4']['name'] != '') {
				$day13_path4_name=$_FILES['day13_path4']['name'];
				$day13_path4_size=$_FILES['day13_path4']['size'];
				$day13_path4_type=$_FILES['day13_path4']['type'];
				$day13_path4_tmp=$_FILES['day13_path4']['tmp_name'];
		
				$day13_path4_complete_name		=		str_replace(" ",'',basename($day13_path4_name));
				$day13_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path4_complete_name));
				$day13_path4_ran							=		rand () ;
				$day13_path4_target				=		DAY13_PATH4.$day13_path4_ran.$day13_path4_complete_name;
				$day13_path4_path					=		",day13_path4='$day13_path4_target'";
				
				$selectCount	=	"SELECT day13_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day13_path4'] != '') {
					if(file_exists($row['day13_path4'])) {
						unlink($row['day13_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day13_path4_tmp,$day13_path4_target);
			} else {
				$day13_path4_path					=		'';
			}
                        
                        if($_FILES['day14_path1']['name'] != '') {
				$day14_path1_name=$_FILES['day14_path1']['name'];
				$day14_path1_size=$_FILES['day14_path1']['size'];
				$day14_path1_type=$_FILES['day14_path1']['type'];
				$day14_path1_tmp=$_FILES['day14_path1']['tmp_name'];
		
				$day14_path1_complete_name		=		str_replace(" ",'',basename($day14_path1_name));
				$day14_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path1_complete_name));
				$day14_path1_ran							=		rand () ;
				$day14_path1_target				=		DAY14_PATH1.$day14_path1_ran.$day14_path1_complete_name;
				$day14_path1_path					=		",day14_path1='$day14_path1_target'";
				
				$selectCount	=	"SELECT day14_path1 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day14_path1'] != '') {
					if(file_exists($row['day14_path1'])) {
						unlink($row['day14_path1']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day14_path1_tmp,$day14_path1_target);
			} else {
				$day14_path1_path					=		'';
			}

			if($_FILES['day14_path2']['name'] != '') {
				$day14_path2_name=$_FILES['day14_path2']['name'];
				$day14_path2_size=$_FILES['day14_path2']['size'];
				$day14_path2_type=$_FILES['day14_path2']['type'];
				$day14_path2_tmp=$_FILES['day14_path2']['tmp_name'];
		
				$day14_path2_complete_name		=		str_replace(" ",'',basename($day14_path2_name));
				$day14_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path2_complete_name));
				$day14_path2_ran							=		rand () ;
				$day14_path2_target				=		DAY14_PATH2.$day14_path2_ran.$day14_path2_complete_name;
				$day14_path2_path					=		",day14_path2='$day14_path2_target'";
				
				$selectCount	=	"SELECT day14_path2 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day14_path2'] != '') {
					if(file_exists($row['day14_path2'])) {
						unlink($row['day14_path2']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day14_path2_tmp,$day14_path2_target);
			} else {
				$day14_path2_path					=		'';
			}

			if($_FILES['day14_path3']['name'] != '') {
				$day14_path3_name=$_FILES['day14_path3']['name'];
				$day14_path3_size=$_FILES['day14_path3']['size'];
				$day14_path3_type=$_FILES['day14_path3']['type'];
				$day14_path3_tmp=$_FILES['day14_path3']['tmp_name'];
		
				$day14_path3_complete_name		=		str_replace(" ",'',basename($day14_path3_name));
				$day14_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path3_complete_name));
				$day14_path3_ran							=		rand () ;
				$day14_path3_target				=		DAY14_PATH3.$day14_path3_ran.$day14_path3_complete_name;
				$day14_path3_path					=		",day14_path3='$day14_path3_target'";
				
				$selectCount	=	"SELECT day14_path3 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day14_path3'] != '') {
					if(file_exists($row['day14_path3'])) {
						unlink($row['day14_path3']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day14_path3_tmp,$day14_path3_target);
			} else {
				$day14_path3_path					=		'';
			}

			if($_FILES['day14_path4']['name'] != '') {
				$day14_path4_name=$_FILES['day14_path4']['name'];
				$day14_path4_size=$_FILES['day14_path4']['size'];
				$day14_path4_type=$_FILES['day14_path4']['type'];
				$day14_path4_tmp=$_FILES['day14_path4']['tmp_name'];
		
				$day14_path4_complete_name		=		str_replace(" ",'',basename($day14_path4_name));
				$day14_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path4_complete_name));
				$day14_path4_ran							=		rand () ;
				$day14_path4_target				=		DAY14_PATH4.$day14_path4_ran.$day14_path4_complete_name;
				$day14_path4_path					=		",day14_path4='$day14_path4_target'";
				
				$selectCount	=	"SELECT day14_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult	=	mysql_query($selectCount) or die (mysql_error());
				$num			=	mysql_num_rows($selectResult);	
				$row			=	mysql_fetch_array($selectResult);
				
				if($row['day14_path4'] != '') {
					if(file_exists($row['day14_path4'])) {
						unlink($row['day14_path4']);
					} else {	
						echo "not deleted"; exit(0);
					}
				}

				move_uploaded_file($day14_path4_tmp,$day14_path4_target);
			} else {
				$day14_path4_path					=		'';
			}
                        
			$queryUpdate	=	"UPDATE ".TABLE_DAY." SET 
			sri_id='$sri_id',day_name='$day_name',day1_title='$day1_title',day2_title='$day2_title',day2_place='$day2_place',day2_desc='$day2_desc',day2_stay='$day2_stay',day3_title='$day3_title',day3_place='$day3_place',day3_desc='$day3_desc',day3_stay='$day3_stay',day4_title='$day4_title',day4_place='$day4_place',day4_desc='$day4_desc',day4_stay='$day4_stay',day4a_title='$day4a_title',day4a_place='$day4a_place',day4a_desc='$day4a_desc',day5_title='$day5_title',day5_place='$day5_place',day5_desc='$day5_desc',day5_stay='$day5_stay',day6_title='$day6_title',day6_place='$day6_place',day6_desc='$day6_desc',day6_stay='$day6_stay',day7_title='$day7_title',day7_place='$day7_place',day7_desc='$day7_desc',day7_stay='$day7_stay',day8_title='$day8_title',day8_place='$day8_place',day8_desc='$day8_desc',day8_stay='$day8_stay',day9_title='$day9_title',day9_place='$day9_place',day9_desc='$day9_desc',day9_stay='$day9_stay',day10_title='$day10_title',day10_place='$day10_place',day10_desc='$day10_desc',day10_stay='$day10_stay',day11_title='$day11_title',day11_place='$day11_place',day11_desc='$day11_desc',day11_stay='$day11_stay',day13_title='$day13_title',day13_place='$day13_place',day13_desc='$day13_desc',day13_stay='$day13_stay',day14_title='$day14_title',day14_place='$day14_place',day14_desc='$day14_desc',day14_stay='$day14_stay',day12_title='$day12_title',price_include='$price_include',price_notinclude='$price_notinclude',day_status='$day_status',day_updatedDate=NOW()".$day2_path1_path.$day2_path2_path.$day2_path3_path.$day2_path4_path.$day3_path1_path.$day3_path2_path.$day3_path3_path.$day3_path4_path.$day4_path1_path.$day4_path2_path.$day4_path3_path.$day4_path4_path.$day4a_path1_path.$day4a_path2_path.$day4a_path3_path.$day4a_path4_path.$day5_path1_path.$day5_path2_path.$day5_path3_path.$day5_path4_path.$day6_path1_path.$day6_path2_path.$day6_path3_path.$day6_path4_path.$day7_path1_path.$day7_path2_path.$day7_path3_path.$day7_path4_path.$day8_path1_path.$day8_path2_path.$day8_path3_path.$day8_path4_path.$day9_path1_path.$day9_path2_path.$day9_path3_path.$day9_path4_path.$day10_path1_path.$day10_path2_path.$day10_path3_path.$day10_path4_path.$day11_path1_path.$day11_path2_path.$day11_path3_path.$day11_path4_path.$day13_path1_path.$day13_path2_path.$day13_path3_path.$day13_path4_path.$day14_path1_path.$day14_path2_path.$day14_path3_path.$day14_path4_path." WHERE day_id='$day_id'";			
		
			$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());

			if($resultUpdate) {
				$msg	=	"Datas updated successfully";
			}
			else {
				$$msg	=	"Datas are not inserted";
			}
		}
		else if($_POST['action'] == 'new') {
                    
			$selectCount	=	"SELECT * from ".TABLE_DAY." where day_id='$day_id'";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			$row			=	mysql_fetch_array($selectResult);


			if($_FILES['day2_path1']['name'] != '') {
				$day2_path1_name=$_FILES['day2_path1']['name'];
				$day2_path1_size=$_FILES['day2_path1']['size'];
				$day2_path1_type=$_FILES['day2_path1']['type'];
				$day2_path1_tmp=$_FILES['day2_path1']['tmp_name'];

				$day2_path1_complete_name		=		str_replace(" ",'',basename($day2_path1_name));
				$day2_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path1_complete_name));
				$ran						=		rand () ;
				$day2_path1_target				=		DAY2_PATH1.$ran.$day2_path1_complete_name;
				move_uploaded_file($day2_path1_tmp,$day2_path1_target);
			} else {
                            $day2_path1_target				=       '';
                        }

			if($_FILES['day2_path2']['name'] != '') {
				$day2_path2_name=$_FILES['day2_path2']['name'];
				$day2_path2_size=$_FILES['day2_path2']['size'];
				$day2_path2_type=$_FILES['day2_path2']['type'];
				$day2_path2_tmp=$_FILES['day2_path2']['tmp_name'];

				$day2_path2_complete_name		=		str_replace(" ",'',basename($day2_path2_name));
				$day2_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path2_complete_name));
				$ran						=		rand () ;
				$day2_path2_target				=		DAY2_PATH2.$ran.$day2_path2_complete_name;
				move_uploaded_file($day2_path2_tmp,$day2_path2_target);
			} else {
                            $day2_path2_target				=       '';
                        }

			if($_FILES['day2_path3']['name'] != '') {
				$day2_path3_name=$_FILES['day2_path3']['name'];
				$day2_path3_size=$_FILES['day2_path3']['size'];
				$day2_path3_type=$_FILES['day2_path3']['type'];
				$day2_path3_tmp=$_FILES['day2_path3']['tmp_name'];

				$day2_path3_complete_name		=		str_replace(" ",'',basename($day2_path3_name));
				$day2_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path3_complete_name));
				$ran						=		rand () ;
				$day2_path3_target				=		DAY2_PATH3.$ran.$day2_path3_complete_name;
				move_uploaded_file($day2_path3_tmp,$day2_path3_target);
			} else {
                            $day2_path3_target				=       '';
                        }

			if($_FILES['day2_path4']['name'] != '') {
				$day2_path4_name=$_FILES['day2_path4']['name'];
				$day2_path4_size=$_FILES['day2_path4']['size'];
				$day2_path4_type=$_FILES['day2_path4']['type'];
				$day2_path4_tmp=$_FILES['day2_path4']['tmp_name'];

				$day2_path4_complete_name		=		str_replace(" ",'',basename($day2_path4_name));
				$day2_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day2_path4_complete_name));
				$ran						=		rand () ;
				$day2_path4_target				=		DAY2_PATH4.$ran.$day2_path4_complete_name;
				move_uploaded_file($day2_path4_tmp,$day2_path4_target);
			} else {
                            $day2_path4_target				=       '';
                        }


			if($_FILES['day3_path1']['name'] != '') {
				$day3_path1_name=$_FILES['day3_path1']['name'];
				$day3_path1_size=$_FILES['day3_path1']['size'];
				$day3_path1_type=$_FILES['day3_path1']['type'];
				$day3_path1_tmp=$_FILES['day3_path1']['tmp_name'];

				$day3_path1_complete_name		=		str_replace(" ",'',basename($day3_path1_name));
				$day3_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path1_complete_name));
				$ran						=		rand () ;
				$day3_path1_target				=		DAY3_PATH1.$ran.$day3_path1_complete_name;
				move_uploaded_file($day3_path1_tmp,$day3_path1_target);
			} else {
                            $day3_path1_target				=       '';
                        }

			if($_FILES['day3_path2']['name'] != '') {
				$day3_path2_name=$_FILES['day3_path2']['name'];
				$day3_path2_size=$_FILES['day3_path2']['size'];
				$day3_path2_type=$_FILES['day3_path2']['type'];
				$day3_path2_tmp=$_FILES['day3_path2']['tmp_name'];

				$day3_path2_complete_name		=		str_replace(" ",'',basename($day3_path2_name));
				$day3_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path2_complete_name));
				$ran						=		rand () ;
				$day3_path2_target				=		DAY3_PATH2.$ran.$day3_path2_complete_name;
				move_uploaded_file($day3_path2_tmp,$day3_path2_target);
			} else {
                            $day3_path2_target				=       '';
                        }

			if($_FILES['day3_path3']['name'] != '') {
				$day3_path3_name=$_FILES['day3_path3']['name'];
				$day3_path3_size=$_FILES['day3_path3']['size'];
				$day3_path3_type=$_FILES['day3_path3']['type'];
				$day3_path3_tmp=$_FILES['day3_path3']['tmp_name'];

				$day3_path3_complete_name		=		str_replace(" ",'',basename($day3_path3_name));
				$day3_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path3_complete_name));
				$ran						=		rand () ;
				$day3_path3_target				=		DAY3_PATH3.$ran.$day3_path3_complete_name;
				move_uploaded_file($day3_path3_tmp,$day3_path3_target);
			} else {
                            $day3_path3_target				=       '';
                        }

			if($_FILES['day3_path4']['name'] != '') {
				$day3_path4_name=$_FILES['day3_path4']['name'];
				$day3_path4_size=$_FILES['day3_path4']['size'];
				$day3_path4_type=$_FILES['day3_path4']['type'];
				$day3_path4_tmp=$_FILES['day3_path4']['tmp_name'];

				$day3_path4_complete_name		=		str_replace(" ",'',basename($day3_path4_name));
				$day3_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day3_path4_complete_name));
				$ran						=		rand () ;
				$day3_path4_target				=		DAY3_PATH4.$ran.$day3_path4_complete_name;
				move_uploaded_file($day3_path4_tmp,$day3_path4_target);
			} else {
                            $day3_path4_target				=       '';
                        }

			if($_FILES['day4_path1']['name'] != '') {
				$day4_path1_name=$_FILES['day4_path1']['name'];
				$day4_path1_size=$_FILES['day4_path1']['size'];
				$day4_path1_type=$_FILES['day4_path1']['type'];
				$day4_path1_tmp=$_FILES['day4_path1']['tmp_name'];

				$day4_path1_complete_name		=		str_replace(" ",'',basename($day4_path1_name));
				$day4_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path1_complete_name));
				$ran						=		rand () ;
				$day4_path1_target				=		DAY4_PATH1.$ran.$day4_path1_complete_name;
				move_uploaded_file($day4_path1_tmp,$day4_path1_target);
			} else {
                            $day4_path1_target				=       '';
                        }

			if($_FILES['day4_path2']['name'] != '') {
				$day4_path2_name=$_FILES['day4_path2']['name'];
				$day4_path2_size=$_FILES['day4_path2']['size'];
				$day4_path2_type=$_FILES['day4_path2']['type'];
				$day4_path2_tmp=$_FILES['day4_path2']['tmp_name'];

				$day4_path2_complete_name		=		str_replace(" ",'',basename($day4_path2_name));
				$day4_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path2_complete_name));
				$ran						=		rand () ;
				$day4_path2_target				=		DAY4_PATH2.$ran.$day4_path2_complete_name;
				move_uploaded_file($day4_path2_tmp,$day4_path2_target);
			} else {
                            $day4_path2_target				=       '';
                        }

			if($_FILES['day4_path3']['name'] != '') {
				$day4_path3_name=$_FILES['day4_path3']['name'];
				$day4_path3_size=$_FILES['day4_path3']['size'];
				$day4_path3_type=$_FILES['day4_path3']['type'];
				$day4_path3_tmp=$_FILES['day4_path3']['tmp_name'];

				$day4_path3_complete_name		=		str_replace(" ",'',basename($day4_path3_name));
				$day4_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path3_complete_name));
				$ran						=		rand () ;
				$day4_path3_target				=		DAY4_PATH3.$ran.$day4_path3_complete_name;
				move_uploaded_file($day4_path3_tmp,$day4_path3_target);
			} else {
                            $day4_path3_target				=       '';
                        }

			if($_FILES['day4_path4']['name'] != '') {
				$day4_path4_name=$_FILES['day4_path4']['name'];
				$day4_path4_size=$_FILES['day4_path4']['size'];
				$day4_path4_type=$_FILES['day4_path4']['type'];
				$day4_path4_tmp=$_FILES['day4_path4']['tmp_name'];

				$day4_path4_complete_name		=		str_replace(" ",'',basename($day4_path4_name));
				$day4_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4_path4_complete_name));
				$ran						=		rand () ;
				$day4_path4_target				=		DAY4_PATH4.$ran.$day4_path4_complete_name;
				move_uploaded_file($day4_path4_tmp,$day4_path4_target);
			} else {
                            $day4_path4_target				=       '';
            }

			if($_FILES['day4a_path1']['name'] != '') {
				$day4a_path1_name=$_FILES['day4a_path1']['name'];
				$day4a_path1_size=$_FILES['day4a_path1']['size'];
				$day4a_path1_type=$_FILES['day4a_path1']['type'];
				$day4a_path1_tmp=$_FILES['day4a_path1']['tmp_name'];

				$day4a_path1_complete_name		=		str_replace(" ",'',basename($day4a_path1_name));
				$day4a_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path1_complete_name));
				$ran						=		rand () ;
				$day4a_path1_target				=		DAY4A_PATH1.$ran.$day4a_path1_complete_name;
				move_uploaded_file($day4a_path1_tmp,$day4a_path1_target);
			} else {
                            $day4a_path1_target				=       '';
            }

			if($_FILES['day4a_path2']['name'] != '') {
				$day4a_path2_name=$_FILES['day4a_path2']['name'];
				$day4a_path2_size=$_FILES['day4a_path2']['size'];
				$day4a_path2_type=$_FILES['day4a_path2']['type'];
				$day4a_path2_tmp=$_FILES['day4a_path2']['tmp_name'];

				$day4a_path2_complete_name		=		str_replace(" ",'',basename($day4a_path2_name));
				$day4a_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path2_complete_name));
				$ran						=		rand () ;
				$day4a_path2_target				=		DAY4A_PATH2.$ran.$day4a_path2_complete_name;
				move_uploaded_file($day4a_path2_tmp,$day4a_path2_target);
			} else {
                            $day4a_path2_target				=       '';
            }

			if($_FILES['day4a_path3']['name'] != '') {
				$day4a_path3_name=$_FILES['day4a_path3']['name'];
				$day4a_path3_size=$_FILES['day4a_path3']['size'];
				$day4a_path3_type=$_FILES['day4a_path3']['type'];
				$day4a_path3_tmp=$_FILES['day4a_path3']['tmp_name'];

				$day4a_path3_complete_name		=		str_replace(" ",'',basename($day4a_path3_name));
				$day4a_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path3_complete_name));
				$ran						=		rand () ;
				$day4a_path3_target				=		DAY4A_PATH3.$ran.$day4a_path3_complete_name;
				move_uploaded_file($day4a_path3_tmp,$day4a_path3_target);
			} else {
                            $day4a_path3_target				=       '';
            }

			if($_FILES['day4a_path4']['name'] != '') {
				$day4a_path4_name=$_FILES['day4a_path4']['name'];
				$day4a_path4_size=$_FILES['day4a_path4']['size'];
				$day4a_path4_type=$_FILES['day4a_path4']['type'];
				$day4a_path4_tmp=$_FILES['day4a_path4']['tmp_name'];

				$day4a_path4_complete_name		=		str_replace(" ",'',basename($day4a_path4_name));
				$day4a_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day4a_path4_complete_name));
				$ran						=		rand () ;
				$day4a_path4_target				=		DAY4A_PATH4.$ran.$day4a_path4_complete_name;
				move_uploaded_file($day4a_path4_tmp,$day4a_path4_target);
			} else {
                            $day4a_path4_target				=       '';
			}

			if($_FILES['day5_path1']['name'] != '') {
				$day5_path1_name=$_FILES['day5_path1']['name'];
				$day5_path1_size=$_FILES['day5_path1']['size'];
				$day5_path1_type=$_FILES['day5_path1']['type'];
				$day5_path1_tmp=$_FILES['day5_path1']['tmp_name'];

				$day5_path1_complete_name		=		str_replace(" ",'',basename($day5_path1_name));
				$day5_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path1_complete_name));
				$ran						=		rand () ;
				$day5_path1_target				=		DAY5_PATH1.$ran.$day5_path1_complete_name;
				move_uploaded_file($day5_path1_tmp,$day5_path1_target);
			} else {
                            $day5_path1_target				=       '';
                        }

			if($_FILES['day5_path2']['name'] != '') {
				$day5_path2_name=$_FILES['day5_path2']['name'];
				$day5_path2_size=$_FILES['day5_path2']['size'];
				$day5_path2_type=$_FILES['day5_path2']['type'];
				$day5_path2_tmp=$_FILES['day5_path2']['tmp_name'];

				$day5_path2_complete_name		=		str_replace(" ",'',basename($day5_path2_name));
				$day5_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path2_complete_name));
				$ran						=		rand () ;
				$day5_path2_target				=		DAY5_PATH2.$ran.$day5_path2_complete_name;
				move_uploaded_file($day5_path2_tmp,$day5_path2_target);
			} else {
                            $day5_path2_target				=       '';
                        }

			if($_FILES['day5_path3']['name'] != '') {
				$day5_path3_name=$_FILES['day5_path3']['name'];
				$day5_path3_size=$_FILES['day5_path3']['size'];
				$day5_path3_type=$_FILES['day5_path3']['type'];
				$day5_path3_tmp=$_FILES['day5_path3']['tmp_name'];

				$day5_path3_complete_name		=		str_replace(" ",'',basename($day5_path3_name));
				$day5_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path3_complete_name));
				$ran						=		rand () ;
				$day5_path3_target				=		DAY5_PATH3.$ran.$day5_path3_complete_name;
				move_uploaded_file($day5_path3_tmp,$day5_path3_target);
			} else {
                            $day5_path3_target				=       '';
                        }
		
			if($_FILES['day5_path4']['name'] != '') {
				$day5_path4_name=$_FILES['day5_path4']['name'];
				$day5_path4_size=$_FILES['day5_path4']['size'];
				$day5_path4_type=$_FILES['day5_path4']['type'];
				$day5_path4_tmp=$_FILES['day5_path4']['tmp_name'];

				$day5_path4_complete_name		=		str_replace(" ",'',basename($day5_path4_name));
				$day5_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day5_path4_complete_name));
				$ran						=		rand () ;
				$day5_path4_target				=		DAY5_PATH4.$ran.$day5_path4_complete_name;
				move_uploaded_file($day5_path4_tmp,$day5_path4_target);
			} else {
                            $day5_path4_target				=       '';
                        }
			
			if($_FILES['day6_path1']['name'] != '') {
				$day6_path1_name=$_FILES['day6_path1']['name'];
				$day6_path1_size=$_FILES['day6_path1']['size'];
				$day6_path1_type=$_FILES['day6_path1']['type'];
				$day6_path1_tmp=$_FILES['day6_path1']['tmp_name'];

				$day6_path1_complete_name		=		str_replace(" ",'',basename($day6_path1_name));
				$day6_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path1_complete_name));
				$ran						=		rand () ;
				$day6_path1_target				=		DAY6_PATH1.$ran.$day6_path1_complete_name;
				move_uploaded_file($day6_path1_tmp,$day6_path1_target);
			} else {
                            $day6_path1_target				=       '';
                        }

			if($_FILES['day6_path2']['name'] != '') {
				$day6_path2_name=$_FILES['day6_path2']['name'];
				$day6_path2_size=$_FILES['day6_path2']['size'];
				$day6_path2_type=$_FILES['day6_path2']['type'];
				$day6_path2_tmp=$_FILES['day6_path2']['tmp_name'];

				$day6_path2_complete_name		=		str_replace(" ",'',basename($day6_path2_name));
				$day6_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path2_complete_name));
				$ran						=		rand () ;
				$day6_path2_target				=		DAY6_PATH2.$ran.$day6_path2_complete_name;
				move_uploaded_file($day6_path2_tmp,$day6_path2_target);
			} else {
                            $day6_path2_target				=       '';
                        }

			if($_FILES['day6_path3']['name'] != '') {
				$day6_path3_name=$_FILES['day6_path3']['name'];
				$day6_path3_size=$_FILES['day6_path3']['size'];
				$day6_path3_type=$_FILES['day6_path3']['type'];
				$day6_path3_tmp=$_FILES['day6_path3']['tmp_name'];

				$day6_path3_complete_name		=		str_replace(" ",'',basename($day6_path3_name));
				$day6_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path3_complete_name));
				$ran						=		rand () ;
				$day6_path3_target				=		DAY6_PATH3.$ran.$day6_path3_complete_name;
				move_uploaded_file($day6_path3_tmp,$day6_path3_target);
			} else {
                            $day6_path3_target				=       '';
                        }
			
			if($_FILES['day6_path4']['name'] != '') {
				$day6_path4_name=$_FILES['day6_path4']['name'];
				$day6_path4_size=$_FILES['day6_path4']['size'];
				$day6_path4_type=$_FILES['day6_path4']['type'];
				$day6_path4_tmp=$_FILES['day6_path4']['tmp_name'];

				$day6_path4_complete_name		=		str_replace(" ",'',basename($day6_path4_name));
				$day6_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day6_path4_complete_name));
				$ran						=		rand () ;
				$day6_path4_target				=		DAY6_PATH4.$ran.$day6_path4_complete_name;
				move_uploaded_file($day6_path4_tmp,$day6_path4_target);
			} else {
                            $day6_path4_target				=       '';
                        }

			if($_FILES['day7_path1']['name'] != '') {
				$day7_path1_name=$_FILES['day7_path1']['name'];
				$day7_path1_size=$_FILES['day7_path1']['size'];
				$day7_path1_type=$_FILES['day7_path1']['type'];
				$day7_path1_tmp=$_FILES['day7_path1']['tmp_name'];

				$day7_path1_complete_name		=		str_replace(" ",'',basename($day7_path1_name));
				$day7_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path1_complete_name));
				$ran						=		rand () ;
				$day7_path1_target				=		DAY7_PATH1.$ran.$day7_path1_complete_name;
				move_uploaded_file($day7_path1_tmp,$day7_path1_target);
			} else {
                            $day7_path1_target				=       '';
                        }

			if($_FILES['day7_path2']['name'] != '') {
				$day7_path2_name=$_FILES['day7_path2']['name'];
				$day7_path2_size=$_FILES['day7_path2']['size'];
				$day7_path2_type=$_FILES['day7_path2']['type'];
				$day7_path2_tmp=$_FILES['day7_path2']['tmp_name'];

				$day7_path2_complete_name		=		str_replace(" ",'',basename($day7_path2_name));
				$day7_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path2_complete_name));
				$ran						=		rand () ;
				$day7_path2_target				=		DAY7_PATH2.$ran.$day7_path2_complete_name;
				move_uploaded_file($day7_path2_tmp,$day7_path2_target);
			} else {
                            $day7_path2_target				=       '';
                        }
			
			if($_FILES['day7_path3']['name'] != '') {
				$day7_path3_name=$_FILES['day7_path3']['name'];
				$day7_path3_size=$_FILES['day7_path3']['size'];
				$day7_path3_type=$_FILES['day7_path3']['type'];
				$day7_path3_tmp=$_FILES['day7_path3']['tmp_name'];

				$day7_path3_complete_name		=		str_replace(" ",'',basename($day7_path3_name));
				$day7_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path3_complete_name));
				$ran						=		rand () ;
				$day7_path3_target				=		DAY7_PATH3.$ran.$day7_path3_complete_name;
				move_uploaded_file($day7_path3_tmp,$day7_path3_target);
			} else {
                            $day7_path3_target				=       '';
                        }

			if($_FILES['day7_path4']['name'] != '') {
				$day7_path4_name=$_FILES['day7_path4']['name'];
				$day7_path4_size=$_FILES['day7_path4']['size'];
				$day7_path4_type=$_FILES['day7_path4']['type'];
				$day7_path4_tmp=$_FILES['day7_path4']['tmp_name'];

				$day7_path4_complete_name		=		str_replace(" ",'',basename($day7_path4_name));
				$day7_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day7_path4_complete_name));
				$ran						=		rand () ;
				$day7_path4_target				=		DAY7_PATH4.$ran.$day7_path4_complete_name;
				move_uploaded_file($day7_path4_tmp,$day7_path4_target);
			} else {
                            $day7_path4_target				=       '';
                        }

			if($_FILES['day8_path1']['name'] != '') {
				$day8_path1_name=$_FILES['day8_path1']['name'];
				$day8_path1_size=$_FILES['day8_path1']['size'];
				$day8_path1_type=$_FILES['day8_path1']['type'];
				$day8_path1_tmp=$_FILES['day8_path1']['tmp_name'];

				$day8_path1_complete_name		=		str_replace(" ",'',basename($day8_path1_name));
				$day8_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path1_complete_name));
				$ran						=		rand () ;
				$day8_path1_target				=		DAY8_PATH1.$ran.$day8_path1_complete_name;
				move_uploaded_file($day8_path1_tmp,$day8_path1_target);
			} else {
                            $day8_path1_target				=       '';
                        }

			if($_FILES['day8_path2']['name'] != '') {
				$day8_path2_name=$_FILES['day8_path2']['name'];
				$day8_path2_size=$_FILES['day8_path2']['size'];
				$day8_path2_type=$_FILES['day8_path2']['type'];
				$day8_path2_tmp=$_FILES['day8_path2']['tmp_name'];

				$day8_path2_complete_name		=		str_replace(" ",'',basename($day8_path2_name));
				$day8_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path2_complete_name));
				$ran						=		rand () ;
				$day8_path2_target				=		DAY8_PATH2.$ran.$day8_path2_complete_name;
				move_uploaded_file($day8_path2_tmp,$day8_path2_target);
			} else {
                            $day8_path2_target				=       '';
                        }
			
			if($_FILES['day8_path3']['name'] != '') {
				$day8_path3_name=$_FILES['day8_path3']['name'];
				$day8_path3_size=$_FILES['day8_path3']['size'];
				$day8_path3_type=$_FILES['day8_path3']['type'];
				$day8_path3_tmp=$_FILES['day8_path3']['tmp_name'];

				$day8_path3_complete_name		=		str_replace(" ",'',basename($day8_path3_name));
				$day8_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path3_complete_name));
				$ran						=		rand () ;
				$day8_path3_target				=		DAY8_PATH3.$ran.$day8_path3_complete_name;
				move_uploaded_file($day8_path3_tmp,$day8_path3_target);
			} else {
                            $day8_path3_target				=       '';
                        }
			
			if($_FILES['day8_path4']['name'] != '') {
				$day8_path4_name=$_FILES['day8_path4']['name'];
				$day8_path4_size=$_FILES['day8_path4']['size'];
				$day8_path4_type=$_FILES['day8_path4']['type'];
				$day8_path4_tmp=$_FILES['day8_path4']['tmp_name'];

				$day8_path4_complete_name		=		str_replace(" ",'',basename($day8_path4_name));
				$day8_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day8_path4_complete_name));
				$ran						=		rand () ;
				$day8_path4_target				=		DAY8_PATH4.$ran.$day8_path4_complete_name;
				move_uploaded_file($day8_path4_tmp,$day8_path4_target);
			} else {
                            $day8_path4_target				=       '';
                        }
			
			if($_FILES['day9_path1']['name'] != '') {
				$day9_path1_name=$_FILES['day9_path1']['name'];
				$day9_path1_size=$_FILES['day9_path1']['size'];
				$day9_path1_type=$_FILES['day9_path1']['type'];
				$day9_path1_tmp=$_FILES['day9_path1']['tmp_name'];

				$day9_path1_complete_name		=		str_replace(" ",'',basename($day9_path1_name));
				$day9_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path1_complete_name));
				$ran						=		rand () ;
				$day9_path1_target				=		DAY9_PATH1.$ran.$day9_path1_complete_name;
				move_uploaded_file($day9_path1_tmp,$day9_path1_target);
			} else {
                            $day9_path1_target				=       '';
                        }
			
			if($_FILES['day9_path2']['name'] != '') {
				$day9_path2_name=$_FILES['day9_path2']['name'];
				$day9_path2_size=$_FILES['day9_path2']['size'];
				$day9_path2_type=$_FILES['day9_path2']['type'];
				$day9_path2_tmp=$_FILES['day9_path2']['tmp_name'];

				$day9_path2_complete_name		=		str_replace(" ",'',basename($day9_path2_name));
				$day9_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path2_complete_name));
				$ran						=		rand () ;
				$day9_path2_target				=		DAY9_PATH2.$ran.$day9_path2_complete_name;
				move_uploaded_file($day9_path2_tmp,$day9_path2_target);
			} else {
                            $day9_path2_target				=       '';
                        }
			
			if($_FILES['day9_path3']['name'] != '') {
				$day9_path3_name=$_FILES['day9_path3']['name'];
				$day9_path3_size=$_FILES['day9_path3']['size'];
				$day9_path3_type=$_FILES['day9_path3']['type'];
				$day9_path3_tmp=$_FILES['day9_path3']['tmp_name'];

				$day9_path3_complete_name		=		str_replace(" ",'',basename($day9_path3_name));
				$day9_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path3_complete_name));
				$ran						=		rand () ;
				$day9_path3_target				=		DAY9_PATH3.$ran.$day9_path3_complete_name;
				move_uploaded_file($day9_path3_tmp,$day9_path3_target);
			} else {
                            $day9_path3_target				=       '';
                        }
			
			if($_FILES['day9_path4']['name'] != '') {
				$day9_path4_name=$_FILES['day9_path4']['name'];
				$day9_path4_size=$_FILES['day9_path4']['size'];
				$day9_path4_type=$_FILES['day9_path4']['type'];
				$day9_path4_tmp=$_FILES['day9_path4']['tmp_name'];

				$day9_path4_complete_name		=		str_replace(" ",'',basename($day9_path4_name));
				$day9_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day9_path4_complete_name));
				$ran						=		rand () ;
				$day9_path4_target				=		DAY9_PATH4.$ran.$day9_path4_complete_name;
				move_uploaded_file($day9_path4_tmp,$day9_path4_target);
			} else {
                            $day9_path4_target				=       '';
                        }
			
			if($_FILES['day10_path1']['name'] != '') {
				$day10_path1_name=$_FILES['day10_path1']['name'];
				$day10_path1_size=$_FILES['day10_path1']['size'];
				$day10_path1_type=$_FILES['day10_path1']['type'];
				$day10_path1_tmp=$_FILES['day10_path1']['tmp_name'];

				$day10_path1_complete_name		=		str_replace(" ",'',basename($day10_path1_name));
				$day10_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path1_complete_name));
				$ran						=		rand () ;
				$day10_path1_target				=		DAY10_PATH1.$ran.$day10_path1_complete_name;
				move_uploaded_file($day10_path1_tmp,$day10_path1_target);
			} else {
                            $day10_path1_target				=       '';
                        }

			if($_FILES['day10_path2']['name'] != '') {
				$day10_path2_name=$_FILES['day10_path2']['name'];
				$day10_path2_size=$_FILES['day10_path2']['size'];
				$day10_path2_type=$_FILES['day10_path2']['type'];
				$day10_path2_tmp=$_FILES['day10_path2']['tmp_name'];

				$day10_path2_complete_name		=		str_replace(" ",'',basename($day10_path2_name));
				$day10_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path2_complete_name));
				$ran						=		rand () ;
				$day10_path2_target				=		DAY10_PATH2.$ran.$day10_path2_complete_name;
				move_uploaded_file($day10_path2_tmp,$day10_path2_target);
			} else {
                            $day10_path2_target				=       '';
                        }

			if($_FILES['day10_path3']['name'] != '') {
				$day10_path3_name=$_FILES['day10_path3']['name'];
				$day10_path3_size=$_FILES['day10_path3']['size'];
				$day10_path3_type=$_FILES['day10_path3']['type'];
				$day10_path3_tmp=$_FILES['day10_path3']['tmp_name'];

				$day10_path3_complete_name		=		str_replace(" ",'',basename($day10_path3_name));
				$day10_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path3_complete_name));
				$ran						=		rand () ;
				$day10_path3_target				=		DAY10_PATH3.$ran.$day10_path3_complete_name;
				move_uploaded_file($day10_path3_tmp,$day10_path3_target);
			} else {
                            $day10_path3_target				=       '';
                        }

			if($_FILES['day10_path4']['name'] != '') {
				$day10_path4_name=$_FILES['day10_path4']['name'];
				$day10_path4_size=$_FILES['day10_path4']['size'];
				$day10_path4_type=$_FILES['day10_path4']['type'];
				$day10_path4_tmp=$_FILES['day10_path4']['tmp_name'];

				$day10_path4_complete_name		=		str_replace(" ",'',basename($day10_path4_name));
				$day10_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day10_path4_complete_name));
				$ran						=		rand () ;
				$day10_path4_target				=		DAY10_PATH4.$ran.$day10_path4_complete_name;
				move_uploaded_file($day10_path4_tmp,$day10_path4_target);
			} else {
                            $day10_path4_target				=       '';
                        }

			if($_FILES['day11_path1']['name'] != '') {
				$day11_path1_name=$_FILES['day11_path1']['name'];
				$day11_path1_size=$_FILES['day11_path1']['size'];
				$day11_path1_type=$_FILES['day11_path1']['type'];
				$day11_path1_tmp=$_FILES['day11_path1']['tmp_name'];

				$day11_path1_complete_name		=		str_replace(" ",'',basename($day11_path1_name));
				$day11_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path1_complete_name));
				$ran						=		rand () ;
				$day11_path1_target				=		DAY11_PATH1.$ran.$day11_path1_complete_name;
				move_uploaded_file($day11_path1_tmp,$day11_path1_target);
			} else {
                            $day11_path1_target				=       '';
                        }
			
			if($_FILES['day11_path2']['name'] != '') {
				$day11_path2_name=$_FILES['day11_path2']['name'];
				$day11_path2_size=$_FILES['day11_path2']['size'];
				$day11_path2_type=$_FILES['day11_path2']['type'];
				$day11_path2_tmp=$_FILES['day11_path2']['tmp_name'];

				$day11_path2_complete_name		=		str_replace(" ",'',basename($day11_path2_name));
				$day11_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path2_complete_name));
				$ran						=		rand () ;
				$day11_path2_target				=		DAY11_PATH2.$ran.$day11_path2_complete_name;
				move_uploaded_file($day11_path2_tmp,$day11_path2_target);
			} else {
                            $day11_path2_target				=       '';
                        }

			if($_FILES['day11_path3']['name'] != '') {
				$day11_path3_name=$_FILES['day11_path3']['name'];
				$day11_path3_size=$_FILES['day11_path3']['size'];
				$day11_path3_type=$_FILES['day11_path3']['type'];
				$day11_path3_tmp=$_FILES['day11_path3']['tmp_name'];

				$day11_path3_complete_name		=		str_replace(" ",'',basename($day11_path3_name));
				$day11_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path3_complete_name));
				$ran						=		rand () ;
				$day11_path3_target				=		DAY11_PATH3.$ran.$day11_path3_complete_name;
				move_uploaded_file($day11_path3_tmp,$day11_path3_target);
			} else {
                            $day11_path3_target				=       '';
                        }

			if($_FILES['day11_path4']['name'] != '') {
				$day11_path4_name=$_FILES['day11_path4']['name'];
				$day11_path4_size=$_FILES['day11_path4']['size'];
				$day11_path4_type=$_FILES['day11_path4']['type'];
				$day11_path4_tmp=$_FILES['day11_path4']['tmp_name'];

				$day11_path4_complete_name		=		str_replace(" ",'',basename($day11_path4_name));
				$day11_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day11_path4_complete_name));
				$ran						=		rand () ;
				$day11_path4_target				=		DAY11_PATH4.$ran.$day11_path4_complete_name;
				move_uploaded_file($day11_path4_tmp,$day11_path4_target);
			} else {
                            $day11_path4_target				=       '';
                        }
                        
                        if($_FILES['day13_path1']['name'] != '') {
				$day13_path1_name=$_FILES['day13_path1']['name'];
				$day13_path1_size=$_FILES['day13_path1']['size'];
				$day13_path1_type=$_FILES['day13_path1']['type'];
				$day13_path1_tmp=$_FILES['day13_path1']['tmp_name'];

				$day13_path1_complete_name		=		str_replace(" ",'',basename($day13_path1_name));
				$day13_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path1_complete_name));
				$ran						=		rand () ;
				$day13_path1_target				=		DAY13_PATH1.$ran.$day13_path1_complete_name;
				move_uploaded_file($day13_path1_tmp,$day13_path1_target);
			} else {
                            $day13_path1_target				=       '';
                        }
			
			if($_FILES['day13_path2']['name'] != '') {
				$day13_path2_name=$_FILES['day13_path2']['name'];
				$day13_path2_size=$_FILES['day13_path2']['size'];
				$day13_path2_type=$_FILES['day13_path2']['type'];
				$day13_path2_tmp=$_FILES['day13_path2']['tmp_name'];

				$day13_path2_complete_name		=		str_replace(" ",'',basename($day13_path2_name));
				$day13_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path2_complete_name));
				$ran						=		rand () ;
				$day13_path2_target				=		DAY13_PATH2.$ran.$day13_path2_complete_name;
				move_uploaded_file($day13_path2_tmp,$day13_path2_target);
			} else {
                            $day13_path2_target				=       '';
                        }

			if($_FILES['day13_path3']['name'] != '') {
				$day13_path3_name=$_FILES['day13_path3']['name'];
				$day13_path3_size=$_FILES['day13_path3']['size'];
				$day13_path3_type=$_FILES['day13_path3']['type'];
				$day13_path3_tmp=$_FILES['day13_path3']['tmp_name'];

				$day13_path3_complete_name		=		str_replace(" ",'',basename($day13_path3_name));
				$day13_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path3_complete_name));
				$ran						=		rand () ;
				$day13_path3_target				=		DAY13_PATH3.$ran.$day13_path3_complete_name;
				move_uploaded_file($day13_path3_tmp,$day13_path3_target);
			} else {
                            $day13_path3_target				=       '';
                        }

			if($_FILES['day13_path4']['name'] != '') {
				$day13_path4_name=$_FILES['day13_path4']['name'];
				$day13_path4_size=$_FILES['day13_path4']['size'];
				$day13_path4_type=$_FILES['day13_path4']['type'];
				$day13_path4_tmp=$_FILES['day13_path4']['tmp_name'];

				$day13_path4_complete_name		=		str_replace(" ",'',basename($day13_path4_name));
				$day13_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day13_path4_complete_name));
				$ran						=		rand () ;
				$day13_path4_target				=		DAY13_PATH4.$ran.$day13_path4_complete_name;
				move_uploaded_file($day13_path4_tmp,$day13_path4_target);
			} else {
                            $day13_path4_target				=       '';
                        }
                        
                        if($_FILES['day14_path1']['name'] != '') {
				$day14_path1_name=$_FILES['day14_path1']['name'];
				$day14_path1_size=$_FILES['day14_path1']['size'];
				$day14_path1_type=$_FILES['day14_path1']['type'];
				$day14_path1_tmp=$_FILES['day14_path1']['tmp_name'];

				$day14_path1_complete_name		=		str_replace(" ",'',basename($day14_path1_name));
				$day14_path1_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path1_complete_name));
				$ran						=		rand () ;
				$day14_path1_target				=		DAY14_PATH1.$ran.$day14_path1_complete_name;
				move_uploaded_file($day14_path1_tmp,$day14_path1_target);
			} else {
                            $day14_path1_target				=       '';
                        }
			
			if($_FILES['day14_path2']['name'] != '') {
				$day14_path2_name=$_FILES['day14_path2']['name'];
				$day14_path2_size=$_FILES['day14_path2']['size'];
				$day14_path2_type=$_FILES['day14_path2']['type'];
				$day14_path2_tmp=$_FILES['day14_path2']['tmp_name'];

				$day14_path2_complete_name		=		str_replace(" ",'',basename($day14_path2_name));
				$day14_path2_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path2_complete_name));
				$ran						=		rand () ;
				$day14_path2_target				=		DAY14_PATH2.$ran.$day14_path2_complete_name;
				move_uploaded_file($day14_path2_tmp,$day14_path2_target);
			} else {
                            $day14_path2_target				=       '';
                        }

			if($_FILES['day14_path3']['name'] != '') {
				$day14_path3_name=$_FILES['day14_path3']['name'];
				$day14_path3_size=$_FILES['day14_path3']['size'];
				$day14_path3_type=$_FILES['day14_path3']['type'];
				$day14_path3_tmp=$_FILES['day14_path3']['tmp_name'];

				$day14_path3_complete_name		=		str_replace(" ",'',basename($day14_path3_name));
				$day14_path3_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path3_complete_name));
				$ran						=		rand () ;
				$day14_path3_target				=		DAY14_PATH3.$ran.$day14_path3_complete_name;
				move_uploaded_file($day14_path3_tmp,$day14_path3_target);
			} else {
                            $day14_path3_target				=       '';
                        }

			if($_FILES['day14_path4']['name'] != '') {
				$day14_path4_name=$_FILES['day14_path4']['name'];
				$day14_path4_size=$_FILES['day14_path4']['size'];
				$day14_path4_type=$_FILES['day14_path4']['type'];
				$day14_path4_tmp=$_FILES['day14_path4']['tmp_name'];

				$day14_path4_complete_name		=		str_replace(" ",'',basename($day14_path4_name));
				$day14_path4_complete_name		=		preg_replace('/[^a-z0-9.]/i','',basename($day14_path4_complete_name));
				$ran						=		rand () ;
				$day14_path4_target				=		DAY14_PATH4.$ran.$day14_path4_complete_name;
				move_uploaded_file($day14_path4_tmp,$day14_path4_target);
			} else {
                            $day14_path4_target				=       '';
                        }

			if($num > 0) { 	
				$queryUpdate	=	"UPDATE ".TABLE_DAY." SET			sri_id='$sri_id',day_name='$day_name',day1_title='$day1_title',day2_title='$day2_title',day2_place='$day2_place',day2_desc='$day2_desc',day2_stay='$day2_stay',day3_title='$day3_title',day3_place='$day3_place',day3_desc='$day3_desc',day3_stay='$day3_stay',day4_title='$day4_title',day4_place='$day4_place',day4_desc='$day4_desc',day4_stay='$day4_stay',day4a_title='$day4a_title',day4a_place='$day4a_place',day4a_desc='$day4a_desc',day5_title='$day5_title',day5_place='$day5_place',day5_desc='$day5_desc',day5_stay='$day5_stay',day6_title='$day6_title',day6_place='$day6_place',day6_desc='$day6_desc',day6_stay='$day6_stay',day7_title='$day7_title',day7_place='$day7_place',day7_desc='$day7_desc',day7_stay='$day7_stay',day8_title='$day8_title',day8_place='$day8_place',day8_desc='$day8_desc',day8_stay='$day8_stay',day9_title='$day9_title',day9_place='$day9_place',day9_desc='$day9_desc',day9_stay='$day9_stay',day10_title='$day10_title',day10_place='$day10_place',day10_desc='$day10_desc',day10_stay='$day10_stay',day11_title='$day11_title',day11_place='$day11_place',day11_desc='$day11_desc',day11_stay='$day11_stay',day13_title='$day13_title',day13_place='$day13_place',day13_desc='$day13_desc',day13_stay='$day13_stay',day14_title='$day14_title',day14_place='$day14_place',day14_desc='$day14_desc',day14_stay='$day14_stay',day12_title='$day12_title',price_include='$price_include',price_notinclude='$price_notinclude',day_status='$day_status',day_updatedDate=NOW()".$day2_path1_path.$day2_path2_path.$day2_path3_path.$day2_path4_path.$day3_path1_path.$day3_path2_path.$day3_path3_path.$day3_path4_path.$day4_path1_path.$day4_path2_path.$day4_path3_path.$day4_path4_path.$day4a_path1_path.$day4a_path2_path.$day4a_path3_path.$day4a_path4_path.$day5_path1_path.$day5_path2_path.$day5_path3_path.$day5_path4_path.$day6_path1_path.$day6_path2_path.$day6_path3_path.$day6_path4_path.$day7_path1_path.$day7_path2_path.$day7_path3_path.$day7_path4_path.$day8_path1_path.$day8_path2_path.$day8_path3_path.$day8_path4_path.$day9_path1_path.$day9_path2_path.$day9_path3_path.$day9_path4_path.$day10_path1_path.$day10_path2_path.$day10_path3_path.$day10_path4_path.$day11_path1_path.$day11_path2_path.$day11_path3_path.$day11_path4_path.$day13_path1_path.$day13_path2_path.$day13_path3_path.$day13_path4_path.$day14_path1_path.$day14_path2_path.$day14_path3_path.$day14_path4_path." WHERE day_id='$day_id'";			
				
				$resultUpdate	=	mysql_query($queryUpdate) or die(mysql_error());;

				if($resultUpdate) {
					$msg	=	"Datas updated successfully";
				}
				else {
					$$msg	=	"Datas are not inserted";
				}
			}
			else {
				$queryInsert	=	"insert into ".TABLE_DAY." (sri_id,day_name,day1_title,day2_title,day2_place,day2_desc,day2_path1,day2_path2,day2_path3,day2_path4,day2_stay,day3_title,day3_place,day3_desc,day3_path1,day3_path2,day3_path3,day3_path4,day3_stay,day4_title,day4_place,day4_desc,day4_path1,day4_path2,day4_path3,day4_path4,day4_stay,day4a_title,day4a_place,day4a_desc,day4a_path1,day4a_path2,day4a_path3,day4a_path4,day5_title,day5_place,day5_desc,day5_path1,day5_path2,day5_path3,day5_path4,day5_stay,day6_title,day6_place,day6_desc,day6_path1,day6_path2,day6_path3,day6_path4,day6_stay,day7_title,day7_place,day7_desc,day7_path1,day7_path2,day7_path3,day7_path4,day7_stay,day8_title,day8_place,day8_desc,day8_path1,day8_path2,day8_path3,day8_path4,day8_stay,day9_title,day9_place,day9_desc,day9_path1,day9_path2,day9_path3,day9_path4,day9_stay,day10_title,day10_place,day10_desc,day10_path1,day10_path2,day10_path3,day10_path4,day10_stay,day11_title,day11_place,day11_desc,day11_path1,day11_path2,day11_path3,day11_path4,day11_stay,day13_title,day13_place,day13_desc,day13_path1,day13_path2,day13_path3,day13_path4,day13_stay,day14_title,day14_place,day14_desc,day14_path1,day14_path2,day14_path3,day14_path4,day14_stay,day12_title,price_include,price_notinclude,day_status,day_insertedDate) values ('$sri_id','$day_name','$day1_title','$day2_title','$day2_place','$day2_desc','$day2_path1_target','$day2_path2_target','$day2_path3_target','$day2_path4_target','$day2_stay','$day3_title','$day3_place','$day3_desc','$day3_path1_target','$day3_path2_target','$day3_path3_target','$day3_path4_target','$day3_stay','$day4_title','$day4_place','$day4_desc','$day4_path1_target','$day4_path2_target','$day4_path3_target','$day4_path4_target','$day4_stay','$day4a_title','$day4a_place','$day4a_desc','$day4a_path1_target','$day4a_path2_target','$day4a_path3_target','$day4a_path4_target','$day5_title','$day5_place','$day5_desc','$day5_path1_target','$day5_path2_target','$day5_path3_target','$day5_path4_target','$day5_stay','$day6_title','$day6_place','$day6_desc','$day6_path1_target','$day6_path2_target','$day6_path3_target','$day6_path4_target','$day6_stay','$day7_title','$day7_place','$day7_desc','$day7_path1_target','$day7_path2_target','$day7_path3_target','$day7_path4_target','$day7_stay','$day8_title','$day8_place','$day8_desc','$day8_path1_target','$day8_path2_target','$day8_path3_target','$day8_path4_target','$day8_stay','$day9_title','$day9_place','$day9_desc','$day9_path1_target','$day9_path2_target','$day9_path3_target','$day9_path4_target','$day9_stay','$day10_title','$day10_place','$day10_desc','$day10_path1_target','$day10_path2_target','$day10_path3_target','$day10_path4_target','$day10_stay','$day11_title','$day11_place','$day11_desc','$day11_path1_target','$day11_path2_target','$day11_path3_target','$day11_path4_target','$day11_stay','$day13_title','$day13_place','$day13_desc','$day13_path1_target','$day13_path2_target','$day13_path3_target','$day13_path4_target','$day13_stay','$day14_title','$day14_place','$day14_desc','$day14_path1_target','$day14_path2_target','$day14_path3_target','$day14_path4_target','$day14_stay','$day12_title','$price_include','$price_notinclude','$day_status',NOW())";

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

				$selectCount2	=	"SELECT day2_path1,day2_path2,day2_path3,day2_path4,day3_path1,day3_path2,day3_path3,day3_path4,day4_path1,day4_path2,day4_path3,day4_path4,day4a_path1,day4a_path2,day4a_path3,day4a_path4,day5_path1,day5_path2,day5_path3,day5_path4,day6_path1,day6_path2,day6_path3,day6_path4,day7_path1,day7_path2,day7_path3,day7_path4,day8_path1,day8_path2,day8_path3,day8_path4,day9_path1,day9_path2,day9_path3,day9_path4,day10_path1,day10_path2,day10_path3,day10_path4,day11_path1,day11_path2,day11_path3,day11_path4,day13_path1,day13_path2,day13_path3,day13_path4,day14_path1,day14_path2,day14_path3,day14_path4 from ".TABLE_DAY." where day_id='$day_id'";
				$selectResult2	=	mysql_query($selectCount2) or die (mysql_error());
				$num2			=	mysql_num_rows($selectResult2);	
				$row2			=	mysql_fetch_array($selectResult2);
				
				if($row2['day2_path1'] != '') {
					if(file_exists($row2['day2_path1'])) {
						unlink($row2['day2_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day2_path2'] != '') {
					if(file_exists($row2['day2_path2'])) {
						unlink($row2['day2_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day2_path3'] != '') {
					if(file_exists($row2['day2_path3'])) {
						unlink($row2['day2_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day2_path4'] != '') {
					if(file_exists($row2['day2_path4'])) {
						unlink($row2['day2_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day3_path1'] != '') {
					if(file_exists($row2['day3_path1'])) {
						unlink($row2['day3_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day3_path2'] != '') {
					if(file_exists($row2['day3_path2'])) {
						unlink($row2['day3_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day3_path3'] != '') {
					if(file_exists($row2['day3_path3'])) {
						unlink($row2['day3_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day3_path4'] != '') {
					if(file_exists($row2['day3_path4'])) {
						unlink($row2['day3_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4_path1'] != '') {
					if(file_exists($row2['day4_path1'])) {
						unlink($row2['day4_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day4_path2'] != '') {
					if(file_exists($row2['day4_path2'])) {
						unlink($row2['day4_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4_path3'] != '') {
					if(file_exists($row2['day4_path3'])) {
						unlink($row2['day4_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4_path4'] != '') {
					if(file_exists($row2['day4_path4'])) {
						unlink($row2['day4_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4a_path1'] != '') {
					if(file_exists($row2['day4a_path1'])) {
						unlink($row2['day4a_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day4a_path2'] != '') {
					if(file_exists($row2['day4a_path2'])) {
						unlink($row2['day4a_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4a_path3'] != '') {
					if(file_exists($row2['day4a_path3'])) {
						unlink($row2['day4a_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day4a_path4'] != '') {
					if(file_exists($row2['day4a_path4'])) {
						unlink($row2['day4a_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}


				if($row2['day5_path1'] != '') {
					if(file_exists($row2['day5_path1'])) {
						unlink($row2['day5_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day5_path2'] != '') {
					if(file_exists($row2['day5_path2'])) {
						unlink($row2['day5_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day5_path3'] != '') {
					if(file_exists($row2['day5_path3'])) {
						unlink($row2['day5_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day5_path4'] != '') {
					if(file_exists($row2['day5_path4'])) {
						unlink($row2['day5_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day6_path1'] != '') {
					if(file_exists($row2['day6_path1'])) {
						unlink($row2['day6_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day6_path2'] != '') {
					if(file_exists($row2['day6_path2'])) {
						unlink($row2['day6_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day6_path3'] != '') {
					if(file_exists($row2['day6_path3'])) {
						unlink($row2['day6_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day6_path4'] != '') {
					if(file_exists($row2['day6_path4'])) {
						unlink($row2['day6_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day7_path1'] != '') {
					if(file_exists($row2['day7_path1'])) {
						unlink($row2['day7_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day7_path2'] != '') {
					if(file_exists($row2['day7_path2'])) {
						unlink($row2['day7_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day7_path3'] != '') {
					if(file_exists($row2['day7_path3'])) {
						unlink($row2['day7_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day7_path4'] != '') {
					if(file_exists($row2['day7_path4'])) {
						unlink($row2['day7_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day8_path1'] != '') {
					if(file_exists($row2['day8_path1'])) {
						unlink($row2['day8_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day8_path2'] != '') {
					if(file_exists($row2['day8_path2'])) {
						unlink($row2['day8_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day8_path3'] != '') {
					if(file_exists($row2['day8_path3'])) {
						unlink($row2['day8_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day8_path4'] != '') {
					if(file_exists($row2['day8_path4'])) {
						unlink($row2['day8_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day9_path1'] != '') {
					if(file_exists($row2['day9_path1'])) {
						unlink($row2['day9_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day9_path2'] != '') {
					if(file_exists($row2['day9_path2'])) {
						unlink($row2['day9_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day9_path3'] != '') {
					if(file_exists($row2['day9_path3'])) {
						unlink($row2['day9_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day9_path4'] != '') {
					if(file_exists($row2['day9_path4'])) {
						unlink($row2['day9_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day10_path1'] != '') {
					if(file_exists($row2['day10_path1'])) {
						unlink($row2['day10_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day10_path2'] != '') {
					if(file_exists($row2['day10_path2'])) {
						unlink($row2['day10_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day10_path3'] != '') {
					if(file_exists($row2['day10_path3'])) {
						unlink($row2['day10_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day10_path4'] != '') {
					if(file_exists($row2['day10_path4'])) {
						unlink($row2['day10_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day11_path1'] != '') {
					if(file_exists($row2['day11_path1'])) {
						unlink($row2['day11_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day11_path2'] != '') {
					if(file_exists($row2['day11_path2'])) {
						unlink($row2['day11_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day11_path3'] != '') {
					if(file_exists($row2['day11_path3'])) {
						unlink($row2['day11_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day11_path4'] != '') {
					if(file_exists($row2['day11_path4'])) {
						unlink($row2['day11_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day13_path1'] != '') {
					if(file_exists($row2['day13_path1'])) {
						unlink($row2['day13_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day13_path2'] != '') {
					if(file_exists($row2['day13_path2'])) {
						unlink($row2['day13_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day13_path3'] != '') {
					if(file_exists($row2['day13_path3'])) {
						unlink($row2['day13_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day13_path4'] != '') {
					if(file_exists($row2['day13_path4'])) {
						unlink($row2['day13_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day14_path1'] != '') {
					if(file_exists($row2['day14_path1'])) {
						unlink($row2['day14_path1']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}
				
				if($row2['day14_path2'] != '') {
					if(file_exists($row2['day14_path2'])) {
						unlink($row2['day14_path2']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day14_path3'] != '') {
					if(file_exists($row2['day14_path3'])) {
						unlink($row2['day14_path3']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

				if($row2['day14_path4'] != '') {
					if(file_exists($row2['day14_path4'])) {
						unlink($row2['day14_path4']);
					} else {	
						//echo $row2['thumb_path']."<br>";
						echo "not deleted 1"; exit(0);
					}
				}

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
		var day13_title			=	document.getElementById('day13_title');
        var day14_title			=	document.getElementById('day14_title');
		var day12_title			=	document.getElementById('day12_title');
		var action_find			=	document.getElementById('action');
		
		if(day1_title == '' && day2_title == '' && day3_title == '' && day4_title == '' && day5_title == '' && day6_title == '' && day7_title == '' && day8_title == '' && day9_title == '' && day10_title == '' && day11_title == '' && day12_title == '' && day13_title == '' && day14_title == '') {
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

		d.day4a_title.value								=	"";
		d.day4a_place.value								=	"";
		d.day4a_desc.value								=	"";
		d.day4a_path1.value								=	"";
		d.day4a_path2.value								=	"";
		d.day4a_path3.value								=	"";
		d.day4a_path4.value								=	"";

		d.day5_title.value								=	"";
		d.day5_place.value								=	"";
		d.day5_desc.value								=	"";
		d.day5_path1.value								=	"";
		d.day5_path2.value								=	"";
		d.day5_path3.value								=	"";
		d.day5_path4.value								=	"";
		d.day5_stay.value								=	"";

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
		d.day10_stay.value								=	"";

		d.day11_title.value								=	"";
		d.day11_place.value								=	"";
		d.day11_desc.value								=	"";
		d.day11_path1.value								=	"";
		d.day11_path2.value								=	"";
		d.day11_path3.value								=	"";
		d.day11_path4.value								=	"";
		d.day11_stay.value								=	"";
                
                d.day13_title.value								=	"";
		d.day13_place.value								=	"";
		d.day13_desc.value								=	"";
		d.day13_path1.value								=	"";
		d.day13_path2.value								=	"";
		d.day13_path3.value								=	"";
		d.day13_path4.value								=	"";
		d.day13_stay.value								=	"";
               
		d.day14_title.value								=	"";
		d.day14_place.value								=	"";
		d.day14_desc.value								=	"";
		d.day14_path1.value								=	"";
		d.day14_path2.value								=	"";
		d.day14_path3.value								=	"";
		d.day14_path4.value								=	"";
		d.day14_stay.value								=	"";

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
	function editDay(day_id,sri_id,day_name,day1_title,day2_title,day2_place,day2_desc,day2_path1,day2_path2,day2_path3,day2_path4,day2_stay,day3_title,day3_place,day3_desc,day3_path1,day3_path2,day3_path3,day3_path4,day3_stay,day4_title,day4_place,day4_desc,day4_path1,day4_path2,day4_path3,day4_path4,day4_stay,day4a_title,day4a_place,day4a_desc,day4a_path1,day4a_path2,day4a_path3,day4a_path4,day5_title,day5_place,day5_desc,day5_path1,day5_path2,day5_path3,day5_path4,day5_stay,day6_title,day6_place,day6_desc,day6_path1,day6_path2,day6_path3,day6_path4,day6_stay,day7_title,day7_place,day7_desc,day7_path1,day7_path2,day7_path3,day7_path4,day7_stay,day8_title,day8_place,day8_desc,day8_path1,day8_path2,day8_path3,day8_path4,day8_stay,day9_title,day9_place,day9_desc,day9_path1,day9_path2,day9_path3,day9_path4,day9_stay,day10_title,day10_place,day10_desc,day10_path1,day10_path2,day10_path3,day10_path4,day10_stay,day11_title,day11_place,day11_desc,day11_path1,day11_path2,day11_path3,day11_path4,day11_stay,day13_title,day13_place,day13_desc,day13_path1,day13_path2,day13_path3,day13_path4,day13_stay,day14_title,day14_place,day14_desc,day14_path1,day14_path2,day14_path3,day14_path4,day14_stay,day12_title,price_include,price_notinclude,day_status,day_insertedDate){
		d												=	document.day_form;
		d.day_id.value									=	day_id;
		d.sri_id.value									=	sri_id;

        d.day_name.value				=	day_name; //Day name
		d.day1_title.value								=	day1_title; //Day 1 Title Name
		d.day2_title.value								=	day2_title;//Day 2 Title Name
		d.day2_place.value								=	day2_place;//Day 2 Place
		d.day2_desc.value								=	day2_desc;//Day 2 Description
		d.day2_path1_hold.src							=	day2_path1;//Day 2 Image 1
		d.day2_path2_hold.src							=	day2_path2;//Day 2 Image 2
		d.day2_path3_hold.src							=	day2_path3;//Day 2 Image 3
		d.day2_path4_hold.src							=	day2_path4;//Day 2 Image 4
		d.day2_stay.value								=	day2_stay;//Day 2 Halt

		d.day3_title.value								=	day3_title;//Day 3 Title Name
		d.day3_place.value								=	day3_place;//Day 3 Place
		d.day3_desc.value								=	day3_desc;//Day 3 Description
		d.day3_path1_hold.src							=	day3_path1;//Day 3 Image 1
		d.day3_path2_hold.src							=	day3_path2;//Day 3 Image 2
		d.day3_path3_hold.src							=	day3_path3;//Day 3 Image 3
		d.day3_path4_hold.src							=	day3_path4;//Day 3 Image 4
		d.day3_stay.value								=	day3_stay;//Day 3 Halt

		d.day4_title.value								=	day4_title;//Day 4 Title Name
		d.day4_place.value								=	day4_place;//Day 4 Place
		d.day4_desc.value								=	day4_desc;//Day 4 Description
		d.day4_path1_hold.src							=	day4_path1;//Day 4 Image 1
		d.day4_path2_hold.src							=	day4_path2;//Day 4 Image 2
		d.day4_path3_hold.src							=	day4_path3;//Day 4 Image 3
		d.day4_path4_hold.src							=	day4_path4;//Day 4 Image 4
		d.day4_stay.value								=	day4_stay;//Day 4 Halt

		d.day4a_title.value								=	day4a_title;//Day 4 A Title Name
		d.day4a_place.value								=	day4a_place;//Day 4 A Place
		d.day4a_desc.value								=	day4a_desc;//Day 4 A Description
		d.day4a_path1_hold.src							=	day4a_path1;//Day 4 A Image 1
		d.day4a_path2_hold.src							=	day4a_path2;//Day 4 A Image 2
		d.day4a_path3_hold.src							=	day4a_path3;//Day 4 A Image 3
		d.day4a_path4_hold.src							=	day4a_path4;//Day 4 A Image 4
		
		d.day5_title.value								=	day5_title;//Day 5 Title Name
		d.day5_place.value								=	day5_place;//Day 5 Place 1
		d.day5_desc.value								=	day5_desc;//Day 5 Description 1
		d.day5_path1_hold.src							=	day5_path1;//Day 5 Image 1
		d.day5_path2_hold.src							=	day5_path2;//Day 5 Image 2
		d.day5_path3_hold.src							=	day5_path3;//Day 5 Image 3
		d.day5_path4_hold.src							=	day5_path4;//Day 5 Image 4
		d.day5_stay.value								=	day5_stay;//Day 5 Halt

		d.day6_title.value								=	day6_title;//Day 6 Title Name
		d.day6_place.value								=	day6_place;//Day 6 Place
		d.day6_desc.value								=	day6_desc;//Day 6 Description
		d.day6_path1_hold.src							=	day6_path1;//Day 6 Image 1
		d.day6_path2_hold.src							=	day6_path2;//Day 6 Image 2
		d.day6_path3_hold.src							=	day6_path3;//Day 6 Image 3
		d.day6_path4_hold.src							=	day6_path4;//Day 6 Image 4
		d.day6_stay.value								=	day6_stay;//Day 6 Halt

		d.day7_title.value								=	day7_title;//Day 7 Title Name
		d.day7_place.value								=	day7_place;//Day 7 Place
		d.day7_desc.value								=	day7_desc;//Day 7 Description
		d.day7_path1_hold.src							=	day7_path1;//Day 7 Image 1
		d.day7_path2_hold.src							=	day7_path2;//Day 7 Image 2
		d.day7_path3_hold.src							=	day7_path3;//Day 7 Image 3
		d.day7_path4_hold.src							=	day7_path4;//Day 7 Image 4
		d.day7_stay.value								=	day7_stay;//Day 7 Halt

		d.day8_title.value								=	day8_title;//Day 8 Title Name
		d.day8_place.value								=	day8_place;//Day 8 Place
		d.day8_desc.value								=	day8_desc;//Day 8 Description
		d.day8_path1_hold.src							=	day8_path1;//Day 8 Image 1
		d.day8_path2_hold.src							=	day8_path2;//Day 8 Image 2
		d.day8_path3_hold.src							=	day8_path3;//Day 8 Image 3
		d.day8_path4_hold.src							=	day8_path4;//Day 8 Image 4
		d.day8_stay.value								=	day8_stay;//Day 8 Halt

		d.day9_title.value								=	day9_title;//Day 9 Title Name
		d.day9_place.value								=	day9_place;//Day 9 Place
		d.day9_desc.value								=	day9_desc;//Day 9 Description
		d.day9_path1_hold.src							=	day9_path1;//Day 9 Image 1
		d.day9_path2_hold.src							=	day9_path2;//Day 9 Image 2
		d.day9_path3_hold.src							=	day9_path3;//Day 9 Image 3
		d.day9_path4_hold.src							=	day9_path4;//Day 9 Image 4
		d.day9_stay.value								=	day9_stay;//Day 9 Halt

		d.day10_title.value								=	day10_title;//Day 10 Title Name
		d.day10_place.value								=	day10_place;//Day 10 Place 1
		d.day10_desc.value								=	day10_desc;//Day 10 Description 1
		d.day10_path1_hold.src							=	day10_path1;//Day 10 Image 1
		d.day10_path2_hold.src							=	day10_path2;//Day 10 Image 2
		d.day10_path3_hold.src							=	day10_path3;//Day 10 Image 3
		d.day10_path4_hold.src							=	day10_path4;//Day 10 Image 4
		d.day10_stay.value								=	day10_stay;//Day 10 Halt

		d.day11_title.value								=	day11_title;//Day 11 Title Name
		d.day11_place.value								=	day11_place;//Day 11 Place
		d.day11_desc.value								=	day11_desc;//Day 11 Description
		d.day11_path1_hold.src							=	day11_path1;//Day 11 Image 1
		d.day11_path2_hold.src							=	day11_path2;//Day 11 Image 2
		d.day11_path3_hold.src							=	day11_path3;//Day 11 Image 3
		d.day11_path4_hold.src							=	day11_path4;//Day 11 Image 4
		d.day11_stay.value								=	day11_stay;//Day 11 Halt
                
                d.day13_title.value								=	day13_title;//Day 13 Title Name
		d.day13_place.value								=	day13_place;//Day 13 Place
		d.day13_desc.value								=	day13_desc;//Day 13 Description
		d.day13_path1_hold.src							=	day13_path1;//Day 13 Image 1
		d.day13_path2_hold.src							=	day13_path2;//Day 13 Image 2
		d.day13_path3_hold.src							=	day13_path3;//Day 13 Image 3
		d.day13_path4_hold.src							=	day13_path4;//Day 13 Image 4
		d.day13_stay.value								=	day13_stay;//Day 13 Halt
                
                
                
                d.day14_title.value								=	day14_title;//Day 14 Title Name
		d.day14_place.value								=	day14_place;//Day 14 Place
		d.day14_desc.value								=	day14_desc;//Day 14 Description
		d.day14_path1_hold.src							=	day14_path1;//Day 14 Image 1
		d.day14_path2_hold.src							=	day14_path2;//Day 14 Image 2
		d.day14_path3_hold.src							=	day14_path3;//Day 14 Image 3
		d.day14_path4_hold.src							=	day14_path4;//Day 14 Image 4
		d.day14_stay.value								=	day14_stay;//Day 11 Halt
                
                

		d.day12_title.value								=	day12_title;//Day 12 Title Name

		d.day_status.value								=	day_status;//Day Status
		d.price_include.value							=	price_include;//Price Included
		d.price_notinclude.value						=	price_notinclude;//Price Not Included

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

				<?php echo $selectCount1	=	"SELECT sri_name,sri_id FROM ".TABLE_SRI." ORDER BY sri_name";
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
					
					<?php //exit(0); ?>
					
					
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
						<input name="day2_path1" id="day2_path1" class="text-long"  type="file" /><img src='' id='day2_path1_hold' name='day2_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 2</label>:&nbsp;&nbsp;
						<input name="day2_path2" id="day2_path2" class="text-long"  type="file" /><img src='' id='day2_path2_hold' name='day2_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 3</label>:&nbsp;&nbsp;
						<input name="day2_path3" id="day2_path3" class="text-long"  type="file" /><img src='' id='day2_path3_hold' name='day2_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day2_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 2 Image 4</label>:&nbsp;&nbsp;
						<input name="day2_path4" id="day2_path4" class="text-long"  type="file" /><img src='' id='day2_path4_hold' name='day2_path4_hold' height='50' width='50' />
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
						<input name="day3_path1" id="day3_path1" class="text-long"  type="file" /><img src='' id='day3_path1_hold' name='day3_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 2</label>:&nbsp;&nbsp;
						<input name="day3_path2" id="day3_path2" class="text-long"  type="file" /><img src='' id='day3_path2_hold' name='day3_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 3</label>:&nbsp;&nbsp;
						<input name="day3_path3" id="day3_path3" class="text-long"  type="file" /><img src='' id='day3_path3_hold' name='day3_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day3_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 3 Image 4</label>:&nbsp;&nbsp;
						<input name="day3_path4" id="day3_path4" class="text-long"  type="file" /><img src='' id='day3_path4_hold' name='day3_path4_hold' height='50' width='50' />
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
						<input name="day4_path1" id="day4_path1" class="text-long"  type="file" /><img src='' id='day4_path1_hold' name='day4_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 2</label>:&nbsp;&nbsp;
						<input name="day4_path2" id="day4_path2" class="text-long"  type="file" /><img src='' id='day4_path2_hold' name='day4_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 3</label>:&nbsp;&nbsp;
						<input name="day4_path3" id="day4_path3" class="text-long"  type="file" /><img src='' id='day4_path3_hold' name='day4_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Image 4</label>:&nbsp;&nbsp;
						<input name="day4_path4" id="day4_path4" class="text-long"  type="file" /><img src='' id='day4_path4_hold' name='day4_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4_path4Span' class='backvalid'></span>
					</p>

					
					
					<p>
						<label style="padding-right:20px;">Day 4 Another Title</label>:&nbsp;&nbsp;
						<textarea name="day4a_title" id="day4a_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day4a_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Another Place</label>:&nbsp;&nbsp;
						<input name="day4a_place" id="day4a_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day4a_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Another Description</label>:&nbsp;&nbsp;
						<textarea name="day4a_desc" id="day4a_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day4a_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 4 Another Image 1</label>:&nbsp;&nbsp;
						<input name="day4a_path1" id="day4a_path1" class="text-long"  type="file" /><img src='' id='day4a_path1_hold' name='day4a_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4a_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Another Image 2</label>:&nbsp;&nbsp;
						<input name="day4a_path2" id="day4a_path2" class="text-long"  type="file" /><img src='' id='day4a_path2_hold' name='day4a_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4a_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Another Image 3</label>:&nbsp;&nbsp;
						<input name="day4a_path3" id="day4a_path3" class="text-long"  type="file" /><img src='' id='day4a_path3_hold' name='day4a_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4a_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 4 Another Image 4</label>:&nbsp;&nbsp;
						<input name="day4a_path4" id="day4a_path4" class="text-long"  type="file" /><img src='' id='day4a_path4_hold' name='day4a_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day4a_path4Span' class='backvalid'></span>
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
						<input name="day5_path1" id="day5_path1" class="text-long"  type="file" /><img src='' id='day5_path1_hold' name='day5_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 2</label>:&nbsp;&nbsp;
						<input name="day5_path2" id="day5_path2" class="text-long"  type="file" /><img src='' id='day5_path2_hold' name='day5_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 3</label>:&nbsp;&nbsp;
						<input name="day5_path3" id="day5_path3" class="text-long"  type="file" /><img src='' id='day5_path3_hold' name='day5_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 5 Image 4</label>:&nbsp;&nbsp;
						<input name="day5_path4" id="day5_path4" class="text-long"  type="file" /><img src='' id='day5_path4_hold' name='day5_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day5_path4Span' class='backvalid'></span>
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
						<input name="day6_path1" id="day6_path1" class="text-long"  type="file" /><img src='' id='day6_path1_hold' name='day6_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 2</label>:&nbsp;&nbsp;
						<input name="day6_path2" id="day6_path2" class="text-long"  type="file" /><img src='' id='day6_path2_hold' name='day6_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 3</label>:&nbsp;&nbsp;
						<input name="day6_path3" id="day6_path3" class="text-long"  type="file" /><img src='' id='day6_path3_hold' name='day6_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day6_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 6 Image 4</label>:&nbsp;&nbsp;
						<input name="day6_path4" id="day6_path4" class="text-long"  type="file" /><img src='' id='day6_path4_hold' name='day6_path4_hold' height='50' width='50' />
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
						<input name="day7_path1" id="day7_path1" class="text-long"  type="file" /><img src='' id='day7_path1_hold' name='day7_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 2</label>:&nbsp;&nbsp;
						<input name="day7_path2" id="day7_path2" class="text-long"  type="file" /><img src='' id='day7_path2_hold' name='day7_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 3</label>:&nbsp;&nbsp;
						<input name="day7_path3" id="day7_path3" class="text-long"  type="file" /><img src='' id='day7_path3_hold' name='day7_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day7_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 7 Image 4</label>:&nbsp;&nbsp;
						<input name="day7_path4" id="day7_path4" class="text-long"  type="file" /><img src='' id='day7_path4_hold' name='day7_path4_hold' height='50' width='50' />
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
						<input name="day8_path1" id="day8_path1" class="text-long"  type="file" /><img src='' id='day8_path1_hold' name='day8_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 2</label>:&nbsp;&nbsp;
						<input name="day8_path2" id="day8_path2" class="text-long"  type="file" /><img src='' id='day8_path2_hold' name='day8_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 3</label>:&nbsp;&nbsp;
						<input name="day8_path3" id="day8_path3" class="text-long"  type="file" /><img src='' id='day8_path3_hold' name='day8_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day8_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 8 Image 4</label>:&nbsp;&nbsp;
						<input name="day8_path4" id="day8_path4" class="text-long"  type="file" /><img src='' id='day8_path4_hold' name='day8_path4_hold' height='50' width='50' />
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
						<input name="day9_path1" id="day9_path1" class="text-long"  type="file" /><img src='' id='day9_path1_hold' name='day9_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 2</label>:&nbsp;&nbsp;
						<input name="day9_path2" id="day9_path2" class="text-long"  type="file" /><img src='' id='day9_path2_hold' name='day9_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 3</label>:&nbsp;&nbsp;
						<input name="day9_path3" id="day9_path3" class="text-long"  type="file" /><img src='' id='day9_path3_hold' name='day9_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day9_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 9 Image 4</label>:&nbsp;&nbsp;
						<input name="day9_path4" id="day9_path4" class="text-long"  type="file" /><img src='' id='day9_path4_hold' name='day9_path4_hold' height='50' width='50' />
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
						<input name="day10_path1" id="day10_path1" class="text-long"  type="file" /><img src='' id='day10_path1_hold' name='day10_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 2</label>:&nbsp;&nbsp;
						<input name="day10_path2" id="day10_path2" class="text-long"  type="file" /><img src='' id='day10_path2_hold' name='day10_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 3</label>:&nbsp;&nbsp;
						<input name="day10_path3" id="day10_path3" class="text-long"  type="file" /><img src='' id='day10_path3_hold' name='day10_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 10 Image 4</label>:&nbsp;&nbsp;
						<input name="day10_path4" id="day10_path4" class="text-long"  type="file" /><img src='' id='day10_path4_hold' name='day10_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day10_path4Span' class='backvalid'></span>
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
						<input name="day11_path1" id="day11_path1" class="text-long"  type="file" /><img src='' id='day11_path1_hold' name='day11_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 2</label>:&nbsp;&nbsp;
						<input name="day11_path2" id="day11_path2" class="text-long"  type="file" /><img src='' id='day11_path2_hold' name='day11_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 3</label>:&nbsp;&nbsp;
						<input name="day11_path3" id="day11_path3" class="text-long"  type="file" /><img src='' id='day11_path3_hold' name='day11_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day11_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 11 Image 4</label>:&nbsp;&nbsp;
						<input name="day11_path4" id="day11_path4" class="text-long"  type="file" /><img src='' id='day11_path4_hold' name='day11_path4_hold' height='50' width='50' />
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
						<textarea name="day13_title" id="day13_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day13_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Place</label>:&nbsp;&nbsp;
						<input name="day13_place" id="day13_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day13_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Description</label>:&nbsp;&nbsp;
						<textarea name="day13_desc" id="day13_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day13_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 12 Image 1</label>:&nbsp;&nbsp;
						<input name="day13_path1" id="day13_path1" class="text-long"  type="file" /><img src='' id='day13_path1_hold' name='day13_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day13_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Image 2</label>:&nbsp;&nbsp;
						<input name="day13_path2" id="day13_path2" class="text-long"  type="file" /><img src='' id='day13_path2_hold' name='day13_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day13_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Image 3</label>:&nbsp;&nbsp;
						<input name="day13_path3" id="day13_path3" class="text-long"  type="file" /><img src='' id='day13_path3_hold' name='day13_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day13_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Image 4</label>:&nbsp;&nbsp;
						<input name="day13_path4" id="day13_path4" class="text-long"  type="file" /><img src='' id='day13_path4_hold' name='day13_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day13_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 12 Stay</label>:&nbsp;&nbsp;
						<input name="day13_stay" id="day13_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day13_staySpan' class='backvalid'></span>
					</p>
                                        
                                        
                                        
                                        <p>
						<label style="padding-right:20px;">Day 13 Title</label>:&nbsp;&nbsp;
						<textarea name="day14_title" id="day14_title" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day14_titleSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Place</label>:&nbsp;&nbsp;
						<input name="day14_place" id="day14_place" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day14_placeSpan' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Description</label>:&nbsp;&nbsp;
						<textarea name="day14_desc" id="day14_desc" class="text-long"  ></textarea>
					</p>
					<p>
						<span id='day14_descSpan' class='backvalid'></span>
					</p>
					
					<p>
						<label style="padding-right:20px;">Day 13 Image 1</label>:&nbsp;&nbsp;
						<input name="day14_path1" id="day14_path1" class="text-long"  type="file" /><img src='' id='day14_path1_hold' name='day14_path1_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day14_path1Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Image 2</label>:&nbsp;&nbsp;
						<input name="day14_path2" id="day14_path2" class="text-long"  type="file" /><img src='' id='day14_path2_hold' name='day14_path2_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day14_path2Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Image 3</label>:&nbsp;&nbsp;
						<input name="day14_path3" id="day14_path3" class="text-long"  type="file" /><img src='' id='day14_path3_hold' name='day14_path3_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day14_path3Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Image 4</label>:&nbsp;&nbsp;
						<input name="day14_path4" id="day14_path4" class="text-long"  type="file" /><img src='' id='day14_path4_hold' name='day14_path4_hold' height='50' width='50' />
					</p>
					<p>
						<span id='day14_path4Span' class='backvalid'></span>
					</p>

					<p>
						<label style="padding-right:20px;">Day 13 Stay</label>:&nbsp;&nbsp;
						<input name="day14_stay" id="day14_stay" class="text-long"  type="text" />
					</p>
					<p>
						<span id='day14_staySpan' class='backvalid'></span>
					</p>





					<p>
						<label style="padding-right:20px;">Day 14 Title</label>:&nbsp;&nbsp;
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
		<div class="add_link"><a href="javascript:void(0);" onclick="newDay();return false;" class="button-submit">New Days</a></div>
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
				<th>Edit/Delete</th>
			</tr>
			<?php 
			
			$result = SingleTon::selectQuery("day_id,sri_id,day_name,day1_title,day2_title,day2_place,day2_desc,day2_path1,day2_path2,day2_path3,day2_path4,day2_stay,day3_title,day3_place,day3_desc,day3_path1,day3_path2,day3_path3,day3_path4,day3_stay,day4_title,day4_place,day4_desc,day4_path1,day4_path2,day4_path3,day4_path4,day4_stay,day4a_title,day4a_place,day4a_desc,day4a_path1,day4a_path2,day4a_path3,day4a_path4,day5_title,day5_place,day5_desc,day5_path1,day5_path2,day5_path3,day5_path4,  day5_stay,day6_title,day6_place,day6_desc,day6_path1,day6_path2,day6_path3,day6_path4,day6_stay,day7_title,day7_place,day7_desc,day7_path1,day7_path2,day7_path3,day7_path4,day7_stay,day8_title,day8_place,day8_desc,day8_path1,day8_path2,day8_path3,day8_path4,day8_stay,day9_title,day9_place,day9_desc,day9_path1,day9_path2,day9_path3,day9_path4,day9_stay,day10_title,day10_place,day10_desc,day10_path1,day10_path2,day10_path3,day10_path4,day10_stay,day11_title,day11_place,day11_desc,day11_path1,day11_path2,day11_path3,day11_path4,day11_stay,day13_title,day13_place,day13_desc,day13_path1,day13_path2,day13_path3,day13_path4,day13_stay,day14_title,day14_place,day14_desc,day14_path1,day14_path2,day14_path3,day14_path4,day14_stay,day12_title,price_include,price_notinclude,day_status","ORDER BY day_id DESC",TABLE_DAY,MY_ASSOC,NOR_YES);

			//SingleTon::debugerr($result);

			$row_count = 0;
			$num_rows = $result[0];
			
			//exit(0);

			if($num_rows > 0) {

				foreach($result[1] as $result){
					
					$sri_id					=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["sri_id"]);
					$day_id					=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day_id"]);
					$day_name				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day_name"]);
					$day1_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day1_title"]);
					$day2_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_title"]);
					$day2_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_place"]);
					$day2_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_desc"]);
					$day2_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_path1"]);
					$day2_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_path2"]);
					$day2_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_path3"]);
					$day2_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_path4"]);
					$day2_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day2_stay"]);
					$day3_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_title"]);
					$day3_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_place"]);
					$day3_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_desc"]);
					$day3_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_path1"]);
					$day3_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_path2"]);
					$day3_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_path3"]);
					$day3_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_path4"]);
					$day3_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day3_stay"]);	
					
					$day4_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_title"]);
					$day4_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_place"]);
					$day4_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_desc"]);
					$day4_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_path1"]);
					$day4_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_path2"]);
					$day4_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_path3"]);
					$day4_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_path4"]);
					$day4_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4_stay"]);
					
					$day4a_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_title"]);
					$day4a_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_place"]);
					$day4a_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_desc"]);
					$day4a_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_path1"]);
					$day4a_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_path2"]);
					$day4a_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_path3"]);
					$day4a_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day4a_path4"]);

					$day5_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_title"]);
					$day5_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_place"]);
					$day5_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_desc"]);
					$day5_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_path1"]);
					$day5_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_path2"]);
					$day5_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_path3"]);
					$day5_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_path4"]);
					$day5_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day5_stay"]);
					$day6_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_title"]);
					$day6_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_place"]);
					$day6_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_desc"]);
					$day6_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_path1"]);
					$day6_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_path2"]);
					$day6_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_path3"]);
					$day6_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_path4"]);
					$day6_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day6_stay"]);
					$day7_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_title"]);
					$day7_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_place"]);
					$day7_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_desc"]);
					$day7_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_path1"]);
					$day7_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_path2"]);
					$day7_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_path3"]);
					$day7_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_path4"]);
					$day7_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day7_stay"]);
					$day8_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_title"]);
					$day8_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_place"]);
					$day8_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_desc"]);
					$day8_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_path1"]);
					$day8_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_path2"]);
					$day8_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_path3"]);
					$day8_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_path4"]);
					$day8_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day8_stay"]);
					$day9_title				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_title"]);
					$day9_place				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_place"]);
					$day9_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_desc"]);
					$day9_path1				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_path1"]);
					$day9_path2				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_path2"]);
					$day9_path3				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_path3"]);
					$day9_path4				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_path4"]);
					$day9_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day9_stay"]);
					$day10_title			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_title"]);
					$day10_place			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_place"]);
					$day10_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_desc"]);
					$day10_path1			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_path1"]);
					$day10_path2			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_path2"]);
					$day10_path3			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_path3"]);
					$day10_path4			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_path4"]);
					$day10_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day10_stay"]);
					$day11_title			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_title"]);
					$day11_place			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_place"]);
					$day11_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_desc"]);
					$day11_path1			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_path1"]);
					$day11_path2			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_path2"]);
					$day11_path3			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_path3"]);
					$day11_path4			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_path4"]);
					$day11_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day11_stay"]);
                                        
					$day13_title			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_title"]);
					$day13_place			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_place"]);
					$day13_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_desc"]);
					$day13_path1			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_path1"]);
					$day13_path2			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_path2"]);
					$day13_path3			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_path3"]);
					$day13_path4			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_path4"]);
					$day13_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day13_stay"]);
                                        
					$day14_title			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_title"]);
					$day14_place			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_place"]);
					$day14_desc				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_desc"]);
					$day14_path1			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_path1"]);
					$day14_path2			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_path2"]);
					$day14_path3			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_path3"]);
					$day14_path4			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_path4"]);
					$day14_stay				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day14_stay"]);
                                        
					$day12_title			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day12_title"]);
					$day_status				=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["day_status"]);
					$price_include			=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["price_include"]);
					$price_notinclude		=	str_replace(array("\r", "\n", "<br>","<br />","<br/>","</br>","</ br>"), '', $result["price_notinclude"]);
					
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

				<div style="display:none;" id="day4a_title-<?php echo $day_id; ?>"><?php echo $day4a_title;?></div>
				<div style="display:none;" id="day4a_place-<?php echo $day_id; ?>"><?php echo $day4a_place; ?></div>
				<div style="display:none;" id="day4a_desc-<?php echo $day_id; ?>"><?php echo $day4a_desc; ?></div>
				<div style="display:none;" id="day4a_path1-<?php echo $day_id; ?>"><?php echo $day4a_path1; ?></div>
				<div style="display:none;" id="day4a_path2-<?php echo $day_id; ?>"><?php echo $day4a_path2; ?></div>
				<div style="display:none;" id="day4a_path3-<?php echo $day_id; ?>"><?php echo $day4a_path3; ?></div>
				<div style="display:none;" id="day4a_path4-<?php echo $day_id; ?>"><?php echo $day4a_path4; ?></div>

				<div style="display:none;" id="day5_title-<?php echo $day_id; ?>"><?php echo $day5_title;?></div>
				<div style="display:none;" id="day5_place-<?php echo $day_id; ?>"><?php echo $day5_place; ?></div>
				<div style="display:none;" id="day5_desc-<?php echo $day_id; ?>"><?php echo $day5_desc; ?></div>
				<div style="display:none;" id="day5_path1-<?php echo $day_id; ?>"><?php echo $day5_path1; ?></div>
				<div style="display:none;" id="day5_path2-<?php echo $day_id; ?>"><?php echo $day5_path2; ?></div>
				<div style="display:none;" id="day5_path3-<?php echo $day_id; ?>"><?php echo $day5_path3; ?></div>
				<div style="display:none;" id="day5_path4-<?php echo $day_id; ?>"><?php echo $day5_path4; ?></div>
				<div style="display:none;" id="day5_stay-<?php echo $day_id; ?>"><?php echo $day5_stay; ?></div>

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

				<div style="display:none;" id="day11_title-<?php echo $day_id; ?>"><?php echo $day11_title;?></div>
				<div style="display:none;" id="day11_place-<?php echo $day_id; ?>"><?php echo $day11_place; ?></div>
				<div style="display:none;" id="day11_desc-<?php echo $day_id; ?>"><?php echo $day11_desc; ?></div>
				<div style="display:none;" id="day11_path1-<?php echo $day_id; ?>"><?php echo $day11_path1; ?></div>
				<div style="display:none;" id="day11_path2-<?php echo $day_id; ?>"><?php echo $day11_path2; ?></div>
				<div style="display:none;" id="day11_path3-<?php echo $day_id; ?>"><?php echo $day11_path3; ?></div>
				<div style="display:none;" id="day11_path4-<?php echo $day_id; ?>"><?php echo $day11_path4; ?></div>
				<div style="display:none;" id="day11_stay-<?php echo $day_id; ?>"><?php echo $day11_stay; ?></div>
                                
                                <div style="display:none;" id="day13_title-<?php echo $day_id; ?>"><?php echo $day13_title;?></div>
				<div style="display:none;" id="day13_place-<?php echo $day_id; ?>"><?php echo $day13_place; ?></div>
				<div style="display:none;" id="day13_desc-<?php echo $day_id; ?>"><?php echo $day13_desc; ?></div>
				<div style="display:none;" id="day13_path1-<?php echo $day_id; ?>"><?php echo $day13_path1; ?></div>
				<div style="display:none;" id="day13_path2-<?php echo $day_id; ?>"><?php echo $day13_path2; ?></div>
				<div style="display:none;" id="day13_path3-<?php echo $day_id; ?>"><?php echo $day13_path3; ?></div>
				<div style="display:none;" id="day13_path4-<?php echo $day_id; ?>"><?php echo $day13_path4; ?></div>
				<div style="display:none;" id="day13_stay-<?php echo $day_id; ?>"><?php echo $day13_stay; ?></div>
                                
                                <div style="display:none;" id="day14_title-<?php echo $day_id; ?>"><?php echo $day14_title;?></div>
				<div style="display:none;" id="day14_place-<?php echo $day_id; ?>"><?php echo $day14_place; ?></div>
				<div style="display:none;" id="day14_desc-<?php echo $day_id; ?>"><?php echo $day14_desc; ?></div>
				<div style="display:none;" id="day14_path1-<?php echo $day_id; ?>"><?php echo $day14_path1; ?></div>
				<div style="display:none;" id="day14_path2-<?php echo $day_id; ?>"><?php echo $day14_path2; ?></div>
				<div style="display:none;" id="day14_path3-<?php echo $day_id; ?>"><?php echo $day14_path3; ?></div>
				<div style="display:none;" id="day14_path4-<?php echo $day_id; ?>"><?php echo $day14_path4; ?></div>
				<div style="display:none;" id="day14_stay-<?php echo $day_id; ?>"><?php echo $day14_stay; ?></div>

				<div style="display:none;" id="day12_title-<?php echo $day_id; ?>"><?php echo $day12_title;?></div>

				<div style="display:none;" id="price_include-<?php echo $day_id; ?>"><?php echo $price_include; ?></div>
				<div style="display:none;" id="price_notinclude-<?php echo $day_id; ?>"><?php echo $price_notinclude; ?></div>

				<div style="display:none;" id="day_status-<?php echo $day_id; ?>"><?php echo $day_status; ?></div></td>

				<td class="action">
					&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick='editDay("<?php echo $day_id; ?>","<?php echo $sri_id; ?>","<?php echo $day_name; ?>","<?php echo $day1_title; ?>","<?php echo $day2_title; ?>","<?php echo $day2_place; ?>","<?php echo $day2_desc; ?>","<?php echo $day2_path1; ?>","<?php echo $day2_path2; ?>","<?php echo $day2_path3; ?>","<?php echo $day2_path4; ?>","<?php echo $day2_stay; ?>","<?php echo $day3_title; ?>","<?php echo $day3_place; ?>","<?php echo $day3_desc; ?>","<?php echo $day3_path1; ?>","<?php echo $day3_path2; ?>","<?php echo $day3_path3; ?>","<?php echo $day3_path4; ?>","<?php echo $day3_stay; ?>","<?php echo $day4_title; ?>","<?php echo $day4_place; ?>","<?php echo $day4_desc; ?>","<?php echo $day4_path1; ?>","<?php echo $day4_path2; ?>","<?php echo $day4_path3; ?>","<?php echo $day4_path4; ?>","<?php echo $day4_stay; ?>","<?php echo $day4a_title; ?>","<?php echo $day4a_place; ?>","<?php echo $day4a_desc; ?>","<?php echo $day4a_path1; ?>","<?php echo $day4a_path2; ?>","<?php echo $day4a_path3; ?>","<?php echo $day4a_path4; ?>","<?php echo $day5_title; ?>","<?php echo $day5_place; ?>","<?php echo $day5_desc; ?>","<?php echo $day5_path1; ?>","<?php echo $day5_path2; ?>","<?php echo $day5_path3; ?>","<?php echo $day5_path4; ?>","<?php echo $day5_stay; ?>","<?php echo $day6_title; ?>","<?php echo $day6_place; ?>","<?php echo $day6_desc; ?>","<?php echo $day6_path1; ?>","<?php echo $day6_path2; ?>","<?php echo $day6_path3; ?>","<?php echo $day6_path4; ?>","<?php echo $day6_stay; ?>","<?php echo $day7_title; ?>","<?php echo $day7_place; ?>","<?php echo $day7_desc; ?>","<?php echo $day7_path1; ?>","<?php echo $day7_path2; ?>","<?php echo $day7_path3; ?>","<?php echo $day7_path4; ?>","<?php echo $day7_stay; ?>","<?php echo $day8_title; ?>","<?php echo $day8_place; ?>","<?php echo $day8_desc; ?>","<?php echo $day8_path1; ?>","<?php echo $day8_path2; ?>","<?php echo $day8_path3; ?>","<?php echo $day8_path4; ?>","<?php echo $day8_stay; ?>","<?php echo $day9_title; ?>","<?php echo $day9_place; ?>","<?php echo $day9_desc; ?>","<?php echo $day9_path1; ?>","<?php echo $day9_path2; ?>","<?php echo $day9_path3; ?>","<?php echo $day9_path4; ?>","<?php echo $day9_stay; ?>","<?php echo $day10_title; ?>","<?php echo $day10_place; ?>","<?php echo $day10_desc; ?>","<?php echo $day10_path1; ?>","<?php echo $day10_path2; ?>","<?php echo $day10_path3; ?>","<?php echo $day10_path4; ?>","<?php echo $day10_stay; ?>","<?php echo $day11_title; ?>","<?php echo $day11_place; ?>","<?php echo $day11_desc; ?>","<?php echo $day11_path1; ?>","<?php echo $day11_path2; ?>","<?php echo $day11_path3; ?>","<?php echo $day11_path4; ?>","<?php echo $day11_stay; ?>","<?php echo $day13_title; ?>","<?php echo $day13_place; ?>","<?php echo $day13_desc; ?>","<?php echo $day13_path1; ?>","<?php echo $day13_path2; ?>","<?php echo $day13_path3; ?>","<?php echo $day13_path4; ?>","<?php echo $day13_stay; ?>","<?php echo $day14_title; ?>","<?php echo $day14_place; ?>","<?php echo $day14_desc; ?>","<?php echo $day14_path1; ?>","<?php echo $day14_path2; ?>","<?php echo $day14_path3; ?>","<?php echo $day14_path4; ?>","<?php echo $day14_stay; ?>","<?php echo $day12_title; ?>","<?php echo $price_include; ?>","<?php echo $price_notinclude; ?>","<?php echo $day_status; ?>"); return false;'><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/edit.png" /></a> 
					| <a href="javascript:void(0);" onclick="deleteDay('<?php echo $day_id; ?>');return false;" ><img border='0' src="<?php echo RELATIVE_PATH; ?>/images/del.gif" /></a>				
				</td>
			</tr>
			<?php } } else { ?>
				<tr <?php echo $row_class; ?>>      
				<td colspan='13' align='center'>No Results Found</td>
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