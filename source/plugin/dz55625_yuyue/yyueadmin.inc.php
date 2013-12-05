<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
function dz55625_yuyue($str) {
	if(is_array($str)) {
		$return = array();
		foreach($str as $value) {
			$return[] = dz55625_yuyue($value);
		}
		return $return;
	} else {
		return lang('plugin/dz55625_yuyue', $str);
	}
}

if(!$_G['gp_yyueadmin']){
	if(!submitcheck('slidesubmit')){
		$count = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_yy'));
		$each = 15;
		$page = intval($_GET['page']);
		$page = max($page, 1);
		$start = ($page - 1) * $each;

		showtableheader(lang('plugin/dz55625_yuyue', 'yadminti'), '');
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin');

		showtableheader();
		showsubtitle(dz55625_yuyue(array('','usernamex', 'namexming', 'nametel', 'addtime', 'addtools')));
		$dg_admin_num = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_yy'));
			if($dg_admin_num) {
			$query = DB::query("SELECT * FROM ".DB::table('forum_alliance_yy')." ORDER BY dateline DESC LIMIT $start,$each");
			while($result = DB::fetch($query)) {
				$result['message'] = cutstr($result['message'], 60, '...');
			showtablerow(NULL,NULL, array('<input type="checkbox" class="checkbox" name="delete[]" value="'.intval($result['id']).'">',$result['author'],$result['name'],$result['tels'],date('Y-m-d H:i', $result['dateline']),'<a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin&yyueadmin=del&del_id='.$result['id'].'">'.lang('plugin/dz55625_yuyue', 'deldelc').'</a> <a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin&yyueadmin=edit&id='.$result['id'].'">'.lang('plugin/dz55625_yuyue', 'chakanxi').'</a>'));
				}
			}
		$multi = multi($count, $each, $page, ADMINSCRIPT.'?action=plugins&operation=config&identifier=dz55625_yuyue&pmod=yyueadmin');
		showtablerow();
		showsubmit('slidesubmit', 'del', 'select_all','',$multi);
		
	}else{
		$del_id = implode('|', $_G['gp_delete']);
		cpmsg(dz55625_yuyue('okshanchu'), '', '', '', '<input class="btn" type="button" value="'.dz55625_yuyue('queren').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin&yyueadmin=del&del_id='.$del_id.'\'"/>&nbsp;&nbsp;<input class="btn" type="button" value="'.dz55625_yuyue('quxiao').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin\'"/>');
	}

}elseif($_G['gp_yyueadmin']=='edit'){
	
		if(!submitcheck('slidesubmit')){
		$aid = intval($_G['gp_id']);
		$chekid = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_yy')." WHERE id='$aid'");
		showtableheader(lang('plugin/dz55625_yuyue', 'yuyuechak'), '');
		$query = DB::query("SELECT * FROM ".DB::table('forum_alliance_yy')." WHERE id='$aid'");
		$id_info = DB::fetch($query);
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin&yyueadmin=edit&id='.intval($id_info[id]));
		showsetting(dz55625_yuyue('usernamex'), 'author', addslashes($id_info[author]), 'text','1');	
		showsetting(dz55625_yuyue('namexming'), 'name', addslashes($id_info[name]), 'text','0');	
		showsetting(dz55625_yuyue('lianxiadd'), 'address', addslashes($id_info[address]), 'text','0');	
		showsetting(dz55625_yuyue('nametel'), 'tels', addslashes($id_info[tels]), 'text','0');
		showsetting(dz55625_yuyue('emailsss'), 'email', addslashes($id_info[email]), 'text','0');
		showsetting(dz55625_yuyue('oicqsss'), 'oicq', addslashes($id_info[oicq]), 'text','0');
		showsetting(dz55625_yuyue('shuomtitl'), 'titles', addslashes($id_info[titles]), 'text','0');
		showsetting(dz55625_yuyue('shuomnero'), 'subject', addslashes($id_info[subject]), 'textarea','0');
		showsubmit('slidesubmit', 'submit');
		showtablefooter();
		showformfooter();
	}else{
		$aid = intval($_G['gp_id']);
		$name = addslashes($_G['gp_name']);
		$address = addslashes($_G['gp_address']);
		$tels = addslashes($_G['gp_tels']);
		$email = addslashes($_G['gp_email']);
		$oicq = intval($_G['gp_oicq']);
		$titles = addslashes($_G['gp_titles']);
		$subject = addslashes($_G['gp_subject']);
		DB::update('forum_alliance_yy', array('name' => $name,'address' => $address,'tels' => $tels,'email' => $email,'oicq' => $oicq, 'titles' => $titles, 'subject' => $subject), "id='$aid'");
		cpmsg(dz55625_yuyue('gengxinok'));
	}

	
}elseif($_G['gp_yyueadmin']=='del'){
	$del_id = explode('|', $_G['gp_del_id']);
	$nums = 0;
	foreach($del_id as $aid) {
		$aid = intval($aid);
		$deichek = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_yy')." WHERE id='$aid'");
		if(!$deichek) {
			cpmsg_error(dz55625_yuyue('nonoxuanz'));
		} else {
			DB::query("DELETE FROM ".DB::table('forum_alliance_yy')." WHERE id='$aid'");
			$nums++;
		}

	}
	cpmsg(dz55625_yuyue('shanchucg'),'action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_yuyue&pmod=yyueadmin');
}
?>
