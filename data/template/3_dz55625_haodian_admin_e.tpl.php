<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style type="text/css">
.h2Bt{ width:60px; font-weight:bold;}
.listx td{ height:30px}
</style>
<?php if($stMap==1) { ?>
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
document.getElementById("picinfo_s").innerHTML="";
var s="";
var img_inputs=document.getElementsByName("filelist[]");

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
jq("#ainfo").val(jq("#ainfo").val()+"[img]"+imgsrc+"[/img]");

}

</script>
<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_haodian/images/body.css" />
<table class="tb tb2 ">
<tr><th colspan="15" class="partition"><?php echo $tmp_lang['adminedit'];?></th></tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input name="pic" type="hidden" id="pic" value="<?php echo $active['pic'];?>" size="80"  />
  <table class="tb tb2 listx">
  
  
   <tr>
      <td class="h2Bt"><?php echo $tmp_lang['adminpaixus'];?></td>
      <td><input name="xnum" type="text" value="<?php echo $active['xnum'];?>" size="8" /></td>
    </tr>
  
      <tr>
      <td class="h2Bt"><?php echo $tmp_lang['adminuser'];?></td>
      <td><?php echo $active['author'];?></td>
    </tr>
        
          <tr>
      <td class="h2Bt"><?php echo $tmp_lang['dppingf'];?></td>
      <td><?php echo $tmp_lang['dqianpf'];?> <strong style="color:#F30"><?php echo round($active['total']/$active['voter'],1); ?></strong> <?php echo $tmp_lang['fenjics'];?><input name="bonus" type="text" id="bonus" value="<?php echo $active['bonus'];?>" size="5" /> <?php echo $tmp_lang['fenjicz'];?></td>
    </tr>
    
    
                                <tr>
              <td class="h2Bt"><?php echo $tmp_lang['yytimes'];?></td>
             
              <td>&nbsp;<?php echo $tmp_lang['ztimes'];?>&nbsp;<input name="yy_ztime" type="text" id="yy_ztime" size="10" value="<?php echo $active['yy_ztime'];?>" />&nbsp;&nbsp;<?php echo $tmp_lang['wtimes'];?>&nbsp;&nbsp;<input name="yy_wtime" type="text" id="yy_wtime" size="10" value="<?php echo $active['yy_wtime'];?>" />
              <span><?php echo $tmp_lang['yysuom'];?></span></td>
        </tr>
    
              <tr>
      <td class="h2Bt"><?php echo $tmp_lang['admin_xiugai'];?></td>
      <td><?php echo $tmp_lang['admin_xiugasi'];?><strong style="color:#F30">+<?php echo $active['hits'];?></strong><?php echo $tmp_lang['admin_xiugasi_1'];?><input name="hitsa" type="text" id="hitsa" size="5" value="<?php echo $active['hitsa'];?>" /> <span><?php echo $tmp_lang['admin_x_a'];?></span></td>
    </tr>
    
    
         <?php if($zkstart == 1 && $active['click'] == 1) { ?>
      <tr>
      <td class="h2Bt"><?php echo $tmp_lang['Suser'];?></td>
      <td><input name="sad" type="text" id="sad" value="<?php echo $active['sad'];?>" size="5" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['Susersms'];?></span></td>
    </tr>
    
    <?php } elseif($zkstart == 2) { ?>
          <tr>
      <td class="h2Bt"><?php echo $tmp_lang['Suser'];?></td>
      <td><input name="sad" type="text" id="sad" value="<?php echo $active['sad'];?>" size="5" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['Susersms'];?></span></td>
    </tr>
    
    <?php } ?>
    
     <?php if($zkstart == 1 && $active['click'] == 1) { ?>
      <tr>
      <td class="h2Bt"><?php echo $tmp_lang['userzhekoub'];?></td>
      <td><input name="zkoubj" type="text" id="zkoubj" value="<?php echo $active['zkoubj'];?>" size="120" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['zhekousa'];?></span></td>
    </tr>
    
    <?php } elseif($zkstart == 2) { ?>
          <tr>
      <td class="h2Bt"><?php echo $tmp_lang['userzhekoub'];?></td>
      <td><input name="zkoubj" type="text" id="zkoubj" value="<?php echo $active['zkoubj'];?>" size="120" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['zhekousa'];?></span></td>
    </tr>
    
    <?php } ?>
    
    
   <tr>
      <td class="h2Bt"><?php echo $tmp_lang['renlingshezhi'];?></td>
      <td><input name="renling" type="text" id="renling" value="<?php echo $active['renling'];?>" size="5" />&nbsp;<span style="color:#999"><?php echo $tmp_lang['rladmins'];?></span></td>
    </tr>
    
    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addfenlei'];?></td>
      <td>
        <select name="acid" id="acid" /><?php if(is_array($listclass)) foreach($listclass as $k => $v) { ?>          
        <option value="<?php echo $k;?>" <?php if($k==$active['cid']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
 <?php } ?>
        
        </select>
        
        <select class="ps" name="local_1" onchange="ajaxget('plugin.php?id=dz55625_haodian:attclass&action=getlocal&lid='+this.value, 'local_2')" />
<?php if($local) { if(is_array($local)) foreach($local as $lid => $localname) { ?><option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
<?php } } ?>
</select>
        <span id="local_2" name="local_2"><?php echo $localshow;?></span>
      </td>
    </tr>
    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addmingc'];?></td>
      <td><input name="title" type="text" id="title" value="<?php echo $active['title'];?>" size="40" />&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['yikatong'];?><?php echo $kaname;?><input name="lat" type="radio" value="0" <?php if($active['lat'] != 1) { ?>checked<?php } ?> /><?php echo $tmp_lang['yikatongno'];?>&nbsp;<input name="lat" type="radio" value="1" <?php if($active['lat'] == 1) { ?>checked<?php } ?> /><?php echo $tmp_lang['yikatongyes'];?></td>
    </tr>
    

    <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addpic'];?></td>
      <td><img src="<?php echo $active['pic'];?>" width="140" height="100" /><br /><input type="file" name="file" id="pic" size="20" style="margin-top:5px;" /><span style="padding-left:5px; color:#999"><?php echo $tmp_lang['addtxb'];?><?php echo round($picdx/1000); ?>K</span></td>
    </tr>
     <?php if($stMap==1) { ?>
    <tr>
    
     <td class="h2Bt"><?php echo $tmp_lang['mapbiaozhu'];?></td>
       <td><input name="lng" id="mapxy" value="<?php echo $active['lng'];?>" size="50" />
<input name="jib" type="hidden" id="mapzoom" value="<?php echo $active['jib'];?>" /></td>
         </tr>
    <?php } ?>
    <tr>
              <td class="h2Bt"><?php echo $tmp_lang['adddizhi'];?></td>
              <td><input type="text" name="address" id="daddress" value="<?php echo $active['address'];?>" size="60"> <?php if($stMap==1) { ?>&nbsp;&nbsp;<input type="text" id="address_txt" class="px" /> <button type="button" class="pn" onclick="google_getAddress($('address_txt').value);"><span><?php echo $tmp_lang['sousuocity'];?></span></button>
              <a href="javascript:;" style="color:red;" onclick="dhiddmap(this);"><?php echo $tmp_lang['mapdiscuz'];?></a><?php } ?></td>
        </tr>
    
                    <?php if($stMap==1) { ?>
        <tr id="displaynone" style="overflow: hidden;width:100%;">
        	<td class="h2Bt"><?php echo $tmp_lang['mapbiaozhu'];?></td>
            <td><?php if($mapStart==1) { ?><style type="text/css">#container{width:700px; margin:5px auto; height: 250px; float:left }</style><div id="container"></div><?php } else { ?><style type="text/css">#mapCanvas {width:700px; margin:5px auto; height: 250px; float:left}</style><div id="mapCanvas"><?php echo $tmp_lang['maplading'];?></div><?php } ?></td>
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
    
     <tr>
      <td class="h2Bt"><?php echo $tmp_lang['addjieshao'];?></td>
      <td><label>
        <textarea name="summary" cols="80" rows="5" id="ainfo"><?php echo $active['summary'];?></textarea>
      </label>
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
      <td class="h2Bt"><?php echo $tmp_lang['hometim'];?></td>
      <td>
        <input name="dateline" type="text" id="dateline" value="<?php echo date('Y-m-d H:i',$active['dateline']); ?>" disabled="true"  /> </td>
    </tr>
    
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
// 创建地图实例
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
map.addEventListener("zoomend", function(){  
   $('mapzoom').value = this.getZoom();
//alert("地图缩放至：" + this.getZoom() + "级");  
});  

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
var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL}  
map.addControl(new BMap.NavigationControl(opts));  
map.addControl(new BMap.MapTypeControl());  
map.enableScrollWheelZoom();                            //启用滚轮放大缩小
//-------------------------------------------------
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
<?php } } ?>