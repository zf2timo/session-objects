<?php

#include 'vendor/autoload.php';

session_start();

echo '<pre>';
var_export($_SESSION['object']);
echo '</pre>';

echo '<a href="step4.php">next Step</a>';
