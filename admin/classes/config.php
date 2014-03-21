<?php
/********************************************************
Author: Anil Gomez	/	Version: 1.0	/	Date: 8-May-2013
*********************************************************/
ini_set('display_errors', '1'); 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
ob_flush(); 
require_once("dblib.inc");						// include bdlib.inc for database connection
$c1	=	db_connect();
define("BASEURL","http://www.especiallythefamily.org/ETF/");
?>