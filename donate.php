<?php
	$uid=intval($_GET['uid']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<title>Donation Example</title>

<meta name="Description" content="">
<meta name="KeyWords" content="">

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>


</head>

<body>


<table border="0"  width="30%">
<tr><!-- Row 1 -->

<td>
<h1>Widget Donations</h1>
</td><!-- Col 1 -->

</tr>
</table>


<table border="0"  width="30%">
<tr><!-- Row 1 -->

<td>
<div align="center">
<form target="_self" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<!-- Replace "business" value with your PayPal Email Address or your Merchant Account ID -->
<input type="hidden" name="business" value="sb-4fv421186728@business.example.com">
<input type="hidden" name="item_name" value="Donations">
<input type="hidden" name="item_number" value="W-D-10">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="10.00">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://paypal-sandbox-test.herokuapp.com/success.php?uid=<?php echo $uid;?>&amount=10">
<input type="hidden" name="cancel_return" value="http://paypal-sandbox-test.herokuapp.com/cancel.php?uid=<?php echo $uid;?>">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="submit" name="submit" class="button" value="$10.00">
</form>
</div>
</td><!-- Col 1 -->


<td>
<div align="center">
<form target="_self" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<!-- Replace "business" value with your PayPal Email Address or your Merchant Account ID -->
<input type="hidden" name="business" value="sb-4fv421186728@business.example.com">
<input type="hidden" name="item_name" value="Donations">
<input type="hidden" name="item_number" value="W-D-20">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="20.00">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://paypal-sandbox-test.herokuapp.com/success.php?uid=<?php echo $uid;?>&amount=20">
<input type="hidden" name="cancel_return" value="http://paypal-sandbox-test.herokuapp.com/cancel.php?uid=<?php echo $uid;?>">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="submit" name="submit" class="button" value="$20.00">
</form>
</div>
</td><!-- Col 2 -->


<td>
<div align="center">
<form target="_self" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<!-- Replace "business" value with your PayPal Email Address or your Merchant Account ID -->
<input type="hidden" name="business" value="sb-4fv421186728@business.example.com">
<input type="hidden" name="item_name" value="Donations">
<input type="hidden" name="item_number" value="W-D-30">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="30.00">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://paypal-sandbox-test.herokuapp.com/success.php?uid=<?php echo $uid;?>&amount=30">
<input type="hidden" name="cancel_return" value="http://paypal-sandbox-test.herokuapp.com/cancel.php?uid=<?php echo $uid;?>">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="submit" name="submit" class="button" value="$30.00">
</form>
</div>
</td><!-- Col 3 -->


<td>
<div align="center">
<form target="_self" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<!-- Replace "business" value with your PayPal Email Address or your Merchant Account ID -->
<input type="hidden" name="business" value="sb-4fv421186728@business.example.com">
<input type="hidden" name="item_name" value="Donations">
<input type="hidden" name="item_number" value="W-D-50">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="50.00">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://paypal-sandbox-test.herokuapp.com/success.php?uid=<?php echo $uid;?>&amount=50">
<input type="hidden" name="cancel_return" value="http://paypal-sandbox-test.herokuapp.com/cancel.php?uid=<?php echo $uid;?>">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="submit" name="submit" class="button" value="$50.00">
</form>
</div>
</td><!-- Col 4 -->
	
</tr>
</table>

</body>
</html>
