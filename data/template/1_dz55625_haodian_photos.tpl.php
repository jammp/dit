<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="pl cl">
<?php if($shopimgs) { ?>
    <ul class="cl">
        <?php if(is_array($shopimgs)) foreach($shopimgs as $key => $shopimg) { ?>                <li>
                    <span><a rel="group" href="<?php echo $shopimg['original_url'];?>" title="<?php echo $shopimg['title'];?>"><img alt="" src="<?php echo $shopimg['shrink_url'];?>" /></a></span>
                    <strong><?php echo $shopimg['title'];?></strong>
                </li>
            <?php } ?> 
    </ul>
 <?php } else { ?> 
    <ul style="padding:0px 0 6px 10px"><?php if($mythread['author'] == $_G['username']) { ?><?php echo $tmp_lang['wupicsj'];?><?php } else { ?><?php echo $tmp_lang['wupicsjs'];?><?php } ?> </ul>     
 <?php } ?>    
</div>
