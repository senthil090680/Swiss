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

/*$selectCount	=	"CREATE TABLE `sri_days` (
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

*/

//$selectCount	=	"ALTER TABLE `sri_plan` add `kindtour` varchar(100) DEFAULT NULL after sri_cost";  //updated on 31/01/2013 at 1740


//$selectCount	=	"ALTER TABLE `sri_days` add `day13_path1` text DEFAULT NULL after day12_title";  //updated on 01/02/2013 at 1753

//$selectCount	=	"ALTER TABLE `sri_days` ADD `day13_title` text DEFAULT NULL, ADD `day13_place` text DEFAULT NULL, ADD `day13_desc` text DEFAULT NULL, ADD `day13_path2` text DEFAULT NULL, ADD `day13_path3` text DEFAULT NULL, ADD `day13_path4` text DEFAULT NULL, ADD `day13_stay` text DEFAULT NULL, ADD `day14_title` text DEFAULT NULL, ADD `day14_place` text DEFAULT NULL, ADD `day14_desc` text DEFAULT NULL, ADD `day14_path1` text DEFAULT NULL, ADD `day14_path2` text DEFAULT NULL, ADD `day14_path3` text DEFAULT NULL, ADD `day14_path4` text DEFAULT NULL, ADD `day14_stay` text DEFAULT NULL after day12_title";  //updated on 01/02/2013 at 1753

/*$selectCount	=	"CREATE TABLE `isrl_plan` (
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
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";  //updated on 12/12/2012 at 00:09 */

//$selectCount	=	"ALTER TABLE `sri_days` ADD `day4a_title` text DEFAULT NULL, ADD `day4a_place` text DEFAULT NULL, ADD `day4a_desc` text DEFAULT NULL, ADD `day4a_path1` text DEFAULT NULL, ADD `day4a_path2` text DEFAULT NULL, ADD `day4a_path3` text DEFAULT NULL, ADD `day4a_path4` text DEFAULT NULL after day4_stay";  //updated on 11/02/2013 at 1026

//$selectCount	=	"ALTER TABLE `tour_plan` ADD `ratesFor` VARCHAR(100) DEFAULT NULL";  //updated on 15/02/2013 at 1722


//$selectCount	=	"CREATE TABLE IF NOT EXISTS country_list ( iso CHAR(2) NOT NULL PRIMARY KEY, name VARCHAR(80) NOT NULL, printable_name VARCHAR(80) NOT NULL, iso3 CHAR(3), numcode SMALLINT )";  //updated on 28/02/2013 at 1700


