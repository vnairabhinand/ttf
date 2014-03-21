<?php
/********************************************************
Author: Anil Gomez	/	Version: 1.0	/	Date: 8-May-2013
*********************************************************/
if (!isset($DB_DIE_ON_FAIL)) {
    $DB_DIE_ON_FAIL = true;
}

if (!isset($DB_DEBUG)) {
    $DB_DEBUG = false;
}

/************************ start to connect and select database $dbname on $dbhost with the pair $dbuser and $dbpass *******************************/

function db_pconnect($dbhost, $dbname, $dbuser, $dbpass) {
    global $DB_DIE_ON_FAIL, $DB_DEBUG;
    if (!$dbh = mysql_pconnect($dbhost, $dbuser, $dbpass)) {
        if ($DB_DEBUG) {
            echo "<h2>Can't connect to $dbhost as $dbuser</h2>";
            echo "<p><b>MySQL Error</b>: ", mysql_error();
        } else {
            echo "<h2>Database error encountered</h2>";
        }
        if ($DB_DIE_ON_FAIL) {
            echo "<p>This script cannot continue, terminating.";
            die();
        }
    }
    if (!mysql_select_db($dbname)) {
        if ($DB_DEBUG) {
            echo "<h2>Can't select database $dbname</h2>";
            echo "<p><b>MySQL Error</b>: ", mysql_error();
        } else {
            echo "<h2>Database error encountered</h2>";
        }
        if ($DB_DIE_ON_FAIL) {
            echo "<p>This script cannot continue, terminating.";
            die();
        }
    }
    return $dbh;
}

/*************************** end of connecting and selecting database **********************************/

function db_connect() {
    $c1 = mysql_connect("localhost", "handa123_etf", "@!~ETF123") or die("can not connect to database !");
    mysql_select_db("handa123_ETF", $c1) or die("can not select database !");
    return $c1;
	}




function db_disconnect() {
    mysql_close();
}

function db_query($query, $debug = false, $die_on_debug = false, $silent = true) {
    global $DB_DIE_ON_FAIL, $DB_DEBUG;

    if ($debug) {
        echo "<pre>" . htmlspecialchars($query) . "</pre>";
        if ($die_on_debug)
            die;
    }

    $qid = mysql_query($query);

    if (!$qid && !$silent) {
        if ($DB_DEBUG) {
            echo "<h2>Can't execute query</h2>";
            echo "<pre>" . htmlspecialchars($query) . "</pre>";
            echo "<p><b>MySQL Error</b>: ", mysql_error();
        } else {
            echo "<h2>2Database error encountered</h2>";
        }
        if ($DB_DIE_ON_FAIL) {
            echo "<p>This script cannot continue, terminating.";
            die();
        }
    }

    return $qid;
}

function db_fetch_array($qid) {
    return mysql_fetch_array($qid);
}

function db_list_fields($tab1, $c1, $db_n = "wssra") {
    return mysql_list_fields($db_n, $tab1, $c1);
}

function db_fetch_row($qid) {
    return mysql_fetch_row($qid);
}

function db_fetch_object($qid) {
    return mysql_fetch_object($qid);
}

function db_num_rows($qid) {
    return mysql_num_rows($qid);
}

function db_affected_rows() {
    return mysql_affected_rows();
}

function db_insert_id() {
    return mysql_insert_id();
}

function db_free_result($qid) {
    mysql_free_result($qid);
}

function db_num_fields($qid) {
    return mysql_num_fields($qid);
}

function db_field_name($qid, $fieldno) {
    return mysql_field_name($qid, $fieldno);
}

function db_data_seek($qid, $row) {
    if (db_num_rows($qid)) {
        return mysql_data_seek($qid, $row);
    }
}
//-------------------- PAGINATION -------------------------------------
function drawNavigationPlainAdmin($page,$total,$link)
{
print "<div class='smallText'  style=\"padding-top:5px;\" >Result Pages: ";
global $len,$page;
$check=$total%$len;
$sh=$page+9;
$sv=$sh-9;


if($check >=1 ) $total_pages=intval(($total/$len))+1; 
else $total_pages=intval($total/$len);

//if($total>$len) print "Pages : ";

if($page>1) {$previous_page=$page-1;print "<a href='$link&page=$previous_page' class='pageResults next' title=' Previous Page '><img src=\"images/pre_btn.png\" border=\"0\" align=\"absmiddle\"  width=\"12\" height=\"12\" /></a> ";}
else print " &nbsp;&nbsp;";

for($i=1;$i<=$total_pages;$i++)
{

if($i>=$sv-3 && $i<=$sh)
{
if($page!="$i")
//print "<a href='$link&page=$i' class='but_02'>$i </a>&nbsp;&nbsp; ";
print "<a href='$link&page=$i' class='pageResults' title=' Page $i '><u>$i</u></a>&nbsp;&nbsp;";
else if($page==$i)
print "<b>$i</b>&nbsp;&nbsp";
}
}

if($total_pages>$page){$nextpage=$page+1; print " <a href='$link&page=$nextpage' class='pageResults next' title=' Next Page '><img src=\"images/ntx_btn.png\" border=\"0\" align=\"absmiddle\" width=\"12\" height=\"12\"  /></a> ";}
else print " &nbsp;&nbsp;";

print "&nbsp;</div>";
}
//----------------------------------------------------------------------
?>