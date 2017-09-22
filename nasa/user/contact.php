<html>
<head>
	<title>AVL - Contact Us</title>
	
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
				<?php
				
					session_start();
					if(!isset($_SESSION['user']))
					{
						?>
				<a href="../index.php" class="navbar-brand">AV Logistics</a>
				<?php
					}
					else
					{
						?>
				<a href="cargo.php" class="navbar-brand">AV Logistics</a>
					<?php }?>
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
				
				<?php
					if(!isset($_SESSION['user']))
					{
						?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="login.php">SignUp <span class="glyphicon glyphicon-user"></span></a></li>
							<li><a href="login.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
						</ul>
					
					<?php
					}
					else
					{

					?>
				
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
					</ul>
					
					<?php } ?>
			</div>
		</div>
	</nav>
	
	<br><br>
	<div style="background-color:paleturquoise">
	<div class="container center_div">
	<div class="row" style="background:transparent url('../includes/images/feedback.png') no-repeat center center /cover"">
	<div class="col-offscol-lg-4 col-lg-4">
		<div class="page-header">
			<h2>Feedback <span class="glyphicon glyphicon-envelope"></span></h2>
		</div>
		
		
		<form action="contact.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="name" class="col-lg-4 control-label">Your Name</label>
				<div class="col-lg-8">
					<input type="text" class="form-control" name="name" placeholder="Enter Username">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-lg-4 control-label">Your Email</label>
				<div class="col-lg-8">
					<input type="text" class="form-control" name="email" placeholder="Enter Password">
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="col-lg-4 control-label">Your Message</label>
				<div class="col-lg-8">
					<textarea class="form-control" name="message" cols="20" rows="10" placeholder="Enter Your Message"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-8 col-lg-offset-4">
					<button type="submit" name="log" class="btn btn-lg btn-info btn-block">Submit</button>
				</div>
			</div>
		</form>
	
	</div>
	</div>
	</div>
	</div>
	<?php include("../includes/footer.php"); ?>
	
</body>
</html>