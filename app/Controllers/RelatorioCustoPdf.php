<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Mpdf\Mpdf;
use CodeIgniter\HTTP\ResponseInterface;
use mPDF as GlobalMPDF;

class RelatorioCustoPdf extends BaseController
{
    public function gerarRelatorio()
    {
        var_dump('gerando relatorio...');

        $html = view('pdf_custos');
        $mpdf = new GlobalMPDF();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        // $html = $this->load->view('pdf_custos', '', true);
        // $mpdf = new \Mpdf\Mpdf();
        // $mpdf->WriteHTML($html);
        // $mpdf->Output();
    }
}
