<?php
/*
	[55625.COM!] (C)2001-2009 55625 Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
function dz55625_adtwo($str) {
	if(is_array($str)) {
		$return = array();
		foreach($str as $value) {
			$return[] = dz55625_adtwo($value);
		}
		return $return;
	} else {
		return lang('plugin/dz55625_adtwo', $str);
	}
}
$_G['gp_adadmin'] = dhtmlspecialchars($_G['gp_adadmin']);
if(!$_G['gp_adadmin']){
	if(!submitcheck('slidesubmit')){
		$count = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_adtwo'));
		$each = 15;
		$page = intval($_GET['page']);
		$page = max($page, 1);
		$start = ($page - 1) * $each;

		showtableheader(lang('plugin/dz55625_adtwo', 'hdxinigs'), '');
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin');

		showtableheader();
		showsubtitle(dz55625_adtwo(array('', 'adnames', 'addtimes', 'czuoshi')));
		$dg_admin_num = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_adtwo'));
			if($dg_admin_num) {
				$query = DB::query("SELECT * FROM ".DB::table('forum_adtwo')." ORDER BY dateline DESC LIMIT $start,$each");

				while($result = DB::fetch($query)) {
					showtablerow(NULL,NULL, array('<input type="checkbox" class="checkbox" name="delete[]" value="'.intval($result['id']).'">',$result['title'],date('y-m-d', dhtmlspecialchars($result['dateline'])),'<a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin&adadmin=edit&aid='.intval($result['id']).'">'.lang ('plugin/dz55625_adtwo', 'bianss').'</a>'));
				}
			}
		$multi = multi($count, $each, $page, ADMINSCRIPT.'?action=plugins&operation=config&identifier=dz55625_adtwo&pmod=adadmin');
		showtablerow();
		showsubmit('slidesubmit', 'del', 'select_all','',$multi);
		
	}else{
		$del_id = implode('|', $_G['gp_delete']);
		cpmsg(dz55625_adtwo('okshanchu'), '', '', '', '<input class="btn" type="button" value="'.dz55625_adtwo('okqueren').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin&adadmin=del&del_id='.$del_id.'\'"/>&nbsp;&nbsp;<input class="btn" type="button" value="'.dz55625_adtwo('okquxiao').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin\'"/>');
	}
}elseif($_G['gp_adadmin']=='edit'){
	if(!submitcheck('slidesubmit')){
		$aid = intval($_G['gp_aid']);
		$chekid = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_adtwo')." WHERE id='$aid'");

		showtableheader(lang('plugin/dz55625_adtwo', 'nrbianji'), '');
		$query = DB::query("SELECT * FROM ".DB::table('forum_adtwo')." WHERE id='$aid'");
		$id_info = DB::fetch($query);
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin&adadmin=edit&id='.intval($id_info[id]));
		
		showsetting(dz55625_adtwo('huandbiaoz'), 'title', daddslashes($id_info[title]), 'text','0');	
		showsetting(dz55625_adtwo('tuphotos'), 'photos', daddslashes($id_info[photos]), 'text','0');	
		showsetting(dz55625_adtwo('tuplink'), 'urls', daddslashes($id_info[urls]), 'text','0');	
		showsubmit('slidesubmit', 'submit');
		showtablefooter();
		showformfooter();

	}else{
		$aid = intval($_G['gp_id']);
		$chekid = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_adtwo')." WHERE id=$aid");
		$title = daddslashes($_G['gp_title']);
		$photos = daddslashes($_G['gp_photos']);
		$urls = daddslashes($_G['gp_urls']);
		$times =  intval(time()+3600*0);
		$query = DB::query("SELECT * FROM ".DB::table('forum_adtwo')." WHERE id='$aid'");
		$chekedit = DB::fetch($query);

		DB::update('forum_adtwo', array('id' => $aid, 'title' => $title, 'photos' => $photos, 'urls' => $urls, 'dateline' => $times), "id='$aid'");
		cpmsg(dz55625_adtwo('gengxinok'));
	}
	
}elseif($_G['gp_adadmin']=='del'){
	$del_id = explode('|', intval($_G['gp_del_id']));
	$nums = 0;
	foreach($del_id as $aid) {
		$aid = intval($aid);
		$deichek = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_adtwo')." WHERE id='$aid'");
		if(!$deichek) {
			cpmsg_error(dz55625_adtwo('noxuanz'));
		} else {
			DB::query("DELETE FROM ".DB::table('forum_adtwo')." WHERE id='$aid'");
			$nums++;
		}

	}
	cpmsg(dz55625_adtwo('shanchuok'),'action=plugins&operation=config&do='.$pluginid.'&identifier=dz55625_adtwo&pmod=adadmin');
}
?>
