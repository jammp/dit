<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($Ystart == '1') { ?>
<form method="post" enctype="multipart/form-data" action="plugin.php?id=dz55625_yuyue:yuyue&amp;action=add&amp;applysubmit=true" name="applyform">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
                <input type="hidden" name="newid" value="<?php echo $_GET['sid'];?>" />
                <table width="100%" border="1" bordercolor="#e3e3e3">
                	<?php if($_G['uid']) { ?>
                    <tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yusers'];?></td>
<td width="80%">&nbsp;<?php echo $_G['username'];?>&nbsp;</td>
</tr>
                    <?php } else { ?>
                    <tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yusers'];?></td>
<td width="80%">&nbsp;<?php echo $tmp_lang['userllli'];?>&nbsp;</td>
</tr>
                    <?php } ?>
<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['ynames'];?></td>
<td width="80%">&nbsp;<input type="text" name="name" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yaddress'];?></td>
<td width="80%">&nbsp;<input type="text" name="address" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
                    					<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['ytels'];?></td>
<td width="80%">&nbsp;<input type="text" name="tels" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
                    					<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yemail'];?></td>
<td width="80%">&nbsp;<input type="text" name="email" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
                    					<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yoicqs'];?></td>
<td width="80%">&nbsp;<input type="text" name="oicq" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
                    					<tr>
<td width="20%" height="35" bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['ytitles'];?></td>
<td width="80%">&nbsp;<input type="text" name="titles" style="width:308px; height:22px; line-height:22px;" /></td>
</tr>
<tr>
<td bgcolor="#F2F2F2" align="center" class="xw1"><?php echo $tmp_lang['yneirong'];?></td>
<td colspan="2">
<div class="tedt" style="width:98%;margin:5px auto;">
<textarea rows="5" cols="20" name="subject" class="pt" id="subject"></textarea>
</div>

</td>
</tr>
</table>

                <div style="text-align:center; margin:10px auto 0;">
<button type="submit" name="applysubmit" id="applysubmit" value="true" class="pn pnp" /><strong><?php echo $tmp_lang['listtjj'];?></strong></button>
    <button type="reset" name="sendreset" class="pn pnp" /><strong><?php echo $tmp_lang['chexiao'];?></strong></button>
</div>

</form>
<?php } ?>