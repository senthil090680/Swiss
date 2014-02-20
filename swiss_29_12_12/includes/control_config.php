<?php
	ini_set("display_errors","true");
	ini_set("max_execution_time","18000");

	define('ROOT_DIRECTORY', '');

	//LOCAL DATABASE CONNECTION
	define('DBNAME', 'swisstravels');                       //DATABASE NAME
	define('DBUSERNAME', 'swisstravels');                           //DATABASE USERNAME
	define('DBPASS', 'Mail1234');                                   //DATABASE PASSWORD
	define('SERVERNAME', 'mysql1057.servage.net:3306');                      //SERVER NAME
	

	define('TABLE_ADMIN_USERS', 'admin_users');				//ADMIN TABLE NAME
	define('TABLE_PLAN', 'tour_plan');						//TOUR PLAN TABLE NAME
	define('TABLE_TOUR_ENQUIRY', 'tour_enquiry');			//TOUR ENQUIRY TABLE NAME
	define('TABLE_FLIGHT', 'flight_prices');				//FLIGHT TABLE NAME
	define('TABLE_SRI', 'sri_plan');				// SRI TOUR TABLE
	define('TABLE_DAY', 'sri_days');				// SRI DAY TABLE
	
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
	define('FRONT_THUMB_PATH', 'controlend/thumb_path/');
	define('FRONT_THUMB_PATH1', 'controlend/thumb_path1/');
	define('FRONT_THUMB_PATH2', 'controlend/thumb_path2/');
	define('MY_ASSOC', MYSQL_ASSOC);
	define('MY_NUM', MYSQL_NUM);
	define('MY_BOTH', MYSQL_BOTH);
	define('NOR_YES', TRUE);
	define('NOR_NO', FALSE);
	
?>