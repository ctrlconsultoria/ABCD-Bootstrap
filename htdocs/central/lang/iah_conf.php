<?php

if (isset($msg_path) and $msg_path!="")
	$path=$msg_path;
else
	$path=$db_path;
$a=$path."lang/".$_SESSION["lang"]."/iah_conf.tab";
if (file_exists($a)) {	$fp=file($a);
	foreach($fp as $var=>$value){		if (trim($value)!="") {
			$value=str_replace('"',"'",$value);
			//$value=str_replace("'","'",$value);			$m=explode('=',$value);
			$m[0]=trim($m[0]);			if (!isset($msgstr[$m[0]])) $msgstr[$m[0]]=trim($m[1]);		}	}}

$a=$path."/lang/00/iah_conf.tab";
if (file_exists($a)) {
	$fp=file($a);
	foreach($fp as $var=>$value){
		if (trim($value)!="") {
			$value=str_replace('"',"'",$value);
			//$value=str_replace("'","'",$value);
			$m=explode('=',$value);
			$m[0]=trim($m[0]);
			if (!isset($msgstr[$m[0]])) $msgstr[$m[0]]=trim($m[1]);
		}
	}
}
?>