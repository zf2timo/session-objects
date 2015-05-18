<?php
require_once 'src/DAO.php';

session_start();

$dao = new \src\DAO(1, 'Test', 'Test', new DateTime('2015-01-08 13:37:52'));

echo "Object stored in session:<br>";
echo '<pre>';
var_export($dao);
echo '</pre>';

$_SESSION['object'] = $dao;

echo '<a href="step2.php">Proceed to next Step</a>';

