<?php

include 'vendor/autoload.php';

session_start();

echo 'Autoloader is included and DAO loaded from Session<br>';

echo '<pre>';
var_export($_SESSION['object']);
echo '</pre>';

