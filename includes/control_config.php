<?php
	ini_set("display_errors","true");
	ini_set("max_execution_time","18000");

	define('ROOT_DIRECTORY', '');

	//LOCAL DATABASE CONNECTION
	define('DBNAME', 'shopping_switrav');                       //DATABASE NAME
	define('DBUSERNAME', 'shopping_switrav');                           //DATABASE USERNAME
	define('DBPASS', 'senhari456');                                   //DATABASE PASSWORD
	define('SERVERNAME', '182.18.151.191:3306');                      //SERVER NAME
	

	define('TABLE_ADMIN_USERS', 'admin_users');				//ADMIN TABLE NAME
	define('TABLE_PLAN', 'tour_plan');						//TOUR PLAN TABLE NAME
	define('TABLE_TOUR_ENQUIRY', 'tour_enquiry');			//TOUR ENQUIRY TABLE NAME
	define('TABLE_FLIGHT', 'flight_prices');				//FLIGHT TABLE NAME
	define('TABLE_SRI', 'sri_plan');						// SRI TOUR TABLE
	define('TABLE_DAY', 'sri_days');						// SRI DAY TABLE
    define('TABLE_ISRL', 'isrl_plan');						// ISRAEL TOUR TABLE
	define('TABLE_COUNTRY', 'country_list');				// COUNTRY TABLE
        
	
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
	define('HOTEL_URL', 'http://www.swisstravels.ch/Hotel_display.php');
	define('EMAIL_ADMIN_SENDER', 'senthil_sang24@yahoo.co.in');
	define('EMAIL_ADMIN_RECEIVER', 'senthil_aya@yahoo.com,senthilsang24@gmail.com');
	
?>