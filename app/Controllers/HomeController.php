<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $data = [
            'titleHome' => 'Gestor do Grão - Home',
        ];

        helper('url');

        // $cssPath = [FCPATH . 'public/assets/css/cards.css'];

        return view('partials/header', $data) . view('home') . view('partials/footer');
    }
}
