<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="{{ asset('images/.elmts/logo/favicon.png') }}">
	
		<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Elmts • Skeleton') }}</title>
		<meta name="description" content="Elmts Skeleton Template">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style-project.min.css') }}" rel="stylesheet">
   
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    
    <!-- ============================== AUTH-SECTION-CONTENT ============================== -->
		<section class="auth-section-content">
			<div class="content-flexbox">
				<div class="flexbox-service">

					@include('partials.alert')
					@yield('content')

				</div>
				
				<div class="flexbox-cta" style="background: url({{ asset('images/.elmts/backgrounds/splash_screen_sign_in.jpg') }}) center; background-size: cover;">
				</div>
			
			</div>
		</section>
    

		<section id="partialToastContainer" class="position-fixed z-3 bottom-0 start-50 translate-middle-x">
			@include('partials.toast')
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