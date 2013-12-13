<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

loadcache('plugin');
$adminpagenum = 15;
@extract($_G['cache']['plugin']['dz55625_house']);
$p = addslashes($_G['gp_p']);
$p = $p?$p:'index';
$appurl=$_G['siteurl']."admin.php?action=plugins&operation=config&do=$_G[gp_do]&identifier=$_G[gp_identifier]&pmod=house_admin";
$Fs_class = parconfig($Fs_class);
$Ls_class = parconfig($Ls_class);
$Zs_class = parconfig($Zs_class);
$Cx_class = parconfig($Cx_class);
$Yj_class = parconfig($Yj_class);
$Pz_class = parconfig($Pz_class);
$Dw_class = parconfig($Dw_class);
if($p=='index'){


	if($_G['gp_mingchen']){
		$mingchen=addslashes($_G['gp_mingchen']);
		$where="WHERE mingchen like '%$mingchen%'";
	}
	
	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('house_ar')." $where");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * 15;
	if($counts) {
		$sql = "SELECT * FROM ".DB::table('house_ar')." $where ORDER BY xnum ASC,dateline DESC LIMIT $starts,15";
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythreads[] = $mythread;
		}
	}
	$multis = "<div class='pages cl'>".multi($counts, 15, $pages, $appurl."&p=$p".$pageadd)."</div>";
	//------------------------------------------------------------------------------
	if(submitcheck('applysubmitz')){	
		$id = intval($_GET['newid']);
		$active=DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id ='{$id}'");
		if(is_array($_POST['xnum'])) {
			foreach($_POST['xnum'] as $id => $val) {
				DB::update('house_ar', array('xnum' => intval($_POST['xnum'][$id])), "id='$id'");
			}
		}
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl);	
	}
	//------------------------------------------------------------------------------
	
	if(submitcheck('applysubmzd')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('house_ar')." SET topid='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl);	
		
	}elseif(submitcheck('applysubmtj')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('house_ar')." SET top='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl);	
		
	}elseif(submitcheck('applysubmsh')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('house_ar')." SET display='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl);	
	}elseif(submitcheck('applysubmdel')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $ssd) {
			$active=DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id ='{$ssd}' LIMIT 0 , 1");
			$sql = "SELECT * FROM ".DB::table('house_img')." WHERE aid = '$ssd'";
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
			DB::query("DELETE a,b FROM ".DB::table('house_ar')." AS a LEFT JOIN ".DB::table('house_img')." AS b ON a.id = b.aid  WHERE a.id = '$ssd' ");
			$nums++;
		}
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl);	
	}
include(template("dz55625_house:admin_i"));

}elseif ($p=='edit'){
	
	include_once 'source/plugin/dz55625_house/house_Size.class.php';
	$id = intval($_G['gp_id']);
	$info = DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id='$id'");
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
	
	if($_POST){
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
				cpmsg(lang('plugin/dz55625_house', 'zhiyunxu'),$appurl);		
			}
			$filepath = "source/plugin/dz55625_house/upimg/".date("Ymd")."/";
			$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
			if(!file_exists($filepath)){ mkdir($filepath); }
			if($filesize){ 
				if(@copy($_FILES['file']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $filepath.$randname))) {
					 @unlink($_FILES['file']['tmp_name']);
				}
			}else{
				cpmsg(lang('plugin/dz55625_house', 'cguodx'),$appurl);	
			}
			$pic = "source/plugin/dz55625_house/upimg/".date("Ymd")."/".$randname."";
			$resizeimage = new myThumbClass($pic,285,240,$pic,0,0);
		}
		
		
		DB::update('house_ar',array('fangshi' => $fangshi,'mingchen' => $mingchen,'did' => $did,'uid' => $uid,'author' => $author,'shi' => $shi,'ting' => $ting,'wei' => $wei,'pingmi' => $pingmi,'dic' => $dic,'gic' => $gic,'leixing' => $leixing,'zhuangxiu' => $zhuangxiu,'chaoxiang' => $chaoxiang,'peizhi' => $peizhi,'zujin' => $zujin,'danwei' => $danwei,'yajin' => $yajin,'tel' => $tel,'xingming' => $xingming,'subject' => $subject,'oicq' => $oicq,'pic' => $pic),"id='$id'");
		
		
		cpmsg(lang('plugin/dz55625_house', 'gengxinok'),$appurl."&p=edit&id=".$id);
		
		}


include(template("dz55625_house:admin_e"));


}elseif($p=='check'){
	
	if($_GET['operation'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET display='1' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'shenheok'),$appurl);
	}elseif($_GET['operation'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET display='0' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'quxiaoshe'),$appurl);
	}
}elseif($p=='topid'){
	
	if($_GET['d'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET topid='1' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'tuiguangok'),$appurl);
	}elseif($_GET['d'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET topid='0' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'quxiaotguan'),$appurl);
	}			
}elseif($p=='top'){
	
	if($_GET['tj'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET top='1' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'tuijianok'),$appurl);
	}elseif($_GET['tj'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('house_ar')." SET top='0' WHERE id='$id'");
		cpmsg(lang('plugin/dz55625_house', 'quxiaotui'),$appurl);
	}
		
}elseif ($p=='del'){
	$id = intval($_G['gp_id']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('house_ar')." WHERE id ='{$id}'");
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
	DB::query("DELETE a,b FROM ".DB::table('house_ar')." AS a LEFT JOIN ".DB::table('house_img')." AS b ON a.id = b.aid  WHERE a.id = '$id' ");
	cpmsg(lang('plugin/dz55625_house', 'shanchuok'),$appurl);
}
else cpmsg(lang('plugin/dz55625_house', 'swdingyi'));
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
