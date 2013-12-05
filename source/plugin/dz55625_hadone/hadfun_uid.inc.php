<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$uid = intval($_G['uid']);
$hadConfig = $_G['cache']['plugin']['dz55625_hadone'];
if($hadConfig['start']==1){
	$huandc = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_ad')." WHERE uid='$uid'");
	$huand = "SELECT * FROM ".DB::table('forum_alliance_ad')." WHERE uid='$uid' ORDER BY dateline LIMIT 0,{$hadConfig['hnum']}";
	$query = DB::query($huand);
	$huande = $huandes = array();
	while($huande = DB::fetch($query)){
		$huandes[] = $huande;
	}
}
		
?>