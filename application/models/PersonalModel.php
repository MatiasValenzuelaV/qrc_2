<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersonalModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista_personal($per_nombre, $per_rut)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_personal" . "$" . "lista_personal ?,?",
            array("per_nombre" => $per_nombre, "per_rut" => $per_rut)
        )->result();
        $db->close();
        return $result;
    }

    public function guardar_personal($per_id, $per_nombre, $per_rut, $per_correo, $car_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_personal" . "$" . "guarda_personal ?,?,?,?,?",
            array(
                "per_id" => $per_id,
                "per_nombre" => $per_nombre,
                "per_rut" => $per_rut,
                "per_correo" => $per_correo,
                "car_id" => $car_id,
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_personal($per_id, $per_activo)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_personal" . "$" . "activa_personal ?,?",
            array(
                "per_id" => $per_id,
                "per_activo" => $per_activo
            )
        )->result();
        $db->close();
        return $result;
    }
    public function elimina_personal($per_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_personal" . "$" . "elimina_personal ?",
            array(
                "per_id" => $per_id
            )
        )->result();
        $db->close();
        return $result;
    }
    public function fn_listado_mantenciones($per_id,$ano,$mes)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            'qrc_inicio$reporte_mantenciones_activas ?,?,?',
            array(
                "per_id" => $per_id,
                "ano" => $ano,
                "mes" => $mes
            )
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file PersonalModel.php */
/* Location: ./application/models/PersonalModel.php */