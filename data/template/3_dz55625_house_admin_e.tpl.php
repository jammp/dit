<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style type="text/css">
.h2Bt{ width:60px; font-weight:bold;}
.listx td{ height:30px}
</style>
<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_house/images/body.css" />
<table class="tb tb2 ">
<tr><th colspan="15" class="partition">房源信息修改</th></tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input name="pic" type="hidden" id="pic" value="<?php echo $info['pic'];?>" size="80"  />
  <table class="tb tb2 listx">
  
  
<tr>
<td class="h2Bt">发布会员</td>
<td><?php echo $info['author'];?></td>
</tr>

<tr>
<td class="h2Bt">选择方式</td>
<td><?php if(is_array($Fs_class)) foreach($Fs_class as $k => $v) { ?><label><input type="radio" value="<?php echo $k;?>" name="fangshi" <?php if($k==$info['fangshi']) { ?>checked="checked"<?php } ?>><?php echo $v;?></label>
<?php } ?>
</td>
</tr>

<tr>
<td class="h2Bt">封面设置</td>
<td><img src="<?php echo $info['pic'];?>" width="140" height="100" /><br /><input type="file" name="file" size="29" /></td>
</tr>

<tr>
<td class="h2Bt">小区名称</td>
<td><input name="mingchen" type="text" size="40" class="k" value="<?php echo $info['mingchen'];?>" /></td>
</tr>
        
<tr>
<td class="h2Bt">所在位置</td>
<td>
<select class="ps" name="local_1" onchange="ajaxget('plugin.php?id=dz55625_house:house&mod=add&action=getlocal&lid='+this.value, 'local_2')" />
<?php if($local) { if(is_array($local)) foreach($local as $lid => $localname) { ?><option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
<?php } } ?>
</select>
<span id="local_2" name="local_2"><?php echo $localshow;?></span>
</td>
</tr>


<tr>
<td class="h2Bt">房屋户型</td>
<td><input name="shi" type="text" size="5" class="k" value="<?php echo $info['shi'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/>&nbsp;室&nbsp;<input name="ting" type="text" size="5" class="k" value="<?php echo $info['ting'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;厅&nbsp;<input name="wei" type="text" size="5" class="k" value="<?php echo $info['wei'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;卫&nbsp;<input name="pingmi" type="text" size="5" class="k" value="<?php echo $info['pingmi'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;平米</td>
</tr>

<tr>
<td class="h2Bt">所属楼层</td>
<td>第&nbsp;<input name="dic" type="text" size="5" class="k" value="<?php echo $info['dic'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层&nbsp;&nbsp;共&nbsp;<input name="gic" type="text" size="5" class="k" value="<?php echo $info['gic'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层</td>
</tr>
    
<tr>
<td class="h2Bt">所属类型</td>
<td>&nbsp;<select name="leixing"><?php if(is_array($Ls_class)) foreach($Ls_class as $k => $v) { ?><option value="<?php echo $k;?>" <?php if($k==$info['leixing']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } ?>
</select>
<select name="zhuangxiu"><?php if(is_array($Zs_class)) foreach($Zs_class as $k => $v) { ?><option value="<?php echo $k;?>" <?php if($k==$info['zhuangxiu']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } ?>
</select>
<select name="chaoxiang"><?php if(is_array($Cx_class)) foreach($Cx_class as $k => $v) { ?><option value="<?php echo $k;?>" <?php if($k==$info['chaoxiang']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } ?>
</select>
</td>
</tr>
    
<tr>
<td class="h2Bt">房屋配置</td>
<td><ul class="checklist peizhi">
                    <?php if(is_array($Pz_class)) foreach($Pz_class as $k => $v) { ?>                    <li><input type="checkbox" value="<?php echo $k;?>" name="peizhi[]" <?php if($k==$array[$k]) { ?>checked="checked"<?php } ?>><?php echo $v;?> </li>
<?php } ?>
                    </ul></td>
</tr>
<tr>
<td class="h2Bt">房屋价格</td>
<td><input name="zujin" type="text" size="10" class="k" value="<?php echo $info['zujin'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;<select name="danwei">
            <?php if(is_array($Dw_class)) foreach($Dw_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['danwei']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>&nbsp;/月&nbsp;<select name="yajin"><?php if(is_array($Yj_class)) foreach($Yj_class as $k => $v) { ?><option value="<?php echo $k;?>" <?php if($k==$info['yajin']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
<?php } ?>
</select>&nbsp;<span>如不填写则为面议</span></td>
</tr>
    
   
<tr>
<td class="h2Bt">房源描述</td>
<td><label>
<textarea name="subject" cols="80" rows="5" id="ainfo"><?php echo $info['subject'];?></textarea>
</label>
</td>
</tr>

<tr>
<td class="tb2s">联系电话</td>
<td><input name="tel" type="text" size="30" class="k"  value="<?php echo $info['tel'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/>&nbsp;&nbsp;联系人&nbsp;&nbsp;<input name="xingming" type="text" size="30" class="k"  value="<?php echo $info['xingming'];?>"/>&nbsp;&nbsp;联系QQ&nbsp;&nbsp;<input name="oicq" type="text" size="30" class="k"  value="<?php echo $info['oicq'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/></td>
</tr>   

    
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="更新信息" class="btn" />
      </label></td>
    </tr>
  </table>
</form>
