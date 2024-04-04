<?php 
	if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }

    function getPath(string $key){
    	
    	//$publicDirectory='public_html';
    	$publicDirectory='public';
    	
    	$url='http://localhost:3000';

    	$paths=[
	        /*
	        |--------------------------------------------------------------------------
	        | Paths Config
	        |--------------------------------------------------------------------------
	        |
	        | Tutaj możesz zdefiniować ścieżki do różnych części twojej aplikacji.
	        | Te ustawienia pomogą w organizacji struktury folderów projektu.
	        |
	        */     
	        "path_config"=> __DIR__."/../config/",             
	        "path_storage"=>__DIR__."/../storage/",
	        "path_vendor"=>__DIR__."/../vendor/",
	        /*
	        |--------------------------------------------------------------------------
	        | Paths App
	        |--------------------------------------------------------------------------
	        |
	        | Tutaj możesz zdefiniować ścieżki do głównych części twojej aplikacji,
	        | takich jak Http, Models, Providers itd. Ułatwi to zarządzanie i
	        | dostęp do tych obszarów w twojej aplikacji.
	        |
	        */
	        "path_app"=>__DIR__."/../app/",
	        "path_http"=>__DIR__."/../app/Http/",
	        "path_views"=>__DIR__."/../app/Http/Views/",
	        "path_location"=>__DIR__."/../app/Location/",
	        "path_providers"=>__DIR__."/../app/Providers/",
	        "path_rest"=>__DIR__."/../app/Rest/",
	        "path_routes"=>__DIR__."/../app/Routes/",
	         /*
	        |--------------------------------------------------------------------------
	        | Paths Public
	        |--------------------------------------------------------------------------
	        |
	        | Ścieżki do publicznych zasobów takich jak css, obrazy, pliki js.
	        | Dostęp do tych zasobów jest bezpośredni, służą one do budowania
	        | front-endu twojej aplikacji.
	        |
	        */   
	        "path_public"=>__DIR__."/../{$publicDirectory}/",
	        "path_css"=>__DIR__."/../{$publicDirectory}/css/",
	        "path_files"=>__DIR__."/../{$publicDirectory}/files/",
	        "path_dynamic"=>__DIR__."/../{$publicDirectory}/files/dynamic/",
	        "path_fonts"=>__DIR__."/../{$publicDirectory}/fonts/",
	        "path_integration"=>__DIR__."/../{$publicDirectory}/files/integration/",
	        "path_img"=>__DIR__."/../{$publicDirectory}/images/",
	        "path_images"=>__DIR__."/../{$publicDirectory}/images/",
	        "path_js"=>__DIR__."/../{$publicDirectory}/js/",
	        "path_lib"=>__DIR__."/../{$publicDirectory}/libraries/",
	        "path_library"=>__DIR__."/../{$publicDirectory}/libraries/",

	        /*
		    |--------------------------------------------------------------------------
		    | URL Aplikacji
		    |--------------------------------------------------------------------------
		    |
		    | Ten URL jest używany przez konsolę do poprawnego generowania URL-i
		    | podczas korzystania z narzędzia wiersza poleceń Artisan. Należy ustawić to
		    | na korzeń aplikacji, aby był dostępny w komendach Artisan.
		    |
		    */

		    'url' => $url,

		    /*
		    |--------------------------------------------------------------------------
		    | Urls
		    |--------------------------------------------------------------------------
		    |
		    | Definicje URL do publicznych zasobów. Ułatwia to tworzenie linków do
		    | zasobów takich jak arkusze stylów, obrazy czy biblioteki JavaScript
		    | bezpośrednio w twoich widokach.
		    |
		    */   
		    "url_css"=>$url."/css/",
		    "url_img"=>$url."/images/",
		    "url_images"=>$url."/images/",
		    "url_files"=>$url."/files/",
		    "url_dynamic"=>$url."/files/dynamic/",
		    "url_fonts"=>$url."/fonts/",
		    "url_lib"=>$url."/libraries/",
		    "url_library"=>$url."/libraries/",
	    ];

	    return $paths[$key];
	}