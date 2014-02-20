-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2013 at 11:06 AM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_switrav`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(200) DEFAULT NULL,
  `admin_pass_word` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_user_name`, `admin_pass_word`) VALUES
(1, 'admin', 'swisstravels2011');

-- --------------------------------------------------------

--
-- Table structure for table `country_list`
--

CREATE TABLE IF NOT EXISTS `country_list` (
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`iso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_list`
--

INSERT INTO `country_list` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CN', 'CHINA', 'China', 'CHN', 156),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IN', 'INDIA', 'India', 'IND', 356),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('PE', 'PERU', 'Peru', 'PER', 604),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('LK', 'SRILANKA', 'Srilanka', 'LKA', 144),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VN', 'VIETNAM', 'Vietnam', 'VNM', 704),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Table structure for table `flight_prices`
--

CREATE TABLE IF NOT EXISTS `flight_prices` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_name` varchar(200) DEFAULT NULL,
  `country_name` varchar(200) DEFAULT NULL,
  `continent_name` varchar(200) DEFAULT NULL,
  `flight_cost` varchar(10) DEFAULT NULL,
  `flight_status` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `flight_prices`
--

INSERT INTO `flight_prices` (`flight_id`, `flight_name`, `country_name`, `continent_name`, `flight_cost`, `flight_status`, `insertedDate`, `updatedDate`) VALUES
(8, 'mega one1', 'Srilanka', 'Asia', 'CHF 745 ', 1, '2012-12-05 22:01:08', '2013-02-12 13:02:52'),
(9, 'General ', 'India', 'Asia', 'CHF810', 1, '2012-12-05 22:20:22', '2013-02-12 13:02:43'),
(10, 'Asian flights', 'Phillipines', 'Asia', 'CHF965', 1, '2012-12-05 22:20:46', '2013-02-12 13:02:34'),
(11, 'Asian flights 1', 'Thailand', 'Asia', 'CHF805 ', 1, '2012-12-05 22:21:02', '2013-02-12 13:02:19'),
(12, 'Asian flights 2', 'Singapore', 'Asia', 'CHF805 ', 1, '2012-12-05 22:21:17', '2013-02-12 13:02:11'),
(13, 'Europe 1', 'South Africa', 'Africa', 'CHF1040 ', 1, '2012-12-05 22:29:53', '2013-02-12 13:01:56'),
(14, 'Europe 2', 'Malaysia', 'Asia', 'CHF830', 1, '2012-12-05 22:30:17', '2013-02-12 13:01:42'),
(15, 'Europe 3', 'Iran', 'Middle East', 'CHF755', 1, '2012-12-05 22:30:41', '2013-02-12 13:01:24'),
(16, 'Europe 4', 'Algeria', 'Africa', 'CHF400', 1, '2012-12-05 22:31:59', '2013-02-12 13:01:11'),
(17, 'Europe 5', 'Kenya', 'Africa', 'CHF1399', 1, '2012-12-05 22:32:17', '2013-02-12 13:01:00'),
(18, 'Middle 1', 'Saudi Arabia', 'Middle East', 'CHF780', 1, '2012-12-05 22:33:32', '2013-02-12 13:00:26'),
(19, 'Middle 2', 'London', 'Europe', 'CHF250', 1, '2012-12-05 22:33:47', '2013-02-12 12:59:55'),
(20, 'Middle 3', 'Nigeria', 'Middle East', 'CHF985', 1, '2012-12-05 22:34:05', '2013-02-12 12:59:16'),
(21, 'Middle 4', 'Iraq', 'Middle East', 'CHF730', 1, '2012-12-05 22:34:24', '2013-02-12 12:58:28'),
(22, 'Middle 5', 'Egypt', 'Middle East', 'CHF 450', 1, '2012-12-05 22:34:48', '2013-02-12 12:39:56'),
(23, 'British Airlines', 'Maldives', 'Asia', '35000', 1, '2013-02-12 11:33:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `isrl_plan`
--

CREATE TABLE IF NOT EXISTS `isrl_plan` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isrl_plan`
--

