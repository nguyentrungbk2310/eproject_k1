<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mysite.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i" rel="stylesheet">
</head>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php">Home</a></li>
						<li><a href="sitemap.php">Sitemap</a></li>
						<li ><a href="blog.php">Blog</a></li>
						<li ><a href="faqs.php">FAQs</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div> <!-- end header -->

	<div class="content_1">
		<div class="container conversion-chart">
			<div class="alert alert-info">
				<h2 class="text-center text-primary">Contact</h2>
			</div>
			<div class="ndcontact">
				<div class="container ">
					<div class="col-sm-8 contact">
					    <div class="form-area">  
					        <form role="form">
					        	<br style="clear:both">
			                    <h3 style="margin-bottom: 25px; text-align: center;">Contact me</h3>
			    				<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
								</div>
			                    <div class="form-group">
			                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
			                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
			                    </div>
			        			<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
					        </form>
					    </div>
					</div>
				</div>
			</div>
				

		</div>
	</div> <!-- end content_1 -->
	
	
	<div class="container-fluid footer" style="background: #54575b;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h2>About us</h2>
					<p>We create this website aims to help people convert units of measurement with Metric Converter and Metric Conversion Table and to better understand alternative measurements that they are unfamiliar with. The measurement units are categorized into types (such as Temperature Conversion, Weight Conversion and so on) seen on the right-hand side which then lead to a series of metric conversion calculators.</p>
					<p><span class="glyphicon glyphicon-map-marker"></span> 285, Doi Can, Ba Dinh, Ha Noi</p>
					<p><span class="glyphicon glyphicon-phone"></span> 0123456789</p>
					<p><span class="glyphicon glyphicon-envelope"></span> aprotrainaptech@gmail.com</p>
				</div>
				<div class="col-sm-2">
					<h2>Associate</h2>
					<a href="#"><div>Home</div></a>
					<a href="#"><div>Contact</div></a>
				</div>
				<div class="col-sm-2">
					<h2>Policy</h2>
					<a href="#"><p>Introduce</p></a>
					<a href="#"><p>Copyright</p></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background: black;">
		<h4 class="container">&copy Copyright - Website Name All Rights Reserved</h4>
	</div>
</body>
</html>