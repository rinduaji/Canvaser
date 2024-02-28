<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApproveTl extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_approve_tl');
	}

	public function index()
	{
        $data["title"] = "Approve TL";
        $data["nama_tipe"] = "MENU";
		$this->load->view('approve_tl_view', $data);
	}

    public function ajax_list()
    {
        $date_now = date("Y-m-d");
        $list = $this->m_approve_tl->get_datatables($date_now);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $approve) {
            $no++;
            $row = array();
 
            $row[] = $approve->tgl;
            $row[] = $approve->login;
            $row[] = $approve->name;
            $row[] = $approve->witel;
            $row[] = $approve->fastel;
            $row[] = $approve->nama_dm;
            $row[] = $approve->tlp;
            $row[] = $approve->jenis;
            $row[] = $approve->reason;
            $row[] = $approve->input;
            $row[] = $approve->ket;
            $row[] = $approve->upd_qco;
            $row[] = $approve->rec_qco;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Tapping" onclick="tapping_data('."'".$approve->id."'".')"><i class="fas fa-edit"></i></i> Tapping TL</a';

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_approve_tl->count_all($date_now),
                        "recordsFiltered" => $this->m_approve_tl->count_filtered($date_now),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_approve_tl->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $data = array(
                    'rec_tl' => $this->input->post('rec_tl'),
                    'tgl_tl' => $this->input->post('tgl_tl'),
                    'upd_tl' =>  $this->input->post('upd_tl'),
                    'follow' => '5',
        );
       
        $this->m_approve_tl->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
}