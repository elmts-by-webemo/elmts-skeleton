<?php 
	session_status()==PHP_SESSION_NONE ? session_start() : session_regenerate_id();
	require_once($_SESSION['ROOT_PATH'].'vendor/autoload.php');
?>
<!doctype html>
<html lang="pl">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="<?php echo getPath('url_images');?>.elmts/logo/favicon.png">
	
		<title>Elmts • Skeleton</title>
		<meta name="description" content="Elmts Skeleton Template">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link href="<?php echo getPath('url_css');?>style.min.css" rel="stylesheet">
		<link href="<?php echo getPath('url_css');?>style-project.min.css" rel="stylesheet">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    
    <!-- ============================== AUTH-SECTION-CONTENT ============================== -->
		<section class="auth-section-content">
			<div class="content-flexbox">
				<div class="flexbox-service">

					<div class="alert alert-secondary w-100 alert-dismissible fade m-1 mb-4 border-4 border-top-0 border-bottom-0 border-end-0 show text-start" role="alert">
					  <p><strong>Uwaga</strong></p>
					  <hr>
					  <p>Wiadomość w postaci alertu zwracanego na stronie.</p>
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

					<a href="<?php echo getPath('url');?>" class="logo"><i class="bi bi-robot display-1"></i></a>
					<p class="display-6">
						Zaloguj do elmts
					</p>
					<form class="form-service w-50">
					
						<label for="email" class="form-label mt-4">Adres email</label>
						<input type="email" class="form-control is-valid" id="email" name="email" value="john.doe@example.com" required aria-describedby="emailHelpBlock">
						<div class="invalid-feedback">Wprowadź adres email</div>
						<div id="emailHelpBlock" class="form-text"></div>

						<label for="password" class="form-label is-invalid mt-4">Hasło</label>
						<input type="password" class="form-control is-invalid" id="password" name="password" value="qwerty" required aria-describedby="passwordHelpBlock">
						<div class="invalid-feedback">Wprowadź hasło</div>
						<div id="passwordHelpBlock" class="form-text"></div>

						<a href="<?php echo getPath('url');?>" class="btn btn-webemo-dark w-100 mt-4 mb-4 rounded-pill">Zaloguj się</a>
						<a href="przypomnienie-hasla">Zapomniałeś hasła?</a>
					
					</form>
				
				</div>
				<div class="flexbox-cta" style="background: url(<?php echo getPath('url_images');?>.elmts/backgrounds/splash_screen_sign_in.jpg) center; background-size: cover;">
				</div>
			</div>
		</section>
    
		<!-- ============================== ALERT-PARTIALS-SECTION ============================== -->
		<section id="partialToastContainer" class="position-fixed z-3 bottom-0 start-50 translate-middle-x">
			
			<div class="toast text-bg-success m-1 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="15000">
				<div class="toast-header">
					<strong class="me-auto">Sukces</strong>
					<small><?php echo date('H:i:s');?></small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Powiadomienie po wykonanej akcji
				</div>
			</div>

			<div class="toast text-bg-danger m-1 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000">
			<div class="toast-header">
				<strong class="me-auto">Błąd</strong>
				<small><?php echo date('H:i:s');?></small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
				Powiadomienie po wykonanej akcji
			</div>
		</div>

		<div class="toast text-bg-info m-1 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
				<strong class="me-auto">Komunikat</strong>
				<small><?php echo date('H:i:s');?></small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
				Powiadomienie po wykonanej akcji
			</div>
		</div>

		</section>
		<script>
			$(document).ready(function(){
				$('.toast').toast('show');
			});
		</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>