<?php
/*
 * 
 * 
 * 
 * @dz
 * Scripts - Modularized space for javascript calls.
 * 
 */

?>

<?php
 
if($_SERVER['SERVER_NAME']!="localhost"){?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<?php } else {?>
	<script src="/public/js/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="/public/js/lib/jquery.validate.min.js" type="text/javascript"></script>
<?php }?>
<script src="/public/js/globals.js" type="text/javascript"></script>
<script src="/public/js/lib/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="/public/js/document.events.js" type="text/javascript"></script>
<script src="/public/js/lib/modernizer.js" type="text/javascript"></script>
<script src="/public/js/tracking.js" type="text/javascript"></script>
