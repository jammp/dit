<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="haodian_search">
    <dl><?php echo $tmp_lang['homeyy'];?> <em><?php echo $counts;?></em> <?php echo $tmp_lang['homerz'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tmp_lang['homerp'];?> <em><?php echo $countpl;?></em> <?php echo $tmp_lang['homett'];?></dl>
    <ul>
        <form name="search" action="" method="post">
<input type="text" onblur="if (value=='') {value='<?php echo $tmp_lang['pldpname'];?>';this.style.color='#999';}" onfocus="if(value=='<?php echo $tmp_lang['pldpname'];?>') {value='';}this.style.color='#000';" value="<?php echo $tmp_lang['pldpname'];?>" name="title" class="keyword">
<select name="type">
<option value="0"><?php echo $tmp_lang['plbiaot'];?></option>
<option value="1"><?php echo $tmp_lang['pldizhi'];?></option>
</select>
<button type="submit" class="search-submit"><?php echo $tmp_lang['homebtn'];?></button>
</form>

    </ul>
</div>
<style type="text/css">

</style>
<div class="diquclass">
<ul id="SenFe_1" class="xs cl">  
  <strong><a OnClick="SenFe_Code(this,'SenFe_1');" id="showmore" title="<?php echo $tmp_lang['zhankaiks'];?>"><img src="source/plugin/dz55625_haodian/images/tops.jpg" alt="<?php echo $tmp_lang['zhankaiks'];?>" /></a></strong>
    <li><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>.html<?php } else { ?><?php echo $appurl;?><?php } ?>"<?php if(empty($did)) { ?> class='haodian_hover'<?php } ?>><?php echo $tmp_lang['buxianzhi'];?></a></li>
        <?php if(is_array($local)) foreach($local as $id => $arrs) { ?>           <li><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cid;?>_<?php echo $arrs['id'];?>_<?php echo $epes;?>_0.html<?php } else { ?><?php echo $appurl;?>&c=<?php echo $cid;?>&d=<?php echo $arrs['id'];?>&e=<?php echo $epes;?>&sd=0<?php } ?>"<?php echo $av_d[$arrs['id']];?>><span><?php echo $arrs['subject'];?></span></a></li>
        <?php } ?>
</ul> 
<?php if($Crstart=='55625COM') { ?><style type="text/css">#dianpBot span{ display:none}</style><?php } if($subid) { ?>
<dl> 
<dd><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $_GET['c'];?>_<?php echo $_GET['d'];?>_<?php echo $epes;?>_0.html<?php } else { ?><?php echo $appurl;?>&c=<?php echo $_GET['c'];?>&d=<?php echo $_GET['d'];?>&e=<?php echo $epes;?>&sd=0<?php } ?>"<?php if(empty($sd)) { ?> class='haodian_hover'<?php } ?>><?php echo $tmp_lang['buxianzhi'];?></a></dd><?php if(is_array($locals)) foreach($locals as $d => $locala) { ?>    <dd><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cid;?>_<?php echo $locala['upid'];?>_<?php echo $epes;?>_<?php echo $locala['id'];?>.html<?php } else { ?><?php echo $appurl;?>&c=<?php echo $cid;?>&d=<?php echo $locala['upid'];?>&e=<?php echo $epes;?>&sd=<?php echo $locala['id'];?><?php } ?>"<?php echo $av_d[$locala['id']];?>><?php echo $locala['subject'];?></a></dd>
<?php } ?>
</dl>
<?php } ?>

</div>

<script>
function SenFe_Code(sname,sid){
if(document.getElementById(sid).className=="xs"){

document.getElementById(sid).className="yc";
sname.className="aaa";
sname.innerHTML='<img src="source/plugin/dz55625_haodian/images/bots.jpg" />';
}else{
document.getElementById(sid).className="xs";
sname.className="bbb";
sname.innerHTML='<img src="source/plugin/dz55625_haodian/images/tops.jpg" />';
}
}
</script>