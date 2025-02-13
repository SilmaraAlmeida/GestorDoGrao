<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PortalProdutor extends BaseController
{
    public function index()
    {
        return view('partials/portalProdutor/homePortal');
    }
}
