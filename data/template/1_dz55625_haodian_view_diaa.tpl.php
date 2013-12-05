<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_diaa');?><?php include template('common/header'); if($yhcount != '0') { ?>
<div class="dianzd">
<h2><strong><?php echo $tmp_lang['slistne'];?></strong><span><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vn<?php echo $_G['gp_zid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=news&sid=<?php echo $_GET['zid'];?><?php } ?>"><?php echo $tmp_lang['moregeng'];?></a></span></h2>
   <ul>
   <?php if(is_array($news)) foreach($news as $new) { ?>   	<li><strong><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $new['id'];?>_vn<?php echo $_G['gp_zid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=news&nw=<?php echo $new['id'];?>&sid=<?php echo $_GET['zid'];?><?php } ?>"><?php echo $new['title'];?></a></strong><span><?php echo $new['dateline'];?></span></li>
    <?php } ?>
   </ul>
</div>
<?php } else { ?>
<div class="dianzd">
<h2><strong><?php echo $tmp_lang['slistne'];?></strong><span><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vn<?php echo $_G['gp_zid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=news&sid=<?php echo $_GET['zid'];?><?php } ?>"><?php echo $tmp_lang['moregeng'];?></a></span></h2>
   <ul class="dianerr"><?php echo $tmp_lang['noaddnew'];?></ul>
</div>  
<?php } include template('common/footer'); ?>