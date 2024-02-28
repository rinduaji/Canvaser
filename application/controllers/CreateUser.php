<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateUser extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_create_user');
	}

	public function index()
	{
        $data["title"] = "Create User";
        $data["nama_tipe"] = "MENU";

		$this->load->view('create_user_view',$data);
	}

    public function insertDataUser(){	
        $data = array();
        $data1 = array();

        $max_id = $this->m_create_user->maxId();

        // var_dump($max_id);
        // die();

        $data = array(
            'user1' => $this->input->post('login'),
            'user2' => $this->input->post('nama'),
            'user4' => $this->input->post('jenis_kelamin'),
            'user5' => $this->input->post('area'),
            'user6' => $this->input->post('witel'),
            'user3' => $this->input->post('jabatan'),
            'user13' => 'Aktif',
            'user12' => 'nopict.jpg',
            'id' => $max_id,
            'user_id' => $max_id
        );

        $data1 = array(
            'name' => $this->input->post('nama'),
            'username' => $this->input->post('login'),
            'user_password' => "1cd8ef4fc35be954238d41e14b890594",
            'user_email' => $this->input->post('login')."@cctelkom.web.id",
            'user_avatar' => "gallery/blank.gif",
            'user_id' => $max_id
        );

		$response=$this->m_create_user->saverecords_extended($data);
        $response1=$this->m_create_user->saverecords_main($data1);

		if($response==true AND $response1==true){
			$this->session->set_flashdata('mesg', 'Success');
		}
		else{
			$this->session->set_flashdata('mesg', 'Gagal');
		}
		// print_r($response);
		redirect(base_url('index.php/CreateUser'));
	}
}
