<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('haoindex');
0
|| checktplrefresh('./source/plugin/dz55625_haodian/template/haoindex.htm', './template/default/common/seditor.htm', 1386941758, 'dz55625_haodian', './data/template/3_dz55625_haodian_haoindex.tpl.php', './source/plugin/dz55625_haodian/template', 'haoindex')
;?>
<?php if(!$_G['gp_mod']) { include template('common/header'); } elseif($_G['gp_mod'] == 'view') { include template('dz55625_haodian:header'); } elseif($_G['gp_mod'] == 'add') { include template('common/header'); } ?>
<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_haodian/images/body.css" />

<?php if(!$_G['gp_mod']) { ?> 
<script src="source/plugin/dz55625_haodian/images/jquery.min.js" type="text/javascript"></script>  
<script type="text/javascript">
var jq = jQuery.noConflict(); 
jq(function(){
get_rate('<?php echo $aver;?>');
});
</script>

<div class="cl alliance">
<div id="pt" class="bm cl" style="width:960px; float:left;">
<div class="z">
<a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>haodian.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian<?php } ?>"><?php echo $dhname;?></a>
</div>
</div>

        <?php if($hus != $stu || $hakign != $hurlz) { ?><div class="haomsn cl"><?php echo $tmp_lang['dbmsn'];?></div><?php } else { ?>
        
        
        <?php if($huangTop == 1) { ?> 
 		<div class="z" style="margin-bottom:10px"><?php include template('dz55625_haodian:huangTop'); ?></div>
        <style type="text/css">.alliance{ margin-bottom:10px}</style>
      	<?php } ?>
        <div class="wpLeft z">
        <?php if($Hstop=='0') { ?>
        	<div class="indexSa">
                <ul>
            <script type="text/javascript">
var config = '5|0xffffff|<?php echo $pic_color;?>|50|0xffffff|<?php echo $pic_color;?>|0x000000';
var files = '<?php echo $picdz;?>';
var links = '<?php echo $piclj;?>';
var texts = '<?php echo $picwz;?>';
            document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="685" height="177">');
            document.write('<param name="movie" value="source/plugin/dz55625_haodian/images/focus.swf" />');
            document.write('<param name="quality" value="high" />');
            document.write('<param name="menu" value="false" />');
            //document.write('<param name="wmode" value="transparent" />');
            document.write('<param name="wmode" value="Opaque" />');
            document.write('<param name="FlashVars" value="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'" />');
            document.write('<embed src="source/plugin/dz55625_haodian/images/focus.swf" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'" menu="false" quality="high" width="685" height="177" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
            document.write('</object>');
            </script> 
                
                </ul>
            </div>
            
            
<?php } ?>
        <?php include template('dz55625_haodian:search'); ?>            <div class="indexList">

<div id="fenleis"><img src="source/plugin/dz55625_haodian/images/slist.png" /></div>	
                    
                <h3><span>
                <a href="<?php if($RewriteStart == 1) { ?>haodian.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian<?php } ?>"><?php echo $tmp_lang['homenews'];?></a>
                <a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>_d.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?>&px=d<?php } ?>"<?php echo $a_hover['d'];?>><?php echo $tmp_lang['hometime'];?></a>
                <a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>_f.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?>&ps=f<?php } ?>"<?php echo $a_hover['f'];?>><?php echo $tmp_lang['pingfensx'];?></a>
                
                <a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>_1.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?>&types=1<?php } ?>"<?php echo $a_hover['1'];?>>VIP</a>
                
                <a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>_2.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?>&types=2<?php } ?>"<?php echo $a_hover['2'];?>><?php echo $tmp_lang['zhiding'];?></a>
                <?php if($zkstart != 3) { ?><a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>_3.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?>&types=3<?php } ?>"<?php echo $a_hover['3'];?>><?php echo $tmp_lang['zhekouindex'];?></a><?php } ?>
                
                </span><strong>
                    <?php if($_G['gp_e']=='1') { ?><a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_0_<?php echo $sd;?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=0&sd=<?php echo $sd;?><?php } ?>" id="pca"><?php echo $tmp_lang['wzlist'];?></a><?php } else { ?><a href="<?php if($RewriteStart == 1) { ?>haodian_<?php echo $cid;?>_<?php echo $did;?>_1_<?php echo $sd;?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&c=<?php echo $cid;?>&d=<?php echo $did;?>&e=1&sd=<?php echo $sd;?><?php } ?>" id="pcb"><?php echo $tmp_lang['tplist'];?></a><?php } ?>
                </strong></h3>
                
            
           <script language="javascript">
