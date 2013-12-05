<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style type="text/css">
.h2Bt{ width:100px; font-weight:bold}
#huandeng_d { border-top:1px #DEEFFB dotted}
#huandeng_d li{ border-bottom:1px #DEEFFB dotted; width:100%; float:left; padding:8px 0}
</style>
<script src="source/plugin/dz55625_haodian/images/jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
var h_index=0;
function addHuandeng(){
h_index=new Date().getTime();
var s='<li class="li_up_'+h_index+'"><?php echo $tmp_lang['wap_4'];?><input type="file" name="up_pic_'+h_index+'" style="width:300px; padding:3px;" /> &nbsp;&nbsp;<?php echo $tmp_lang['wap_6'];?><input type="text" name="conf[magic_lantern]['+h_index+'][link]" value=""  style="width:300px; padding:3px;" />&nbsp;&nbsp;<a href="javascript:;" onclick="delHaundeng('+h_index+')"><?php echo $tmp_lang['adminshanchu'];?></a></li>';
$("#huandeng_d").append(s);
$("#pic_link_ups").val($("#pic_link_ups").val()+""+h_index+"|");
}

function delHaundeng(index){
$("li").remove(".li_up_"+index);
var ss=index+"|";
$("#pic_link_ups").val($("#pic_link_ups").val().replace(ss,""));
}
</script>
<form action="<?php echo $appurl;?>&op=save" method="post" enctype="multipart/form-data" name="form1" id="form1" >
<input type="hidden" name="pic_link_ups" id="pic_link_ups"/>
<table class="tb tb2 ">
<tr><th colspan="15" class="partition"><?php echo $tmp_lang['wap_1'];?></th></tr>
</table>
<div class="wapList">
<table width="100%" class="tb tb2 ">
<tr>
<td class="h2Bt"><?php echo $tmp_lang['wap_2'];?></td>
<td><input type="text" name="conf[moble_pagenum]" value="<?php echo $conf['moble_pagenum'];?>" /></td>
</tr>
<tr>
<td class="h2Bt"><?php echo $tmp_lang['wap_3'];?></td>
<td><input type="radio" name="conf[ishuandeng]" id="hd_yes" <?php if($conf['ishuandeng']==1) { ?>checked<?php } ?> value="1" /><label for="hd_yes"><?php echo $tmp_lang['yikatongyes'];?></label><input type="radio" name="conf[ishuandeng]" id="hd_no" <?php if($conf['ishuandeng']==0) { ?>checked<?php } ?> value="0" /><label for="hd_no"><?php echo $tmp_lang['yikatongno'];?></label></td>
</tr>
</table>
<table width="100%" class="tb tb2 ">
<tr><td>
<ul id="huandeng_d"><?php if(is_array($conf['magic_lantern'])) foreach($conf['magic_lantern'] as $k => $v) { ?> 
<li class="li_up_<?php echo $k;?>"><?php echo $tmp_lang['wap_4'];?><input type="text" name="conf[magic_lantern][<?php echo $k;?>][pic]" value="<?php echo $v['pic'];?>" readonly="readonly" style="width:300px; padding:3px;" />&nbsp;&nbsp;<?php echo $tmp_lang['wap_6'];?><input type="text" name="conf[magic_lantern][<?php echo $k;?>][link]" value="<?php echo $v['link'];?>" style="width:300px; padding:3px;" />&nbsp;&nbsp;<a href="javascript:;" onclick="delHaundeng(<?php echo $k;?>)"><?php echo $tmp_lang['adminshanchu'];?></a></li>
<?php } ?>
</ul>
</td></tr>
</table>
<ol><button type="button"  onclick="addHuandeng()" class="btn"><?php echo $tmp_lang['wap_5'];?></button> &nbsp;&nbsp;<button type="submit" class="btn"><?php echo $tmp_lang['listtjj'];?></button></ol>
</div>
</form>