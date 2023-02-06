<?php
require_once 'comment.php';

class TaskService {
    public function addComment(User $author, Task $task, string $text) 
    {
        $comment = new Comment($author, $task, $text);
        $task->setComment($comment);
    }
}