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
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
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
			<li><button class="dropdown-item premium" data-elmts-heading="Premium" type="submit">Dodaj nowy</button></li>
			<li><button class="dropdown-item pro" data-elmts-heading="Pro" type="submit">Dodaj nowy element</button></li>
		</ul>
	</div>
	<button class="btn btn-circle btn-success">
		<span>Zapisz</span>
		<img src="img/icons/save.svg" alt="">
	</button>
</div>

<div class="inner-wrapper">
	<div class="container-fluid">
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
		<div class="sticky-search-engine">
			<div class="form-service">
				<label for="">Wpisz nazwę szukanej kategorii</label>
			</div>
			<div class="search-engine-inner">
				<div class="inner-service">
					<input class="form-control" type="text" id="stickySearchInput">
					<div class="form-service">
						<select class="select2" name="state">
							<option value="AL">Szukaj w kategorii</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class="breakpoint"></div>
					<button type="button" class="btn btn-success btn-sm" onClick='findString(document.getElementById("stickySearchInput").value)'>Wyszukaj</button>
					<button type="button" class="btn btn-danger btn-sm loading" onClick='findString(document.getElementById("stickySearchInput").value)'>Wyczyść</button>
				</div>
			</div>
		</div>
		<div class="heading-language">
			<div class="name">Produkt</div>
			<div class="language"><img src="img/@temp/poland.svg" alt=""><span>Język <strong>PL</strong></span></div>
		</div>
		<h1><small>Jednoczęściowy strój kąpielowy Crisscross Knot</small></h1>
		<div class="basic-box">
			<ul class="nav nav-pills">
				<li class="nav-item"><span class="badge badge-pill badge-info" style="font-size: 13px; background: #eee; border: 0.5px solid #ccc; color: #444;">ID 3</span></li>
				<li class="nav-item">
					<a class="nav-link premium" data-elmts-heading="Premium" chref="http://www.elmts.pl/dist/views/ecommerce/edit-product?id_product=3">Dane</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="http://www.elmts.pl/dist/views/ecommerce/edit-product-prices?id_product=3">Ceny</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://www.elmts.pl/dist/views/ecommerce/edit-product-seo?id_product=3">Opis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link pro" data-elmts-heading="Pro" href="http://www.elmts.pl/dist/views/ecommerce/edit-product-images?id_product=3">Zdjęcia</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://www.elmts.pl/dist/views/ecommerce/edit-product-warehouse?id_product=3">Magazyn</a>
				</li>
			</ul>
		</div>
		<div class="inner-heading">
			<h1>Pulpit</h1>
			<div class="heading-buttons">
				<button type="submit" class="btn btn-success btn-sm">Zapisz</button>
			</div>
		</div>
		<script>
			findString = function findText(text) {
				window.find(text);
			}
			window.addEventListener('keydown', function (event) {
				// if the keyCode is 13 ( enter key was pressed )
				if (event.keyCode === 13) {
					window.find(document.getElementById("stickySearchInput").value);
				}
			})
		</script>
		<div class="basic-box">
			<div class="box-loader">
				<div class="spinner-border" role="status">
					<span class="sr-only">Ładowanie...</span>
				</div>
			</div>
			<h3>Pulpit</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ullam, assumenda ad culpa atque sequi aliquid. Deleniti eligendi ipsa expedita pariatur eveniet ipsam nemo, dicta rem molestiae illum, repudiandae eius inventore at tempora non alias delectus incidunt facere nihil! Odio.</p>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ullam, assumenda ad culpa atque sequi aliquid. Deleniti eligendi ipsa expedita pariatur eveniet ipsam nemo, dicta rem molestiae illum, repudiandae eius inventore at tempora non alias delectus incidunt facere nihil! Odio.</p>
		</div>
		<div class="inner-heading">
			<h1>Elementy formularza</h1>
		</div>
		<div class="basic-box">
			<h3>Formularz</h3>
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
						<label for="">Select 2 Multiple</label>
						<select class="select2" name="" multiple="">
							<option disabled="" value="null" data-select2-id="22">Wybierz</option>
							<option value="1027" data-select2-id="23">Model C-80x20 (15mm)</option>
							<option value="1042" data-select2-id="24">Model FF.3.1</option>
							<option value="1047" data-select2-id="25">Model FF.4.1</option>
							<option value="1054" data-select2-id="26">Model FF.5.1</option>
							<option value="1058" data-select2-id="27">Model FF.6.1</option>
							<option value="1062" data-select2-id="28">Model FF.7.1</option>
							<option value="1065" data-select2-id="29">Model MIX.1</option>
							<option value="1074" data-select2-id="30">Model Sztachetowe</option>
							<option value="1076" data-select2-id="31">Akcesoria do bram przesuwnych</option>
							<option selected="" value="1005" data-select2-id="8">CLASSIC Line</option>
							<option value="1007" data-select2-id="32">Model C-80x20 (35 mm)</option>
							<option selected="" value="1008" data-select2-id="9">Rozstaw profili 35mm</option>
							<option selected="" value="1012" data-select2-id="10">Model FF.2.1</option>
							<option value="1040" data-select2-id="33">Model FF.2.2</option>
							<option value="1043" data-select2-id="34">Model FF.3.2</option>
							<option value="1048" data-select2-id="35">Model FF.4.2a</option>
							<option value="1055" data-select2-id="36">Model FF.5.2</option>
							<option value="1059" data-select2-id="37">Model FF.6.2</option>
							<option value="1063" data-select2-id="38">Model FF.7.2</option>
							<option value="1066" data-select2-id="39">Model MIX.2</option>
							<option value="1075" data-select2-id="40">Model Sztachetowe Zakryte</option>
							<option value="1077" data-select2-id="41">Akcesoria do bram uchylnych</option>
							<option value="1006" data-select2-id="42">Model CR-80x20 (35 mm)</option>
							<option value="1009" data-select2-id="43">Rozstaw profili 15mm</option>
							<option value="1010" data-select2-id="44">Model CR-80x20 (15mm)</option>
							<option value="1011" data-select2-id="45">MODERN Line</option>
							<option value="1028" data-select2-id="46">Model C-100x20 (15mm)</option>
							<option value="1034" data-select2-id="47">Model FF.1.1a</option>
							<option value="1041" data-select2-id="48">Model FF.2.3</option>
							<option value="1044" data-select2-id="49">Model FF.3.3</option>
							<option value="1049" data-select2-id="50">Model FF.4.2b</option>
							<option value="1056" data-select2-id="51">Model FF.5.3</option>
							<option value="1060" data-select2-id="52">Model FF.6.3</option>
							<option value="1064" data-select2-id="53">Model FF.7.3</option>
							<option value="1067" data-select2-id="54">Model MIX.3</option>
							<option value="1078" data-select2-id="55">Akcesoria do furtek</option>
							<option value="1013" data-select2-id="56">INNOVATION Line</option>
							<option value="1021" data-select2-id="57">Model C-100x20 (35mm)</option>
							<option value="1029" data-select2-id="58">Model CR-100x20 (15mm)</option>
							<option value="1035" data-select2-id="59">Model FF.1.1b</option>
							<option value="1045" data-select2-id="60">Model FF.3.4</option>
							<option value="1050" data-select2-id="61">Model FF.4.3 (35mm)</option>
							<option value="1057" data-select2-id="62">Model FF.5.4</option>
							<option value="1061" data-select2-id="63">Model FF.6.4</option>
							<option value="1068" data-select2-id="64">Model MIX.4</option>
							<option value="1079" data-select2-id="65">Akcesoria do przęseł</option>
							<option value="1014" data-select2-id="66">DeLUXE Line</option>
							<option value="1022" data-select2-id="67">Model CR-100x20 (35mm)</option>
							<option value="1030" data-select2-id="68">Model C-120x20 (15mm)</option>
							<option value="1036" data-select2-id="69">Model FF.1.2</option>
							<option value="1046" data-select2-id="70">Model FF.3.5</option>
							<option value="1051" data-select2-id="71">Model FF.4.3 (15mm)</option>
							<option value="1069" data-select2-id="72">Model MIX.5</option>
							<option value="1016" data-select2-id="73">PROGRESSIVE Line</option>
							<option value="1023" data-select2-id="74">Model C-120x20 (35mm)</option>
							<option value="1024" data-select2-id="75">Model CR-120x20 (35mm)</option>
							<option value="1031" data-select2-id="76">Model CR-120x20 (15mm)</option>
							<option value="1037" data-select2-id="77">Model FF.1.3</option>
							<option value="1052" data-select2-id="78">Model FF.4.4</option>
							<option value="1070" data-select2-id="79">Model MIX.6</option>
							<option value="1015" data-select2-id="80">DELUXE 2.0 Line</option>
							<option value="1025" data-select2-id="81">Model C-180x20 (35mm)</option>
							<option value="1032" data-select2-id="82">Model C-180x20 (15mm)</option>
							<option value="1038" data-select2-id="83">Model FF.1.4</option>
							<option value="1053" data-select2-id="84">Model FF.4.5</option>
							<option value="1071" data-select2-id="85">Model MIX.7</option>
							<option value="1019" data-select2-id="86">ECO Line</option>
							<option value="1026" data-select2-id="87">Model CR-180x20 (35mm)</option>
							<option value="1033" data-select2-id="88">Model CR-180x20 (15mm)</option>
							<option value="1039" data-select2-id="89">Model FF.1.5</option>
							<option value="1072" data-select2-id="90">Model MIX.8</option>
							<option value="1017" data-select2-id="91">MIX Line</option>
							<option value="1073" data-select2-id="92">Model MIX.9</option>
							<option value="1018" data-select2-id="93">RAIL Line</option>
							<option value="1020" data-select2-id="94">AKCESORIA</option>
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
		<div class="basic-box">
			<h3>Tabela</h3>
			<div class="dropdown absolute">
				<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="img/icons/dropdown.svg" alt="">
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><button class="dropdown-item" type="submit">Zapisz</button></li>
				</ul>
			</div>
			<div class="table-search-engine">
				<div class="form-service">
					<label for="">Wpisz nazwę szukanej kategorii</label>
				</div>
				<div class="search-engine-inner">
					<div class="inner-service">
						<input class="form-control" type="text">
						<div class="form-service">
							<select class="select2" name="state">
								<option value="AL">Szukaj w kategorii</option>
								<option value="WY">Wyoming</option>
							</select>
						</div>
						<div class="form-service d-none">
							<select class="select2" name="state">
								<option value="AL">Szukaj w kategorii</option>
								<option value="WY">Wyoming</option>
							</select>
						</div>
					</div>
					<div class="inner-buttons-wrapper">
						<button type="button" class="btn btn-success btn-sm">Wyszukaj</button>
						<button type="button" class="btn btn-danger btn-sm">Wyczyść</button>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th></th>
							<th></th>
							<th><a href="">Numer zamówienia</a></th>
							<th class="active">
								<a href="">
									Data złożenia
									<span class="chevron-arrow" style="background: url('img/icons/table/down-triangle.svg') center; background-size: cover;"></span>
								</a>
							</th>
							<th><a href="">Wartość netto</a></th>
							<th><a href="">Wartość brutto</a></th>
							<th><a href="">Data płatności</a></th>
							<th><a href="">Status płatności</a></th>
							<th><a href="">Status zamówienia</a></th>
						</tr>
					</thead>
					<tbody>
						<tr class="alert-dot">
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>
								<div class="form-service">
									<select class="select2" name="state">
										<option value="AL">Alabama</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-service">
									<input type="text" class="form-control validate">
								</div>
							</td>
							<td>
								<label class="checkbox-service">
									<input type="checkbox" name="size">
									<span class="service-inner">
										<p class="name"></p>
									</span>
								</label>
							</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
						<tr>
							<td class="text-right">
								<div class="d-flex">
									<button type="button"><img src="img/icons/edit.svg" alt=""></button>
									<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
								</div>
							</td>
							<td>
								<div class="service-image-wrapper square cover">
									<div class="service-image">
										<img src="img/@temp/product-4-b.jpg" alt="">
									</div>
								</div>
							</td>
							<td><a href="">4235345</a></td>
							<td>12.08.2018</td>
							<td>550.30</td>
							<td>676,89</td>
							<td>-</td>
							<td>nieopłacone</td>
							<td>złożone</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="table-edit-info">
				<p>Będziesz edytować:</p>
				<div class="info-service">
					<span><b>ID 586</b></span>
					<button>X</button>
				</div>
				<div class="info-service">
					<span><b>ID 5234</b></span>
					<button>X</button>
				</div>
				<div class="info-service">
					<span><b>ID 100</b></span>
					<button>X</button>
				</div>
				<div class="info-service">
					<span><b>ID 300454</b></span>
					<button>X</button>
				</div>
			</div>
			<!-- Na liście paginacji pokazujemy jednocześnie maksymalnie 7 numerów ukrywając odpowiednio z jednej lub z drugiej strony wszystkie numery większe lub mniejsze niż 3 od aktualnie przeglądanej -->
			<!-- Strzałki przeskakują o 3 stron stronę -->
			<div class="pagination-nav-wrapper">
				<div class="pagination-view">
					<p>Wyników na stronę:</p>
					<button type="submit" class="active">10</button>
					<button type="submit">25</button>
					<button type="submit">50</button>
				</div>
				<ul class="pagination-nav list-unstyled">
					<li><a href="" title="3 strony wstecz">&lt;&lt;</a></li>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li class="active"><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">7</a></li>
					<li><a href="" title="3 strony wprzód">&gt;&gt;</a></li>
				</ul>
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
		<div class="basic-box">
			<div class="box-heading">
				<h3>Wirtualny dysk</h3>
				<div class="dropdown">
					<button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="img/icons/dropdown.svg" alt="">
					</button>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><button class="dropdown-item" type="submit">Zapisz</button></li>
					</ul>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th></th>
						<th>Nazwa pliku</th>
						<th>Adres URL</th>
					</tr>
					<tr>
						<td class="text-right d-flex">
							<a href="" download title="Pobierz plik"><img src="img/icons/download.svg" alt=""></a>
							<button type="button" class="modal-button" data-modal="modalDelete"><img src="img/icons/remove.svg" alt=""></button>
						</td>
						<td>324234234_plik_dokument.pdf</td>
						<td>files/dynamic/media/324234234_plik_dokument.pdf</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="cards-grid">
			<a href="" class="grid-service premium" data-elmts-heading="Premium">
				<span class="badge">2</span>
				<div class="service-image-wrapper">
					<div class="service-image">
						<img src="img/cards/fotolia_114538122.jpg" alt="">
					</div>
				</div>
				<div class="service-footer">
					<p>Nazwa karty</p>
				</div>
			</a>
			<a href="" class="grid-service">
				<div class="service-image-wrapper">
					<div class="service-image">
						<img src="img/cards/fotolia_114538122.jpg" alt="">
					</div>
				</div>
				<div class="service-footer">
					<p>Nazwa karty</p>
				</div>
			</a>
			<a href="" class="grid-service pro" data-elmts-heading="Pro">
				<div class="service-image-wrapper">
					<div class="service-image">
						<img src="img/cards/fotolia_114538122.jpg" alt="">
					</div>
				</div>
				<div class="service-footer">
					<p>Nazwa karty</p>
				</div>
			</a>
			<a href="" class="grid-service">
				<div class="service-image-wrapper">
					<div class="service-image">
						<img src="img/cards/fotolia_114538122.jpg" alt="">
					</div>
				</div>
				<div class="service-footer">
					<p>Nazwa karty</p>
				</div>
			</a>
			<a href="" class="grid-service">
				<div class="service-image-wrapper">
					<div class="service-image">
						<img src="img/cards/fotolia_114538122.jpg" alt="">
					</div>
				</div>
				<div class="service-footer">
					<p>Nazwa karty</p>
				</div>
			</a>
		</div>
		<div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasProductCategoriesIds" aria-labelledby="offcanvasProductIdsLabel" aria-modal="true" role="dialog">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasTitleLabel">Drzewo kategorii</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div class="row" data-masonry='{"percentPosition": true }'>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="basic-box text-bg-light">
							<div class="heading">
								<div class="item-container">
									<div class=" ps-0">
										<div class="form-check">
											<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779116ef" value="1" required-default="">
											<label for="65323779116ef" class="form-check-label form-label">
												<strong>CLASSIC Line</strong>
												<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 0&nbsp; | &nbsp;ID: 1005</span>
											</label>
										</div>
									</div>
									<div class="d-none">
										<label for="assigned_category_id_1005" class=""></label>
										<input type="text" name="assigned_category_id[]" id="assigned_category_id_1005" value="1005" required-default="" class="category-update">
									</div>
								</div>
							</div>
							<hr>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
							<div class="item-container">
								<div class=" ps-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input mb-0" name="assigned_is_active[]" id="65323779123bd" value="1" required-default="">
										<label for="65323779123bd" class="form-check-label form-label">Rozstaw profili 35mm <br>
											<span class="badge rounded-pill text-bg-light ms-2">LEVEL: 1&nbsp; | &nbsp;ID: 1008</span>
										</label>
									</div>
								</div>
								<div class="d-none">
									<label for="assigned_category_id_1008" class=""></label>
									<input type="text" name="assigned_category_id[]" id="assigned_category_id_1008" value="1008" required-default="" class="category-update">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

<script>
	$(document).ready(function() {
		$('.select2').select2({
			language: "pl"
		});
	});
</script>

<?php include "include/section-footer.php"; ?>
<?php include "include/section-footer-scripts.php"; ?>