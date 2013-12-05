<?php
/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	Make:55625.COM  Name:Lovenr
*/

if(!defined('IN_DISCUZ')) {
       exit('Access Denied'); 
}
class plugin_dz55625_adone{
	function global_header(){
		global $_G;
		if(!isset($_G['cache']['plugin'])){ loadcache('plugin'); }
		@extract($_G['cache']['plugin']['dz55625_adone']);
		$Cookime = intval($Cookime);
		if($start == 1){
			$where_top = $where_top ? unserialize($where_top) : array(); 
			if(in_array(CURSCRIPT,$where_top)){
				if((CURSCRIPT == "forum") && $_G[fid]) {
					return $return;
				}else{
					if(isset($_COOKIE["flasCookie"])){   
						return $return;
					}else{
						setcookie('flasCookie','flashIos',time()+$Cookime);    
						include template('dz55625_adone:adone_index');
					}
				}
			}
		}
		return $return;
	}
}
class plugin_dz55625_adone_forum extends plugin_dz55625_adone{
	
}
?>
