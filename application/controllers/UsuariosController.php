<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('UsuarioModel');
	}

	public function index()
	{
		$data["title"] = 'Control Inventario - Usuarios';
		$data["bc"] = "Administrar acceso";
		$data["sbc"] = "Usuarios";
		$this->load->view('administracion/usuarios', $data);
	}
	public function fn_lista_usuario()
	{
		$data = $this->UsuarioModel->lista_usuario(
			$this->input->post('prf_codigo'),
			$this->input->post('per_nombre'),
			$this->input->post('usu_paginacion')
		);
		echo json_encode($data);
	}
	public function fn_guarda_usuario()
	{
		$usu_clave = "";
		if ($this->input->post('usu_clave') != "") {
			$usu_clave = md5($this->input->post('usu_clave'));
		}

		$data = $this->UsuarioModel->guarda_usuario(
			$this->input->post('per_codigo'),
			$this->input->post('prf_codigo'),
			$this->input->post('usu_codigo'),
			$this->input->post('usu_usuario'),
			$usu_clave,
			$this->input->post('imp_codigo'),
			$this->input->post('usu_equipo')

		);
		echo json_encode($data);
	}
	public function fn_carga_usuario()
	{
		$data = $this->UsuarioModel->carga_usuario(
			$this->input->post('usu_codigo')
		);
		echo json_encode($data);
	}
	public function fn_elimina_usuario()
	{
		$data = $this->UsuarioModel->elimina_usuario(
			$this->input->post('usu_codigo')
		);
		echo json_encode($data);
	}
	public function fn_activa_usuario()
	{
		$data = $this->UsuarioModel->activa_usuario(
			$this->input->post('usu_codigo'),
			$this->input->post('usu_activo')
		);
		echo json_encode($data);
	}
	public function fn_cambia_clave_usuario()
	{
		$usu_clave = "";
		if ($this->input->post('usu_clave') != "") {
			$usu_clave = md5($this->input->post('usu_clave'));
		}

		$data = $this->UsuarioModel->cambia_clave_usuario(
			$this->input->post('usu_codigo'),
			$usu_clave
		);
		echo json_encode($data);
	}
}
