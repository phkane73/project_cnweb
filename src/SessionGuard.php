<?php

namespace App;

use App\Models\User;

class SessionGuard
{
    protected static $user;

    public static function login(User $user, array $credentials)
    {
        $verified = password_verify($credentials['password'], $user->password);
        if ($verified) {
            $_SESSION['idKh'] = $user->idKh;
        }
        return $verified;
    }

    public static function user()
    {
        if (!static::$user && static::isUserLoggedIn()) {
            static::$user = User::find($_SESSION['idKh']);
        }
        return static::$user;
    }

    public static function logout()
    {
        static::$user = null;
        session_unset();
        session_destroy();
    }

    public static function isUserLoggedIn()
    {
        return isset($_SESSION['idKh']);
    }
}
