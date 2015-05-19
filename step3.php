<?php

session_start();

echo 'Autoloader is <strong>not</strong> included and DAO loaded from Session<br>';

echo '<pre>';
var_export($_SESSION['object']);
echo '</pre>';

echo '<a href="step4.php">next Step</a>';
