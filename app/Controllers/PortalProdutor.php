<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PortalProdutor extends BaseController
{
    public function index()
    {
        return view('portalProdutor/homePortal');
    }

    public function getDados()
    {
        $dados = [
            "cols" => [
                [
                    [
                        'id' => '',
                        'label' => 'Mês',
                        'pattern' => 'string',
                    ],
                    [
                        'id' => '',
                        'label' => 'Salário',
                        'pattern' => '',
                        'type' => 'number'
                    ]
                ]
            ],
            "rows" => [
                [
                    'c' => [
                        [
                            'v' => 'Mushrooms',
                            'f' => null,
                        ],
                        [
                            'v' => 3,
                            'f' => null,
                        ]
                    ]
                ]
            ]
        ];
    }
}
