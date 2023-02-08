<?php
require_once 'model/Comment.php';

class TaskProvider
{
    public function addComment(User $author, Task $task, string $text) 
    {
        $comment = new Comment($author, $task, $text);
        $task->setComment($comment);
    }

    public static function getUndoneList()
    {
    }

    public static function addTask()
    {
    }
}