<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

loadcache('plugin');
@extract($_G['cache']['plugin']['dz55625_house']);
$p = addslashes($_G['gp_p']);
$p = $p?$p:'index';
$appurl=$_G['siteurl']."admin.php?action=plugins&operation=config&do=$_G[gp_do]&identifier=$_G[gp_identifier]&pmod=house_photo";
if($p=='index'){
	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_img')."");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * 15;
	if($counts) {
		$sql = "SELECT * FROM ".DB::table('house_img')." ORDER BY dateline DESC LIMIT $starts,15";
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythreads[] = $mythread;
		}
	}
	$multis = "<div class='pages cl'>".multi($counts, 15, $pages, $appurl."&p=$p".$pageadd)."</div>";
	
}elseif ($p=='del'){
	$id = intval($_G['gp_id']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('house_img')." WHERE id ='{$id}' LIMIT 0 , 1");
	if ($active["img"]!=false){
		unlink($active["img"]);
	}
	DB::query("DELETE FROM ".DB::table('house_img')." WHERE id = '$id' LIMIT 1 ");
	cpmsg(lang('plugin/dz55625_house', 'shanchuok'),$appurl);
}

include(template("dz55625_house:admin_p"));

?>


