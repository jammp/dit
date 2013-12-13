<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

if($_G['gp_mingchen']){
	$mingchen=addslashes($_G['gp_mingchen']);
	$where="mingchen like '%$mingchen%' AND";
	$mingchenenc=urlencode($mingchen);
	$pageadd="&mingchen=$mingchenenc";
}

$did = $tmpsea_a ? $tmpsea_a : intval($_G['gp_a']);
if($did){ 
	$subids = DB::result_first("SELECT subid FROM ".DB::table('house_fl')." WHERE id='{$did}'");
	if($subids){
		$wb="did IN ($subids) AND"; 
	}else{
		$wb="did=$did AND"; 
	}
	$pageadds="&a=$did";
	$av_d[$did] = ' class="house_hover"'; 
}else{
	$av_d[0] = ' class="house_hover"';
}
$sd = $tmpsea_b ? $tmpsea_b : intval($_G['gp_b']);
if($sd){ 
	$wc="did='$sd' AND"; 
	$pageaddx="&b=$sd";
	$av_d[$sd] = ' class="house_hover"'; 
}else{
	$av_d[0] = ' class="house_hover"';
}

$types = $tmpsea_c ? $tmpsea_c : intval($_G['gp_c']);
if ($types){
	if ($types==500){
		$sa[] = "zujin <= 500 AND danwei=1";
		$pageadd="&c=500";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==1000){
		$sa[] = "zujin >= 500 AND zujin <= 1000 AND danwei = 1 ";
		$pageadd="&c=1000";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==1500) {
		$sa[] = "zujin >= 1000 AND zujin <= 1500 AND danwei = 1 ";
		$pageadd="&c=1500";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==2000) {
		$sa[] = "zujin >= 1500 AND zujin <= 2000 AND danwei = 1 ";
		$pageadd="&c=2000";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==3000) {
		$sa[] = "zujin >= 2000 AND zujin <= 3000 AND danwei = 1 ";
		$pageadd="&c=3000";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==9000) {
		$sa[] = "zujin >= 3000 AND zujin <= 9000 AND danwei = 1 ";
		$pageadd="&c=9000";
		$a_hover[$types] = ' class="house_hover"'; 
	}elseif($types==10000) {
		$sa[] = "danwei >= 2 ";
		$pageadd="&c=10000";
		$a_hover[$types] = ' class="house_hover"'; 
	}
}
if ($sa){ $wheres = "" . implode(" AND ", $sa) . " AND"; }

$dypes = $tmpsea_d ? $tmpsea_d : intval($_G['gp_d']);
if ($dypes){
	if ($dypes==1){
		$sc[] = "shi = 1";
		$pageadde="&d=1";
		$a_hover[$dypes] = ' class="house_hover"'; 
	}elseif($dypes==2){
		$sc[] = "shi = 2";
		$pageadde="&d=2";
		$a_hover[$dypes] = ' class="house_hover"'; 
	}elseif($dypes==3){
		$sc[] = "shi = 3";
		$pageadde="&d=3";
		$a_hover[$dypes] = ' class="house_hover"'; 
	}elseif($dypes==4){
		$sc[] = "shi = 4";
		$pageadde="&d=4";
		$a_hover[$dypes] = ' class="house_hover"'; 
	}elseif($dypes==5){
		$sc[] = "shi >= 5";
		$pageadde="&d=5";
		$a_hover[$dypes] = ' class="house_hover"'; 
	}
	
}
if ($sc){ $shi = "" . implode(" AND ", $sc) . " AND"; }

$zypes = $tmpsea_e ? $tmpsea_e : intval($_G['gp_e']);
if ($zypes){
	if ($zypes==$zypes){
		$se[] = "fangshi = $zypes";
		$pageaddw="&e=$zypes";
		$e_hover[$zypes] = ' class="house_hover"'; 
	
	}
	
}
if ($se){ $fs = "" . implode(" AND ", $se) . " AND"; }

$px = 'DESC';
$fypes = $tmpsea_f ? $tmpsea_f : intval($_G['gp_f']);
if ($fypes){
	if ($fypes==1){
		$sf[] = $px="ASC";
		$pageaddg="&f=1";
		$f_hover[$fypes] = ' class="f_hover"'; 
	}
	
}
if ($sf){ $px = "" . implode(" AND ", $sf) . " "; }


$gypes = $tmpsea_g ? $tmpsea_g : intval($_G['gp_g']);

?>