<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table class="tb tb2 ">
<tr><th colspan="15" class="partition">展图信息管理</th></tr>
</table>
<table class="tb tb2 ">
<tr class="header">
<th>图片显示</th><th>发布时间</th><th>管理操作</th>
</tr><?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { ?><tr class="hover">
    <td><img src="<?php echo $mythread['img'];?>" width="120" height="90" /></td>
    <td><?php echo date('y-m-d',$mythread['dateline']); ?></td>
    <td>
    	<a href="<?php echo $appurl;?>&amp;p=del&amp;id=<?php echo $mythread['id'];?>">删除</a>
    </td>
  </tr>
<?php } ?>
<table>  
<?php echo $multis;?>