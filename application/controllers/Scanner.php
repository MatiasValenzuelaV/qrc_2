<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scanner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] = 'QRC Ingeniería - Scanner';
		$data["bc"] = 'Scanner';
		$this->load->view('mantenedores/scanner', $data);
	}

	public function qr_scanner(){
		$data["title"] = 'QRC Ingeniería - Scanner';
		$data["bc"] = 'Scanner';
		$this->load->view('administrar/qrscanner', $data);
	}

	public function qrSession()
	{
		$dataQR = array(
			"idQR" => $this->input->post('idQR'),
			"equipo" => $this->input->post('equipo')
		);
		$this->session->set_userdata($dataQR);
	}
}
