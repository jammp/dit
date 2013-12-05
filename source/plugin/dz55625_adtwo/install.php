<?php
/*
	[55625.COM!] (C)2001-2009 55625 Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

CREATE TABLE IF NOT EXISTS `pre_forum_adtwo` (
  `id` int(11) NOT NULL auto_increment,
  `sid` int(11) NOT NULL default '0',
  `title` varchar(80) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `urls` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

EOF;

runquery($sql);

$finish = true;

?>