<?php

namespace App;

use App\Models\User;
use App\Models\Products;

class SessionGuard
{
    protected static $user;

    public static function login(User $user, array $credentials, string $role)
    {
        if ($role == 'admin') {
            $_SESSION['role'] = 'admin';
        }
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

    public static function product()
    {
        static::$user = Products::find(1);
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
    public static function admin()
    {
        return $_SESSION['role'] == 'admin';
    }

    public static function roleUser(User $user)
    {       
            return $user->role;       
    }
}
