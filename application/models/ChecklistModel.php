<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CheckListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista_checklist($chk_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_checklist" . "$" . "lista_checklist ?",
            array("chk_nombre" => $chk_nombre)
        )->result();
        $db->close();
        return $result;
    }

    public function guarda_checklist($chk_id, $chk_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_checklist" . "$" . "guarda_checklist ?,?",
            array(
                "chk_id" => $chk_id,
                "chk_nombre" => $chk_nombre
            )
        )->result();
        $db->close();
        return $result;
    }
    public function activa_checklist($chk_id, $chk_activo)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_checklist" . "$" . "activa_checklist ?,?",
            array(
                "chk_id" => $chk_id,
                "chk_activo" => $chk_activo
            )
        )->result();
        $db->close();
        return $result;
    }
    public function elimina_checklist($chk_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_checklist" . "$" . "elimina_checklist ?",
            array(
                "chk_id" => $chk_id
            )
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file checklistModel.php */
/* Location: ./application/models/PerfilModel.php */