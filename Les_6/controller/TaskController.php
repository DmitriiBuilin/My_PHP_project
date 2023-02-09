<?php
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

// unset($_POST['task']);
// unset( $_SESSION['tasksList']);

if (!empty($_POST['task'])) {
    // $_SESSION['tasksList'][] = $_POST['task'];

    $user = new User($_COOKIE['username']);
    // $_SESSION['tasksList'][] = TaskProvider::addTask($user, $_POST['task'], 1, false);
    TaskProvider::addTask($user, $_POST['task'], 1, false);
    unset($_POST['task']);
    unset($_REQUEST['task']);  
}

if (isset($_SESSION['tasksList'])) {
    $tasks = $_SESSION['tasksList'];
} else {
    $tasks = [];    
}

// print_r($tasks);

require_once 'view/task.php';
