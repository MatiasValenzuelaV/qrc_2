<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{

	public function index()
	{
		$data["title"] = 'Control Inventario - Inicio';
		$data["bc"] = 'Dashboard';
		$this->load->view('index', $data);
	}
}
