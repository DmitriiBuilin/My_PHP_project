<?php
/* @var $pdo PDO */
// $dsn = 'sqlite:Les_7/database.db';

$pdo = require_once 'db.php';
require_once 'model/User.php';
require_once 'model/UserProvider.php';

$pdo->exec('DROP TABLE IF EXISTS users');

$pdo->exec('CREATE TABLE users (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
name VARCHAR(150),
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)');


$userProvider = new UserProvider($pdo);

$user = new User('pikachu');
$user->setName('pikachu');
$userProvider->registerUser($user, '123');
