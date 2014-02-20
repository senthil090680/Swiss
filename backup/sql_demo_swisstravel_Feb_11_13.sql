##--------------------------------------------
##--------------------------------------------
##--demo.swisstravels.ch mySQL Database : demo_swisstravel
##--Total Tables : 7 Saved On :2013-02-11 09:59:45 
##--------------------------------------------
##--------------------------------------------


##------------------ admin_users ----------------------
 
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(200) DEFAULT NULL,
  `admin_pass_word` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `admin_users` SET `admin_id`='1', `admin_user_name`='admin', `admin_pass_word`='swisstravels2011';





##------------------ flight_prices ----------------------
 
DROP TABLE IF EXISTS `flight_prices`;
CREATE TABLE `flight_prices` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `flight_cost` varchar(10) DEFAULT NULL,
  `flight_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `flight_prices` SET `flight_id`='8', `flight_name`='mega one1', `country_name`='SRI', `continent_name`='ASI', `flight_cost`='CHF 745 ', `flight_status`='1', `insertedDate`='2012-12-05 22:01:08', `updatedDate`='2013-01-04 12:41:05';
INSERT INTO `flight_prices` SET `flight_id`='9', `flight_name`='General ', `country_name`='IND', `continent_name`='ASI', `flight_cost`='CHF810', `flight_status`='1', `insertedDate`='2012-12-05 22:20:22', `updatedDate`='2013-01-04 12:43:23';
INSERT INTO `flight_prices` SET `flight_id`='10', `flight_name`='Asian flights', `country_name`='PHI', `continent_name`='ASI', `flight_cost`='CHF965', `flight_status`='1', `insertedDate`='2012-12-05 22:20:46', `updatedDate`='2013-01-04 12:45:10';
INSERT INTO `flight_prices` SET `flight_id`='11', `flight_name`='Asian flights 1', `country_name`='THI', `continent_name`='ASI', `flight_cost`='CHF805 ', `flight_status`='1', `insertedDate`='2012-12-05 22:21:02', `updatedDate`='2013-01-04 12:46:27';
INSERT INTO `flight_prices` SET `flight_id`='12', `flight_name`='Asian flights 2', `country_name`='SIN', `continent_name`='ASI', `flight_cost`='CHF805 ', `flight_status`='1', `insertedDate`='2012-12-05 22:21:17', `updatedDate`='2013-01-04 12:47:10';
INSERT INTO `flight_prices` SET `flight_id`='13', `flight_name`='Europe 1', `country_name`='SAF', `continent_name`='AFR', `flight_cost`='CHF1040 ', `flight_status`='1', `insertedDate`='2012-12-05 22:29:53', `updatedDate`='2013-01-04 12:48:06';
INSERT INTO `flight_prices` SET `flight_id`='14', `flight_name`='Europe 2', `country_name`='MAL', `continent_name`='ASI', `flight_cost`='CHF830', `flight_status`='1', `insertedDate`='2012-12-05 22:30:17', `updatedDate`='2013-01-04 12:49:04';
INSERT INTO `flight_prices` SET `flight_id`='15', `flight_name`='Europe 3', `country_name`='IRA', `continent_name`='MIDEST', `flight_cost`='CHF755', `flight_status`='1', `insertedDate`='2012-12-05 22:30:41', `updatedDate`='2013-01-04 13:03:14';
INSERT INTO `flight_prices` SET `flight_id`='16', `flight_name`='Europe 4', `country_name`='ALG', `continent_name`='AFR', `flight_cost`='CHF400', `flight_status`='1', `insertedDate`='2012-12-05 22:31:59', `updatedDate`='2013-01-04 13:03:04';
INSERT INTO `flight_prices` SET `flight_id`='17', `flight_name`='Europe 5', `country_name`='KEN', `continent_name`='AFR', `flight_cost`='CHF1399', `flight_status`='1', `insertedDate`='2012-12-05 22:32:17', `updatedDate`='2013-01-04 12:56:46';
INSERT INTO `flight_prices` SET `flight_id`='18', `flight_name`='Middle 1', `country_name`='SAR', `continent_name`='MIDEST', `flight_cost`='CHF780', `flight_status`='1', `insertedDate`='2012-12-05 22:33:32', `updatedDate`='2013-01-04 12:58:04';
INSERT INTO `flight_prices` SET `flight_id`='19', `flight_name`='Middle 2', `country_name`='LON', `continent_name`='EUR', `flight_cost`='CHF250', `flight_status`='1', `insertedDate`='2012-12-05 22:33:47', `updatedDate`='2013-01-04 13:02:51';
INSERT INTO `flight_prices` SET `flight_id`='20', `flight_name`='Middle 3', `country_name`='NIG', `continent_name`='MIDEST', `flight_cost`='CHF985', `flight_status`='1', `insertedDate`='2012-12-05 22:34:05', `updatedDate`='2013-01-04 13:00:08';
INSERT INTO `flight_prices` SET `flight_id`='21', `flight_name`='Middle 4', `country_name`='IRAQ', `continent_name`='MIDEST', `flight_cost`='CHF730', `flight_status`='1', `insertedDate`='2012-12-05 22:34:24', `updatedDate`='2013-01-04 13:01:04';
INSERT INTO `flight_prices` SET `flight_id`='22', `flight_name`='Middle 5', `country_name`='EGY', `continent_name`='MIDEST', `flight_cost`='CHF 450', `flight_status`='1', `insertedDate`='2012-12-05 22:34:48', `updatedDate`='2013-01-04 20:14:22';





##------------------ isrl_plan ----------------------
 
DROP TABLE IF EXISTS `isrl_plan`;
CREATE TABLE `isrl_plan` (
  `isrl_id` int(11) NOT NULL AUTO_INCREMENT,
  `isrl_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `isrl_code` varchar(100) DEFAULT NULL,
  `isrl_desc` text,
  `isrl_ps` text,
  `isrl_touring` text,
  `isrl_cost` varchar(200) DEFAULT NULL,
  `isrl_front` int(11) DEFAULT NULL,
  `isrl_path` varchar(200) DEFAULT NULL,
  `isrl_path1` varchar(200) DEFAULT NULL,
  `isrl_path2` varchar(200) DEFAULT NULL,
  `isrl_status` int(11) DEFAULT NULL,
  `isrl_insertedDate` datetime DEFAULT NULL,
  `isrl_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`isrl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `isrl_plan` SET `isrl_id`='1', `isrl_name`='Israel Tour Name', `continent_name`='ASI', `country_name`='ISR', `isrl_code`='ISR 805461', `isrl_desc`='This is a tour to Israel different places and cities in Israel.   You will be looking around beautiful picturesque places all around Israel', `isrl_ps`='You will be receiving,<br />
