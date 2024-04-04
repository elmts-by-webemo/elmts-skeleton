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
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://www.webemo.pl/dist/views/index">Start</a></li>
				<li class="breadcrumb-item"><a href="https://www.webemo.pl/dist/views/helpdesk-panel">Helpdesk</a></li>
				<li class="breadcrumb-item active" aria-current="page">Aktualne</li>
			</ol>
		</nav>
		<!-- Nagłówki na szarym tle zawsze zamykamy w .inner-heading opcjonalnie dodając .heading-buttons -->
		<div class="row">
			<div class="col-lg-3">
				<div class="inner-heading">
					<h1>Postęp</h1>
				</div>
				<div class="text-center btn-more-products-wrapper">
					<div class="more-products-counter">
						<div class="number"><b>12 z 21</b> produktów</div>
						<div class="line"><div class="line-inner" style="width: 54%;"></div></div>
					</div>
					<a href="" target="_blank" class="btn btn-success">Pokaż więcej</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="inner-heading">
					<h1>Dodajesz nowy produkt</h1>
				</div>
				<div class="basic-box">
					<h3>Zdefiniuj podstawowe dane</h3>
					<form class="form-service">
						<div class="row">
							<div class="col-md-3">
								<label for="">Email</label>
								<input class="form-control validate" type="email">
							</div>
							<div class="col-md-3">
								<label for="">Imię</label>
								<input class="form-control validate" type="text">
							</div>
							<div class="col-md-3">
								<label for="">Rola</label>
								<select class="form-select validate">
									<option value="" selected="" disabled="">Wybierz...</option>
								</select>
							</div>
							<div class="col-md-3">
								<label for="">Hasło</label>
								<input class="form-control validate" type="password">
							</div>
							<div class="col-md-12">
								<label for="">Select 2</label>
								<select class="select2" name="state">
									<option value="AL">Alabama</option>
									<option value="WY">Wyoming</option>
								</select>
							</div>
							<div class="col-md-12">
								<label for="">Wiadomość</label>
								<textarea type="text" class="form-control validate"></textarea>
							</div>
						</div>
						<label class="checkbox-service">
							<input type="checkbox" name="size">
							<span class="service-inner">
								<p class="name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est fugit voluptate quae laboriosam vitae. Possimus neque, suscipit rerum tempora magni.</p>
							</span>
						</label>
						<div class="info">
							<p>* pola obowiązkowe</p>
						</div>
						<button class="btn btn-success loading">Wyślij wiadomość</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "include/section-footer.php"; ?>

<script>
	$('.section-footer').removeClass('active');
</script>

<?php include "include/section-footer-scripts.php"; ?>