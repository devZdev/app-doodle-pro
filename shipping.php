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
$username= ADP_USER;
$password= ADP_PASSWORD;

//Connect to mysql
$con = mysql_connect($servername,$username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("adp_dev", $con);

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
				<ul class="pricing">
					<li>App Doodle Pro (Pack of 3)</li>
					<li>$22.99</li>
				</ul>
				<a id="buy-button" href="#checkout">BUY NOW</a>
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
	<div style="display:none;">
		<div id="checkout">
			<form id="shipping-form" action="shipping.php" method="post">
				<label for="first-name">First Name:</label><br />
				<input type="text" name="first_name" class="text" /><br />
				<label for="last-name">Last Name:</label><br />
				<input type="text" name="last_name" class="text" /><br />
				<label for="address_1">Address:</label><br />
				<input type="text" name="address_1" class="text" /><br />
				<label for="address_2">Apt#:</label><br />
				<input type="text" name="address_2" class="text-apt" /><br />
				<label for="city">City:</label><br />
				<input type="text" name="city" class="text" /><br />
				<label for="state">State:</label><br />
				<select name="state" class="select"> 
					<option value="" selected="selected">Select a State</option> 
					<option value="AL">Alabama</option> 
					<option value="AK">Alaska</option> 
					<option value="AZ">Arizona</option> 
					<option value="AR">Arkansas</option> 
					<option value="CA">California</option> 
					<option value="CO">Colorado</option> 
					<option value="CT">Connecticut</option> 
					<option value="DE">Delaware</option> 
					<option value="DC">District Of Columbia</option> 
					<option value="FL">Florida</option> 
					<option value="GA">Georgia</option> 
					<option value="HI">Hawaii</option> 
					<option value="ID">Idaho</option> 
					<option value="IL">Illinois</option> 
					<option value="IN">Indiana</option> 
					<option value="IA">Iowa</option> 
					<option value="KS">Kansas</option> 
					<option value="KY">Kentucky</option> 
					<option value="LA">Louisiana</option> 
					<option value="ME">Maine</option> 
					<option value="MD">Maryland</option> 
					<option value="MA">Massachusetts</option> 
					<option value="MI">Michigan</option> 
					<option value="MN">Minnesota</option> 
					<option value="MS">Mississippi</option> 
					<option value="MO">Missouri</option> 
					<option value="MT">Montana</option> 
					<option value="NE">Nebraska</option> 
					<option value="NV">Nevada</option> 
					<option value="NH">New Hampshire</option> 
					<option value="NJ">New Jersey</option> 
					<option value="NM">New Mexico</option> 
					<option value="NY">New York</option> 
					<option value="NC">North Carolina</option> 
					<option value="ND">North Dakota</option> 
					<option value="OH">Ohio</option> 
					<option value="OK">Oklahoma</option> 
					<option value="OR">Oregon</option> 
					<option value="PA">Pennsylvania</option> 
					<option value="RI">Rhode Island</option> 
					<option value="SC">South Carolina</option> 
					<option value="SD">South Dakota</option> 
					<option value="TN">Tennessee</option> 
					<option value="TX">Texas</option> 
					<option value="UT">Utah</option> 
					<option value="VT">Vermont</option> 
					<option value="VA">Virginia</option> 
					<option value="WA">Washington</option> 
					<option value="WV">West Virginia</option> 
					<option value="WI">Wisconsin</option> 
					<option value="WY">Wyoming</option>
				</select><br />
				<label for="zip">Zip Code:</label><br />
				<input type="text" name="zip" class="text-zip" /><br />
				<label for="zip">Email:</label><br />
				<input type="text" name="email" class="text" /><br />
				<input type="submit" value="Continue to Secure Checkout" />
			</form>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>	
	<script src="/public/js/lib/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
	<script src="/public/js/document.events.js" type="text/javascript"></script>
</body>

</html>