<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PortalFornecedor extends BaseController
{
    public function index()
    {
        return view('partials/header') . view('partials/navbarPortalFornecedor') . view('portalFornecedor/homePortal');
    }
}
