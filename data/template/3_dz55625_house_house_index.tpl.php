<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('house_index');?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="source/plugin/dz55625_house/images/body.css" />
<?php if(!$_G['gp_mod']) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>house.html<?php } else { ?>plugin.php?id=dz55625_house:house<?php } ?>"><?php echo $navtitle;?></a>
</div>
</div>

<?php if($hus != $stu || $housekign != $hurlz) { ?>
<div class="haomsn cl"><h2>提醒：您当前使用的是盗版程序或者您的购买网址与授权网址不对应而造成的无法访问。</h2><br>
	<strong>解决方法一：</strong><br>
	购买正版授权：<a href="http://addon.discuz.com/?@747.developer" target="_blank">点击购买正版</a><br>>----------------------------------------------------------------------------------------<br>
	<strong>解决方法二：</strong><br>
	进入网站后台 > 应用 > 应用中心 > 点击右上角的网站信息<br />
	<img src="source/plugin/dz55625_house/images/d_a.gif" /><br /><br />按照图示修改完后进入应用中心找到插件重新安装一下即可(不用卸载,直接安装覆盖即可)<br />>----------------------------------------------------------------------------------------<br>
	<strong>解决方法三：</strong><br>
	直接联系在线客服Q反馈问题。<a href="http://addon.discuz.com/?@747.developer" target="_blank">更多免费插件购买</a>
	</div>
<?php } else { ?>
<div class="houseAr cl">
    <div id="houseLeft" class="z">
    <?php include template('dz55625_house:house_Left'); ?>    </div>
    <div id="houseRight" class="y">
    <?php include template('dz55625_house:house_Right'); ?>    </div>
</div>
<?php } } elseif($_G['gp_mod'] == 'add') { include template('dz55625_house:house_add'); } elseif($_G['gp_mod'] == 'view') { ?>    
    <?php include template('dz55625_house:house_view'); } elseif($_G['gp_mod'] == 'user') { ?>    
    <?php include template('dz55625_house:house_name'); } include template('common/footer'); ?>         