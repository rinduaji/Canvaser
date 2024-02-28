<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecallAgent extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_recall_agent');
        $this->load->model('m_input_cwc');
	}

	public function index()
	{
        $data["title"] = "Recall Agent";
        $data["nama_tipe"] = "MENU";
		$this->load->view('recall_agent_view', $data);
	}

    public function ajax_list()
    {
        $date_now = date("Y-m-d");
        $list = $this->m_recall_agent->get_datatables($date_now);
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
            $row[] = $approve->ket;
            $row[] = $approve->rec_qco;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Recall" onclick="tapping_data('."'".$approve->id_canvas."'".')"><i class="fas fa-edit"></i></i> Recall</a';

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_recall_agent->count_all($date_now),
                        "recordsFiltered" => $this->m_recall_agent->count_filtered($date_now),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_recall_agent->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $follow_baru = "";
        if($this->input->post('status') == "Contacted" AND $this->input->post('kategori') == "Agree") {
            $follow_baru = "2";
        }
        else if($this->input->post('status') == "Contacted" AND $this->input->post('kategori') == "Not Agree") {
            $follow_baru = "1";
        }

        $data = array(
            'input' => 'New',
            'follow' => '1',
        );

        $data1 = array(
            'tgl' => $this->input->post('tgl'),
			'login' => $this->input->post('login'),
			'fastel' => $this->input->post('fastel'),
			'nama_dm' => $this->input->post('nama_dm'),
			'tlp' => $this->input->post('tlp'),
			'reg' => $this->input->post('reg'),
			'witel' => $this->input->post('witel'),
			'jenis' => $this->input->post('jenis'),
			'status' => $this->input->post('status'),
			'kategori' => $this->input->post('kategori'),
            'reason' => $this->input->post('reason'),
			'penerima' => $this->input->post('penerima'),
			'ket' => $this->input->post('ket'),
			'tarif' => $this->input->post('tarif'),
			'paket' => $this->input->post('paket'),
            'ket' => $this->input->post('ket'),
			'valid' => 'Not Valid',
            'input' => 'Recall',
            'follow' => $follow_baru
        );
       
        $this->m_recall_agent->update(array('id' => $this->input->post('id')), $data);
        $this->m_input_cwc->saverecords($data1);
        echo json_encode(array("status" => TRUE));
    }
}