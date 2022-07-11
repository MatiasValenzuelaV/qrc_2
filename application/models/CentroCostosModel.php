<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CentroCostosModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function carga_combo_centro_costo()
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query(
			"inv_centro_costo" . "$" . "combobox_centro_costo"
		)->result();
		$db->close();
		return $result;
	}
}

/* End of file CentroCostosModel.php */
