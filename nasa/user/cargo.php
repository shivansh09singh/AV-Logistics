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
	<title>AVL - Cargo</title>
	
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
				<a href="cargo.php" class="navbar-brand">AV Logistics</a>
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
					<li>Welcome, <?php echo $_SESSION['user'] ?></li>
					<li><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
				<ul>
			</div>
		</div>
	</nav>
	<div style="background-color:azure">
	<br><br>
	<form action="cargo.php" method="post" class="form-horizontal">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="page-header">
					<h2>Sender's Details <span class="glyphicon glyphicon-export"></span></h2>
				</div>
					<div class="form-group">
						<label for="sname" class="col-lg-2 control-label">Sender Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="sname" placeholder="Enter Name">
						</div>
					</div>
					<div class="form-group">
						<label for="sno" class="col-lg-2 control-label">Sender's Contact No</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="sno" placeholder="Enter Contact No">
						</div>
					</div>
					<div class="form-group">
						<label for="smail" class="col-lg-2 control-label">Sender's Email Id</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="smail" placeholder="Enter Email">
						</div>
					</div>
					<div class="form-group">
						<label for="saddr" class="col-lg-2 control-label">Sender's Address</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="saddr" placeholder="Enter Address">
						</div>
					</div>
					<div class="form-group">
						<label for="spin" class="col-lg-2 control-label">Sender's Pin</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="spin" placeholder="Enter Pin">
						</div>
					</div>
					<div class="form-group">
						<label for="scity" class="col-lg-2 control-label">Sender's City</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="scity" placeholder="Enter City">
						</div>
					</div>

			</div>
			<div class="col-lg-6">
				<div class="page-header">
					<h2>Reciever's Details <span class="glyphicon glyphicon-import"></span></h2>
				</div>
		
					<div class="form-group">
						<label for="rname" class="col-lg-2 control-label">Reciever Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="rname" placeholder="Enter Name">
						</div>
					</div>
					<div class="form-group">
						<label for="rno" class="col-lg-2 control-label">Reciever's Contact No</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="rno" placeholder="Enter Contact No">
						</div>
					</div>
					<div class="form-group">
						<label for="rmail" class="col-lg-2 control-label">Reciever's Email Id</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="rmail" placeholder="Enter Email">
						</div>
					</div>
					<div class="form-group">
						<label for="raddr" class="col-lg-2 control-label">Reciever's Address</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="raddr" placeholder="Enter Address">
						</div>
					</div>
					<div class="form-group">
						<label for="rpin" class="col-lg-2 control-label">Reciever's Pin</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="rpin" placeholder="Enter Pin">
						</div>
					</div>
					<div class="form-group">
						<label for="rcity" class="col-lg-2 control-label">Reciever's City</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="rcity" placeholder="Enter City">
						</div>
					</div>
					
					<br><br><br>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="page-header">
					<h2>Cargo Details <span class="glyphicon glyphicon-tasks"></span></h2>
				</div>
		
					<div class="form-group">
						<label for="cweight" class="col-lg-2 control-label">Cargo Weight</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="cweight" placeholder="(In Kg)">
						</div>
					</div>
					<div class="form-group">
						<label for="clength" class="col-lg-2 control-label">Length</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="clength" placeholder="(In meter)">
						</div>
					</div>
					<div class="form-group">
						<label for="cbreadth" class="col-lg-2 control-label">Breadth</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="cbreadth" placeholder="(In meter)">
						</div>
					</div>
					<div class="form-group">
						<label for="cheight" class="col-lg-2 control-label">Height</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="cheight" placeholder="(In meter)">
						</div>
					</div>
					<div class="form-group">
						<label for="cquantity" class="col-lg-2 control-label">Quantity</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="cquantity" placeholder="(In No)">
						</div>
					</div>
			</div>
		</div>
	</div>
	<br>
		<center>
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2">
				<button id="submit" type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Proceed to Next Page</button>
			</div>
		</div>
		</center>
	</form>
	</div>	
	<?php
	include("../includes/connect.php");
	if(isset($_POST['submit']))
	{
		$track=rand(1000000000,9999999999);

		$user=$_SESSION['user'];
		
		$codate=date('Y-m-d H:i:s');
		
		$sname=$_POST['sname'];
		$sno=$_POST['sno'];
		$smail=$_POST['smail'];
		$saddr=$_POST['saddr'];
		$spin=$_POST['spin'];
		$scity=$_POST['scity'];
		
		$rname=$_POST['rname'];
		$rno=$_POST['rno'];
		$rmail=$_POST['rmail'];
		$raddr=$_POST['raddr'];
		$rpin=$_POST['rpin'];
		$rcity=$_POST['rcity'];
		
		$cweight=$_POST['cweight'];
		$clength=$_POST['clength'];
		$cbreadth=$_POST['cbreadth'];
		$cheight=$_POST['cheight'];
		$cquantity=$_POST['cquantity'];
		
		$price=$cweight*$clength;
		
		
		
		if($sname=="" or $sno=="" or $smail=="" or $saddr=="" or $spin=="" or $scity=="" or
		$rname=="" or $rno=="" or $rmail=="" or $raddr=="" or $rpin=="" or $rcity=="" or
		$cweight=="" or $clength=="" or $cbreadth=="" or $cheight=="" or $cquantity=="")
		{
			echo "<script>alert('Any field is missing'.)</script>";
			exit();
		}		else
		{
			if($saddr==$raddr)
			{	
				echo "<script>alert('Sender and Reciever address cannot be same.')</script>";
			}
			else
			{
				$query1="insert into cargo (track_id,user_name,s_name,s_no,s_mail,s_addr,s_pin,s_city,
				r_name,r_no,r_mail,r_addr,r_pin,r_city,c_odate,
				c_weight,c_length,c_breadth,c_height,c_quantity,c_price,c_location)
				values ('$track','$user','$sname','$sno','$smail','$saddr','$spin','$scity',
				'$rname','$rno','$rmail','$raddr','$rpin','$rcity','$codate',
				'$cweight','$clength','$cbreadth','$cheight','$cquantity','$price','$scity')";
				
				if(mysql_query($query1))
				{
					echo "<script>alert('Order Send.')</script>";
					echo "<script>window.open('payment.php?pay=Next Page..!!','_self')</script>";
				}
			}
		}
	}
?>
		
		
</body>
</html>







<?php include("../includes/footer.php"); ?>
<?php } ?>