<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $data = [
            'titleHome' => 'Gestor do Grão - Home',
        ];

        helper(['url', 'img']);

        return view('partials/header', $data) . view('home') . view('partials/footer');
    }
}
