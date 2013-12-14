<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_house/images/view.css" />

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu" <?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><em>&raquo;</em><a href="<?php if($RewriteStart == 1) { ?>house.html<?php } else { ?>plugin.php?id=dz55625_house:house<?php } ?>"><?php echo $navtitle;?></a><em>&raquo;</em>信息查看
</div>
</div>
<div class="houseView cl">
<script>
//function openCloseTab(obj){alert(obj.target)}
//function openCloseFolder(obj){alert(obj.id)}
window.onload=function(){
  var obj = document.getElementById("m1");
  var obj1 = obj.parentNode.getElementsByTagName("ul")[0].getElementsByTagName("a")[0];
  if(document.all){
    obj.click();   
    obj1.click();   
  }
  else{
    obj.onclick();
    obj1.onclick();
  }   
}
</script><?php if(is_array($mythreads)) foreach($mythreads as $mythread) { ?><div class="viewLeft z">

    <div id="viewL_a" class="z b">
    	<h2><strong><?php echo $mythread['mingchen'];?>&nbsp;<?php echo $mythread['shi'];?>室<?php echo $mythread['ting'];?>厅<?php echo $mythread['pingmi'];?>平米 </strong> <?php if($_G['uid'] != $mythread['uid'] ) { ?><span>发布时间：<?php echo $mythread['dateline'];?></span><?php } else { ?><em><a href="plugin.php?id=dz55625_house:house_user&amp;p=edit&amp;sid=<?php echo $mythread['id'];?>">[ 编辑当前信息 ]</a></em><?php } ?></h2>
        <dl class="cl">
         <?php if($mythread['topid']==1) { ?><div class="topid"></div><?php } ?>
        	<dt class="z">
            <?php if(empty($mythread['pic'])) { ?>
             <img src="source/plugin/dz55625_house/images/no2.gif" />
            <?php } else { ?>
            	<img src="<?php echo $mythread['pic'];?>" />
            <?php } ?>
            </dt>
            <dd class="y">
           		<p><strong>当前方式：</strong><?php if(!empty($mythread['fangshi'])) { ?><?php echo $mythread['fangshi'];?><?php } else { ?>整套出租<?php } ?></p>
            	<p><strong>当前价格：</strong><?php if($mythread['zujin']=='0') { ?><?php echo $mythread['yajin'];?><?php } else { ?><em><?php echo $mythread['zujin'];?></em> <?php echo $mythread['danwei'];?>/月&nbsp;&nbsp;<?php echo $mythread['yajin'];?><?php } ?></p>
                <p><strong>房屋户型：</strong><?php echo $mythread['shi'];?>室 <?php echo $mythread['ting'];?>厅 <?php echo $mythread['wei'];?>卫 <?php echo $mythread['pingmi'];?>平米</p>
                <p><strong>房屋情况：</strong><?php echo $mythread['leixing'];?> / <?php echo $mythread['zhuangxiu'];?> / 朝向：<?php echo $mythread['chaoxiang'];?></p>
                <p><strong>所属楼层：</strong>第<?php echo $mythread['dic'];?>层/共<?php echo $mythread['gic'];?>层</p>
                <p><strong>所属地区：</strong><?php echo $mythread['did'];?></p>
                <p><strong>联系方式：</strong><span><img src="plugin.php?id=dz55625_house:house_tel&amp;sid=<?php echo $_G['gp_sid'];?> " /></span> <?php if(!empty($mythread['xingming'])) { ?>( 联系人：<?php echo $mythread['xingming'];?> )<?php } ?></p>
                <p><strong>在线沟通：</strong><a target="_blank" href=tencent://message/?uin=<?php echo $mythread['oicq'];?>&Site=<?php echo $_G['setting']['siteurl'];?>&Menu=yes>
<img src=http://wpa.qq.com/pa?p=5:<?php echo $mythread['oicq'];?>:16 alt="联系QQ" border="0" align="absmiddle">
</a></p>

            </dd>
        </dl>
        <ul class="cl"><strong>( 电话归属地：<?php if(!empty($urltel)) { ?><?php echo $urltel;?><?php } else { ?>查无此号!<?php } ?> )</strong> <span>该房源待租、实拍照片、真实价格、真实描述，如您发现骗子或者虚假信息，请 <a onclick="showWindow('miscreport', 'misc.php?mod=report&amp;url='+REPORTURL);return false;" href="javascript:;">[ 立即举报 ]</a></span></ul>
    </div>
    
    
    <div id="viewL_f" class="z b">
    <ul>
<DIV class=bshare-custom><A class=bshare-qzone href="javascript:void(0);"></A><A class=bshare-sinaminiblog href="javascript:void(0);"></A><A class=bshare-renren href="javascript:void(0);"></A><A class=bshare-qqmb href="javascript:void(0);"></A><A class=bshare-douban href="javascript:void(0);"></A><A class=bshare-qqxiaoyou href="javascript:void(0);"></A><A class=bshare-qqshuqian href="javascript:void(0);"></A><A class=bshare-itieba href="javascript:void(0);"></A><A class=bshare-51 href="javascript:void(0);"></A><A class=bshare-tianya href="javascript:void(0);"></A><A class=bshare-sohuminiblog href="javascript:void(0);"></A><A class=bshare-neteasemb href="javascript:void(0);"></A><A class=bshare-kaixin001 href="javascript:void(0);"></A><A class="bshare-more bshare-more-icon more-style-sharethis" buttonIndex="0"></A><SPAN class="BSHARE_COUNT bshare-share-count">0</SPAN></DIV>
<script src="http://static.bshare.cn/b/buttonLite.js#style=-1&uuid=fba4e86d-5fec-4493-b554-d7b3b4736eb4&pophcol=2&lang=zh" type="text/javascript"></script>
<script src="http://static.bshare.cn/b/bshareC0.js" type="text/javascript"></script>
    </ul>
    <dl><a href="javascript:;" onclick="showWindow('code', 'plugin.php?id=dz55625_house:house_rw&action=code&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)" class="xi3">扫描二维码</a></dl>
    </div>
    <div id="viewL_b" class="z b">
        <h2><strong>房屋配置：</strong><?php if(empty($mythread['peizhi'])) { ?>暂无任何信息<?php } else { if(is_array($peizh)) foreach($peizh as $k => $v) { ?><span value=""><?php echo $Pz_class[$v];?></span><?php } } ?></h2>
        <h3>信息描述</h3>
        <ul>
        <?php if(empty($mythread['subject'])) { ?>暂无任何信息<?php } else { ?><?php echo $mythread['subject'];?><?php } ?>
        </ul>
        <dl>
        <?php if(is_array($psers)) foreach($psers as $pser) { ?>            	<hr><img src="<?php echo $pser['img'];?>"/>
            <?php } ?>
        </dl>
    </div>
    
</div>
<?php } ?>

