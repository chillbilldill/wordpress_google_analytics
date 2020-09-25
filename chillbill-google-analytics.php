<?php
/*
Plugin Name: Chill Bill's Google Analytic Code
Plugin URI: https://chillbilldill.com
Description: Adds a Google analytics tracking code to <head> by hooking wp_head.
Author: Chill Bill Dill
Version: 1.0
 */
?>

<?php
function chillbill_google_analytics() { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159414027-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159414027-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<?php }
add_action( 'wp_head', 'chillbill_google_analytics', 10 );