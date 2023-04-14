<?php

// require_once 'model/taskProvider.php';

class Task {
    private string $user;
    private int $user_id;
    private int $id;
    private string $description = "";
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private int $priority;
    private int $isDone = 0;
    private string $comment;

    // function __construct(string $user, string $description, int $priority, bool $isDone)
    // {
    //         $this->user = $user;
    //         $this->description = $description;
    //         $this->priority = $priority;
    //         $this->isDone = $isDone;

    //     $date = new  DateTime();
    //     $this->dateCreated = $date->format('Y-m-d H:i:s');
    //     $this->dateUpdated = $date->format('Y-m-d H:i:s');
    // }
    function __construct()
    {
        // $this->description = $description;
        $this->user_id = $_SESSION['user']->getId();

        $date = new  DateTime();
        $this->dateCreated = $date->format('Y-m-d H:i:s');
        $this->dateUpdated = $date->format('Y-m-d H:i:s');
    }

    public function getDescription() : ?string
    {
        return $this->description;
    }

    public function setId() : ?int
    {
        return rand(1, 1000000);
    }
    public function setDescription(string $description): ?string
    {
        $date = new DateTime();
        $this->dateUpdated = $date->format('Y-m-d H:i:s');

        return $this->description = $description;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setPriority($priority)
    {
        $date = new DateTime();
        $this->dateUpdated = $date->format('Y-m-d H:i:s');
       
            return $this->priority = $priority;
    }

    public function markAsDone(): bool 
    {
        $date = new DateTime();
        $this->dateUpdated = $date->format('Y-m-d H:i:s');
        $this->dateDone = $date->format('Y-m-d H:i:s');

        return $this->isDone = true;
    }

    public function isDone(): int
    {
        return $this->isDone;
    }
    public function setIsDone(int $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getDateUpdated(): ?string
    {
        return $this->dateUpdated;
    }

    public function getDateDone(): ?string
    {
        return $this->dateDone;
    }

    public function setComment($comment): ?string
    {
        $date = new DateTime();
        $this->dateUpdated = $date->format('Y-m-d H:i:s');
        
            return $this->comment = $comment;
    }
    public function getComment($comment): ?string
    {
        return $this->comment;
    }
    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getId(): int
    {
        return $this->id;
    }

}