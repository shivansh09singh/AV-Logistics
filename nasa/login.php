<html>
<head>
	<title>AVL - SignIn/Up</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>	
	
	<link rel="stylesheet" href="../css/bootstrap.css">
	
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">AV Logistics</a>
			</div>
		</div>
	</nav>
	<div class="well" style="background-color:azure">
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="page-header">
						<h2>SignUp <span class="glyphicon glyphicon-user"></span></h2>
					</div>
					
					
					<form action="login.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="fname" class="col-lg-2 control-label">First Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="fname" placeholder="Enter FirstName">
							</div>
						</div>
						<div class="form-group">
							<label for="lname" class="col-lg-2 control-label">Last Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="lname" placeholder="Enter LastName">
							</div>
						</div>
						<div class="form-group">
							<label for="cno" class="col-lg-2 control-label">Contact No</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="cno" placeholder="Enter Contact No">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-2 control-label">Email Id</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="email" placeholder="Enter Email">
							</div>
						</div>
						<div class="form-group">
							<label for="uname" class="col-lg-2 control-label">Username</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="uname" placeholder="Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label for="pass" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" name="pass" placeholder="Enter Password">
							</div>
						</div>
						<div class="form-group">
							<label for="cpass" class="col-lg-2 control-label">Confirm Password</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<button id="submit" type="submit" name="submit" class="btn btn-lg btn-info btn-block">SignUp</button>
							</div>
						</div>
					</form>
					
					
				</div>
				<div class="col-lg-4">
					<div class="page-header">
						<h2 align="left">Login <span class="glyphicon glyphicon-log-in"></span></h2>
					</div>
					
					
					<form action="login.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="name" class="col-lg-4 control-label">Username</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="name" placeholder="Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label for="pwd" class="col-lg-4 control-label">Password</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" name="pwd" placeholder="Enter Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-4">
								<button type="submit" name="log" class="btn btn-lg btn-info btn-block">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
		<div class="row" style="background-color:azure">
			<div class="container">
			
				<div class="col-lg-4">
					<div class="page-header">
						<h2 align="left">Admin Login <span class="glyphicon glyphicon-briefcase"></span></h2></h2>
					</div>
					
					
					<form action="login.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="aid" class="col-lg-4 control-label">Admin Id</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="aid" placeholder="Enter Admin Id">
							</div>
						</div>
						<div class="form-group">
							<label for="apwd" class="col-lg-4 control-label">Admin Password</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" name="apwd" placeholder="Enter Admin Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-4">
								<button type="submit" name="alog" class="btn btn-lg btn-primary btn-block">Login</button>
							</div>
						</div>
					</form>
				
				
				</div>
			</div>
		</div>
</body>
</html>

<?php
	include("includes/connect.php");
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$cno=$_POST['cno'];
		$email=$_POST['email'];
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		
		if($fname=="" or $lname=="" or $cno=="" or $email=="" or $uname=="" or $pass=="" or $cpass=="")
		{
			echo "<script>alert('Any field is missing'.)</script>";
			exit();
		}
		else
		{
			if($pass==$cpass)
			{
				$query="insert into login (f_name,l_name,c_no,e_mail,u_name,u_pass) values ('$fname','$lname','$cno','$email','$uname','$pass')";
			
				if(mysql_query($query))
				{	
					echo "<script>alert('Registered Successfully')</script>";
				}
				exit();
			}
			else
			{
				echo "<script>alert('Password and Confirm Password are not same.')</script>";
			}
		}
	}
?>


<?php

	if(isset($_POST['log']))
	{
		session_start();
		include("includes/connect.php");
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		$_SESSION['user']=$name;
		
	
	
		$query1="select * from login where u_name='$name' AND u_pass='$pwd'";
		$run1=mysql_query($query1);
		if(mysql_num_rows($run1)!=0)
		{
			echo "<script>window.open('user/cargo.php?logged=Logged in successfully..!!','_self')</script>";
			header("location:user/cargo.php");
		}
		else
		{
			echo "<script>alert('User Name or Password is incorrect.')</script>";
		}
	}
?>


<?php

	if(isset($_POST['alog']))
	{
		session_start();
		include("includes/connect.php");
		$aid=$_POST['aid'];
		$apwd=$_POST['apwd'];
		$_SESSION['admin']=$aid;
	
		$aquery="select * from alogin where a_id='$aid' AND a_pass='$apwd'";
		$arun=mysql_query($aquery);
		if(mysql_num_rows($arun)!=0)
		{
			echo "<script>window.open('admin/requests.php?logged=Admin Logged in successfully..!!','_self')</script>";
			header("location:admin/requests.php");
		}
		else
		{
			echo "<script>alert('Admin Name or Password is incorrect.')</script>";
		}
	}
?>