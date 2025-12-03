<?php



require_once "autoload.php";

$database = new Connection('localhost', 'root', '9899', 'blog');

$connection = $database->connect();
Post::$pdo = $connection;

