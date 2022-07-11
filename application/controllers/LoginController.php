<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        $this->load->helper('url');
        $this->load->Model('LoginModel');
    }

    public function index()
    {
        $data["title"] = 'QRC Ingeniería - Inicio';
        $data["bc"] = 'Dashboard';
        $this->load->view('login', $data);
    }

    public function login()
    {
        $data = $this->LoginModel->login(
            $this->input->post('usu_nombre')
        );
        if ($data[0]->codesql == '1') {
            $clave = $data[0]->usu_clave;
            if (password_verify($this->input->post('usu_clave'), $clave)) {
                $this->session->unset_userdata('usu_id');
                $this->session->unset_userdata('per_nombre');
                $this->session->unset_userdata('per_id');
                $this->session->unset_userdata('prf_id');

                $usuariodata = array(
                    'usu_id' => $data[0]->usu_id,
                    'per_nombre' => $data[0]->per_nombre,
                    'per_id' => $data[0]->per_id,
                    'prf_id' => $data[0]->prf_id,
                );
                $this->session->set_userdata($usuariodata);
            } else {
                echo 'Los datos del usuario son incorrectos o bien el usuario está desactivado.';
            }
        } else {
            echo json_encode($data);
        }
    }
    public function logout_usuario()
    {
        $this->session->unset_userdata('usu_id');
        $this->session->unset_userdata('per_id');
        $this->session->unset_userdata('per_nombre');

        header("Location: " . base_url());
    }
}
