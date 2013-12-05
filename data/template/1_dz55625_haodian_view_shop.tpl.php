<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(!$_GET['sp']) { if($SpdConfig['start'] != '1') { ?>

<div class="tipGou">
<ol>
    	<?php echo $tmp_lang['shopcips'];?>&nbsp;&nbsp;[ <a href="http://addon.discuz.com/?@747.developer" target="_blank"><?php echo $tmp_lang['buyshop'];?></a> ]
    </ol>
</div>

<?php } else { if($Spcount!='0') { ?>
<div class="Shoping">
    <ul>
        <?php if(is_array($Spings)) foreach($Spings as $key => $Sping) { ?>           <dl>
           	<?php if($Sping['cprice']!='0' && $Sping['price'] > $Sping['cprice']) { ?><div class="c_ico"><img src="source/plugin/dz55625_haodian/images/c_ico.png"></div><?php } ?>
            <dt><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $Sping['id'];?>_vs<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=shop&sp=<?php echo $Sping['id'];?>&sid=<?php echo $_GET['sid'];?><?php } ?>"><img src="<?php echo $Sping['photos'];?>" /></a></dt> 
            <dd><strong><?php echo $Sping['title'];?></strong><em><?php if($Sping['cprice']!='0' && $Sping['price'] > $Sping['cprice']) { ?><?php echo $tmp_lang['leftkuoh'];?><?php echo $tmp_lang['mams'];?><?php echo $Sping['cprice'];?><?php echo $tmp_lang['rightkuoh'];?><?php } else { ?><?php echo $tmp_lang['leftkuoh'];?><?php echo $tmp_lang['mams'];?><?php echo $Sping['price'];?><?php echo $tmp_lang['rightkuoh'];?><?php } ?></em></dd> 
           </dl>
        <?php } ?>
    </ul>    
</div>
<?php echo $Spmulti;?>
<?php } else { ?>
<div class="Shoping">
<ul style="padding:10px 0 0px 10px;"><?php echo $tmp_lang['noaddnew'];?></ul>  
</div>
<?php } } } elseif($_GET['sp']) { ?>

<div class="Shopins"><?php if(is_array($Spins)) foreach($Spins as $Spin) { ?>    <h4><strong><?php echo $Spin['title'];?></strong><span><a onclick="showDialog('<?php echo $tmp_lang['querenhp'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_hshop:shop&option=haoping&sp=<?php echo $_GET['sp'];?>&sid=<?php echo $_GET['sid'];?>'; return false; })" id="haoping"><?php echo $tmp_lang['icohaoping'];?></a> | <a onclick="showDialog('<?php echo $tmp_lang['querencp'];?>', 'confirm', '<?php echo $tmp_lang['querentip'];?>', function () { window.location.href='plugin.php?id=dz55625_hshop:shop&option=chaping&sp=<?php echo $_GET['sp'];?>&sid=<?php echo $_GET['sid'];?>'; return false; })" id="chaping"><?php echo $tmp_lang['icochaping'];?></a></span></h4>
    <dl>
    
    <?php if($Spin['cprice']!='0' && $Spin['price'] > $Spin['cprice']) { ?><div class="cx_ico"><img src="source/plugin/dz55625_haodian/images/cx_ico.png"></div><?php } ?>
    
        <dt><img src="<?php echo $Spin['photos'];?>" /></dt>
        <dd>
        	<?php if($Spin['price'] > $Spin['cprice'] && $Spin['cprice']!='0') { ?><p style="text-decoration:line-through;"><strong><?php echo $tmp_lang['shichangjg'];?></strong> <?php echo $Spin['price'];?> <?php echo $tmp_lang['kkprice'];?></p><?php } else { ?><p><strong><?php echo $tmp_lang['shichangjg'];?></strong> <em><?php echo $Spin['price'];?></em> <?php echo $tmp_lang['kkprice'];?></p><?php } ?>
            <?php if($Spin['cprice']!='0' && $Spin['price'] > $Spin['cprice']) { ?><p><strong><?php echo $tmp_lang['cuxiaojg'];?></strong> <em><?php echo $Spin['cprice'];?></em> <?php echo $tmp_lang['kkprice'];?></p><?php } ?>
            <p><strong><?php echo $tmp_lang['chanphaop'];?></strong> <?php if($Spin['good']>$Spin['bad']) { ?><span><?php echo $tmp_lang['toptou'];?></span><?php } else { ?><?php echo $tmp_lang['toptou'];?><?php } ?> <?php echo $Spin['good'];?></p>
            <p><strong><?php echo $tmp_lang['chanpchap'];?></strong> <?php if($Spin['bad']>$Spin['good']) { ?><span><?php echo $tmp_lang['dowtou'];?></span><?php } else { ?><?php echo $tmp_lang['dowtou'];?><?php } ?> <?php echo $Spin['bad'];?></p>
            <p><strong><?php echo $tmp_lang['kucnumber'];?></strong> <?php echo $Spin['cnumber'];?> <?php echo $tmp_lang['kkjian'];?></p>
            <p><strong><?php echo $tmp_lang['lianxibuy'];?></strong> <a target="_blank" href=tencent://message/?uin=<?php echo $Spin['oicq'];?>&Site=<?php echo $_G['setting']['siteurl'];?>&Menu=yes>
<img src=http://wpa.qq.com/pa?p=5:<?php echo $Spin['oicq'];?>:16 alt="<?php echo $tmp_lang['listxiaoxixx'];?>" border="0" align="absmiddle">
</a></p>
            <p><strong><?php echo $tmp_lang['zuihtime'];?></strong> <em style="color: #999; font-family:Arial; font-size:12px"><?php echo $Spin['dateline'];?></em></p>
        </dd>
        
    </dl>
    <h5><strong><img src="source/plugin/dz55625_haodian/images/h5_ico.jpg" /></strong></h5>
    <ol>
        <?php echo $Spin['subject'];?>
    </ol>
<?php } ?>
</div>
<?php } ?>


