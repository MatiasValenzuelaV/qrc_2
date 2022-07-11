<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MaestraController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('MaestraModel');
    }

    public function lista_cabera_ot()
    {
        $data = $this->MaestraModel->lista_cabera_ot(
            $this->input->post('id')
        );
        echo json_encode($data);
    }
    public function lista_cabera_ot_edit()
    {
        $data = $this->MaestraModel->lista_cabera_ot_edit(
            $this->input->post('id'),
            $this->input->post('fecha'),
        );
        echo json_encode($data);
    }
    public function lista_checklist_ot()
    {
        $data = $this->MaestraModel->lista_checklist_ot(
            $this->input->post('equ_nombre'),
            $this->input->post('man_id'),
            $this->input->post('ot_id'),
        );
        echo json_encode($data);
    }
    public function listado_tecnicos()
    {
        $data = $this->MaestraModel->listado_tecnicos(
            $this->input->post('car_id')
        );
        echo json_encode($data);
    }
    public function componentes_listado_correctiva()
    {
        $data = $this->MaestraModel->componentes_listado_correctiva();
        echo json_encode($data);
    }
}
