<?php
include 'vendor/autoload.php';

session_start();

$dao = new \src\DAO(1, 'Test', 'Test', new \src\PersonDAO(1, 'Linus', 'Torvalds'));

echo "Object stored in session:<br>";
echo '<pre>';
var_export($dao);
echo '</pre>';

$_SESSION['object'] = $dao;

echo '<a href="step2.php">Proceed to next Step</a>';

