<?php
/**
* Plugin Name: Simple Google Analytics Plugin for Wordpress
* Description: Adds a Google analytics tracking code to the <head> of your theme, by hooking to wp_head.
* Author: LP Devs
* Version: 1.0
*/
function wp_lpdevs_google_analytics() {
?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'Google-Analytics-ID', 'auto');
	  ga('send', 'pageview');
	</script>
<?php
}
add_action( 'wp_head', 'wp_lpdevs_google_analytics');
