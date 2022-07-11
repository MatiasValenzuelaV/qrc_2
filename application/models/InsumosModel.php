<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InsumosModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista_insumos($ins_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_insumos" . "$" . "lista_insumos ?",
            array("ins_nombre" => $ins_nombre)
        )->result();
        $db->close();
        return $result;
    }

    public function guarda_insumos($ins_id, $ins_nombre, $ins_interior, $ins_exterior)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_insumos" . "$" . "guarda_insumos ?,?,?,?",
            array(
                "ins_id" => $ins_id,
                "ins_nombre" => $ins_nombre,
                "ins_interior" => $ins_interior,
                "ins_exterior" => $ins_exterior
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_insumos($ins_id, $ins_activo)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_insumos" . "$" . "activa_insumos ?,?",
            array(
                "ins_id" => $ins_id,
                "ins_activo" => $ins_activo
            )
        )->result();
        $db->close();
        return $result;
    }
    public function elimina_insumos($ins_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_insumos" . "$" . "elimina_insumos ?",
            array(
                "ins_id" => $ins_id
            )
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file insumosModel.php */
/* Location: ./application/models/PerfilModel.php */