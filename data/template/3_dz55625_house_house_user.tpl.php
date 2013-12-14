<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('house_user');
0
|| checktplrefresh('./source/plugin/dz55625_house/template/house_user.htm', './template/default/common/seditor.htm', 1386943373, 'dz55625_house', './data/template/3_dz55625_house_house_user.tpl.php', './source/plugin/dz55625_house/template', 'house_user')
;?><?php include template('common/header'); ?><script src="source/plugin/dz55625_house/images/jquery-1.3.2.min.js" type="text/javascript"></script>
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

<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_house/images/body.css" />

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>house.html<?php } else { ?>plugin.php?id=dz55625_house:house<?php } ?>"><?php echo $navtitle;?></a><em>&raquo;</em>信息管理中心
</div>
</div>

<div class="ct2_a wp cl" id="ct" style="margin-bottom:10px">

<div class="mn uaddkk">
<div class="bm bw0">
<?php if($p == 'index') { ?>
<style type="text/css">
.mn table tr a{ float:left; padding:0 5px 0 0; background:none; margin:0; border:none; color:#2873C2}
.mn table tr.hover{ border-bottom:1px #e3e3e3 dashed; height:32px; line-height:32px;}
</style>
<div class="user_list">       
<table width="100%">
    <tr class="header">
    <th>&nbsp;&nbsp;房源名称</th><th>发布时间</th><th>当前状态</th><th>管理操作</th>
    </tr>
    <?php if($counts=='0') { ?>
<tr><table width="100%"><tr><td style="text-align:center; padding:10px;"><a href="plugin.php?id=dz55625_house:house&amp;mod=add" style="color:#2873C2" target="_blank">暂无任何房源信息 [发布]~</a></td></tr></table></tr>
    <?php } else { ?>
    <?php if(is_array($manylist)) foreach($manylist as $key => $o) { ?>    <tr class="hover">
        <td><?php if($o['topid']==1) { ?><font color="#FF0000">[推广]</font><?php } ?><a href="plugin.php?id=dz55625_house:house&amp;mod=view&amp;sid=<?php echo $o['id'];?>" target="_blank" <?php if($o['click']==1) { ?>style="color:red"<?php } ?>><?php echo $o['mingchen'];?>&nbsp;<?php echo $o['shi'];?>室<?php echo $o['ting'];?>厅</a></td>
        <td><?php echo date('y-m-d',$o['dateline']); ?></td>
        <td>
            <?php if(empty($o['display'])) { ?>
            <span style="color:#F00">未审核</span>
            <?php } else { ?>
            <span style="color:#090">已审核</span>
            <?php } ?>
        </td>
        <td><a href="<?php echo $appurls;?>&amp;p=edit&amp;sid=<?php echo $o['id'];?>">编辑</a> <a href="<?php echo $appurls;?>&amp;p=del&amp;sid=<?php echo $o['id'];?>">删除</a></td>
    </tr>
    <?php } ?>
    <?php } ?>
</table>
</div>            
<div style=" width:100%; height:auto; float:left;"><?php echo $multir;?></div>
<?php } elseif($p == 'edit') { ?>
<div id="picpn">
<a href="plugin.php?id=dz55625_house:house_user&amp;p=listpic&amp;sid=<?php echo $_G['gp_sid'];?>" style="background:#2770C0">图片管理(<?php echo $pcinfo;?> 张图片)</a>
<a href="plugin.php?id=dz55625_house:house&amp;mod=view&amp;sid=<?php echo $_G['gp_sid'];?>" style="background:#009900"<?php echo $Clickwindow;?>>预览此信息</a>
    <a href="plugin.php?id=dz55625_house:house_user&amp;p=index">返回信息列表</a>
</div>
 
<style type="text/css">
.h2Bt{ width:60px; font-weight:bold; text-align:center}
.listx td{ height:30px}
</style>
<div id="picps" style="padding-bottom:10px">
<form method="post" enctype="multipart/form-data" action="plugin.php?id=dz55625_house:house_user&amp;p=edit&amp;sid=<?php echo $_G['gp_sid'];?>&amp;applysubmit=true" name="applyformx">
<input name="pic" type="hidden" id="pic" value="<?php echo $info['pic'];?>" size="80"  />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="tb2 listx" border="1">
            <tr>
                <td class="h2Bt">选择方式</td>
                <td>
                    <?php if(is_array($Fs_class)) foreach($Fs_class as $k => $v) { ?>                    <label><input type="radio" value="<?php echo $k;?>" name="fangshi" <?php if($k==$info['fangshi']) { ?>checked="checked"<?php } ?>><?php echo $v;?></label>
                    <?php } ?>
                </td>
            </tr>
         <tr>
            <td class="h2Bt">封面设置</td>
            <td>&nbsp;<input type="file" name="file" size="29" />&nbsp;<span> 格式支持(jpg,gif,png),大小不能超过<?php echo round($picdx/1000); ?>K</span></td>
        </tr>
        <tr>
            <td class="h2Bt">小区名称</td>
            <td>&nbsp;<input name="mingchen" type="text" size="40" class="k" value="<?php echo $info['mingchen'];?>" /></td>
        </tr>
        <tr>
            <td class="h2Bt">所在位置</td>
            <td>&nbsp;<select class="ps" name="local_1" onchange="ajaxget('plugin.php?id=dz55625_house:house&mod=add&action=getlocal&lid='+this.value, 'local_2')" />
                <?php if($local) { ?>
                <?php if(is_array($local)) foreach($local as $lid => $localname) { ?>                <option value="<?php echo $lid;?>" <?php if($lid == $localupid) { ?> selected <?php } ?> ><?php echo $localname['subject'];?></option>
                <?php } ?>
                <?php } ?>
            </select>
            <span id="local_2" name="local_2"><?php echo $localshow;?></span>
        </tr>
        <tr>
            <td class="h2Bt">房屋户型</td>
            <td>&nbsp;<input name="shi" type="text" size="5" class="k" value="<?php echo $info['shi'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/>&nbsp;室&nbsp;<input name="ting" type="text" size="5" class="k" value="<?php echo $info['ting'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;厅&nbsp;<input name="wei" type="text" size="5" class="k" value="<?php echo $info['wei'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;卫&nbsp;<input name="pingmi" type="text" size="5" class="k" value="<?php echo $info['pingmi'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;平米</td>
        </tr>
        <tr>
            <td class="h2Bt">所属楼层</td>
            <td>&nbsp;第&nbsp;<input name="dic" type="text" size="5" class="k" value="<?php echo $info['dic'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层&nbsp;&nbsp;共&nbsp;<input name="gic" type="text" size="5" class="k" value="<?php echo $info['gic'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;层</td>
        </tr>
        <tr>
            <td class="h2Bt">所属类型</td>
            <td>&nbsp;<select name="leixing">
            <?php if(is_array($Ls_class)) foreach($Ls_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['leixing']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>
            <select name="zhuangxiu">
            <?php if(is_array($Zs_class)) foreach($Zs_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['zhuangxiu']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>
            <select name="chaoxiang">
            <?php if(is_array($Cx_class)) foreach($Cx_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['chaoxiang']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td class="h2Bt">房屋配置</td>
            <td><ul class="checklist peizhi">
                    <?php if(is_array($Pz_class)) foreach($Pz_class as $k => $v) { ?>                    <li><input type="checkbox" value="<?php echo $k;?>" name="peizhi[]" <?php if($k==$array[$k]) { ?>checked="checked"<?php } ?>><?php echo $v;?> </li>
<?php } ?>
                    </ul>
                    </td>
        </tr>
        <tr>
            <td class="h2Bt">房屋价格</td>
            <td>&nbsp;<input name="zujin" type="text" size="10" class="k" value="<?php echo $info['zujin'];?>" onkeyup="value=this.value.replace(/\D+/g,'')" />&nbsp;<select name="danwei">
            <?php if(is_array($Dw_class)) foreach($Dw_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['danwei']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>&nbsp;/月&nbsp;<select name="yajin">
            <?php if(is_array($Yj_class)) foreach($Yj_class as $k => $v) { ?>            <option value="<?php echo $k;?>" <?php if($k==$info['yajin']) { ?>selected="selected"<?php } ?>><?php echo $v;?></option>
            <?php } ?>
            </select>&nbsp;<span>如不填写则为面议</span></td>
        </tr>
        <tr>
            <td class="tb2x">房源描述</td>
            <td><div class="tedt" style="margin:0 auto; width:730px">
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
            <textarea id="propagandamessage" class="pt" rows="5" cols="20" name="subject"><?php echo $info['subject'];?></textarea>
            </div>
            </div>
            </td>
        </tr>
        
                        <tr style="border-bottom:none">
            <td class="tb2s">联系电话</td>
            <td>&nbsp;<input name="tel" type="text" size="30" class="k"  value="<?php echo $info['tel'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/>&nbsp;&nbsp;联系人&nbsp;&nbsp;<input name="xingming" type="text" size="30" class="k"  value="<?php echo $info['xingming'];?>"/>&nbsp;&nbsp;联系QQ&nbsp;&nbsp;<input name="oicq" type="text" size="30" class="k"  value="<?php echo $info['oicq'];?>" onkeyup="value=this.value.replace(/\D+/g,'')"/></td>
        </tr>

        </table>
    <div style="text-align:center; margin:10px auto 0;">
        <button type="submit" name="applysubmit" id="applysubmit" value="true" class="pn pnp" /><strong>确定</strong></button>
        <button type="reset" name="sendreset" class="pn pnp" /><strong>撤销</strong></button>
    </div>
</form>       
</div>        
<?php } elseif($p == 'listpic') { ?>
<div class="listpic">
<form method="post" enctype="multipart/form-data" action="plugin.php?id=dz55625_house:house_user&amp;p=listpic&amp;action=upic&amp;sid=<?php echo $_G['gp_sid'];?>&amp;applysubmits=true" name="applyformx">
<input name="img" type="hidden" id="img" value="<?php echo $info['img'];?>" size="80"  />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="listpa">
        <?php if(is_array($cuesrs)) foreach($cuesrs as $cuesr) { ?>            <dl>
           	 <dt><img src="<?php echo $cuesr['img'];?>" /></dt>
                <dd>
                    <p><input name="img" type="text" size="80" class="k" value="<?php echo $cuesr['img'];?>" disabled="true" /> </p>
                    <p><a href="plugin.php?id=dz55625_house:house_user&amp;p=listpic&amp;action=del&amp;sid=<?php echo $_G['gp_sid'];?>&amp;pid=<?php echo $cuesr['id'];?>">删除</a></p>
                </dd>
            </dl>
        <?php } ?>
</div>
<div class="listpb">        
    <table width="100%">
            <tr>
                <td style="padding-top:5px">&nbsp;<input id="fileInput2" name="fileInput2" type="file" class="z" /><div class="fileInput5"><div id="divTxts" style="display:none">图片已经上传</div><input type="button" value="清除上传列表" onClick="javascript:jq('#fileInput2').uploadifyClearQueue();" id="fileInput3" ><input type="button" value="请先上传图片" onClick="javascript:jq('#fileInput2').uploadifyUpload();" id="fileInput4" ></div></td>
            </tr>
         <tr>
    </table>
</div>
<div id="divTxt" style="display:none"></div>
<div style="text-align:center; margin:10px auto 0;">
    <button type="submit" name="applysubmits" id="applysubmits" value="true" class="pn pnp" /><strong>确定</strong></button>
    <button type="reset" name="sendreset" class="pn pnp" /><strong>撤销</strong></button>
</div>
</form>          
</div>       
<?php } ?>
    </div>
</div>


    <div class="appl" style=" ">
        <div class="tbn">
            <h2 class="mt bbda">信息管理面板</h2>
            <ul>
                <li <?php if($p == 'index' || $p == 'edit') { ?>class="a"<?php } ?>><a href="<?php echo $appurls;?>&amp;p=index">房源信息管理</a></li>
                <li <?php if($p == 'listpic') { ?>class="a"<?php } ?>><a href="#">图片信息管理</a></li>
            </ul>
        </div>
    </div>
    
</div><?php include template('common/footer'); ?> 