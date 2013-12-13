<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sid = intval($_G['gp_sid']);
$sql = "SELECT * FROM ".DB::table('house_ar')." WHERE id='$sid'";
$ps = DB::fetch(DB::query($sql));
$tels = tels($ps['tel']);

function tels($string) {
	if(preg_match("/^[a-z0-9_@\-\s\/\.\(\)\+]+$/i", $string)) {
		header("content-type:image/png");
		$imageX = strlen($string)*9;
		$imageY = 18;
		$im = @imagecreate($imageX, $imageY) or exit();
		imagecolorallocate($im, 249, 249, 249);
		$color = imagecolorallocate($im, 255, 6, 13);
		imagestring($im, 5, 0, 5, $string, $color);
		imagepng($im);
		imagedestroy($im);
	}
	return $return;
}

?>