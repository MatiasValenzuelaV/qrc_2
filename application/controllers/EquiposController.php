<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EquiposController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('EquiposModel');
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - Equipos';
		$data["bc"] = 'Equipos';
		$this->load->view('mantenedores/equipos', $data);
	}
	public function fn_lista_equipos()
	{
		$data = $this->EquiposModel->lista_equipos(
			$this->input->post('equ_nombre')
		);
		echo json_encode($data);
	}
	public function fn_lista_equipos_checklist()
	{
		$data = $this->EquiposModel->lista_equipos_checklist(
			$this->input->post('equ_id')
		);
		echo json_encode($data);
	}
	public function fn_lista_equipos_insumos()
	{
		$data = $this->EquiposModel->lista_equipos_insumos(
			$this->input->post('equ_id')
		);
		echo json_encode($data);
	}

	public function fn_guarda_equipos()
	{
		$data = $this->EquiposModel->guarda_equipos(
			$this->input->post('equ_id'),
			$this->input->post('equ_nombre')
		);
		echo json_encode($data);
	}
	public function fn_activa_equipos()
	{
		$data = $this->EquiposModel->activa_equipos(
			$this->input->post('equ_id'),
			$this->input->post('equ_activo')
		);
		echo json_encode($data);
	}
	public function fn_activa_equipos_checklist()
	{
		$data = $this->EquiposModel->activa_equipos_checklist(
			$this->input->post('chk_id'),
			$this->input->post('equ_id'),
			$this->input->post('equchk_id')
		);
		echo json_encode($data);
	}
	public function fn_activa_equipos_insumos()
	{
		$data = $this->EquiposModel->activa_equipos_insumos(
			$this->input->post('ins_id'),
			$this->input->post('equ_id'),
			$this->input->post('equins_id')
		);
		echo json_encode($data);
	}
	public function fn_elimina_equipos()
	{
		$data = $this->EquiposModel->elimina_equipos(
			$this->input->post('equ_id')
		);
		echo json_encode($data);
	}
}
