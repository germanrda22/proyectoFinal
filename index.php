<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
    <?php

        session_start();
        require_once 'autoload.php';
        require_once 'config/config.php';
        require_once 'config/db.php';
        require_once 'config/parameters.php';
        use Controllers\ControladorFrontal;
        ControladorFrontal::main();