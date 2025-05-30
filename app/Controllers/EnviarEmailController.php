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
        $email = service('email');

        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => 'sandbox.smtp.mailtrap.io',
            'SMTPUser' => '0789666dfcef49',
            'SMTPPass' => 'e10595964dc80d',
            'SMTPPort' => 2525,
            'wordWrap' => true,
            'mailType' => 'html',
        ];

        $email->initialize($config);

        $fromEmail = $this->request->getPost('email');
        $fromName = $this->request->getPost('nome');
        $subject = $this->request->getPost('assunto');

        $email->setFrom($fromEmail, $fromName);
        $email->setTo('gestordograo@gmail.com');

        $template = view('emails/contato', [
            'message' => $this->request->getPost('mensagem'),
            'name' => 'Gestor do Grão',
            'from' => $this->request->getPost('nome')
        ]);

        $email->setSubject($subject);
        $email->setMessage($template);

        $send = $email->send();

        if (!$send) {
            var_dump($email->printDebugger());
        }

        return redirect()->back();
    }
}
