<?php

$dsn = 'mysql:host=containers-us-west-119.railway.app;dbname=railway';
$pdo = new PDO($dsn, 'root', 'RrhIlNGY8bkjkuiOuty0');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>