<div class="viewRight y">
<div class="addBtn z cl">
<a  href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_add.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=add<?php } ?>" class="xia3"<?php echo $Clickwindow;?>>免费发布信息</a>
</div>

<div id="v_user" class="z b">
        <dl>
            <dt><img src="<?php echo $uc;?>/avatar.php?uid=<?php echo $mythread['uid'];?>&size=small" /></dt>
            <dd>
                <p><?php echo $mythread['author'];?></p>
                <p>已发布<em><?php echo $userco;?></em>条房源信息</p>
            </dd>
        </dl>   
    </div>
    <div id="v_other" class="z b">
    	<h2><strong>该会员其他房源</strong><span><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_uid_<?php echo $mythread['uid'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=user&uid=<?php echo $mythread['uid'];?><?php } ?>"<?php echo $Clickwindow;?>>+more+</a></span></h2>
        <?php if(is_array($uesrs)) foreach($uesrs as $uesr) { ?>            <dl>
                <dt>
                <?php if(empty($uesr['pic'])) { ?>
                 <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $uesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $uesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_house/images/no.gif" /></a>
                <?php } else { ?>
                    <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $uesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $uesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $uesr['pic'];?>" /></a>
                <?php } ?>
                </dt>
                <dd>
               		<p><?php echo $uesr['mingchen'];?></p>
                	<p><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $uesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $uesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $uesr['shi'];?>室<?php echo $uesr['ting'];?>厅<?php echo $uesr['pingmi'];?>平米</a></p>
                    <p><?php if($uesr['zujin']=='0') { ?>面议<?php } else { ?><em><?php echo $uesr['zujin'];?></em><?php echo $uesr['danwei'];?>/月<?php } ?></p>
                </dd>
            </dl>
        <?php } ?>
    </div>
    <div id="v_common" class="z b">
        <h2><strong>站内推荐房源</strong></h2>
        <?php if($cuserco=='0') { ?>
        	<ul>暂无任何信息</ul>
        <?php } else { ?>
        <?php if(is_array($cuesrs)) foreach($cuesrs as $cuesr) { ?>        <style type="text/css">#v_common{ border-bottom:none}</style>
            <dl>
                <dt>
                <?php if(empty($cuesr['pic'])) { ?>
                 <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="source/plugin/dz55625_house/images/no.gif" /></a>
                <?php } else { ?>
                    <a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><img src="<?php echo $cuesr['pic'];?>" /></a>
                <?php } ?>
                </dt>
                <dd>
               		<p><?php echo $cuesr['mingchen'];?></p>
                	<p><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $cuesr['id'];?>.html<?php } else { ?>plugin.php?id=dz55625_house:house&mod=view&sid=<?php echo $cuesr['id'];?><?php } ?>"<?php echo $Clickwindow;?>><?php echo $cuesr['shi'];?>室<?php echo $cuesr['ting'];?>厅<?php echo $cuesr['pingmi'];?>平米</a></p>
                    <p><?php if($cuesr['zujin']=='0') { ?>面议<?php } else { ?><em><?php echo $cuesr['zujin'];?></em><?php echo $cuesr['danwei'];?>/月<?php } ?></p>
                </dd>
            </dl>
        <?php } ?>
        <?php } ?>
    </div>
</div>





</div>
