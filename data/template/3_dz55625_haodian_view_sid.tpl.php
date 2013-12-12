<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="shangVier cl">
<div class="users">

 <dl>
        <dt>
        <h2></h2>
            <div class="rate">
                <div class="big_rate">
                    <span rate="2">&nbsp;</span>
                    <span rate="4">&nbsp;</span>
                    <span rate="6">&nbsp;</span>
                    <span rate="8">&nbsp;</span>
                    <span rate="10">&nbsp;</span>
                    <div style="width:45px;" class="big_rate_up"></div>
                </div>
                    <p><span id="s" class="s"></span><span id="g" class="g"></span></p>
                <div id="my_rate"></div>
            </div>  
        </dt>
        <dd id="user_v">
            <strong><img src="plugin.php?id=dz55625_haodian:attclass&amp;action=ercode&amp;sid=<?php echo $_GET['sid'];?>" /></strong>
        	<span>
            	<p id="namea">
                 <?php echo $tmp_lang['ercode'];?>
                </p>
                <p id="names">
                <b><?php echo $tmp_lang['viewdianzhu'];?></b> <a href="home.php?mod=space&amp;uid=<?php echo $mythread['uid'];?>&amp;do=profile"><?php echo $mythread['author'];?></a>
                </p>
                <p id="namex"><a href="home.php?mod=space&amp;uid=<?php echo $mythread['uid'];?>&amp;do=profile"<?php echo $Clickwindow;?>><?php echo $tmp_lang['listkj'];?></a><a class="xi2" onclick="showWindow(this.id, this.href, 'get', 0);" id="a_poke_1" href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $mythread['uid'];?>&amp;handlekey=propokehk_1"><?php echo $tmp_lang['listzh'];?></a></p>
                <p id="namez">
                 <?php if(!empty($mythread['tenqq'])) { ?><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $mythread['tenqq'];?>&amp;site=qq&amp;menu=yes" target="_blank"><img border="0" title="<?php echo $tmp_lang['listxiaoxixx'];?>" alt="<?php echo $tmp_lang['listxiaoxixx'];?>" src="http://wpa.qq.com/pa?p=2:<?php echo $mythread['tenqq'];?>:16"></a><?php } ?></p>
                
            </span>
        </dd>
        <dd id="user_x">
        	<p><a id="shoucang" style="margin-right:15px" onclick="AddFavorite();return false" rel="sidebar"><?php echo $tmp_lang['viewshoucang'];?></a></p>
           	<p><?php if($mythread['renling']=='1'||$mythread['click']=='1') { ?><a id="yrenling"><?php echo $tmp_lang['ybeirenling'];?></a><?php } else { ?><a href="javascript:;" onclick="showWindow('renling', 'plugin.php?id=dz55625_haodian:attclass&action=getrling&mod=view&sid=<?php echo $_G['gp_sid'];?>', 'get', 0)" id="renling"><?php echo $tmp_lang['viewrenling'];?></a><?php } ?></p>
        </dd>
    </dl>
</div>

<!-----------自助区域开始------------->
<?php if($zhu_Start == '1') { ?>
<script type="text/javascript">
function show_window(aid,type){

var code=Math.random()*1000;
var v_code=parseInt(Math.random()*1000);
var key="tc";
var url='plugin.php?id=dz55625_haodian_buffet:buffet_hv_pup&aid='+aid+'&type='+type+'&timeStamp='+new Date().getTime();
showWindow(key,url,'get',0);
}
function showbuffet(ar_id,buffet_id){
hideWindow("tc");
var url='plugin.php?id=dz55625_haodian_buffet:buffet_hv_pup_s&ar_id='+ar_id+'&buffet_id='+buffet_id+'&timeStamp='+new Date().getTime();
showWindow("ty",url,'get',0);
}
function payok(){
var payzf=jq('input:radio[name=payfs]:checked').val();
if(!payzf){
alert("<?php echo $tmp_lang['v_zhizhu_5'];?>"); 
return;
}
var arid=jq("#arid").val();
var url='plugin.php?id=dz55625_haodian_buffet:buffet_pay&bid='+jq("#buffetid").val()+'&aid='+arid+'&pay='+payzf+"&ishv=1";
hideWindow('ty');
showWindow('hd',url, 'get', 0);
}
</script>
<div class="L_zizhu cl" style="margin-top:0;">
<h2><strong><?php echo $tmp_lang['v_zhizhu'];?></strong><span><a href="<?php if($RewriteStart == 1) { ?>haodian_zizhu.html<?php } else { ?>plugin.php?id=dz55625_haodian:haodian_user&p=zizhu<?php } ?>" target="_blank"><?php echo $tmp_lang['moregeng'];?></a></span></h2>
    <ul>
        <dl>
         <dt id="v_z_vip">
             <?php if($mythread['click']=='1') { ?>
             <a href="javascript:;" title="<?php echo $tmp_lang['v_zhizhu_1'];?>" id="v_z_vip_a"><?php echo $tmp_lang['v_zhizhu_1'];?></a>
             <?php } else { ?>
              <a href="javascript:;" onclick="show_window(<?php echo $mythread['id'];?>,'vip')" title="<?php echo $tmp_lang['v_zhizhu_2'];?>"><?php echo $tmp_lang['v_zhizhu_2'];?></a>
             <?php } ?>
         </dt>
        </dl>
        <dl>
         <dt id="v_z_tui">
             <?php if($mythread['top']=='1') { ?>
             <a href="javascript:;" title="<?php echo $tmp_lang['v_zhizhu_3'];?>" id="v_z_tui_a"><?php echo $tmp_lang['v_zhizhu_3'];?></a>
             <?php } else { ?>
             <a href="javascript:;" onclick="show_window(<?php echo $mythread['id'];?>,'tj')" title="<?php echo $tmp_lang['v_zhizhu_3'];?>"><?php echo $tmp_lang['v_zhizhu_3'];?></a>
             <?php } ?>
         </dt>
        </dl>
        <dl>
         <dt id="v_z_top">
         <?php if($mythread['topid']=='1') { ?>
             <a href="javascript:;" title="<?php echo $tmp_lang['v_zhizhu_4'];?>" id="v_z_top_a"><?php echo $tmp_lang['v_zhizhu_4'];?></a>
             <?php } else { ?>
             <a href="javascript:;" onclick="show_window(<?php echo $mythread['id'];?>,'zd')" title="<?php echo $tmp_lang['v_zhizhu_4'];?>"><?php echo $tmp_lang['v_zhizhu_4'];?></a>
             <?php } ?>
         </dt>
        </dl>
    </ul>
</div>
<?php } ?>
<!-----------自助区域结束------------->
</div>
<script>
function AddFavorite() {
stitle = "<?php echo $mythread['title'];?>", 
note = "<?php echo $tmp_lang['viewshoucno'];?>";
    try {
        window.external.addFavorite(document.location.href, stitle);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(stitle, document.location.href, "");
        }
        catch (e) {
            alert(note);
        }
    }
}
</script>

