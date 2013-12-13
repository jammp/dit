<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/


include_once 'house_code.php';

$sid = intval($_G['gp_sid']);
$sql = "SELECT * FROM ".DB::table('house_ar')." WHERE id='$sid'";
$ps = DB::fetch(DB::query($sql));
$value = ""
.$ps['mingchen'].'<br />'
.$ps['shi']."".lang('plugin/dz55625_house', 'shi')." ".$ps['ting']."".lang('plugin/dz55625_house', 'ting')." ".$ps['pingmi']."".lang('plugin/dz55625_house', 'pingmi')."".'<br />'
.$ps['zujin'].lang('plugin/dz55625_house', 'iyueyue').'<br />'
.$ps['tel'].'<br />'
.$ps['xingming'].'<br />'
.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']
;
$errorCorrectionLevel = "L";
$matrixPointSize = "6";
QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);

?>