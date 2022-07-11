<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EquiposModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista_equipos($equ_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "lista_equipos ?",
            array("equ_nombre" => $equ_nombre)
        )->result();
        $db->close();
        return $result;
    }
    public function lista_equipos_checklist($equ_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_equipos" . "$" . "lista_checklist_equipos ?", array("equ_id" => $equ_id))->result();
        $db->close();
        return $result;
    }
    public function lista_equipos_insumos($equ_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_equipos" . "$" . "lista_insumos_equipos ?", array("equ_id" => $equ_id))->result();
        $db->close();
        return $result;
    }

    public function guarda_equipos($equ_id, $equ_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "guarda_equipos ?,?",
            array(
                "equ_id" => $equ_id,
                "equ_nombre" => $equ_nombre
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_equipos_checklist($chk_id,$equ_id,$equchk_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "activa_equipos_checklist ?,?,?",
            array(
                "chk_id" => $chk_id,
                "equ_id" => $equ_id,
                "equchk_id" => $equchk_id
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_equipos_insumos($ins_id,$equ_id,$equins_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "activa_equipos_insumos ?,?,?",
            array(
                "ins_id" => $ins_id,
                "equ_id" => $equ_id,
                "equins_id" => $equins_id
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_equipos($equ_id, $equ_activo)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "activa_equipos ?,?",
            array(
                "equ_id" => $equ_id,
                "equ_activo" => $equ_activo
            )
        )->result();
        $db->close();
        return $result;
    }
    public function elimina_equipos($equ_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_equipos" . "$" . "elimina_equipos ?",
            array(
                "equ_id" => $equ_id
            )
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file EquiposModel.php */
/* Location: ./application/models/PerfilModel.php */