1) Good accommodation.<br />
2) Good food.<br />
3) Great hospitality.', `isrl_touring`='Israel is a country which is part of the Asian continent.  You will be visiting lot of natural places all around Israel.', `isrl_cost`='58400', `isrl_front`='0', `isrl_path`='isrl_path/897424449_Jellyfish.jpg', `isrl_path1`='isrl_path1/722910878_Penguins.jpg', `isrl_path2`='isrl_path2/1412597109_Tulips.jpg', `isrl_status`='1', `isrl_insertedDate`='2013-02-04 13:10:16', `isrl_updatedDate`='2013-02-05 04:51:35';
INSERT INTO `isrl_plan` SET `isrl_id`='2', `isrl_name`='Israel Plan', `continent_name`='ASI', `country_name`='ISR', `isrl_code`='15400', `isrl_desc`='This is a Israel tour description', `isrl_ps`='This is Israel products &amp; services', `isrl_touring`='This is Israel touring details', `isrl_cost`='7800', `isrl_front`='0', `isrl_path`='isrl_path/847318591_Penguins.jpg', `isrl_path1`='isrl_path1/1825495829_Tulips.jpg', `isrl_path2`='isrl_path2/1161760880_Lighthouse.jpg', `isrl_status`='1', `isrl_insertedDate`='2013-02-05 04:57:27', `isrl_updatedDate`='2013-02-05 04:57:50';





##------------------ sri_days ----------------------
 
