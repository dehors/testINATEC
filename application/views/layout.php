<!Doctype html>
<html lang="es">
	<head>
		<title>CRUD Codingniter</title>
		<link rel="stylesheet" href="<?php echo base_url('public/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
		<script src="<?php echo base_url('public/bower_components/jquery/dist/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

		<!-- files angular -->
		<script src="<?php echo base_url('public/bower_components/angular/angular.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/angular-resource/angular-resource.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/angular-sanitize/angular-sanitize.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/angular-sanitize/angular-sanitize.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') ?>"></script>
		<!-- files angular -->

		<!-- files angular framework -->
		<script src="<?php echo base_url('public/js/angular/app.js') ?>"></script>
		<script src="<?php echo base_url('public/js/angular/constants.js') ?>"></script>
		<script src="<?php echo base_url('public/js/angular/Controllers.js') ?>"></script>
		<script src="<?php echo base_url('public/js/angular/Factories.js') ?>"></script>
		<script src="<?php echo base_url('public/js/angular/Services.js') ?>"></script>
		<!-- files angular framework -->

	</head>
	<body ng-app="test">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img alt="Brand" src="<?php echo base_url('public/img/iconMenu.png') ?>" style="height: 30px;">
					</a>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo base_url('/') ?>">Home <span class="sr-only">(current)</span></a></li>
						<?php if($this->ion_auth->logged_in()){ ?>
							<li><a href="<?php echo base_url('/lesson') ?>">Lessons <span class="sr-only">(current)</span></a></li>
						<?php } ?>
						<!-- <li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li> -->
					</ul>
<!-- 					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form> -->
					<ul class="nav navbar-nav navbar-right">
						<?php if($this->ion_auth->logged_in()){ ?>
							<li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
						<?php } else { ?>
							<li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
						<?php } ?>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li> -->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<!-- Aqui va el contenido de las vistas -->
			<?php 
				$this->load->view($contenido);
			?>
		</div>
		<footer>
			<center style="background: wheat;">https://github.com/slam24/TestCodeigniterAngular1</center>
		</footer>
	</body>
</html>