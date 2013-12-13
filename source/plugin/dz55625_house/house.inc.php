<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once libfile('function/discuzcode');
include_once 'house_vik.inc.php';

global $_G;
if(!isset($_G['cache']['plugin'])){ loadcache('plugin'); }
@extract($_G['cache']['plugin']['dz55625_house']);
$appurl=$_G['siteurl']."plugin.php?id=dz55625_house:house";
$Clickwindow = $Clickwindow == 1 ? ' target="_blank"' : ''; 
$his = $_G['siteurl'];
$uc = $_G['setting']['ucenterurl'] ;
$his = parse_url($his);
$his = strtolower($his['host']) ;
$domain = array('com','cn','cc','org','net','me','co');
$stu = $his;
$dd = implode('|',$domain);
$stu = preg_replace('/(\.('.$dd.'))*\.('.$dd.')$/iU','',$stu);
$stu = explode('.',$stu);
$stu = array_pop($stu); 
$stu = substr($his,strrpos($his,$stu));  
$Fs_class = parconfig($Fs_class);
$Ls_class = parconfig($Ls_class);
$Zs_class = parconfig($Zs_class);
$Cx_class = parconfig($Cx_class);
$Yj_class = parconfig($Yj_class);
$Pz_class = parconfig($Pz_class);
$Dw_class = parconfig($Dw_class);
$hurlz = md5(implode('', $housek));
if($RewriteStart == 1){
	$curl = 'house';	 
}else{
	$curls = 'plugin.php?id=dz55625_house:house&mod=view&sid=';
}
if(!$_G['gp_mod']){
	
	include_once 'source/plugin/dz55625_house/house_type.inc.php';
	//-----------------------------
	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE $where $wheres $shi $fs $wb $wc display!='0'");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * $eacha;
	//-----------------------------
	if($counts) {
		if($hus == $stu){
		$sql = "SELECT * FROM ".DB::table('house_ar')." WHERE $where $wheres $shi $fs $wb $wc display!='0' ORDER BY topid DESC,dateline $px,zujin $ps  LIMIT $starts,$eacha";}
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythread['dateline'] = gmdate('m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
			$xianzai = gmdate('m-d', $_G['timestamp'] + $_G['setting']['timeoffset'] * 3600); 
			$mythread['subject'] = discuzcode($mythread['subject'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
			$mythread['subject'] = cutstr($mythread['subject'], 75, '...');
			$mythread['danwei'] = $Dw_class[$mythread['danwei']];
			$peizhs = change($mythread['peizhi']);
			if($mythread['dateline']==$xianzai){
				$mythread['dateline']= lang('plugin/dz55625_house', 'jintian');
			}
			$sqla = "SELECT * FROM ".DB::table('house_fl')." WHERE id = '{$mythread[did]}'";
			$pa = DB::fetch(DB::query($sqla));
			$mythread['mingchen'] = $pa['subject']." ".$mythread['mingchen'];
			$mythread['fangshi'] = $Fs_class[$mythread['fangshi']];
			$mythreads[] = $mythread;
		}
	}
	
	$multis = "<div class='pages cl'>".multi($counts, $eacha, $pages, $appurl.$pageadds.$pageaddx.$pageadd.$pageadde.$pageaddw.$pageaddg)."</div>";
	//-----------------------------
	$d = intval($_G['gp_a']);
	$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE upid='0' ORDER BY displayorder ASC");
	while($row = DB::fetch($query)) {
		$local[$row['id']] = $row;
	}
	
	$subid = DB::result_first("SELECT subid FROM ".DB::table('house_fl')." WHERE id='{$d}'");
	if($subid) {
		$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE id IN ({$subid}) ORDER BY displayorder ASC");
		while($ros = DB::fetch($query)) {
			$locals[$ros['id']] = $ros;
		}
	}
	if($housekign == $hurlz ){
	//推荐房源信息
	$cuserco = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE top='1'");
	$csql = "SELECT * FROM ".DB::table('house_ar')." WHERE top='1'  ORDER BY dateline DESC LIMIT $TjNum";
	$query = DB::query($csql);
	$cuesr = $cuesrs = array();
	while($cuesr = DB::fetch($query)){
		$cuesr['danwei'] = $Dw_class[$cuesr['danwei']];
		$cuesrs[] = $cuesr;
	}
	}
	
}elseif($_G['gp_mod']=='add'){
	
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_house', 'wuquancz'), '', array(), array('login' => true));
	}
	$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE upid='0'");
	while($row = DB::fetch($query)) {
		$local[$row['id']] = $row;
	}
	//-----------------------------------------
	$groups = unserialize($groups);
	$admins = explode(",", $groupso);
	include_once 'source/plugin/dz55625_house/house_Size.class.php';
	if(!in_array($_G['groupid'], $groups)){
			showmessage(lang('plugin/dz55625_house', 'wuquancz'), '', array(), array('login' => true));
	}else{
	if(submitcheck('applysubmit')){
		if(empty($_G['gp_subject'])){
			showmessage(lang('plugin/dz55625_house', 'qshurumshu'), dreferer());
		}else{
			if($hus == $stu){
			$fangshi = addslashes($_G['gp_fangshi']);
			$mingchen = addslashes($_G['gp_mingchen']);
			$did = intval($_G['gp_local_2']) ? intval($_G['gp_local_2']) : intval($_G['gp_local_1']);
			$shi = addslashes($_G['gp_shi']);
			$ting = addslashes($_G['gp_ting']);
			$wei = addslashes($_G['gp_wei']);
			$pingmi = addslashes($_G['gp_pingmi']);
			$dic = addslashes($_G['gp_dic']);
			$gic = addslashes($_G['gp_gic']);
			$leixing = addslashes($_G['gp_leixing']);
			$zhuangxiu = addslashes($_G['gp_zhuangxiu']);
			$chaoxiang = addslashes($_G['gp_chaoxiang']);
			$peizhi = addslashes(implode(',',$_POST["peizhi"]));
			$zujin = addslashes($_G['gp_zujin']) == '' ? 0 : addslashes($_G['gp_zujin']); 
			$danwei = addslashes($_G['gp_danwei']);
			$yajin = addslashes($_G['gp_yajin']);
			$tel = addslashes($_G['gp_tel']);
			$xingming = addslashes($_G['gp_xingming']);
			$subject = addslashes($_G['gp_subject']);
			$oicq = intval($_G['gp_oicq']);
			$uid = intval($_G['uid']);
			$author = addslashes($_G['username']);
			$display = intval($displays) == 1 ? 1 : 0; 
			$timestamp = intval($_G['timestamp']);
			
			if($_FILES['file']['error']==0){
				$rand=date("YmdHis").random(3, $numeric =1);
				$filesize = $_FILES['file']['size'] <= $picdx ;   // 封面图片大小
				$filetype = array("jpg", "jpeg", "gif", "png");
				$arr=explode(".", $_FILES["file"]["name"]);
				$hz=$arr[count($arr)-1];
				if(!in_array($hz, $filetype)){
					showmessage(lang('plugin/dz55625_house', 'zhiyunxu'));	
				}
				$filepath = "source/plugin/dz55625_house/upimg/".date("Ymd")."/";
				$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
				if(!file_exists($filepath)){ mkdir($filepath); }
				if($filesize){ 
					if(@copy($_FILES['file']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $filepath.$randname))) {
						 @unlink($_FILES['file']['tmp_name']);
					}
				}else{
					showmessage(lang('plugin/dz55625_house', 'cguodx'));	
				}
				$pic = "source/plugin/dz55625_house/upimg/".date("Ymd")."/".$randname."";
				$resizeimage = new myThumbClass($pic,285,240,$pic,0,0);
			}
			
			}
			DB::insert('house_ar',array('id' => '','fangshi' => $fangshi,'mingchen' => $mingchen,'did' => $did,'uid' => $uid,'author' => $author,'shi' => $shi,'ting' => $ting,'wei' => $wei,'pingmi' => $pingmi,'dic' => $dic,'gic' => $gic,'leixing' => $leixing,'zhuangxiu' => $zhuangxiu,'chaoxiang' => $chaoxiang,'peizhi' => $peizhi,'zujin' => $zujin,'danwei' => $danwei,'yajin' => $yajin,'tel' => $tel,'xingming' => $xingming,'subject' => $subject,'oicq' => $oicq,'pic' => $pic,'display' => $display,'dateline' => time()));
		}
		//-----------------------------------------------
		
		$aid = DB::insert_id();
		$countz = count($_POST['filelist']);
		if($housekign == $hurlz ){
			for($i=0;$i<$countz;$i++){
				$img = addslashes($_POST['filelist'][$i]);
				DB::query("INSERT INTO ".DB::table('house_img')." ( `id` , `aid`, `uid`, `img`,`dateline` ) VALUES (NULL , '$aid', '$uid', '$img','$timestamp');");
			}  
		}
		//-----------------------------------------------
		if($displays == 0){
			for($i=0;$i<count($admins);$i++){
				notification_add($admins[$i], 'system',lang('plugin/dz55625_house', 'zuixinshe'),  $notevars = array(), $system = 0);
			}
				showmessage(lang('plugin/dz55625_house', 'shenhejd'), 'plugin.php?id=dz55625_house:house', array(), array('alert' => right));
			}else{
				showmessage(lang('plugin/dz55625_house', 'fabuok'), 'plugin.php?id=dz55625_house:house', array(), array('alert' => right));
		}
		
	}
	}
	//-------------------------
	$action = $_G['gp_action'];
	if($action == 'getlocal') {
		$lid = intval($_G['gp_lid']);
		$show = '';
		if($lid) {
			$subid = DB::result_first("SELECT subid FROM ".DB::table('house_fl')." WHERE id='{$lid}'");
			if($subid) {
				$show = '<select class="ps" name="local_2">';
				$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE id IN ({$subid})");
				while($row = DB::fetch($query)) {
					$show .= '<option value="'.$row['id'].'">'.$row['subject'].'</option>';
				}
				$show .= '</select>';
			} else {
				$show = '';
			}
			include template("dz55625_house:select");
		}
	}
	//---------------------------

}elseif($_G['gp_mod']=='user'){	

	$uid = intval($_G['gp_uid']);
	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE uid='$uid' AND display!='0'");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * $eacha;
	if($counts) {
		if($hus == $stu){
		$sql = "SELECT * FROM ".DB::table('house_ar')." WHERE uid='$uid' AND display!='0' ORDER BY topid DESC,dateline DESC  LIMIT $starts,$eacha";
		}
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythread['dateline'] = gmdate('m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
			$xianzai = gmdate('m-d', $_G['timestamp'] + $_G['setting']['timeoffset'] * 3600); 
			$mythread['subject'] = discuzcode($mythread['subject'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
			$mythread['subject'] = cutstr($mythread['subject'], 75, '...');
			$mythread['danwei'] = $Dw_class[$mythread['danwei']];
			if($mythread['dateline']==$xianzai){
				$mythread['dateline']= lang('plugin/dz55625_house', 'jintian');
			}
			$sqla = "SELECT * FROM ".DB::table('house_fl')." WHERE id = '{$mythread[did]}'";
			$pa = DB::fetch(DB::query($sqla));
			$mythread['mingchen'] = $pa['subject']." / ".$mythread['mingchen'];
			$mythread['fangshi'] = $Fs_class[$mythread['fangshi']];
			$mythreads[] = $mythread;
		}
	}
	$multis = "<ol class='pagezs cl' style='margin-right:10px'>".multi($counts, $eacha, $pages, 'plugin.php?id=dz55625_house:house&mod=user&uid='.$_G['uid'])."</ol>";

}elseif($_G['gp_mod']=='view'){	

	$sid = intval($_G['gp_sid']);
	if($hus == $stu){
	$sql = "SELECT * FROM ".DB::table('house_ar')." WHERE id='$sid'";}
	$query = DB::query($sql);
	$mythread = $mythreads = array();
	while($mythread = DB::fetch($query)){
		$mythread['dateline'] = gmdate('m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
		$mythread['subject'] = discuzcode($mythread['subject'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
		$mythread['yajin'] = $Yj_class[$mythread['yajin']];
		$mythread['danwei'] = $Dw_class[$mythread['danwei']];
		$mythread['leixing'] = $Ls_class[$mythread['leixing']];
		$mythread['zhuangxiu'] = $Zs_class[$mythread['zhuangxiu']];
		$mythread['chaoxiang'] = $Cx_class[$mythread['chaoxiang']];
		$mythread['fangshi'] = $Fs_class[$mythread['fangshi']];
		$navtitle = $mythread['mingchen'].$mythread['shi'].lang('plugin/dz55625_house', 'shi').$mythread['ting'].lang('plugin/dz55625_house', 'ting').$mythread['pingmi'].lang('plugin/dz55625_house', 'pingmi').' - '.$navtitle;
		$peizh = change($mythread['peizhi']);
		$urltel = tels($mythread['tel']);
		//---------------------------------
		$sqlc = "SELECT * FROM ".DB::table('house_fl')." WHERE id = '{$mythread[did]}'";
		$px = DB::fetch(DB::query($sqlc));
		$queryc = "SELECT * FROM ".DB::table('house_fl')." WHERE id = '{$px[upid]}'";
		$pz = DB::fetch(DB::query($queryc));
		$mythread['did'] = $pz['subject']." - ".$px['subject'];
		$mythread['mingchen'] = $px['subject']." ".$mythread['mingchen'];
		$mythreads[] = $mythread;
	}
	
	
	//---------------------------
	//房源信息查询
	$ps = DB::fetch(DB::query($sql));
	if($hus == $stu){
	$userco = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE uid='{$ps[uid]}' AND display!='0'");
	$usql = "SELECT * FROM ".DB::table('house_ar')." WHERE uid='{$ps[uid]}' AND display!='0'  ORDER BY dateline DESC LIMIT 3";}
	$query = DB::query($usql);
	$uesr = $uesrs = array();
	while($uesr = DB::fetch($query)){
		$uesr['danwei'] = $Dw_class[$uesr['danwei']];
		$uesr['mingchen'] = cutstr($uesr['mingchen'], 15, '.');
		$uesrs[] = $uesr;
	}
	//推荐房源信息
	$cuserco = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE top='1' AND display!='0'");
	$csql = "SELECT * FROM ".DB::table('house_ar')." WHERE top='1'  ORDER BY dateline DESC LIMIT 0,$TjNum";
	$query = DB::query($csql);
	$cuesr = $cuesrs = array();
	while($cuesr = DB::fetch($query)){
		$cuesr['danwei'] = $Dw_class[$cuesr['danwei']];
		$cuesr['mingchen'] = cutstr($cuesr['mingchen'], 15, '.');
		$cuesrs[] = $cuesr;
	}
	//图片信息查询
	if($hus == $stu){
	$psql = "SELECT * FROM ".DB::table('house_img')." WHERE aid='$sid'";}
	$query = DB::query($psql);
	$pser = $psers = array();
	while($pser = DB::fetch($query)){
		$psers[] = $pser;
	}
	
}

include template('dz55625_house:house_index');

function tels($strs){
 global $_G;
 $bianma = $_G['charset'];
 $xml = "";
 $f = fopen( 'http://www.youdao.com/smartresult-xml/search.s?type=mobile&q='.$strs, 'r' );
 while( $data = fread( $f, 4096 ) ) {
     $xml .= $data; 
 }
 fclose( $f );
 preg_match_all( "/\<smartresult\>(.*?)\<\/smartresult\>/s", $xml, $bookblocks );
 foreach( $bookblocks[1] as $block ){
	 preg_match_all( "/\<location\>(.*?)\<\/location\>/", $block, $location );
	 return(iconv( "GBK", $bianma , $location[1][0]));
 }
}
function change($str){
	$return = array();
	$array = explode(",",$str);
	foreach ($array as $v){
		$t = explode(" ",$v);
		$return[$t[0]] = $t[0];
	}
	return $return;
}
function parconfig($str){
	$return = array();
	$array = explode("\n",str_replace("\r","",$str));
	foreach ($array as $v){
	   $t = explode("=",$v);
	   $t[0] = trim($t[0]);
	   $return[$t[0]] = $t[1];
	}
	return $return;
} 


?>