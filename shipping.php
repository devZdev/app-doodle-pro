<?php
include_once 'settings.php';

$data=$_POST;

$firstName = $data['first_name'];
$lastName = $data['last_name'];
$address1 = $data['address_1'];
$address2 = $data['address_2'];
$city = $data['city'];
$state = $data['state'];
$zip = $data['zip'];
$email = $data['email'];

//db variables
$servername = ADP_SERVER_NAME;
$username = ADP_USER;
$password = ADP_PASSWORD;
$dbname = ADP_DB_NAME;

//Connect to mysql
$con = mysql_connect($servername,$username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db($dbname, $con);

$sql = 'INSERT INTO shipping (first_name, last_name, address_1, address_2, city, state, zip, email) VALUES ("'.$firstName.'","'.$lastName.'","'.$address1.'","'.$address2.'","'.$city.'","'.$state.'","'.$zip.'","'.$email.'");';

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}

mysql_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>App Doodle Pro</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
	<link rel="stylesheet" href="/public/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<style type="text/css">
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>
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
</head>

<body>
	
	<div id="wrapper">
		<div id="header">
			<div id="header-left">
				<a id="logo" class="logo" href="/">APPDOODLE PRO</a>
			</div>
			<div id="header-right">
				<ul class="navigation">
					<li><a href="/">ABOUT</a></li>
					<li><a href="/">FAQ</a></li>
					<li><a href="/">STORIES</a></li>
					<li><a href="/">CONNECT</a></li>
					<li><a href="/">BUY</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="content-main">
				<h1>Thank You for your interest!</h1>
				<p>We're sorry, but the App Doodle Pro is currently out of stock! We will inform you as soon as they are available to ship! We are sorry about the inconvenience.</p>	
			</div>
			<div id="content-sidebar">
				
			</div>
		</div>
		<div id="footer">
			<ul>
				<li>ABOUT</li>
				<li>FAQ</li>
				<li>STORIES</li>
				<li>CONNECT</li>
				<li>BUY</li>
			</ul>
			<p>Copyright@2012 App Doodle Pro | All rights reserved </p>
		</div>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>	
	<script src="/public/js/lib/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
	<script src="/public/js/document.events.js" type="text/javascript"></script>
</body>

</html>