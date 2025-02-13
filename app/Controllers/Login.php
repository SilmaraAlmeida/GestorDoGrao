<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/login');
    }

    public function verificarLogin()
    {
        // var_dump('logado com sucesso');
        $user = new User();
        $userFound = $user->where('email', $this->request->getPost('email'))->first();

        if (!$userFound) {
            return redirect()->route('login')->with('error', 'Email ou senha incorreta');
        }

        if (!password_verify($this->request->getPost('senha'), $userFound->senha)) {
            return redirect()->route('login')->with('error', 'Email ou senha incorreta');
        }

        unset($userFound->password);
        session()->set('user', $userFound);

        return redirect()->route('portal_produtor');
    }

    public function destroy()
    {
        session()->destroy();

        return redirect()->route('/');
    }
}
