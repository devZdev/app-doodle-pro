<?php
/*
 * 
 * 
 * @dz
 * Head - Document Head
 * 
 */
?>

<head>
	<title>App Doodle Pro</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
	<link rel="stylesheet" href="/public/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<?php if($_SERVER['SERVER_NAME']!="localhost"){?>
	<script type="text/javascript">
  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-32149572-1']);
  		_gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  			})();
	</script>
	<?php }?>
</head>