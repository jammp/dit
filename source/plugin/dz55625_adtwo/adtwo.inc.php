<?php
/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	Make:55625.COM  Name:Lovenr
*/


if(submitcheck('applysubmit')){
	
		$urls = addslashes($_G['gp_urls']);
		$title = addslashes($_G['gp_title']);
		$photos = addslashes($_G['gp_photos']);
		DB::insert('forum_adtwo',array('id' => '','title' => $title, 'urls' => $urls, 'photos' => $photos, 'dateline' => time()));
		showmessage(lang('plugin/dz55625_adtwo', 'addokhd'), 'forum.php', array(), array('alert' => right));

}

include template('dz55625_adtwo:adtwo_main');

?>