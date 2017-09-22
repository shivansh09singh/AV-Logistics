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
	<title>AVL - View Users</title>
	
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
			<th class="text-center" colspan="11"><h3>User Details <span class="glyphicon glyphicon-th-list"></span></h3></th>
		</tr>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Contact No.</th>
			<th>Email ID</th>
			<th>Username</th>
			<th>Manage</th>
		</tr>
		
		
		<?php
			include("../includes/connect.php");
	
			$query1="select * from login";
			$run=mysql_query($query1);
			while($row=mysql_fetch_array($run))
			{
				$fn=$row['f_name'];
				
				$ln=$row['l_name'];
				$cno=$row['c_no'];
				$cm=$row['e_mail'];
				
				$user=$row['u_name'];
			
		?>
		
		
		<tr>
			<td><?php echo $fn; ?></th>
			<td><?php echo $ln; ?></th>
			<td><?php echo $cno; ?></th>
			<td><?php echo $cm; ?></th>
			<td><?php echo $user; ?></th>
			<th><a href="deleteuser.php?deleteuser=<?php echo $user; ?>" onclick="return confirm('Are you sure want to Delete this user?')">Delete</a></th>
		</tr>
		<?php } ?>
	</table>
	
</body>
</html>

<?php include("../includes/footer.php"); ?>
<?php } ?>