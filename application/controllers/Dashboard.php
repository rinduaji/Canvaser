<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_dashboard');
	}

	public function index()
	{
        $data["title"] = "Dashboard";
        $data["nama_tipe"] = "DASHBOARD";
		$data["dataDashboard"] = $this->m_dashboard->getDashboard();
		$this->load->view('dashboard_view', $data);
	}
}