<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="Contentboxz"> 
<?php if($p == 'index' || $p=='') { ?>
<div id="con_ss_1">
<div style="width:650px;" class="cl">
<div class="shangSop cl">
<ul class="z">
<li><strong><?php echo $tmp_lang['yytimex'];?></strong><?php echo $mythread['yy_ztime'];?> - <?php echo $mythread['yy_wtime'];?></li>
</ul>
<ol class="y">
<li><?php if(!empty($mythread['taobao'])) { ?>[ <a href="<?php echo $mythread['taobao'];?>" target="_blank" style="color:#067296"><?php echo $tmp_lang['webdianpu'];?></a> ]<?php } ?>&nbsp;&nbsp;[ <a onclick="showWindow('guanlian', 'plugin.php?id=dz55625_haodian:haodian_fs&action=listinfc&zid=<?php echo $mythread['uid'];?>', 'get', 0)" href="javascript:;" style="color:#067296"><?php echo $tmp_lang['v_guanlian'];?></a> ]<?php if($mythread['author'] == $_G['username']) { ?>&nbsp;&nbsp;[ <a href=" plugin.php?id=dz55625_haodian:haodian_user&p=edit&sid=<?php echo $_GET['sid'];?>" target="_blank" style="color:#067296"><?php echo $tmp_lang['b_jisss'];?></a> ]<?php } ?></li>
</ol>
</div>
<div class="shangTop cl">
    <?php if($mythread['click']==1) { ?><span id="vips"></span><?php } ?>
    <h2>
    <div><span><?php echo $tmp_lang['fangwl'];?></span> <em>+<?php echo $mythread['hits']+$mythread['hitsa']; ?></em></div>
        <?php if(!empty($mythread['pic'])) { ?>
            <img src="<?php echo $mythread['pic'];?>">
            <?php } else { ?>
            <img src="source/plugin/dz55625_haodian/images/over3.jpg" />
        <?php } ?>
        <img src="plugin.php?id=dz55625_haodian:haodian_click&amp;sid=<?php echo $_GET['sid'];?>" style="display:none"/>
    </h2>
    <ul>
        <li><strong><?php echo $mythread['title'];?></strong></li>
        <li><span><?php echo $tmp_lang['homeaddress'];?></span> <?php echo $mythread['address'];?></li>
        <li><span><?php echo $tmp_lang['hometel'];?></span> <?php echo $mythread['tel'];?></li>
        <li><span><?php echo $tmp_lang['listtese'];?></span> <?php if(!empty($mythread['tese'])) { ?><?php echo $mythread['tese'];?><?php } else { ?><?php echo $tmp_lang['listzanwu'];?><?php } ?></li>
    </ul>
    <ol>
    	<li><?php if(!empty($Ystart) ) { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vy<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=yuyue&sid=<?php echo $_GET['sid'];?><?php } ?>" id="yuyues"><?php echo $tmp_lang['Wyuyue'];?></a><?php } ?></li>
        <li><?php if($iscouStart=='1') { if(!empty($iscoupon) && !empty($coupon_status) ) { ?><a href="javascript:;" onclick="showWindow('huoquyhj', 'plugin.php?id=dz55625_haodian_coupon:coupon_cardpup&aid=<?php echo $_GET['sid'];?>', 'get', 0)" id="youhuis"><?php echo $tmp_lang['huoquyhj'];?></a><?php } } else { if($mythread['click']==1) { ?>
        <?php if(!empty($iscoupon) && !empty($coupon_status) ) { ?><a href="javascript:;" onclick="showWindow('huoquyhj', 'plugin.php?id=dz55625_haodian_coupon:coupon_cardpup&aid=<?php echo $_GET['sid'];?>', 'get', 0)"  id="youhuis"><?php echo $tmp_lang['huoquyhj'];?></a><?php } } } ?></li>
    </ol>
    
</div>

<?php if($mythread['sad']>'0') { ?>
    <?php if($zkstart == 1 && $active['click'] == 1) { ?>
    <div class="shangZop cl">
        <ul>
            <p id="Suser"><span><?php echo $tmp_lang['Suser'];?></span><em><?php echo $mythread['sad'];?></em></p>
            <p id="Stext"><?php echo $mythread['zkoubj'];?></p>
        </ul>
    </div>
    <?php } elseif($zkstart == 2) { ?>
    <div class="shangZop cl">
        <ul>
            <p id="Suser"><span><?php echo $tmp_lang['Suser'];?></span><em><?php echo $mythread['sad'];?></em></p>
            <p id="Stext"><?php echo $mythread['zkoubj'];?></p>
        </ul>
    </div>
    <?php } } ?>  

<div class="shangTopx cl">
<ul>
<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
<a class="bds_kaixin001"></a>
<a class="bds_sqq"></a>
<a class="bds_qq"></a>
<a class="bds_hi"></a>
<a class="bds_mogujie"></a>
<a class="bds_ty"></a>
<a class="bds_twi"></a>
<a class="bds_fbook"></a>
<span class="bds_more"><?php echo $tmp_lang['moregengs'];?></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->

<dl><a onclick="showWindow('miscreport', 'misc.php?mod=report&amp;url='+REPORTURL);return false;" href="javascript:;"><?php echo $tmp_lang['jubaoxx'];?></a></dl>
</ul>
</div>
</div>

<div class="conzs cl">
<h2><strong><?php echo $tmp_lang['shangabout'];?></strong></h2>
<ul>
    <?php if(!empty($mythread['summary'])) { ?>
       		<?php echo $mythread['summary'];?>
        <?php } else { ?>
        	<?php echo $tmp_lang['zanshiwner'];?>
    <?php } ?>
</ul> 
</div>

<div id="con_ss_8" class="cl">
<h3><strong><?php echo $tmp_lang['listdianzs'];?></strong><span><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vp<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=listpic&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['moregeng'];?></a></span></h3>
<?php if($piccount!=0) { ?>
    <ul>
        <?php $j = 0;?>            <?php if(is_array($shopimgs)) foreach($shopimgs as $key => $shopimg) { ?>                                 <?php if($j>=4) { ?>
                                <?php break;?>                         <?php } ?>
                         <?php $j = $j+1;?>                         
               
                    <li>
                        <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vp<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=listpic&sid=<?php echo $_GET['sid'];?><?php } ?>"><img alt="" src="<?php echo $shopimg['shrink_url'];?>" /></a>
                
            <?php } ?>
    </ul>
    <?php } else { ?>
     <ol>
     	<?php if($mythread['author'] == $_G['username']) { ?><?php echo $tmp_lang['wupicsj'];?><?php } else { ?><?php echo $tmp_lang['wupicsjs'];?><?php } ?>
     </ol>       
    <?php } ?>
