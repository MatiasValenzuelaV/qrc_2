<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CheckListController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('ChecklistModel');
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - checklist';
		$data["bc"] = 'Check List';
		$this->load->view('mantenedores/checklist', $data);
	}
	public function fn_lista_checklist()
	{
		$data = $this->ChecklistModel->lista_checklist(
			$this->input->post('chk_nombre')
		);
		echo json_encode($data);
	}

	public function fn_guarda_checklist()
	{
		$data = $this->ChecklistModel->guarda_checklist(
			$this->input->post('chk_id'),
			$this->input->post('chk_nombre')
		);
		echo json_encode($data);
	}
	public function fn_activa_checklist()
	{
		$data = $this->ChecklistModel->activa_checklist(
			$this->input->post('chk_id'),
			$this->input->post('equ_activo')
		);
		echo json_encode($data);
	}
	public function fn_elimina_checklist()
	{
		$data = $this->ChecklistModel->elimina_checklist(
			$this->input->post('chk_id')
		);
		echo json_encode($data);
	}
}
