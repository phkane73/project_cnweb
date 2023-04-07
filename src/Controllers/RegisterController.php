<?php

namespace App\Controllers;

use App\Models\User;
use App\SessionGuard as Guard;


class RegisterController extends Controller
{
    public function __construct()
    {
        if (Guard::isUserLoggedIn()) {
            redirect('/home');
        }

        parent::__construct();
    }

    public function showRegisterForm()
    {
        $data = [
            'old' => $this->getSavedFormValues(),
            'errors' => session_get_once('errors')
        ];

        $this->sendPage('register', $data);
    }

    public function register()
    {
        $this->saveFormValues($_POST, ['password', 're_password']);

        $data = $this->filterUserData($_POST);
        $model_errors = User::validate($data);
        if (empty($model_errors)) {
            $this->createUser($data);

            $messages = ['success' => 'User has been created successfully.'];
            redirect('/login', ['messages' => $messages]);
        }
        redirect('/register', ['errors' => $model_errors]);
    }

    protected function filterUserData(array $data)
    {
        return [
            'tenKh' => $data['tenKh'] ?? null,
            'sdt' => $data['sdt'] ?? null,
            'password' => $data['password'] ?? null,
            're_password' => $data['re_password'] ?? null,
            'diaChi' => $data['diaChi'] ?? null
        ];
    }

    protected function createUser($data)
    {
        return User::create([
            'tenKh' => $data['tenKh'],
            'sdt' => $data['sdt'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'diaChi' => $data['diaChi']
        ]);
    }
}
