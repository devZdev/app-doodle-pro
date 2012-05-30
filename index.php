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
			<img class="main-img" src="/public/img/main-product.png" alt="The App Doodle Pro" />
			<ul class="description">
					<li>True to scale.</li>
					<li>Keep your app ideas organized.</li> 
					<li>Programmers will be more effective when your design is organized.</li> 
					<li>Designed with the app creator in mind.</li> 
					<li>Simple, Elegant, Classy.</li> 
					<li>The perfect companion to the modern app designer.</li> 
					<li>Free Shipping!</li> 
				</ul>
			<img class="product-open shadow" src="/public/img/product-open-v2.png" alt="" />
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
			<h3>Shipping Information</h3>
			<div class="cart">
			<img src="/public/img/product-cart.png" alt="" />
			<table id="totals">
				<tr>
					<td><label for="quantity">Quantity:</label></td>
					<td><input type="text" name="quantity" value="1" /></td>
				</tr>
				<tr>
					<td>Sub-Total:</td>
					<td>$22.99</td>
				</tr>
				<tr>
					<td>Shipping:</td>
					<td>$3.99</td>
				</tr>
				<tr>
					<td>Grand Total:</td>
					<td>$26.98</td>
				</tr>
			</table>
			</div>
			<form id="shipping-form" action="shipping.php" method="post">
				
				<input type="text" name="first_name" class="text required" placeholder="First Name" /><br />
				<input type="text" name="last_name" class="text required" placeholder="Last Name" /><br />
				<input type="text" name="address_1" class="text required" placeholder="Address"/><br />
				<input type="text" name="address_2" class="text required" placeholder="Apt/Unit" /><br />
				<input type="text" name="city" class="text-city required" placeholder="City" /><br />

				<select name="state" class="select required"> 
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
				<input type="text" name="zip" class="text-zip required" placeholder="Zip Code" /><br />
				<input type="text" name="email" class="text required email" placeholder="Email" /><br />
				<input type="submit" value="Continue to Secure Checkout" />
			</form>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>	
	<script src="/public/js/lib/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
	<script src="/public/js/document.events.js" type="text/javascript"></script>
	<script src="/public/js/modernizer.js" type="text/javascript"></script>
</body>

</html>