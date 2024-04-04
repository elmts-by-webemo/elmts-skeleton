<?php 
    session_status()==PHP_SESSION_NONE ? session_start() : session_regenerate_id();

    define('ROOT_PATH', __DIR__.'/../');
    require_once(ROOT_PATH.'vendor/autoload.php');

    $_SESSION['ROOT_PATH']=ROOT_PATH;

    require(ROOT_PATH.'public/views/index.php');
?>