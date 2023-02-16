<?php

// 1. Доработайте скрипт инициализации базы данных fixture.php, добавив в него выполнение запроса на создание таблицы tasks, содержащей поля: id (int), description (varchar), isDone (tinyint);

// 2. Воспользовавшись наработками по TaskProvider **из практического задания прошлого урока выполните доработку функционала. Адаптируйте механику метода **addTask для сохранения задач в БД. Также, обновите код метода getUndoneList, для получения невыполненных задач из базы данных

require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
$pdo = require_once 'db.php';

session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];
?>
