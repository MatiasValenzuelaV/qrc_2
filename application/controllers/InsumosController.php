<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InsumosController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('InsumosModel');
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - insumos';
		$data["bc"] = 'Check List';
		$this->load->view('mantenedores/insumos', $data);
	}
	public function fn_lista_insumos()
	{
		$data = $this->InsumosModel->lista_insumos(
			$this->input->post('ins_nombre')
		);
		echo json_encode($data);
	}

	public function fn_guarda_insumos()
	{
		$data = $this->InsumosModel->guarda_insumos(
			$this->input->post('ins_id'),
			$this->input->post('ins_nombre'),
			$this->input->post('ins_interior'),
			$this->input->post('ins_exterior')
		);
		echo json_encode($data);
	}
	public function fn_activa_insumos()
	{
		$data = $this->InsumosModel->activa_insumos(
			$this->input->post('ins_id'),
			$this->input->post('ins_activo')
		);
		echo json_encode($data);
	}
	public function fn_elimina_insumos()
	{
		$data = $this->InsumosModel->elimina_insumos(
			$this->input->post('ins_id')
		);
		echo json_encode($data);
	}
}
