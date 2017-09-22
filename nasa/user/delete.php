<?php
	include("../includes/connect.php");
	$delete_id=$_GET['del'];
	$dquery="delete * from cargo where track_id ='$delete_id'";
	
	if(mysql_query($dquery))
	{
		echo "<script>alert('Order Deleted Successfully.')</script>";
		echo "<script>window.open('order.php?delete=Deleted successfully..!!','_self')</script>";
	}
?>