$selectCount	=	"INSERT INTO country_list VALUES ('AF','AFGHANISTAN','Afghanistan','AFG','004'),  ('AL','ALBANIA','Albania','ALB','008'),  ('DZ','ALGERIA','Algeria','DZA','012'),  ('AS','AMERICAN SAMOA','American Samoa','ASM','016'),  ('AD','ANDORRA','Andorra','AND','020'),  ('AO','ANGOLA','Angola','AGO','024'),  ('AI','ANGUILLA','Anguilla','AIA','660'),  ('AQ','ANTARCTICA','Antarctica',NULL,NULL),  ('AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG','028'),  ('AR','ARGENTINA','Argentina','ARG','032'),  ('AM','ARMENIA','Armenia','ARM','051'),  ('AW','ARUBA','Aruba','ABW','533'),  ('AU','AUSTRALIA','Australia','AUS','036'),  ('AT','AUSTRIA','Austria','AUT','040'),  ('AZ','AZERBAIJAN','Azerbaijan','AZE','031'),  ('BS','BAHAMAS','Bahamas','BHS','044'),  ('BH','BAHRAIN','Bahrain','BHR','048'),  ('BD','BANGLADESH','Bangladesh','BGD','050'),  ('BB','BARBADOS','Barbados','BRB','052'),  ('BY','BELARUS','Belarus','BLR','112'),  ('BE','BELGIUM','Belgium','BEL','056'),  ('BZ','BELIZE','Belize','BLZ','084'),  ('BJ','BENIN','Benin','BEN','204'),  ('BM','BERMUDA','Bermuda','BMU','060'),  ('BT','BHUTAN','Bhutan','BTN','064'),  ('BO','BOLIVIA','Bolivia','BOL','068'),  ('BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH','070'),  ('BW','BOTSWANA','Botswana','BWA','072'),  ('BV','BOUVET ISLAND','Bouvet Island',NULL,NULL),  ('BR','BRAZIL','Brazil','BRA','076'),  ('IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL),  ('BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN','096'),  ('BG','BULGARIA','Bulgaria','BGR','100'),  ('BF','BURKINA FASO','Burkina Faso','BFA','854'),  ('BI','BURUNDI','Burundi','BDI','108'),  ('KH','CAMBODIA','Cambodia','KHM','116'),  ('CM','CAMEROON','Cameroon','CMR','120'),  ('CA','CANADA','Canada','CAN','124'),  ('CV','CAPE VERDE','Cape Verde','CPV','132'),  ('KY','CAYMAN ISLANDS','Cayman Islands','CYM','136'),  ('CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF','140'),  ('TD','CHAD','Chad','TCD','148'),  ('CL','CHILE','Chile','CHL','152'),  ('CN','CHINA','China','CHN','156'),  ('CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL),  ('CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL),  ('CO','COLOMBIA','Colombia','COL','170'),  ('KM','COMOROS','Comoros','COM','174'),  ('CG','CONGO','Congo','COG','178'),  ('CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD','180'),  ('CK','COOK ISLANDS','Cook Islands','COK','184'),  ('CR','COSTA RICA','Costa Rica','CRI','188'),  ('CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV','384'),  ('HR','CROATIA','Croatia','HRV','191'),  ('CU','CUBA','Cuba','CUB','192'),  ('CY','CYPRUS','Cyprus','CYP','196'),  ('CZ','CZECH REPUBLIC','Czech Republic','CZE','203'),  ('DK','DENMARK','Denmark','DNK','208'),  ('DJ','DJIBOUTI','Djibouti','DJI','262'),  ('DM','DOMINICA','Dominica','DMA','212'),  ('DO','DOMINICAN REPUBLIC','Dominican Republic','DOM','214'),  ('EC','ECUADOR','Ecuador','ECU','218'),  ('EG','EGYPT','Egypt','EGY','818'),  ('SV','EL SALVADOR','El Salvador','SLV','222'),  ('GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ','226'),  ('ER','ERITREA','Eritrea','ERI','232'),  ('EE','ESTONIA','Estonia','EST','233'),  ('ET','ETHIOPIA','Ethiopia','ETH','231'),  ('FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK','238'),  ('FO','FAROE ISLANDS','Faroe Islands','FRO','234'),  ('FJ','FIJI','Fiji','FJI','242'),  ('FI','FINLAND','Finland','FIN','246'),  ('FR','FRANCE','France','FRA','250'),  ('GF','FRENCH GUIANA','French Guiana','GUF','254'),  ('PF','FRENCH POLYNESIA','French Polynesia','PYF','258'),  ('TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL),  ('GA','GABON','Gabon','GAB','266'),  ('GM','GAMBIA','Gambia','GMB','270'),  ('GE','GEORGIA','Georgia','GEO','268'),  ('DE','GERMANY','Germany','DEU','276'),  ('GH','GHANA','Ghana','GHA','288'),  ('GI','GIBRALTAR','Gibraltar','GIB','292'),  ('GR','GREECE','Greece','GRC','300'),  ('GL','GREENLAND','Greenland','GRL','304'),  ('GD','GRENADA','Grenada','GRD','308'),  ('GP','GUADELOUPE','Guadeloupe','GLP','312'),  ('GU','GUAM','Guam','GUM','316'),  ('GT','GUATEMALA','Guatemala','GTM','320'),  ('GN','GUINEA','Guinea','GIN','324'),  ('GW','GUINEA-BISSAU','Guinea-Bissau','GNB','624'),  ('GY','GUYANA','Guyana','GUY','328'),  ('HT','HAITI','Haiti','HTI','332'),  ('HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL),  ('VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT','336'),  ('HN','HONDURAS','Honduras','HND','340'),  ('HK','HONG KONG','Hong Kong','HKG','344'),  ('HU','HUNGARY','Hungary','HUN','348'),  ('IS','ICELAND','Iceland','ISL','352'),  ('IN','INDIA','India','IND','356'),  ('ID','INDONESIA','Indonesia','IDN','360'),  ('IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN','364'),  ('IQ','IRAQ','Iraq','IRQ','368'),  ('IE','IRELAND','Ireland','IRL','372'),  ('IL','ISRAEL','Israel','ISR','376'),  ('IT','ITALY','Italy','ITA','380'),  ('JM','JAMAICA','Jamaica','JAM','388'),  ('JP','JAPAN','Japan','JPN','392'),  ('JO','JORDAN','Jordan','JOR','400'),  ('KZ','KAZAKHSTAN','Kazakhstan','KAZ','398'),  ('KE','KENYA','Kenya','KEN','404'),  ('KI','KIRIBATI','Kiribati','KIR','296'),  ('KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK','408'),  ('KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR','410'),  ('KW','KUWAIT','Kuwait','KWT','414'),  ('KG','KYRGYZSTAN','Kyrgyzstan','KGZ','417'),  ('LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO','418'),  ('LV','LATVIA','Latvia','LVA','428'),  ('LB','LEBANON','Lebanon','LBN','422'),  ('LS','LESOTHO','Lesotho','LSO','426'),  ('LR','LIBERIA','Liberia','LBR','430'),  ('LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY','434'),  ('LI','LIECHTENSTEIN','Liechtenstein','LIE','438'),  ('LT','LITHUANIA','Lithuania','LTU','440'),  ('LU','LUXEMBOURG','Luxembourg','LUX','442'),  ('MO','MACAO','Macao','MAC','446'),  ('MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD','807'),  ('MG','MADAGASCAR','Madagascar','MDG','450'),  ('MW','MALAWI','Malawi','MWI','454'),  ('MY','MALAYSIA','Malaysia','MYS','458'),  ('MV','MALDIVES','Maldives','MDV','462'),  ('ML','MALI','Mali','MLI','466'),  ('MT','MALTA','Malta','MLT','470'),  ('MH','MARSHALL ISLANDS','Marshall Islands','MHL','584'),  ('MQ','MARTINIQUE','Martinique','MTQ','474'),  ('MR','MAURITANIA','Mauritania','MRT','478'),  ('MU','MAURITIUS','Mauritius','MUS','480'),  ('YT','MAYOTTE','Mayotte',NULL,NULL),  ('MX','MEXICO','Mexico','MEX','484'),  ('FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM','583'),  ('MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA','498'),  ('MC','MONACO','Monaco','MCO','492'),  ('MN','MONGOLIA','Mongolia','MNG','496'),  ('MS','MONTSERRAT','Montserrat','MSR','500'),  ('MA','MOROCCO','Morocco','MAR','504'),  ('MZ','MOZAMBIQUE','Mozambique','MOZ','508'),  ('MM','MYANMAR','Myanmar','MMR','104'),  ('NA','NAMIBIA','Namibia','NAM','516'),  ('NR','NAURU','Nauru','NRU','520'),  ('NP','NEPAL','Nepal','NPL','524'),  ('NL','NETHERLANDS','Netherlands','NLD','528'),  ('AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT','530'),  ('NC','NEW CALEDONIA','New Caledonia','NCL','540'),  ('NZ','NEW ZEALAND','New Zealand','NZL','554'),  ('NI','NICARAGUA','Nicaragua','NIC','558'),  ('NE','NIGER','Niger','NER','562'),  ('NG','NIGERIA','Nigeria','NGA','566'),  ('NU','NIUE','Niue','NIU','570'),  ('NF','NORFOLK ISLAND','Norfolk Island','NFK','574'),  ('MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP','580'),  ('NO','NORWAY','Norway','NOR','578'),  ('OM','OMAN','Oman','OMN','512'),  ('PK','PAKISTAN','Pakistan','PAK','586'),  ('PW','PALAU','Palau','PLW','585'),  ('PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL),  ('PA','PANAMA','Panama','PAN','591'),  ('PG','PAPUA NEW GUINEA','Papua New Guinea','PNG','598'),  ('PY','PARAGUAY','Paraguay','PRY','600'),  ('PE','PERU','Peru','PER','604'),  ('PH','PHILIPPINES','Philippines','PHL','608'),  ('PN','PITCAIRN','Pitcairn','PCN','612'),  ('PL','POLAND','Poland','POL','616'),  ('PT','PORTUGAL','Portugal','PRT','620'),  ('PR','PUERTO RICO','Puerto Rico','PRI','630'),  ('QA','QATAR','Qatar','QAT','634'),  ('RE','REUNION','Reunion','REU','638'),  ('RO','ROMANIA','Romania','ROM','642'),  ('RU','RUSSIAN FEDERATION','Russian Federation','RUS','643'),  ('RW','RWANDA','Rwanda','RWA','646'),  ('SH','SAINT HELENA','Saint Helena','SHN','654'),  ('KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA','659'),  ('LC','SAINT LUCIA','Saint Lucia','LCA','662'),  ('PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM','666'),  ('VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT','670'),  ('WS','SAMOA','Samoa','WSM','882'),  ('SM','SAN MARINO','San Marino','SMR','674'),  ('ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP','678'),  ('SA','SAUDI ARABIA','Saudi Arabia','SAU','682'),  ('SN','SENEGAL','Senegal','SEN','686'),  ('CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL),  ('SC','SEYCHELLES','Seychelles','SYC','690'),  ('SL','SIERRA LEONE','Sierra Leone','SLE','694'),  ('SG','SINGAPORE','Singapore','SGP','702'),  ('SK','SLOVAKIA','Slovakia','SVK','703'),  ('SI','SLOVENIA','Slovenia','SVN','705'),  ('SB','SOLOMON ISLANDS','Solomon Islands','SLB','090'),  ('SO','SOMALIA','Somalia','SOM','706'),  ('ZA','SOUTH AFRICA','South Africa','ZAF','710'),  ('GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL),  ('ES','SPAIN','Spain','ESP','724'),  ('LK','SRILANKA','Srilanka','LKA','144'),  ('SD','SUDAN','Sudan','SDN','736'),  ('SR','SURINAME','Suriname','SUR','740'),  ('SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM','744'),  ('SZ','SWAZILAND','Swaziland','SWZ','748'),  ('SE','SWEDEN','Sweden','SWE','752'),  ('CH','SWITZERLAND','Switzerland','CHE','756'),  ('SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR','760'),  ('TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN','158'),  ('TJ','TAJIKISTAN','Tajikistan','TJK','762'),  ('TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA','834'),  ('TH','THAILAND','Thailand','THA','764'),  ('TL','TIMOR-LESTE','Timor-Leste',NULL,NULL),  ('TG','TOGO','Togo','TGO','768'),  ('TK','TOKELAU','Tokelau','TKL','772'),  ('TO','TONGA','Tonga','TON','776'),  ('TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO','780'),  ('TN','TUNISIA','Tunisia','TUN','788'),  ('TR','TURKEY','Turkey','TUR','792'),  ('TM','TURKMENISTAN','Turkmenistan','TKM','795'),  ('TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA','796'),  ('TV','TUVALU','Tuvalu','TUV','798'),  ('UG','UGANDA','Uganda','UGA','800'),  ('UA','UKRAINE','Ukraine','UKR','804'),  ('AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE','784'),  ('GB','UNITED KINGDOM','United Kingdom','GBR','826'),  ('US','UNITED STATES','United States','USA','840'),  ('UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL),  ('UY','URUGUAY','Uruguay','URY','858'),  ('UZ','UZBEKISTAN','Uzbekistan','UZB','860'),  ('VU','VANUATU','Vanuatu','VUT','548'),  ('VE','VENEZUELA','Venezuela','VEN','862'),  ('VN','VIETNAM','Vietnam','VNM','704'),  ('VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB','092'),  ('VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR','850'),  ('WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF','876'),  ('EH','WESTERN SAHARA','Western Sahara','ESH','732'),  ('YE','YEMEN','Yemen','YEM','887'),  ('ZM','ZAMBIA','Zambia','ZMB','894'),  ('ZW','ZIMBABWE','Zimbabwe','ZWE','716')";

$selectResult	=	mysql_query($selectCount) or die (mysql_error());
?>