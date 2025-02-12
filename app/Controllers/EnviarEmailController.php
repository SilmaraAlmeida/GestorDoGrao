<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EnviarEmailController extends BaseController
{
    public function index()
    {
        var_dump('email enviado');
    }

    public function store()
    {
        // $email = service('email');

        // $config = [
        //     'protocol' => '',
        //     'SMTPHost' => '',
        //     'SMTPUser' => '',
        //     'SMTPPass' => '',
        //     'SMTPPort' => '',
        //     'wordWrap' => true,
        // ];

        // $email->initialize($config);

        // $email->setFrom($this->request->getPost('email'), $this->request->getPost('nome'));
        // $email->setTo('');

        // $email->setSubject($this->request->getPost('assunto'));
        // $email->setMessage($this->request->getPost('mensagem'));

        // $send = $email->send();

        // if (!$send) {
        //     var_dump($email->printDebugger());
        // }

        var_dump('email enviado pelo post');
    }
}
