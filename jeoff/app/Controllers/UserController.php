<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function store()
    {
        $user = new UserModel();

        $email = request()->getPost('email');
        $password = request()->getPost('password');
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $exist = $user->where('email', $email)->first();

        if($exist){
            return redirect('/register')->with('message', 'The email has an account already');
        }

        $data = [
            'email' => $email,
            'password' => $hashed
        ];

        $user->insert($data);

        return redirect()->to('/register')->with('message', 'Registered Successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $user = new UserModel();

        $email = request()->getPost('email');
        $password = request()->getPost('password');

        $exist = $user->where('email', $email)->first();

        if(!$exist){
            return redirect()->to('/login')->with('message', 'Email does not exist');
        }

        if(password_verify($password, $exist['password'])){
            $session->set([
                'user_id' => $exist['id'],
                'email' => $email,
                'isLoggedIn' => true
            ]);
        }
        else{
            return redirect()->to('/login')->with('message', 'Password Incorrect');
        }
        
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
