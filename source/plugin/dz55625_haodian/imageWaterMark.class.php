<?php
class WaterMark
{
 private $im_src;          // ����ͼ�ļ�
 private $im_src_width;    // ����ͼ���
 private $im_src_height;   // ����ͼ�߶�
 private $src_im;          // �ɱ���ͼ��������ͼ
 private $im_water;        // ˮӡͼ�ļ�
 private $im_water_width;  // ˮӡͼ���
 private $im_water_height; // ˮӡͼ�߶�
 private $water_im;        // ��ˮӡͼ��������ͼ
 private $font;            // �����
 private $font_text;       // �ı�
 private $font_size;       // �����С
 private $font_color;      // ������ɫ

 function setImSrc($img)
 {
  $this->im_src = $img;
  //��ȡ����ͼƬ�ļ�
  $srcInfo = @getimagesize($this->im_src);
  $this->im_src_width = $srcInfo[0];
  $this->im_src_height = $srcInfo[1];
  //ȡ�ñ���ͼƬ
  $this->src_im = $this->getType($this->im_src, $srcInfo[2]);
 }
 
 function setImWater($img)
 {
  $this->im_water = $img;
  //��ȡˮӡͼƬ�ļ�
  $waterInfo = @getimagesize($this->im_water);
  $this->im_water_width = $waterInfo[0];
  $this->im_water_height = $waterInfo[1];
  //ȡ��ˮӡͼƬ
  $this->water_im = $this->getType($this->im_water, $waterInfo[2]);
 }
 
 function setFont($font, $text, $size, $color)
 {
  $this->font = $font;
  $this->font_text = $text;
  $this->font_size = $size;
  //ˮӡ������ɫ��'255,255,255'��
  $this->font_color = $color;
 }
 
 /**
  * �����ļ���URL����һ����ͼ��
  * @param $img
  * @param $type
  * @return resource
  */
 function getType($img, $type)
 {
  switch($type){
   case 1:
    $im = imagecreatefromgif($img);
    break;
   case 2:
    $im = imagecreatefromjpeg($img);
    break;
   case 3:
    $im = imagecreatefrompng($img);
    break;
   default:break;
  }
  return $im;
 }
 
 /**
  * ����λ�ü�ˮӡ��ߣ���ȡ��ӡ��x/y����
  * @param $pos
  * @param $w
  * @param $h
  */
 function getPos($pos, $w, $h)
 {
  switch($pos){
   case 0://���
    $posX = rand(0, ($this->im_src_width - $w));
    $posY = rand(0, ($this->im_src_height - $h));
    break;
   case 1://1Ϊ���˾���
    $posX = 0;
    $posY = 0;
    break;
   case 2://2Ϊ���˾���
    $posX = ceil($this->im_src_width - $w) / 2;
    $posY = 0;
    break;
   case 3://3Ϊ���˾���
    $posX = $this->im_src_width - $w;
    $posY = 0;
    break;
   case 4://4Ϊ�в�����
    $posX = 0;
    $posY = ceil($this->im_src_height - $h) / 2;
    break;
   case 5://5Ϊ�в�����
    $posX = ceil($this->im_src_width - $w) / 2;
    $posY = ceil($this->im_src_height - $h) / 2;
    break;
   case 6://6Ϊ�в�����
    $posX = $this->im_src_width - $w;
    $posY = ceil($this->im_src_height - $h) / 2;
    break;
   case 7://7Ϊ�׶˾���
    $posX = 0;
    $posY = $this->im_src_height - $h;
    break;
   case 8://8Ϊ�׶˾���
    $posX = ceil($this->im_src_width - $w) / 2;
    $posY = $this->im_src_height - $h;
    break;
   case 9://9Ϊ�׶˾���
    $posX = $this->im_src_width - $w;
    $posY = $this->im_src_height - $h;
    break;
   default://���
    $posX = rand(0,($this->im_src_width - $w));
    $posY = rand(0,($this->im_src_height - $h));
    break;
  }
  return array($posX, $posY);
 }
 
 /**
  * У��ߴ�
  * @param $w
  * @param $h
  * @return boolean
  */
 function check_range($w, $h)
 {
  if( ($this->im_src_width < $w) || ($this->im_src_height < $h) ){
   return false;
  }
  return true;
 }
 
 /**
  * ��ˮӡ����
  * @param $is_image   ��1��0ˮӡͼƬ
  * @param $image_pos  ˮӡͼƬλ�ã�0~9��
  * @param $is_text    ��1��0ˮӡ����
  * @param $text_pos   ˮӡ����λ�ã�0~9��
  */
 function mark($is_image=0, $image_pos=0, $is_text=0, $text_pos=0)
 {
  // ˮӡͼƬ���
  if ($is_image)
  {
   $label = 'ͼƬ��';
   if (!$this->check_range($this->im_water_width, $this->im_water_height))
   {
    echo "��Ҫ��ˮӡ��ͼƬ�ĳ��Ȼ��ȱ�ˮӡ".$label."��С���޷�����ˮӡ��";
    return;
   }
   $posArr = $this->getPos($image_pos, $this->im_water_width, $this->im_water_height);
   $posX = $posArr[0];
   $posY = $posArr[1];
   // ����ˮӡ��Ŀ���ļ�
   imagecopy($this->src_im, $this->water_im, $posX, $posY, 0, 0, $this->im_water_width, $this->im_water_height);
  }
  // ˮӡ�������
  if ($is_text)
  {
   $label = '��������';
   //ȡ�ô�������ı��ķ�Χ
   $temp = imagettfbbox($this->font_size, 0, $this->font, $this->font_text);
   $w = $temp[2] - $temp[0];
   $h = $temp[1] - $temp[7];
   unset($temp);
   // У��
   if (!$this->check_range($w, $h))
   {
    echo "��Ҫ��ˮӡ��ͼƬ�ĳ��Ȼ��ȱ�ˮӡ".$label."��С���޷�����ˮӡ��";
    return;
   }
   $posArr = $this->getPos($text_pos, $w, $h);
   $posX = $posArr[0];
   $posY = $posArr[1];
   // ��ӡ�ı�
   $red = imagecolorallocate($this->src_im, 255, 0, 0);
   imagettftext($this->src_im, $this->font_size, 0, $posX, $posY, $this->font_color, $this->font, $this->font_text);
  }
  // ���
  $this->show();
  // ����
  $this->clean();
 }
 
 /**
  * ���ͼ��
  */
 function show()
 {
  ob_clean();
 // header("Content-type: image/png; charset=UTF-8");
  imagepng($this->src_im,$this->im_src);
 }
 
 /**
  * ����
  */
 function clean()
 {
  imagedestroy($this->water_im);
  imagedestroy($this->src_im);
 }
 
}

 


?>

