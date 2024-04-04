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
		<div class="row">
			<div class="col-md-7">
				<div class="inner-heading">
					<h1>Edytuj sekcje</h1>
				</div>
				<div class="basic-box">
					<p>Poniżej znajduje się lista elementów i sekcji, z których składa się edytowana właśnie strona. <b>Możesz je edytować</b> klikając w przycisk edytuj lub <b>zmieniać ich kolejność</b> łapiąc 6 kropek i przeciągając w górę lub w dół.</p>
				</div>
				<div class="page-elements-wrapper">
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/text.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Treść</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/text-text.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Treść + treść</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/text-text-text.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Treść + treść + treść</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/image.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Zdjęcie</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/image-image.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">2 zdjęcia</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/image-image-image.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">3 zdjęcia</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/gallery.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Galeria</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/text-image.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Tekst + zdjęcie</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
					<div class="basic-box elements-item">
						<div class="item-inner">
							<div class="inner-heading">
								<h3><small>Nazwa:</small><br><a href="">Systemowa nazwa elementu</a></h3>
								<a href="" class="btn btn-success btn-sm">Edytuj</a>
							</div>
							<div class="inner-type">
								<div class="page-element-type">
									<div class="type-image">
										<img src="img/icons/page-elements/image-text.svg" alt="">
									</div>
									<div class="type-name">
										<div class="label">Typ:</div>
										<div class="name">Zdjęcie + tekst</div>
									</div>
								</div>
								<h3>ID: 12</h3>
							</div>
						</div>
						<div class="item-drag-drop">
							<img src="img/icons/drag.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<div class="inner-heading">
					<h1>Dodaj sekcję</h1>
				</div>
				<div class="basic-box">
					<p><b>Złap</b> wybrany rodzaj sekcji lub elementu i <b>przeciągnij</b> do kolumny z istniejącymi już sekcjami na stronie i <b>upuść</b> w dowolnym miejscu.</p>
				</div>
				<div class="page-element-types-wrapper">
					<button class="page-element-type">
						<img src="img/icons/drag.svg" alt="" class="icon">
						<div class="type-image">
							<img src="img/icons/page-elements/text.svg" alt="">
						</div>
						<div class="type-name">
							<div class="label">Typ:</div>
							<div class="name">Treść</div>
						</div>
					</button>
					<button class="page-element-type">
						<img src="img/icons/drag.svg" alt="" class="icon">
						<div class="type-image">
							<img src="img/icons/page-elements/text-text.svg" alt="">
						</div>
						<div class="type-name">
							<div class="label">Typ:</div>
							<div class="name">Treść + treść</div>
						</div>
					</button>
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