<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReporteController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('MaestraModel');
    }

    public function index()
	{
		$data["title"] = 'QRC Ingeniería - Reporte';
		$data["bc"] = 'Velocidad de aire';
		$this->load->view('reporte/velocidadaire', $data);
    }
    public function reporte_velocidad_aire(){
        $data = $this->MaestraModel->reporte_velocidad_aire(
			$this->input->post('equ_nombre')
		);
		echo json_encode($data);
    }
    public function reporte_equipos_baja(){
        $data["title"] = 'QRC Ingeniería - Reporte';
		$data["bc"] = 'Equipos dados de baja';
		$this->load->view('reporte/equipos_baja', $data);
    }

}
