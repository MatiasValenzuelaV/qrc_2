<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EtiquetaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function etiqueta($eti_id)
    {
        $data["eti_id"] = $eti_id;
        $this->load->view('Etiqueta', $data);
    }
}

/* End of file EtiquetaController.php */
