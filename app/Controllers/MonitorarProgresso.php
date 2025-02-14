<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MonitorarProgresso extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/navbarPortal') . view('portalProdutor/monitorarProgesso');
    }
}
