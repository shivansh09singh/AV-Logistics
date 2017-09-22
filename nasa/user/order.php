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
	
	<br><br><br><br>
	<table class="table table-striped table-hover table-bordered">
		<tr class="info">
			<th class="text-center" colspan="11"><h3>Order Details <span class="glyphicon glyphicon-th-list"></span></h3></th>
		</tr>
		<tr>
			<th>Tracking Id</th>
			<th>Sender Name</th>
			<th>Sender No.</th>
			<th>Sender City</th>
			<th>Reciever Name</th>
			<th>Reciever No.</th>
			<th>Reciever City</th>
			<th>Order Date / Time</th>
			<th>Price</th>
			<th>Status</th>
			<th>Manage</th>
		</tr>
		
		
		<?php
			include("../includes/connect.php");
			
			$username=$_SESSION['user'];
			$query1="select * from cargo where user_name='$username'";
			$run=mysql_query($query1);
			while($row=mysql_fetch_array($run))
			{
				$id=$row['track_id'];
				
				$sn=$row['s_name'];
				$so=$row['s_no'];
				$sc=$row['s_city'];
				
				$rn=$row['r_name'];
				$ro=$row['r_no'];
				$rc=$row['r_city'];
				
				$cod=$row['c_odate'];
				$pr=$row['c_price'];
				$st=$row['c_paid'];
			
		?>
		
		
		<tr>
			<td><?php echo $id; ?></th>
			<td><?php echo $sn; ?></th>
			<td><?php echo $so; ?></th>
			<td><?php echo $sc; ?></th>
			<td><?php echo $rn; ?></th>
			<td><?php echo $ro; ?></th>
			<td><?php echo $rc; ?></th>
			<td><?php echo $cod; ?></th>
			<td><?php echo $pr; ?></th>
			<td><?php echo $st; ?></th>
			<th><a href="view.php?view=<?php echo $id; ?>">Details</a> / 
			<a href="cancel.php?can=<?php echo $id; ?>" onclick="return confirm('Are you sure want to Delete this order?')">Cancel</a></th>
		</tr>
		<?php } ?>
	</table>
	
</body>
</html>

<?php include("../includes/footer.php"); ?>
<?php } ?>