<?php
/*
	[55625.COM!] (C)2001-2009 55625 Inc.
	BY QQ:114512039  Lovenr
*/


if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF
DROP TABLE IF EXISTS `pre_forum_alliance_ad`;
EOF;

runquery($sql);

$finish = TRUE;

?>