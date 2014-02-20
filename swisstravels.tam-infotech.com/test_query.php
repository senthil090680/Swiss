<?php
session_start();
require_once 'header.php'; 

/*$selectCount	=	"CREATE TABLE `flight_prices` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `flight_cost` varchar(10) DEFAULT NULL,
  `flight_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";


$selectResult	=	mysql_query($selectCount) or die (mysql_error());*/

//$selectCount	=	"ALTER TABLE `flight_prices` add `continent_name` varchar(200) DEFAULT NULL after country_name";

//$selectCount	=	"ALTER TABLE `tour_plan` add `product_services` text DEFAULT NULL after country_name";  //updated on 11/12/2012 at 1945


//$selectCount	=	"ALTER TABLE `tour_plan` add `touring` text DEFAULT NULL after product_services";  //updated on 11/12/2012 at 1948

/*$selectCount	=	"CREATE TABLE `sri_plan` (
  `sri_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `sri_code` varchar(100) DEFAULT NULL,
  `sri_desc` text,
  `sri_ps` text,
  `sri_touring` text,
  `sri_cost` varchar(200) DEFAULT NULL,
  `sri_front` int(11) DEFAULT NULL,
  `sri_path` varchar(200) DEFAULT NULL,
  `sri_path1` varchar(200) DEFAULT NULL,
  `sri_path2` varchar(200) DEFAULT NULL,
  `sri_status` int(11) DEFAULT NULL,
  `sri_insertedDate` datetime DEFAULT NULL,
  `sri_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`sri_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";  //updated on 12/12/2012 at 00:09*/

$selectCount	=	"CREATE TABLE `sri_days` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_id` int(11) NOT NULL,
  `day_name` varchar(200) DEFAULT NULL,
  `day1_title` text DEFAULT NULL,
  
  `day2_title` text DEFAULT NULL,
  `day2_place` text DEFAULT NULL,
  `day2_desc` text DEFAULT NULL,
  `day2_path1` text DEFAULT NULL,
  `day2_path2` text DEFAULT NULL,
  `day2_path3` text DEFAULT NULL,
  `day2_path4` text DEFAULT NULL,
  `day2_stay` text DEFAULT NULL,

  `day3_title` text DEFAULT NULL,
  `day3_place` text DEFAULT NULL,
  `day3_desc` text DEFAULT NULL,
  `day3_path1` text DEFAULT NULL,
  `day3_path2` text DEFAULT NULL,
  `day3_path3` text DEFAULT NULL,
  `day3_path4` text DEFAULT NULL,
  `day3_stay` text DEFAULT NULL,

  `day4_title` text DEFAULT NULL,
  `day4_place` text DEFAULT NULL,
  `day4_desc` text DEFAULT NULL,
  `day4_path1` text DEFAULT NULL,
  `day4_path2` text DEFAULT NULL,
  `day4_path3` text DEFAULT NULL,
  `day4_path4` text DEFAULT NULL,
  `day4_stay` text DEFAULT NULL,

  `day5_title` text DEFAULT NULL,
  `day5_place` text DEFAULT NULL,
  `day5_desc` text DEFAULT NULL,
  `day5_path1` text DEFAULT NULL,
  `day5_path2` text DEFAULT NULL,
  `day5_path3` text DEFAULT NULL,
  `day5_path4` text DEFAULT NULL,
  `day5_stay` text DEFAULT NULL,

  `day5_place1` text DEFAULT NULL,
  `day5_desc1` text DEFAULT NULL,
  `day5_path5` text DEFAULT NULL,
  `day5_path6` text DEFAULT NULL,
  `day5_path7` text DEFAULT NULL,
  `day5_path8` text DEFAULT NULL,

  `day6_title` text DEFAULT NULL,
  `day6_place` text DEFAULT NULL,
  `day6_desc` text DEFAULT NULL,
  `day6_path1` text DEFAULT NULL,
  `day6_path2` text DEFAULT NULL,
  `day6_path3` text DEFAULT NULL,
  `day6_path4` text DEFAULT NULL,
  `day6_stay` text DEFAULT NULL,

  `day7_title` text DEFAULT NULL,
  `day7_place` text DEFAULT NULL,
  `day7_desc` text DEFAULT NULL,
  `day7_path1` text DEFAULT NULL,
  `day7_path2` text DEFAULT NULL,
  `day7_path3` text DEFAULT NULL,
  `day7_path4` text DEFAULT NULL,
  `day7_stay` text DEFAULT NULL,

  `day8_title` text DEFAULT NULL,
  `day8_place` text DEFAULT NULL,
  `day8_desc` text DEFAULT NULL,
  `day8_path1` text DEFAULT NULL,
  `day8_path2` text DEFAULT NULL,
  `day8_path3` text DEFAULT NULL,
  `day8_path4` text DEFAULT NULL,
  `day8_stay` text DEFAULT NULL,

  `day9_title` text DEFAULT NULL,
  `day9_place` text DEFAULT NULL,
  `day9_desc` text DEFAULT NULL,
  `day9_path1` text DEFAULT NULL,
  `day9_path2` text DEFAULT NULL,
  `day9_path3` text DEFAULT NULL,
  `day9_path4` text DEFAULT NULL,
  `day9_stay` text DEFAULT NULL,

  `day10_title` text DEFAULT NULL,
  `day10_place` text DEFAULT NULL,
  `day10_desc` text DEFAULT NULL,
  `day10_path1` text DEFAULT NULL,
  `day10_path2` text DEFAULT NULL,
  `day10_path3` text DEFAULT NULL,
  `day10_path4` text DEFAULT NULL,
  `day10_stay` text DEFAULT NULL,

  `day10_place1` text DEFAULT NULL,
  `day10_desc1` text DEFAULT NULL,
  `day10_path5` text DEFAULT NULL,
  `day10_path6` text DEFAULT NULL,
  `day10_path7` text DEFAULT NULL,
  `day10_path8` text DEFAULT NULL,

  `day11_title` text DEFAULT NULL,
  `day11_place` text DEFAULT NULL,
  `day11_desc` text DEFAULT NULL,
  `day11_path1` text DEFAULT NULL,
  `day11_path2` text DEFAULT NULL,
  `day11_path3` text DEFAULT NULL,
  `day11_path4` text DEFAULT NULL,
  `day11_stay` text DEFAULT NULL,

  `day12_title` text DEFAULT NULL,
	
  `price_include` text DEFAULT NULL,

  `price_notinclude` text DEFAULT NULL,

  `day_status` int(11) DEFAULT NULL,
  `day_insertedDate` datetime DEFAULT NULL,
  `day_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";  //updated on 12/12/2012 at 00:09

$selectResult	=	mysql_query($selectCount) or die (mysql_error());

?>