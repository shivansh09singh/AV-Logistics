<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("location:../login.php");
	}
	else
	{

?>

<html>
<head>
	<title>AVL - Requests</title>
	
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
					<li><a href="requests.php">View Requests</a></li>
					<li><a href="users.php">View Users</a></li>
					<li><a href="cargos.php">View Cargo</a></li>
					<li><a href="feedback.php">Feedback</a><li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="alogout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
				<ul>
			</div>
		</div>
	</nav>
	
	<br><br><br><br>
	<table class="table table-striped table-hover table-bordered">
		<tr class="success">
			<th class="text-center" colspan="10"><h3>Cargo Details <span class="glyphicon glyphicon-th-list"></span></h3></th>
		</tr>
		<tr>
			<th>Tracking Id</th>
			<th>User Name</th>
			<th>Order Date</th>
			<th>Expected Date</th>
			<th>Price</th>
			<th>Price Status</th>
			<th>Cargo Status</th>
			<th>Location</th>
			<th>Manage</th>
		</tr>
		
		
		<?php
			include("../includes/connect.php");
			
			$query1="select * from cargo";
			$run=mysql_query($query1);
			while($row=mysql_fetch_array($run))
			{
				$id=$row['track_id'];
				
				$user=$row['user_name'];
				
				$cod=$row['c_odate'];
				$ced=$row['c_edate'];
				
				$pc=$row['c_price'];
				$cp=$row['c_paid'];
				
				$cs=$row['c_status'];
				$lo=$row['c_location'];
			
		?>
		
		
		<tr>
			<td><?php echo $id; ?></th>
			<td><?php echo $user; ?></th>
			<td><?php echo $cod; ?></th>
			<td><?php echo $ced; ?></th>
			<td><?php echo $pc; ?></th>
			<td><?php echo $cp; ?></th>
			<td><?php echo $cs; ?></th>
			<td><?php echo $lo; ?></th>
			<th><a href="updatedetails.php?updet=<?php echo $id; ?>">Update</a> / 
			<a href="adelete.php?del=<?php echo $id; ?>" onclick="return confirm('Are you sure want to Delete this request?')">Delete</a></th>
		</tr>
		<?php } ?>
	</table>
	
	
	
	
</body>
</html>
<?php
	include("../includes/footer.php");
?>
<?php } ?>