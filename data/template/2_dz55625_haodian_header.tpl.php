<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./source/plugin/dz55625_haodian/template/header.htm', './template/default/common/header_common.htm', 1386853119, 'dz55625_haodian', './data/template/2_dz55625_haodian_header.tpl.php', './source/plugin/dz55625_haodian/template', 'header')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
    <script src="source/plugin/dz55625_haodian/images/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="source/plugin/dz55625_haodian/images/view.css" />
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>


<div style="width:100%; height:51px">
    <div id="toptbs" class="cl">
    <div class="wp">
    	<div class="z">
            <ul>
            <li id="navi" style="border-bottom:none"><a href="<?php if($isdomain && $haodiaon_view_back) { ?><?php echo $haodiaon_view_back;?><?php } elseif($RewriteStart == 1) { ?><?php echo $curl;?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian<?php } ?>"><?php echo $tmp_lang['viewlist'];?></a></li>
            <li <?php if($p == 'index' || $p == '') { ?>class="hover"<?php } else { ?>id="navc"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=index&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['viewabout'];?></a></li>
            <?php if($active['click']==1) { ?><li <?php if($p == 'news') { ?>class="hover"<?php } else { ?>id="navg"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vn<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=news&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['viewanews'];?></a></li><?php } ?>
            <li <?php if($p == 'listpic') { ?>class="hover"<?php } else { ?>id="navd"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vp<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=listpic&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['viewphoto'];?></a></li>
            
             <?php if($ShopFw=='1') { ?> 
             <?php if($StHop=='1') { ?><li <?php if($p == 'shop') { ?>class="hover"<?php } else { ?>id="navf"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vs<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=shop&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['viewshop'];?></a></li><?php } ?>
             <?php } elseif($ShopFw=='2') { ?>
            <?php if($active['click']==1 && $StHop=='1') { ?><li <?php if($p == 'shop') { ?>class="hover"<?php } else { ?>id="navf"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vs<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=shop&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['viewshop'];?></a></li><?php } ?>
            <?php } ?>
            
            <?php if($Ystart == '1') { ?><li <?php if($p == 'yuyue') { ?>class="hover"<?php } else { ?>id="navg"<?php } ?>><a href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_vy<?php echo $_G['gp_sid'];?>.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian&mod=view&p=yuyue&sid=<?php echo $_GET['sid'];?><?php } ?>"><?php echo $tmp_lang['yuyuesi'];?></a></li><?php } ?>
            </ul>
        </div>
        <div class="y">
        <?php if($active['author'] == $_G['username']) { ?>
<a onMouseOver="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});" id="qmenu" href="javascript:;" initialized="true" class=""><?php echo $tmp_lang['kadmintl'];?></a>
        <?php } else { ?>   
       			<a id="qmenu" class=""><?php echo $tmp_lang['kadmintl'];?></a>    
        <?php } ?> 
        </div>
        </div>
    </div>
</div>
<?php if(!IS_ROBOT) { ?>
        <div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
            <?php if($_G['uid']) { ?>
            <ul>
<?php if($active['click']==1) { ?><li><a style="background-image:url(static/image/feed/friend_b.png) !important" href="javascript:;" onClick="showWindow('yh', 'plugin.php?id=dz55625_haodian:haodian_yh', 'get', 0)" ><?php echo $tmp_lang['newadds'];?></a></li><?php } if($ShopFw=='1') { ?> 
<?php if($StHop=='1') { ?><li><a style="background-image:url(static/image/feed/thread_b.png) !important" href="javascript:;" onClick="showWindow('addshop', 'plugin.php?id=dz55625_hshop:shop&option=add&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)"><?php echo $tmp_lang['shopadd'];?></a></li><?php } ?> 
 <?php } elseif($ShopFw=='2') { if($active['click']==1 && $StHop=='1') { ?><li><a style="background-image:url(static/image/feed/thread_b.png) !important" href="javascript:;" onClick="showWindow('addshop', 'plugin.php?id=dz55625_hshop:shop&option=add&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)"><?php echo $tmp_lang['shopadd'];?></a></li><?php } ?> 
<?php } ?>
           
<?php if($active['click']==1) { ?><li><a style="background-image:url(static/image/feed/favorite_b.png) !important" href="javascript:;" onClick="showWindow('beijing', 'plugin.php?id=dz55625_haodian:haodian_dz&action=bg&mod=view&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)" ><?php echo $tmp_lang['beijinggl'];?></a></li><?php } if($active['click']==1) { ?><li><a style="background-image:url(static/image/feed/magic_b.png) !important" href="javascript:;" onClick="showWindow('dianzhao', 'plugin.php?id=dz55625_haodian:haodian_dz&action=dz&mod=view&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)" ><?php echo $tmp_lang['dianzhaogl'];?></a></li><?php } ?>
<li><a style="background-image:url(static/image/feed/medal_b.png) !important" href="<?php if($RewriteStart == 1) { ?><?php echo $curl;?>_user.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian_user<?php } ?>" target="_blank"><?php echo $tmp_lang['viewadmins'];?></a></li>
<?php if($zhu_Start==1) { ?><li><a style="background-image:url(static/image/feed/ranklist_b.png) !important" href="plugin.php?id=dz55625_haodian:haodian_user&amp;p=zizhu"><?php echo $tmp_lang['v_zizhu_7'];?></a></li><?php } ?>
            </ul>
            <?php } elseif($_G['connectguest']) { ?>
                <div class="ptm pbw hm">
                    è¯·å…ˆ<br /><a class="xi2" href="member.php?mod=connect"><strong>å®Œå–„å¸å·ä¿¡æ¯</strong></a> æˆ– <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>ç»‘å®šå·²æœ‰å¸å·</strong></a><br />åä½¿ç”¨å¿«æ·å¯¼èˆª
                </div>
            <?php } else { ?>
                <div class="ptm pbw hm">
                    è¯· <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>ç™»å½•</strong></a> åä½¿ç”¨å¿«æ·å¯¼èˆª<br />æ²¡æœ‰å¸å·ï¼Ÿ<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
                </div>
            <?php } ?>
        </div>
<?php } ?>
    
<script type="text/javascript">
var jqz = jQuery.noConflict(); 
jqz.fn.smartFloat = function() {
var position = function(element) {
var top = element.position().top, pos = element.css("position");
jqz(window).scroll(function() {
var scrolls = jqz(this).scrollTop();
if (scrolls > top) { //Èç¹û¹ö¶¯µ½Ò³Ãæ³¬³öÁËµ±Ç°ÔªËØelementµÄÏà¶ÔÒ³Ãæ¶¥²¿µÄ¸ß¶È
if (window.XMLHttpRequest) { //Èç¹û²»ÊÇie6
element.css({
position: "fixed",
top: 0
}).addClass("shadow");	
} else { //Èç¹ûÊÇie6
element.css({
top: scrolls
});	
}
}else {
element.css({
position: pos,
top: top
}).removeClass("shadow");	
}
});
};
return jqz(this).each(function() {
position(jqz(this));						 
});
};
jqz(function(){
jqz("#toptbs").smartFloat();
});
</script>

<div id="wp" class="wp">