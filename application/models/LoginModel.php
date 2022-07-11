<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($usu_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_usuarios" . "$" . "login ?",
            array("usu_nombre" => $usu_nombre)
        )->result();
        $db->close();
        return $result;
    }
}

/* End of file CentroCostosModel.php */
