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
	<title>AVL - View</title>
	
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
	<br><br><br>
	
	
	<?php
		include("../includes/connect.php");
		$view_id=$_GET['view'];
		$vquery="select * from cargo where track_id ='$view_id'";
		$run=mysql_query($vquery);
		while($row=mysql_fetch_array($run))
		{
			$id=$row['track_id'];
			
			$sn=$row['s_name'];
			$so=$row['s_no'];
			$sm=$row['s_mail'];
			$sa=$row['s_addr'];
			$sp=$row['s_pin'];
			$sc=$row['s_city'];
			
			$rn=$row['r_name'];
			$ro=$row['r_no'];
			$rm=$row['r_mail'];
			$ra=$row['r_addr'];
			$rp=$row['r_pin'];
			$rc=$row['r_city'];
			
			$cw=$row['c_weight'];
			$cl=$row['c_length'];
			$cb=$row['c_breadth'];
			$ch=$row['c_height'];
			$cq=$row['c_quantity'];
		
	?>
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
				<div class="info">
					<h3 class="text-center">Tracking ID - <?php echo $id; ?></h3>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<table class="table table-striped table-hover table-condensed">
		<tr class="info">
			<th class="text-center" colspan="2"><center><h3>Sender Details</h3></center></th>
		</tr>
		<tr>
			<th>Sender's Name</th>
			<td><?php echo $sn; ?></td>
		</tr>
		<tr>
			<th>Sender's No</th>
			<td><?php echo $so; ?></td>
		</tr>
		<tr>
			<th>Sender's Mail</th>
			<td><?php echo $sm; ?></td>
		</tr>
		<tr>
			<th>Sender's Address</th>
			<td><?php echo $sa; ?></td>
		</tr>
		<tr>
			<th>Sender's Pin</th>
			<td><?php echo $sp; ?></td>
		</tr>
		<tr>
			<th>Sender's City</th>
			<td><?php echo $sc; ?></td>
		</tr>
	</table>
	
	<br><br><br>
	
	<table class="table table-striped table-hover">
		<tr class="info">
			<th class="text-center" colspan="2"><h3>Reciever Details</h3></th>
		</tr>
		<tr>
			<th>Reciever's Name</th>
			<td><?php echo $rn; ?></td>
		</tr>
		<tr>
			<th>Reciever's No</th>
			<td><?php echo $ro; ?></td>
		</tr>
		<tr>
			<th>Reciever's Mail</th>
			<td><?php echo $rm; ?></td>
		</tr>
		<tr>
			<th>Reciever's Address</th>
			<td><?php echo $ra; ?></td>
		</tr>
		<tr>
			<th>Reciever's Pin</th>
			<td><?php echo $rp; ?></td>
		</tr>
		<tr>
			<th>Reciever's City</th>
			<td><?php echo $rc; ?></td>
		</tr>
	</table>
	
	<br><br><br>
	<table class="table table-striped table-hover">
		<tr class="info">
			<th class="text-center" colspan="2"><h3>Cargo Details</h3></th>
		</tr>
		<tr>
			<th>Cargo Weight</th>
			<td><?php echo $cw; ?></td>
		</tr>
		<tr>
			<th>Cargo Length</th>
			<td><?php echo $cl; ?></td>
		</tr>
		<tr>
			<th>Cargo Breadth</th>
			<td><?php echo $cb; ?></td>
		</tr>
		<tr>
			<th>Cargo Height</th>
			<td><?php echo $ch; ?></td>
		</tr>
		<tr>
			<th>Cargo Quantity</th>
			<td><?php echo $cq; ?></td>
		</tr>
	</table>
	<?php } ?>
	
	<table class="table table-striped table-hover">
		<tr class="info">
			<th class="text-center" colspan="2"><h3>Payable Amount</h3></th>
		</tr>
		<tr>
			<th class="text-center"><?php echo $cw*$cl; ?></th>
		</tr>
	</table>
	
</body>
</html>

<?php include("../includes/foot.php"); ?>
<?php } ?>