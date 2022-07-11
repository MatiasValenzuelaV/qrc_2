<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CargoModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista_cargos($car_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_cargo" . "$" . "lista_cargo ?",
            array("car_nombre" => $car_nombre)
        )->result();
        $db->close();
        return $result;
    }

    public function guardar_cargo($car_id, $car_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_cargo" . "$" . "guarda_cargo ?,?",
            array(
                "car_id" => $car_id,
                "car_nombre" => $car_nombre
            )
        )->result();
        $db->close();
        return $result;
    }
    // public function activa_checklist($chk_id, $chk_activo)
    // {
    //     $db = $this->load->database('default', TRUE);
    //     $result = $db->query(
    //         "qrc_checklist" . "$" . "activa_checklist ?,?",
    //         array(
    //             "chk_id" => $chk_id,
    //             "chk_activo" => $chk_activo
    //         )
    //     )->result();
    //     $db->close();
    //     return $result;
    // }
    public function elimina_cargo($car_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_cargo" . "$" . "elimina_cargo ?",
            array(
                "car_id" => $car_id
            )
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file CargoModel.php */
/* Location: ./application/models/CargoModel.php */