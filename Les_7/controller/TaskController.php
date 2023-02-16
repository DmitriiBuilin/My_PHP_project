<?php
// require_once 'model/TaskProvider.php';
// require_once 'model/Task.php';

$taskProvider = new TaskProvider($pdo);


if (isset($_GET['action'])) {
    if ($_GET['action'] === 'add' && isset($_POST['description']) && !empty($_POST['description'])) {
        // $taskPovide->addTask(new Task($_POST['task']));
        // unset($_POST['task']);
        // unset($_REQUEST['task']);  
        $task = new Task();
        $task->setDescription($_POST['description']);
        $taskProvider->addTask($task);
    }
    
    if ($_GET['action'] === 'setDone' && isset($_GET['id']) && !empty($_GET['id'])) {
        // $_SESSION['tasksList'][$_GET['id']]->setIsDone(true);
        $taskProvider->setIsDone(intval($_GET['id']), 1);
    }
}

$tasks = $taskProvider->getUndoneList();

require_once 'view/task.php';
