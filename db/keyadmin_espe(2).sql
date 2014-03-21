-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: 174.132.105.98:3306
-- Generation Time: Aug 08, 2013 at 04:38 PM
-- Server version: 5.5.23
-- PHP Version: 5.1.6
-- 
-- Database: `keyadmin_espe`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

-- 
-- Table structure for table `countries`
-- 

CREATE TABLE `countries` (
  `cid` int(12) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `cabr` varchar(50) NOT NULL,
  `ccode` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

-- 
-- Dumping data for table `countries`
-- 

INSERT INTO `countries` VALUES (1, 'Algeria', '', '');
INSERT INTO `countries` VALUES (2, 'Angola', '', '');
INSERT INTO `countries` VALUES (3, 'Benin', '', '');
INSERT INTO `countries` VALUES (4, 'Botswana', '', '');
INSERT INTO `countries` VALUES (5, 'Burkina Faso', '', '');
INSERT INTO `countries` VALUES (6, 'Burundi', '', '');
INSERT INTO `countries` VALUES (7, 'Cameroon', '', '');
INSERT INTO `countries` VALUES (8, 'Cape Verde', '', '');
INSERT INTO `countries` VALUES (9, 'Central African Republic', '', '');
INSERT INTO `countries` VALUES (10, 'Chad', '', '');
INSERT INTO `countries` VALUES (11, 'Comoros', '', '');
INSERT INTO `countries` VALUES (12, 'Congo, Dem.', '', '');
INSERT INTO `countries` VALUES (13, 'Congo, Rep.', '', '');
INSERT INTO `countries` VALUES (14, 'Djibouti', '', '');
INSERT INTO `countries` VALUES (15, 'Egypt', '', '');
INSERT INTO `countries` VALUES (16, 'Equatorial Guinea', '', '');
INSERT INTO `countries` VALUES (17, 'Eritrea', '', '');
INSERT INTO `countries` VALUES (18, 'Ethiopia', '', '');
INSERT INTO `countries` VALUES (19, 'Gabon', '', '');
INSERT INTO `countries` VALUES (20, 'Gambia', '', '');
INSERT INTO `countries` VALUES (21, 'Ghana', '', '');
INSERT INTO `countries` VALUES (22, 'Guinea', '', '');
INSERT INTO `countries` VALUES (23, 'Guinea-Bissau', '', '');
INSERT INTO `countries` VALUES (24, 'Kenya', '', '');
INSERT INTO `countries` VALUES (25, 'Lesotho', '', '');
INSERT INTO `countries` VALUES (26, 'Liberia', '', '');
INSERT INTO `countries` VALUES (27, 'Libya', '', '');
INSERT INTO `countries` VALUES (28, 'Madagascar', '', '');
INSERT INTO `countries` VALUES (29, 'Malawi', '', '');
INSERT INTO `countries` VALUES (30, 'Mali', '', '');
INSERT INTO `countries` VALUES (31, 'Mauritania', '', '');
INSERT INTO `countries` VALUES (32, 'Mauritius', '', '');
INSERT INTO `countries` VALUES (33, 'Morocco', '', '');
INSERT INTO `countries` VALUES (34, 'Mozambique', '', '');
INSERT INTO `countries` VALUES (35, 'Namibia', '', '');
INSERT INTO `countries` VALUES (36, 'Niger', '', '');
INSERT INTO `countries` VALUES (37, 'Nigeria', '', '');
INSERT INTO `countries` VALUES (38, 'Rwanda', '', '');
INSERT INTO `countries` VALUES (39, 'Sao Tome/Principe', '', '');
INSERT INTO `countries` VALUES (40, 'Senegal', '', '');
INSERT INTO `countries` VALUES (41, 'Seychelles', '', '');
INSERT INTO `countries` VALUES (42, 'Sierra Leone', '', '');
INSERT INTO `countries` VALUES (43, 'Somalia', '', '');
INSERT INTO `countries` VALUES (44, 'South Africa', '', '');
INSERT INTO `countries` VALUES (45, 'Sudan', '', '');
INSERT INTO `countries` VALUES (46, 'Swaziland', '', '');
INSERT INTO `countries` VALUES (47, 'Tanzania', '', '');
INSERT INTO `countries` VALUES (48, 'Togo', '', '');
INSERT INTO `countries` VALUES (49, 'Tunisia', '', '');
INSERT INTO `countries` VALUES (50, 'Uganda', '', '');
INSERT INTO `countries` VALUES (51, 'Zambia', '', '');
INSERT INTO `countries` VALUES (52, 'Zimbabwe', '', '');
INSERT INTO `countries` VALUES (54, 'Amundsen-Scott', '', '');
INSERT INTO `countries` VALUES (55, 'Bangladesh', '', '');
INSERT INTO `countries` VALUES (56, 'Bhutan', '', '');
INSERT INTO `countries` VALUES (57, 'Brunei', '', '');
INSERT INTO `countries` VALUES (58, 'Burma (Myanmar)', '', '');
INSERT INTO `countries` VALUES (59, 'Cambodia', '', '');
INSERT INTO `countries` VALUES (60, 'China', '', '');
INSERT INTO `countries` VALUES (61, 'East Timor', '', '');
INSERT INTO `countries` VALUES (62, 'India', '', '');
INSERT INTO `countries` VALUES (63, 'Indonesia', '', '');
INSERT INTO `countries` VALUES (64, 'Japan', '', '');
INSERT INTO `countries` VALUES (65, 'Kazakhstan', '', '');
INSERT INTO `countries` VALUES (66, 'Korea (north)', '', '');
INSERT INTO `countries` VALUES (67, 'Korea (south)', '', '');
INSERT INTO `countries` VALUES (68, 'Laos', '', '');
INSERT INTO `countries` VALUES (69, 'Malaysia', '', '');
INSERT INTO `countries` VALUES (70, 'Maldives', '', '');
INSERT INTO `countries` VALUES (71, 'Mongolia', '', '');
INSERT INTO `countries` VALUES (72, 'Nepal', '', '');
INSERT INTO `countries` VALUES (73, 'Philippines', '', '');
INSERT INTO `countries` VALUES (74, 'Russian Federation', '', '');
INSERT INTO `countries` VALUES (75, 'Singapore', '', '');
INSERT INTO `countries` VALUES (76, 'Sri Lanka', '', '');
INSERT INTO `countries` VALUES (77, 'Taiwan', '', '');
INSERT INTO `countries` VALUES (78, 'Thailand', '', '');
INSERT INTO `countries` VALUES (79, 'Vietnam', '', '');
INSERT INTO `countries` VALUES (80, 'Australia', '', '');
INSERT INTO `countries` VALUES (81, 'Fiji', '', '');
INSERT INTO `countries` VALUES (82, 'Kiribati', '', '');
INSERT INTO `countries` VALUES (83, 'Micronesia', '', '');
INSERT INTO `countries` VALUES (84, 'Nauru', '', '');
INSERT INTO `countries` VALUES (85, 'New Zealand', '', '');
INSERT INTO `countries` VALUES (86, 'Palau', '', '');
INSERT INTO `countries` VALUES (87, 'Papua New Guinea', '', '');
INSERT INTO `countries` VALUES (88, 'Samoa', '', '');
INSERT INTO `countries` VALUES (89, 'Tonga', '', '');
INSERT INTO `countries` VALUES (90, 'Tuvalu', '', '');
INSERT INTO `countries` VALUES (91, 'Vanuatu', '', '');
INSERT INTO `countries` VALUES (92, 'Anguilla', '', '');
INSERT INTO `countries` VALUES (93, 'Antigua/Barbuda', '', '');
INSERT INTO `countries` VALUES (94, 'Aruba', '', '');
INSERT INTO `countries` VALUES (95, 'Bahamas', '', '');
INSERT INTO `countries` VALUES (96, 'Barbados', '', '');
INSERT INTO `countries` VALUES (97, 'Cozumel', '', '');
INSERT INTO `countries` VALUES (98, 'Cuba', '', '');
INSERT INTO `countries` VALUES (99, 'Dominica', '', '');
INSERT INTO `countries` VALUES (100, 'Dominican Republic', '', '');
INSERT INTO `countries` VALUES (101, 'Grenada', '', '');
INSERT INTO `countries` VALUES (102, 'Guadeloupe', '', '');
INSERT INTO `countries` VALUES (103, 'Haiti', '', '');
INSERT INTO `countries` VALUES (104, 'Jamaica', '', '');
INSERT INTO `countries` VALUES (105, 'Martinique', '', '');
INSERT INTO `countries` VALUES (106, 'Montserrat', '', '');
INSERT INTO `countries` VALUES (107, 'Netherlands Antilles', '', '');
INSERT INTO `countries` VALUES (108, 'Puerto Rico', '', '');
INSERT INTO `countries` VALUES (109, 'St. Barts', '', '');
INSERT INTO `countries` VALUES (110, 'St. Kitts/Nevis', '', '');
INSERT INTO `countries` VALUES (111, 'St. Lucia', '', '');
INSERT INTO `countries` VALUES (112, 'St. Martin/Sint Maarten', '', '');
INSERT INTO `countries` VALUES (113, 'St Vincent/Grenadines', '', '');
INSERT INTO `countries` VALUES (114, 'San Andres', '', '');
INSERT INTO `countries` VALUES (115, 'Trinidad/Tobago', '', '');
INSERT INTO `countries` VALUES (116, 'Turks/Caicos', '', '');
INSERT INTO `countries` VALUES (117, 'Belize', '', '');
INSERT INTO `countries` VALUES (118, 'Costa Rica', '', '');
INSERT INTO `countries` VALUES (119, 'El Salvador', '', '');
INSERT INTO `countries` VALUES (120, 'Guatemala', '', '');
INSERT INTO `countries` VALUES (121, 'Honduras', '', '');
INSERT INTO `countries` VALUES (122, 'Nicaragua', '', '');
INSERT INTO `countries` VALUES (123, 'Panama', '', '');
INSERT INTO `countries` VALUES (124, 'Albania', '', '');
INSERT INTO `countries` VALUES (125, 'Andorra', '', '');
INSERT INTO `countries` VALUES (126, 'Austria', '', '');
INSERT INTO `countries` VALUES (127, 'Belarus', '', '');
INSERT INTO `countries` VALUES (128, 'Belgium', '', '');
INSERT INTO `countries` VALUES (129, 'Bosnia-Herzegovina', '', '');
INSERT INTO `countries` VALUES (130, 'Bulgaria', '', '');
INSERT INTO `countries` VALUES (131, 'Croatia', '', '');
INSERT INTO `countries` VALUES (132, 'Czech Republic', '', '');
INSERT INTO `countries` VALUES (133, 'Denmark', '', '');
INSERT INTO `countries` VALUES (134, 'Estonia', '', '');
INSERT INTO `countries` VALUES (135, 'Finland', '', '');
INSERT INTO `countries` VALUES (136, 'France', '', '');
INSERT INTO `countries` VALUES (137, 'Georgia', '', '');
INSERT INTO `countries` VALUES (138, 'Germany', '', '');
INSERT INTO `countries` VALUES (139, 'Greece', '', '');
INSERT INTO `countries` VALUES (140, 'Hungary', '', '');
INSERT INTO `countries` VALUES (141, 'Iceland', '', '');
INSERT INTO `countries` VALUES (142, 'Ireland', '', '');
INSERT INTO `countries` VALUES (143, 'Italy', '', '');
INSERT INTO `countries` VALUES (144, 'Latvia', '', '');
INSERT INTO `countries` VALUES (145, 'Liechtenstein', '', '');
INSERT INTO `countries` VALUES (146, 'Lithuania', '', '');
INSERT INTO `countries` VALUES (147, 'Luxembourg', '', '');
INSERT INTO `countries` VALUES (148, 'Macedonia', '', '');
INSERT INTO `countries` VALUES (149, 'Malta', '', '');
INSERT INTO `countries` VALUES (150, 'Moldova', '', '');
INSERT INTO `countries` VALUES (151, 'Monaco', '', '');
INSERT INTO `countries` VALUES (152, 'Netherlands', '', '');
INSERT INTO `countries` VALUES (153, 'Norway', '', '');
INSERT INTO `countries` VALUES (154, 'Poland', '', '');
INSERT INTO `countries` VALUES (155, 'Portugal', '', '');
INSERT INTO `countries` VALUES (156, 'Romania', '', '');
INSERT INTO `countries` VALUES (157, 'San Marino', '', '');
INSERT INTO `countries` VALUES (158, 'Serbia/Montenegro (Yugoslavia)', '', '');
INSERT INTO `countries` VALUES (159, 'Slovakia', '', '');
INSERT INTO `countries` VALUES (160, 'Slovenia', '', '');
INSERT INTO `countries` VALUES (161, 'Spain', '', '');
INSERT INTO `countries` VALUES (162, 'Sweden', '', '');
INSERT INTO `countries` VALUES (163, 'Switzerland', '', '');
INSERT INTO `countries` VALUES (164, 'Ukraine', '', '');
INSERT INTO `countries` VALUES (165, 'United Kingdom', '', '');
INSERT INTO `countries` VALUES (166, 'Vatican City', '', '');
INSERT INTO `countries` VALUES (167, 'Arctic Ocean', '', '');
INSERT INTO `countries` VALUES (168, 'Atlantic Ocean (North)', '', '');
INSERT INTO `countries` VALUES (169, 'Atlantic Ocean (South)', '', '');
INSERT INTO `countries` VALUES (170, 'Assorted', '', '');
INSERT INTO `countries` VALUES (171, 'Caribbean Sea', '', '');
INSERT INTO `countries` VALUES (172, 'Greek Isles', '', '');
INSERT INTO `countries` VALUES (173, 'Indian Ocean', '', '');
INSERT INTO `countries` VALUES (174, 'Mediterranean Sea', '', '');
INSERT INTO `countries` VALUES (175, 'Oceania', '', '');
INSERT INTO `countries` VALUES (176, 'Pacific Ocean (North)', '', '');
INSERT INTO `countries` VALUES (177, 'Pacific Ocean (South)', '', '');
INSERT INTO `countries` VALUES (178, 'Afghanistan', '', '');
INSERT INTO `countries` VALUES (179, 'Armenia', '', '');
INSERT INTO `countries` VALUES (180, 'Azerbaijan', '', '');
INSERT INTO `countries` VALUES (181, 'Bahrain', '', '');
INSERT INTO `countries` VALUES (182, 'Cyprus', '', '');
INSERT INTO `countries` VALUES (183, 'Iran', '', '');
INSERT INTO `countries` VALUES (184, 'Iraq', '', '');
INSERT INTO `countries` VALUES (185, 'Israel', '', '');
INSERT INTO `countries` VALUES (186, 'Jordan', '', '');
INSERT INTO `countries` VALUES (187, 'Kuwait', '', '');
INSERT INTO `countries` VALUES (188, 'Kyrgyzstan', '', '');
INSERT INTO `countries` VALUES (189, 'Lebanon', '', '');
INSERT INTO `countries` VALUES (190, 'Oman', '', '');
INSERT INTO `countries` VALUES (191, 'Pakistan', '', '');
INSERT INTO `countries` VALUES (192, 'Qatar', '', '');
INSERT INTO `countries` VALUES (193, 'Saudi Arabia', '', '');
INSERT INTO `countries` VALUES (194, 'Syria', '', '');
INSERT INTO `countries` VALUES (195, 'Tajikistan', '', '');
INSERT INTO `countries` VALUES (196, 'Turkey', '', '');
INSERT INTO `countries` VALUES (197, 'Turkmenistan', '', '');
INSERT INTO `countries` VALUES (198, 'United Arab Emirates', '', '');
INSERT INTO `countries` VALUES (199, 'Uzbekistan', '', '');
INSERT INTO `countries` VALUES (200, 'Yemen', '', '');
INSERT INTO `countries` VALUES (201, 'Bermuda', '', '');
INSERT INTO `countries` VALUES (202, 'Canada', '', '');
INSERT INTO `countries` VALUES (203, 'Greenland', '', '');
INSERT INTO `countries` VALUES (204, 'Mexico', '', '');
INSERT INTO `countries` VALUES (205, 'United States', '', '');
INSERT INTO `countries` VALUES (206, 'Argentina', '', '');
INSERT INTO `countries` VALUES (207, 'Bolivia', '', '');
INSERT INTO `countries` VALUES (208, 'Brazil', '', '');
INSERT INTO `countries` VALUES (209, 'Chile', '', '');
INSERT INTO `countries` VALUES (210, 'Colombia', '', '');
INSERT INTO `countries` VALUES (211, 'Ecuador', '', '');
INSERT INTO `countries` VALUES (212, 'Guyana', '', '');
INSERT INTO `countries` VALUES (213, 'Paraguay', '', '');
INSERT INTO `countries` VALUES (214, 'Peru', '', '');
INSERT INTO `countries` VALUES (215, 'Suriname', '', '');
INSERT INTO `countries` VALUES (216, 'Uruguay', '', '');
INSERT INTO `countries` VALUES (217, 'Venezuela', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `donor_login_history`
-- 

CREATE TABLE `donor_login_history` (
  `donor_login_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_register_id` int(11) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipaddress` varchar(20) NOT NULL,
  `is_success` tinyint(4) NOT NULL,
  PRIMARY KEY (`donor_login_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `donor_login_history`
-- 

INSERT INTO `donor_login_history` VALUES (1, 2, '2013-05-01 01:01:13', '::1', 1);
INSERT INTO `donor_login_history` VALUES (2, 2, '2013-05-01 17:28:12', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (3, 2, '2013-05-01 17:31:48', '::1', 1);
INSERT INTO `donor_login_history` VALUES (4, 2, '2013-05-01 19:00:02', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (5, 2, '2013-05-01 19:10:19', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (6, 2, '2013-05-01 19:13:21', '192.168.1.2', 1);
INSERT INTO `donor_login_history` VALUES (7, 2, '2013-05-01 19:14:11', '192.168.1.2', 1);
INSERT INTO `donor_login_history` VALUES (8, 2, '2013-05-01 19:22:06', '::1', 1);
INSERT INTO `donor_login_history` VALUES (9, 2, '2013-05-01 19:39:04', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (10, 2, '2013-05-01 21:20:41', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (11, 2, '2013-05-01 21:58:52', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (12, 2, '2013-05-01 22:08:23', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (13, 2, '2013-05-01 22:12:55', '::1', 1);
INSERT INTO `donor_login_history` VALUES (14, 2, '2013-05-01 22:44:10', '192.168.1.5', 1);
INSERT INTO `donor_login_history` VALUES (15, 3, '2013-06-18 21:49:15', '127.0.0.1', 1);
INSERT INTO `donor_login_history` VALUES (16, 3, '2013-06-23 15:53:25', '127.0.0.1', 1);
INSERT INTO `donor_login_history` VALUES (17, 3, '2013-06-23 16:05:15', '127.0.0.1', 1);
INSERT INTO `donor_login_history` VALUES (18, 3, '2013-06-25 01:16:15', '127.0.0.1', 1);
INSERT INTO `donor_login_history` VALUES (19, 3, '2013-06-25 20:08:44', '127.0.0.1', 1);
INSERT INTO `donor_login_history` VALUES (20, 3, '2013-07-07 12:07:59', '127.0.0.1', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `donor_register`
-- 

CREATE TABLE `donor_register` (
  `donor_register_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_first_name` varchar(255) NOT NULL,
  `donor_last_name` varchar(255) NOT NULL,
  `donor_address` text NOT NULL,
  `donor_phone` varchar(20) NOT NULL,
  `donor_email` varchar(50) NOT NULL,
  `donor_username` varchar(50) NOT NULL,
  `donor_password` varchar(50) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mdate` datetime NOT NULL,
  `verification_code` varchar(20) NOT NULL,
  `is_verify` tinyint(4) NOT NULL,
  `is_approve` tinyint(4) NOT NULL,
  PRIMARY KEY (`donor_register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `donor_register`
-- 

INSERT INTO `donor_register` VALUES (3, 'abhinand donor', 'last name', 'donor address1', '1234567890', 'abhinand@donor.com', 'donor', '24509bdd53861f8f468a94c84526f88a', '2013-06-18 21:49:01', '2013-06-18 21:40:36', '5901a287', 1, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `donor_register_payment`
-- 

CREATE TABLE `donor_register_payment` (
  `donor_register_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_register_id` int(11) NOT NULL,
  `donor_payment_data` varchar(255) NOT NULL,
  `donor_payment_amount` int(11) NOT NULL,
  `donor_payment_status` tinyint(4) NOT NULL,
  `payer_id` varchar(15) NOT NULL,
  `member_donation_request_id` int(11) NOT NULL,
  PRIMARY KEY (`donor_register_payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `donor_register_payment`
-- 

INSERT INTO `donor_register_payment` VALUES (1, 1, '', 2500, 0, '', 2);
INSERT INTO `donor_register_payment` VALUES (2, 2, '', 2500, 0, '', 2);
INSERT INTO `donor_register_payment` VALUES (3, 2, '', 2500, 0, '', 2);
INSERT INTO `donor_register_payment` VALUES (4, 2, '', 2500, 0, '', 2);
INSERT INTO `donor_register_payment` VALUES (5, 2, '', 2500, 0, '', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `guest_payment`
-- 

CREATE TABLE `guest_payment` (
  `guest_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_payment_first_name` varchar(255) NOT NULL,
  `guest_payment_last_name` varchar(255) NOT NULL,
  `guest_payment_email` varchar(255) NOT NULL,
  `guest_payment_data` varchar(255) NOT NULL,
  `guest_payment_amount` int(11) NOT NULL,
  `guest_payment_status` tinyint(1) NOT NULL,
  `payer_id` varchar(15) NOT NULL,
  `member_donation_request_id` int(11) NOT NULL,
  PRIMARY KEY (`guest_payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `guest_payment`
-- 

INSERT INTO `guest_payment` VALUES (1, 'rakesh', 'chaudhari', 'rakesh@infowebsolution.net', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (2, 'rakeshj', 'chaudhari', 'rakesh@infowebsolution.net', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (4, 'jisan', 'poalra', 'jisan@infowebsolution.net', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (5, 'asasdas', 'asdasd', 'asdas@y.com', '', 0, 1, '', 2);
INSERT INTO `guest_payment` VALUES (6, 'rahul', 'patel', 'rahul@y.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (7, 'rakesh', 'chudhari', 'asdasdas@y.com', '', 0, 1, '', 2);
INSERT INTO `guest_payment` VALUES (8, 'asdasd', 'asdasd', 'asdasd@y.com', '', 0, 1, '', 2);
INSERT INTO `guest_payment` VALUES (9, 'asdasd', 'asdasd', 'asdasd@y.com', '', 0, 1, '', 2);
INSERT INTO `guest_payment` VALUES (10, 'asdasdasd', 'asdasdas', 'asd@y.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (11, 'asdasdasd', 'asdasdas', 'asd@y.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (12, 'dfgfdg', 'dfgdfg', 'dfgdfg@m.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (13, 'rakesh', 'tasd', 'rakes@y.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (14, 'sdasdasdas', 'dasdsadasd', 'asdsad@y.com', '', 0, 0, '', 2);
INSERT INTO `guest_payment` VALUES (15, 'sdsad', 'asdas', 'asdasd@u.com', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (16, 'asd', 'dasdas', 'asdasdasdas@a.com', '', 2500, 1, '', 2);
INSERT INTO `guest_payment` VALUES (17, 'ssdf', 'sfsd', 'sdfsd@u.com', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (18, 'sdf', 'sdfsd', 'fsdsdf@i.com', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (19, 'sdfds', 'fsdfsd', 'fsdfsdfsd@y.com', '', 2500, 0, '', 2);
INSERT INTO `guest_payment` VALUES (20, 'jisan', 'polara', 'jisan@info.com', '', 2500, 0, '', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `member_donation_request`
-- 

CREATE TABLE `member_donation_request` (
  `member_donation_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_register_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `cdate` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `approve_date` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `collected_amount` int(11) NOT NULL,
  `country` int(20) NOT NULL,
  `province` int(20) NOT NULL,
  PRIMARY KEY (`member_donation_request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `member_donation_request`
-- 

INSERT INTO `member_donation_request` VALUES (5, 10, 'Test Request', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1500, '2013-06-22 21:23:48', 1, '2013-06-22 21:27:48', '', 25, 0, 0);
INSERT INTO `member_donation_request` VALUES (6, 10, 'child help', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique consequat ligula. Cras eros lacus, hendrerit at sagittis commodo, consectetur at metus. Integer rhoncus ipsum quis eros cursus, sed porttitor quam mattis. Pellentesque tincidunt nulla dictum metus hendrerit, vulputate convallis nulla molestie. Proin aliquet, velit id porta porta, dui diam hendrerit leo, eu vehicula orci neque eget quam. Fusce dui est, pretium sed pretium id, tempor eget leo. Suspendisse vel augue posuere magna venenatis sodales eget sit amet justo. Suspendisse et egestas erat, et venenatis orci. Suspendisse tellus nisi, rhoncus et nunc ut, tincidunt ullamcorper nisi. Suspendisse vehicula justo ut arcu congue, et hendrerit quam porta. Nulla facilisi. Nunc lobortis nec libero quis condimentum. Vivamus semper sagittis ligula sed luctus.', 1000, '2013-06-22 21:24:48', 1, '2013-06-22 21:27:55', '', 40, 0, 0);
INSERT INTO `member_donation_request` VALUES (7, 10, 'women help', 'Donec fermentum odio et nibh eleifend consequat. Sed vehicula dictum tincidunt. Quisque adipiscing quam dignissim, dapibus risus nec, volutpat mauris. Nullam ante augue, dapibus eget semper ut, eleifend eget neque. Ut ut nibh nec enim condimentum semper a quis nibh. Sed aliquam magna nec porttitor tincidunt. Quisque ut convallis augue. Nulla eget elit sem. Ut at pretium odio. Aenean porttitor metus ut pretium consequat. Sed at accumsan orci, quis tincidunt metus. Duis feugiat lorem ac elit lobortis vehicula. Cras sit amet blandit nisl, consectetur malesuada tellus. Mauris et elementum ipsum.', 2000, '2013-06-22 21:25:11', 1, '2013-06-22 21:28:03', '', 0, 62, 975);
INSERT INTO `member_donation_request` VALUES (8, 10, 'labouir Help', 'Sed vehicula cursus sodales. Sed risus dolor, convallis eu volutpat nec, suscipit quis nibh. Morbi dolor tellus, pretium ut augue et, faucibus eleifend erat. Nunc vel gravida sapien. Maecenas eget vestibulum diam. Maecenas vulputate, felis et rutrum tempus, ipsum orci bibendum eros, non tincidunt justo est non erat. Integer ut ante euismod, fermentum est eu, sagittis urna. Aenean ac tincidunt augue. In hac habitasse platea dictumst. Vestibulum elementum, libero nec faucibus facilisis, erat magna porttitor velit, eu sodales mauris sem nec augue. Vivamus non pharetra nunc. Pellentesque tempus urna a diam auctor volutpat. Praesent tincidunt hendrerit urna eget imperdiet.\r\n\r\nDonec fermentum odio et nibh eleifend consequat. Sed vehicula dictum tincidunt. Quisque adipiscing quam dignissim, dapibus risus nec, volutpat mauris. Nullam ante augue, dapibus eget semper ut, eleifend eget neque. Ut ut nibh nec enim condimentum semper a quis nibh. Sed aliquam magna nec porttitor tincidunt. Quisque ut convallis augue. Nulla eget elit sem. Ut at pretium odio. Aenean porttitor metus ut pretium consequat. Sed at accumsan orci, quis tincidunt metus. Duis feugiat lorem ac elit lobortis vehicula. Cras sit amet blandit nisl, consectetur malesuada tellus. Mauris et elementum ipsum.\r\n\r\nUt eros magna, lacinia in lacus a, pulvinar lobortis lorem. Phasellus nec hendrerit ipsum, eu congue erat. Cras volutpat lorem odio, nec condimentum odio mollis sed. In hac habitasse platea dictumst. Duis rutrum tellus sem, at iaculis justo hendrerit vel. Morbi placerat dui orci, vel semper leo gravida at. Fusce risus diam, euismod ut pretium et, sodales quis metus. Sed vel risus nec dolor accumsan convallis. In dapibus tortor augue, et egestas est mollis in. Suspendisse augue erat, rutrum in mauris eget, vestibulum volutpat est. Sed varius libero at vulputate accumsan. Proin risus massa, sodales nec tincidunt ut, rhoncus et justo. Morbi gravida quam non enim accumsan, consectetur posuere lectus luctus. Vestibulum at metus vulputate sem blandit auctor a cursus nunc. Vestibulum ut felis ultrices, commodo sem a, fermentum est. Mauris dignissim libero neque, ut ullamcorper lectus vestibulum et.', 4000, '2013-06-22 21:25:44', 1, '2013-06-22 21:28:10', '', 0, 62, 975);
INSERT INTO `member_donation_request` VALUES (9, 10, 'street kids', 'Nulla pulvinar vel arcu non tristique. Fusce a pharetra nunc. Donec consectetur nunc nec urna pulvinar, non mollis risus pulvinar. Nam sagittis felis eros, ut hendrerit odio vehicula sed. Etiam lobortis turpis orci, in porta dolor luctus in. Nulla malesuada, nulla at placerat pulvinar, ipsum ipsum pretium turpis, nec posuere nulla felis a felis. Nullam ut ultricies arcu. Sed tempor sem dolor, in pretium magna tristique non. Duis ac nisi augue. Donec lectus turpis, tristique a diam nec, blandit commodo ipsum. Morbi blandit mattis pharetra. Morbi id bibendum nibh. Phasellus hendrerit eros dui, ac suscipit magna tempor eu. Vivamus mauris justo, mollis at mollis id, congue quis diam.', 4000, '2013-06-22 21:26:37', 1, '2013-06-22 21:28:18', '', 0, 62, 975);
INSERT INTO `member_donation_request` VALUES (10, 10, 'rrrrrrrrr', 'test description here', 1233, '2013-07-07 10:33:34', 1, '2013-07-07 13:22:55', '', 0, 62, 975);

-- --------------------------------------------------------

-- 
-- Table structure for table `member_login_history`
-- 

CREATE TABLE `member_login_history` (
  `member_login_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_register_id` int(11) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipaddress` varchar(20) NOT NULL,
  `is_success` tinyint(4) NOT NULL,
  PRIMARY KEY (`member_login_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- 
-- Dumping data for table `member_login_history`
-- 

INSERT INTO `member_login_history` VALUES (1, 6, '2013-04-18 20:03:31', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (2, 4, '2013-04-18 22:28:51', '::1', 1);
INSERT INTO `member_login_history` VALUES (3, 4, '2013-04-18 22:30:47', '::1', 1);
INSERT INTO `member_login_history` VALUES (4, 4, '2013-04-18 23:07:48', '::1', 1);
INSERT INTO `member_login_history` VALUES (5, 4, '2013-04-18 23:26:46', '::1', 1);
INSERT INTO `member_login_history` VALUES (6, 4, '2013-04-19 00:35:34', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (7, 4, '2013-04-19 00:54:30', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (8, 4, '2013-04-19 00:57:37', '::1', 1);
INSERT INTO `member_login_history` VALUES (9, 4, '2013-04-19 01:03:27', '::1', 1);
INSERT INTO `member_login_history` VALUES (10, 4, '2013-04-19 01:05:19', '::1', 1);
INSERT INTO `member_login_history` VALUES (11, 4, '2013-04-19 01:20:49', '::1', 1);
INSERT INTO `member_login_history` VALUES (12, 4, '2013-04-24 23:13:48', '::1', 1);
INSERT INTO `member_login_history` VALUES (13, 4, '2013-04-30 21:28:19', '::1', 1);
INSERT INTO `member_login_history` VALUES (14, 4, '2013-04-30 21:28:27', '::1', 1);
INSERT INTO `member_login_history` VALUES (15, 6, '2013-05-01 18:55:22', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (16, 6, '2013-05-01 19:09:57', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (17, 6, '2013-05-01 19:38:22', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (18, 6, '2013-05-01 19:42:42', '::1', 1);
INSERT INTO `member_login_history` VALUES (19, 6, '2013-05-01 19:44:17', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (20, 6, '2013-05-01 19:54:32', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (21, 6, '2013-05-01 20:15:59', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (22, 6, '2013-05-01 20:21:47', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (23, 6, '2013-05-01 21:55:44', '192.168.1.5', 1);
INSERT INTO `member_login_history` VALUES (24, 8, '2013-06-18 21:18:36', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (25, 8, '2013-06-18 21:38:29', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (26, 10, '2013-06-22 21:18:12', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (27, 10, '2013-06-23 15:59:29', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (28, 10, '2013-07-07 08:55:59', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (29, 10, '2013-07-07 09:47:04', '127.0.0.1', 1);
INSERT INTO `member_login_history` VALUES (30, 10, '2013-07-08 15:19:21', '117.199.12.63', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `member_register`
-- 

CREATE TABLE `member_register` (
  `member_register_id` int(11) NOT NULL AUTO_INCREMENT,
  `church_name` varchar(255) NOT NULL,
  `member_first_name` varchar(255) NOT NULL,
  `member_last_name` varchar(255) NOT NULL,
  `member_address` text NOT NULL,
  `member_phone` varchar(20) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `member_fund_option` int(11) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `verification_code` varchar(20) NOT NULL,
  `is_verify` tinyint(4) NOT NULL,
  `is_approve` tinyint(4) NOT NULL,
  PRIMARY KEY (`member_register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `member_register`
-- 

INSERT INTO `member_register` VALUES (10, 'Member Church', 'member', 'member', 'member', '8893201745', 'member@gmail.com', 'member', 'bdb685be2d94fe0c3264e5b01f8040f9', 0, '2013-06-22 21:17:55', '2013-06-22 21:17:09', '62919000', 1, 1);
INSERT INTO `member_register` VALUES (13, 'abhy', 'abhy ', 'abhy last', 'p', '8893201745', 'abhinand.rieteam@gmail.com', 'abhinand', 'ae4f24b7e46b3393d78026e84f30e92d', 1, '2013-07-08 14:43:44', '2013-07-08 14:43:44', '1b299704', 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `province`
-- 

CREATE TABLE `province` (
  `pid` int(12) NOT NULL AUTO_INCREMENT,
  `cid` int(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pabr` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=4706 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4706 ;

-- 
-- Dumping data for table `province`
-- 

INSERT INTO `province` VALUES (1, 1, 'Algiers', '', '');
INSERT INTO `province` VALUES (2, 1, 'Adrar', '', '');
INSERT INTO `province` VALUES (3, 1, 'Ain Defla', '', '');
INSERT INTO `province` VALUES (4, 1, 'Ain Temouchent', '', '');
INSERT INTO `province` VALUES (5, 1, 'Alger', '', '');
INSERT INTO `province` VALUES (6, 1, 'Annaba', '', '');
INSERT INTO `province` VALUES (7, 1, 'Batna', '', '');
INSERT INTO `province` VALUES (8, 1, 'Bechar', '', '');
INSERT INTO `province` VALUES (9, 1, 'Bejaia', '', '');
INSERT INTO `province` VALUES (10, 1, 'Biskra', '', '');
INSERT INTO `province` VALUES (11, 1, 'Blida', '', '');
INSERT INTO `province` VALUES (12, 1, 'Bordj Bou Arreridj', '', '');
INSERT INTO `province` VALUES (13, 1, 'Bouira', '', '');
INSERT INTO `province` VALUES (14, 1, 'Boumerdes', '', '');
INSERT INTO `province` VALUES (15, 1, 'Chlef', '', '');
INSERT INTO `province` VALUES (16, 1, 'Constantine', '', '');
INSERT INTO `province` VALUES (17, 1, 'Djelfa', '', '');
INSERT INTO `province` VALUES (18, 1, 'El Bayadh', '', '');
INSERT INTO `province` VALUES (19, 1, 'El Oued', '', '');
INSERT INTO `province` VALUES (20, 1, 'El Tarf', '', '');
INSERT INTO `province` VALUES (21, 1, 'Ghardaia', '', '');
INSERT INTO `province` VALUES (22, 1, 'Guelma', '', '');
INSERT INTO `province` VALUES (23, 1, 'Illizi', '', '');
INSERT INTO `province` VALUES (24, 1, 'Jijel', '', '');
INSERT INTO `province` VALUES (25, 1, 'Khenchela', '', '');
INSERT INTO `province` VALUES (26, 1, 'Laghouat', '', '');
INSERT INTO `province` VALUES (27, 1, 'Mascara', '', '');
INSERT INTO `province` VALUES (28, 1, 'Medea', '', '');
INSERT INTO `province` VALUES (29, 1, 'Mila', '', '');
INSERT INTO `province` VALUES (30, 1, 'Mostaganem', '', '');
INSERT INTO `province` VALUES (31, 1, 'Naama', '', '');
INSERT INTO `province` VALUES (32, 1, 'Oran', '', '');
INSERT INTO `province` VALUES (33, 1, 'Ouargla', '', '');
INSERT INTO `province` VALUES (34, 1, 'Oum el Bouaghi', '', '');
INSERT INTO `province` VALUES (35, 1, 'Relizane', '', '');
INSERT INTO `province` VALUES (36, 1, 'Saida', '', '');
INSERT INTO `province` VALUES (37, 1, 'Setif', '', '');
INSERT INTO `province` VALUES (38, 1, 'Sidi Bel Abbes', '', '');
INSERT INTO `province` VALUES (39, 1, 'Skikda', '', '');
INSERT INTO `province` VALUES (40, 1, 'Souk Ahras', '', '');
INSERT INTO `province` VALUES (41, 1, 'Tamanghasset', '', '');
INSERT INTO `province` VALUES (42, 1, 'Tebessa', '', '');
INSERT INTO `province` VALUES (43, 1, 'Tiaret', '', '');
INSERT INTO `province` VALUES (44, 1, 'Tindouf', '', '');
INSERT INTO `province` VALUES (45, 1, 'Tipaza', '', '');
INSERT INTO `province` VALUES (46, 1, 'Tissemsilt', '', '');
INSERT INTO `province` VALUES (47, 1, 'Tizi Ouzou', '', '');
INSERT INTO `province` VALUES (48, 1, 'Tlemcen', '', '');
INSERT INTO `province` VALUES (49, 2, 'Luanda', '', '');
INSERT INTO `province` VALUES (50, 2, 'Bengo', '', '');
INSERT INTO `province` VALUES (51, 2, 'Benguela', '', '');
INSERT INTO `province` VALUES (52, 2, 'Bie', '', '');
INSERT INTO `province` VALUES (53, 2, 'Cabinda', '', '');
INSERT INTO `province` VALUES (54, 2, 'Cuando Cubango', '', '');
INSERT INTO `province` VALUES (55, 2, 'Cuanza Norte', '', '');
INSERT INTO `province` VALUES (56, 2, 'Cuanza Sul', '', '');
INSERT INTO `province` VALUES (57, 2, 'Cunene', '', '');
INSERT INTO `province` VALUES (58, 2, 'Huambo', '', '');
INSERT INTO `province` VALUES (59, 2, 'Huila', '', '');
INSERT INTO `province` VALUES (60, 2, 'Lunda Norte', '', '');
INSERT INTO `province` VALUES (61, 2, 'Lunda Sul', '', '');
INSERT INTO `province` VALUES (62, 2, 'Malanje', '', '');
INSERT INTO `province` VALUES (63, 2, 'Moxico', '', '');
INSERT INTO `province` VALUES (64, 2, 'Namibe', '', '');
INSERT INTO `province` VALUES (65, 2, 'Uige', '', '');
INSERT INTO `province` VALUES (66, 2, 'Zaire', '', '');
INSERT INTO `province` VALUES (67, 3, 'Porto-Novo', '', '');
INSERT INTO `province` VALUES (68, 3, 'Alibori', '', '');
INSERT INTO `province` VALUES (69, 3, 'Atakora', '', '');
INSERT INTO `province` VALUES (70, 3, 'Atlantique', '', '');
INSERT INTO `province` VALUES (71, 3, 'Borgou', '', '');
INSERT INTO `province` VALUES (72, 3, 'Collines', '', '');
INSERT INTO `province` VALUES (73, 3, 'Couffo', '', '');
INSERT INTO `province` VALUES (74, 3, 'Donga', '', '');
INSERT INTO `province` VALUES (75, 3, 'Littoral', '', '');
INSERT INTO `province` VALUES (76, 3, 'Mono', '', '');
INSERT INTO `province` VALUES (77, 3, 'Oueme', '', '');
INSERT INTO `province` VALUES (78, 3, 'Plateau', '', '');
INSERT INTO `province` VALUES (79, 3, 'Zou', '', '');
INSERT INTO `province` VALUES (80, 4, 'Gaborone', '', '');
INSERT INTO `province` VALUES (81, 4, 'Central', '', '');
INSERT INTO `province` VALUES (82, 4, 'Chobe', '', '');
INSERT INTO `province` VALUES (83, 4, 'Francistown', '', '');
INSERT INTO `province` VALUES (84, 4, 'Ghanzi', '', '');
INSERT INTO `province` VALUES (85, 4, 'Kgalagadi', '', '');
INSERT INTO `province` VALUES (86, 4, 'Kgatleng', '', '');
INSERT INTO `province` VALUES (87, 4, 'Kweneng', '', '');
INSERT INTO `province` VALUES (88, 4, 'Lobatse', '', '');
INSERT INTO `province` VALUES (89, 4, 'Ngamiland', '', '');
INSERT INTO `province` VALUES (90, 4, 'North-East', '', '');
INSERT INTO `province` VALUES (91, 4, 'Selebi-Pikwe', '', '');
INSERT INTO `province` VALUES (92, 4, 'South-East', '', '');
INSERT INTO `province` VALUES (93, 4, 'Southern', '', '');
INSERT INTO `province` VALUES (94, 5, 'Ouagadougou', '', '');
INSERT INTO `province` VALUES (95, 5, 'Bale', '', '');
INSERT INTO `province` VALUES (96, 5, 'Bam', '', '');
INSERT INTO `province` VALUES (97, 5, 'Banwa', '', '');
INSERT INTO `province` VALUES (98, 5, 'Bazega', '', '');
INSERT INTO `province` VALUES (99, 5, 'Bougouriba', '', '');
INSERT INTO `province` VALUES (100, 5, 'Boulgou', '', '');
INSERT INTO `province` VALUES (101, 5, 'Boulkiemde', '', '');
INSERT INTO `province` VALUES (102, 5, 'Comoe', '', '');
INSERT INTO `province` VALUES (103, 5, 'Ganzourgou', '', '');
INSERT INTO `province` VALUES (104, 5, 'Gnagna', '', '');
INSERT INTO `province` VALUES (105, 5, 'Gourma', '', '');
INSERT INTO `province` VALUES (106, 5, 'Houet', '', '');
INSERT INTO `province` VALUES (107, 5, 'Ioba', '', '');
INSERT INTO `province` VALUES (108, 5, 'Kadiogo', '', '');
INSERT INTO `province` VALUES (109, 5, 'Kenedougou', '', '');
INSERT INTO `province` VALUES (110, 5, 'Komandjari', '', '');
INSERT INTO `province` VALUES (111, 5, 'Kompienga', '', '');
INSERT INTO `province` VALUES (112, 5, 'Kossi', '', '');
INSERT INTO `province` VALUES (113, 5, 'Koupelogo', '', '');
INSERT INTO `province` VALUES (114, 5, 'Kouritenga', '', '');
INSERT INTO `province` VALUES (115, 5, 'Kourweogo', '', '');
INSERT INTO `province` VALUES (116, 5, 'Leraba', '', '');
INSERT INTO `province` VALUES (117, 5, 'Loroum', '', '');
INSERT INTO `province` VALUES (118, 5, 'Mouhoun', '', '');
INSERT INTO `province` VALUES (119, 5, 'Nahouri', '', '');
INSERT INTO `province` VALUES (120, 5, 'Namentenga', '', '');
INSERT INTO `province` VALUES (121, 5, 'Nayala', '', '');
INSERT INTO `province` VALUES (122, 5, 'Naumbiel', '', '');
INSERT INTO `province` VALUES (123, 5, 'Oubritenga', '', '');
INSERT INTO `province` VALUES (124, 5, 'Oudalan', '', '');
INSERT INTO `province` VALUES (125, 5, 'Passore', '', '');
INSERT INTO `province` VALUES (126, 5, 'Poni', '', '');
INSERT INTO `province` VALUES (127, 5, 'Samentenga', '', '');
INSERT INTO `province` VALUES (128, 5, 'Sanguie', '', '');
INSERT INTO `province` VALUES (129, 5, 'Seno', '', '');
INSERT INTO `province` VALUES (130, 5, 'Sissili', '', '');
INSERT INTO `province` VALUES (131, 5, 'Soum', '', '');
INSERT INTO `province` VALUES (132, 5, 'Sourou', '', '');
INSERT INTO `province` VALUES (133, 5, 'Tapoa', '', '');
INSERT INTO `province` VALUES (134, 5, 'Tuy', '', '');
INSERT INTO `province` VALUES (135, 5, 'Yagha', '', '');
INSERT INTO `province` VALUES (136, 5, 'Yatenga', '', '');
INSERT INTO `province` VALUES (137, 5, 'Ziro', '', '');
INSERT INTO `province` VALUES (138, 5, 'Zondomo', '', '');
INSERT INTO `province` VALUES (139, 5, 'Zoundweogo', '', '');
INSERT INTO `province` VALUES (140, 6, 'Bujumbura', '', '');
INSERT INTO `province` VALUES (141, 6, 'Bubanza', '', '');
INSERT INTO `province` VALUES (142, 6, 'Bujumbura', '', '');
INSERT INTO `province` VALUES (143, 6, 'Bururi', '', '');
INSERT INTO `province` VALUES (144, 6, 'Cankuzo', '', '');
INSERT INTO `province` VALUES (145, 6, 'Cibitoke', '', '');
INSERT INTO `province` VALUES (146, 6, 'Gitega', '', '');
INSERT INTO `province` VALUES (147, 6, 'Karuzi', '', '');
INSERT INTO `province` VALUES (148, 6, 'Kayanza', '', '');
INSERT INTO `province` VALUES (149, 6, 'Kirundo', '', '');
INSERT INTO `province` VALUES (150, 6, 'Makamba', '', '');
INSERT INTO `province` VALUES (151, 6, 'Muramvya', '', '');
INSERT INTO `province` VALUES (152, 6, 'Muyinga', '', '');
INSERT INTO `province` VALUES (153, 6, 'Mwaro', '', '');
INSERT INTO `province` VALUES (154, 6, 'Ngozi', '', '');
INSERT INTO `province` VALUES (155, 6, 'Rutana', '', '');
INSERT INTO `province` VALUES (156, 6, 'Ruyigi', '', '');
INSERT INTO `province` VALUES (157, 7, 'Yaounde', '', '');
INSERT INTO `province` VALUES (158, 7, 'Adamaoua', '', '');
INSERT INTO `province` VALUES (159, 7, 'Centre', '', '');
INSERT INTO `province` VALUES (160, 7, 'Est', '', '');
INSERT INTO `province` VALUES (161, 7, 'Extreme-Nord', '', '');
INSERT INTO `province` VALUES (162, 7, 'Littoral', '', '');
INSERT INTO `province` VALUES (163, 7, 'Nord', '', '');
INSERT INTO `province` VALUES (164, 7, 'Nord-Ouest', '', '');
INSERT INTO `province` VALUES (165, 7, 'Ouest', '', '');
INSERT INTO `province` VALUES (166, 7, 'Sud', '', '');
INSERT INTO `province` VALUES (167, 7, 'Sud-Ouest', '', '');
INSERT INTO `province` VALUES (168, 8, 'Praia', '', '');
INSERT INTO `province` VALUES (169, 8, 'Boa Vista', '', '');
INSERT INTO `province` VALUES (170, 8, 'Brava', '', '');
INSERT INTO `province` VALUES (171, 8, 'Calheta', '', '');
INSERT INTO `province` VALUES (172, 8, 'Maio', '', '');
INSERT INTO `province` VALUES (173, 8, 'Mosteiros', '', '');
INSERT INTO `province` VALUES (174, 8, 'Paul', '', '');
INSERT INTO `province` VALUES (175, 8, 'Porto Novo', '', '');
INSERT INTO `province` VALUES (176, 8, 'Ribeira Grande', '', '');
INSERT INTO `province` VALUES (177, 8, 'Sal', '', '');
INSERT INTO `province` VALUES (178, 8, 'Santa Catarina', '', '');
INSERT INTO `province` VALUES (179, 8, 'Santa Cruz', '', '');
INSERT INTO `province` VALUES (180, 8, 'Sao Domingos', '', '');
INSERT INTO `province` VALUES (181, 8, 'Sao Nicolau', '', '');
INSERT INTO `province` VALUES (182, 8, 'Sao Filipe', '', '');
INSERT INTO `province` VALUES (183, 8, 'Sao Vicente', '', '');
INSERT INTO `province` VALUES (184, 8, 'Tarrafal', '', '');
INSERT INTO `province` VALUES (185, 9, 'Bangui', '', '');
INSERT INTO `province` VALUES (186, 9, 'Bamingui-Bangoran', '', '');
INSERT INTO `province` VALUES (187, 9, 'Basse-Kotto', '', '');
INSERT INTO `province` VALUES (188, 9, 'Gribingui', '', '');
INSERT INTO `province` VALUES (189, 9, 'Haute-Kotto', '', '');
INSERT INTO `province` VALUES (190, 9, 'Haute-Sangha', '', '');
INSERT INTO `province` VALUES (191, 9, 'Haut-Mbomou', '', '');
INSERT INTO `province` VALUES (192, 9, 'Kemo-Gribingui', '', '');
INSERT INTO `province` VALUES (193, 9, 'Lobaye', '', '');
INSERT INTO `province` VALUES (194, 9, 'Mbomou', '', '');
INSERT INTO `province` VALUES (195, 9, 'Nana-Mambere', '', '');
INSERT INTO `province` VALUES (196, 9, 'Ombella-Mpoko', '', '');
INSERT INTO `province` VALUES (197, 9, 'Ouaka', '', '');
INSERT INTO `province` VALUES (198, 9, 'Ouham', '', '');
INSERT INTO `province` VALUES (199, 9, 'Ouham-Pende', '', '');
INSERT INTO `province` VALUES (200, 9, 'Sangha', '', '');
INSERT INTO `province` VALUES (201, 9, 'Vakaga', '', '');
INSERT INTO `province` VALUES (202, 10, 'Assongha', '', '');
INSERT INTO `province` VALUES (203, 10, 'Baguirmi', '', '');
INSERT INTO `province` VALUES (204, 10, 'Bahr El Gazal', '', '');
INSERT INTO `province` VALUES (205, 10, 'Bahr Koh', '', '');
INSERT INTO `province` VALUES (206, 10, 'Batha Oriental', '', '');
INSERT INTO `province` VALUES (207, 10, 'Batha Occidental', '', '');
INSERT INTO `province` VALUES (208, 10, 'Biltine', '', '');
INSERT INTO `province` VALUES (209, 10, 'Borkou', '', '');
INSERT INTO `province` VALUES (210, 10, 'Dababa', '', '');
INSERT INTO `province` VALUES (211, 10, 'Ennedi', '', '');
INSERT INTO `province` VALUES (212, 10, 'Guera', '', '');
INSERT INTO `province` VALUES (213, 10, 'Hadjer Lamis', '', '');
INSERT INTO `province` VALUES (214, 10, 'Kabia', '', '');
INSERT INTO `province` VALUES (215, 10, 'Kanem', '', '');
INSERT INTO `province` VALUES (216, 10, 'Lac', '', '');
INSERT INTO `province` VALUES (217, 10, 'Lac Iro', '', '');
INSERT INTO `province` VALUES (218, 10, 'Logone Occidental', '', '');
INSERT INTO `province` VALUES (219, 10, 'Logone Oriental', '', '');
INSERT INTO `province` VALUES (220, 10, 'Mandoul', '', '');
INSERT INTO `province` VALUES (221, 10, 'Mayo-Boneye', '', '');
INSERT INTO `province` VALUES (222, 10, 'Mayo-Dallah', '', '');
INSERT INTO `province` VALUES (223, 10, 'Monts de Lam', '', '');
INSERT INTO `province` VALUES (224, 10, 'Ouaddai', '', '');
INSERT INTO `province` VALUES (225, 10, 'Salamat', '', '');
INSERT INTO `province` VALUES (226, 10, 'Sila', '', '');
INSERT INTO `province` VALUES (227, 10, 'Tandjile Oriental', '', '');
INSERT INTO `province` VALUES (228, 10, 'Tandjile Occidental', '', '');
INSERT INTO `province` VALUES (229, 10, 'Tibesti', '', '');
INSERT INTO `province` VALUES (230, 12, 'Kinshasa', '', '');
INSERT INTO `province` VALUES (231, 12, 'Bandundu', '', '');
INSERT INTO `province` VALUES (232, 12, 'Bas-Congo', '', '');
INSERT INTO `province` VALUES (233, 12, 'Equateur', '', '');
INSERT INTO `province` VALUES (234, 12, 'Kasai-Occidental', '', '');
INSERT INTO `province` VALUES (235, 12, 'Kasai-Oriental', '', '');
INSERT INTO `province` VALUES (236, 12, 'Katanga', '', '');
INSERT INTO `province` VALUES (237, 12, 'Maniema', '', '');
INSERT INTO `province` VALUES (238, 12, 'Nord-Kivu', '', '');
INSERT INTO `province` VALUES (239, 12, 'Orientale', '', '');
INSERT INTO `province` VALUES (240, 12, 'Sud-Kivu', '', '');
INSERT INTO `province` VALUES (241, 13, 'Brazzaville', '', '');
INSERT INTO `province` VALUES (242, 13, 'Bouenza', '', '');
INSERT INTO `province` VALUES (243, 13, 'Cuvette', '', '');
INSERT INTO `province` VALUES (244, 13, 'Kouilou', '', '');
INSERT INTO `province` VALUES (245, 13, 'Lekoumou', '', '');
INSERT INTO `province` VALUES (246, 13, 'Likouala', '', '');
INSERT INTO `province` VALUES (247, 13, 'Niari', '', '');
INSERT INTO `province` VALUES (248, 13, 'Plateaux', '', '');
INSERT INTO `province` VALUES (249, 13, 'Pool', '', '');
INSERT INTO `province` VALUES (250, 13, 'Sangha', '', '');
INSERT INTO `province` VALUES (251, 14, 'Djibouti', '', '');
INSERT INTO `province` VALUES (252, 14, 'Dikhil', '', '');
INSERT INTO `province` VALUES (253, 14, 'Obock', '', '');
INSERT INTO `province` VALUES (254, 14, 'Tadjoura', '', '');
INSERT INTO `province` VALUES (255, 15, 'Cairo', '', '');
INSERT INTO `province` VALUES (256, 15, 'Ad Daqahliyah', '', '');
INSERT INTO `province` VALUES (257, 15, 'Al Bahr al Ahmar', '', '');
INSERT INTO `province` VALUES (258, 15, 'Al Buhayrah', '', '');
INSERT INTO `province` VALUES (259, 15, 'Al Fayyum', '', '');
INSERT INTO `province` VALUES (260, 15, 'Al Gharbiyah', '', '');
INSERT INTO `province` VALUES (261, 15, 'Al Iskandariyah', '', '');
INSERT INTO `province` VALUES (262, 15, 'Al Jizah', '', '');
INSERT INTO `province` VALUES (263, 15, 'Al Minufiyah', '', '');
INSERT INTO `province` VALUES (264, 15, 'Al Minya', '', '');
INSERT INTO `province` VALUES (265, 15, 'Al Qahirah', '', '');
INSERT INTO `province` VALUES (266, 15, 'Al Qalyubiyah', '', '');
INSERT INTO `province` VALUES (267, 15, 'Al Wadi al Jadid', '', '');
INSERT INTO `province` VALUES (268, 15, 'Ash Sharqiyah', '', '');
INSERT INTO `province` VALUES (269, 15, 'As Suways', '', '');
INSERT INTO `province` VALUES (270, 15, 'Aswan', '', '');
INSERT INTO `province` VALUES (271, 15, 'Asyut', '', '');
INSERT INTO `province` VALUES (272, 15, 'Bani Suwayf', '', '');
INSERT INTO `province` VALUES (273, 15, 'Dumyat', '', '');
INSERT INTO `province` VALUES (274, 15, 'Kafr ash Shaykh', '', '');
INSERT INTO `province` VALUES (275, 15, 'Matruh', '', '');
INSERT INTO `province` VALUES (276, 15, 'Qina', '', '');
INSERT INTO `province` VALUES (277, 15, 'Suhaj', '', '');
INSERT INTO `province` VALUES (278, 16, 'Malabo', '', '');
INSERT INTO `province` VALUES (279, 16, 'Annobon', '', '');
INSERT INTO `province` VALUES (280, 16, 'Bioko Norte', '', '');
INSERT INTO `province` VALUES (281, 16, 'Bioko Sur', '', '');
INSERT INTO `province` VALUES (282, 16, 'Centro Sur', '', '');
INSERT INTO `province` VALUES (283, 16, 'Kie-Ntem', '', '');
INSERT INTO `province` VALUES (284, 16, 'Litoral', '', '');
INSERT INTO `province` VALUES (285, 16, 'Wele-Nzas', '', '');
INSERT INTO `province` VALUES (286, 17, 'Asmara', '', '');
INSERT INTO `province` VALUES (287, 17, 'Central', '', '');
INSERT INTO `province` VALUES (288, 17, 'Anelba', '', '');
INSERT INTO `province` VALUES (289, 17, 'Southern Red Sea', '', '');
INSERT INTO `province` VALUES (290, 17, 'Northern Red Sea', '', '');
INSERT INTO `province` VALUES (291, 17, 'Southern', '', '');
INSERT INTO `province` VALUES (292, 17, 'Gash-Barka', '', '');
INSERT INTO `province` VALUES (293, 18, 'Addis Ababa', '', '');
INSERT INTO `province` VALUES (294, 18, 'Adis Abeba (Addis Ababa)', '', '');
INSERT INTO `province` VALUES (295, 18, 'Afar', '', '');
INSERT INTO `province` VALUES (296, 18, 'Amara', '', '');
INSERT INTO `province` VALUES (297, 18, 'Binshangul Gumuz', '', '');
INSERT INTO `province` VALUES (298, 18, 'Dire Dawa', '', '');
INSERT INTO `province` VALUES (299, 18, 'Gambela Hizboch', '', '');
INSERT INTO `province` VALUES (300, 18, 'Hareri Hizb', '', '');
INSERT INTO `province` VALUES (301, 18, 'Oromiya', '', '');
INSERT INTO `province` VALUES (302, 18, 'Sumale (Somali)', '', '');
INSERT INTO `province` VALUES (303, 18, 'Tigray', '', '');
INSERT INTO `province` VALUES (304, 18, 'YeDebub Biheroch Bihereseboch...', '', '');
INSERT INTO `province` VALUES (305, 19, 'Libreville', '', '');
INSERT INTO `province` VALUES (306, 20, 'Estuaire', '', '');
INSERT INTO `province` VALUES (307, 20, 'Haut-Ogooue', '', '');
INSERT INTO `province` VALUES (308, 20, 'Moyen-Ogooue', '', '');
INSERT INTO `province` VALUES (309, 20, 'Ngounie', '', '');
INSERT INTO `province` VALUES (310, 20, 'Nyanga', '', '');
INSERT INTO `province` VALUES (311, 20, 'Ogooue-Ivindo', '', '');
INSERT INTO `province` VALUES (312, 20, 'Ogooue-Lolo', '', '');
INSERT INTO `province` VALUES (313, 20, 'Ogooue-Maritime', '', '');
INSERT INTO `province` VALUES (314, 20, 'Woleu-Ntem', '', '');
INSERT INTO `province` VALUES (315, 21, 'Accra', '', '');
INSERT INTO `province` VALUES (316, 21, 'Ashanti', '', '');
INSERT INTO `province` VALUES (317, 21, 'Brong-Ahafo', '', '');
INSERT INTO `province` VALUES (318, 21, 'Central', '', '');
INSERT INTO `province` VALUES (319, 21, 'Eastern', '', '');
INSERT INTO `province` VALUES (320, 21, 'Northern', '', '');
INSERT INTO `province` VALUES (321, 21, 'Upper East', '', '');
INSERT INTO `province` VALUES (322, 21, 'Upper West', '', '');
INSERT INTO `province` VALUES (323, 21, 'Volta', '', '');
INSERT INTO `province` VALUES (324, 21, 'Western', '', '');
INSERT INTO `province` VALUES (325, 22, 'Conakry', '', '');
INSERT INTO `province` VALUES (326, 22, 'Beyla', '', '');
INSERT INTO `province` VALUES (327, 22, 'Boffa', '', '');
INSERT INTO `province` VALUES (328, 22, 'Boke', '', '');
INSERT INTO `province` VALUES (329, 22, 'Coyah', '', '');
INSERT INTO `province` VALUES (330, 22, 'Dabola', '', '');
INSERT INTO `province` VALUES (331, 22, 'Dalaba', '', '');
INSERT INTO `province` VALUES (332, 22, 'Dinguiraye', '', '');
INSERT INTO `province` VALUES (333, 22, 'Dubreka', '', '');
INSERT INTO `province` VALUES (334, 22, 'Faranah', '', '');
INSERT INTO `province` VALUES (335, 22, 'Forecariah', '', '');
INSERT INTO `province` VALUES (336, 22, 'Fria', '', '');
INSERT INTO `province` VALUES (337, 22, 'Gaoual', '', '');
INSERT INTO `province` VALUES (338, 22, 'Gueckedou', '', '');
INSERT INTO `province` VALUES (339, 22, 'Kankan', '', '');
INSERT INTO `province` VALUES (340, 22, 'Kerouane', '', '');
INSERT INTO `province` VALUES (341, 22, 'Kindia', '', '');
INSERT INTO `province` VALUES (342, 22, 'Kissidougou', '', '');
INSERT INTO `province` VALUES (343, 22, 'Koubia', '', '');
INSERT INTO `province` VALUES (344, 22, 'Koundara', '', '');
INSERT INTO `province` VALUES (345, 22, 'Kouroussa', '', '');
INSERT INTO `province` VALUES (346, 22, 'Labe', '', '');
INSERT INTO `province` VALUES (347, 22, 'Lelouma', '', '');
INSERT INTO `province` VALUES (348, 22, 'Lola', '', '');
INSERT INTO `province` VALUES (349, 22, 'Macenta', '', '');
INSERT INTO `province` VALUES (350, 22, 'Mali', '', '');
INSERT INTO `province` VALUES (351, 22, 'Mamou', '', '');
INSERT INTO `province` VALUES (352, 22, 'Mandiana', '', '');
INSERT INTO `province` VALUES (353, 22, 'Nzerekore', '', '');
INSERT INTO `province` VALUES (354, 22, 'Pita', '', '');
INSERT INTO `province` VALUES (355, 22, 'Siguiri', '', '');
INSERT INTO `province` VALUES (356, 22, 'Telimele', '', '');
INSERT INTO `province` VALUES (357, 22, 'Tougue', '', '');
INSERT INTO `province` VALUES (358, 22, 'Yomou', '', '');
INSERT INTO `province` VALUES (359, 23, 'Bissau', '', '');
INSERT INTO `province` VALUES (360, 23, 'Bafata', '', '');
INSERT INTO `province` VALUES (361, 23, 'Biombo', '', '');
INSERT INTO `province` VALUES (362, 23, 'Bolama/Bijagos', '', '');
INSERT INTO `province` VALUES (363, 23, 'Cacheu', '', '');
INSERT INTO `province` VALUES (364, 23, 'Gabu', '', '');
INSERT INTO `province` VALUES (365, 23, 'Oio', '', '');
INSERT INTO `province` VALUES (366, 23, 'Quinara', '', '');
INSERT INTO `province` VALUES (367, 23, 'Tombali', '', '');
INSERT INTO `province` VALUES (368, 24, 'Nairobi', '', '');
INSERT INTO `province` VALUES (369, 24, 'Central', '', '');
INSERT INTO `province` VALUES (370, 24, 'Coast', '', '');
INSERT INTO `province` VALUES (371, 24, 'Eastern', '', '');
INSERT INTO `province` VALUES (372, 24, 'Nairobi Area', '', '');
INSERT INTO `province` VALUES (373, 24, 'North Eastern', '', '');
INSERT INTO `province` VALUES (374, 24, 'Nyanza', '', '');
INSERT INTO `province` VALUES (375, 24, 'Rift Valley', '', '');
INSERT INTO `province` VALUES (376, 24, 'Western', '', '');
INSERT INTO `province` VALUES (377, 25, 'Maseru', '', '');
INSERT INTO `province` VALUES (378, 25, 'Berea', '', '');
INSERT INTO `province` VALUES (379, 25, 'Butha-Buthe', '', '');
INSERT INTO `province` VALUES (380, 25, 'Leribe', '', '');
INSERT INTO `province` VALUES (381, 25, 'Mafeteng', '', '');
INSERT INTO `province` VALUES (382, 25, 'Mohales Hoek', '', '');
INSERT INTO `province` VALUES (383, 25, 'Mokhotlong', '', '');
INSERT INTO `province` VALUES (384, 25, 'Quthing', '', '');
INSERT INTO `province` VALUES (385, 25, 'Thaba-Tseka', '', '');
INSERT INTO `province` VALUES (386, 26, 'Monrovia', '', '');
INSERT INTO `province` VALUES (387, 26, 'Bomi', '', '');
INSERT INTO `province` VALUES (388, 26, 'Bong', '', '');
INSERT INTO `province` VALUES (389, 26, 'Gparbolu', '', '');
INSERT INTO `province` VALUES (390, 26, 'Grand Bassa', '', '');
INSERT INTO `province` VALUES (391, 26, 'Grand Cape Mount', '', '');
INSERT INTO `province` VALUES (392, 26, 'Grand Gedeh', '', '');
INSERT INTO `province` VALUES (393, 26, 'Grand Kru', '', '');
INSERT INTO `province` VALUES (394, 26, 'Lofa', '', '');
INSERT INTO `province` VALUES (395, 26, 'Margibi', '', '');
INSERT INTO `province` VALUES (396, 26, 'Maryland', '', '');
INSERT INTO `province` VALUES (397, 26, 'Montserrado', '', '');
INSERT INTO `province` VALUES (398, 26, 'Nimba', '', '');
INSERT INTO `province` VALUES (399, 26, 'River Cess', '', '');
INSERT INTO `province` VALUES (400, 26, 'River Gee', '', '');
INSERT INTO `province` VALUES (401, 26, 'Sinoe', '', '');
INSERT INTO `province` VALUES (402, 27, 'Tripoli', '', '');
INSERT INTO `province` VALUES (403, 27, 'Ajdabiya', '', '');
INSERT INTO `province` VALUES (404, 27, 'Al Fatih', '', '');
INSERT INTO `province` VALUES (405, 27, 'Al Jabal al Akhdar', '', '');
INSERT INTO `province` VALUES (406, 27, 'Al Jufrah', '', '');
INSERT INTO `province` VALUES (407, 27, 'Al Khums', '', '');
INSERT INTO `province` VALUES (408, 27, 'Al Kufrah', '', '');
INSERT INTO `province` VALUES (409, 27, 'An Nuqat al Khams', '', '');
INSERT INTO `province` VALUES (410, 27, 'Awbari', '', '');
INSERT INTO `province` VALUES (411, 27, 'Az Zawiyah', '', '');
INSERT INTO `province` VALUES (412, 27, 'Banghazi', '', '');
INSERT INTO `province` VALUES (413, 27, 'Darnah', '', '');
INSERT INTO `province` VALUES (414, 27, 'Ghadamis', '', '');
INSERT INTO `province` VALUES (415, 27, 'Gharyan', '', '');
INSERT INTO `province` VALUES (416, 27, 'Misratah', '', '');
INSERT INTO `province` VALUES (417, 27, 'Murzuq', '', '');
INSERT INTO `province` VALUES (418, 27, 'Sabha', '', '');
INSERT INTO `province` VALUES (419, 27, 'Sawfajjin', '', '');
INSERT INTO `province` VALUES (420, 27, 'Surt', '', '');
INSERT INTO `province` VALUES (421, 27, 'Tarabulus', '', '');
INSERT INTO `province` VALUES (422, 27, 'Tarhunah', '', '');
INSERT INTO `province` VALUES (423, 27, 'Tubruq', '', '');
INSERT INTO `province` VALUES (424, 27, 'Yafran', '', '');
INSERT INTO `province` VALUES (425, 27, 'Zlitan', '', '');
INSERT INTO `province` VALUES (426, 28, 'Antananarivo', '', '');
INSERT INTO `province` VALUES (427, 28, 'Antsiranana', '', '');
INSERT INTO `province` VALUES (428, 28, 'Fianarantsoa', '', '');
INSERT INTO `province` VALUES (429, 28, 'Mahajanga', '', '');
INSERT INTO `province` VALUES (430, 28, 'Toamasina', '', '');
INSERT INTO `province` VALUES (431, 28, 'Toliara', '', '');
INSERT INTO `province` VALUES (432, 29, 'Lilongwe', '', '');
INSERT INTO `province` VALUES (433, 29, 'Balaka', '', '');
INSERT INTO `province` VALUES (434, 29, 'Blantyre', '', '');
INSERT INTO `province` VALUES (435, 29, 'Chikwawa', '', '');
INSERT INTO `province` VALUES (436, 29, 'Chiradzulu', '', '');
INSERT INTO `province` VALUES (437, 29, 'Chitipa', '', '');
INSERT INTO `province` VALUES (438, 29, 'Dedza', '', '');
INSERT INTO `province` VALUES (439, 29, 'Dowa', '', '');
INSERT INTO `province` VALUES (440, 29, 'Karonga', '', '');
INSERT INTO `province` VALUES (441, 29, 'Kasungu', '', '');
INSERT INTO `province` VALUES (442, 29, 'Likoma', '', '');
INSERT INTO `province` VALUES (443, 29, 'Machinga (Kasupe)', '', '');
INSERT INTO `province` VALUES (444, 29, 'Mangochi', '', '');
INSERT INTO `province` VALUES (445, 29, 'Mchinji', '', '');
INSERT INTO `province` VALUES (446, 29, 'Mulanje', '', '');
INSERT INTO `province` VALUES (447, 29, 'Mwanza', '', '');
INSERT INTO `province` VALUES (448, 29, 'Mzimba', '', '');
INSERT INTO `province` VALUES (449, 29, 'Ntcheu', '', '');
INSERT INTO `province` VALUES (450, 29, 'Nkhata Bay', '', '');
INSERT INTO `province` VALUES (451, 29, 'Nkhotakota', '', '');
INSERT INTO `province` VALUES (452, 29, 'Nsanje', '', '');
INSERT INTO `province` VALUES (453, 29, 'Ntchisi', '', '');
INSERT INTO `province` VALUES (454, 29, 'Phalombe', '', '');
INSERT INTO `province` VALUES (455, 29, 'Rumphi', '', '');
INSERT INTO `province` VALUES (456, 29, 'Salima', '', '');
INSERT INTO `province` VALUES (457, 29, 'Thyolo', '', '');
INSERT INTO `province` VALUES (458, 29, 'Zomba', '', '');
INSERT INTO `province` VALUES (459, 30, 'Bamako', '', '');
INSERT INTO `province` VALUES (460, 30, 'Gao', '', '');
INSERT INTO `province` VALUES (461, 30, 'Kayes', '', '');
INSERT INTO `province` VALUES (462, 30, 'Kidal', '', '');
INSERT INTO `province` VALUES (463, 30, 'Koulikoro', '', '');
INSERT INTO `province` VALUES (464, 30, 'Mopti', '', '');
INSERT INTO `province` VALUES (465, 30, 'Segou', '', '');
INSERT INTO `province` VALUES (466, 30, 'Sikasso', '', '');
INSERT INTO `province` VALUES (467, 30, 'Tombouctou', '', '');
INSERT INTO `province` VALUES (468, 31, 'Nouakchott', '', '');
INSERT INTO `province` VALUES (469, 31, 'Adrar', '', '');
INSERT INTO `province` VALUES (470, 31, 'Assaba', '', '');
INSERT INTO `province` VALUES (471, 31, 'Brakna', '', '');
INSERT INTO `province` VALUES (472, 31, 'Dakhlet Nouadhibou', '', '');
INSERT INTO `province` VALUES (473, 31, 'Gorgol', '', '');
INSERT INTO `province` VALUES (474, 31, 'Guidimaka', '', '');
INSERT INTO `province` VALUES (475, 31, 'Hodh Ech Chargui', '', '');
INSERT INTO `province` VALUES (476, 31, 'Hodh El Gharbi', '', '');
INSERT INTO `province` VALUES (477, 31, 'Inchiri', '', '');
INSERT INTO `province` VALUES (478, 31, 'Tagant', '', '');
INSERT INTO `province` VALUES (479, 31, 'Tiris Zemmour', '', '');
INSERT INTO `province` VALUES (480, 31, 'Trarza', '', '');
INSERT INTO `province` VALUES (481, 32, 'Port Louis', '', '');
INSERT INTO `province` VALUES (482, 32, 'Agalega Islands', '', '');
INSERT INTO `province` VALUES (483, 32, 'Black River', '', '');
INSERT INTO `province` VALUES (484, 32, 'Cargados Carajos Shoals', '', '');
INSERT INTO `province` VALUES (485, 32, 'Flacq', '', '');
INSERT INTO `province` VALUES (486, 32, 'Grand Port', '', '');
INSERT INTO `province` VALUES (487, 32, 'Moka', '', '');
INSERT INTO `province` VALUES (488, 32, 'Pamplemousses', '', '');
INSERT INTO `province` VALUES (489, 32, 'Plaines Wilhems', '', '');
INSERT INTO `province` VALUES (490, 32, 'Riviere du Rempart', '', '');
INSERT INTO `province` VALUES (491, 32, 'Rodrigues', '', '');
INSERT INTO `province` VALUES (492, 32, 'Savanne', '', '');
INSERT INTO `province` VALUES (493, 33, 'Rabat', '', '');
INSERT INTO `province` VALUES (494, 33, 'Ad Dakhla (Oued Eddahab)', '', '');
INSERT INTO `province` VALUES (495, 33, 'Agadir', '', '');
INSERT INTO `province` VALUES (496, 33, 'Al Hoceima', '', '');
INSERT INTO `province` VALUES (497, 33, 'Azilal', '', '');
INSERT INTO `province` VALUES (498, 33, 'Beni Mellal', '', '');
INSERT INTO `province` VALUES (499, 33, 'Ben Slimane', '', '');
INSERT INTO `province` VALUES (500, 33, 'Boujdour', '', '');
INSERT INTO `province` VALUES (501, 33, 'Boulemane', '', '');
INSERT INTO `province` VALUES (502, 33, 'Casablanca', '', '');
INSERT INTO `province` VALUES (503, 33, 'Chaouen', '', '');
INSERT INTO `province` VALUES (504, 33, 'El Jadida', '', '');
INSERT INTO `province` VALUES (505, 33, 'El Kelaa des Sraghna', '', '');
INSERT INTO `province` VALUES (506, 33, 'Er Rachidia', '', '');
INSERT INTO `province` VALUES (507, 33, 'Essaouira', '', '');
INSERT INTO `province` VALUES (508, 33, 'Es Smara', '', '');
INSERT INTO `province` VALUES (509, 33, 'Fes', '', '');
INSERT INTO `province` VALUES (510, 33, 'Figuig', '', '');
INSERT INTO `province` VALUES (511, 33, 'Guelmim', '', '');
INSERT INTO `province` VALUES (512, 33, 'Ifrane', '', '');
INSERT INTO `province` VALUES (513, 33, 'Kenitra', '', '');
INSERT INTO `province` VALUES (514, 33, 'Khemisset', '', '');
INSERT INTO `province` VALUES (515, 33, 'Khenifra', '', '');
INSERT INTO `province` VALUES (516, 33, 'Khouribga', '', '');
INSERT INTO `province` VALUES (517, 33, 'Laayoune', '', '');
INSERT INTO `province` VALUES (518, 33, 'Larache', '', '');
INSERT INTO `province` VALUES (519, 33, 'Marrakech', '', '');
INSERT INTO `province` VALUES (520, 33, 'Meknes', '', '');
INSERT INTO `province` VALUES (521, 33, 'Nador', '', '');
INSERT INTO `province` VALUES (522, 33, 'Ouarzazate', '', '');
INSERT INTO `province` VALUES (523, 33, 'Oujda', '', '');
INSERT INTO `province` VALUES (524, 33, 'Safi', '', '');
INSERT INTO `province` VALUES (525, 33, 'Settat', '', '');
INSERT INTO `province` VALUES (526, 33, 'Sidi Kacem', '', '');
INSERT INTO `province` VALUES (527, 33, 'Tanger', '', '');
INSERT INTO `province` VALUES (528, 33, 'Tan-Tan', '', '');
INSERT INTO `province` VALUES (529, 33, 'Taounate', '', '');
INSERT INTO `province` VALUES (530, 33, 'Taroudannt', '', '');
INSERT INTO `province` VALUES (531, 33, 'Tata', '', '');
INSERT INTO `province` VALUES (532, 33, 'Taza', '', '');
INSERT INTO `province` VALUES (533, 33, 'Tetouan', '', '');
INSERT INTO `province` VALUES (534, 33, 'Tiznit', '', '');
INSERT INTO `province` VALUES (535, 34, 'Maputo', '', '');
INSERT INTO `province` VALUES (536, 34, 'Cabo Delgado', '', '');
INSERT INTO `province` VALUES (537, 34, 'Gaza', '', '');
INSERT INTO `province` VALUES (538, 34, 'Inhambane', '', '');
INSERT INTO `province` VALUES (539, 34, 'Manica', '', '');
INSERT INTO `province` VALUES (540, 34, 'Maputo', '', '');
INSERT INTO `province` VALUES (541, 34, 'Nampula', '', '');
INSERT INTO `province` VALUES (542, 34, 'Niassa', '', '');
INSERT INTO `province` VALUES (543, 34, 'Sofala', '', '');
INSERT INTO `province` VALUES (544, 34, 'Tete', '', '');
