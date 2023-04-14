<?php

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public static function addComment(User $author, Task $task, string $text) 
    {
        $comment = new Comment($author, $task, $text);
        $task->setComment($comment);
    }

    public function addTask(Task $task)
    {    
        // $_SESSION['tasksList'][] = $task;
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (id, user_id, description, isDone) VALUES (:id, :user_id, :description, :isDone)'
        );
        $statement->execute([
            'id' => $task->setId(),
            'user_id' => $task->getUserId(),
            'description' => $task->getDescription(),
            'isDone' => $task->isDone()
        ]);
    }
    
    public function getUndoneList(): ?array
    {       
        // $tasks = [];
        // if (isset($_SESSION['tasksList']))   
        //     foreach ($_SESSION['tasksList'] as $key => $task) {
        //         if (!$task->isDone())
        //             $tasks[$key] = $task;   
        //     }
        // return $tasks;  
        $statement = $this->pdo->prepare(
            'SELECT id, description FROM tasks WHERE user_id = :user_id AND isDone = 0'
        );
        $statement->execute([
            'user_id' => $_SESSION['user']->getId(),
        ]);
        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class) ?: null;
    }    

    public function setIsDone(int $taskId, int $isDone)
    {
        $statement = $this->pdo->prepare(
            'UPDATE tasks SET isDone = :isDone WHERE rowid = :id'
        );
        $statement->execute([
            'id' => $taskId,
            'isDone' => $isDone,
        ]);
    }
}



