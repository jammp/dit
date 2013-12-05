<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(count($huandes)) { ?>
<link rel="stylesheet" type="text/css" href="source/plugin/dz55625_hadone/images/body.css" />
<style type="text/css">
.shangHuan{ width:300px; height:<?php echo $hadConfig['hheight'];?>px; background:#e3e3e3; margin:10px auto 0; overflow:hidden}
.focusa{ overflow:hidden; width:<?php echo $hadConfig['hwidth'];?>px; height:<?php echo $hadConfig['hheight'];?>px; position:relative; margin:0 auto 10px }
.f426x240{width:<?php echo $hadConfig['hwidth'];?>px; height:<?php echo $hadConfig['hheight'];?>px; overflow:hidden}
.f426x240 img{width:<?php echo $hadConfig['hwidth'];?>px; height:<?php echo $hadConfig['hheight'];?>px}
</style>

<div class="focusa">
    <ul class="rslides f426x240">
     <?php if(is_array($huandes)) foreach($huandes as $huande) { ?>        <li><a href="<?php echo $huande['tid'];?>"<?php echo $Clickwindow;?>><img src="<?php echo $huande['pic'];?>" /></a></li>
     <?php } ?>  
    </ul>
</div>

<script src="source/plugin/dz55625_hadone/images/lrtk.js" type="text/javascript"></script>
<script type="text/javascript">
jq(function() {
    jq(".f426x240").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 700,
        maxwidth: <?php echo $hadConfig['hwidth'];?>
    });
});
</script>
<?php } ?>
