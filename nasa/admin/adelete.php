<?php
	include("../includes/connect.php");
	$delete_id=$_GET['delreq'];
	$deletereq="delete from cargo where track_id ='$delete_id'";
	
	if(mysql_query($deletereq))
	{
		echo "<script>alert('Request Deleted Successfully.')</script>";
		echo "<script>window.open('requests.php?delete=Deleted successfully..!!','_self')</script>";
	}
?>