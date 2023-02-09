<?php

class User {
    private  string $username;
    private  string $email;
    private  ?string $sex;
    private  ?int $age;
    private  bool $isActive = true;
    private  string $dateCreated;
 
    function __construct(string $username)
    {
        $this->username = $username;
        // $this->email = $email;
        date_default_timezone_set('Israel');
        $date = new DateTimeImmutable();
        $this->dateCreated = $date->format('l jS \o\f F Y h:i:s A');
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
 }