<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
  
<table class="tb tb2 ">
<tr><th colspan="15" class="partition"><?php echo $tmp_lang['adminlisth'];?>(<?php echo $counts;?>)<?php echo $tmp_lang['adminjia'];?></th></tr>
</table>

<table class="tb tb2 ">
    <tr>
    <td>
    <div style="line-height:2em">
    <h2><?php echo $tmp_lang['diyshuom_1'];?><span><?php if($kdiy==0) { ?>[ <a href="#" style="color:#F00"><?php echo $tmp_lang['diyshuom_2'];?></a> ]</span><?php } else { ?>[ <a href="<?php echo $appurl;?>&p=diy&d=yes"><?php echo $tmp_lang['diyshuom_3'];?></a> ]</span><?php } ?></h2>
<?php echo $tmp_lang['diyshuom'];?>
</div>
    </td>
    </tr>
</table> 

<table class="tb tb2 " style="border-bottom:1px dotted #DEEFFA">
<tr>
<td>
 <form method="post" autocomplete="off" action="<?php echo $appurl;?>&p=index" name="applyform">
 <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
 <input class="keyword" type="text" name="title" value="<?php echo $tmp_lang['shurujiansuo'];?>" onfocus="if(value=='<?php echo $tmp_lang['shurujiansuo'];?>') {value='';}this.style.color='#000';" onblur="if (value=='') {value='<?php echo $tmp_lang['shurujiansuo'];?>';this.style.color='#999';}"  style="height:25px; line-height:25px; margin:0 8px 0 0; padding:0 5px; width:230px; float:left" />
 <button type="submit" class="btn" style="border:1px #D4D4D4 solid; height:27px; float:left; width:70px; margin:0"><?php echo $tmp_lang['searchic'];?></button>
 </form>
</td></tr></table> 

<table class="tb tb2 ">
<tr class="header">
<th width="20"></th><th width="50"><?php echo $tmp_lang['adminpaixu'];?></th><th width="340"><?php echo $tmp_lang['addmingc'];?></th><th><?php echo $tmp_lang['adminzts'];?></th><th><?php echo $tmp_lang['hometime'];?></th><th><?php echo $tmp_lang['adminczuo'];?></th>
</tr>
<div>
<ul class="tab1">
<li class="current"><a href="<?php echo $appurl;?>"><span><?php echo $tmp_lang['adminduo'];?></span></a></li>
        <?php if(is_array($listclass)) foreach($listclass as $k => $v) { ?>        	<li><a href="<?php echo $appurl;?>&c=<?php echo $k;?>"><span><?php echo $v;?></span></a></li>
        <?php } ?>
