<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['tenKh', 'password', 'sdt'];
    protected $primaryKey = 'idKh';

    public static function validate(array $data)
    {
        $errors = [];
        if (!preg_match('/^[0-9]{10}+$/', $data['sdt'])) {
            $errors['sdt'] = 'Invalid sdt.';
        } elseif (static::where('sdt', $data['sdt'])->count() > 0) {
            $errors['sdt'] = 'sdt already in use.';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['password_confirmation']) {
            $errors['password'] = 'Password confirmation does not match.';
        }
        return $errors;
    }
}
