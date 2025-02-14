<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Fornecedor;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFornecedor extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('loginInicial/loginInicial');
    }

    public function formLogin()
    {
        return view('partials/header') . view('partials/formLoginFornecedor');
    }

    public function verificarLogin()
    {
        $fornecedor = new Fornecedor();
        $fornecedorEncontrado = $fornecedor->where('email_empresa', $this->request->getPost('email'))->first();

        if (!$fornecedorEncontrado) {
            return redirect()->route('login')->with('error', 'Email ou senha incorreta');
        }

        if (!password_verify($this->request->getPost('senha'), $fornecedorEncontrado->senha)) {
            return redirect()->route('login')->with('error', 'Email ou senha incorreta');
        }

        unset($fornecedorEncontrado->password);
        session()->set('fornecedor', $fornecedorEncontrado);

        return redirect()->route('portal_fornecedor');
    }

    public function destroy()
    {
        session()->destroy();

        return redirect()->route('/');
    }
}