DROP TABLE IF EXISTS `sri_days`;
CREATE TABLE `sri_days` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_id` int(11) NOT NULL,
  `day_name` varchar(200) DEFAULT NULL,
  `day1_title` text,
  `day2_title` text,
  `day2_place` text,
  `day2_desc` text,
  `day2_path1` text,
  `day2_path2` text,
  `day2_path3` text,
  `day2_path4` text,
  `day2_stay` text,
  `day3_title` text,
  `day3_place` text,
  `day3_desc` text,
  `day3_path1` text,
  `day3_path2` text,
  `day3_path3` text,
  `day3_path4` text,
  `day3_stay` text,
  `day4_title` text,
  `day4_place` text,
  `day4_desc` text,
  `day4_path1` text,
  `day4_path2` text,
  `day4_path3` text,
  `day4_path4` text,
  `day4_stay` text,
  `day4a_path4` text,
  `day5_title` text,
  `day5_place` text,
  `day5_desc` text,
  `day5_path1` text,
  `day5_path2` text,
  `day5_path3` text,
  `day5_path4` text,
  `day5_stay` text,
  `day5_place1` text,
  `day5_desc1` text,
  `day5_path5` text,
  `day5_path6` text,
  `day5_path7` text,
  `day5_path8` text,
  `day6_title` text,
  `day6_place` text,
  `day6_desc` text,
  `day6_path1` text,
  `day6_path2` text,
  `day6_path3` text,
  `day6_path4` text,
  `day6_stay` text,
  `day7_title` text,
  `day7_place` text,
  `day7_desc` text,
  `day7_path1` text,
  `day7_path2` text,
  `day7_path3` text,
  `day7_path4` text,
  `day7_stay` text,
  `day8_title` text,
  `day8_place` text,
  `day8_desc` text,
  `day8_path1` text,
  `day8_path2` text,
  `day8_path3` text,
  `day8_path4` text,
  `day8_stay` text,
  `day9_title` text,
  `day9_place` text,
  `day9_desc` text,
  `day9_path1` text,
  `day9_path2` text,
  `day9_path3` text,
  `day9_path4` text,
  `day9_stay` text,
  `day10_title` text,
  `day10_place` text,
  `day10_desc` text,
  `day10_path1` text,
  `day10_path2` text,
  `day10_path3` text,
  `day10_path4` text,
  `day10_stay` text,
  `day10_place1` text,
  `day10_desc1` text,
  `day10_path5` text,
  `day10_path6` text,
  `day10_path7` text,
  `day10_path8` text,
  `day11_title` text,
  `day11_place` text,
  `day11_desc` text,
  `day11_path1` text,
  `day11_path2` text,
  `day11_path3` text,
  `day11_path4` text,
  `day11_stay` text,
  `day12_title` text,
  `day14_stay` text,
  `day13_path1` text,
  `price_include` text,
  `price_notinclude` text,
  `day_status` int(11) DEFAULT NULL,
  `day_insertedDate` datetime DEFAULT NULL,
  `day_updatedDate` datetime DEFAULT NULL,
  `day13_title` text,
  `day13_place` text,
  `day13_desc` text,
  `day13_path2` text,
  `day13_path3` text,
  `day13_path4` text,
  `day13_stay` text,
  `day14_title` text,
  `day14_place` text,
  `day14_desc` text,
  `day14_path1` text,
  `day14_path2` text,
  `day14_path3` text,
  `day14_path4` text,
  `day4a_title` text,
  `day4a_place` text,
  `day4a_desc` text,
  `day4a_path1` text,
  `day4a_path2` text,
  `day4a_path3` text,
  PRIMARY KEY (`day_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `sri_days` SET `day_id`='9', `sri_id`='2', `day_name`='Departure from Zurich/Geneva/Milano/Frankfurt', `day1_title`='Amazing Glimpse of Ancient Lanka 9 Days/ 8 Nights ', `day2_title`='Arrival at Bandaranaike International Airport. Your will be welcomed, assisted and taken to Negombo.', `day2_place`='NEGOMBO', `day2_desc`='About 7 km north of the country’s international airport lies this bustling fishing town with miles long golden sandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', `day2_path1`='day2_path1/1256729411negambday1.jpg', `day2_path2`='day2_path2/1997206541Negamboboats.jpg', `day2_path3`='day2_path3/250405429Negamboday1.jpg', `day2_path4`='day2_path4/768776026Negambo.jpg', `day2_stay`='Overnight Stay At: NEGOMBO.', `day3_title`='Leave Negombo for Dambulla', `day3_place`='DAMBULLA (World Heritage Site)', `day3_desc`='Dambulla is famous for its 1st C, BC Cave Temple which is a world heritage site. The south-east Asia’s largest ceiling painting covering an area of about 2000 Sq. meters can be seen at Dambulla. Dambulla is also known as the ‘sleepless city’ as traders from around the island flock at main Economic Center where all business takes place at night. Main livelihood of the people in Dambulla is farming.', `day3_path1`='day3_path1/1008272598Dambulladay2.1.jpg', `day3_path2`='day3_path2/591886545Dambulladay2.2.jpg', `day3_path3`='day3_path3/1195491382Pinnawaladay2.jpg', `day3_path4`='day3_path4/1641994513Pinnawaladay2.4.jpg', `day3_stay`='Overnight Stay At: DAMBULLA.', `day4_title`='At Dambulla. Visit Polonnaruwa/ Jeep Safari at Minneriya  National Park.', `day4_place`='POLONNARUWA (World Heritage Site)', `day4_desc`='Polonnaruwa is the 2nd capital of Sri Lanka. History of Polonnaruwa dates back to 11th C. AD. Owing to ever increasing invasions from south India, the Sinhalese Kings nurtured by the non-aggressive policies of the Buddhism vacated Polonnaruwa and moved away from Dravidian invaders to south-west of the country.  ', `day4_path1`='day4_path1/1273917588MinneriyaNationalPark2.jpg', `day4_path2`='day4_path2/1676294235MinneriyaNationalPark4.jpg', `day4_path3`='day4_path3/1881884291Polonnaruwa1.jpg', `day4_path4`='day4_path4/1981000863Polonnaruwa3.jpg', `day4_stay`='Place', `day4a_path4`='', `day5_title`='At Dambulla. Visit Sigiriya Rock Fortress 5th C. AD. ', `day5_place`='SIGIRIYA (World Heritage Site)', `day5_desc`='Sigiriya is an ancient rock castle. Combination of two Singhalese words ‘Singha + Giri’ which means ‘Lion’s Rock’ is simply a wonder. Some even call it the 8th wonder of the world. Much of Sigiriya still remains unexplored. But the little excavations in the western front of the rock presents us with a unique combination of 5th C. AD Urban Planning, Engineering, Hydraulic Techniques, Architecture, Paintings, Sculpture Arts and Literature.', `day5_path1`='day5_path1/1320944464Sigiriyaday2.1.jpg', `day5_path2`='day5_path2/1923919253sigiriyaday2.3.jpg', `day5_path3`='day5_path3/990099902Sigiriyaday2.2.jpg', `day5_path4`='day5_path4/1943984936Sigiriyaday2.4.jpg', `day5_stay`='Overnight Stay At: DAMBULLA.', `day5_place1`='', `day5_desc1`='', `day5_path5`='', `day5_path6`='', `day5_path7`='', `day5_path8`='', `day6_title`='Leave Dambulla for Kandy.', `day6_place`='KANDY (World Heritage City)', `day6_desc`='Kandy is the last capital of Sri Lanka before the country was handed to British rule in the year 1815. With a man made lake in the city center and the most sacred shrine of Buddhist, Temple of Tooth Relic standing with grandeur on one side, Kandy is undoubtedly the most picturesque city in the country. Declared by the UNESCO as a ‘living’ world heritage city, proud Kandians still keep most ancient traditions and folklores alive as it had been during the time of Kings. ', `day6_path1`='day6_path1/2102347590kandy5.1.jpg', `day6_path2`='day6_path2/777055483kandy5.2.jpg', `day6_path3`='day6_path3/1784496985kandy5.3.jpg', `day6_path4`='day6_path4/676027616kandy5.4.jpg', `day6_stay`='Overnight Stay At: KANDY.', `day7_title`='Leave Kandy for Nuwara Eliya. ', `day7_place`='NUWARA ELIYA.', `day7_desc`='If you ever wonder where and how the tea is grown and produced, Nuwara Eliya is a must visit because this is where world’s best tea is produced. With an altitude of 1889 m., Nuwara Eliya is the coolest city in the country and is still called by many as little England, a name often used by British rulers. ', `day7_path1`='day7_path1/1314745273Nuwaraeliyaday6.2.jpg', `day7_path2`='day7_path2/1947575138nuwaraeliyaday6.jpg', `day7_path3`='day7_path3/1037569911nuwaraeliyaday6.3.jpg', `day7_path4`='day7_path4/1614323717nuwaraeliyaday6.4.jpg', `day7_stay`='Overnight Stay At: NUWARA ELIYA.', `day8_title`='Leave Nuwara Eliya for Negombo. ', `day8_place`='NEGOMBO.', `day8_desc`='Return to Negombo via Kandy – Colombo main road, the nearest town to the main airport of the country.', `day8_path1`='day8_path1/181778733Negamboboats.jpg', `day8_path2`='day8_path2/436841135Negamboday1.jpg', `day8_path3`='day8_path3/1149652559Negambo.jpg', `day8_path4`='day8_path4/660203697negambday1.jpg', `day8_stay`='', `day9_title`='Leave Colombo and arriving at Zurich/Geneva/Milano/Frankfurt', `day9_place`='', `day9_desc`='You are at the end of your journey and our chauffer will take you to the airport. ', `day9_path1`='', `day9_path2`='', `day9_path3`='', `day9_path4`='', `day9_stay`='', `day10_title`='', `day10_place`='', `day10_desc`='', `day10_path1`='', `day10_path2`='', `day10_path3`='', `day10_path4`='', `day10_stay`='', `day10_place1`='', `day10_desc1`='', `day10_path5`='', `day10_path6`='', `day10_path7`='', `day10_path8`='', `day11_title`='', `day11_place`='', `day11_desc`='', `day11_path1`='', `day11_path2`='', `day11_path3`='', `day11_path4`='', `day11_stay`='', `day12_title`='', `day14_stay`='', `day13_path1`='', `price_include`='', `price_notinclude`='', `day_status`='1', `day_insertedDate`='2013-02-08 19:53:43', `day_updatedDate`='2013-02-11 06:55:58', `day13_title`='', `day13_place`='', `day13_desc`='', `day13_path2`='', `day13_path3`='', `day13_path4`='', `day13_stay`='', `day14_title`='', `day14_place`='', `day14_desc`='', `day14_path1`='', `day14_path2`='', `day14_path3`='', `day14_path4`='', `day4a_title`='', `day4a_place`='', `day4a_desc`='', `day4a_path1`='', `day4a_path2`='', `day4a_path3`='';
