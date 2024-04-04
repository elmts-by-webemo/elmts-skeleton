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

<div class="demo-label">
	<div class="label-heading">To jest wersja demo <b>pakietu Premium</b></div>
	<a href="" target="_blank" class="btn btn-success btn-sm">Link do podglądu sklepu</a>
</div>

<?php include "include/section-header.php"; ?>

<div class="buttons-fixed">
	<div class="fixed-background"></div>
	<div class="dropup">
		<button class="dropdown-toggle btn btn-circle btn-info" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			<span>Dodaj</span>
			<img src="img/icons/add.svg" alt="">
		</button>
		<ul class="dropdown-menu dropdown-menu-right">
			<li><button class="dropdown-item premium" type="submit">Dodaj nowy</button></li>
			<li><button class="dropdown-item pro" type="submit">Dodaj nowy element</button></li>
		</ul>
	</div>
	<button class="btn btn-circle btn-success">
		<span>Zapisz</span>
		<img src="img/icons/save.svg" alt="">
	</button>
</div>

<div class="inner-wrapper">
	<div class="container-fluid">
		<div class="inner-heading">
			<h1>Produkty</h1>
		</div>
		<div class="basic-box">
			<div class="products-heading">
				<div class="heading-tools">
					<div class="dropdown">
						<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="img/icons/dropdown.svg" alt="">
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><button id="selectAll" onclick="toggleAll(true)" class="dropdown-item" type="submit">Zaznacz wszystko</button></li>
							<li><button id="deselectAll" onclick="toggleAll(false)" class="dropdown-item" type="submit">Odznacz wszystko</button></li>
						</ul>
					</div>
					<h3>Zaznaczono: <strong>0</strong></h3>
				</div>
				<div class="heading-wrapper">
					<div class="heading-grid-wrapper">
						<div class="heading-grid">
							<button class="active" id="grid-flex" href=""><svg class="fill-default" height="600pt" viewBox="-19 -19 600 600" width="600pt" xmlns="http://www.w3.org/2000/svg"><path d="m251.25 12.5c0-6.90625-5.59375-12.5-12.5-12.5h-226.25c-6.90625 0-12.5 5.59375-12.5 12.5v226.25c0 6.90625 5.59375 12.5 12.5 12.5h226.25c6.90625 0 12.5-5.59375 12.5-12.5zm-25 213.75h-201.25v-201.25h201.25zm0 0"/><path d="m562.5 12.5c0-6.90625-5.59375-12.5-12.5-12.5h-226.25c-6.90625 0-12.5 5.59375-12.5 12.5v226.25c0 6.90625 5.59375 12.5 12.5 12.5h226.25c6.90625 0 12.5-5.59375 12.5-12.5zm-25 213.75h-201.25v-201.25h201.25zm0 0"/><path d="m251.25 323.75c0-6.90625-5.59375-12.5-12.5-12.5h-226.25c-6.90625 0-12.5 5.59375-12.5 12.5v226.25c0 6.90625 5.59375 12.5 12.5 12.5h226.25c6.90625 0 12.5-5.59375 12.5-12.5zm-25 212.5h-201.25v-200h201.25zm0 0"/><path d="m562.5 323.75c0-6.90625-5.59375-12.5-12.5-12.5h-226.25c-6.90625 0-12.5 5.59375-12.5 12.5v226.25c0 6.90625 5.59375 12.5 12.5 12.5h226.25c6.90625 0 12.5-5.59375 12.5-12.5zm-25 212.5h-201.25v-200h201.25zm0 0"/></svg></button>
							<button id="grid-list" href=""><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489.7 489.7" style="enable-background:new 0 0 489.7 489.7;" xml:space="preserve"><path d="M52.7,134.75c29.1,0,52.7-23.7,52.7-52.7s-23.6-52.8-52.7-52.8S0,52.95,0,81.95S23.7,134.75,52.7,134.75z M52.7,53.75c15.6,0,28.2,12.7,28.2,28.2s-12.7,28.2-28.2,28.2s-28.2-12.7-28.2-28.2S37.2,53.75,52.7,53.75z"/><path d="M52.7,297.55c29.1,0,52.7-23.7,52.7-52.7s-23.6-52.7-52.7-52.7S0,215.75,0,244.85S23.7,297.55,52.7,297.55z M52.7,216.65c15.6,0,28.2,12.7,28.2,28.2s-12.7,28.2-28.2,28.2s-28.2-12.6-28.2-28.2S37.2,216.65,52.7,216.65z"/><path d="M52.7,460.45c29.1,0,52.7-23.7,52.7-52.7c0-29.1-23.7-52.7-52.7-52.7S0,378.75,0,407.75C0,436.75,23.7,460.45,52.7,460.45z M52.7,379.45c15.6,0,28.2,12.7,28.2,28.2c0,15.6-12.7,28.2-28.2,28.2s-28.2-12.7-28.2-28.2C24.5,392.15,37.2,379.45,52.7,379.45z"/><path d="M175.9,94.25h301.5c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H175.9c-6.8,0-12.3,5.5-12.3,12.3S169.1,94.25,175.9,94.25z"/><path d="M175.9,257.15h301.5c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H175.9c-6.8,0-12.3,5.5-12.3,12.3S169.1,257.15,175.9,257.15z"/><path d="M175.9,419.95h301.5c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H175.9c-6.8,0-12.3,5.5-12.3,12.3S169.1,419.95,175.9,419.95z"/></svg></button>
						</div>
					</div>
				</div>
			</div>
			<div class="products-flexbox">
				<div class="product-service promotion new">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-1.png" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel uszak skandynawski czerwony</a>
						<a href="produkt" class="info grid-view">Produkt ekologiczy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<a href="" class="info list-view">Produkt ekologiczy</a>
						<p class="price"><small>1249.00</small>1049.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square cover">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel skandynawski / loft wygodny kolor musztardowy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<p class="price"><small>899.00</small>799.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service own">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper cover square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-2.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
						<p class="price"><small>429.00</small>389.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service sale">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-3.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Pufa na złotych nóżkach Foksi - zielona</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Pufa na złotych nóżkach Foksi - zielona</a>
						<p class="price"><small>315.00</small>228.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square cover">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel skandynawski / loft wygodny kolor musztardowy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<p class="price"><small>899.00</small>799.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service sale">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-3.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Pufa na złotych nóżkach Foksi - zielona</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Pufa na złotych nóżkach Foksi - zielona</a>
						<p class="price"><small>315.00</small>228.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service promotion new">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-1.png" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel uszak skandynawski czerwony</a>
						<a href="produkt" class="info grid-view">Produkt ekologiczy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<a href="" class="info list-view">Produkt ekologiczy</a>
						<p class="price"><small>1249.00</small>1049.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service own">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper cover square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-2.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
						<p class="price"><small>429.00</small>389.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service promotion new">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-1.png" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel uszak skandynawski czerwony</a>
						<a href="produkt" class="info grid-view">Produkt ekologiczy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<a href="" class="info list-view">Produkt ekologiczy</a>
						<p class="price"><small>1249.00</small>1049.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square cover">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Fotel skandynawski / loft wygodny kolor musztardowy</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Fotel uszak skandynawski czerwony</a>
						<p class="price"><small>899.00</small>799.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service own">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper cover square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-2.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Hoker ROTTERDAM krzesło obrotowe barowe noga czarna z oparciem eko skóra regulowany</a>
						<p class="price"><small>429.00</small>389.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service sale">
					<label class="checkbox-service">
						<input type="checkbox">
						<span class="service-inner"></span>
					</label>
					<div class="badge-wrapper">
						<div class="badge promotion">Promocja</div>
						<div class="badge new">Nowość</div>
						<div class="badge bestseller">Bestseller</div>
						<div class="badge sale">Wyprzedaż</div>
						<!-- Znacznik ten może mieć maksymalnie 15 znaków -->
						<div class="badge own">Ostatnie sztuki</div>
					</div>
					<header>
						<a href="produkt" class="service-image-wrapper square">
							<div class="image-cover"><div class="cover-inner background-default"><img src="img/icons/loupe.svg" alt=""></div></div>
							<div class="service-image">
								<img src="img/@temp/product-3.jpg" alt="">
							</div>
						</a>
						<a href="produkt" class="name grid-view">Pufa na złotych nóżkach Foksi - zielona</a>
					</header>
					<div class="footer">
						<a href="produkt" class="name list-view">Pufa na złotych nóżkach Foksi - zielona</a>
						<p class="price"><small>315.00</small>228.00 <span>PLN</span></p>
					</div>
				</div>
				<div class="product-service service-hidden"></div>
				<div class="product-service service-hidden"></div>
			</div>
			<div class="pagination-nav-wrapper">
				<div class="pagination-view">
					<p>Wyników na stronę:</p>
					<button type="submit" class="active">10</button>
					<button type="submit">25</button>
					<button type="submit">50</button>
					<button type="submit">∞</button>
				</div>
				<div class="text-center btn-more-products-wrapper">
					<div class="more-products-counter">
						<div class="number"><b>12 z 21</b> produktów</div>
						<div class="line"><div class="line-inner" style="width: 54%;"></div></div>
					</div>
					<a href="" target="_blank" class="btn btn-success">Pokaż więcej</a>
				</div>
				<div class="pagination-view">
					<p>Idź do strony:</p>
					<div class="form-service" style="">
						<input type="number" class="form-control">
					</div>
					<p>z 34</p>
					<button type="submit">&rarr;</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.select2').select2({
			language: "pl"
		});

		// Pobranie wszystkich elementów .product-service
		const productServices = document.querySelectorAll('.product-service');
		let lastCheckedIndex = null;
		let isShiftPressed = false;
		let isSelectionActive = false;

		// Funkcja do zaznaczania elementów między dwoma indeksami
		function checkItemsInRange(startIndex, endIndex) {
			productServices.forEach((productService, index) => {
				if (index >= startIndex && index <= endIndex) {
					const checkbox = productService.querySelector('.checkbox-service input[type="checkbox"]');
					if (checkbox) {
						checkbox.checked = true;
						productService.classList.add('checked');
					}
				}
			});

			updateSelectedCount();
		}

		// Funkcja do odznaczania wszystkich elementów
		function uncheckAllItems() {
			productServices.forEach((productService) => {
				const checkbox = productService.querySelector('.checkbox-service input[type="checkbox"]');
				if (checkbox) {
					checkbox.checked = false;
					productService.classList.remove('checked');
				}
			});

			updateSelectedCount();
		}

		// Obsługa zdarzenia naciśnięcia/wypuszczenia przycisku SHIFT
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Shift') {
				isShiftPressed = true;
			}
		});

		document.addEventListener('keyup', (event) => {
			if (event.key === 'Shift') {
				isShiftPressed = false;
				lastCheckedIndex = null;
			}
		});

		// Iteracja przez wszystkie elementy .product-service
		productServices.forEach((productService, currentIndex) => {
			// Pobranie elementu <input type="checkbox">
			const checkbox = productService.querySelector('.checkbox-service input[type="checkbox"]');
			
			// Sprawdzenie czy checkbox istnieje
			if (checkbox) {
				// Nasłuchiwanie zdarzenia zmiany stanu checkboxa
				checkbox.addEventListener('change', (event) => {
					if (isShiftPressed && lastCheckedIndex !== null) {
						const startIndex = Math.min(currentIndex, lastCheckedIndex);
						const endIndex = Math.max(currentIndex, lastCheckedIndex);
						checkItemsInRange(startIndex, endIndex);
						isSelectionActive = true;
					} else {
						if (checkbox.checked) {
							// Dodanie klasy .checked do rodzica (.product-service)
							productService.classList.add('checked');
						} else {
							// Usunięcie klasy .checked z rodzica (.product-service)
							productService.classList.remove('checked');
						}
						if (!isShiftPressed) {
							lastCheckedIndex = currentIndex;
						}
						isSelectionActive = false;
					}

					updateSelectedCount();
				});
			}

			// Blokowanie zaznaczania podświetlenia przez przeglądarkę
			productService.addEventListener('mousedown', (event) => {
				event.preventDefault();
			});
		});

		// Obsługa zdarzenia kliknięcia na body
		document.body.addEventListener('click', (event) => {
			// Jeśli kliknięcie nie było na checkboxie
			if (!event.target.matches('.checkbox-service input[type="checkbox"]')) {
				isSelectionActive = false;
			}
		});

		// Obsługa zdarzenia kliknięcia na dokument
		document.addEventListener('click', (event) => {
			// Jeśli kliknięcie było poza elementami .product-service
			if (!event.target.closest('.product-service')) {
				isSelectionActive = false;
			}
		});







  // Funkcja sprawdzająca ilość aktualnie zaznaczonych checkboxów
  function updateSelectedCount() {
    var checkboxes = document.querySelectorAll('.product-service input[type="checkbox"]');
    var selectedCount = 0;

    checkboxes.forEach(function (checkbox) {
      if (checkbox.checked) {
        selectedCount++;
      }
    });

    document.querySelector('.heading-tools strong').textContent = selectedCount;
  }

  // Funkcja obsługująca kliknięcie w checkbox
  function checkboxClicked() {
    updateSelectedCount();
  }

  // Funkcja obsługująca kliknięcie w przycisk "Zaznacz wszystko"
  function selectAll() {
    var checkboxes = document.querySelectorAll('.product-service input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
      checkbox.checked = true;
      checkbox.parentNode.parentNode.classList.add('checked');
    });

    updateSelectedCount();
  }

  // Funkcja obsługująca kliknięcie w przycisk "Odznacz wszystko"
  function deselectAll() {
    var checkboxes = document.querySelectorAll('.product-service input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
      checkbox.parentNode.parentNode.classList.remove('checked');
    });

    updateSelectedCount();
  }

  // Dodanie obsługi zdarzeń dla checkboxów
  var checkboxes = document.querySelectorAll('.product-service input[type="checkbox"]');
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('click', checkboxClicked);
  });

  // Dodanie obsługi zdarzeń dla przycisków
  document.getElementById('selectAll').addEventListener('click', selectAll);
  document.getElementById('deselectAll').addEventListener('click', deselectAll);


	});
</script>

<?php include "include/section-footer.php"; ?>
<?php include "include/section-footer-scripts.php"; ?>