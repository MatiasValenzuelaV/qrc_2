<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PerfilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('PerfilModel');
    }

    public function index()
    {
        $data["title"] = 'QRC Ingeniería - Perfiles';
        $data["bc"] = 'Perfiles';
        $this->load->view('administrar/Perfil', $data);
    }

    public function lista_perfil()
    {
        $data = $this->PerfilModel->lista_perfil(
            $this->input->post('prf_id'),
        );
        echo json_encode($data);
    }
    public function lista_perfil_menu()
    {
        $data = $this->PerfilModel->lista_perfil_menu(
            $this->input->post('prf_id'),
        );
        echo json_encode($data);
    }

    public function guarda_perfil()
    {
        $data = $this->PerfilModel->guarda_perfil(
            $this->input->post('prf_id'),
            $this->input->post('prf_nombre'),
        );
        echo json_encode($data);
    }

    public function guarda_perfil_menu()
    {
        $data = $this->PerfilModel->guarda_perfil_menu(
            $this->input->post('men_id'),
            $this->input->post('pmen_activo'),
            $this->input->post('prf_id'),
        );
        echo json_encode($data);
    }
    public function carga_menu()
    {
        $data = $this->PerfilModel->carga_menu(
            $this->session->userdata('usu_id'),
            $this->session->userdata('prf_id')
        );
        echo json_encode($data);
    }
}

/* End of file PerfilController.php */