var clickwindow='<?php echo $Clickwindow;?>';
var zkstart=<?php echo $zkstart;?>;
var kastart=<?php echo $kastart;?>;
var liststyle=<?php echo $listStyle;?>;
var e_x='<?php echo $_GET["e"];?>';
                function ajax_haodian(page){

var cx={id:'dz55625_haodian:haodian_ajax',page:page,action:'index_list',fun:"ajax_haodian",condition:"<?php echo $condition;?>",orderby:"<?php echo $orderby;?>"}
jq.ajax({
url: "plugin.php",  
type: "POST",
data:cx,
 dataType: "json",
 error: function(){  
// alert("dfsfd");
},  
 success: function(ajax_data){
if(ajax_data.counts>0){
data=ajax_data.data;
var s='';
if(liststyle==1){
if(e_x == '1' || e_x == ''){
s+='<ul>';

}
}else{
if(e_x == '0' || e_x == ''){
s+='<ul>';
}
}
for(var i=0;i<data.length;i++){
if(liststyle==1){
if(e_x == '0' || e_x == ''){
s+=loaddata(data[i]);
}else if(e_x == '1' || e_x == ''){
s+=loaddata1(data[i]);

}
}else{
if(e_x == '0' || e_x == ''){
s+=loaddata1(data[i]);

}else if(e_x == '1' || e_x == ''){
s+=loaddata(data[i]);
}
}
}
if(liststyle==1){
if(e_x == '1' || e_x == ''){

s+='</ul>';
}
}else{
if(e_x == '0' || e_x == ''){
s+='</ul>';
}
}

jq("#bh").html(s);
if(liststyle==1){
if(e_x=='0' || e_x==''){
var o=document.getElementById("bh").getElementsByTagName("ol");
for(var i=0;i<o.length;i++){
o[i].innerHTML+=(i+1)+"#";
}
jq(".listSj dl").mouseover(function(){ 
//如果鼠标移到class为stripe_tb的表格的tr上时，执行函数
jq(this).addClass("over");}).mouseout(function(){ 
//给这行添加class值为over，并且当鼠标一出该行时执行函数
jq(this).removeClass("over");}) //移除该行的class
jq(".listSj dl:even").addClass("alt");
//给class为stripe_tb的表格的偶数行添加class值为alt
}
}else{
if(e_x=='1' || e_x==''){
var o=document.getElementById("bh").getElementsByTagName("ol");
for(var i=0;i<o.length;i++){
o[i].innerHTML+=(i+1)+"#";
}
jq(".listSj dl").mouseover(function(){ 
//如果鼠标移到class为stripe_tb的表格的tr上时，执行函数
jq(this).addClass("over");}).mouseout(function(){ 
//给这行添加class值为over，并且当鼠标一出该行时执行函数
jq(this).removeClass("over");}) //移除该行的class
jq(".listSj dl:even").addClass("alt");
//给class为stripe_tb的表格的偶数行添加class值为alt
}
}

//if((parseInt(ajax_data.page)*parseInt(ajax_data.pagenum))<ajax_data.counts){
jq("#page_content").html(ajax_data.multis);
//alert(ajax_data.multis);
//}else{
//jq("#page_content").html("");
//}
}else{
jq("#bh").html('<ul class="cl erroe"><?php echo $tmp_lang['homewsj'];?></ul>');
}
}
 });
}