INSERT INTO `isrl_plan` (`isrl_id`, `isrl_name`, `continent_name`, `country_name`, `isrl_code`, `isrl_desc`, `isrl_ps`, `isrl_touring`, `isrl_cost`, `isrl_front`, `isrl_path`, `isrl_path1`, `isrl_path2`, `isrl_status`, `isrl_insertedDate`, `isrl_updatedDate`) VALUES
(1, 'Israel Tour Name', 'ASI', 'ISR', 'ISR 805461', 'This is a tour to Israel different places and cities in Israel.   You will be looking around beautiful picturesque places all around Israel', 'You will be receiving,<br />\n1) Good accommodation.<br />\n2) Good food.<br />\n3) Great hospitality.', 'Israel is a country which is part of the Asian continent.  You will be visiting lot of natural places all around Israel.', '58400', 0, 'isrl_path/897424449_Jellyfish.jpg', 'isrl_path1/722910878_Penguins.jpg', 'isrl_path2/1412597109_Tulips.jpg', 1, '2013-02-04 13:10:16', '2013-02-05 04:51:35'),
(2, 'Israel Plan', 'ASI', 'ISR', '15400', 'This is a Israel tour description', 'This is Israel products &amp; services', 'This is Israel touring details', '7800', 0, 'isrl_path/847318591_Penguins.jpg', 'isrl_path1/1825495829_Tulips.jpg', 'isrl_path2/1161760880_Lighthouse.jpg', 1, '2013-02-05 04:57:27', '2013-02-05 04:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `sri_days`
--

CREATE TABLE IF NOT EXISTS `sri_days` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sri_days`
--

INSERT INTO `sri_days` (`day_id`, `sri_id`, `day_name`, `day1_title`, `day2_title`, `day2_place`, `day2_desc`, `day2_path1`, `day2_path2`, `day2_path3`, `day2_path4`, `day2_stay`, `day3_title`, `day3_place`, `day3_desc`, `day3_path1`, `day3_path2`, `day3_path3`, `day3_path4`, `day3_stay`, `day4_title`, `day4_place`, `day4_desc`, `day4_path1`, `day4_path2`, `day4_path3`, `day4_path4`, `day4_stay`, `day4a_path4`, `day5_title`, `day5_place`, `day5_desc`, `day5_path1`, `day5_path2`, `day5_path3`, `day5_path4`, `day5_stay`, `day5_place1`, `day5_desc1`, `day5_path5`, `day5_path6`, `day5_path7`, `day5_path8`, `day6_title`, `day6_place`, `day6_desc`, `day6_path1`, `day6_path2`, `day6_path3`, `day6_path4`, `day6_stay`, `day7_title`, `day7_place`, `day7_desc`, `day7_path1`, `day7_path2`, `day7_path3`, `day7_path4`, `day7_stay`, `day8_title`, `day8_place`, `day8_desc`, `day8_path1`, `day8_path2`, `day8_path3`, `day8_path4`, `day8_stay`, `day9_title`, `day9_place`, `day9_desc`, `day9_path1`, `day9_path2`, `day9_path3`, `day9_path4`, `day9_stay`, `day10_title`, `day10_place`, `day10_desc`, `day10_path1`, `day10_path2`, `day10_path3`, `day10_path4`, `day10_stay`, `day10_place1`, `day10_desc1`, `day10_path5`, `day10_path6`, `day10_path7`, `day10_path8`, `day11_title`, `day11_place`, `day11_desc`, `day11_path1`, `day11_path2`, `day11_path3`, `day11_path4`, `day11_stay`, `day12_title`, `day14_stay`, `day13_path1`, `price_include`, `price_notinclude`, `day_status`, `day_insertedDate`, `day_updatedDate`, `day13_title`, `day13_place`, `day13_desc`, `day13_path2`, `day13_path3`, `day13_path4`, `day13_stay`, `day14_title`, `day14_place`, `day14_desc`, `day14_path1`, `day14_path2`, `day14_path3`, `day14_path4`, `day4a_title`, `day4a_place`, `day4a_desc`, `day4a_path1`, `day4a_path2`, `day4a_path3`) VALUES
(9, 2, 'Departure from Zurich/Geneva/Milano/Frankfurt', 'Amazing Glimpse of Ancient Lanka 9 Days/ 8 Nights ', 'Arrival at Bandaranaike International Airport. Your will be welcomed, assisted and taken to Negombo.', 'NEGOMBO', 'About 7 km north of the country?s international airport lies this bustling fishing town with miles long golden sandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', 'day2_path1/1256729411negambday1.jpg', 'day2_path2/1997206541Negamboboats.jpg', 'day2_path3/250405429Negamboday1.jpg', 'day2_path4/768776026Negambo.jpg', 'Overnight Stay At: NEGOMBO.', 'Leave Negombo for Dambulla', 'DAMBULLA (World Heritage Site)', 'Dambulla is famous for its 1st C, BC Cave Temple which is a world heritage site. The south-east Asia?s largest ceiling painting covering an area of about 2000 Sq. meters can be seen at Dambulla. Dambulla is also known as the ?sleepless city? as traders from around the island flock at main Economic Center where all business takes place at night. Main livelihood of the people in Dambulla is farming.', 'day3_path1/1008272598Dambulladay2.1.jpg', 'day3_path2/591886545Dambulladay2.2.jpg', 'day3_path3/1195491382Pinnawaladay2.jpg', 'day3_path4/1641994513Pinnawaladay2.4.jpg', 'Overnight Stay At: DAMBULLA.', 'At Dambulla. Visit Polonnaruwa/ Jeep Safari at Minneriya  National Park.', 'POLONNARUWA (World Heritage Site)', 'Polonnaruwa is the 2nd capital of Sri Lanka. History of Polonnaruwa dates back to 11th C. AD. Owing to ever increasing invasions from south India, the Sinhalese Kings nurtured by the non-aggressive policies of the Buddhism vacated Polonnaruwa and moved away from Dravidian invaders to south-west of the country.  ', 'day4_path1/1273917588MinneriyaNationalPark2.jpg', 'day4_path2/1676294235MinneriyaNationalPark4.jpg', 'day4_path3/1881884291Polonnaruwa1.jpg', 'day4_path4/1981000863Polonnaruwa3.jpg', 'Place', '', 'At Dambulla. Visit Sigiriya Rock Fortress 5th C. AD. ', 'SIGIRIYA (World Heritage Site)', 'Sigiriya is an ancient rock castle. Combination of two Singhalese words ?Singha + Giri? which means ?Lion?s Rock? is simply a wonder. Some even call it the 8th wonder of the world. Much of Sigiriya still remains unexplored. But the little excavations in the western front of the rock presents us with a unique combination of 5th C. AD Urban Planning, Engineering, Hydraulic Techniques, Architecture, Paintings, Sculpture Arts and Literature.', 'day5_path1/1320944464Sigiriyaday2.1.jpg', 'day5_path2/1923919253sigiriyaday2.3.jpg', 'day5_path3/990099902Sigiriyaday2.2.jpg', 'day5_path4/1943984936Sigiriyaday2.4.jpg', 'Overnight Stay At: DAMBULLA.', '', '', '', '', '', '', 'Leave Dambulla for Kandy.', 'KANDY (World Heritage City)', 'Kandy is the last capital of Sri Lanka before the country was handed to British rule in the year 1815. With a man made lake in the city center and the most sacred shrine of Buddhist, Temple of Tooth Relic standing with grandeur on one side, Kandy is undoubtedly the most picturesque city in the country. Declared by the UNESCO as a ?living? world heritage city, proud Kandians still keep most ancient traditions and folklores alive as it had been during the time of Kings. ', 'day6_path1/2102347590kandy5.1.jpg', 'day6_path2/777055483kandy5.2.jpg', 'day6_path3/1784496985kandy5.3.jpg', 'day6_path4/676027616kandy5.4.jpg', 'Overnight Stay At: KANDY.', 'Leave Kandy for Nuwara Eliya. ', 'NUWARA ELIYA.', 'If you ever wonder where and how the tea is grown and produced, Nuwara Eliya is a must visit because this is where world?s best tea is produced. With an altitude of 1889 m., Nuwara Eliya is the coolest city in the country and is still called by many as little England, a name often used by British rulers. ', 'day7_path1/1314745273Nuwaraeliyaday6.2.jpg', 'day7_path2/1947575138nuwaraeliyaday6.jpg', 'day7_path3/1037569911nuwaraeliyaday6.3.jpg', 'day7_path4/1614323717nuwaraeliyaday6.4.jpg', 'Overnight Stay At: NUWARA ELIYA.', 'Leave Nuwara Eliya for Negombo. ', 'NEGOMBO.', 'Return to Negombo via Kandy ? Colombo main road, the nearest town to the main airport of the country.', 'day8_path1/181778733Negamboboats.jpg', 'day8_path2/436841135Negamboday1.jpg', 'day8_path3/1149652559Negambo.jpg', 'day8_path4/660203697negambday1.jpg', '', 'Leave Colombo and arriving at Zurich/Geneva/Milano/Frankfurt', '', 'You are at the end of your journey and our chauffer will take you to the airport. ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2013-02-08 19:53:43', '2013-02-11 06:55:58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 4, 'Plan for 14', 'Title 11', 'Title 22', 'Title 33', 'Title 44', 'day2_path1/69171725Chrysanthemum.jpg', 'day2_path2/140926435Desert.jpg', 'day2_path3/1710988286Hydrangeas.jpg', 'day2_path4/1711097457Jellyfish.jpg', 'Title 55', 'Title 66', 'Title 77', 'Title 88', 'day3_path1/478311605Koala.jpg', 'day3_path2/904445718Lighthouse.jpg', 'day3_path3/784002066Penguins.jpg', 'day3_path4/1471674717Tulips.jpg', 'Title 99', 'Title 1010', 'Title 1111', 'Title 1212', 'day4_path1/1188956797Chrysanthemum.jpg', 'day4_path2/1491231857Desert.jpg', 'day4_path3/1102960713Hydrangeas.jpg', 'day4_path4/918034501Jellyfish.jpg', 'Title 1616', 'DAY4A_PATH41388932952Tulips.jpg', 'Title 1717', 'Title 1818', 'Title 1919', 'day5_path1/1097164220Chrysanthemum.jpg', 'day5_path2/429418517Desert.jpg', 'day5_path3/212831897Hydrangeas.jpg', 'day5_path4/1053084227Jellyfish.jpg', 'Title 2020', '', '', '', '', '', '', 'Title 2121', 'Title 2222', 'Title 2323', 'day6_path1/61434788Koala.jpg', 'day6_path2/1351317018Lighthouse.jpg', 'day6_path3/1658301269Penguins.jpg', 'day6_path4/584144887Tulips.jpg', 'Title 2424', 'Title 2525', 'Title 2626', 'Title 2727', 'day7_path1/1850123512Chrysanthemum.jpg', 'day7_path2/1679416391Desert.jpg', 'day7_path3/1582638502Hydrangeas.jpg', 'day7_path4/2057626410Jellyfish.jpg', 'Title 2828', 'Title 2929', 'Title 3030', 'Title 3131', 'day8_path1/379961463Koala.jpg', 'day8_path2/1750756858Lighthouse.jpg', 'day8_path3/1458618417Penguins.jpg', 'day8_path4/2142451613Tulips.jpg', 'Title 3232', 'Title 3333', 'Title 3434', 'Title 3535', 'day9_path1/326307451Chrysanthemum.jpg', 'day9_path2/1623865673Desert.jpg', 'day9_path3/1006747751Hydrangeas.jpg', 'day9_path42142001186Jellyfish.jpg', 'Title 3636', 'Title 3737', 'Title 3838', 'Title 3939', 'day10_path1/2012025290Koala.jpg', 'day10_path2/1686658273Lighthouse.jpg', 'day10_path3/896012474Penguins.jpg', 'day10_path4/1581906268Tulips.jpg', 'Title 4040', '', '', '', '', '', '', 'Title 4141', 'Title 4242', 'Title 4343', 'day11_path1/1792938029Chrysanthemum.jpg', 'day11_path2/248043692Desert.jpg', 'day11_path3/14234765Hydrangeas.jpg', 'day11_path4/65773892Jellyfish.jpg', 'Title 4444', 'Title 5353', 'Title 5252', 'day13_path1/439398081Koala.jpg', 'Title 5454', 'Title 5555', 1, '2013-02-11 08:00:50', '2013-02-11 08:04:06', 'Title 4545', 'Title 4646', 'Title 4747', 'day13_path2/2059294004Lighthouse.jpg', 'day13_path3/1259373039Penguins.jpg', 'day13_path4/2010255215Tulips.jpg', 'Title 4848', 'Title 4949', 'Title 5050', 'Title 5151', 'day14_path1/1243568655Chrysanthemum.jpg', 'day14_path2/201000393Desert.jpg', 'day14_path3/1165099270Hydrangeas.jpg', 'day14_path4/1715047952Jellyfish.jpg', 'Title 1313', 'Title 1414', 'Title 1515', 'DAY4A_PATH11946285319Koala.jpg', 'DAY4A_PATH240586856Lighthouse.jpg', 'DAY4A_PATH31978371875Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sri_plan`
--

CREATE TABLE IF NOT EXISTS `sri_plan` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sri_plan`
--

INSERT INTO `sri_plan` (`sri_id`, `sri_name`, `continent_name`, `country_name`, `sri_code`, `sri_desc`, `sri_ps`, `sri_touring`, `sri_cost`, `kindtour`, `sri_front`, `sri_path`, `sri_path1`, `sri_path2`, `sri_status`, `sri_insertedDate`, `sri_updatedDate`) VALUES
(2, '9 Days Amazing Tour', 'ASI', 'SRI', 'SRL940000ST', 'this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable <br />\ncontent of a page when looking at its layout.2', 'this is srilanka package 1.  It is a long established fact that a reader will be distracted by the <br />\nreadable content of a page when looking at its layout.2', 'this is srilanka package 1.  It is a long established fact that a reader will be distracted by the readable <br />\ncontent of a page when looking at its layout.2', '14882', 'Mixed Customized Trip', 0, 'sri_path/1452806147_natural_31images.jpg', 'sri_path1/772036552_natural_32images.jpg', 'sri_path2/511705957_natural_33images.jpg', 1, '2012-12-12 19:43:06', '2013-02-01 11:40:51'),
(3, '12 Days Amazing Cultural tour', 'ASI', 'SRI', 'SRL940001ST', 'This is a Srilanka Mega Tour package for the world', 'About 7 km north of the country''s international airport lies this bustling fishing town with miles long golden sandy beachessoaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', 'About 7 km north of the country''s international airport lies this bustling fishing town with miles long goldensandy beaches soaked in tropical sunlight dotted with many hotels and restaurants. Negombo is one of the cities that were under Portuguese and as a result the Catholic community is much greater. ', '5299', 'Round Trip', 0, 'sri_path/1418985922_natural_33images.jpg', 'sri_path1/910947869_natural_32images.jpg', 'sri_path2/2094060701_natural_31images.jpg', 1, '2012-12-20 19:14:59', '2013-02-09 07:36:52'),
(4, '14 Day Amazing tour', 'ASI', 'SRI', 'SRL940002ST', 'teste', 'teste', 'tesse', '1234', 'Beach Holiday', 0, 'sri_path/1685860954_0(29).jpg', 'sri_path1/1489204278_0(86).jpg', 'sri_path2/735299546_0(35).jpg', 1, '2013-01-09 18:37:08', '2013-01-31 12:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `tour_enquiry`
--

CREATE TABLE IF NOT EXISTS `tour_enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_phone` varchar(200) DEFAULT NULL,
  `user_msg` text,
  `tour_id` int(11) DEFAULT NULL,
  `insertedDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tour_enquiry`
--

INSERT INTO `tour_enquiry` (`enquiry_id`, `user_name`, `user_email`, `user_phone`, `user_msg`, `tour_id`, `insertedDate`, `updatedDate`) VALUES
(1, '', '', '', '', 12, '2012-11-29 11:27:36', '0000-00-00 00:00:00'),
(2, '', '', '', '', 12, '2012-11-29 11:28:10', '0000-00-00 00:00:00'),
(3, '', '', '', '', 12, '2012-11-29 11:28:36', '0000-00-00 00:00:00'),
(4, '', '', '', '', 12, '2012-11-29 11:29:07', '0000-00-00 00:00:00'),
(5, '', '', '', '', 12, '2012-11-29 11:29:16', '0000-00-00 00:00:00'),
(6, 'senthi kumar', 'senthil090680@gmail.com', '9994589321', 'hi i ma interested in this', 12, '2012-11-29 11:30:56', '0000-00-00 00:00:00'),
(7, 'sensehisdk', 'saraswathi_ict@yahoo.com', '9940413993', 'hi iam interetsted inthsi ', 12, '2012-11-29 11:32:00', '0000-00-00 00:00:00'),
(8, 'senthil kumar', 'senthil090680@gmaill.com', '9994589321', 'this is my msg', 12, '2012-11-29 11:42:56', '0000-00-00 00:00:00'),
(9, 'senthil kumar', 'senthil090680@gmail.com', '9994589321', 'this is a good message', 11, '2012-11-29 19:12:24', '0000-00-00 00:00:00'),
(10, '', '', '', '', 7, '2012-12-01 04:24:22', '0000-00-00 00:00:00'),
(11, '', '', '', '', 12, '2012-12-01 05:03:12', '0000-00-00 00:00:00'),
(12, '', '', '', '', 12, '2012-12-01 05:04:04', '0000-00-00 00:00:00'),
(13, '', '', '', '', 12, '2012-12-01 05:04:14', '0000-00-00 00:00:00'),
(14, '', '', '', '', 12, '2012-12-01 05:04:30', '0000-00-00 00:00:00'),
(15, '', '', '', '', 12, '2012-12-01 05:07:54', '0000-00-00 00:00:00'),
(16, '', '', '', '', 12, '2012-12-01 05:08:47', '0000-00-00 00:00:00'),
(17, '', '', '', '', 12, '2012-12-01 05:13:22', '0000-00-00 00:00:00'),
(18, '', '', '', '', 12, '2012-12-01 05:14:11', '0000-00-00 00:00:00'),
(19, '', '', '', '', 12, '2012-12-01 05:14:17', '0000-00-00 00:00:00'),
(20, '', '', '', '', 12, '2012-12-01 05:14:49', '0000-00-00 00:00:00'),
(21, '', '', '', '', 12, '2012-12-01 05:14:56', '0000-00-00 00:00:00'),
(22, '', '', '', '', 12, '2012-12-01 05:15:06', '0000-00-00 00:00:00'),
(23, '', '', '', '', 11, '2012-12-01 19:51:27', '0000-00-00 00:00:00'),
(24, '', '', '', '', 8, '2012-12-07 05:02:11', '0000-00-00 00:00:00'),
(25, '', '', '', '', 11, '2012-12-11 16:37:01', '0000-00-00 00:00:00'),
(26, '', '', '', '', 11, '2012-12-11 16:37:36', '0000-00-00 00:00:00'),
(27, '', '', '', '', 11, '2012-12-11 16:38:05', '0000-00-00 00:00:00'),
(28, '', '', '', '', 11, '2012-12-11 16:39:22', '0000-00-00 00:00:00'),
(29, '', '', '', '', 11, '2012-12-11 16:40:30', '0000-00-00 00:00:00'),
(30, '', '', '', '', 11, '2012-12-11 16:44:35', '0000-00-00 00:00:00'),
(31, '', '', '', '', 11, '2012-12-11 16:45:33', '0000-00-00 00:00:00'),
(32, 'serrwe', '', '', '', 11, '2012-12-11 16:51:23', '0000-00-00 00:00:00'),
(33, 'senthil ', 'senthil090680@gmail.com', '', '', 11, '2012-12-11 17:18:14', '0000-00-00 00:00:00'),
(34, 'wwerwe', 'senthil090680@gmail.com', '', '', 11, '2012-12-11 17:21:30', '0000-00-00 00:00:00'),
(35, '', '', '', '', 11, '2012-12-11 17:25:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tour_plan`
--

CREATE TABLE IF NOT EXISTS `tour_plan` (
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
  `ratesFor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tour_plan`
--

INSERT INTO `tour_plan` (`tour_id`, `tour_name`, `continent_name`, `country_name`, `product_services`, `touring`, `tour_code`, `tour_desc`, `tour_cost`, `front_order`, `thumb_path`, `plan_status`, `insertedDate`, `updatedDate`, `thumb_path1`, `thumb_path2`, `ratesFor`) VALUES
(11, 'Hello tour1', 'ASI', 'IND', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '52222', '52222', '52222', 0, 'thumb_path/1267449541_natural_7index.jpg', 1, '2012-11-28 11:43:01', '2012-12-11 15:08:22', 'thumb_path1/1912529800_natural_8index.jpg', 'thumb_path2/1764366304_natural_9index.jpg', NULL),
(3, 'top left', 'ASI', 'THI', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF1287', 'tthis is top left', '7899', 0, 'thumb_path/1979295888_natural_25images.jpg', 1, '2012-11-21 09:28:10', '2012-12-11 15:13:37', 'thumb_path1/1679313219_natural_26images.jpg', 'thumb_path2/154324532_natural_27images.jpg', NULL),
(4, 'middle right', 'EUR', 'FRA', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF12788', 'this is middle right', '7999', 0, 'thumb_path/1437371735_natural_22images.jpg', 1, '2012-11-21 09:28:57', '2012-12-11 15:12:59', 'thumb_path1/1067030197_natural_23images.jpg', 'thumb_path2/1101516320_natural_24images.jpg', NULL),
(5, 'down right', 'EUR', 'SWI', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF12144', 'ths is down right', '7989', 0, 'thumb_path/543959136_natural_19images.jpg', 1, '2012-11-21 09:29:30', '2012-12-11 15:12:21', 'thumb_path1/958941332_natural_20images.jpg', 'thumb_path2/1831326247_natural_21images.jpg', NULL),
(6, 'down left', 'MIDEST', 'OMA', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF14778', 'this is down left', '2555', 0, 'thumb_path/606175205_natural_16images.jpg', 1, '2012-11-21 09:30:04', '2012-12-11 15:10:34', 'thumb_path1/857301229_natural_17images.jpg', 'thumb_path2/1087788950_natural_18images.jpg', NULL),
(7, 'Asia new', 'ASI', 'MAL', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF41455', 'this is asia new again', '588', 0, 'thumb_path/221083789_natural_13images.jpg', 1, '2012-11-26 04:28:26', '2012-12-11 15:09:43', 'thumb_path1/1741894977_natural_14images.jpg', 'thumb_path2/1941345573_natural_15images.jpg', NULL),
(8, 'Middle east again', 'MIDEST', 'IRA', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'CHF23534', 'this is middle east again', '7888', 0, 'thumb_path/863455681_natural_10index.jpg', 1, '2012-11-26 04:29:38', '2012-12-11 15:10:59', 'thumb_path1/632413394_natural_11index.jpg', 'thumb_path2/1070257865_natural_12images.jpg', NULL),
(12, 'Hello this is latest one', 'EUR', 'GER', 'This dummy data contains everything that a theme might express in a blog post, with a bunch of tags, categories, child-cats, child-pages, comments, gravatar-support, etc?', 'WP-Dummy-Content is a WordPress plugin that will generate a bunch of pages, sub-pages and posts which you specify. ', 'india123', 'india123', 'india123', 0, 'thumb_path/1754860846_natural_1index.jpg', 1, '2012-11-29 10:30:55', '2012-12-11 16:34:04', 'thumb_path1/1943603030_natural_2index.jpg', 'thumb_path2/443045523_natural_3index.jpg', NULL),
(13, 'India Package tour of South India', 'ASI', 'IND', 'This is one of the major tour areas covered in india', 'This is the touring of most significant areas in south india covering lot of places', 'CHP45899', 'This is a mega tour package covering south india', '4878', 0, 'thumb_path/584655642_natural_4index.jpg', 1, '2012-12-11 14:47:15', '2012-12-11 14:49:10', 'thumb_path1/841841786_natural_5index.jpg', 'thumb_path2/1742868169_natural_6index.jpg', NULL),
(15, 'Chennai Tour', 'ASI', 'IND', '<br><br />\r\nAccommodation provided', 'Travels charges included', 'CHR 150001', 'near\\''s s\\''tandard dummy text ever since the 1500s, when an unknown printer took a galle\\'' at line 1', '15000', 0, 'thumb_path/901988033_Desert.jpg', 1, '2013-02-09 05:00:20', '2013-02-14 15:50:49', 'thumb_path1/1680337799_Hydrangeas.jpg', 'thumb_path2/301434756_Jellyfish.jpg', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
