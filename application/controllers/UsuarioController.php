<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('UsuarioModel');
    }

    public function index()
    {
        $data["title"] = 'QRC Ingeniería - Usuarios';
        $data["bc"] = 'Usuarios';
        $this->load->view('administrar/usuario', $data);
    }

    public function fn_listado_personal()
    {
        $data = $this->UsuarioModel->listado_personal();
        echo json_encode($data);
    }

    public function fn_nuevo_usuario()
    {
        $data = $this->UsuarioModel->nuevo_usuario(
            $this->input->post('usu_id'),
            $this->input->post('per_id'),
            $this->input->post('prf_id'),
            $this->input->post('usu_nombre'),
            password_hash($this->input->post('usu_clave'), PASSWORD_DEFAULT),
        );
        echo json_encode($data);
    }

    public function fn_listado_usuarios()
    {
        $data = $this->UsuarioModel->listado_usuarios(
            $this->input->post('prf_id'),
            $this->input->post('per_nombre')
        );
        echo json_encode($data);
    }
    public function fn_elimina_usuario()
    {
        $data = $this->UsuarioModel->elimina_usuario(
            $this->input->post('usu_id')
        );
        echo json_encode($data);
    }
    // public function fn_lista_personal()
    // {
    // 	$data = $this->PersonalModel->lista_personal(
    // 		$this->input->post('per_nombre'),
    // 		$this->input->post('per_rut')
    // 	);
    // 	echo json_encode($data);
    // }
    // public function fn_guarda_personal()
    // {
    // 	$data = $this->PersonalModel->guardar_personal(
    // 		$this->input->post('per_id'),
    // 		$this->input->post('per_nombre'),
    // 		$this->input->post('per_rut'),
    // 		$this->input->post('prf_id'),
    // 	);
    // 	echo json_encode($data);
    // }
    // public function fn_activa_personal()
    // {
    // 	$data = $this->PersonalModel->activa_personal(
    // 		$this->input->post('per_id'),
    // 		$this->input->post('per_activo')
    // 	);
    // 	echo json_encode($data);
    // }
    // public function fn_elimina_personal()
    // {
    // 	$data = $this->PersonalModel->elimina_personal(
    // 		$this->input->post('per_id')
    // 	);
    // 	echo json_encode($data);
    // }
}
