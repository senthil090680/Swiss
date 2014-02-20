<?php
class SingleTon { //Singleton Class
	private static $sing_instance = NULL;
	private $startConstruct;
	private $queryAnnex = '';
	private $selQuery;
	private $conString;

	private function __construct($dbName,$dbUser,$dbPass,$serverName) {
		$conString	=	mysql_connect($serverName,$dbUser,$dbPass);
		if(!($conString)) {
			die("Connection could not be made ". mysql_error());
		}
		mysql_select_db($dbName,$conString);
	}
	
	public static function getInstance($dbName = '',$dbUser = '',$dbPass = '',$serverName = '') {
		if(self::$sing_instance === NULL) {
			$startConstruct		=	new SingleTon($dbName,$dbUser,$dbPass,$serverName);	
		}
	}	

	/* selectQuery FUNCTION ARGUMENTS SHOULD BE
	1	OUTPUT VARIABLES	2	CONDITION VARIABLES		3	CONDITION VALUES	4	TABLE NAME
	5	RESULT TYPE			6	NUM OF ROWS REQUIRED OR NOT */

	public static function selectQuery($resultVar,$condVal = '',$condVar = '',$tabVar,$fetchType = MY_BOTH,$nor = FALSE) {
		if(!$condVar == '') {
			$condVal			=		'';
			$queryAnnex			=		" WHERE ";
		}
		
		$arrSel					=		array();
		$selQuery				=		 "SELECT ".$resultVar." FROM ".$tabVar.$queryAnnex." ";

		$selResult				=		mysql_query($selQuery) or die(mysql_error());
		
		while($resultRow		=		mysql_fetch_array($selResult,$fetchType)) {
			$totalRows[]		=		$resultRow;
		}

		if($nor) {
			$noofrows			=		mysql_num_rows($selResult);
			$arrSel				=		array($noofrows,$totalRows);	
		} else {
			$arrSel				=		$totalRows;
		}
		
		return $arrSel;
	}
	public static function debugerr($value){ 
		echo "<pre>",print_r($value, true),"</pre>";
	}
}
?>