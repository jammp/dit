<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/



if(submitcheck('applysubmit')){
		if($_G['groupid']==7){
		  showmessage(lang('plugin/dz55625_hshop', 'userlogin'), '', array(), array('login' => true));	
	    }	
		$sid = intval($_GET['newid']);
		$uid = intval($_G['uid']);
		$tid = addslashes($_G['gp_tid']);
		$name = addslashes($_G['gp_name']);
		$pic = addslashes($_G['gp_pic']);
		DB::insert('forum_alliance_ad',array('id' => '','sid' => $sid, 'tid' => $tid, 'uid' => $uid, 'name' => $name, 'pic' => $pic, 'dateline' => time()));
		showmessage(lang('plugin/dz55625_hadone', 'adaddvier'), 'plugin.php?id=dz55625_haodian:haodian&mod=view&p=index&sid='.$sid, array(), array('alert' => right));

}


if($_GET['action'] == 'edit'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_hshop', 'userlogin'), '', array(), array('login' => true));	
	}	
	$id = intval($_G['gp_aid']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('forum_alliance_ad')." WHERE id ='{$id}' LIMIT 0,1");
	if(submitcheck('applysubmitad')){
		$id = intval($_GET['newid']);
		$name = addslashes($_G['gp_name']);
		$tid = addslashes($_G['gp_tid']);
		$pic = addslashes($_G['gp_pic']);
		DB::update('forum_alliance_ad', array('tid' => $tid, 'name' => $name, 'pic' => $pic), "id='$id'");
		showmessage(lang('plugin/dz55625_hadone', 'adeditvier'), "plugin.php?id=dz55625_haodian:haodian_user&p=adone", array(), array('alert' => right));
	}
	include template('dz55625_hadone:hadone_edit');
}

if($_GET['action'] == 'del'){
		if($_G['groupid']==7){
			showmessage(lang('plugin/dz55625_hshop', 'userlogin'), '', array(), array('login' => true));	
		}	
		$id=intval($_G['gp_aid']);
		DB::query("DELETE FROM ".DB::table('forum_alliance_ad')." WHERE id ='$id' LIMIT 1 ;");
		showmessage(lang('plugin/dz55625_hadone', 'addelvier'), "plugin.php?id=dz55625_haodian:haodian_user&p=adone", array(), array('alert' => right));
}

if($_GET['action'] == 'hadd'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_hshop', 'userlogin'), '', array(), array('login' => true));	
	}	
	$uid = intval($_G['uid']);
	$sql = "SELECT * FROM ".DB::table('forum_alliance_ar')." WHERE uid = '$uid' AND display!='0' ORDER BY dateline DESC";
	$query = DB::query($sql);
	$zuyong = $zuyongs = array();
	while($zuyong = DB::fetch($query)){
		$zuyongs[] = $zuyong;
	}
	
	if(submitcheck('applysubmitsa')){
		$sid = $_G['gp_dian_id'];
		$uid = intval($_G['uid']);
		$tid = addslashes($_G['gp_tid']);
		$name = addslashes($_G['gp_name']);
		$pic = addslashes($_G['gp_pic']);
		DB::insert('forum_alliance_ad',array('id' => '','sid' => $sid, 'tid' => $tid, 'uid' => $uid, 'name' => $name, 'pic' => $pic, 'dateline' => time()));
		showmessage(lang('plugin/dz55625_hadone', 'adaddvier'), 'plugin.php?id=dz55625_haodian:haodian_user&p=adone', array(), array('alert' => right));

	}
	
	include template('dz55625_hadone:hadone_add');	
}


include template('dz55625_hadone:hadone_main');

?>