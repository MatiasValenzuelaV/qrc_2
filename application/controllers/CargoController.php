<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CargoController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('CargoModel');
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - Cargos';
		$data["bc"] = 'Cargos';
		$this->load->view('mantenedores/cargos', $data);
	}

	public function fn_lista_cargos()
	{
		$data = $this->CargoModel->lista_cargos(
			$this->input->post('car_nombre'),
		);
		echo json_encode($data);
	}
	public function fn_guarda_cargo()
	{
		$data = $this->CargoModel->guardar_cargo(
			$this->input->post('car_id'),
			$this->input->post('car_nombre')
		);
		echo json_encode($data);
	}
	// public function fn_activa_personal()
	// {
	// 	$data = $this->PersonalModel->activa_personal(
	// 		$this->input->post('per_id'),
	// 		$this->input->post('per_activo')
	// 	);
	// 	echo json_encode($data);
	// }
	public function fn_elimina_cargo()
	{
		$data = $this->CargoModel->elimina_cargo(
			$this->input->post('car_id')
		);
		echo json_encode($data);
	}
}
