<?php

require_once 'model/taskService.php';

class Task {
    private User $user;

    private string $description;

    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;

    private int $priority;
    private bool $isDone;
    private string $comment;

    function __construct(User $user, string $description, int $priority, bool $isDone)
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->isDone = false;

        date_default_timezone_set('Israel');
        $date = new DateTimeImmutable();
        $this->dateCreated = $date->format('l jS \o\f F Y h:i:s A');
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription(string $description): ?string
    {
        date_default_timezone_set('Israel');
        $date = new DateTimeImmutable();
        $this->dateUpdated = $date->format('l jS \o\f F Y h:i:s A');

            return $this->description = $description;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setPriority($priority)
    {
        $this->priority = $priority;

    }

    public function markAsDone(): bool 
    {
        date_default_timezone_set('Israel');
        $date = new DateTimeImmutable();
        $this->dateUpdated = $date->format('l jS \o\f F Y h:i:s A');
        $this->dateDone = $date->format('l jS \o\f F Y h:i:s A');

            return $this->isDone = true;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }
    public function setDateCreated($dateCreated): ?string
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated(): ?string
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated($dateUpdated): ?string
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function getDateDone(): ?string
    {
        return $this->dateDone;
    }

    public function setDateDone($dateDone): ?string
    {
        $this->dateDone = $dateDone;
    }

    public function setComment($comment): ?string
    {
        $this->comment = $comment;
    }
    public function getComment($comment): ?string
    {
        return $this->comment;
    }
}