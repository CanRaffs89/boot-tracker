<?php

use Dotenv\Dotenv;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dsn = 'mysql:host=' . $_ENV['MYSQLHOST'] . ';dbname=' . $_ENV['MYSQLDATABASE'];
$pdo = new PDO($dsn, $_ENV['MYSQLUSER'], $_ENV['MYSQLPASSWORD']);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>