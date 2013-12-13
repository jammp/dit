<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$housek = array(
'2013121321HfgAeO99Oa',
'1368519069',
'NTFwaWFvYms6cSC',
'http://www.10-line.com/',
);
$hzs = $housek[3];
$hzs = parse_url($hzs);
$hzs = strtolower($hzs['host']) ;
$domain = array('com','cn','cc','org','net','me','co');
$hus = $hzs;
$dds = implode('|',$domain);
$hus = preg_replace('/(\.('.$dds.'))*\.('.$dds.')$/iU','',$hus);
$hus = explode('.',$hus);
$hus = array_pop($hus); 
$hus = substr($hzs,strrpos($hzs,$hus));  
$housekign = 'deefd0daf27d82b8e814db0aad9223ea';

?>