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
	<br><br><br>
	
	
	<?php
		include("../includes/connect.php");
		$update_id=$_GET['updet'];
		$uquery="select * from cargo where track_id ='$update_id'";
		$run=mysql_query($uquery);
		while($row=mysql_fetch_array($run))
		{
			$id=$row['track_id'];
			
			$user=$row['user_name'];
			
			$ced=$row['c_edate'];
			$cs=$row['c_status'];
			$lo=$row['c_location'];
		
	?>
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
				<div class="info">
					<h3 class="text-center">Request By - <?php echo $user; ?></h3>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<table class="table table-striped table-hover table-condensed">
		<tr class="info">
			<th class="text-center" colspan="2"><center><h3>Update Details</h3></center></th>
		</tr>
		<tr>
			<th>Cargo Track ID</th>
			<td>
				<div class="col-lg-8">
					<input type="text" class="form-control" name="utid" value="<?php echo $id; ?>" readonly="readonly">
				</div>
			</td>
		</tr>
		<tr>
			<th>Cargo Status</th>
			<td>
				<div class="col-lg-8">
					<input type="text" class="form-control" name="ucs" value="<?php echo $cs; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<th>Cargo Location</th>
			<td>
				<div class="col-lg-8">
					<input type="text" class="form-control" name="ulo" value="<?php echo $lo; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<th>Expected Date</th>
			<td>
				<div class="col-lg-8">
					<input type="date" class="form-control" name="ued" value="<?php echo $ced; ?>">
				</div>
			</td>
		</tr>
	</table>
	
	<?php } ?>
	
	<form action="updatedetails.php" method="post" class="form-horizontal">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-5">
				<button id="submit" type="submit" name="update" class="btn btn-lg btn-primary">Update</button>
			</div>
		</div>
	</form>
	
	<?php
	include("../includes/connect.php");
	if(isset($_POST['update']))
	{
		$ucs=$_POST['ucs'];
		$ulo=$_POST['ulo'];
		$ued=$_POST['ued'];
		$utid=$_POST['utid'];
		
		
		
		if($ucs=="" or $ulo=="")
		{
			echo "<script>alert('Any field is missing'.)</script>";
			exit();
		}
		else
		{
			$query="UPDATE cargo SET c_status ='$ucs',c_location='$ulo',c_edate='$ued' where track_id='$utid'";
			
			if(mysql_query($query))
			{
				echo "<script>alert('Updated Successfully.')</script>";
				echo "<script>window.open('cargos.php?updated=Next Page..!!','_self')</script>";
			}
		}
	}
?>
	
</body>
</html>

<?php include("../includes/footer.php"); ?>
<?php } ?>