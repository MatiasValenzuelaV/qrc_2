<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use Dompdf\Dompdf;

class PDFOT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('ot_pdf');
        // $pdf = new FPDF();
        // $pdf->AddPage();
        // $pdf->SetFont('Arial', 'B', 16);
        // $pdf->Cell(40, 10, '¡Hola, Mundo!');
        // $pdf->Output();
    }
}
