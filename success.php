<?php
	$uid=intval($_GET['uid']);
	$tempamount=intval($_GET['amount']);
	
	$ret=mysqli_query($con, "select * from fundraiser where id='$uid'");
	$row=mysqli_fetch_array($ret)
	$current=$row['current'];
	$new=$current+$tempamount;
	$query=mysqli_query($con,"UPDATE fundraiser set current='$new' where id='$uid'");
	if($query)
	{
		header( "Location: index.php");
	}
?>
