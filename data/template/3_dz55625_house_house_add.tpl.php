<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./source/plugin/dz55625_house/template/house_add.htm', './template/default/common/seditor.htm', 1386982742, 'dz55625_house', './data/template/3_dz55625_house_house_add.tpl.php', './source/plugin/dz55625_house/template', 'house_add')
;?>
<script src="source/plugin/dz55625_house/images/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="source/plugin/dz55625_house/images/swfobject.js" type="text/javascript"></script>
<script src="source/plugin/dz55625_house/images/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
var jq = jQuery.noConflict(); 
jq(document).ready(function() {
jq("#fileInput2").uploadify({
'uploader': 'source/plugin/dz55625_house/images/uploadify.swf',
'cancelImg': 'source/plugin/dz55625_house/images/cancel.png',
'script': 'plugin.php?id=dz55625_house:house_up',
'folder': 'source/plugin/dz55625_house/upimg/',
'multi': true,
'displayData': 'speed',
'fileDesc': 'Image(*.jpg;*.gif;*.png)',
'fileExt': '*.jpg;*.jpeg;*.gif;*.png',
'sizeLimit': <?php echo $picdx;?> ,
'queueSizeLimit' :<?php echo $picnum;?>, 
'buttonImg': 'source/plugin/dz55625_house/images/browseBtn.png',
'width': 88,
'height': 29,
'rollover': true,
onComplete: function (evt, queueID, fileObj, response, data) {
getResult(response);
}
});
});
</script>
<script type="text/javascript">
function getResult(content){
var board = document.getElementById("divTxt");
var boarda = document.getElementById("divTxts");
board.style.display="";
boarda.style.display="";
var newInput = document.createElement("input");
newInput.type = "hidden"; 
newInput.size = "45"; 
newInput.name="filelist[]";
var obj = board.appendChild(newInput);
var br= document.createElement("br"); 
board.appendChild(br);
obj.value=content;
}
</script>
<script language="javascript">
<!--
function validate(heform) {
<?php if($picstart=='1') { ?>
if(heform.pic.value == "") {
showError('您还没有上传封面图片');
return false;
} 
<?php } ?>
if(heform.mingchen.value == "") {
showError('您还没有输入小区名称');
return false;
} 
if(heform.propagandamessage.value == "") {
showError('您还没有输入房源描述');
return false;
} 
if(heform.tel.value == "") {
showError('您还没有输入联系电话');
return false;
} 	
if(heform.xingming.value == "") {
showError('您还没有输入联系姓名');
return false;
} 	
if(heform.oicq.value == "") {
showError('您还没有输入QQ号码');
return false;
} 			


return true;
}
-->
</SCRIPT>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>house.html<?php } else { ?>plugin.php?id=dz55625_house:house<?php } ?>"><?php echo $navtitle;?></a><em>&raquo;</em>信息发布
</div>
</div>
<div class="houseAdd cl">

