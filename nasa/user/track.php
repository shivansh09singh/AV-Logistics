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
	<title>AVL - Our Network</title>
	
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
	
	<br><br>
	<div class="row" style="background:transparent url('../includes/images/cargo.jpg') no-repeat center center /cover">
	<div class="container">
	<br><br><br>
	<form action="track.php" method="post" class="form-horizontal">
		<div class="col-md-5 col-lg-offset-3">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Tracking ID</span>
				<input type="text" class="form-control" name="track" placeholder="Enter Tracking Id">
			</div>
			<br>
			<div class="col-lg-offset-5">
				<button type="submit" name="order" class="btn btn-lg btn-info">Track My Order</button>
			</div>
		</div>
		</div>
	</form>

	</div>
	<br><br><br>
	</div>
		
		<?php
			include("../includes/connect.php");
			
			if(isset($_POST['order']))
			{
				$track=$_POST['track'];
				
				$tquery="select * from cargo where track_id='$track'";
				$trun=mysql_query($tquery);
				while($row=mysql_fetch_array($trun))
				{
					$id=$row['track_id'];

					$sc=$row['s_city'];
					
					$ced=$row['c_edate'];
					$sta=$row['c_status'];
					
					$cod=$row['c_odate'];
					
			
		?>
		
		<table class="table table-striped table-hover table-bordered">
		<tr class="info">
			<th class="text-center" colspan="10"><h3>Track Details</h3></th>
		</tr>
		<tr>
			<th>Tracking Id</th>
			<th>Location</th>
			<th>Ordered Date & Time</th>
			<th>Expected Date</th>
			<th>Status</th>
		</tr>
		<tr>
			<td><?php echo $id; ?></th>
			<td><?php echo $sc; ?></th>
			<td><?php echo $cod; ?></th>
			<td><?php echo $ced; ?></th>
			<td><?php echo $sta; ?></th>
		</tr>
		<?php } } ?>
	</table>
	
	
</body>
</html>

<?php include("../includes/footer.php"); ?>
<?php } ?>