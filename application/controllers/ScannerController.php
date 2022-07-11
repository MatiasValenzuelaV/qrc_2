<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScannerController extends CI_Controller {
	
	public function index()
	{
		$data["title"] = 'QRC Ingeniería - Scanner';
		$data["bc"] = 'Scanner';
		// $this->load->view('login',$data);
		$this->load->view('scanner',$data);
	}
}