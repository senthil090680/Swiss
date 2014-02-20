<?php 
error_reporting(E_ALL ^ E_NOTICE);

$host="182.18.169.99:3306";
$dbase="shopping_switrav";
$user="shopping_switrav";
$pwd="senhari456";

$link=mysql_connect($host, $user, $pwd);
if(!$link)
{
	die(mysql_error());
}
mysql_select_db($dbase);

$newcsvfile         =   "/tmp/file_".time().".csv";

//$newcsvfile         =   "/xampp/htdocs/file_".time().".csv";

//$newcsvfile         =   "/home/jobtarin/public_html/new/file_1353694597.csv";

$sqljd="SELECT * INTO OUTFILE '".$newcsvfile."' FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\n' FROM tour_plan";

$result = mysql_query($sqljd) or die(mysql_error());
?>

