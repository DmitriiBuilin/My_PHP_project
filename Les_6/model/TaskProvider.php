<?php
require_once 'model/Comment.php';
require_once "model/Task.php";

class TaskProvider
{
    // public static array $tasks = [
    //     1 => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    //     2 => 'Lorem ipsum dolor.',
    //     3 => 'Lorem ipsum dolor sit amet consectetur.',
    // ];

    public static function addComment(User $author, Task $task, string $text) 
    {
        $comment = new Comment($author, $task, $text);
        $task->setComment($comment);
    }

    public static function addTask(User $user, string $description, int $priority, bool $isDone)
    {
        $task = new Task($user, $description, $priority, $isDone);
        $_SESSION['tasksList'][] = $task;
        // $task->$user = $user;   
        $task->$description = $description;
        $task->$priority = $priority;
        $task->$isDone = $isDone;
    }

    
    public static function getUndoneList(array $tasks): void
    {
        
        echo '<ol>';
        foreach ($tasks as $task) {
            // print_r($task->description);
            $key = 1;
            echo "<li class='tasks-list'><a href='?controller=task&action=done&key=$key' class='button btn-done'>Выполнить</a>  </li>";
        }            
        echo '</ol>';
    }    
}



