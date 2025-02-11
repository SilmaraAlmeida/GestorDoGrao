<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $data = [
            'titleHome' => 'Gestor do Grão - Home',
            'faviconPath' => '/public/assets/images/cafe-favicon',
            // 'cssPathCards' => '/public/assets/css/cards',
            // 'cssPathNavbar' => '/public/assets/css/navbar',
        ];

        helper(['url', 'img']);

        // $cssPath = [FCPATH . 'public/assets/css/cards.css'];

        return view('partials/header', $data) . view('home') . view('partials/footer');
    }
}
