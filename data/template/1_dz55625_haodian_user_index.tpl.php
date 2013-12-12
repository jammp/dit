<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('user_index');
0
|| checktplrefresh('./source/plugin/dz55625_haodian/template/user_index.htm', './template/default/common/seditor.htm', 1386851514, 'dz55625_haodian', './data/template/1_dz55625_haodian_user_index.tpl.php', './source/plugin/dz55625_haodian/template', 'user_index')
;?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="source/plugin/dz55625_haodian/images/body.css" />
<style type="text/css">
.txtstyle { height:200px; width:100%; border:none}
</style>

<style type="text/css">
.appl{ padding-bottom:0px; margin-bottom:0px}
.ct2_a{ margin-bottom:10px; padding-bottom:0px;}
.bm ul p.bmh2{ background:#414141; width:810px; height:158px; margin:0 auto}
.bmfuwun{ font-size:14px; width:100%; margin:0px auto}
.mn table{ width:100%;}
.mn table tr.header{ width:100%; height:30px; background:#F6F6F6}
.mn table tr th{ font-weight:bold;}
</style>

<?php if($_G['uid']) { ?>

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>haodian.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian<?php } ?>"><?php echo $dhname;?></a><em>&raquo;</em><?php echo $tmp_lang['listguanli'];?>
</div>
</div>

<div class="ct2_a wp cl" id="ct">

<div class="mn uaddkk">
<div class="bm bw0">


<?php if($p == 'index') { ?>

<style type="text/css">
.mn table tr a{ float:left; padding:0 5px 0 0; background:none; margin:0; border:none; color:#2873C2}
.mn table tr.hover{ border-bottom:1px #e3e3e3 dashed; height:32px; line-height:32px;}
</style>
      
<div class="user_pcadd"><a href="plugin.php?id=dz55625_haodian:haodian&amp;mod=add" class="xi3"><?php echo $tmp_lang['dengjinew'];?></a></div>

<div class="user_list">       
            <table width="100%">
                <tr class="header">
                    <th>&nbsp;&nbsp;<?php echo $tmp_lang['listmc'];?></th><th><?php echo $tmp_lang['hometim'];?></th><th><?php echo $tmp_lang['listzhuangt'];?></th><th><?php echo $tmp_lang['adminczuo'];?></th>
                </tr>
                
            <?php if(is_array($manylist)) foreach($manylist as $key => $o) { ?>             <tr class="hover">
                    <td><a href="plugin.php?id=dz55625_haodian:haodian&amp;mod=view&amp;sid=<?php echo $o['id'];?>" target="_blank" <?php if($o['click']==1) { ?>style="color:red"<?php } ?>><?php echo $o['title'];?><?php if($o['click']==1) { ?><font color="#FF0000">[VIP]</font><?php } ?></a></td>
                    <td><?php echo date('y-m-d',$o['dateline']); ?></td>
                    <td>
                        <?php if(empty($o['display'])) { ?>
                        <span style="color:#F00"><?php echo $tmp_lang['adminshenhe'];?></span>
                        <?php } else { ?>
                        <span style="color:#090"><?php echo $tmp_lang['adminshenhek'];?></span>
                        <?php } ?>
                    </td>
                 <td><a href="<?php echo $appurls;?>&amp;p=edit&amp;sid=<?php echo $o['id'];?>"><?php echo $tmp_lang['adminbianji'];?></a> <a href="<?php echo $appurls;?>&amp;p=del&amp;sid=<?php echo $o['id'];?>" onclick="return confirm('<?php echo $tmp_lang['adminshanchutx'];?>')"><?php echo $tmp_lang['adminshanchu'];?></a></td>
                    
                </tr>

               
            <?php } ?>
            </table>
</div>            
<div style=" width:100%; height:auto; float:left;"><?php echo $multir;?></div>

<?php } elseif($p == 'edit') { if($stMap==1) { ?>
    <?php if($mapStart==1) { ?>
    <script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript"></script>
    <script src="source/plugin/dz55625_haodian/images/convertor.js" type="text/javascript"></script>
    <?php } else { ?>
    <script src="http://maps.google.cn/maps/api/js?sensor=false&language=zh-cn" type="text/javascript" type="text/javascript"></script>
    <?php } } ?>

<script src="source/plugin/dz55625_haodian/images/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="source/plugin/dz55625_haodian/images/swfobject.js" type="text/javascript"></script>
<script src="source/plugin/dz55625_haodian/images/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
var jq = jQuery.noConflict();
jq(document).ready(function() {
jq("#fileInput2").uploadify({
'uploader': 'source/plugin/dz55625_haodian/images/uploadify.swf',
'cancelImg': 'source/plugin/dz55625_haodian/images/cancel.png',
'script': 'plugin.php?id=dz55625_haodian:haodian_up',
'folder': 'source/plugin/dz55625_haodian/upimg/',
'multi': true,
'displayData': 'speed',
'fileDesc': 'Image(*.jpg;*.gif;*.png;*.JPG;*.GIF;*.PNG)',
'fileExt': '*.jpg;*.jpeg;*.gif;*.png;*.JPG;*.GIF;*.PNG',
'sizeLimit': 1024000,
'queueSizeLimit' :5, 
'buttonImg': 'source/plugin/dz55625_haodian/images/browseBtn.png',
'width': 88,
'height': 29,
'rollover': true,
onComplete: function (evt, queueID, fileObj, response, data) {
getResult(response);
},
onAllComplete: function(evt, data){
//alert("dfdfd");
document.getElementById("picinfo_s").innerHTML="";
//jq("#picinfo_s").val("");
var s="";
var img_inputs=document.getElementsByName("filelist[]");

//alert(img_inputs.length);
for(var i=0;i<img_inputs.length;i++){

s+="<div class=\"picinfo\">"+
"<div class=\"picdivsize\"><dt><span><b><?php echo $tmp_lang['jchanru'];?></b></span></dt><a href=\"javascript:content_add('<?php echo $_G['siteurl'];?>"+img_inputs[i].value+"')\"><img src=\""+img_inputs[i].value+"\" border=\"0\" /></a></div>"+
"<div class=\"text\"><a href=\"javascript:delpic('"+img_inputs[i].value+"')\"><?php echo $tmp_lang['jshancu'];?></a></div>"+
"</div>";

}

document.getElementById("picinfo_s").innerHTML=s;
}
});

});
</script>
<script type="text/javascript">
function getResult(content){
var board = document.getElementById("divTxt");
var boarda = document.getElementById("divTxts");
//board.style.display="";
boarda.style.display="";
var newInput = document.createElement("input");
newInput.type = "hidden"; 
newInput.size = "45"; 
newInput.name="filelist[]";
newInput.id="filelist[]";
var obj = board.appendChild(newInput);
var br= document.createElement("br"); 
board.appendChild(br);
obj.value=content;
}
function delpic(imgsrc){
document.getElementById("picinfo_s").innerHTML="";
var board = document.getElementById("divTxt");
var s="";
var img_inputs=document.getElementsByName("filelist[]");

var obj=null;
for(var i=0;i<img_inputs.length;i++){
if(img_inputs[i].value==imgsrc){
obj=img_inputs[i]

}else{
s+="<div class=\"picinfo\">"+
"<div class=\"picdivsize\"><dt><span><b><?php echo $tmp_lang['jchanru'];?></b></span></dt><a href=\"javascript:content_add('<?php echo $_G['siteurl'];?>"+img_inputs[i].value+"')\"><img src=\""+img_inputs[i].value+"\" border=\"0\" /></a></div>"+
"<div class=\"text\"><a href=\"javascript:delpic('"+img_inputs[i].value+"')\"><?php echo $tmp_lang['jshancu'];?></a></div>"+
"</div>";
}
}
if(obj!=null)
board.removeChild(obj);
document.getElementById("picinfo_s").innerHTML=s;
ajaxget('plugin.php?id=dz55625_haodian:delpic&action=deledit&picsrc='+imgsrc, 'delpic_s');

}
function content_add(imgsrc){
//SWalert(imgsrc);
jq("#replyamessage").val(jq("#replyamessage").val()+"[img]"+imgsrc+"[/img]");

}

</script>
<style type="text/css">
.h2Bt{ width:60px; font-weight:bold; text-align:center}
.listx td{ height:30px}
</style>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input name="pic" type="hidden" id="pic" value="<?php echo $active['pic'];?>" size="80"  />
        <input type="hidden" name="lng" id="mapxy" value="<?php echo $active['lng'];?>" />
<input type="hidden" name="jib" id="mapzoom" value="<?php echo $active['jib'];?>" />
  <table class="tb2 listx" border="1">
    
    
    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addfenlei'];?></td>
      <td>
                <select name="acid" id="acid" />
                <?php if(is_array($listclass)) foreach($listclass as $k => $v) { ?>                <option value="<?php echo $k;?>" <?php if($k==$active['cid']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
                <?php } ?>
                </select>
             
             <select class="ps" name="local_1" onchange="ajaxget('plugin.php?id=dz55625_haodian:attclass&action=getlocal&lid='+this.value, 'local_2')" />
                <?php if($local) { ?>
                <?php if(is_array($local)) foreach($local as $lid => $localname) { ?>                <option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
                <?php } ?>
                <?php } ?>
            </select>
            <span id="local_2" name="local_2"><?php echo $localshow;?></span>
        
              <span><?php echo $tmp_lang['addsfenlei'];?></span></td>
             
    </tr>
    
                            <tr>
              <td class="h2Bt"><?php echo $tmp_lang['yytimes'];?></td>
             
              <td>&nbsp;<?php echo $tmp_lang['ztimes'];?>&nbsp;<input name="yy_ztime" type="text" id="yy_ztime" size="10" value="<?php echo $active['yy_ztime'];?>" />&nbsp;&nbsp;<?php echo $tmp_lang['wtimes'];?>&nbsp;&nbsp;<input name="yy_wtime" type="text" id="yy_wtime" size="10" value="<?php echo $active['yy_wtime'];?>" />
              <span><?php echo $tmp_lang['yysuom'];?></span></td>
        </tr>
        
    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addmingc'];?></td>
      <td><input name="title" type="text" id="title" value="<?php echo $active['title'];?>" size="40" /><?php if($kastart == 1) { ?>&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['yikatong'];?><?php echo $kaname;?><input name="lat" type="radio" value="0" <?php if($active['lat'] != 1) { ?>checked<?php } ?> /><?php echo $tmp_lang['yikatongno'];?>&nbsp;<input name="lat" type="radio" value="1" <?php if($active['lat'] == 1) { ?>checked<?php } ?> /><?php echo $tmp_lang['yikatongyes'];?>&nbsp;&nbsp;[ <a href="<?php echo $kalinks;?>" target="_blank" style="color:#F00"><?php echo $kaname;?><?php echo $tmp_lang['katongabout'];?></a> ]<?php } else { ?><span>&nbsp;<?php echo $tmp_lang['addtxa'];?></span><?php } ?></td>
    </tr>
    
    
        <?php if($zkstart == 1 && $active['click'] == 1) { ?>
        
              <tr>
      <td class="h2Bt"><?php echo $tmp_lang['Suser'];?></td>
      <td><input name="sad" type="text" id="sad" value="<?php echo $active['sad'];?>" size="5" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['Susersms'];?></span></td>
    </tr>
    
      <tr>
      <td class="h2Bt"><?php echo $tmp_lang['userzhekoub'];?></td>
      <td><input name="zkoubj" type="text" id="zkoubj" value="<?php echo $active['zkoubj'];?>" size="120" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['zhekousa'];?></span></td>
    </tr>
    
    <?php } elseif($zkstart == 2) { ?>
    
              <tr>
      <td class="h2Bt"><?php echo $tmp_lang['Suser'];?></td>
      <td><input name="sad" type="text" id="sad" value="<?php echo $active['sad'];?>" size="5" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['Susersms'];?></span></td>
    </tr>
    
          <tr>
      <td class="h2Bt"><?php echo $tmp_lang['userzhekoub'];?></td>
      <td><input name="zkoubj" type="text" id="zkoubj" value="<?php echo $active['zkoubj'];?>" size="120" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['zhekousa'];?></span></td>
    </tr>
    
    <?php } ?>
    
     <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addpic'];?></td>
      <td><img src="<?php echo $active['pic'];?>" width="100" height="70" /><br /><input type="file" name="file" id="pic" size="40" style="margin-top:5px;" /><span style="padding-left:5px; color:#999"><?php echo $tmp_lang['addtxb'];?><?php echo round($picdx/1000); ?>K</span></td>
    </tr>
    
   <tr>
              <td class="h2Bt"><?php echo $tmp_lang['adddizhi'];?></td>
              <td>
               <input type="text" name="address" id="daddress" value="<?php echo $active['address'];?>" size="60"> <?php if($stMap==1) { ?>&nbsp;&nbsp;<input type="text" id="address_txt" class="px" /> <button type="button" class="pn" onclick="google_getAddress($('address_txt').value);"><span><?php echo $tmp_lang['sousuocity'];?></span></button>
              <a href="javascript:;" style="color:red;" onclick="dhiddmap(this);"><?php echo $tmp_lang['mapdiscuz'];?></a><?php } ?></td>
        </tr>

         
                <?php if($stMap==1) { ?>
        <tr id="displaynone" style="overflow: hidden;width:100%;">
        	<td class="h2Bt"><?php echo $tmp_lang['mapbiaozhu'];?></td>
            <td><?php if($mapStart==1) { ?><style type="text/css">#container{width:99%; margin:5px auto; height: 250px; }</style><div id="container"></div><?php } else { ?><style type="text/css">#mapCanvas {width:99%; margin:5px auto; height: 250px;}</style><div id="mapCanvas"><?php echo $tmp_lang['maplading'];?></div><?php } ?></td>
        </tr>
       <?php } ?>
       
    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['adddianhua'];?></td>
      <td><label>
        <input name="tel" type="text" value="<?php echo $active['tel'];?>" size="50" />
      </label></td>
    </tr>
    
    
      <tr>
      <td class="h2Bt"><?php echo $tmp_lang['listtese'];?></td>
      <td><label>
        <input name="tese" type="text" value="<?php echo $active['tese'];?>" size="50" />
      </label></td>
    </tr>
    
        <tr>
      <td class="h2Bt"><?php echo $tmp_lang['webdianpu'];?></td>
      <td><label>
        <input name="taobao" type="text" value="<?php echo $active['taobao'];?>" size="50" />
      </label></td>
    </tr>
    
        <tr>
      <td class="h2Bt"><?php echo $tmp_lang['lianxiqq'];?></td>
      <td><label>
        <input name="tenqq" type="text" value="<?php echo $active['tenqq'];?>" size="50" />
      </label></td>
    </tr>
    
<style type="text/css">
.tb a{ padding:0;border:0}
</style>
     <tr>
              <td class="h2Bt"><?php echo $tmp_lang['addjieshao'];?></td>
              <td>
                <div class="tedt">
                    <div class="bar">
                    <?php $seditor = array('replya', array('bold', 'color', 'link'));?>                    <script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="鏂囧瓧鍔犵矖" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="璁剧疆鏂囧瓧棰滆壊" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="鍥剧墖" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="娣诲姞閾炬帴" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="寮曠敤" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="浠ｇ爜" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@鏈嬪弸" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@鏈嬪弸</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div> 
                    </div>
                    <div class="area">
                        <textarea rows="1" cols="30" name="summary" id="replyamessage" class="txtstyle" /><?php echo $active['summary'];?></textarea>
                    </div>
                </div>
              
              </td>
        </tr>
                <tr>
            <td class="tb2x"><?php echo $tmp_lang['duotuzshi'];?></td>
            <td style="padding-top:5px">
             <div class="picinfos cl" id="picinfo_s">
             <?php if(is_array($psers)) foreach($psers as $cuesr) { ?>                <div class="picinfo">
              		<div class="picdivsize"><dt><span><b><?php echo $tmp_lang['jchanru'];?></b></span></dt><a href="javascript:content_add('<?php echo $_G['siteurl'];?><?php echo $cuesr['img'];?>')"><img src="<?php echo $cuesr['img'];?>" border="0" width="90" height="90" /></div>
                    <div class="text"><a href="javascript:delpic('<?php echo $cuesr['img'];?>')"><?php echo $tmp_lang['jshancu'];?></a></div>
                </div>
              <?php } ?>
            </div>
            
            &nbsp;<input id="fileInput2" name="fileInput2" type="file" class="z" /><div class="fileInput5"><div id="divTxts" style="display:none"><?php echo $tmp_lang['yishangc'];?></div><input type="button" value="<?php echo $tmp_lang['qingchup'];?>" onClick="javascript:jq('#fileInput2').uploadifyClearQueue();" id="fileInput3" ><input type="button" value="<?php echo $tmp_lang['qxiansc'];?>" onClick="javascript:jq('#fileInput2').uploadifyUpload();" id="fileInput4" ></div>
            
        
            
            </td>
        </tr>

    
    <?php if($active['click']==1||$puseo==1) { ?>
                   
                    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['guanjianc'];?></td>
      <td><label>
        <input name="keywords" type="text" value="<?php echo $active['keywords'];?>" size="65" />
      </label><span style="color:#999"><?php echo $tmp_lang['guanjianms'];?></span></td>
    </tr>
    
                        <tr>
      <td class="h2Bt"><?php echo $tmp_lang['miaoshudp'];?></td>
      <td><label>
        <input name="description" type="text" value="<?php echo $active['description'];?>" size="65" />
      </label><span style="color:#999"><?php echo $tmp_lang['miaoshums'];?></span></td>
    </tr>
    
    <?php } ?>

    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="<?php echo $tmp_lang['listtjj'];?>" class="btn" />
      </label></td>
    </tr>
    
  </table>
   <div id="divTxt" style="display:none" >
            <?php if(is_array($psers)) foreach($psers as $cuesr) { ?>            <input type="hidden" value="<?php echo $cuesr['img'];?>" name="filelist[]" size="45" /><br />
            <?php } ?>
            </div>
</form>

<?php if($stMap==1) { ?> 
    <?php if($mapStart==1) { ?>
<script type="text/javascript">
var map = new BMap.Map("container");

var lng="<?php echo $active['lng'];?>";
var os=null;
var point=null;
<?php if(!empty($active['lng']) ) { ?>
os=lng.split(",");
if(<?php echo $active['map_type'];?>==1){
point=new BMap.Point(os[0],os[1]);
}else{
point=new BMap.Point(os[1],os[0]);
}
<?php } else { ?>
point=new BMap.Point(<?php echo $zuobiao;?>);
<?php } ?>

// 初始化地图，设置中心点坐标和地图级别
var marker=null;
<?php if(!empty($active['lng'])) { if($active['map_type']==1) { ?>
marker = new BMap.Marker(point);
marker_s(point);
<?php } else { ?>
 BMap.Convertor.translate(point,2,function(point1){
 marker = new BMap.Marker(point1);
 marker_s(point1);		  
});
<?php } } ?>
 function marker_s(point2){
  map.addOverlay(marker); 
  marker.enableDragging();  
 <?php if(!empty($active['jib'])) { ?>
map.centerAndZoom(point2, <?php echo $active['jib'];?>); 
<?php } else { ?>
map.centerAndZoom(point2, <?php echo $jibie;?>); 
<?php } ?>
                   

marker.addEventListener("dragend", function(e){  
window.setTimeout(function(){    
map.panTo(new BMap.Point(e.point.lng, e.point.lat));   
}, 1000);
//-----------------------------------
  $('mapxy').value = e.point.lng + ", " + e.point.lat;
}) 
 }
var contextMenu = new BMap.ContextMenu();
//var marker=null;
var txtMenuItem = [
  {
   text:'<?php echo $tmp_lang['map_f_a'];?>',
   callback:function(){map.zoomIn()}
  },
  {
   text:'<?php echo $tmp_lang['map_f_b'];?>',
   callback:function(){map.zoomOut()}
  },
  {
   text:'<?php echo $tmp_lang['map_f_c'];?>',
   callback:function(){map.setZoom(18)}
  },
  {
   text:'<?php echo $tmp_lang['map_f_d'];?>',
   callback:function(p){
   if(marker==null){
marker = new BMap.Marker(p);
   }else{
   map.removeOverlay(marker);
    $('mapxy').value = "";
$('mapzoom').value = "";
marker=null;
marker = new BMap.Marker(p);
   }
   $('mapxy').value = p.lng + ", " + p.lat;
   $('mapzoom').value = map.getZoom();
var px = map.pointToPixel(p);
map.addOverlay(marker);
marker.enableDragging();
//---------------------------------
marker.addEventListener("dragend", function(e){  
window.setTimeout(function(){    
map.panTo(new BMap.Point(e.point.lng, e.point.lat));   
}, 1000);
  $('mapxy').value = e.point.lng + ", " + e.point.lat;
})  

   }
  }
 ];
 for(var i=0; i < txtMenuItem.length; i++){
  contextMenu.addItem(new BMap.MenuItem(txtMenuItem[i].text,txtMenuItem[i].callback,100));
  if(i==1 || i==3) {
   contextMenu.addSeparator();
  }
 }
map.addContextMenu(contextMenu);
 //----------------------------------

map.addEventListener("zoomend", function(){  
   $('mapzoom').value = this.getZoom();
});  
var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL}  
map.addControl(new BMap.NavigationControl(opts));  
map.addControl(new BMap.MapTypeControl());  
map.enableScrollWheelZoom();                        
function dhiddmap(obj){
var obj=obj;
if ($('displaynone').style.display=='none'){
$('displaynone').style.display='';
obj.innerHTML='<?php echo $tmp_lang['mapdiscuz'];?>';
} else {
$('displaynone').style.display='none';
obj.innerHTML='<?php echo $tmp_lang['mapbiaozhu'];?>';
}
}
function google_getAddress(cityname){
map.centerAndZoom(cityname, <?php echo $jibie;?>);
}
        </script>
    <?php } else { ?>
<script type="text/javascript"> 
var google_latlng= new google.maps.LatLng(<?php echo $active['lng'];?>);
var google_map;
var google_marker;
var google_geocoder;
function google_initialize() {
var myOptions = {
zoom: <?php echo $active['jib'];?>,
center: google_latlng,
mapTypeControl: false,	 mapTypeId: google.maps.MapTypeId.ROADMAP	};
google_map = new google.maps.Map($("mapCanvas"), myOptions);
google_marker = new google.maps.Marker({
    position: google_latlng,
    title: '',
    map: google_map,
    draggable: true
  }); 
google_geocoder = new google.maps.Geocoder();
google_setZoom(google_map.getZoom());
google_setPosition(google_marker.getPosition());
google_setAddress(google_marker.getPosition()); 
google.maps.event.addListener(google_map, 'zoom_changed', function() {
  google_setZoom(google_map.getZoom());
  });
  
  google.maps.event.addListener(google_marker, 'drag', function() {
google_setPosition(google_marker.getPosition());
  });
  google.maps.event.addListener(google_marker, 'dragend', function() {
   google_setAddress(google_marker.getPosition());
  }); 
 
}
function google_getAddress(address) {
 
google_geocoder.geocode( {"address": address}, function(results, status) {
 
if (status == google.maps.GeocoderStatus.OK) {
 
google_map.setCenter(results[0].geometry.location);  
 
google_marker.setPosition(results[0].geometry.location);
google_setZoom(google_map.getZoom());
   google_setAddress(results[0].geometry.location);
 
google_setPosition(results[0].geometry.location);
 
   google.maps.event.addListener(google_map, 'zoom_changed', function() {
  google_setZoom(google_map.getZoom());
  });
  
  google.maps.event.addListener(google_marker, 'drag', function() {
google_setPosition(google_marker.getPosition());
  });
  google.maps.event.addListener(google_marker, 'dragend', function() {
   google_setAddress(google_marker.getPosition());
  });
 } else {
 
alert('<?php echo $tmp_lang['searchcity'];?>');     
 }
 
});
 
}
function google_setAddress(pos){   
  google_geocoder.geocode({
    latLng: pos
  }, function(responses) {

  });
}
function google_setPosition(latlng){    
  newxy = [
    latlng.lat(),
    latlng.lng()
  ].join(', ');
  $('mapxy').value = newxy;
}
function google_setZoom(zoom){    
  $('mapzoom').value = zoom;
}
 
google.maps.event.addDomListener(window, 'load', google_initialize);
 
function dhiddmap(obj){
var obj=obj;
if ($('displaynone').style.display=='none'){
$('displaynone').style.display='';
obj.innerHTML='<?php echo $tmp_lang['mapdiscuz'];?>';
} else {
$('displaynone').style.display='none';
obj.innerHTML='<?php echo $tmp_lang['mapbiaozhu'];?>';
}
}
</script>
<?php } } } elseif($p == 'listpic') { include template('dz55625_haodian:haodian_ablums_manager'); } elseif($p == 'youhui') { if($uservip>=1) { ?>
<div class="user_yhadd"><a href="javascript:;" onclick="showWindow('yh', 'plugin.php?id=dz55625_haodian:haodian_yh', 'get', 0)" class="xi3"><?php echo $tmp_lang['youhuisadd'];?></a></div>
    <div class="user_yh">
        <ul>
            <?php if(is_array($manyhs)) foreach($manyhs as $k => $v) { ?>                <li><span>[<?php echo gmdate('m-d', $v['dateline'] + $_G['setting']['timeoffset'] * 3600); ?>]</span><strong><?php echo cutstr($v['title'], 80, '...'); ?></strong><em><a href="plugin.php?id=dz55625_haodian:haodian_yh&amp;action=yh&amp;youhui=edit&amp;pid=<?php echo $v['id'];?>" onclick="showWindow('yhedit', this.href); return false;"><?php echo $tmp_lang['adminbianji'];?></a> <a onclick="showDialog('<?php echo $tmp_lang['adminshanchutx'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_haodian:haodian_yh&youhui=del&pid=<?php echo $v['id'];?>'; return false; })"><?php echo $tmp_lang['adminshanchu'];?></a></em></li>
            <?php } ?> 
        </ul>
    </div>
    <?php } else { ?>
    	    	<div class="tipGou" style="width:99%; background-position:170px 15px">
        </ol>
        <?php echo $tmp_lang['vipciky'];?> <a href="<?php echo $viplinks;?>" target="_blank" style="color:#F00">>><?php echo $tmp_lang['liaojievip'];?></a>
        </ol>
        </div>
    <?php } ?>
 

<?php } elseif($p == 'adone') { if($uservip>=1) { if($hadConfig['start'] != '1') { ?>

<div class="tipGou" style="width:99%;">
<ol>
    	<?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
    </ol>
</div>

<?php } else { ?>

<div class="user_yhadd"><a href="javascript:;" onclick="showWindow('hadds', 'plugin.php?id=dz55625_hadone:hadone&action=hadd', 'get', 0)" class="xi3"><?php echo $tmp_lang['picsadds'];?></a></div>
<div class="user_yh">
    <ul> 
         <?php if(is_array($huandes)) foreach($huandes as $huande) { ?>            <li><span style="color:#000"><?php echo $huande['name'];?></span><em><a href="plugin.php?id=dz55625_hadone:hadone&amp;action=edit&amp;aid=<?php echo $huande['id'];?>" onclick="showWindow('adedit', this.href); return false;"><?php echo $tmp_lang['adminbianji'];?></a> <a onclick="showDialog('<?php echo $tmp_lang['adminshanchutx'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_hadone:hadone&action=del&aid=<?php echo $huande['id'];?>'; return false; })" style="cursor:pointer"><?php echo $tmp_lang['adminshanchu'];?></a></em></li>
         <?php } ?>  
    </ul>
</div>   
<?php } ?>
    <?php } else { ?>
    	<div class="tipGou" style="width:99%; background-position:170px 15px">
        </ol>
        <?php echo $tmp_lang['vipciky'];?> <a href="<?php echo $viplinks;?>" target="_blank" style="color:#F00">>><?php echo $tmp_lang['liaojievip'];?></a>
        </ol>
        </div>
    <?php } ?>
    
<?php } elseif($p == 'shops') { if($ShopFw=='1') { ?> 

    <?php if($SpdConfig['start'] != '1') { ?>
    <div class="tipGou" style="width:99%;">
        <ol>
            <?php echo $tmp_lang['shopcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
        </ol>
    </div>
    <?php } else { ?>
    <div class="user_yhadd"><a href="javascript:;" onclick="showWindow('hadd', 'plugin.php?id=dz55625_hshop:shop&action=spadd', 'get', 0)" class="xi3"><?php echo $tmp_lang['shangaddcp'];?></a></div>
    <div class="user_yh cl">
        <ul> 
             <?php if(is_array($Spings)) foreach($Spings as $Sping) { ?>                <li><span><a href="plugin.php?id=dz55625_haodian:haodian&amp;mod=view&amp;p=shop&amp;sp=<?php echo $Sping['id'];?>&amp;sid=<?php echo $Sping['sid'];?>" target="_blank"><?php echo $Sping['title'];?></a></span><em><a href="plugin.php?id=dz55625_hshop:shop&amp;action=edit&amp;gid=<?php echo $Sping['id'];?>" onclick="showWindow('shopedit', this.href); return false;"><?php echo $tmp_lang['adminbianji'];?></a> <a onclick="showDialog('<?php echo $tmp_lang['adminshanchutx'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_hshop:shop&action=del&gid=<?php echo $Sping['id'];?>'; return false; })" style="cursor:pointer"><?php echo $tmp_lang['adminshanchu'];?></a></em></li>
             <?php } ?>  
        </ul>
        <ol style="margin-top:10px" class="cl"><?php echo $Spmulti;?></ol>
    </div> 
    <?php } } elseif($ShopFw=='2') { if($uservip>=1) { ?>
    <?php if($SpdConfig['start'] != '1') { ?>
    <div class="tipGou" style="width:99%;">
        <ol>
            <?php echo $tmp_lang['shopcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
        </ol>
    </div>
    <?php } else { ?>
    <div class="user_yhadd"><a href="javascript:;" onclick="showWindow('hadd', 'plugin.php?id=dz55625_hshop:shop&action=spadd', 'get', 0)" class="xi3"><?php echo $tmp_lang['shangaddcp'];?></a></div>
    <div class="user_yh cl">
        <ul> 
             <?php if(is_array($Spings)) foreach($Spings as $Sping) { ?>                <li><span><a href="plugin.php?id=dz55625_haodian:haodian&amp;mod=view&amp;p=shop&amp;sp=<?php echo $Sping['id'];?>&amp;sid=<?php echo $Sping['sid'];?>" target="_blank"><?php echo $Sping['title'];?></a></span><em><a href="plugin.php?id=dz55625_hshop:shop&amp;action=edit&amp;gid=<?php echo $Sping['id'];?>" onclick="showWindow('shopedit', this.href); return false;"><?php echo $tmp_lang['adminbianji'];?></a> <a onclick="showDialog('<?php echo $tmp_lang['adminshanchutx'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_hshop:shop&action=del&gid=<?php echo $Sping['id'];?>'; return false; })" style="cursor:pointer"><?php echo $tmp_lang['adminshanchu'];?></a></em></li>
             <?php } ?>  
        </ul>
        <ol style="margin-top:10px" class="cl"><?php echo $Spmulti;?></ol>
    </div> 
    <?php } } else { ?>
    <div class="tipGou" style="width:99%; background-position:170px 15px">
        </ol>
        	<?php echo $tmp_lang['vipciky'];?> <a href="<?php echo $viplinks;?>" target="_blank" style="color:#F00">>><?php echo $tmp_lang['liaojievip'];?></a>
        </ol>
    </div>
<?php } ?>
 
<?php } ?> 



    
<?php } elseif($p == 'yyue') { if($YueConfig['start'] != '1') { ?>

<div class="tipGou" style="width:99%;">
<ol>
    	<?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
    </ol>
</div>

<?php } else { ?>
<div class="user_yh cl">
    <ul> 
         <?php if(is_array($Ypings)) foreach($Ypings as $Yping) { ?>            <li><span style="color:#000"><?php echo $Yping['titles'];?></span><em><a href="plugin.php?id=dz55625_yuyue:yuyue&amp;action=edit&amp;yid=<?php echo $Yping['id'];?>" onclick="showWindow('shopedit', this.href); return false;"><?php echo $tmp_lang['ychakan'];?></a> <a onclick="showDialog('<?php echo $tmp_lang['adminshanchutx'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_yuyue:yuyue&action=del&yid=<?php echo $Yping['id'];?>'; return false; })" style="cursor:pointer"><?php echo $tmp_lang['adminshanchu'];?></a></em></li>
         <?php } ?>  
    </ul>
    
    <ol style="margin-top:10px" class="cl"><?php echo $Ypmulti;?></ol>
</div> 
<?php } } elseif($p == 'domain') { if($domainfw=='1') { if($domainConfig['fdymsz'] != '1') { ?>

<div class="tipGou" style="width:99%;">
<ol>
    	
        <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
    </ol>
</div>

<?php } else { if($isdomain!='1') { ?>
<div class="tipGou" style="width:99%;">
<ol>
<?php echo $tmp_lang['xwkt'];?>
        </ol>
</div>
<?php } else { include template('dz55625_haodian_domain:haodian_list'); } ?> 
<?php } ?> 

<?php } else { if($uservip>=1) { if($domainConfig['fdymsz'] != '1') { ?>

<div class="tipGou" style="width:99%;">
<ol>
    	
        <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
    </ol>
</div>

<?php } else { if($isdomain!='1') { ?>
        <div class="tipGou" style="width:99%;">
            <ol>
                <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
            </ol>
        </div>
<?php } else { include template('dz55625_haodian_domain:haodian_list'); } ?> 
<?php } ?> 

<?php } else { ?>
    <div class="tipGou" style="width:99%; background-position:170px 15px">
        </ol>
        	<?php echo $tmp_lang['vipciky'];?> <a href="<?php echo $viplinks;?>" target="_blank" style="color:#F00">>><?php echo $tmp_lang['liaojievip'];?></a>
        </ol>
    </div>
<?php } } ?> 

<?php } elseif($p == 'zizhu') { if($zhu_Start != '1') { ?>
    <div class="tipGou" style="width:99%;">
        <ol>
            <?php echo $tmp_lang['shopcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
        </ol>
    </div>
    <?php } else { include template('dz55625_haodian_buffet:buffet_user_list'); } } elseif($p == 'coupon') { if($iscouStart=='1') { ?>

    <?php if($couponConfig['coupon_status'] !=1 ) { ?>
        <div class="tipGou" style="width:99%;">
            <ol>
                <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
            </ol>
        </div>
        
        <?php } else { ?>
            <?php if($iscoupon!='1') { ?>
        <div class="tipGou" style="width:99%;">
            <ol>
                <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
            </ol>
        </div>
            <?php } else { ?>
                <?php include template('dz55625_haodian_coupon:coupon_manager'); ?>            <?php } ?> 
     <?php } ?> 
        
<?php } else { ?>

    <?php if($uservip>=1) { ?>
    <?php if($couponConfig['coupon_status'] !=1 ) { ?>
        <div class="tipGou" style="width:99%;">
            <ol>
                <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
            </ol>
        </div>
        
        <?php } else { ?>
            <?php if($iscoupon!='1') { ?>
        <div class="tipGou" style="width:99%;">
            <ol>
                <?php echo $tmp_lang['addcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
            </ol>
        </div>
            <?php } else { ?>
                <?php include template('dz55625_haodian_coupon:coupon_manager'); ?>            <?php } ?> 
        <?php } ?> 
    
    <?php } else { ?>
        <div class="tipGou" style="width:99%; background-position:170px 15px">
            </ol>
                <?php echo $tmp_lang['vipciky'];?> <a href="<?php echo $viplinks;?>" target="_blank" style="color:#F00">>><?php echo $tmp_lang['liaojievip'];?></a>
            </ol>
        </div>
    <?php } } } ?>

    </div>
   
</div>


    <div class="appl" style=" ">
        <div class="tbn">
            <h2 class="mt bbda"><?php echo $tmp_lang['listmianban'];?></h2>
            <ul>

            	<li <?php if($p == 'index' || $p == 'edit') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=index"><?php echo $tmp_lang['listxinxil'];?></a></li>
                <li <?php if($p == 'listpic') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=listpic"><?php echo $tmp_lang['userxiangce'];?></a></li>
                <li <?php if($p == 'youhui') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=youhui"><?php echo $tmp_lang['adminnews'];?></a></li>
               <?php if($Lstart=='1') { ?> <li <?php if($p == 'adone') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=adone"><?php echo $tmp_lang['adminadads'];?></a></li><?php } ?>
               <?php if($StHop=='1') { ?> <li <?php if($p == 'shops') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=shops"><?php echo $tmp_lang['adminadadz'];?></a></li><?php } ?>
               <?php if($Ystart=='1') { ?> <li <?php if($p == 'yyue') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=yyue"><?php echo $tmp_lang['yguanli'];?></a></li><?php } ?>
               <?php if($isdomain=='1') { ?> <li <?php if($p == 'domain') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=domain"><?php echo $tmp_lang['yuminggl'];?></a></li><?php } ?>
               <?php if($iscoupon=='1') { ?> <li <?php if($p == 'coupon') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=coupon"><?php echo $tmp_lang['youhuijuangl'];?></a></li><?php } ?>
            <?php if($zhu_Start=='1') { ?><li <?php if($p == 'zizhu') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=zizhu"><?php echo $tmp_lang['v_zhizhu_6'];?></a></li><?php } ?>
            <li style="border:none"></li>
            <li style="border:none"></li>
            </ul>
        </div>
    </div>
    
</div>

<?php } include template('common/footer'); ?>      