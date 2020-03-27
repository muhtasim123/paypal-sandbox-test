<?php
session_start();
include'dbconnection.php';/*
if(isset($_POST['submit']))
{
  $query=mysqli_query($con,"select * from fundraiser");
  $row=mysqli_fetch_array($query)
  $current=$row['current'];
  $amount=$_POST['os0'];
  $new_current=$current+$amount;
  $id=intval($_GET['uid']);
  $query_run=mysqli_query($con,"update fundraiser set current='$new_current" where id='$id'");
  if($query_run)
  {
    echo "<script>alert('Database worked');</script>";
  }
}*/
?>

<!DOCTYPE html>
<html>
<head>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donate</title>
</head>

<body>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sb-4fv421186728@business.example.com">
<input type="hidden" name="lc" value="CA">
<input type="hidden" name="item_name" value="donation">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<table>
<tr><td>
<input type="hidden" name="on0" value="Amount">Amount</td></tr><tr><td>
<input type="text" name="os0" maxlength="200">
</td></tr>
</table>
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>
