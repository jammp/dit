<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

loadcache('plugin');
include_once 'house_vik.inc.php';
@extract($_G['cache']['plugin']['dz55625_house']);
$p = $_G['gp_p'];
$p = $p?$p:'index';
$his = $_G['siteurl'];
$appurls=$_G['siteurl']."plugin.php?id=dz55625_house:house_user";
$Clickwindow = $Clickwindow == 1 ? ' target="_blank"' : ''; 
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
if($p=='index'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_house', 'wuquancz'), '', array(), array('login' => true));
	}
	$uid = intval($_G['uid']);
	$counts = DB::result_first("SELECT * FROM ".DB::table('house_ar')." WHERE uid = '$uid'  ORDER BY id DESC");
	$countr = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." WHERE uid='$uid'");
	$pager = intval($_GET['page']);
	$pager = max($pager, 1);
	$starts = ($pager - 1) * 8;
	if($countr) {
		if($hus == $stu){$rs=DB::query("SELECT * FROM ".DB::table('house_ar')." WHERE uid='$uid' ORDER BY topid DESC,dateline DESC LIMIT $starts,8");}
		while ($rw=DB::fetch($rs)){
			$manylist[]=$rw;
		}
	}
	$appurl=$_G['siteurl']."plugin.php?id=dz55625_house:house_user&p=index";
	$multir = "<div class='pagez cl' style='margin-top:10px;margin-bottom:10px;'>".multi($countr, 8, $pager, $appurl.$pageadd)."</div>";

}elseif($p=='edit'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_house', 'wuquancz'), '', array(), array('login' => true));
	}
	include_once 'source/plugin/dz55625_house/house_Size.class.php';
	$uid = intval($_G['uid']);
	$id = intval($_G['gp_sid']);
	$pcinfo = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_img')." WHERE aid='$id'");
	$info = DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id='$id' AND uid='$uid'");
	if($info['uid']!=$uid){
		showmessage(lang('plugin/dz55625_house', 'swdingyi'), '', array(), array('login' => true));	
	}
	$array = change($info['peizhi']);
	$localupid = DB::result_first("SELECT upid FROM ".DB::table('house_fl')." WHERE id='{$info['did']}'");
	if($localupid) {
		$localshow = '<select name="local_2" >';
		$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE upid='$localupid'");
		while($row = DB::fetch($query)) {
			if($row['id'] == $info['did']) {
				$localshow .= '<option value="'.$row['id'].'" selected >'.$row['subject'].'</option>';
			} else {
				$localshow .= '<option value="'.$row['id'].'">'.$row['subject'].'</option>';
			}
		}
		$localshow .= '</select>';
	} else {
		$localupid = $info['did'];
	}
		
	$query = DB::query("SELECT * FROM ".DB::table('house_fl')." WHERE upid='0'");
	while($row = DB::fetch($query)) {
		$local[$row['id']] = $row;
	}
	
	
	if(submitcheck('applysubmit')){
		if($hus == $stu){
		$sid = intval($_G['gp_sid']);
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
		$pic = addslashes($_G['gp_pic']);
		
		if($_FILES['file']['error']==0){
			$rand=date("YmdHis").random(3, $numeric =1);
			$filesize = $_FILES['file']['size'] <= $picdx ;   // ·âÃæÍ¼Æ¬´óÐ¡
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
		
		
		DB::update('house_ar',array('fangshi' => $fangshi,'mingchen' => $mingchen,'did' => $did,'uid' => $uid,'author' => $author,'shi' => $shi,'ting' => $ting,'wei' => $wei,'pingmi' => $pingmi,'dic' => $dic,'gic' => $gic,'leixing' => $leixing,'zhuangxiu' => $zhuangxiu,'chaoxiang' => $chaoxiang,'peizhi' => $peizhi,'zujin' => $zujin,'danwei' => $danwei,'yajin' => $yajin,'tel' => $tel,'xingming' => $xingming,'subject' => $subject,'oicq' => $oicq,'pic' => $pic),"id='$sid'");
		
		}
		showmessage(lang('plugin/dz55625_house', 'gengxinok'), $appurls."&p=edit&sid=".$sid, array(), array('alert' => right));
	}
}elseif($p=='listpic'){
	if($_G['groupid']==7){
		showmessage(lang('plugin/dz55625_house', 'wuquancz'), '', array(), array('login' => true));
	}
	$uid = intval($_G['uid']);
	$sid = intval($_G['gp_sid']);
	$csql = "SELECT * FROM ".DB::table('house_img')." WHERE aid='$sid' AND uid='$uid' ORDER BY dateline DESC";
	$query = DB::query($csql);
	$cuesr = $cuesrs = array();
	while($cuesr = DB::fetch($query)){
		$cuesrs[] = $cuesr;
	}
	$action = $_G['gp_action'];
	if($action=="del"){
		$sid = intval($_G['gp_sid']);
		$pid = intval($_G['gp_pid']);
		$active=DB::fetch_first("SELECT * FROM ".DB::table('house_img')." WHERE id ='{$pid}' AND uid='$uid' LIMIT 0 , 1");
		if($active['uid']!=$uid){
			showmessage(lang('plugin/dz55625_house', 'swdingyi'), '', array(), array('login' => true));	
		}
		if ($active["img"]!=false){
			unlink($active["img"].$filetype);
		}
		DB::query("DELETE FROM ".DB::table('house_img')." WHERE id='$pid' AND uid='$uid' LIMIT 1 ");
		showmessage(lang('plugin/dz55625_house', 'shanchuok'), $appurls."&p=listpic&sid=".$sid, array(), array('alert' => right));
	}elseif($action=="upic"){
		if(submitcheck('applysubmits')){
			$aid = intval($_G['gp_sid']);
			$uid = intval($_G['uid']);
			$timestamp = $_G['timestamp'];
			$countz = count($_POST['filelist']);
			for($i=0;$i<$countz;$i++){
				$img = addslashes($_POST['filelist'][$i]);
				DB::query("INSERT INTO ".DB::table('house_img')." ( `id` , `aid`, `uid`, `img`,`dateline` ) VALUES (NULL , '$aid', '$uid', '$img','$timestamp');");
			}  
			showmessage(lang('plugin/dz55625_house', 'gengxinok'), $appurls."&p=listpic&sid=".$sid, array(), array('alert' => right));
		}
	}

}elseif ($p=='del'){
	$uid = intval($_G['uid']);
	$id = intval($_G['gp_sid']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id ='{$id}' AND uid='$uid'");
	if($active['uid']!=$uid){
		showmessage(lang('plugin/dz55625_house', 'swdingyi'), '', array(), array('login' => true));	
	}
	$sql = "SELECT * FROM ".DB::table('house_img')." WHERE aid = '$id'";
	$query = DB::query($sql);
	$delz = $delzs = array();
	while($delz = DB::fetch($query)){
		if ($delz["img"]!=false){
			unlink($delz["img"].$filetype);
		}
		$delzs[] = $delz;
	}
	if ($active["pic"]!=false){
		unlink($active["pic"].$filetype);
	}
	if($hus == $stu){
	DB::query("DELETE a,b FROM ".DB::table('house_ar')." AS a LEFT JOIN ".DB::table('house_img')." AS b ON a.id = b.aid  WHERE a.id = '$id' ");}
	showmessage(lang('plugin/dz55625_house', 'shanchuok'), $appurls, array(), array('alert' => right));		
		
}

include(template("dz55625_house:house_user"));

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