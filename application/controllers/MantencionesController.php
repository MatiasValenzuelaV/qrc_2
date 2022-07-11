<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MantencionesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('MaestraModel');
    }
    public function index()
    {
        $data["title"] = 'QRC Ingeniería - Mantenciones';
        $data["bc"] = 'Mantenciones';
        $this->load->view('mantenciones', $data);
    }
    public function listado_mantenciones()
    {
        $data["title"] = 'QRC Ingeniería - Listado Mantenciones';
        $data["bc"] = 'Listado Mantenciones';
        $this->load->view('listado_mantenciones', $data);
    }
    public function maestra_mantencion()
    {
        $data = $this->MaestraModel->maestra_mantencion(
            $this->input->post('mtr_criticidad'),
            $this->input->post('mtr_clinica'),
            $this->input->post('mtr_turno'),
            $this->input->post('mtr_mantencion'),
            $this->input->post('mtr_equipo'),
            $this->input->post('mtr_activo'),
            $this->input->post('mtr_serie'),
            $this->input->post('mtr_modelo'),
            $this->input->post('mtr_marca'),
            $this->input->post('mtr_edificio'),
            $this->input->post('mtr_descripcion'),
            $this->input->post('mtr_lugar'),
            $this->input->post('mtr_ubicacionf'),
        );
        echo json_encode($data);
    }
    public function guarda_mantencion()
    {
        $data = $this->MaestraModel->guarda_mantencion(
            $this->input->post('man_fecha'),
            $this->input->post('man_tipo'),
            $this->input->post('man_tecnico1'),
            $this->input->post('man_tecnico2'),
            $this->input->post('mtr_id'),
        );
        echo json_encode($data);
    }
    public function fn_listado_mantenciones()
    {
        $data = $this->MaestraModel->listado_mantenciones(
            $this->input->post('periodo'),
            $this->input->post('estado'),
            $this->input->post('clinica'),
            $this->input->post('equipo'),
            $this->input->post('periodoM'),
            $this->input->post('mtr_marca'),
            $this->input->post('mtr_modelo'),
            $this->input->post('mtr_activo'),
            $this->input->post('mtr_serie'),
            $this->input->post('mtr_descripcion'),
            $this->input->post('mtr_lugar'),
            $this->input->post('mtr_ubicacionf'),
        );
        echo json_encode($data);
    }
    public function guarda_cabecera_ot()
    {
        $data = $this->MaestraModel->guarda_cabecera_ot(
            $this->input->post('man_id'),
            $this->input->post('ot_correlativo')
        );
        echo json_encode($data);
    }

    public function session_data_excel()
    {

        $dataArray = array(
            'man_id' => $this->input->post('man_id')
        );
        $this->session->set_userdata($dataArray);
    }
}
