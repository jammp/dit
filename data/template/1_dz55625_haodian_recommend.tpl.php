<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
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
<div class="Menuboxs z cl">
    <ul>
        <li id="tt1" onclick="setTab('tt',1,2)" class="hover"><?php echo $tmp_lang['homedtj'];?></li>
        <li id="tt2" onclick="setTab('tt',2,2)" style="width:128px;"><?php echo $kaname;?></li>
    </ul>
</div>

<div class="Contentboxs z cl"> 

    <div id="con_tt_1" class="hover">
            <div class="hdxx cl">  
            <?php if($tuijians) { ?>        
                <?php if(is_array($tuijians)) foreach($tuijians as $key => $tuijian) { ?>                    <dl>
                        <dt>
                        <?php if(!empty($tuijian['pic'])) { ?>
                        <a href="<?php if($isdomain && $tuijian['domain']) { ?><?php echo $tuijian['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $tuijian['id'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $tuijian['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $tuijian['pic'];?>"></a>
                        <?php } else { ?>
                        <a href="<?php if($isdomain && $tuijian['domain']) { ?><?php echo $tuijian['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $tuijian['id'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $tuijian['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_haodian/images/over2.jpg" /></a>
                        <?php } ?>
                        </dt>
                        <dd>
                        <strong><a href="<?php if($isdomain && $tuijian['domain']) { ?><?php echo $tuijian['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $tuijian['id'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $tuijian['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $tuijian['title'];?></a></strong>
                        <span><?php echo $tuijian['tel'];?></span>
                        </dd>
                    </dl>
                <?php } ?> 
            <?php } else { ?> 
                <ul class="erroe"><?php echo $tmp_lang['homewtj'];?></ul>
            <?php } ?> 
            </div>
        
    </div>

    <div id="con_tt_2" style="display:none">
    	<ul>
        <?php if($yikas) { ?>        
         <?php if(is_array($yikas)) foreach($yikas as $key => $yika) { ?>        	<li><a href="<?php if($isdomain && $yika['domain']) { ?><?php echo $yika['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $yika['id'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $yika['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $yika['title'];?></a></li>
          <?php } ?> 
           <?php } else { ?> 
                <li style="padding:0; border:none"><?php echo $tmp_lang['homewtj'];?></li>
            <?php } ?>
        </ul>
    </div>

</div>