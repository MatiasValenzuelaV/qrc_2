<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerfilModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function combobox_perfil()
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query("inv_perfil" . "$" . "combobox_perfil")->result();
		$db->close();
		return $result;
	}

	public function lista_perfil($prf_id)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query('qrc_perfil$lista_perfil ?', array($prf_id))->result();
		$db->close();
		return $result;
	}
	public function lista_perfil_menu($prf_id)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query('qrc_perfil_menu#listar ?', array($prf_id))->result();
		$db->close();
		return $result;
	}

	public function guarda_perfil($prf_id,$prf_nombre){
		$db = $this->load->database('default', TRUE);
		$result = $db->query('qrc_perfil$guardar ?,?', array($prf_id,$prf_nombre))->result();
		$db->close();
		return $result;
	}

	public function guarda_perfil_menu($men_codigo, $pmen_activo, $prf_codigo)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query(
			"qrc_perfil_menu#guardar ?,?,?",
			array($men_codigo, $pmen_activo, $prf_codigo)
		)->result();
		$db->close();
		return $result;
	}
	public function carga_menu($usu_id, $prf_id)
	{
		$db = $this->load->database('default', TRUE);
		$result = $db->query(
			"qrc_menu#menu_usuario ?,?",
			array($usu_id, $prf_id)
		)->result();
		$db->close();
		return $result;
	}
}

/* End of file PerfilModel.php */
/* Location: ./application/models/PerfilModel.php */