INSERT INTO `sri_days` SET `day_id`='11', `sri_id`='4', `day_name`='Plan for 14', `day1_title`='Title 11', `day2_title`='Title 22', `day2_place`='Title 33', `day2_desc`='Title 44', `day2_path1`='day2_path1/69171725Chrysanthemum.jpg', `day2_path2`='day2_path2/140926435Desert.jpg', `day2_path3`='day2_path3/1710988286Hydrangeas.jpg', `day2_path4`='day2_path4/1711097457Jellyfish.jpg', `day2_stay`='Title 55', `day3_title`='Title 66', `day3_place`='Title 77', `day3_desc`='Title 88', `day3_path1`='day3_path1/478311605Koala.jpg', `day3_path2`='day3_path2/904445718Lighthouse.jpg', `day3_path3`='day3_path3/784002066Penguins.jpg', `day3_path4`='day3_path4/1471674717Tulips.jpg', `day3_stay`='Title 99', `day4_title`='Title 1010', `day4_place`='Title 1111', `day4_desc`='Title 1212', `day4_path1`='day4_path1/1188956797Chrysanthemum.jpg', `day4_path2`='day4_path2/1491231857Desert.jpg', `day4_path3`='day4_path3/1102960713Hydrangeas.jpg', `day4_path4`='day4_path4/918034501Jellyfish.jpg', `day4_stay`='Title 1616', `day4a_path4`='DAY4A_PATH41388932952Tulips.jpg', `day5_title`='Title 1717', `day5_place`='Title 1818', `day5_desc`='Title 1919', `day5_path1`='day5_path1/1097164220Chrysanthemum.jpg', `day5_path2`='day5_path2/429418517Desert.jpg', `day5_path3`='day5_path3/212831897Hydrangeas.jpg', `day5_path4`='day5_path4/1053084227Jellyfish.jpg', `day5_stay`='Title 2020', `day5_place1`='', `day5_desc1`='', `day5_path5`='', `day5_path6`='', `day5_path7`='', `day5_path8`='', `day6_title`='Title 2121', `day6_place`='Title 2222', `day6_desc`='Title 2323', `day6_path1`='day6_path1/61434788Koala.jpg', `day6_path2`='day6_path2/1351317018Lighthouse.jpg', `day6_path3`='day6_path3/1658301269Penguins.jpg', `day6_path4`='day6_path4/584144887Tulips.jpg', `day6_stay`='Title 2424', `day7_title`='Title 2525', `day7_place`='Title 2626', `day7_desc`='Title 2727', `day7_path1`='day7_path1/1850123512Chrysanthemum.jpg', `day7_path2`='day7_path2/1679416391Desert.jpg', `day7_path3`='day7_path3/1582638502Hydrangeas.jpg', `day7_path4`='day7_path4/2057626410Jellyfish.jpg', `day7_stay`='Title 2828', `day8_title`='Title 2929', `day8_place`='Title 3030', `day8_desc`='Title 3131', `day8_path1`='day8_path1/379961463Koala.jpg', `day8_path2`='day8_path2/1750756858Lighthouse.jpg', `day8_path3`='day8_path3/1458618417Penguins.jpg', `day8_path4`='day8_path4/2142451613Tulips.jpg', `day8_stay`='Title 3232', `day9_title`='Title 3333', `day9_place`='Title 3434', `day9_desc`='Title 3535', `day9_path1`='day9_path1/326307451Chrysanthemum.jpg', `day9_path2`='day9_path2/1623865673Desert.jpg', `day9_path3`='day9_path3/1006747751Hydrangeas.jpg', `day9_path4`='day9_path42142001186Jellyfish.jpg', `day9_stay`='Title 3636', `day10_title`='Title 3737', `day10_place`='Title 3838', `day10_desc`='Title 3939', `day10_path1`='day10_path1/2012025290Koala.jpg', `day10_path2`='day10_path2/1686658273Lighthouse.jpg', `day10_path3`='day10_path3/896012474Penguins.jpg', `day10_path4`='day10_path4/1581906268Tulips.jpg', `day10_stay`='Title 4040', `day10_place1`='', `day10_desc1`='', `day10_path5`='', `day10_path6`='', `day10_path7`='', `day10_path8`='', `day11_title`='Title 4141', `day11_place`='Title 4242', `day11_desc`='Title 4343', `day11_path1`='day11_path1/1792938029Chrysanthemum.jpg', `day11_path2`='day11_path2/248043692Desert.jpg', `day11_path3`='day11_path3/14234765Hydrangeas.jpg', `day11_path4`='day11_path4/65773892Jellyfish.jpg', `day11_stay`='Title 4444', `day12_title`='Title 5353', `day14_stay`='Title 5252', `day13_path1`='day13_path1/439398081Koala.jpg', `price_include`='Title 5454', `price_notinclude`='Title 5555', `day_status`='1', `day_insertedDate`='2013-02-11 08:00:50', `day_updatedDate`='2013-02-11 08:04:06', `day13_title`='Title 4545', `day13_place`='Title 4646', `day13_desc`='Title 4747', `day13_path2`='day13_path2/2059294004Lighthouse.jpg', `day13_path3`='day13_path3/1259373039Penguins.jpg', `day13_path4`='day13_path4/2010255215Tulips.jpg', `day13_stay`='Title 4848', `day14_title`='Title 4949', `day14_place`='Title 5050', `day14_desc`='Title 5151', `day14_path1`='day14_path1/1243568655Chrysanthemum.jpg', `day14_path2`='day14_path2/201000393Desert.jpg', `day14_path3`='day14_path3/1165099270Hydrangeas.jpg', `day14_path4`='day14_path4/1715047952Jellyfish.jpg', `day4a_title`='Title 1313', `day4a_place`='Title 1414', `day4a_desc`='Title 1515', `day4a_path1`='DAY4A_PATH11946285319Koala.jpg', `day4a_path2`='DAY4A_PATH240586856Lighthouse.jpg', `day4a_path3`='DAY4A_PATH31978371875Penguins.jpg';