<form action="" method="post" enctype="multipart/form-data" name="applyform" id="applyform" onsubmit="return validate(this)">
<input type="hidden" name="referer" value="<?php echo $_G['referer'];?>">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <div class="tablesx">
        <table border="0">
            <tr>
                <td class="tb2s">选择方式</td>
                <td style="width:874px">
                    <?php if(is_array($Fs_class)) foreach($Fs_class as $k => $v) { ?>                    <label><input type="radio" value="<?php echo $k;?>" name="fangshi" id="fangshi"><?php echo $v;?></label>
                    <?php } ?>
                </td>
            </tr>
         <tr>
            <td class="tb2s">封面设置</td>
            <td>&nbsp;<input type="file" name="file" size="29" id="pic" />&nbsp;<span> 格式支持(jpg,gif,png),大小不能超过<?php echo round($picdx/1000); ?>K</span></td>
        </tr>
        <tr>
            <td class="tb2s">小区名称</td>
            <td>&nbsp;<input name="mingchen" type="text" size="40" class="k" id="mingchen" /></td>
        </tr>
        <tr>
            <td class="tb2s">所在位置</td>
            <td>&nbsp;<select class="ps" name="local_1" onchange="ajaxget('plugin.php?id=dz55625_house:house&mod=add&action=getlocal&lid='+this.value, 'local_2')" />
            <?php if($local) { ?>
            <?php if(is_array($local)) foreach($local as $lid => $localname) { ?>            <option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
            <?php } ?>
            <?php } ?>
            </select>
            <span id="local_2" name="local_2"><?php echo $localshow;?></span>
        </tr>
        <tr>
            <td class="tb2s">房屋户型</td>
            <td>&nbsp;<input name="shi" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;室&nbsp;<input name="ting" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;厅&nbsp;<input name="wei" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;卫&nbsp;<input name="pingmi" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;平米</td>
        </tr>
        <tr>
            <td class="tb2s">所属楼层</td>
            <td>&nbsp;第&nbsp;<input name="dic" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层&nbsp;&nbsp;共&nbsp;<input name="gic" type="text" size="5" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层</td>
        </tr>
        <tr>
            <td class="tb2s">所属类型</td>
            <td>&nbsp;<select name="leixing">
            <?php if(is_array($Ls_class)) foreach($Ls_class as $k => $v) { ?>            <option value="<?php echo $k;?>"><?php echo $v;?></option>
            <?php } ?>
            </select>
            <select name="zhuangxiu">
            <?php if(is_array($Zs_class)) foreach($Zs_class as $k => $v) { ?>            <option value="<?php echo $k;?>"><?php echo $v;?></option>
            <?php } ?>
            </select>
            <select name="chaoxiang">
            <?php if(is_array($Cx_class)) foreach($Cx_class as $k => $v) { ?>            <option value="<?php echo $k;?>"><?php echo $v;?></option>
            <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td class="tb2x">房屋配置</td>
            <td>
                    <ul class="checklist peizhi">
                    <?php if(is_array($Pz_class)) foreach($Pz_class as $k => $v) { ?>                    <li><input type="checkbox" value="<?php echo $k;?>" name="peizhi[]"><?php echo $v;?></li>
<?php } ?>
                    </ul>
            </td>
        </tr>
        <tr>
            <td class="tb2s">房屋价格</td>
            <td>&nbsp;<input name="zujin" type="text" size="10" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;<select name="danwei">
            <?php if(is_array($Dw_class)) foreach($Dw_class as $k => $v) { ?>            <option value="<?php echo $k;?>"><?php echo $v;?></option>
            <?php } ?>
            </select>&nbsp;/月&nbsp;<select name="yajin">
            <?php if(is_array($Yj_class)) foreach($Yj_class as $k => $v) { ?>            <option value="<?php echo $k;?>"><?php echo $v;?></option>
            <?php } ?>
            </select>&nbsp;<span>如不填写则为面议</span></td>
        </tr>
        <tr>
            <td class="tb2x">房源描述</td>
            <td><div class="tedt" style="margin:0 auto; width:865px">
            <div class="bar">
            <?php $seditor = array('propaganda', array('bold', 'color', 'link'));?>            <script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="文字加粗" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="设置文字颜色" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="图片" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="添加链接" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="引用" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="代码" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@朋友" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@朋友</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div>            </div>
            <div class=area>
            <textarea id="propagandamessage" class="pt" rows="5" cols="40" name="subject"></textarea>
            </div>
            </div>
            </td>
        </tr>
        <tr>
            <td class="tb2x">多图展示</td>
            <td style="padding-top:5px">&nbsp;<input id="fileInput2" name="fileInput2" type="file" class="z" /><div class="fileInput5"><div id="divTxts" style="display:none">图片已经上传</div><input type="button" value="清除上传列表" onClick="javascript:jq('#fileInput2').uploadifyClearQueue();" id="fileInput3" ><input type="button" value="请先上传图片" onClick="javascript:jq('#fileInput2').uploadifyUpload();" id="fileInput4" ></div></td>
        </tr>
                <tr style="border-bottom:none">
            <td class="tb2s">联系电话</td>
            <td>&nbsp;<input name="tel" id="tel" type="text" size="40" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;&nbsp;联系人&nbsp;&nbsp;<input name="xingming" id="xingming" type="text" size="30" class="k" />&nbsp;&nbsp;联系QQ&nbsp;&nbsp;<input name="oicq" id="oicq" type="text" size="30" class="k" onkeyup="value=this.value.replace(/\D+/g,'')" /></td>
        </tr>

        </table>
    </div>
<div id="divTxt" style="display:none"></div>
    <div style="text-align:center; margin:10px auto 0;">
        <button type="submit" name="applysubmit" id="applysubmit" value="true" class="pn pnp" /><strong>确定</strong></button>
        <button type="reset" name="sendreset" class="pn pnp" /><strong>撤销</strong></button>
    </div>
</form>
</div>
