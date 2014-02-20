<?php
	ini_set("display_errors","true");
	ini_set("max_execution_time","18000");

	define('ROOT_DIRECTORY', 'controlend');

	//LOCAL DATABASE CONNECTION
	define('DBNAME', 'swisstravels');                       //DATABASE NAME
	define('DBUSERNAME', 'swisstravels');                           //DATABASE USERNAME
	define('DBPASS', 'Mail1234');                                   //DATABASE PASSWORD
	define('SERVERNAME', 'mysql1057.servage.net:3306');                      //SERVER NAME
	

	define('TABLE_ADMIN_USERS', 'admin_users');				//ADMIN TABLE NAME
	define('TABLE_PLAN', 'tour_plan');						//TOUR TABLE NAME
	define('TABLE_FLIGHT', 'flight_prices');						//TOUR TABLE NAME
	define('TABLE_SRI', 'sri_plan');						//SRILANKA TOUR TABLE NAME
	define('TABLE_DAY', 'sri_days');						//SRILANKA TOUR TABLE NAME
	
	if(ROOT_DIRECTORY != '') {
		$absolutepath = $_SERVER['DOCUMENT_ROOT'].ROOT_DIRECTORY.'/';
		$relativepath = 'http://'.$_SERVER['HTTP_HOST'].'/'.ROOT_DIRECTORY;
	} else {
		$absolutepath = $_SERVER['DOCUMENT_ROOT'].'/';
		$relativepath = 'http://'.$_SERVER['HTTP_HOST'].'/';
	}
	
	define('ABSOLUTE_PATH', $absolutepath);
	define('RELATIVE_PATH', $relativepath);
	define('ENG_LANG', 'English');
	define('GER_LANG', 'Germany');
	define('ADMIN_TITLE', 'ADMINISTRATION PANEL');
	define('THUMB_PATH_INFO', 'thumb_path/');
	define('THUMB_PATH_INFO1', 'thumb_path1/');
	define('THUMB_PATH_INFO2', 'thumb_path2/');
	define('SRI_PATH_INFO', 'sri_path/');
	define('SRI_PATH_INFO1', 'sri_path1/');
	define('SRI_PATH_INFO2', 'sri_path2/');
	
	define('DAY2_PATH1', 'day2_path1/');
	define('DAY2_PATH2', 'day2_path2/');
	define('DAY2_PATH3', 'day2_path3/');
	define('DAY2_PATH4', 'day2_path4/');

	define('DAY3_PATH1', 'day3_path1/');
	define('DAY3_PATH2', 'day3_path2/');
	define('DAY3_PATH3', 'day3_path3/');
	define('DAY3_PATH4', 'day3_path4/');
	
	define('DAY4_PATH1', 'day4_path1/');
	define('DAY4_PATH2', 'day4_path2/');
	define('DAY4_PATH3', 'day4_path3/');
	define('DAY4_PATH4', 'day4_path4/');

	define('DAY5_PATH1', 'day5_path1/');
	define('DAY5_PATH2', 'day5_path2/');
	define('DAY5_PATH3', 'day5_path3/');
	define('DAY5_PATH4', 'day5_path4/');
	define('DAY5_PATH5', 'day5_path5/');
	define('DAY5_PATH6', 'day5_path6/');
	define('DAY5_PATH7', 'day5_path7/');
	define('DAY5_PATH8', 'day5_path8/');

	define('DAY6_PATH1', 'day6_path1/');
	define('DAY6_PATH2', 'day6_path2/');
	define('DAY6_PATH3', 'day6_path3/');
	define('DAY6_PATH4', 'day6_path4/');

	define('DAY7_PATH1', 'day7_path1/');
	define('DAY7_PATH2', 'day7_path2/');
	define('DAY7_PATH3', 'day7_path3/');
	define('DAY7_PATH4', 'day7_path4/');

	define('DAY8_PATH1', 'day8_path1/');
	define('DAY8_PATH2', 'day8_path2/');
	define('DAY8_PATH3', 'day8_path3/');
	define('DAY8_PATH4', 'day8_path4/');

	define('DAY9_PATH1', 'day9_path1/');
	define('DAY9_PATH2', 'day9_path2/');
	define('DAY9_PATH3', 'day9_path3/');
	define('DAY9_PATH4', 'day9_path4/');

	define('DAY10_PATH1', 'day10_path1/');
	define('DAY10_PATH2', 'day10_path2/');
	define('DAY10_PATH3', 'day10_path3/');
	define('DAY10_PATH4', 'day10_path4/');
	define('DAY10_PATH5', 'day10_path5/');
	define('DAY10_PATH6', 'day10_path6/');
	define('DAY10_PATH7', 'day10_path7/');
	define('DAY10_PATH8', 'day10_path8/');

	define('DAY11_PATH1', 'day11_path1/');
	define('DAY11_PATH2', 'day11_path2/');
	define('DAY11_PATH3', 'day11_path3/');
	define('DAY11_PATH4', 'day11_path4/');

	define('MY_ASSOC', MYSQL_ASSOC);
	define('MY_NUM', MYSQL_NUM);
	define('MY_BOTH', MYSQL_BOTH);
	define('NOR_YES', TRUE);
	define('NOR_NO', FALSE);
?>