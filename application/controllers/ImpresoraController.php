<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ImpresoraController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('ImpresoraModel');
	}

	public function index()
	{
		$data["title"] = 'Control Inventario - Impresoras';
		$data["bc"] = 'Administrar acceso';
		$data["sbc"] = 'Impresoras';
		$this->load->view('administracion/impresoras', $data);
	}

	public function fn_lista_impresoras()
	{
		$data = $this->ImpresoraModel->lista_impresoras(
			$this->input->post('imp_nombre')
		);
		echo json_encode($data);
	}

	public function fn_elimina_impresora()
	{
		$data = $this->ImpresoraModel->eliminar_impresora(
			$this->input->post('imp_codigo'),
			$this->input->post('imp_codigo_eliminar')
		);
		echo json_encode($data);
	}
	public function fn_guarda_impresora()
	{
		$data = $this->ImpresoraModel->guardar_impresora(
			$this->input->post('imp_codigo'),
			$this->input->post('imp_nombre')
		);
		echo json_encode($data);
	}
	
	public function fn_carga_combo_impresora()
	{
		$data = $this->ImpresoraModel->combobox_impresora();
		echo json_encode($data);
	}
}
