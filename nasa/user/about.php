<html>
<head>
	<title>AVL - About Us</title>
	
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
							<li><a href="../login.php">SignUp <span class="glyphicon glyphicon-user"></span></a></li>
							<li><a href="../login.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
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
</body>
</html>

<?php include("../includes/footer.php"); ?>