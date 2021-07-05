
<html>
<body>
 <center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form
 action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='PayPal Business Email'> <input type='hidden'
                name='item_name' value='Camera'> <input type='hidden'
                name='item_number' value='CAM#N1'> <input type='hidden'
                name='amount' value='10'> <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='USD'> <input type='hidden'
                name='notify_url'
                value='http://sitename/paypal-payment-gateway-integration-in-php/notify.php'>
            <input type='hidden' name='cancel_return'
                value='http://sitename/paypal-payment-gateway-integration-in-php/cancel.php'>
            <input type='hidden' name='return'
                value='http://sitename/paypal-payment-gateway-integration-in-php/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> 
			


			<input
                type="submit" style="height:50px;width:100px" name="pay_now" id="pay_now"
                Value="Pay Now">
				<br>
				<br>
<button type="button" style="height:50px;width:100px" onclick="location='confirmed.php'" >Cash on Delivery</button>

				</form>      
       


</body>
</html>