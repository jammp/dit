<?php
/*
	[55625.COM!] (C)2001-2012 55625.COM Inc.
	BY QQ:114512039  Lovenr
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


include_once 'source/plugin/dz55625_house/house_Size.class.php';

if (!empty($_FILES)) {
	$filepath = "source/plugin/dz55625_house/upimg/".date("Ymd")."/";
	if(!file_exists($filepath)){ mkdir($filepath); }
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . date("Ymd") . '/';
	$name = date('YmdHis')."_".rand(1000,9999).'.'.getExt($_FILES['Filedata']['name']);
	$path = $filepath . $name; //����ԭʼ�ļ��Ĵ洢λ��
	move_uploaded_file($tempFile,$path);
	$resizeimage = new myThumbClass($path,600,1,$path,-1,0);
	echo $path;
}


// ��ȡ�ļ���չ��
function getExt($fileName){
	$ext = explode(".", $fileName);
	$ext = $ext[count($ext) - 1];
	return strtolower($ext);
}

?>