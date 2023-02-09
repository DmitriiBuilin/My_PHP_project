<?php

require_once "model/User.php";

class UserProvider
{
    private static array $accounts = [
        'pikachu' => '1',
        'root' => '321',
    ];

    public static function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = self::$accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}