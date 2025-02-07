<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $dados = [
            'titleHome' => 'Gestor do Grão - Home',
        ];

        return view('home', $dados);
    }
}
