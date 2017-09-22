<?php
	include("../includes/connect.php");
	$cancel_id=$_GET['can'];
	$cquery="delete from cargo where track_id='$cancel_id'";
	
	if(mysql_query($cquery))
	{
		echo "<script>alert('Order Canceled Successfully.')</script>";
		echo "<script>window.open('order.php?delete=Canceled successfully..!!','_self')</script>";
	}
?>