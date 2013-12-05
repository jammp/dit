<?php

class myThumbClass{

	public $sur_file;	//��ȡ��ԭͼƬ
	public $des_file;	//����Ŀ��ͼƬ
	public $tem_file;	//��ʱͼƬ
	public $tag;		//���Ա�ǩ  0,Ĭ��,���̶��ĸ߿�����  1,�����л�̶���󳤶�����  -1,��ĳ����Ȼ�ĳ���߶���С
	public $resize_width;		//$tagΪ0ʱ,Ŀ���ļ���
	public $resize_height;		//$tagΪ0ʱ,Ŀ���ļ���
	public $sca_max;	//$tagΪ1ʱ,<0$sca_max<1ʱΪ��С����;$sca_max>1ʱΪ��󳤶�(�߻��֮�е����ֵ)

	public $type;		//ͼƬ����
	public $width;		//ԭͼƬ��
	public $height;		//ԭͼƬ��

	//���캯��
	public function __construct($surpic, $reswid, $reshei, $despic, $mark, $scamax){
		$this->sur_file = $surpic;
		$this->resize_width = $reswid;
		$this->resize_height = $reshei;
		$this->tag = $mark;
		$this->sca_max = $scamax;

		$this->type = strtolower(substr(strrchr($this->sur_file,"."),1));	//��ȡͼƬ����
		$this->init_img();	//��ʼ��ͼƬ
		$this->des_file = $despic;	//Ŀ��ͼƬ��ַ
		$this->width = imagesx($this->tem_file);
		$this->height = imagesy($this->tem_file);
		$this->new_img();
		imagedestroy($this->tem_file);
	}

	//ͼƬ��ʼ������
	private function init_img(){
		if($this->type == 'jpeg'){
			$this->tem_file = imagecreatefromjpeg($this->sur_file);
		}elseif($this->type == 'jpg'){
			$this->tem_file = imagecreatefromjpeg($this->sur_file);
		}elseif($this->type == 'gif'){
            $this->tem_file = imagecreatefromgif($this->sur_file);
		}elseif($this->type == 'png'){
            $this->tem_file = imagecreatefrompng($this->sur_file);
		}elseif($this->type == 'bmp'){
            $this->tem_file = imagecreatefrombmp($this->sur_file);	
		}
	}

	//ͼƬ���ɺ���
	private function new_img(){
		$ratio = ($this->width)/($this->height);	//ԭͼ����
		$resize_ratio = ($this->resize_width)/($this->resize_height);	//���Ժ����
		$newimg = imagecreatetruecolor($this->resize_width,$this->resize_height);//������ͼƬ

		if($this->tag == 0){	//���̶��߿��ȡ����ͼ
			$newimg = imagecreatetruecolor($this->resize_width,$this->resize_height);//������ͼƬ
			if($ratio>=$resize_ratio){//���ȱ�����,����ͼ�ĸ߱�ԭͼ��,��˸߲���
				imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, $this->resize_width,$this->resize_height, (($this->height)*$resize_ratio), $this->height);
			}elseif($ratio<$resize_ratio){//���ȱ�����,����ͼ�Ŀ��ԭͼ��,��˿���
				imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, $this->resize_width,$this->resize_height, $this->width, (($this->width)/$resize_ratio));
			}
		}elseif($this->tag == 1){	//���̶���������󳤶���С
			if($this->sca_max < 1){	//��������С
				$newimg = imagecreatetruecolor((($this->width)*($this->sca_max)),(($this->height)*($this->sca_max)));//������ͼƬ
				imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, (($this->width)*($this->sca_max)), (($this->height)*($this->sca_max)), $this->width, $this->height);

			}elseif($this->sca_max > 1){	//��ĳ����󳤶���С
				if($ratio>=1){	//��ȸ߳�
					$newimg = imagecreatetruecolor($this->sca_max,($this->sca_max/$ratio));//������ͼƬ
					imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, $this->sca_max,($this->sca_max/$ratio), $this->width, $this->height);
				}else{
					$newimg = imagecreatetruecolor(($this->sca_max*$ratio),$this->sca_max);//������ͼƬ
					imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, ($this->sca_max*$ratio),$this->sca_max, $this->width, $this->height);
				}
			}
		}elseif($this->tag == -1){	//��ĳ����Ȼ�ĳ���߶���С
		  if($resize_ratio>=1){//�¸�С���¿�,��ͼƬ���¿����С
		    $newimg = imagecreatetruecolor($this->resize_width,($this->resize_width/$ratio));//������ͼƬ
			imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, $this->resize_width,($this->resize_width/$ratio), $this->width, $this->height);
		  }elseif($resize_ratio<1){//�¿�С���¸�,��ͼƬ���¸߶���С
		    $newimg = imagecreatetruecolor(($this->resize_height*$ratio),$this->resize_height);//������ͼƬ
					imagecopyresampled($newimg, $this->tem_file, 0, 0, 0, 0, ($this->resize_height*$ratio),$this->resize_height, $this->width, $this->height);
		  }
		}
		

		//�����ͼƬ
		if($this->type == 'jpeg' || $this->type == 'jpg'){
			imagejpeg($newimg,$this->des_file);
		}elseif($this->type == 'gif'){
			imagegif($newimg,$this->des_file);
		}elseif($this->type == 'png'){
			imagepng($newimg,$this->des_file);
		}elseif($this->type == 'bmp'){
			imagebmp($newimg,$this->des_file);//bmp.php�а���
		}

	}#function new_img() end

}#end class

