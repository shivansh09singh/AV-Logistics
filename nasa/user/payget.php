<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:../login.php");
	}
	else
	{

?>

<html>
<head>
	<title>AVL - PayCheck</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>	
	
	<link rel="stylesheet" href="../../css/bootstrap.css">
	
	
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcol">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../index.php" class="navbar-brand">AV Logistics</a>
			</div>
			<div class="collapse navbar-collapse" id="navcol">
				<ul class="nav navbar-nav">
					<li><a href="cargo.php">Cargo</a></li>
					<li><a href="track.php">Track Order</a></li>
					<li><a href="order.php">My Orders</a><li>
					<li><a href="price.php">Pricing</a><li>
					<li><a href="contact.php">Contact Us</a><li>
					<li><a href="about.php">About Us</a><li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
				<ul>
			</div>
		</div>
	</nav>
	
	<br><br><br><br>
	<?php
		include("../includes/connect.php");
		$query1="select * from cargo order by track_id DESC LIMIT 1";
		$run=mysql_query($query1);
		while($row=mysql_fetch_array($run))
		{
			$payamount=$row['c_price'];
			$tid=$row['track_id'];
	
	?>
	
	<table class="table table-striped table-hover">
		<tr class="info">
			<th class="text-center" colspan="2"><h2>Payable Amount <span class="glyphicon glyphicon-usd"></span></h2></th>
		</tr>
		<tr>
			<th class="text-center"><h3><?php echo $payamount; ?></h3></th>
		</tr>
	</table>
		<?php } ?>
		
	<form action="payget.php" method="post" class="form-horizontal">	
		<div class="form-group">
			<h4><label for="amount" class="col-lg-4 control-label">Enter the given amount</label></h4>
			<div class="col-lg-4">
				<input type="text" class="form-control" name="amount" placeholder="Enter Amount">
			</div>
		</div>
		<div class="col-lg-6 col-lg-offset-4">
			<button type="submit" name="id" class="btn btn-lg btn-info">Make Payment</button>
		</div>
	</form>
	
	
	<?php
	include("../includes/connect.php");
	if(isset($_POST['id']))
	{
		
		$amount=$_POST['amount'];
		if($amount=="")
		{
			echo "<script>alert('Please Enter the amount'.)</script>";
		}
		else
		{
			if($amount==$payamount)
			{	
				$query="UPDATE cargo SET c_paid ='Paid' where track_id='$tid'";
				
				if(mysql_query($query))
				{	
					echo "<script>alert('Amount Paid Successfully')</script>";
				}
			}
			else
			{
				echo "<script>alert('Please Enter the correct Amount')</script>";
			}
		}
	}
?>

<?php

	include("../includes/foot.php");
?>
	
</body>
</html>

<?php } ?>