<style>
a { text-decoration:none; color:#000}
</style><div style="width:600px;">
<?php
ini_set('display_errors', '1'); 
error_reporting(E_ALL ^ E_NOTICE);
//$url="http://www.mobilephoneemulator.com/emulate.php?url=http%3A//tubidy.mobi/&user_agent=Mozilla/5.0%20%28iPhone%3B%20CPU%20iPhone%20OS%206_0%20like%20Mac%20OS%20X%29%20AppleWebKit/536.26%20%28KHTML%2C%20like%20Gecko%29%20Version/6.0%20Mobile/10A403%20Safari/8536.25&device=Apple-Iphone5";

$url="http://emulator.mobilewebsitesubmit.com/screenResolution.php?url=http://tubidy.mobi";
include_once 'simple_html_dom.php';
$html = file_get_html($url);  
foreach($html->find('div#ad_top')  as $description){
	   $title_ar[]=$description->innertext;
}
foreach($html->find('img') as $e)
    echo $e->src . '<br>';
	
 
	
for($i=0;$i<sizeof($title_ar);$i++)
{
print"<b>$title_ar[$i]</b><br>";
}
?></div>                   