##------------------ sri_plan ----------------------
 
DROP TABLE IF EXISTS `sri_plan`;
CREATE TABLE `sri_plan` (
  `sri_id` int(11) NOT NULL AUTO_INCREMENT,
  `sri_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `sri_code` varchar(100) DEFAULT NULL,
  `sri_desc` text,
  `sri_ps` text,
  `sri_touring` text,
  `sri_cost` varchar(200) DEFAULT NULL,
  `kindtour` varchar(100) DEFAULT NULL,
  `sri_front` int(11) DEFAULT NULL,
  `sri_path` varchar(200) DEFAULT NULL,
  `sri_path1` varchar(200) DEFAULT NULL,
  `sri_path2` varchar(200) DEFAULT NULL,
  `sri_status` int(11) DEFAULT NULL,
  `sri_insertedDate` datetime DEFAULT NULL,
  `sri_updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`sri_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `sri_plan` SET `sri_id`='2', `sri_name`='9 Days Amazing Tour', `continent_name`='ASI', `country_name`='SRI', `sri_code`='SRL940000ST', `sri_desc`='this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable <br />
content of a page when looking at its layout.2', `sri_ps`='this is srilanka package 1.  It is a long established fact that a reader will be distracted by the <br />
readable content of a page when looking at its layout.2', `sri_touring`='this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable <br />
content of a page when looking at its layout.2', `sri_cost`='14882', `kindtour`='Mixed Customized Trip', `sri_front`='0', `sri_path`='sri_path/1452806147_natural_31images.jpg', `sri_path1`='sri_path1/772036552_natural_32images.jpg', `sri_path2`='sri_path2/511705957_natural_33images.jpg', `sri_status`='1', `sri_insertedDate`='2012-12-12 19:43:06', `sri_updatedDate`='2013-02-01 11:40:51';
INSERT INTO `sri_plan` SET `sri_id`='3', `sri_name`='12 Days Amazing Cultural tour', `continent_name`='ASI', `country_name`='SRI', `sri_code`='SRL940001ST', `sri_desc`='This is a Srilanka Mega Tour package for the world', `sri_ps`='About 7 km north of the country\'s international airport lies this bustling fishing town with miles long golden sandy beachessoaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', `sri_touring`='About 7 km north of the country\'s international airport lies this bustling fishing town with miles long goldensandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', `sri_cost`='5299', `kindtour`='Round Trip', `sri_front`='0', `sri_path`='sri_path/1418985922_natural_33images.jpg', `sri_path1`='sri_path1/910947869_natural_32images.jpg', `sri_path2`='sri_path2/2094060701_natural_31images.jpg', `sri_status`='1', `sri_insertedDate`='2012-12-20 19:14:59', `sri_updatedDate`='2013-02-09 07:36:52';
INSERT INTO `sri_plan` SET `sri_id`='4', `sri_name`='14 Day Amazing tour', `continent_name`='ASI', `country_name`='SRI', `sri_code`='SRL940002ST', `sri_desc`='teste', `sri_ps`='teste', `sri_touring`='tesse', `sri_cost`='1234', `kindtour`='Beach Holiday', `sri_front`='0', `sri_path`='sri_path/1685860954_0(29).jpg', `sri_path1`='sri_path1/1489204278_0(86).jpg', `sri_path2`='sri_path2/735299546_0(35).jpg', `sri_status`='1', `sri_insertedDate`='2013-01-09 18:37:08', `sri_updatedDate`='2013-01-31 12:37:06';





##------------------ tour_enquiry ----------------------
 
DROP TABLE IF EXISTS `tour_enquiry`;
CREATE TABLE `tour_enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_phone` varchar(200) DEFAULT NULL,
  `user_msg` text,
  `tour_id` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO `tour_enquiry` SET `enquiry_id`='1', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-11-29 11:27:36', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='2', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-11-29 11:28:10', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='3', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-11-29 11:28:36', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='4', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-11-29 11:29:07', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='5', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-11-29 11:29:16', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='6', `user_name`='senthi kumar', `user_email`='senthil090680@gmail.com', `user_phone`='9994589321', `user_msg`='hi i ma interested in this', `tour_id`='12', `insertedDate`='2012-11-29 11:30:56', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='7', `user_name`='sensehisdk', `user_email`='saraswathi_ict@yahoo.com', `user_phone`='9940413993', `user_msg`='hi iam interetsted inthsi ', `tour_id`='12', `insertedDate`='2012-11-29 11:32:00', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='8', `user_name`='senthil kumar', `user_email`='senthil090680@gmaill.com', `user_phone`='9994589321', `user_msg`='this is my msg', `tour_id`='12', `insertedDate`='2012-11-29 11:42:56', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='9', `user_name`='senthil kumar', `user_email`='senthil090680@gmail.com', `user_phone`='9994589321', `user_msg`='this is a good message', `tour_id`='11', `insertedDate`='2012-11-29 19:12:24', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='10', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='7', `insertedDate`='2012-12-01 04:24:22', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='11', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:03:12', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='12', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:04:04', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='13', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:04:14', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='14', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:04:30', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='15', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:07:54', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='16', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:08:47', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='17', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:13:22', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='18', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:14:11', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='19', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:14:17', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='20', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:14:49', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='21', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:14:56', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='22', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='12', `insertedDate`='2012-12-01 05:15:06', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='23', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-01 19:51:27', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='24', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='8', `insertedDate`='2012-12-07 05:02:11', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='25', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:37:01', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='26', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:37:36', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='27', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:38:05', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='28', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:39:22', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='29', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:40:30', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='30', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:44:35', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='31', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:45:33', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='32', `user_name`='serrwe', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 16:51:23', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='33', `user_name`='senthil ', `user_email`='senthil090680@gmail.com', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 17:18:14', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='34', `user_name`='wwerwe', `user_email`='senthil090680@gmail.com', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 17:21:30', `updatedDate`='';
INSERT INTO `tour_enquiry` SET `enquiry_id`='35', `user_name`='', `user_email`='', `user_phone`='', `user_msg`='', `tour_id`='11', `insertedDate`='2012-12-11 17:25:28', `updatedDate`='';





##------------------ tour_plan ----------------------
 
DROP TABLE IF EXISTS `tour_plan`;
CREATE TABLE `tour_plan` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `product_services` text,
  `touring` text,
  `tour_code` varchar(100) DEFAULT NULL,
  `tour_desc` text,
  `tour_cost` varchar(200) DEFAULT NULL,
  `front_order` int(11) DEFAULT NULL,
  `thumb_path` varchar(200) DEFAULT NULL,
  `plan_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `thumb_path1` varchar(200) DEFAULT NULL,
  `thumb_path2` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `tour_plan` SET `tour_id`='11', `tour_name`='Hello tour1', `continent_name`='ASI', `country_name`='IND', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='52222', `tour_desc`='52222', `tour_cost`='52222', `front_order`='0', `thumb_path`='thumb_path/1267449541_natural_7index.jpg', `plan_status`='1', `insertedDate`='2012-11-28 11:43:01', `updatedDate`='2012-12-11 15:08:22', `thumb_path1`='thumb_path1/1912529800_natural_8index.jpg', `thumb_path2`='thumb_path2/1764366304_natural_9index.jpg';
INSERT INTO `tour_plan` SET `tour_id`='3', `tour_name`='top left', `continent_name`='ASI', `country_name`='THI', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF1287', `tour_desc`='tthis is top left', `tour_cost`='7899', `front_order`='0', `thumb_path`='thumb_path/1979295888_natural_25images.jpg', `plan_status`='1', `insertedDate`='2012-11-21 09:28:10', `updatedDate`='2012-12-11 15:13:37', `thumb_path1`='thumb_path1/1679313219_natural_26images.jpg', `thumb_path2`='thumb_path2/154324532_natural_27images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='4', `tour_name`='middle right', `continent_name`='EUR', `country_name`='FRA', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF12788', `tour_desc`='this is middle right', `tour_cost`='7999', `front_order`='0', `thumb_path`='thumb_path/1437371735_natural_22images.jpg', `plan_status`='1', `insertedDate`='2012-11-21 09:28:57', `updatedDate`='2012-12-11 15:12:59', `thumb_path1`='thumb_path1/1067030197_natural_23images.jpg', `thumb_path2`='thumb_path2/1101516320_natural_24images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='5', `tour_name`='down right', `continent_name`='EUR', `country_name`='SWI', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF12144', `tour_desc`='ths is down right', `tour_cost`='7989', `front_order`='0', `thumb_path`='thumb_path/543959136_natural_19images.jpg', `plan_status`='1', `insertedDate`='2012-11-21 09:29:30', `updatedDate`='2012-12-11 15:12:21', `thumb_path1`='thumb_path1/958941332_natural_20images.jpg', `thumb_path2`='thumb_path2/1831326247_natural_21images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='6', `tour_name`='down left', `continent_name`='MIDEST', `country_name`='OMA', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF14778', `tour_desc`='this is down left', `tour_cost`='2555', `front_order`='0', `thumb_path`='thumb_path/606175205_natural_16images.jpg', `plan_status`='1', `insertedDate`='2012-11-21 09:30:04', `updatedDate`='2012-12-11 15:10:34', `thumb_path1`='thumb_path1/857301229_natural_17images.jpg', `thumb_path2`='thumb_path2/1087788950_natural_18images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='7', `tour_name`='Asia new', `continent_name`='ASI', `country_name`='MAL', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF41455', `tour_desc`='this is asia new again', `tour_cost`='588', `front_order`='0', `thumb_path`='thumb_path/221083789_natural_13images.jpg', `plan_status`='1', `insertedDate`='2012-11-26 04:28:26', `updatedDate`='2012-12-11 15:09:43', `thumb_path1`='thumb_path1/1741894977_natural_14images.jpg', `thumb_path2`='thumb_path2/1941345573_natural_15images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='8', `tour_name`='Middle east again', `continent_name`='MIDEST', `country_name`='IRA', `product_services`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `touring`='Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', `tour_code`='CHF23534', `tour_desc`='this is middle east again', `tour_cost`='7888', `front_order`='0', `thumb_path`='thumb_path/863455681_natural_10index.jpg', `plan_status`='1', `insertedDate`='2012-11-26 04:29:38', `updatedDate`='2012-12-11 15:10:59', `thumb_path1`='thumb_path1/632413394_natural_11index.jpg', `thumb_path2`='thumb_path2/1070257865_natural_12images.jpg';
INSERT INTO `tour_plan` SET `tour_id`='12', `tour_name`='Hello this is latest one', `continent_name`='EUR', `country_name`='GER', `product_services`='This dummy data contains everything that a theme might express in a blog post, with a bunch of tags, categories, child-cats, child-pages, comments, gravatar-support, etc…', `touring`='WP-Dummy-Content is a WordPress plugin that will generate a bunch of pages, sub-pages and posts which you specify. ', `tour_code`='india123', `tour_desc`='india123', `tour_cost`='india123', `front_order`='0', `thumb_path`='thumb_path/1754860846_natural_1index.jpg', `plan_status`='1', `insertedDate`='2012-11-29 10:30:55', `updatedDate`='2012-12-11 16:34:04', `thumb_path1`='thumb_path1/1943603030_natural_2index.jpg', `thumb_path2`='thumb_path2/443045523_natural_3index.jpg';
INSERT INTO `tour_plan` SET `tour_id`='13', `tour_name`='India Package tour of South India', `continent_name`='ASI', `country_name`='IND', `product_services`='This is one of the major tour areas covered in india', `touring`='This is the touring of most significant areas in south india covering lot of places', `tour_code`='CHP45899', `tour_desc`='This is a mega tour package covering south india', `tour_cost`='4878', `front_order`='0', `thumb_path`='thumb_path/584655642_natural_4index.jpg', `plan_status`='1', `insertedDate`='2012-12-11 14:47:15', `updatedDate`='2012-12-11 14:49:10', `thumb_path1`='thumb_path1/841841786_natural_5index.jpg', `thumb_path2`='thumb_path2/1742868169_natural_6index.jpg';
INSERT INTO `tour_plan` SET `tour_id`='15', `tour_name`='Chennai Tour', `continent_name`='ASI', `country_name`='IND', `product_services`='
Accommodation provided', `touring`='Travels charges included', `tour_code`='CHR 150001', `tour_desc`='This is a chennai tour', `tour_cost`='15000', `front_order`='0', `thumb_path`='thumb_path/901988033_Desert.jpg', `plan_status`='1', `insertedDate`='2013-02-09 05:00:20', `updatedDate`='2013-02-09 05:01:33', `thumb_path1`='thumb_path1/1680337799_Hydrangeas.jpg', `thumb_path2`='thumb_path2/301434756_Jellyfish.jpg';




##------------ END OF FILE ----------------------
 
