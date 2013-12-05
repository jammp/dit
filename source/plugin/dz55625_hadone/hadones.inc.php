<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
function dz55625_hadone($str) {
	if(is_array($str)) {
		$return = array();
		foreach($str as $value) {
			$return[] = dz55625_hadone($value);
		}
		return $return;
	} else {
		return lang('plugin/dz55625_hadone', $str);
	}
}

if(!$_G['gp_hadones']){
	if(!submitcheck('slidesubmit')){
		$count = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_ad'));
		$each = 15;
		$page = intval($_GET['page']);
		$page = max($page, 1);
		$start = ($page - 1) * $each;

		showtableheader(lang('plugin/dz55625_hadone', 'adminadd'), '');
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones');

		showtableheader();
		showsubtitle(dz55625_hadone(array('','adminadname', 'adminadtime', 'adminadtool')));
		$dg_admin_num = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_ad'));
			if($dg_admin_num) {
			$query = DB::query("SELECT * FROM ".DB::table('forum_alliance_ad')." ORDER BY dateline DESC LIMIT $start,$each");
			while($result = DB::fetch($query)) {
				$result['message'] = cutstr($result['message'], 60, '...');
			showtablerow(NULL,NULL, array('<input type="checkbox" class="checkbox" name="delete[]" value="'.intval($result['id']).'">',$result['name'],date('Y-m-d H:i', dhtmlspecialchars($result['dateline'])),'<a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones&hadones=del&del_id='.$result['id'].'">'.lang('plugin/dz55625_hadone', 'adminaddel').'</a> <a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones&hadones=edit&id='.$result['id'].'">'.lang('plugin/dz55625_hadone', 'adminadedit').'</a>'));
				}
			}
		$multi = multi($count, $each, $page, ADMINSCRIPT.'?action=plugins&operation=config&identifier=dz55625_hadone&pmod=hadones');
		showtablerow();
		showsubmit('slidesubmit', 'del', 'select_all','',$multi);
		
	}else{
		$del_id = implode('|', $_G['gp_delete']);
		cpmsg(dz55625_hadone('adminokdel'), '', '', '', '<input class="btn" type="button" value="'.dz55625_hadone('adminaddel').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones&hadones=del&del_id='.$del_id.'\'"/>&nbsp;&nbsp;<input class="btn" type="button" value="'.dz55625_hadone('adminquxiao').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones\'"/>');
	}

}elseif($_G['gp_hadones']=='edit'){
	
		if(!submitcheck('slidesubmit')){
		$aid = intval($_G['gp_id']);
		$chekid = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_ad')." WHERE id='$aid'");
		showtableheader(lang('plugin/dz55625_hadone', 'adminadedits'), '');
		$query = DB::query("SELECT * FROM ".DB::table('forum_alliance_ad')." WHERE id='$aid'");
		$id_info = DB::fetch($query);
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones&hadones=edit&id='.intval($id_info[id]));
		showsetting(dz55625_hadone('adtitle'), 'name', addslashes($id_info[name]), 'text','0');	
		showsetting(dz55625_hadone('picurls'), 'pic', addslashes($id_info[pic]), 'text','0');	
		showsetting(dz55625_hadone('piclinks'), 'tid', addslashes($id_info[tid]), 'text','0');	
		showsubmit('slidesubmit', 'submit');
		showtablefooter();
		showformfooter();
	}else{
		$aid = intval($_G['gp_id']);
		$name = addslashes($_G['gp_name']);
		$pic = addslashes($_G['gp_pic']);
		$tid = addslashes($_G['gp_tid']);
		DB::update('forum_alliance_ad', array('name' => $name, 'pic' => $pic, 'tid' => $tid), "id='$aid'");
		cpmsg(dz55625_hadone('gengxinok'));
	}

	
}elseif($_G['gp_hadones']=='del'){
	$del_id = explode('|', $_G['gp_del_id']);
	$nums = 0;
	foreach($del_id as $aid) {
		$aid = intval($aid);
		$deichek = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_ad')." WHERE id='$aid'");
		if(!$deichek) {
			cpmsg_error(dz55625_hadone('ÉÐÎ´Ñ¡Ôñ'));
		} else {
			DB::query("DELETE FROM ".DB::table('forum_alliance_ad')." WHERE id='$aid'");
			$nums++;
		}

	}
	cpmsg(dz55625_hadone('shanchuok'),'action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_hadone&pmod=hadones');
}
?>
