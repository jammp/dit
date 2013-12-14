<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('common/header_ajax'); ?><style type="text/css">
.userAddyh{ width:160px; height:191px;}
.userAddyh h2{ height:25px; width:100%; padding-top:5px; background:#F0F0F0; border-bottom:1px #e3e3e3 solid}
.userAddyh h2 strong{ float: left; padding-left:10px;}
.userAddyh h2 a{ float:right; padding-right:5px;}
.userAddyh ul{ width:150px; height:150px; margin:5px auto; border:1px #e3e3e3 solid}
.userAddyh ul img{ width:150px; height:150px}
</style>
<div class="userAddyh">
    <h2><strong>扫描二维码</strong><a href="javascript:;" onClick="hideWindow('<?php echo $_G['gp_handlekey'];?>');" class="flbc" title="关闭">关闭</a></h2>
    <ul>
    	<img src="plugin.php?id=dz55625_house:house_code&amp;sid=<?php echo $_G['gp_sid'];?>" />
    </ul>
</div><?php include template('common/footer_ajax'); ?>