class FileUtil {
/**
* �����ļ���
*
* @param string $aimUrl
* @return viod
*/
function createDir($aimUrl) {
$aimUrl = str_replace('', '/', $aimUrl);
$aimDir = '';
$arr = explode('/', $aimUrl);
foreach ($arr as $str) {
$aimDir .= $str . '/';
if (!file_exists($aimDir)) {
mkdir($aimDir);
}
}
}
/**
* �����ļ�
*
* @param string $aimUrl
* @param boolean $overWrite �ò��������Ƿ񸲸�ԭ�ļ�
* @return boolean
*/
function createFile($aimUrl, $overWrite = false) {
if (file_exists($aimUrl) && $overWrite == false) {
return false;
} elseif (file_exists($aimUrl) && $overWrite == true) {
FileUtil::unlinkFile($aimUrl);
}
$aimDir = dirname($aimUrl);
FileUtil::createDir($aimDir);
touch($aimUrl);
return true;
}
/**
* �ƶ��ļ���
*
* @param string $oldDir
* @param string $aimDir
* @param boolean $overWrite �ò��������Ƿ񸲸�ԭ�ļ�
* @return boolean
*/
function moveDir($oldDir, $aimDir, $overWrite = false) {
$aimDir = str_replace('', '/', $aimDir);
$aimDir = substr($aimDir, -1) == '/' ? $aimDir : $aimDir . '/';
$oldDir = str_replace('', '/', $oldDir);
$oldDir = substr($oldDir, -1) == '/' ? $oldDir : $oldDir . '/';
if (!is_dir($oldDir)) {
return false;
}
if (!file_exists($aimDir)) {
FileUtil::createDir($aimDir);
}
@$dirHandle = opendir($oldDir);
if (!$dirHandle) {
return false;
}
while(false !== ($file = readdir($dirHandle))) {
if ($file == '.' || $file == '..') {
continue;
}
if (!is_dir($oldDir.$file)) {
FileUtil::moveFile($oldDir . $file, $aimDir . $file, $overWrite);
} else {
FileUtil::moveDir($oldDir . $file, $aimDir . $file, $overWrite);
}
}
closedir($dirHandle);
return rmdir($oldDir);
}
/**
* �ƶ��ļ�
*
* @param string $fileUrl
* @param string $aimUrl
* @param boolean $overWrite �ò��������Ƿ񸲸�ԭ�ļ�
* @return boolean
*/
function moveFile($fileUrl, $aimUrl, $overWrite = false) {
if (!file_exists($fileUrl)) {
return false;
}
if (file_exists($aimUrl) && $overWrite = false) {
return false;
} elseif (file_exists($aimUrl) && $overWrite = true) {
FileUtil::unlinkFile($aimUrl);
}
$aimDir = dirname($aimUrl);
FileUtil::createDir($aimDir);
rename($fileUrl, $aimUrl);
return true;
}
/**
* ɾ���ļ���
*
* @param string $aimDir
* @return boolean
*/
function unlinkDir($aimDir) {
$aimDir = str_replace('', '/', $aimDir);
$aimDir = substr($aimDir, -1) == '/' ? $aimDir : $aimDir.'/';
if (!is_dir($aimDir)) {
return false;
}
$dirHandle = opendir($aimDir);
while(false !== ($file = readdir($dirHandle))) {
if ($file == '.' || $file == '..') {
continue;
}
if (!is_dir($aimDir.$file)) {
FileUtil::unlinkFile($aimDir . $file);
} else {
FileUtil::unlinkDir($aimDir . $file);
}
}
closedir($dirHandle);
return rmdir($aimDir);
}
/**
* ɾ���ļ�
*
* @param string $aimUrl
* @return boolean
*/
function unlinkFile($aimUrl) {
if (file_exists($aimUrl)) {
unlink($aimUrl);
return true;
} else {
return false;
}
}
/**
* �����ļ���
*
* @param string $oldDir
* @param string $aimDir
* @param boolean $overWrite �ò��������Ƿ񸲸�ԭ�ļ�
* @return boolean
*/
function copyDir($oldDir, $aimDir, $overWrite = false) {
$aimDir = str_replace('', '/', $aimDir);
$aimDir = substr($aimDir, -1) == '/' ? $aimDir : $aimDir.'/';
$oldDir = str_replace('', '/', $oldDir);
$oldDir = substr($oldDir, -1) == '/' ? $oldDir : $oldDir.'/';
if (!is_dir($oldDir)) {
return false;
}
if (!file_exists($aimDir)) {
FileUtil::createDir($aimDir);
}
$dirHandle = opendir($oldDir);
while(false !== ($file = readdir($dirHandle))) {
if ($file == '.' || $file == '..') {
continue;
}
if (!is_dir($oldDir . $file)) {
FileUtil::copyFile($oldDir . $file, $aimDir . $file, $overWrite);
} else {
FileUtil::copyDir($oldDir . $file, $aimDir . $file, $overWrite);
}
}
return closedir($dirHandle);
}
/**
* �����ļ�
*
* @param string $fileUrl
* @param string $aimUrl
* @param boolean $overWrite �ò��������Ƿ񸲸�ԭ�ļ�
* @return boolean
*/
function copyFile($fileUrl, $aimUrl, $overWrite = false) {
if (!file_exists($fileUrl)) {
return false;
}
if (file_exists($aimUrl) && $overWrite == false) {
return false;
} elseif (file_exists($aimUrl) && $overWrite == true) {
FileUtil::unlinkFile($aimUrl);
}
$aimDir = dirname($aimUrl);
FileUtil::createDir($aimDir);
copy($fileUrl, $aimUrl);
return true;
}
}

?>
