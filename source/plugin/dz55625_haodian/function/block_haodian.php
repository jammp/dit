<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr  WWW.55625.COM
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class block_haodian extends discuz_block{
	var $setting = array();
	function block_haodian(){
		$this->setting = array(
			'titlelength' => array(
				'title' =>  lang('plugin/dz55625_haodian','blockclass_biaotiling'),
				'type' => 'text',
				'default' => 40
			),
			'param' => array(
				'title' => lang('plugin/dz55625_haodian','blockclass_fangshi'),
				'type' => 'select',
				'value' => array(
					array('0', lang('plugin/dz55625_haodian','blockclass_news')),
					array('1', lang('plugin/dz55625_haodian','blockclass_comm')),
					array('2', 'VIP'),
					array('3', lang('plugin/dz55625_haodian','blockclass_zkou')),
				),
				'default' => '0'
			),
		);
	}
	function name() {
		return  lang('plugin/dz55625_haodian','blockclass_data');
	}
	function blockclass() {
		return array('sample', lang('plugin/dz55625_haodian','blockclass_mokuai'));
	}
	function fields() {
		return array(
			'title' => array('name' => lang('plugin/dz55625_haodian','blockclass_title'), 'formtype' => 'title', 'datatype' => 'title'),
			'url' => array('name' => lang('plugin/dz55625_haodian','blockclass_url'), 'formtype' => 'text', 'datatype' => 'string'),
			'pic' => array('name' => lang('plugin/dz55625_haodian','blockclass_pic'), 'formtype' => 'pic', 'datatype' => 'pic'),
			'zhekou' => array('name' => lang('plugin/dz55625_haodian','blockclass_zhekou'), 'formtype' => 'text', 'datatype' => 'string'),
			'address' => array('name' => lang('plugin/dz55625_haodian','blockclass_address'), 'formtype' => 'text', 'datatype' => 'string'),
			'tel' => array('name' => lang('plugin/dz55625_haodian','blockclass_tel'), 'formtype' => 'text', 'datatype' => 'string'),
			'dateline' => array('name' => lang('plugin/dz55625_haodian','blockclass_dateline'), 'formtype' => 'date', 'datatype' => 'date'),
		);
	}
	function getsetting() {
		global $_G;
		$settings = $this->setting;
		return $settings;
	}
	function getdata($style, $parameter) {
		global $_G;
		$returndata = array('html' => '', 'data' => '');
		$parameter = $this->cookparameter($parameter);
		$titlelength = isset($parameter['titlelength']) ? intval($parameter['titlelength']) : 40;
		$startrow	 = isset($parameter['startrow']) ? intval($parameter['startrow']) : 0;
		$items		 = !empty($parameter['items']) ? intval($parameter['items']) : 10;
		$bannedids = !empty($parameter['bannedids']) ? explode(',', $parameter['bannedids']) : array();
		$sqlban = !empty($bannedids) ? ' AND id NOT IN ('.dimplode($bannedids).')' : '';
		
		if($parameter['param']==2){
			$vip = "click = '1' AND";
		}elseif($parameter['param']==1){
			$ordin = "top='1' AND";
		}elseif($parameter['param']==3){	
			$zhekou = "sad>0 AND";
		}
		//---------------------------------------
		$query = DB::query("SELECT * FROM ".DB::table('forum_alliance_ar')." WHERE $zhekou $vip $ordin display!='0' $sqlban ORDER BY dateline DESC LIMIT $startrow, $items");
		$datalist = $list = array();
		while($data = DB::fetch($query)) {
			$list[] = array(
				'id' => $data['id'],
				'idtype' => 'id',
				'title' => cutstr($data['title'], $titlelength, ''),
				'url' => 'plugin.php?id=dz55625_haodian:haodian&mod=view&sid='.$data['id'],
				'pic' => $data['pic'] ? $data['pic'] : STATICURL.'image/common/nophoto.gif',
				'fields' => array(
					'zhekou' => $data['sad'],
					'address' => $data['address'],
					'tel' => $data['tel'],
					'dateline' => $data['dateline'],
					
				)
			);
		}
		return array('html' => '', 'data' => $list);
	}

}


?>