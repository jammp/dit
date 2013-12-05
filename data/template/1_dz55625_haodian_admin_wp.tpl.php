<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table class="tb tb2 ">
<tr><th colspan="15" class="partition"><?php echo $tmp_lang['adminlisth'];?>(<?php echo $allnum;?>)<?php echo $tmp_lang['adminjia'];?></th></tr>
</table>
<table class="tb tb2 ">
<tr class="header">
<th><?php echo $tmp_lang['adminbianhao'];?></th><th><?php echo $tmp_lang['adminuser'];?></th><th><?php echo $tmp_lang['listmc'];?></th><th><?php echo $tmp_lang['hometim'];?></th><th><?php echo $tmp_lang['xiajiashijian'];?></th><th><?php echo $tmp_lang['adminczuo'];?></th>
</tr>
        
  <?php if(is_array($manylist)) foreach($manylist as $key => $o) { ?>  <tr class="hover">
    <td><?php echo $key+1+$begin; ?></td>
    <td><?php echo $o['author'];?></td>
    <td><?php echo $o['title'];?></td>
    <td><?php echo date('y-m-d',$o['dateline']); ?></td>
    <td><?php echo date('y-m-d H:s:i',$o['createtime']); ?></td>
    <td>
    <a href="<?php echo $appurl;?>&amp;p=del&amp;id=<?php echo $o['id'];?>" onclick="return confirm('<?php echo $tmp_lang['adminshanchutx'];?>')"><?php echo $tmp_lang['adminshanchu'];?></a>
    </td>
  </tr>
  <?php } ?>
  
</table>
<p>&nbsp;</p>
<div class="cuspages right"><div class="pg"><?php echo $pagenav;?></div></div>
