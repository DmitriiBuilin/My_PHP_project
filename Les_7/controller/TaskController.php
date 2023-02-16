<?php
require_once 'model/TaskProvider.php';
require_once 'model/Task.php';

// unset($_POST['task']);
// unset( $_SESSION['tasksList']);
$taskPovide = new TaskProvider();

if (!empty($_POST['task'])) {
    $taskPovide->addTask(new Task($_POST['task']));

    unset($_POST['task']);
    unset($_REQUEST['task']);  
}

if ($_GET['action'] === 'setDone' && isset($_GET['id'])) {
    $_SESSION['tasksList'][$_GET['id']]->setIsDone(true);
}


$tasks = $taskPovide->getUndoneList();


require_once 'view/task.php';
