<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>galeano</title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
<audio autobuffer autoloop loop controls>
	<source src="cancion de cuna.mp3">
	
	</object>
</audio>
<div class="container"></div>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">galeano</a>
			<<img src="public/imagenes/logo.jpg" alt="" width="50">
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">buscar</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
	<!--carousel-->
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<center>
		<div class="carousel-inner" >
		
			<div class="item">
				<img data-src="public/imagenes/imagen 1 (2).jpg" alt="First slide" src="public/imagenes/imagen 1 (2).jpg">
				
				
			</div>
			<div class="item">
				<img data-src="public/imagenes/imagen 2 (2).jpg" alt="Second slide" src="public/imagenes/imagen 2 (2).jpg">
				
			</div>
			<div class="item active">
				<img data-src="public/imagenes/imagen 3 (2).jpg" alt="Third slide" src="public/imagenes/imagen 3 (2).jpg">
				
				
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</nav>
</center>
<video autobuffer autoloop loop controls width="600">
	<source src="Katy Perry - Part Of Me.mp4">
	
</video>
<video autobuffer autoloop loop controls width="500">
	<source src="Consejos para comprar la ropa del recién nacido.mp4">
</video>

	<script src="public/js/jquery-1.12.1.js"></script>
	<script src="public/js/bootstrap.js"></script>
</body>
</html>