function loaddata(data){
var ss='';
ss+='<dl><ol></ol>';
if(data.topid==1){
ss+='<div class="topid"></div>';
}
ss+='<dt>';
if(data.click==1){
ss+='<span></span>';
}
ss+='<a href="'+data.haodian_url+'" '+clickwindow+'><img src="'+data.pic+'" width="120" height="120" /></a>';
ss+='</dt><dd class="xx"><strong>';
if(zkstart==1 && data.sad>0 && data.click==1){
ss+='<a title="<?php echo $tmp_lang['userzhekou'];?>"><img src="source/plugin/dz55625_haodian/images/zkou.gif" alt="<?php echo $tmp_lang['userzhekou'];?>" /></a>&nbsp;';
}else if(zkstart==2 && data.sad>0){
ss+='<a title="<?php echo $tmp_lang['userzhekou'];?>"><img src="source/plugin/dz55625_haodian/images/zkou.gif" alt="<?php echo $tmp_lang['userzhekou'];?>" /></a>&nbsp;';
}
if(kastart==1 && data.lat==1){
ss+='<a title="<?php echo $tmp_lang['zhichiyikt'];?><?php echo $kaname;?>"><img src="source/plugin/dz55625_haodian/images/ka.gif" />&nbsp;</a>';
}
ss+='<a href="'+data.haodian_url+'" '+clickwindow+'>'+data.title+'</a></strong>';
ss+='<p><?php echo $tmp_lang['homeaddress'];?> '+data.address+'</p>';
ss+='<p>';
if(data.sad>0){
ss+='<?php echo $tmp_lang['pazhekou'];?><em>'+data.sad+' <?php echo $tmp_lang['pazhe'];?></em>&nbsp;&nbsp;';
}
ss+='<?php echo $tmp_lang['hometel'];?> '+data.tel+'&nbsp;&nbsp;';
if(data.tese){
ss+='<?php echo $tmp_lang['listtese'];?> '+data.tese;
}
ss+='</p></dd><dd class="ss">'+data.tvs+'</dd></dl>';
return ss;
}
function loaddata1(data){
var s='';
var li_style="";
if(data.topid==1){
li_style='style="background:#FFFDE6"';
}else{
li_style='onmouseover="this.style.background=\'#FFFDE6\'" onmouseout="this.style.background=\'\'"';
}
s+='<li '+li_style+'>';
s+='<p class="P_a">';
       				if(data.click==1){
s+='<span></span>';
}
s+='<a href="'+data.haodian_url+'" '+clickwindow+'><img src="'+data.pic+'" width="120" height="120" /></a>';
           			s+='</p><p class="P_b">';
        			s+='<a href="'+data.haodian_url+'" '+clickwindow+'>'+data.s_title+'</a>';
s+='</p>';
s+='<p class="P_c">'+data.tvs+'&nbsp;&nbsp;';
if(data.sad>0){
s+='<?php echo $tmp_lang['pazhekou'];?><span>'+data.sad+'</span>';
}
s+="</p></li>";
        
       
return s;
}
    			</script>  
        
         <?php if($listStyle == '1') { ?>
    
                <?php if($_G['gp_e'] == '0' || $_G['gp_e'] == '') { ?>
                
                <div class="listSj cl" id="bh">
                   
                </div>
               <div  class='pages cl' id="page_content">.</div>
               <script language="javascript" >ajax_haodian(1);</script>
              <?php } elseif($_G['gp_e'] == '1' || $_G['gp_e'] == '') { ?>
              	<div class="listSp cl" id="bh">
  
</div>
<div  class='pages cl' id="page_content">.</div>
                <script language="javascript" >ajax_haodian(1);</script>
              <?php } ?>
            <?php } elseif($listStyle == '2') { ?>  
              <?php if($_G['gp_e'] == '0' || $_G['gp_e'] == '') { ?>
               <div class="listSp cl" id="bh">
  
</div>
<div  class='pages cl' id="page_content">.</div>
                <script language="javascript" >ajax_haodian(1);</script>
              <?php } elseif($_G['gp_e'] == '1' || $_G['gp_e'] == '') { ?>
              	<div class="listSj cl" id="bh">
                    
                </div>
              <div  class='pages cl' id="page_content">.</div>
               <script language="javascript" >ajax_haodian(1);</script>
              <?php } ?>
            
            <?php } ?>
              
            </div>
        </div>
        
        
        <div class="wpRight y">
        	<div id="chicknew"><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_add.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=add<?php } ?>" class=\"xis\"><?php echo $tmp_lang['homeadd'];?></a></div>
            <div id="chickadmin"><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_user.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian_user<?php } ?>"><?php echo $tmp_lang['xinxiguanlid'];?></a></div>
            <div class="listLei">
            <h2><img src="source/plugin/dz55625_haodian/images/listH2.jpg"></h2>
                 <ul class="cl">  
                    <li><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>.html<?php } else { ?><?php echo $appurl;?><?php } ?>"><?php echo $tmp_lang['homecha'];?></a></li>
                    <?php if(is_array($listclass)) foreach($listclass as $k => $v) { ?>                    <li><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $k;?>_<?php echo $did;?>_<?php echo $epes;?>_<?php echo $sd;?>.html<?php } else { ?><?php echo $appurl;?>&c=<?php echo $k;?>&d=<?php echo $did;?>&e=<?php echo $epes;?>&sd=<?php echo $sd;?><?php } ?>"<?php echo $av_ds[$k];?>><?php echo $v;?>(<?php echo classnum($k); ?>)</a></li>
                    <?php } ?> 
                </ul> 
        	</div>
            
                                    <?php if($mapStarts=='1') { ?>
            <div class="search_s z cl" style="margin:10px auto 0">
            	<a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_map.html<?php } else { ?>plugin.php?id=dz55625_haodian:baidu_map_start<?php } ?>"><img src="source/plugin/dz55625_haodian/images/search_s.jpg"></a>
            </div>
            <?php } ?>
            
       
            
           <?php if($kastart == 1) { ?> <?php include template('dz55625_haodian:recommend'); ?> <?php } else { ?> <?php include template('dz55625_haodian:recommends'); ?> <?php } ?>
            
    <?php if($iscoupon=='1') { ?>
            <div class="search_y z cl" style="margin-top:10px"><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_coupon.html<?php } else { ?>plugin.php?id=dz55625_haodian_coupon:coupon_sjcard<?php } ?>"><img src="source/plugin/dz55625_haodian/images/youhui_s.jpg"></a></div>
            <?php } ?>
           
            <div id="dianping">
              <h2><strong><?php echo $tmp_lang['homerpr'];?></strong><span><button id="btn1"></button><button id="btn2"></button></span></h2>
            <div id="scrollDiv">
             <?php if($mypls) { ?>  
                <ul>      
                    <?php if(is_array($mypls)) foreach($mypls as $key => $mypl) { ?>                        <li>
                        <p class="st"><strong><img src="<?php echo $uc;?>/avatar.php?uid=<?php echo $mypl['uid'];?>&size=small"></strong><span><?php echo $mypl['author'];?></span><em><a href="<?php if($isdomain && $mypl['domain']) { ?><?php echo $mypl['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $mypl['sid'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $mypl['sid'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_haodian/images/guanzhuIco.jpg"></a><a class="xi2" onclick="showWindow(this.id, this.href, 'get', 0);" id="a_poke_1" href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $mypl['uid'];?>&amp;handlekey=propokehk_1"><img src="source/plugin/dz55625_haodian/images/chuanmenIco.jpg"></a></em></p>
                        <p class="sx"><?php echo $mypl['message'];?></p>
                        </li>
                    <?php } ?> 
                </ul>
            <?php } else { ?> 
                <ul class="erroe"><?php echo $tmp_lang['homerprno'];?></ul>
             <?php } ?>
              </div>
              <div id="dianpBot"><span><?php echo $tmp_lang['banuas'];?></span><strong style="display:none">Make:Www.55625.Com BY:Lovenr</strong></div>
            </div>
            

            
            <?php if($ylianjie && $ypic) { ?>  
           <div class="wad cl z">
                <ul>
                        <li><a href="<?php echo $ylianjie;?>"<?php echo $Clickwindow;?>><img src="<?php echo $ypic;?>" /></a></li>
                    
                </ul>
            </div>
            <?php } ?> 
        </div>
        
        </div>
      
      <?php if($huangTop == 2) { ?>  
 		<div style="margin:10px auto"><?php include template('dz55625_haodian:huangTop'); ?></div>
      <?php } ?>
        

