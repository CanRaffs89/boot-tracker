<?php

use Dotenv\Dotenv;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dsn = 'mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'];
$pdo = new PDO($dsn, $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>