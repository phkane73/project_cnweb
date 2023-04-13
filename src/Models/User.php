<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['tenKh', 'password', 'sdt', 'diaChi', 'role'];
    protected $primaryKey = 'idKh';

    public static function validate(array $data)
    {
        $errors = [];
        if (!preg_match('/^[0-9]{10}+$/', $data['sdt'])) {
            $errors['sdt'] = 'Invalid phone.';
        } elseif (static::where('sdt', $data['sdt'])->count() > 0) {
            $errors['sdt'] = 'Phone already in use.';
        }

        if (!$data['tenKh']) {
            $errors['tenKh'] = 'Invalid name';
        } elseif (strlen($data['tenKh']) > 8) {
            $errors['tenKh'] = 'Invalid';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['re_password']) {
            $errors['password'] = 'Password confirmation does not match.';
        }

        if (!$data['diaChi']) {
            $errors['diaChi'] = 'Invalid address.';
        }
        return $errors;
    }
}
