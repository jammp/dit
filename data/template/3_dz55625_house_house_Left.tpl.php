<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script src="source/plugin/dz55625_house/images/jquery-1.3.2.min.js" type="text/javascript"></script>        
<div class="H_search border">
<h2>
<strong>共有 <b><?php echo $counts;?></b> 条房源信息</strong>
    <span>
            <form action="" method="post" name="form">
            <input type="text" name="mingchen" value="输入您要检索的小区名称" onfocus="if(value=='输入您要检索的小区名称') {value='';}this.style.color='#000';" onblur="if (value=='') {value='输入您要检索的小区名称';this.style.color='#999';}" /><button type="submit">小区检索</button>
        </form>
    </span>
</h2>
<ul class="cl">
<li><strong>区域：</strong><a href="<?php if($RewriteStart == 1) { ?>house.html<?php } else { ?>plugin.php?id=dz55625_house:house<?php } ?>">不限</a><?php if(is_array($local)) foreach($local as $id => $arrs) { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $arrs['id'];?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $arrs['id'];?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $av_d[$arrs['id']];?>><?php echo $arrs['subject'];?></a><?php } ?></li>
    <?php if($subid) { ?>
    <li> 
    <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $_G['gp_a'];?>_0_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $locala['upid'];?>&b=<?php echo $locala['id'];?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>">不限</a>
    <?php if(is_array($locals)) foreach($locals as $d => $locala) { ?>     <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $locala['upid'];?>_<?php echo $locala['id'];?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $locala['upid'];?>&b=<?php echo $locala['id'];?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $av_d[$locala['id']];?>><?php echo $locala['subject'];?></a>
    <?php } ?>
    </li>
    <?php } ?>
    <li><strong>价格：</strong><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_0_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=0&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>">不限</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_500_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=500&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['500'];?>>500元以下</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_1000_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=1000&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['1000'];?>>500-1000元</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_1500_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=1500&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['1500'];?>>1000-1500元</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_2000_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=2000&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['2000'];?>>1500-2000元</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_3000_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=3000&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['3000'];?>>2000-3000元</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_4500_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=9000&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['9000'];?>>3000-9000元</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_5000_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=10000&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['10000'];?>>万元以上</a></li>
    
    <li><strong>厅室：</strong><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_0_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=0&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>">不限</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_1_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=1&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['1'];?>>一室</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_2_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=2&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['2'];?>>两室</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_3_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=3&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['3'];?>>三室</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_4_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=4&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['4'];?>>四室</a><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_5_<?php echo $zypes;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=5&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $a_hover['5'];?>>四室以上</a></li>
    
    <li><strong>方式：</strong>
    <?php if(is_array($Fs_class)) foreach($Fs_class as $k => $v) { ?>    <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $k;?>_<?php echo $fypes;?>_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $k;?>&f=<?php echo $fypes;?>&g=<?php echo $gypes;?><?php } ?>"<?php echo $e_hover[$k];?>><?php echo $v;?></a>
    <?php } ?> 
    </li>
</ul>
<dl>
    <dt>
        <p><?php if($_G['gp_f']=='1') { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_0_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=0&g=<?php echo $gypes;?><?php } ?>"<?php echo $f_hover['1'];?>>时间正序</a><?php } else { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_1_<?php echo $gypes;?>.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=1&g=<?php echo $gypes;?><?php } ?>"<?php echo $f_hover['0'];?>>时间倒序</a><?php } ?></p>
    </dt>
    <dd>
    <p style="border-left:none"><?php if($_G['gp_g']=='1') { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_0.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=0<?php } ?>" id="pca">文字列表</a><?php } else { ?><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $did;?>_<?php echo $sd;?>_<?php echo $types;?>_<?php echo $dypes;?>_<?php echo $zypes;?>_<?php echo $fypes;?>_1.html<?php } else { ?><?php echo $appurl;?>&a=<?php echo $did;?>&b=<?php echo $sd;?>&c=<?php echo $types;?>&d=<?php echo $dypes;?>&e=<?php echo $zypes;?>&f=<?php echo $fypes;?>&g=1<?php } ?>" id="pcb">图片列表</a><?php } ?></p>
    </dd>
</dl>
</div>


<?php if($_G['gp_g'] == '1') { ?>
<div class="H_list cl">
<?php if($mythreads) { ?>
    <ul>
        <?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { ?>        <li class="cl" <?php if($mythread['topid']=='1') { ?>style="background:#FFFDE6"<?php } else { ?>onmouseover="this.style.background='#FFFDE6'" onmouseout="this.style.background=''"<?php } ?>><strong><?php if($mythread['topid']==1) { ?><img src="source/plugin/dz55625_house/images/vip_ica.png" /><?php } ?> [<?php echo $mythread['fangshi'];?>] <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $mythread['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $mythread['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $mythread['mingchen'];?>&nbsp;<?php echo $mythread['shi'];?>室<?php echo $mythread['ting'];?>厅<?php echo $mythread['pingmi'];?>平米</a></strong>  <span><?php if($mythread['zujin']!=0) { ?><b><?php echo $mythread['zujin'];?></b>/月<?php } else { ?>面议<?php } ?></span> <em><?php echo $mythread['dateline'];?></em></li>
        <?php } ?>
    </ul>
     <?php } else { ?>
    <dl>暂无任何信息</dl>
<?php } ?>
</div>
<?php echo $multis;?>
<?php } elseif($_G['gp_g'] == '0' || $_G['gp_g'] == '') { ?>
<div class="H_lisp cl">
<?php if($mythreads) { ?>
        <?php if(is_array($mythreads)) foreach($mythreads as $key => $mythread) { ?>       
        <dl class="cl">
            <dt class="H_pic">
             <?php if($mythread['topid']==1) { ?><div class="topid"></div><?php } ?>
            <?php if(empty($mythread['pic'])) { ?>
             <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $mythread['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $mythread['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_house/images/no.gif" /></a>
            <?php } else { ?>
            	<a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $mythread['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $mythread['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $mythread['pic'];?>" /></a>
            <?php } ?>
            </dt>
            <dd class="H_title">
            	<p class="Htit"><strong>[<?php echo $mythread['fangshi'];?>]</strong> <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $mythread['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $mythread['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $mythread['mingchen'];?>&nbsp;<?php echo $mythread['shi'];?>室<?php echo $mythread['ting'];?>厅<?php echo $mythread['pingmi'];?>平米</a></p>
            	<p class="Hmsn"><?php echo $mythread['subject'];?></p>
                <p class="Hmsz"><?php echo $mythread['dic'];?>/<?php echo $mythread['gic'];?>层 , 朝向:<?php echo $Cx_class[$mythread['chaoxiang']];?></p>
            </dd>
            <dd class="H_zuj">
            	<?php if($mythread['zujin']!=0) { ?><b><?php echo $mythread['zujin'];?></b> <?php echo $mythread['danwei'];?>/月<?php } else { ?>面议<?php } ?>
            </dd>
        </dl>
        <?php } ?>
 <?php } else { ?>
    <ul>暂无任何信息</ul>
<?php } ?>
</div>
<?php echo $multis;?>
<?php } ?>

<script src="source/plugin/dz55625_house/images/jq.js" type="text/javascript"></script>

