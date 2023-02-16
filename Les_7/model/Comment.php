<?php

class Comment {
    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $author, Task $task, string $text) 
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
}