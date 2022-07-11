<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersonalController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('PersonalModel');
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - Personal';
		$data["bc"] = 'Personal';
		$this->load->view('mantenedores/personal', $data);
	}

	public function fn_lista_personal()
	{
		$data = $this->PersonalModel->lista_personal(
			$this->input->post('per_nombre'),
			$this->input->post('per_rut')
		);
		echo json_encode($data);
	}
	public function fn_guarda_personal()
	{
		$data = $this->PersonalModel->guardar_personal(
			$this->input->post('per_id'),
			$this->input->post('per_nombre'),
			$this->input->post('per_rut'),
			$this->input->post('per_correo'),
			$this->input->post('car_id'),
		);
		echo json_encode($data);
	}
	public function fn_activa_personal()
	{
		$data = $this->PersonalModel->activa_personal(
			$this->input->post('per_id'),
			$this->input->post('per_activo')
		);
		echo json_encode($data);
	}
	public function fn_elimina_personal()
	{
		$data = $this->PersonalModel->elimina_personal(
			$this->input->post('per_id')
		);
		echo json_encode($data);
	}
	public function fn_listado_mantenciones()
	{
		$data = $this->PersonalModel->fn_listado_mantenciones(
			$this->input->post('per_id'),
			$this->input->post('ano'),
			$this->input->post('mes')
		);
		echo json_encode($data);
	}
}