</div>

<?php if($display==0) { ?><div class="addkk" style="margin:0; padding:0"><h3><?php echo $tmp_lang['booktx'];?></h3></div><?php } ?>  


<script type="text/javascript">
function checkLength(which) {
var maxChars = 140;
if (which.value.length > maxChars)
which.value = which.value.substring(0,maxChars);
var curr = maxChars - which.value.length;
document.getElementById("chLeft").innerHTML = curr.toString();
}
var jqp = jQuery.noConflict(); 	
var ltupper=["2","4","6","8","10"];
jqp(document).ready(function(){
  jqp('.star_rating li a').each(function(){
  jqp(this).click(function(){						
          var lt=getStars(jqp(this).attr('class'));
  
  jqp('#stars').val(lt);
  jqp('#selectStars').text(ltupper[lt-1]+'<?php echo $tmp_lang['homefen'];?>');
  jqp('.star_rating li a').slice(0,lt).css({'background':'url(source/plugin/dz55625_haodian/images/yellow.jpg)'});
  jqp('.star_rating li a').slice(lt,5).css({'background':'url(source/plugin/dz55625_haodian/images/while.jpg)'});
  })
  })
  jqp('.star_rating li a').hover(function(){
  var lt=getStars(jqp(this).attr('class'));
  
  jqp('.star_rating li a').slice(0,lt).css({'background':'url(source/plugin/dz55625_haodian/images/yellow.jpg)'});
  jqp('.star_rating li a').slice(lt,5).css({'background':'url(source/plugin/dz55625_haodian/images/while.jpg)'});
  jqp('#selectStars').text(ltupper[lt-1]+'<?php echo $tmp_lang['homefen'];?>');
  },function(){
  var lt=Number(jqp('#stars').val());
  if(lt==""){
 jqp('#selectStars').text('<?php echo $tmp_lang['dafenshu'];?>');
  }else{
  jqp('#selectStars').text(ltupper[lt-1]+'<?php echo $tmp_lang['homefen'];?>');
  }
  jqp('.star_rating li a').slice(0,lt).css({'background':'url(source/plugin/dz55625_haodian/images/yellow.jpg)'});
  jqp('.star_rating li a').slice(lt,5).css({'background':'url(source/plugin/dz55625_haodian/images/while.jpg)'});
  })
})
//通过类名判断星星数
function getStars(stars){
var re=1;
switch(stars){
case 'one_star':re=1;break;
case 'two_stars':re=2;break;
case 'three_stars':re=3;break;
case 'four_stars':re=4;break;
case 'five_stars':re=5;break;
}
return re;
}
</script>
<div id="con_ss_4" class="cl">
<h3><strong><?php echo $tmp_lang['userbook'];?></strong></h3>
<div id="pingluns" class="cl">
<dl>

