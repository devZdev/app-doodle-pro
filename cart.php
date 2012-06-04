<?php 
/*
 * 
 * @dz
 * Cart - Supports writing shipping information to db.
 * 
 */
?>
<div style="display:none;">
		<div id="checkout">		
			<h3>Shopping Cart</h3>
            <h5>Shipping Information</h5>
            <div class="checkout-right">
				<div class="cart">
	                <img src="/public/img/product-cart.png" alt="" />
	                <p>App Doodle Pro (bundle of three)</p>
	                <p class="quantity">Quantity: </p>
	                	<select name="quantity" class="select">
	                	<option value="1" selected="selected">1</option>
	                		<?php 
	                			for($i=2; $i<31; $i++){
	                				echo '<option value="'.$i.'">'.$i.'</option>';
	                			}
	                		?>
	                	</select>
	            </div>    
                <table id="totals">
                    <tr>
                        <td>Sub-Total: </td>
                        <td class="subtotal">$ 22.99</td>
                    </tr>
                    <tr>
                        <td>Shipping: </td>
                        <td class="shipping">$ 3.99</td>
                    </tr>
                    <tr>
                        <td class="gt-label">Grand Total: </td>
                        <td class="grandtotal">$ 26.98</td>
                    </tr>
                </table>
            </div>
			<form id="shipping-form" action="checkout.php" method="post">
				
				<input type="text" name="first_name" class="text required" placeholder="First Name" /><br />
				<input type="text" name="last_name" class="text required" placeholder="Last Name" /><br />
				<input type="text" name="address_1" class="text required" placeholder="Address"/><br />
				<input type="text" name="address_2" class="text" placeholder="Apt/Unit" /><br />
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
				<input type="submit" value="CONTINUE WITH ORDER" class="submit" />
			</form>
		</div>
	</div>