<?php } } elseif($_G['gp_mod'] == 'view') { if($StHop=='1') { ?><link rel="stylesheet" type="text/css" href="source/plugin/dz55625_hshop/images/body.css" /><?php } ?>
<script src="source/plugin/dz55625_haodian/images/jquery.min.js" type="text/javascript"></script>  
<script type="text/javascript">
var jq = jQuery.noConflict(); 
jq(function(){
get_rate('<?php echo $aver;?>');
});
</script><?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { if($mythread['click']==1) { ?>
<style type="text/css">
body{ background:url(<?php echo $mythread['background'];?>) <?php echo $mythread['repeat'];?>;} 
</style>
<?php } } ?>    

<script>
<!--
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}
//-->
</script>
<?php if($hus != $stu || $hakign != $hurlz) { ?><div class="haomsn cl"><?php echo $tmp_lang['dbmsn'];?></div><?php } else { if(is_array($mythreads)) foreach($mythreads as $mythread) { ?><div class="cl alliance" style="margin-bottom:10px">
 
<?php if($mythread['click']==1) { if(!empty($mythread['dianzhao'])) { ?>
            	<style type="text/css">
.dianzhao{ width:960px; height:<?php echo $mythread['dheight'];?>px; background:#F9F9F9 url(<?php echo $mythread['dianzhao'];?>) no-repeat;}
    </style>
         <?php } else { ?>
               <style type="text/css">
.dianzhao{ width:960px; height:<?php echo $mythread['dheight'];?>px; background:#F9F9F9 url(source/plugin/dz55625_haodian/images/dianzhao.gif) no-repeat;}
    </style>
<?php } ?>
<div class="dianzhao"></div>
<?php } ?>

<div class="shangTopwp">

    <div class="shangTopleft">
        <?php include template('dz55625_haodian:shangTopleft'); ?>    </div>
    <div class="shangTopright cl">
        <?php include template('dz55625_haodian:view_sid'); ?>       <?php if($mythread['click']=='1' && $hadConfig['start'] == '1') { ?><div class="shangHuan"><?php include template('dz55625_haodian:view_hadone'); ?></div><?php } ?>
       <?php if($stMap==1) { ?> 
            <?php if($mapStart==1) { ?>
<style type="text/css">
#mapCanvas .anchorBL{ display:none}
            </style>
            <script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript"></script>
            <script src="source/plugin/dz55625_haodian/images/convertor.js" type="text/javascript"></script>
            <div id="maps"><div id="mapCanvas"></div></div>
            <?php } else { ?>
<script src="http://maps.google.cn/maps/api/js?sensor=false&language=zh-cn" type="text/javascript" type="text/javascript"></script>
            <div id="maps"><div id="mapCanvas"><?php echo $tmp_lang['maplading'];?></div></div>
            <?php } ?>
        <?php } ?>
        
        <?php if($ShopFw=='1') { ?> 
       			<?php if($mythread['click']=='1') { ?>
         		<?php if($NewStart=='1') { ?>
                <div id="listinfa" class="cl">
                    <script type="text/javascript">
                    function loadinga(){
                        ajaxget('plugin.php?id=dz55625_haodian:haodian_fs&action=mlistinfa&zid=<?php echo $_G['gp_sid'];?>', 'listinfa');
                    }
                    setTimeout('loadinga()', 1800);
                    </script>
                </div>   
                <?php } ?>  
                <?php } ?>
                <?php if($ShopStart=='1') { ?>   
                <div id="listinfo" class="cl">
                    <script type="text/javascript">
                    function loadings(){
                        ajaxget('plugin.php?id=dz55625_haodian:haodian_fs&action=mlistinfo&zid=<?php echo $_G['gp_sid'];?>', 'listinfo');
                    }
                    setTimeout('loadings()', 2600);
                    </script>
                </div>
                <?php } ?> 
        <?php } elseif($ShopFw=='2') { ?>
            <?php if($mythread['click']=='1') { ?>
                <?php if($NewStart=='1') { ?>
                <div id="listinfa" class="cl">
                    <script type="text/javascript">
                    function loadinga(){
                        ajaxget('plugin.php?id=dz55625_haodian:haodian_fs&action=mlistinfa&zid=<?php echo $_G['gp_sid'];?>', 'listinfa');
                    }
                    setTimeout('loadinga()', 1800);
                    </script>
                </div>   
                <?php } ?>  
                <?php if($ShopStart=='1') { ?>   
                <div id="listinfo" class="cl">
                    <script type="text/javascript">
                    function loadings(){
                        ajaxget('plugin.php?id=dz55625_haodian:haodian_fs&action=mlistinfo&zid=<?php echo $_G['gp_sid'];?>', 'listinfo');
                    }
                    setTimeout('loadings()', 2600);
                    </script>
                </div>
                <?php } ?> 
            <?php } ?>
        <?php } ?>

    </div>
</div>
</div>
<?php if($stMap==1) { ?>  
    <?php if($mapStart==1) { ?>
<script type="text/javascript">
var map = new BMap.Map("mapCanvas");  
var lng="<?php echo $mythread['lng'];?>";
var os=null;
var point=null;
<?php if(!empty($mythread['lng']) ) { ?>
os=lng.split(",");
if(<?php echo $mythread['map_type'];?>==1){
point=new BMap.Point(os[0],os[1]);
}else{
point=new BMap.Point(os[1],os[0]);
}
<?php } else { ?>
point=new BMap.Point(<?php echo $zuobiao;?>);
<?php } ?>

var marker=null;
<?php if(!empty($mythread['lng'])) { if($mythread['map_type']==1) { ?>
marker = new BMap.Marker(point);
marker_s(point);
<?php } else { ?>
 BMap.Convertor.translate(point,2,function(point1){
 marker = new BMap.Marker(point1);
 marker_s(point1);		  
});
<?php } } ?>
 function marker_s(point2){
 map.centerAndZoom(point2, <?php echo $mythread['jib'];?>);         
map.addOverlay(marker);  
marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画  
 }
   


var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL}  
map.addControl(new BMap.NavigationControl(opts));  
map.addControl(new BMap.MapTypeControl());  
map.enableScrollWheelZoom();                            
    </script>
    <?php } else { ?>
    <script type="text/javascript"> 
    var geocoder = new google.maps.Geocoder();
    function initialize() {
      var mapxy = '<?php echo $mythread['lng'];?>';
    xyarr=mapxy.split(",");
      var latLng = new google.maps.LatLng(xyarr[0], xyarr[1]);
      var map = new google.maps.Map($('mapCanvas'), {
        zoom: <?php echo $mythread['jib'];?>,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var marker = new google.maps.Marker({
        position: latLng,
        title: '',
        map: map,
        draggable: false
      });
       google.maps.event.addListener(map, 'zoom_changed', function() {
        zoomLevel = map.getZoom();
        map.setCenter(latLng);
        if (zoomLevel == 0) {
          map.setZoom(<?php echo $mythread['jib'];?>);
        }
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php } } } } } elseif($_G['gp_mod'] == 'add') { if($stMap==1) { ?>
    <?php if($mapStart==1) { ?>
    	<script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript"></script>
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
if(document.getElementById("local_1").value){
ajaxget('plugin.php?id=dz55625_haodian:attclass&action=getlocal&lid='+document.getElementById("local_1").value, 'local_2');   
}
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
ajaxget('plugin.php?id=dz55625_haodian:delpic&action=deladd&picsrc='+imgsrc, 'delpic_s');

}
function content_add(imgsrc){
//SWalert(imgsrc);
jq("#propagandamessage").val(jq("#propagandamessage").val()+"[img]"+imgsrc+"[/img]");

}

</script>
<script language="javascript">
<!--
function validate(heform) {
if(heform.title.value == "") {
showError('<?php echo $tmp_lang['shanghumingc'];?>');
return false;
} 

if(heform.pic.value == "") {
showError('<?php echo $tmp_lang['baoqiannin'];?>');
return false;
} 
return true;
}
-->
</SCRIPT>

<div class="cl alliance">

  <div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>haodian.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian<?php } ?>"><?php echo $dhname;?></a><em>&raquo;</em><?php echo $tmp_lang['mapaddxx'];?>
</div>
</div>

<div class="addkk">
<?php if($hus != $stu || $hakign != $hurlz) { ?><div class="haomsn cl"><?php echo $tmp_lang['dbmsn'];?></div><?php } else { ?>
    <?php if($addstart==1) { ?>
        <?php if($ZjenStart==1) { ?>
        	<h3><?php echo $tmp_lang['adddianpus'];?> <?php echo $addshuliang;?> <?php echo $haodians['extcredits'][$set['extcredita']]['title'];?></h3>
        <?php } else { ?>
        	<h3><?php echo $tmp_lang['adddianpuk'];?> <?php echo $addshuliang;?> <?php echo $haodians['extcredits'][$set['extcredita']]['title'];?></h3>
        <?php } ?>
    <?php } ?>
    <ul>
        <form action="" method="post" enctype="multipart/form-data" name="applyform" id="applyform" onsubmit="return validate(this)">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <input type="hidden" name="display" id="display" value="<?php echo $active['display'];?>" />
        <input type="hidden" name="uid" id="uid" value="<?php echo $active['uid'];?>" />
        <input type="hidden" name="username" id="username" value="<?php echo $active['username'];?>" />  
        <input type="hidden" name="lng" id="mapxy" value="<?php echo $zuobiao;?>" />
<input type="hidden" name="jib" id="mapzoom" value="<?php echo $jibie;?>" />
        <input type="hidden" name="xnum" id="xnum" value="50" />
        <div class="tablesx">
        <table border="0">
        
        
        <tr>
              <td class="tb2s"><?php echo $tmp_lang['addfenlei'];?></td>
              <td>&nbsp;<select name="acid" id="acid">
                <?php if(is_array($listclass)) foreach($listclass as $k => $v) { ?>                <option value="<?php echo $k;?>" <?php if($k==$active['cid']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
                <?php } ?>
                </select>
                
                
 			<select class="ps" name="local_1" id="local_1" onchange="ajaxget('plugin.php?id=dz55625_haodian:attclass&action=getlocal&lid='+this.value, 'local_2')" />
<?php if($local) { if(is_array($local)) foreach($local as $lid => $localname) { ?><option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
<?php } } ?>
</select>
            
<span id="local_2" name="local_2"><?php echo $localshow;?></span>
            
              <span><?php echo $tmp_lang['addsfenlei'];?></span></td>
        </tr>
        
                        <tr>
              <td class="tb2s"><?php echo $tmp_lang['yytimes'];?></td>
             
              <td>&nbsp;<?php echo $tmp_lang['ztimes'];?>&nbsp;<input name="yy_ztime" type="text" id="yy_ztime" size="10" value="08:30" />&nbsp;&nbsp;<?php echo $tmp_lang['wtimes'];?>&nbsp;&nbsp;<input name="yy_wtime" type="text" id="yy_wtime" size="10" value="06:30" />
              <span><?php echo $tmp_lang['yysuom'];?></span></td>
        </tr>
        
        <tr>
              <td class="tb2s"><?php echo $tmp_lang['addmingc'];?></td>
              <td>&nbsp;<input name="title" type="text" id="title" value="<?php echo $active['title'];?>" size="50" /><?php if($zkstart != 3) { ?>&nbsp;&nbsp;<?php echo $tmp_lang['Susers'];?>&nbsp;<input name="sad" type="text" size="5" />&nbsp;<span><?php echo $tmp_lang['Susersms'];?></span><?php } if($kastart == 1) { ?>&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['yikatong'];?><?php echo $kaname;?><input name="lat" type="radio" value="0" checked /><?php echo $tmp_lang['yikatongno'];?>&nbsp;<input name="lat" type="radio" value="1" /><?php echo $tmp_lang['yikatongyes'];?>&nbsp;&nbsp;[ <a href="<?php echo $kalinks;?>" target="_blank" style="color:#F00"><?php echo $kaname;?><?php echo $tmp_lang['katongabout'];?></a> ]<?php } else { ?><span>&nbsp;<?php echo $tmp_lang['addtxa'];?></span><?php } ?></td>
        </tr>
        <?php if($zkstart != 3) { ?>
       <tr>
              <td class="tb2s"><?php echo $tmp_lang['userzhekoub'];?></td>
              <td>
                &nbsp;<input name="zkoubj" type="text" id="zkoubj" size="120" />&nbsp;<span><?php echo $tmp_lang['zhekousa'];?></span>
              </td>
        </tr>
<?php } ?> 
        <tr>
              <td class="tb2s"><?php echo $tmp_lang['addpic'];?></td>
              <td><label>
                <?php if($UpCover=='1') { ?><input type="file" name="file" id="pic" size="60" /><?php } else { ?><input type="file" name="file" size="29" /><?php } ?>
              </label><span><?php echo $tmp_lang['addtxb'];?><?php echo round($picdx/1000); ?>K</span></td>
        </tr>
        
        <tr>
              <td class="tb2s"><?php echo $tmp_lang['adddianhua'];?></td>
              <td><label>
                <input name="tel" type="text" value="<?php echo $active['tel'];?>" size="40" /></label>&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['listtese'];?> <input name="tese" id="tese" type="text" value="<?php echo $active['tese'];?>" size="30" />
              <span><?php echo $tmp_lang['tixingts'];?></span></td>
        </tr>
        
         </tr>
        
                <tr>
              <td class="tb2s"><?php echo $tmp_lang['lianxiqq'];?></td>
              <td><label>
                	<input name="tenqq" id="tenqq" type="text" value="<?php echo $active['tenqq'];?>" size="40" /></label>&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['wangdiant'];?> <input name="taobao" id="taobao" type="text" value="<?php echo $active['taobao'];?>" size="30" />
              <span><?php echo $tmp_lang['tixingtx'];?></span></td>
        </tr>
       
                <tr>
              <td class="tb2s"><?php echo $tmp_lang['adddizhi'];?></td>
              <td>&nbsp;<input type="text" name="address" id="daddress" value="" size="60"> <?php if($stMap==1) { ?>&nbsp;&nbsp;<input type="text" id="address_txt" class="px" /> <button type="button" class="pn" onclick="google_getAddress($('address_txt').value);"><span><?php echo $tmp_lang['sousuocity'];?></span></button>
              <a href="javascript:;" style="color:red;" onclick="dhiddmap(this);"><?php echo $tmp_lang['mapdiscuz'];?></a><?php } ?> &nbsp;&nbsp;[ <em style="color:#06F"><?php echo $tmp_lang['e_map_d'];?></em> ]</td>
        </tr>
        
       <?php if($stMap==1) { ?>
        <tr id="displaynone" style="overflow: hidden;width:100%;">
        	<td class="tb2s" style="background:#F2F2F2; height:260px"><?php echo $tmp_lang['mapbiaozhu'];?></td>
            <td><?php if($mapStart==1) { ?><style type="text/css">#container{width:99%; margin:5px auto; height: 250px; }</style><div id="container"></div><?php } else { ?><style type="text/css">#mapCanvas {width:99%; margin:5px auto; height: 250px;}</style><div id="mapCanvas"><?php echo $tmp_lang['maplading'];?></div><?php } ?></td>
        </tr>
       <?php } ?>
        
        <tr>
              <td class="tb2x"><?php echo $tmp_lang['addjieshao'];?></td>
              <td>

            
            <div class="tedt">
              <div class=bar>
                <span class="hook"><?php echo $tmp_lang['addjieshao'];?></span><?php $seditor = array('propaganda', array('bold', 'color', 'link'));?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
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
</div>              </div>
              <div class=area>
                <textarea id="propagandamessage" class=pt tabIndex="5" rows="3" cols="40" name="summary"></textarea>
              </div>
            </div>
            
            
              </td>
        </tr>
        
        <tr>
            <td class="tb2x"><?php echo $tmp_lang['duotuzshi'];?></td>
            <td style="padding-top:5px">
          <div class="picinfos cl" id="picinfo_s"></div>
            &nbsp;<input id="fileInput2" name="fileInput2" type="file" class="z" /><div class="fileInput5"><div id="divTxts" style="display:none"><?php echo $tmp_lang['yishangc'];?></div><input type="button" value="<?php echo $tmp_lang['qingchup'];?>" onClick="javascript:jq('#fileInput2').uploadifyClearQueue();" id="fileInput3" ><input type="button" value="<?php echo $tmp_lang['qxiansc'];?>" onClick="javascript:jq('#fileInput2').uploadifyUpload();" id="fileInput4" >
            
            
            </div></td>
        </tr>
       
        </table>
        </div>
        
        <?php if($displays==0) { ?><h3 style="margin-top:8px"><?php echo $tmp_lang['addtx'];?></h3><?php } ?>
        <div id="divTxt" style="display:none"></div>
        <div style="text-align:center; margin:10px auto 0;">
            <button type="submit" name="applysubmit" id="applysubmit" value="true" class="pn pnp" /><strong><?php echo $tmp_lang['qqueding'];?></strong></button>
            <button type="reset" name="sendreset" class="pn pnp" /><strong><?php echo $tmp_lang['chexiao'];?></strong></button>
        </div>
        
        </form>
        <div style="display:none" id="delpic_s">xxxxxxxxxxxxxxx</div>
    </ul>
  <?php } ?>  
</div>
<?php if($stMap==1) { ?>
    <?php if($mapStart==1) { ?>
<script type="text/javascript">
var map = new BMap.Map("container");  
point=new BMap.Point(<?php echo $zuobiao;?>); 
map.centerAndZoom(point, <?php echo $jibie;?>);         
var native = new BMap.LocalCity();
var contextMenu = new BMap.ContextMenu();
var marker=null;
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
map.addEventListener("zoomend", function(){  
   $('mapzoom').value = this.getZoom();
}); 

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
var google_latlng= new google.maps.LatLng(<?php echo $zuobiao;?>);
var google_map;
var google_marker;
var google_geocoder;
function google_initialize() {
var myOptions = {
zoom: <?php echo $jibie;?>,
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
</div>


<?php } include template('common/footer'); ?>       
<script src="source/plugin/dz55625_haodian/images/jq.js" type="text/javascript"></script>
