<?php

class User {
    private  string $username;
    private string $name;
    private int $id;
    private  string $email;
    private  ?string $sex;
    private  ?int $age;
    private  bool $isActive = true;
    private  string $dateCreated;
 
    function __construct(string $username)
    {
        $this->username = $username;
        // $this->email = $email;
        
        $date = new  DateTime();
        $this->dateCreated = $date->format('Y-m-d H:i:s');
    }

    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }

    public function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex($sex): ?string
    {
        $this->sex = $sex;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
 }