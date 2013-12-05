<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$uid = intval($_G['uid']);
$YueConfig = $_G['cache']['plugin']['dz55625_yuyue'];
if($YueConfig['start']==1){
	$Yesqlc = DB::result_first("SELECT COUNT(*) FROM ".DB::table('forum_alliance_yy')." WHERE uidz='$uid'");
	$Ypage = intval($_GET['page']);
	$Ypage = max($Ypage, 1);
	$ytarts = ($Ypage - 1) * $YueConfig['Snumber'];
	if($Yesqlc) {	
		$Ypsql = "SELECT * FROM ".DB::table('forum_alliance_yy')." WHERE uidz='$uid' ORDER BY dateline DESC LIMIT $ytarts,{$YueConfig['Snumber']}";
		$query = DB::query($Ypsql);
		$Yping = $Ypings = array();
		while($Yping = DB::fetch($query)){
			$Ypings[] = $Yping;
		}
	}
	$Ypmulti = "<div class='pages cl'>".multi($Ypsqlc, $YueConfig['Snumber'], $Ypage,'plugin.php?id=dz55625_haodian:haodian_user&p=yyue')."</div>";	
}
				
?>