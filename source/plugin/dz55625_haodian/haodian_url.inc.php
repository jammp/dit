<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$host= 'www.55625.com'; //��д��������Ҫ�ĵ�ַ
if ($_SERVER['HTTP_HOST'] != $host) {
	$uaurl=$_SERVER['HTTP_HOST']; #ȡ�û�����ĵ�ַ
	$tdi=substr($uaurl,0,strpos($uaurl,".",0));#ȡ��һ��.ǰ������
	if($RewriteStart == 1){
		$surl="http://{$host}/plugin.php?id=dz55625_haodian:haodian&mod=view&sid={$tdi}";#����ת��Ŀ��
	}else{
		$surl="http://{$host}/haodian_{$tdi}.html";#����ת��Ŀ��
	}
	header("location:$surl");#ת��
}
unset($host);
?>