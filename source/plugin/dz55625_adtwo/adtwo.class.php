<?php
/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	Make:55625.COM  Name:Lovenr
*/

if(!defined('IN_DISCUZ')) {
       exit('Access Denied'); 
}
class plugin_dz55625_adtwo{
	function global_usernav_extra2(){
		global $_G;
		if(intval($_G['adminid']) == 1){
			return "<span class='pipe'>|</span><a href=\"javascript:;\" onclick=\"showWindow('adtwo', 'plugin.php?id=dz55625_adtwo:adtwo&', 'get', 0)\" class=\"xi2\"> ".lang('plugin/dz55625_adtwo', 'adminhd')."</a> ";
		}
	}
	function global_header(){
		global $_G;
		if(!isset($_G['cache']['plugin'])){ loadcache('plugin'); }
		@extract($_G['cache']['plugin']['dz55625_adtwo']);
		if($start == 1){
			$sql = "SELECT * FROM ".DB::table('forum_adtwo')." ORDER BY dateline LIMIT 0,$picnum";
			$query = DB::query($sql);
			$huandeng = $huandengs = array();
			while($huandeng = DB::fetch($query)){
				$huandengs[] = $huandeng;
			}
			$Clickwindow = intval($Clickwindow) == 1 ? ' target="_blank"' : ''; 
			$where_top = $where_top ? unserialize($where_top) : array(); 
			if(in_array(CURSCRIPT,$where_top)){
				if((CURSCRIPT == "forum") && $_G[fid]) {
					return $return;
				}else{
					include template('dz55625_adtwo:adtwo_index');
				}
			}
			return $return;
		}
	}
}
class plugin_dz55625_adtwo_forum extends plugin_dz55625_adtwo{
}
?>