</ul>
 </div>
 
 <form method="post" autocomplete="off" action="<?php echo $appurl;?>&p=index" name="applyform">

 <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
  <?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { ?>  
  <tr class="hover">
  <td><input type="checkbox" class="checkbox" name="piliang[]" value="<?php echo $mythread['id'];?>"></td>
    <td><input type="text" name="xnum[<?php echo $mythread['id'];?>]" value="<?php echo $mythread['xnum'];?>" size="4" /></td>
    <td><input type="text" class="txt" name="title[<?php echo $mythread['id'];?>]" value="<?php echo $mythread['title'];?>" style="width:320px;" /></td>
    <td>
    <?php if(empty($mythread['click'])) { ?>
    <a href="<?php echo $appurl;?>&p=vip&d=yes&id=<?php echo $mythread['id'];?>" onclick="return confirm('<?php echo $tmp_lang['avipadd'];?>')"><?php echo $tmp_lang['novip'];?></a> <span class="pipe">|</span>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=vip&d=no&id=<?php echo $mythread['id'];?>" style="color: #F00"><?php echo $tmp_lang['yesvip'];?></a>  <span class="pipe">|</span>
    <?php } ?> 
    
    <?php if(empty($mythread['topid'])) { ?>
    <a href="<?php echo $appurl;?>&p=topid&d=yes&id=<?php echo $mythread['id'];?>" onclick="return confirm('<?php echo $tmp_lang['toptixing'];?>')"><?php echo $tmp_lang['topnow'];?></a>  <span class="pipe">|</span>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=topid&d=no&id=<?php echo $mythread['id'];?>" style="color: #F90"><?php echo $tmp_lang['topyes'];?></a>  <span class="pipe">|</span>
    <?php } ?> 
    <?php if(empty($mythread['top'])) { ?>
    <a href="<?php echo $appurl;?>&p=top&tj=yes&id=<?php echo $mythread['id'];?>"><?php echo $tmp_lang['adminwtuijian'];?></a>  <span class="pipe">|</span>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=top&tj=no&id=<?php echo $mythread['id'];?>" style="color: #F90"><?php echo $tmp_lang['adminytuijian'];?></a>  <span class="pipe">|</span> 
    <?php } ?>
    
    <?php if($fidstart == '1') { ?>
    <?php if($mythread['tuis']=='1') { ?>
    	<a style="color:#F00"><?php echo $tmp_lang['ytuis'];?></a>  <span class="pipe">|</span> 
    <?php } elseif($mythread['tuis']=='0') { ?>
    	<a href="<?php echo $appurl;?>&p=tui&id=<?php echo $mythread['id'];?>"><?php echo $tmp_lang['wtuis'];?></a>  <span class="pipe">|</span> 
    <?php } ?>
    <?php } ?>
    
     <?php if(empty($mythread['display'])) { ?>
    <a href="<?php echo $appurl;?>&p=check&operation=yes&id=<?php echo $mythread['id'];?>" style="color:#F00"><?php echo $tmp_lang['adminshenhe'];?></a>
    <?php } else { ?>
    <a href="<?php echo $appurl;?>&p=check&operation=no&id=<?php echo $mythread['id'];?>" style="color:#090"><?php echo $tmp_lang['adminshenhek'];?></a>
    <?php } ?>

    </td>
    <td>
    <?php echo date('y-m-d',$mythread['dateline']); ?>    </td>
    <td>
    <a href="<?php echo $appurl;?>&amp;p=edit&amp;id=<?php echo $mythread['id'];?>"><?php echo $tmp_lang['adminbianji'];?></a> <a href="<?php echo $appurl;?>&amp;p=del&amp;id=<?php echo $mythread['id'];?>" onclick="return confirm('<?php echo $tmp_lang['adminshanchutx'];?>')"><?php echo $tmp_lang['adminshanchu'];?></a>
    </td>
  </tr>
  <?php } ?>
  <tr>
  <table>
  <input type="hidden" name="newid" value="<?php echo $mythread['id'];?>" size="1" />
&nbsp;<input type="checkbox" onclick="checkAll('prefix', this.form, 'piliang')" class="checkbox" id="chkallxm8R" name="chkall"><label for="chkallxm8R"><?php echo $tmp_lang['quanxuanok'];?></label>&nbsp;&nbsp;<input type="submit" value="VIP" name="applysubmvip" id="applysubmvip" class="btn">&nbsp;<input type="submit" value="<?php echo $tmp_lang['zhiding'];?>" name="applysubmzd" id="applysubmzd" class="btn">&nbsp;<input type="submit" value="<?php echo $tmp_lang['tuijiansok'];?>" name="applysubmtj" id="applysubmtj" class="btn">&nbsp;<input type="submit" value="<?php echo $tmp_lang['shenhesok'];?>" name="applysubmsh" id="applysubmsh" class="btn">&nbsp;<input type="submit" class="btn" id="applysubmdel" name="applysubmdel" value="<?php echo $tmp_lang['adminshanchu'];?>" />&nbsp;<input type="submit" class="btn" id="applysubmitz" name="applysubmitz" value="<?php echo $tmp_lang['paixusoks'];?>" />
  </table>
  </tr>
</form>  

</table>

<div class="cuspages right"><div class="pg"><?php echo $multis;?></div></div>
