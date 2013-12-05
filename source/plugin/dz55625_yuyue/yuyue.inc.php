<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

global $_G;
if(!isset($_G['cache']['plugin'])){ loadcache('plugin'); }
@extract($_G['cache']['plugin']['dz55625_yuyue']);

if($_GET['action'] == 'add'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_yuyue', 'userlogin'), '', array(), array('login' => true));	
	}	
		if(submitcheck('applysubmit')){
			$sid = intval($_GET['newid']);
			$sql = "SELECT * FROM ".DB::table('forum_alliance_ar')." WHERE id = '$sid'";
			$ps = DB::fetch(DB::query($sql));
			if(empty($_G['gp_titles'])){
				showmessage(lang('plugin/dz55625_yuyue', 'titlebti'), dreferer());
			}else{
			$uidz = $ps['uid'];
			$admins = explode(",", $uidz);	
			$uid = intval($_G['uid']);
			$author = addslashes($_G['username']);
			$name = addslashes($_G['gp_name']);
			$address = addslashes($_G['gp_address']);
			$tels = addslashes($_G['gp_tels']);
			$email = addslashes($_G['gp_email']);
			$oicq = intval($_G['gp_oicq']);
			$titles = addslashes($_G['gp_titles']);
			$subject = addslashes($_G['gp_subject']);
	
			DB::insert('forum_alliance_yy',array('id' => '','uidz' => $uidz,'sid' => $sid,'uid' => $uid, 'author' => $author, 'name' => $name, 'address' => $address, 'tels' => $tels, 'email' => $email, 'oicq' => $oicq, 'titles' => $titles, 'subject' => $subject, 'dateline' => time()));
			}
			if($Mstart==1){
				for($i=0;$i<count($admins);$i++){
					notification_add($admins[$i], 'system',$Msnm,$notevars = array(), $system = 0);
				}
			}
			showmessage(lang('plugin/dz55625_yuyue', 'addoktii'), 'plugin.php?id=dz55625_haodian:haodian&mod=view&p=yuyue&sid='.$sid, array(), array('showdialog' => true, 'locationtime' => true));
		}

}

if($_GET['action'] == 'edit'){
	$yid = intval($_G['gp_yid']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('forum_alliance_yy')." WHERE id ='{$yid}' LIMIT 0,1");
	include template('dz55625_yuyue:yuyue_index');
}

if($_GET['action'] == 'del'){
	$yid = intval($_G['gp_yid']);
	DB::query("DELETE FROM ".DB::table('forum_alliance_yy')." WHERE id ='{$yid}' LIMIT 1 ;");
	showmessage(lang('plugin/dz55625_yuyue', 'deloktii'), "plugin.php?id=dz55625_haodian:haodian_user&p=yyue", array(), array('alert' => right));
}

?>