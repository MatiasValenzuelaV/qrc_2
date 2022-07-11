<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CentroCostosController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('CentroCostosModel');
	}

	public function fn_carga_combo_centro_costo()
	{
		$data = $this->CentroCostosModel->carga_combo_centro_costo();

		echo json_encode($data);
	}
}
