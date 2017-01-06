<?php
/*
Plugin Name: Share G+
Plugin URI: https://github.com/TangChr/yourls-share-gplus
Description: Adds Google+ to the Quick Share Box.
Version: 1.1
Author: Christian Tang
Author URI: http://christiantang.dk
*/


yourls_add_action( 'share_links', 'gplus_share_url' );
function gplus_share_url( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
    $shorturl = rawurlencode( $shorturl );
    $title = rawurlencode( htmlspecialchars_decode( $title ) );
    
    // Plugin URL (no URL is hardcoded)
    $pluginurl = YOURLS_PLUGINURL . '/'.yourls_plugin_basename( dirname(__FILE__) );
    $icon = $pluginurl.'/gplus.png';
    echo <<<GPLUS
    <style type="text/css">
    #share_gplus{
        background: transparent url("$icon") left center no-repeat;
    }
    </style>
    <a id="share_gplus"
        href="https://plus.google.com/share?url=$shorturl"
        title="Share on Google+"
        onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google+
    </a>
    <script type="text/javascript">
    // Dynamically update Google+ link
    // when user clicks on the "Share" Action icon, event $('#tweet_body').keypress() is fired, so we'll add to this
    $('#tweet_body').keypress(function(){
        var url = encodeURIComponent( $('#copylink').val() );
        var gplus = 'https://plus.google.com/share?url='+url;
        $('#share_gplus').attr('href', gplus);        
    });
    </script>
GPLUS;
}
