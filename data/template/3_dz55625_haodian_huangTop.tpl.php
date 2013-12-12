<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="indexHuang">

<h2><span><?php echo $tmp_lang['meiyuezj'];?><em><?php echo $tadayzj;?></em><?php echo $haodian['extcredits'][$extcredit]['title'];?>&nbsp; - &nbsp;<?php echo $tmp_lang['haishengs'];?><em><?php echo $shjengyuwp;?></em><?php echo $tmp_lang['huangjge'];?></span></h2>

<div id="qiangzu"><?php if($wpcount == '5' ) { ?><img src="source/plugin/dz55625_haodian/images/qiangzum.png" /><?php } else { ?><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/qiangzu.png" /></a> <?php } ?></div>

<dl>   
    <?php if(empty($wpcount)) { ?>
         <ol>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
         </ol>
    <?php } else { ?>
    <ul>
        <?php if(is_array($wangpus)) foreach($wangpus as $wangpu) { ?>                <li>
                    <strong><a href="<?php if($isdomain && $wangpu['domain']) { ?><?php echo $wangpu['domain'];?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $wangpu['sid'];?>.html<?php } else { ?><?php echo $curls;?><?php echo $wangpu['sid'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $wangpu['pic'];?>" /></a></strong>
                    <em><?php echo $wangpu['title'];?></em>
                </li>
        <?php } ?>
        
        <?php if($wpcount == '1') { ?>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
             <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
        <?php } elseif($wpcount == '2') { ?>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
             <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
        <?php } elseif($wpcount == '3') { ?>
            <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
             <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
        <?php } elseif($wpcount == '4') { ?>
             <li><a href="plugin.php?id=dz55625_haodian:haodian_zy&amp;mod=wp" onclick="showWindow('wp', this.href);return false;"><img src="source/plugin/dz55625_haodian/images/no.jpg"></a></li>
        <?php } ?>
           
   </ul>
   <?php } ?>
  </dl> 
</div>