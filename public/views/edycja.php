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
<?php include "include/section-header-edit.php"; ?>

<div class="buttons-fixed">
	<div class="fixed-background"></div>
	<button class="btn-circle btn-success">
		<span>Zapisz</span>
		<img src="img/icons/save.svg" alt="">
	</button>
</div>

<div class="inner-wrapper active">
	<div class="container">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Holy guacamole!</strong> You should check in on some of those fields below.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://www.webemo.pl/dist/views/index">Start</a></li>
				<li class="breadcrumb-item"><a href="https://www.webemo.pl/dist/views/helpdesk-panel">Helpdesk</a></li>
				<li class="breadcrumb-item active" aria-current="page">Aktualne</li>
			</ol>
		</nav>
		<!-- Nagłówki na szarym tle zawsze zamykamy w .inner-heading opcjonalnie dodając .heading-buttons -->
		<div class="inner-heading">
			<h1>Dodawanie i edycja</h1>
			<div class="heading-buttons">
				<button type="submit" class="btn btn-success btn-sm">Zapisz</button>
			</div>
		</div>
		<div class="basic-box">
			<h3>Edycja</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ullam, assumenda ad culpa atque sequi aliquid. Deleniti eligendi ipsa expedita pariatur eveniet ipsam nemo, dicta rem molestiae illum, repudiandae eius inventore at tempora non alias delectus incidunt facere nihil! Odio.</p>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ullam, assumenda ad culpa atque sequi aliquid. Deleniti eligendi ipsa expedita pariatur eveniet ipsam nemo, dicta rem molestiae illum, repudiandae eius inventore at tempora non alias delectus incidunt facere nihil! Odio.</p>
		</div>
	</div>
</div>

<div class="modal-service-wrapper" data-modal="modalDelete">
	<div class="modal-service">
		<div class="service-inner">
			<button type="button" class="service-button">
				<span class="button-bar"></span>
				<span class="button-bar"></span>
			</button>
			<div class="service-content">
				<h2 class="heading">Potwierdź usunięcie</h2>
				<div class="description">
					<p>Jesteś pewny, że chcesz usunąć wskazany element?</p>
				</div>
			</div>
			<div class="service-buttons">
				<a href="" class="btn btn-danger">Usuń</a>
			</div>
		</div>
	</div>
</div>

<script>
	$('.modal-button').click(function() {
		var myEm = $(this).attr('data-modal');
		$('div[data-modal = '+myEm+']').addClass('active');
		$("body").addClass("no-scroll");
	});

	$('.modal-service-wrapper .service-button, .modal-service-wrapper .btn-link').click(function() {
		$(".modal-service-wrapper").removeClass("active");
		$("body").removeClass("no-scroll");
	});

	$('.modal-service-wrapper').click(function() {
		$(this).removeClass("active");
		$("body").removeClass("no-scroll");
	});

	$('.service-inner').click(function(event){
	    event.stopPropagation();
	});
</script>

<?php include "include/section-footer.php"; ?>

<script>
	$('.section-footer').removeClass('active');
</script>

<?php include "include/section-footer-scripts.php"; ?>