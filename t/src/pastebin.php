
<form name="editor" method="post" action="<?php echo $CONF['this_script']?>">
<input type="hidden" name="parent_pid" value="<?php echo isset($page['post']['pid'])?$page['post']['pid']:'' ?>"/>

<br/> 
<?php

echo t('Syntax highlighting:').'<select name="format">';

//show the popular ones
foreach ($CONF['all_syntax'] as $code=>$name)
{
	if (in_array($code, $CONF['popular_syntax']))
	{
		$sel=($code==$page['current_format'])?"selected=\"selected\"":"";
		echo "<option $sel value=\"$code\">$name</option>";
	}
}

echo "<option value=\"text\">----------------------------</option>";

//show all formats
foreach ($CONF['all_syntax'] as $code=>$name)
{
	$sel=($code==$page['current_format'])?"selected=\"selected\"":"";
	if (in_array($code, $CONF['popular_syntax']))
		$sel="";
	echo "<option $sel value=\"$code\">$name</option>";
	
}
?>
</select><br/>
<br/>

<?php printf(t('To highlight particular lines, prefix each line with %s'),$CONF['highlight_prefix']); 

$rows=isset($page['post']['editcode']) ? substr_count($page['post']['editcode'], "\n") : 0; 
$rows=min(max($rows,10),40);
?>
<br/>
<textarea id="code" class="codeedit" name="code2" cols="80" rows="<?php echo $rows ?>" onkeydown="return onTextareaKey(this,event)"><?php 
if (!empty($page['post']['editcode'])) {
	echo htmlentities($page['post']['editcode'], ENT_COMPAT,$CONF['htmlentity_encoding']);
}
?></textarea>

<div id="namebox">
	
<label for="poster"><?php echo t('Your Name')?></label><br/>
<input type="text" maxlength="24" size="24" id="poster" name="poster" value="<?php echo isset($page['poster'])?$page['poster']:'' ?>" />
<input type="submit" name="paste" value="<?php echo t('Send')?>"/>
<br />
<?php echo '<input type="checkbox" name="remember" value="1" '.$page['remember'].' />'.t('Remember me so that I can delete my post'); ?>

</div>


<div id="expirybox">


<div id="expiryradios">
<label><?php echo t('How long should your post be retained?') ?></label><br/>

<input type="radio" id="expiry_day" name="expiry" value="d" <?php if ($page['expiry']=='d') echo 'checked="checked"'; ?> />
<label id="expiry_day_label" for="expiry_day"><?php echo t('a day') ?></label>

<input type="radio" id="expiry_month" name="expiry" value="m" <?php if ($page['expiry']=='m') echo 'checked="checked"'; ?> />
<label id="expiry_month_label" for="expiry_month"><?php echo t('a month') ?></label>

<input type="radio" id="expiry_forever" name="expiry" value="f" <?php if ($page['expiry']=='f') echo 'checked="checked"'; ?> />
<label id="expiry_forever_label" for="expiry_forever"><?php echo t('forever') ?></label>
</div>

<div id="expiryinfo"></div>
	
</div>

<div id="email">
<input type="text" size="8" name="email" value="" />
</div>

<div id="end"></div>

</form>