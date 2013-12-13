<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$action = $_G['gp_action'];
if($action == 'code') {
   $sid = intval($_G['gp_sid']);
   include template('dz55625_house:house_code');
}
?>