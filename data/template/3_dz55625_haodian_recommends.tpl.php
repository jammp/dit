<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div id="haodian">
     <h2><strong><?php echo $tmp_lang['homedtj'];?></strong></h2>
      <div class="hdxx cl">  
     <?php if($tuijians) { ?>        
    <?php if(is_array($tuijians)) foreach($tuijians as $key => $tuijian) { ?>    <dl>
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