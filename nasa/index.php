<html>
<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		header("location:user/cargo.php");
	}
	else
	{

?>

<head>
	<title>AV Logistics</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>	
	
	<link rel="stylesheet" href="../css/bootstrap.css">
	
	
	
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
				<a href="index.php" class="navbar-brand">AV Logistics</a>
			</div>
			<div class="collapse navbar-collapse" id="navcol">
				<ul class="nav navbar-nav">
					<li><a href="user/cargo.php">Cargo</a></li>
					<li><a href="user/track.php">Track Order</a></li>
					<li><a href="user/order.php">My Orders</a><li>
					<li><a href="user/price.php">Pricing</a><li>
					<li><a href="user/contact.php">Contact Us</a><li>
					<li><a href="user/about.php">About Us</a><li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">SignUp <span class="glyphicon glyphicon-user"></span></a></li>
					<li><a href="login.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
				<ul>
			</div>
		</div>
	</nav>
	
	<div class="jumbotron">
		<br><img src="includes/images/log.jpg" align="left" height="125" width="150">
		<div class="container text-center">
			<div>
				<h2>AV Logistics <span class="glyphicon glyphicon-send"></span></h2>
				<p>We serve you better.</p>
				
				<div class="btn btn-group">
					<a href="" class="btn btn-lg btn-primary">Download App</a>
					<a href="" class="btn btn-lg btn-primary">Learn More</a>
				</div>
			</div>
		</div>
	</div>
		
	<div style="background-color:paleturquoise">
	<div class="container">
		<div class="well" style="background-color:paleturquoise">
			<section>
				<div class="page-header">
					<h2>Feedbacks.&nbsp;<span class="glyphicon glyphicon-modal-window"></span>&nbsp;&nbsp;<small>Check out some feedbacks here..</small></h2>
				</div>
					<div class="row">
						<div class="col-lg-4">
							<blockquote>
								<p>Man must rise above the Earth -- to the top of the atmosphere and beyond -- for only thus will fully understand the world in which he lives.</p>
								<p>Astronomy? Impossible to understand and madness to investigate.</p>
								<footer>Socrates</footer>
							</blockquote>
						</div>
					<div class="col-lg-4">
						<blockquote>
							<p>For every one, as I think must see that astronomy compels the soul to look upwards and leads us from this world to another.</p>
							<footer>Glaucon, the older brother of Plato</footer>
						</blockquote>
					</div>
					<div class="col-lg-4">
						<blockquote>
							<p>Astonomy is nostalgic.</p>
							<footer>Shivansh Singh</footer>
						</blockquote>
					</div>
				</div>
			</section>
		</div>
	</div>
	</div>
	<br><br>
	
	<div class="container">
		<div class="page-header">
			<h2>Gallery.&nbsp;<span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;<small>Explore the Gallery</small></h2>
		</div>
		<center>
			<div class="carousel slide" id="screenshot" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#screenshot" data-slide-to="0" class="active"></li>
					<li data-target="#screenshot" data-slide-to="1"></li>
					<li data-target="#screenshot" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="includes/images/ship.jpg" height="450" width="1000" alt="Shipping">
							<div  class="carousel-caption">
								<h3>Road to Intersteller</h3>
								<p>Mark your date for an Interstellar voyage.<p>
							</div>
					</div>
					<div class="item">
						<img src="includes/images/containers.png" height="450" width="1000" alt="All Type">
							<div  class="carousel-caption">
								<h3>Too close to Space-Shuttle</h3>
								<p>Go for a Space-Shuttle journey to ISS.<p>
							</div>
					</div>
					<div class="item">
						<img src="includes/images/bcon1.jpg" height="300" width="1000" alt="Container">
							<div  class="carousel-caption">
								<h3>Awsome</h3>
								<p>Image says itself.<p>
							</div>
					</div>
				</div>
				<a href="#screenshot" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left">
				</a>
				<a href="#screenshot" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right">
				</a>
			</div>
		</center>
	
		<br><br><br>
		<div class="well">
			<div class="page-header">
			<center><h2>Website is locked at present...&nbsp;<span class="glyphicon glyphicon-lock"></span><br><br>
				<button class="btn btn-lg pull-left btn-info"><a href="login.php">Login   </a><span class="glyphicon glyphicon-log-in"></span>
				</button>
				<button class="btn btn-lg pull-right btn-success"><a href="login.php">Signup   </a><span class="glyphicon glyphicon-user"></span>
				</button>
				<p><small>Please Login or Signup to explore more.</small></p></h2>
			</center>
			</div>
		</div>
	</div>
	<br><br>
	<?php include("includes/footer.php");?>
	
</body>
</html>

<?php }?>