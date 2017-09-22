<?php
	include("../includes/connect.php");
	$delete_user=$_GET['deleteuser'];
	$duser="delete from login where u_name ='$delete_user'";
	
	if(mysql_query($duser))
	{
		$dreq="delete from cargo where user_name ='$delete_user'";
		
		if(mysql_query($dreq))
		{
			echo "<script>alert('User Deleted Successfully.')</script>";
			echo "<script>window.open('users.php?delete=Deleted successfully..!!','_self')</script>";
		}
	}
?>