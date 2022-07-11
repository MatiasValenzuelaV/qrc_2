<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listado_personal()
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_usuarios" . "$" . "listado_personal")->result();
        $db->close();
        return $result;
    }
    public function nuevo_usuario($usu_id, $per_id, $prf_id, $usu_nombre, $usu_clave)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_usuarios" . "$" . "guarda_usuario ?,?,?,?,?",
            array("usu_id" => $usu_id, "per_id" => $per_id, "prf_id" => $prf_id, "usu_nombre" => $usu_nombre, "usu_clave" => $usu_clave)
        )->result();
        $db->close();
        return $result;
    }
    public function listado_usuarios($prf_id, $per_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_usuarios" . "$" . "lista_usuarios ?,?",
            array("prf_id" => $prf_id, "per_nombre" => $per_nombre)
        )->result();
        $db->close();
        return $result;
    }
    public function elimina_usuario($usu_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_usuarios" . "$" . "elimina_usuario ?",
            array("usu_id" => $usu_id)
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file UsuarioModel.php */
/* Location: ./application/models/UsuarioModel.php */