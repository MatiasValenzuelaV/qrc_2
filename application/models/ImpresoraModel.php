<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ImpresoraModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function lista_impresoras($imp_nombre)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query("inv_impresora" . "$" . "lista_impresora ?", array("imp_nombre" => $imp_nombre))->result();
		$db->close();
		return $result;
	}
	public function combobox_impresora()
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query("inv_impresora" . "$" . "combobox_impresora")->result();
		$db->close();
		return $result;
	}
	public function eliminar_impresora($imp_codigo, $imp_codigo_eliminar)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query("inv_impresora" . "$" . "elimina_impresora ?,?", array("imp_codigo" => $imp_codigo, "imp_codigo_eliminar" => $imp_codigo_eliminar))->result();
		$db->close();
		return $result;
	}
	public function guardar_impresora($imp_codigo, $imp_nombre)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query("inv_impresora" . "$" . "guarda_impresora ?,?", array("imp_codigo" => $imp_codigo, "imp_nombre" => $imp_nombre))->result();
		$db->close();
		return $result;
	}
}

/* End of file ImpresoraModel.php */
