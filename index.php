<?php

    session_start();
    require_once 'autoload.php';
    require_once 'config/config.php';
    require_once 'config/db.php';
    require_once 'config/parameters.php';
    require_once 'views/header.php';
    require_once 'views/login.php';
    use Controllers\ControladorFrontal;
    ControladorFrontal::main();
    require_once 'views/footer.php';