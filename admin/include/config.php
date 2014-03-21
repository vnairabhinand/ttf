<?php

//production
//$con = mysql_connect("localhost","keyadmin_espe","c,tey$4sKVc{") or die("sorry not connected");

//$db = mysql_select_db("keyadmin_espe") or die("sorry database is not connected");

//development
$con = mysql_connect("localhost","root","") or die("sorry not connected");
$db = mysql_select_db("keyadmin_espe") or die("sorry database is not connected");

/*$con = mysql_connect("localhost","handa123_etf","@!~ETF123") or die("sorry not connected");
$db = mysql_select_db("handa123_ETF") or die("sorry database is not connected");*/


$rootpath = $_SERVER['DOCUMENT_ROOT'] . '/';


$psize=10;
$defaultPageSize = 10; 

function CheckForRelation($id, $check_releation)
{
	$relation_found = false;
	
	if(is_array($check_releation))
	{
		foreach($check_releation as $table => $field)
		{
			$sql = mysql_query("SELECT * FROM ".$table." WHERE ".$field."=".$id) or die(mysql_error());
			if(mysql_fetch_row($sql) > 0)
			{
				$relation_found = true;
			}
		}
	}

	return($relation_found);
}

function p_GetPageLimits($currentpage,$totalpage,$pagegroup) 
{
	$result=array();
	$result['startpage']=1;
	$result['endpage']=$totalpage;
	if($totalpage<=$pagegroup)
		return $result;
	$pagebefore=intval($pagegroup/2);
	
	
	if($currentpage-$pagebefore<=0)
		$result['startpage']=1;
	else
		$result['startpage']=$currentpage-$pagebefore;
	$result['endpage']=$result['startpage']+$pagegroup-1;
	if($result['endpage']>$totalpage)
	{
		$result['endpage']=$totalpage;
		$result['startpage']=$result['endpage']-$pagegroup+1;
	}
	return $result;
}
date_default_timezone_set('UTC');
?>