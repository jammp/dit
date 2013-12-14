<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
  
<table class="tb tb2 ">
<tr><th colspan="15" class="partition">共有 <b><?php echo $counts;?></b> 条房源信息</th></tr>
</table>

<table class="tb tb2 " style="border-bottom:1px dotted #DEEFFA">
<tr>
<td>
 <form method="post" autocomplete="off" action="<?php echo $appurl;?>&p=index" name="applyform">
 <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
 <input class="keyword" type="text" name="mingchen" value="输入您要检索的小区名称" onfocus="if(value=='输入您要检索的小区名称') {value='';}this.style.color='#000';" onblur="if (value=='') {value='输入您要检索的小区名称';this.style.color='#999';}"  style="height:25px; line-height:25px; margin:0 8px 0 0; padding:0 5px; width:230px; float:left" />
 <button type="submit" class="btn" style="border:1px #D4D4D4 solid; height:27px; float:left; width:70px; margin:0">小区检索</button>
 </form>
</td></tr></table> 

<table class="tb tb2 ">
<tr class="header">
<th width="20"></th><th width="50">排序</th><th width="340">名称</th><th>状态切换</th><th>时间</th><th>操作</th>
</tr>

 
 <form method="post" autocomplete="off" action="<?php echo $appurl;?>&p=index" name="applyform">

 <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
  <?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { ?>  
  <tr class="hover">
  <td><input type="checkbox" class="checkbox" name="piliang[]" value="<?php echo $mythread['id'];?>"></td>
    <td><input type="text" name="xnum[<?php echo $mythread['id'];?>]" value="<?php echo $mythread['xnum'];?>" size="4" /></td>
    <td><?php echo $mythread['mingchen'];?>&nbsp;<?php echo $mythread['shi'];?>室<?php echo $mythread['ting'];?>厅<?php echo $mythread['pingmi'];?>平米</td>
    <td>
    <?php if(empty($mythread['topid'])) { ?>
    <a href="<?php echo $appurl;?>&p=topid&d=yes&id=<?php echo $mythread['id'];?>">未推广</a>  <span class="pipe">|</span>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=topid&d=no&id=<?php echo $mythread['id'];?>" style="color: #F90">已推广</a>  <span class="pipe">|</span>
    <?php } ?> 
    <?php if(empty($mythread['top'])) { ?>
    <a href="<?php echo $appurl;?>&p=top&tj=yes&id=<?php echo $mythread['id'];?>">未推荐</a>  <span class="pipe">|</span>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=top&tj=no&id=<?php echo $mythread['id'];?>" style="color: #F90">已推荐</a>  <span class="pipe">|</span> 
    <?php } ?>
     <?php if(empty($mythread['display'])) { ?>
    <a href="<?php echo $appurl;?>&p=check&operation=yes&id=<?php echo $mythread['id'];?>" style="color:#F00">未审核</a>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=check&operation=no&id=<?php echo $mythread['id'];?>" style="color:#090">已审核</a>
    <?php } ?>
    </td>
    <td>
    <?php echo date('y-m-d',$mythread['dateline']); ?>    </td>
    <td>
    <a href="<?php echo $appurl;?>&amp;p=edit&amp;id=<?php echo $mythread['id'];?>">编辑</a> <a href="<?php echo $appurl;?>&amp;p=del&amp;id=<?php echo $mythread['id'];?>">删除</a>
    </td>
  </tr>
  <?php } ?>
  <tr>
  <table>
  <input type="hidden" name="newid" value="<?php echo $mythread['id'];?>" size="1" />
&nbsp;<input type="checkbox" onclick="checkAll('prefix', this.form, 'piliang')" class="checkbox" id="chkallxm8R" name="chkall"><label for="chkallxm8R">全选</label>&nbsp;&nbsp;<input type="submit" value="推广" name="applysubmzd" id="applysubmzd" class="btn">&nbsp;<input type="submit" value="推荐" name="applysubmtj" id="applysubmtj" class="btn">&nbsp;<input type="submit" value="审核" name="applysubmsh" id="applysubmsh" class="btn">&nbsp;<input type="submit" class="btn" id="applysubmdel" name="applysubmdel" value="删除" />&nbsp;<input type="submit" class="btn" id="applysubmitz" name="applysubmitz" value="更新排序" />
  </table>
  </tr>
</form>  

</table>

<div class="cuspages right"><div class="pg"><?php echo $multis;?></div></div>
