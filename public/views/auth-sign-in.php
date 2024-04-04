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

		<!-- Styles -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="<?php echo getPath('url_css');?>style.css" rel="stylesheet">
		<link href="<?php echo getPath('url_css');?>style-project.css" rel="stylesheet">
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

					<a href="logowanie" class="logo">elmts<span>•</span></a>
					<form class="form-service">
						<label for="">Login</label>
						<input class="form-control validate" type="email">
						<div class="invalid-feedback">Pole wymagane. Wprowadź poprawny adres email.</div>
						<label for="">Hasło</label>
						<div class="input-group">
							<input type="password" name="password" id="6495afaabd13c" value="" required="" class="form-control">
							<button class="btn btn-outline-secondary border-start-0 rounded-end" type="button" id="passButton6495afaabd13c" onclick="password_show_hide('#6495afaabd13c', '#passButton6495afaabd13c');"><img src="img/icons/view.svg" alt=""></button>
						</div>
						<a href="<?php echo getPath('url');?>/views/index.php" class="btn btn-dark">Zaloguj się</a>
						<a href="przypomnienie-hasla" class="forgot">Zapomniałeś hasła?</a>
					</form>
				</div>
				<div class="flexbox-cta" style="background: url(img/pictures/5601712.jpg) center; background-size: cover;">
					<!-- <iframe src="https://www.webemo.pl/elements" frameborder="0"></iframe> -->
				</div>
			</div>
		</section>
    

  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>