<form method="post" action="plugin.php?id=dz55625_haodian:haodian&amp;mod=view&amp;applysubmit=true" name="applyform">
    <input type="hidden" name="display" id="display" value="<?php echo $mythread['display'];?>" />
    <input type="hidden" name="sid" id="sid" value="<?php echo $mythread['id'];?>" />
    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<dt>
         
        <strong>
           <ul class="star_rating">
               <li><a href="javascript:void(0)" title="2 of 10 stars" class="one_star">2</a></li>
               <li><a href="javascript:void(0)" title="4 of 10 stars" class="two_stars">4</a></li>
               <li><a href="javascript:void(0)" title="6 of 10 stars" class="three_stars">6</a></li>
               <li><a href="javascript:void(0)" title="8 of 10 stars" class="four_stars">8</a></li>
               <li><a href="javascript:void(0)" title="10 of 10 stars" class="five_stars">10</a></li>
               <li style="display:none;"><input type="hidden" id="stars" name="total" value="" /></li>
              </ul>
              <span id="selectStars" style="padding-left:10px;"><?php echo $tmp_lang['dafenshu'];?></span>
        </strong>
        <small><?php echo $tmp_lang['listksr'];?><span id="chLeft">140</span><?php echo $tmp_lang['listgz'];?></small>
           
          </dt>  
        <dd id="textareas"><textarea rows="3" cols="40" name="message" class="pt" id="replymessage" onkeyup="checkLength(this);"></textarea></dd>
       <dd id="buttons"> <button type="submit" name="applysubmit" id="applysubmit" value="true" /><?php echo $tmp_lang['listtjj'];?></button></dd>
</form>
</dl> 
</div>

<script language="javascript">
function ajax_haodian(page){
var cx={id:'dz55625_haodian:haodian_pl_ajax',page:page,sid:<?php echo $sid;?>}
jq.ajax({
url: "plugin.php",  
type: "POST",
data:cx,
 dataType: "json",
 error: function(){  
},  
 success: function(ajax_data){
if(ajax_data.counts>0){
data=ajax_data.data;
var s="";
for(var i=0;i<data.length;i++){
s+=' <dl class="cl">'+
'<dt><img src="<?php echo $uc;?>/avatar.php?uid='+data[i].uid+'&size=small"></dt><dd>'+
            
                '<p class="aui"><strong>'+data[i].author+'</strong>';
if("<?php echo $mythread['author'];?>"==="<?php echo $_G['username'];?>"){
s+='<em><a href="javascript:;" onclick="showWindow(\'hf\', \'plugin.php?id=dz55625_haodian:haodian_hf&op=hf&sid='+data[i].id+'\', \'get\', 0)" class="xi3"><?php echo $tmp_lang['huifusss'];?></a> | <a href="plugin.php?id=dz55625_haodian:haodian_hf&amp;op=del&amp;sid=<?php echo $_G['gp_sid'];?>&amp;did='+data[i].id+'"><?php echo $tmp_lang['adminshanchu'];?></a></em>';
}
s+='<span><?php echo $tmp_lang['listfb'];?> '+data[i].dateline+'</span></p>'+
                '<p class="aum">'+data[i].message+'</p>';
if(data[i].nickback){
s+='<p class="ahf"><?php echo $tmp_lang['dzhuifus'];?> '+data[i].nickback+'</p>';
}
                
            s+='</dd></dl>';
}
jq("#h_list").html(jq("#h_list").html()+s);
if((parseInt(ajax_data.page)*parseInt(ajax_data.pagenum))<ajax_data.counts){
jq("#pl_multis").html("<a href='javascript:ajax_haodian("+(ajax_data.page+1)+")' ><?php echo $tmp_lang['chaxung'];?></a>");
}else{
jq("#pl_multis").html("");
}
}else{
jq("#h_list").html('<ul class="cl erroe"><?php echo $tmp_lang['homerprno'];?></ul>');
}
}
 });
}
</script>


<div class="pl cl" id="h_list">
        
</div>
<div id="pl_multis"></div>
<script language="javascript" >ajax_haodian(1);</script>

</div>

</div>
<?php } elseif($p == 'listpic') { ?>
<div id="con_ss_2">
<ol>
    <link rel="stylesheet" type="text/css" href="source/plugin/dz55625_haodian/images/fancybox.css" />
    <script src="source/plugin/dz55625_haodian/images/jquery.fancybox-1.3.1.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
    var jqs = jQuery.noConflict(); 
    jqs(function(){ 
        jqs("a[rel=group]").fancybox({ 
            'titlePosition' : 'over', 
            'cyclic'        : true, 
            'titleFormat'    : function(title, currentArray, currentIndex, currentOpts) { 
                        return '<span id="fancybox-title-over">' + (currentIndex + 1) + 
     ' / ' + currentArray.length + (title.length ? '   ' + title : '') + '</span>'; 
                    } 
        }); 
    });
    </script>
    <?php include template('dz55625_haodian:photos'); ?>    <div class="pages cl"><?php echo $pmulti;?></div>
</ol>
</div>
<?php } elseif($p == 'news') { ?>
<div id="con_ss_5">
 <?php include template('dz55625_haodian:view_news'); ?></div>
<?php } elseif($p == 'shop') { ?>
<div id="con_ss_6">
<ul><?php include template('dz55625_haodian:view_shop'); ?></ul>
</div>
<?php } elseif($p == 'yuyue') { ?>
<div id="con_ss_7">
<ul><?php include template('dz55625_haodian:view_yuyue'); ?></ul>
</div>
<?php } ?>  

</div>