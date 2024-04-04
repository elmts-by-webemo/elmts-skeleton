<!DOCTYPE html>
<!--[if !IE]><!--><html lang="pl"><!--[endif]-->
<!--[if lt IE 9]><html class="lt-ie9" lang="pl"><![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/logo/favicon.png">
	
	<title>Elements • System</title>
	<meta name="description" content="Crevo Blueprint">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}
	</style>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-project.css" rel="stylesheet">

	<!-- Extensions -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<!-- ============================== LOGOWANIE-SECTION-CONTENT ============================== -->
	<section class="logowanie-section-content">
		<div class="content-flexbox">
			<div class="flexbox-service">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Holy guacamole!</strong> You should check in on some of those fields below.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<a href="logowanie" class="logo">elements<span>•</span></a>
				<form class="form-service">
					<label for="">Podaj nowe hasło</label>
					<input class="form-control validate" type="password">
					<label for="">Powtórz nowe hasło</label>
					<input class="form-control validate" type="password">
					<a href="logowanie" class="btn btn-dark">Resetuj hasło</a>
				</form>
			</div>
			<div class="flexbox-cta" style="background: url(img/pictures/5601712.jpg) center; background-size: cover;">
				<!-- <iframe src="https://www.webemo.pl/elements" frameborder="0"></iframe> -->
			</div>
		</div>
	</section>

<?php include "include/section-footer-scripts.php"; ?>