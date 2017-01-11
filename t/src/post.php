<?php

///////////////////////////////////////////////////////////////////////////////
// show a post
//

if (isset($_GET['help']))
	$page['posttitle']="";
	
if (!empty($page['post']['posttitle']))
{
		echo "<h1>{$page['post']['posttitle']}";
		if (strlen($page['post']['parent_pid']))
		{
			echo ' (';
			printf(t("modification of post by %s"),
				"<a href=\"{$page['post']['parent_url']}\" title=\"".t('view original post')."\">{$page['post']['parent_poster']}</a>");
			
			echo " <a href=\"{$page['post']['parent_diffurl']}\" title=\"".t('compare differences')."\">".t('view diff')."</a>)";
		}
		
		echo "<br/>";
		
		if (isset($page['post']['ip']) && $is_admin)
		{
			echo "<a title=\"whois lookup\" href=\"http://whois.domaintools.com/{$page['post']['ip']}\">{$page['post']['ip']}</a> ";
		}
		
		//echo "<a href=\"#\" onclick=\"gotoURL('{$page['post']['spamurl']}')\" title=\"".t('report spam')."\">".t('report spam')."</a> | ";
		
		echo "<a href=\"#\" onclick=\"showSpamForm()\" title=\"".t('report spam')."\">".t('report abuse')."</a> | ";
		
		
		
		if ($page['can_erase'])
		{
			echo "<a href=\"{$page['post']['deleteurl']}\" title=\"".t('delete post')."\">".t('delete post')."</a> | ";
		}
		
		
		
		
		$followups=count($page['post']['followups']);
		if ($followups)
		{
			echo t('View followups from ');
			$sep="";
			foreach($page['post']['followups'] as $idx=>$followup)
			{
				echo $sep."<a title=\"posted {$followup['postfmt']}\" href=\"{$followup['followup_url']}\">{$followup['poster']}</a>";
				$sep=($idx<($followups-2))?", ":(' '.t('and').' ');	
			}
			
			echo " | ";
		}
		
		if ($page['post']['parent_pid']>0)
		{
			echo "<a href=\"{$page['post']['parent_diffurl']}\" title=\"".t('compare differences')."\">".t('diff')."</a> | ";
		} 
		
		echo "<a href=\"{$page['post']['downloadurl']}\" title=\"".t('download file')."\">".t('download')."</a> | ";
		
		echo "<span id=\"copytoclipboard\"></span>";
		
		echo "<a href=\"/\" title=\"".t('make new post')."\">".t('new post')."</a>";
		
		echo "</h1>";

#abuse reports

if ($is_admin)
{

   $abusefile=$_SERVER['DOCUMENT_ROOT'].'/../abuse/'.$page['post']['pid'];
   if (file_exists($abusefile))
   {
       $abuse=file_get_contents($abusefile);
       echo '<div style="background:#ffffaa;padding:5px;">';
       echo "<pre>$abuse</pre>";
       echo '</div>';
   }


}		
		
		echo '<div id="spamform" style="display:none">';
		echo '<form method="post" action="'.$page['post']['pid'].'">';
		echo '<input  type="hidden" id="spam_pid" name="pid" value="'.$page['post']['pid'].'">';
		echo '<input  type="hidden" id="processabuse" name="processabuse" value="1">';
		
		echo '<p>'.t('Please indicate why this post is abusive, and provide any other useful information.').'</p>';

		echo '<input type="radio" name="abuse" value="spam" id="abuse_spam">';
		echo '<label for="abuse_spam">'.t('Spam / advertising / junk').'</label><br>';
		
		echo '<input type="radio" name="abuse" value="personal" id="abuse_personal">';
		echo '<label for="abuse_personal">'.t('Personal details').'</label><br>';
		
		echo '<input type="radio" name="abuse" value="proprietary" id="abuse_proprietary">';
		echo '<label for="abuse_proprietary">'.t('Proprietary code').'</label><br>';
		
		echo '<input checked="checked" type="radio" name="abuse" value="other" id="abuse_other">';
		echo '<label for="abuse_other">'.t('Other').'</label><br><br>';
		
		echo '<label for="comments">'.t('comments (optional)').'</label><br>';
		echo '<textarea style="width:350px" id="comments" name="comments" rows="2" cols="30"></textarea><br><br>';
		
		echo '<label for="sender">'.t('email (optional)').'</label><br>';
		echo '<input  style="width:350px" type="text" id="sender" name="sender"><br><br>';
		
				
		echo '<input type="submit" name="reportspam" value="'.t('send abuse report').'">';
		echo '</form>';
		echo '</div>';
		
		
		
}
if (isset($page['post']['pid']))
{
	echo "<div class=\"syntax\">".$page['post']['codefmt']."</div>";
	echo "<br /><b>".t('Submit a correction or amendment below')." (<a href=\"{$CONF['this_script']}\">".t('click here to make a fresh posting')."</a>)</b><br/>";
	echo t('After submitting an amendment, you\'ll be able to view the differences between the old and new posts easily').'.';
}	
?>