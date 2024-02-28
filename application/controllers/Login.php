<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_hash = array(
			'user_password' => md5($password)
			);
		$cek = $this->m_login->cek_login($username,$pass_hash);
		$data_login = $this->m_login->data_login($username,$pass_hash);
		// echo password_hash($password, PASSWORD_DEFAULT);
		// print_r($cek);
		if($cek > 0) {
			$data_session = array(
				'username' => $data_login[0]['username'],
				'name' => $data_login[0]['name'],
				'jabatan' => $data_login[0]['user3'],
				'area' =>	$data_login[0]['user5'],
				'regional' =>	$data_login[0]['user6'],
				'status' => "login"
			);
			
				$this->session->set_userdata($data_session);
	
				redirect(base_url('index.php/Dashboard'));
		}else{
			$this->session->set_flashdata('mesg', 'true');
			redirect(base_url('index.php/login'));
		}
	}

    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
