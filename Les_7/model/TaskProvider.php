<?php

class TaskProvider
{

    public static function addComment(User $author, Task $task, string $text) 
    {
        $comment = new Comment($author, $task, $text);
        $task->setComment($comment);
    }

    public static function addTask(Task $task): void
    {
        $_SESSION['tasksList'][] = $task;
    }
    
    public static function getUndoneList(): array
    {       
        $tasks = [];
        if (isset($_SESSION['tasksList']))   
            foreach ($_SESSION['tasksList'] as $key => $task) {
                if (!$task->isDone())
                    $tasks[$key] = $task;   
            }
        return $tasks;  
    }    
}



