<?php 
    session_status()==PHP_SESSION_NONE ? session_start() : session_regenerate_id();
    require_once($_SESSION['ROOT_PATH'].'vendor/autoload.php');
?>
<!doctype html>
<html lang="pl" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Elmts · Skeleton</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </head>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>

<div class="col-lg-8 mx-auto p-4 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
      <span class="fs-4 me-2"> elmts </span><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-robot text-primary" viewBox="0 0 16 16">
  <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
  <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
</svg><span class="fs-4 ms-2">Skeleton</span>
    </a>
  </header>

  <main>
    <h1 class="text-body-emphasis">Get started with elmts Skeleton</h1>
    <p class="fs-5 col-md-8">Quickly and easily get started with elmts compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

    <div class="mb-5">
      <a href="https://github.com/elmts-by-webemo/elmts-skeleton" target="_blank" class="btn btn-primary btn-lg px-4"><i class="bi bi-github me-2" style="font-size:26px;"></i> Check repository</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
        <div class="col-md-9 wrapper">
            <div class="inner-wrapper-header">
                <h2 class="text-body-emphasis">Example views</h2>
                <p>Ready to go beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
            </div>
            <div class="inner-wrapper d-flex flex-wrap justify-content-around">
                <div class="section-wrapper" style="min-width:30%">
                    <h4 class="text-body-emphasis mt-4">Basic layouts</h4>
                    <ul class="list-unstyled ps-0">
                        <li>
                            <a class="icon-link mb-1" href="views/coming-soon">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Coming soon
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/thank-you-page">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Thank you page
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/error-404">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Error 404
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/error-500">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Error 500
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-wrapper"  style="min-width:30%">
                    <h4 class="text-body-emphasis mt-4">Authentication</h4>
                    <ul class="list-unstyled ps-0">
                        <li>
                            <a class="icon-link mb-1" href="<?php echo getPath('url');?>/views/auth-sign-in.php">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Sign-in
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/auth-reset-password">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              Reset password
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/auth-new-password">
                              <i class="bi bi-window-sidebar" style="font-size:20px; height:auto"></i>
                              New password
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-wrapper"  style="min-width:30%">
                    <h4 class="text-body-emphasis mt-4">Wizards</h4>
                    <ul class="list-unstyled ps-0">
                        <li>
                            <a class="icon-link mb-1" href="views/wizard-create-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                </svg>
                                Create item
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/wizard-step-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                </svg>
                              Item steps
                            </a>
                        </li>
                        <li>
                            <a class="icon-link mb-1" href="views/wizard-summary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                </svg>
                              Summary
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="col-md-3">
            <h2 class="text-body-emphasis">Guides</h2>
            <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
            <ul class="list-unstyled ps-0">
                <li>
                    <a class="icon-link mb-1" href="/docs/5.3/getting-started/introduction/">
                    Bootstrap quick start guide
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="/docs/5.3/getting-started/introduction/">
                    Bootstrap quick start guide
                    </a>
                </li>
              
            </ul>
        </div>
    </div>
    </main>

          <?php
                // $dir = 'views'; // Ścieżka do katalogu z plikami

                // // Otwiera katalog
                // if ($handle = opendir($dir)) {
                    
                //     // Przechodzi przez wszystkie pliki w katalogu
                //     while (false !== ($entry = readdir($handle))) {

                //         // Sprawdza, czy plik ma rozszerzenie .php
                //         if ($entry != "." && $entry != ".." && strtolower(substr($entry, strrpos($entry, '.') + 1)) == 'php') {
                //             // Usuwa rozszerzenie .php dla wyświetlenia
                //             $displayName = basename($entry, '.php');
                //             // Tworzy element listy dla każdego pliku
                //             echo '<li><a class="icon-link mb-1" href="' . htmlspecialchars($dir) . '/' . htmlspecialchars($entry) . '">' . htmlspecialchars($displayName) . '</a></li>';
                //         }
                //     }

                //     closedir($handle);
                // }
            ?>
  
   
          <div class="inner-wrapper">
            <h2 class="text-body-emphasis">Components</h2>
            <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
          </div>


  <footer class="pt-5 my-5 text-body-secondary border-top">
    Created by <i class="bi bi-heart-fill text-danger"></i> elmts &middot; &copy; 2024
  </footer>
</div>
    </body>
</html>
