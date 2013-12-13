<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="addBtn z cl">
<a  href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_add.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=add<?php } ?>" class="xia3"<?php echo $Clickwindow;?>>免费发布信息</a>
</div>
<div class="addBtn z cl" style="margin-top:8px">
<a  href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_user.html<?php } else { ?>plugin.php?id=dz55625_house:house_user<?php } ?>" class="xia2"<?php echo $Clickwindow;?>>房源信息管理</a>
</div>
<div class="H_Recommend border z cl">
<h2>推荐房源信息</h2>
        <?php if($cuserco=='0') { ?>
        	<ul>暂无任何信息...</ul>
        <?php } else { ?>
        <?php if(is_array($cuesrs)) foreach($cuesrs as $cuesr) { ?>        <style type="text/css">.H_Recommend{ border-bottom:none}</style>
            <dl>
                <dt>
                <?php if(empty($cuesr['pic'])) { ?>
                 <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_house/images/no.gif" /></a>
                <?php } else { ?>
                    <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $cuesr['pic'];?>" /></a>
                <?php } ?>
                </dt>
                <dd>
               		<p><?php echo $cuesr['mingchen'];?></p>
                	<p><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $cuesr['shi'];?>室<?php echo $cuesr['ting'];?>厅<?php echo $cuesr['pingmi'];?>平米</a></p>
                    <p><?php if($cuesr['zujin']=='0') { ?>面议<?php } else { ?><em><?php echo $cuesr['zujin'];?></em><?php echo $cuesr['danwei'];?>/月<?php } ?></p>
                </dd>
            </dl>
        <?php } ?>
        <?php } ?>
</div>
<div class="H_Ad z cl">
<a href="<?php echo $Radlink;?>" target="_blank"><img src="<?php echo $Radimg;?>" /></a>
</div>