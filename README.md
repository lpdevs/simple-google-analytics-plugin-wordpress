### Simple Google Analytics Plugin for Wordpress

  * Google Analytics Solutions offer free and enterprise analytics tools to measure website, app, digital 
  and offline data to gain customer insights.
  * To use Google Analytics, you have to sign in for Google Account, then using it to sign in Google Analytics. 
  * Create an account, then make a property as a web application. You will have a ID for each application, just use it below.

### Explanation code
  
  * Code:
    ```php
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
    ```
    
