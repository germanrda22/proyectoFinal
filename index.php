<?php
    error_reporting(E_ALL);
    session_start();
    require_once 'autoload.php';
    require_once 'config/config.php';
    require_once 'Lib/db.php';
    require_once 'config/parameters.php';
    require_once 'views/header.php';
    require_once 'views/login.php';
    use Controllers\ControladorFrontal;
    ControladorFrontal::main();
    require_once 'views/footer.php';