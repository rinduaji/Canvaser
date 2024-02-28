<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_approve');
	}

	public function index()
	{
        $data["title"] = "Approve QCO";
        $data["nama_tipe"] = "MENU";
		$this->load->view('approve_view', $data);
	}

    public function ajax_list()
    {
        $date_now = date("Y-m-d");
        $list = $this->m_approve->get_datatables($date_now);
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
            if($approve->upd_qco == NULL || $approve->upd_qco == '') {
                $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Approve" onclick="approve_data('."'".$approve->id."'".')"><i class="fas fa-edit"></i></i> Approve</a>';
            }
            else {
            //add html for action
                $row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Tapping" onclick="tapping_data('."'".$approve->id."'".')"><i class="fas fa-edit"></i></i> Tapping</a';
            }

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_approve->count_all($date_now),
                        "recordsFiltered" => $this->m_approve->count_filtered($date_now),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_approve->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $pilihan = $this->input->post('pilihan');
        if($pilihan == "Valid") {
            $data = array(
                    'rec_qco' => $this->input->post('rec_qco'),
                    'tgl_qco1' => $this->input->post('tgl_qco1'),
                    'valid' => 'Valid',
                    'follow' => '6',
            );
        }
        else if($pilihan == "Not Valid") {
            $data = array(
                    'rec_qco' => $this->input->post('rec_qco'),
                    'tgl_qco1' => $this->input->post('tgl_qco1'),
                    'follow' => '6',
            );
        }
        else if($pilihan == "Return TL") {
            $data = array(
                    'rec_qco' => $this->input->post('rec_qco'),
                    'tgl_qco1' => $this->input->post('tgl_qco1'),
                    'follow' => '3',
            );
        }

        $this->m_approve->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_qco($id,$login)
    {
        $data = array(
                'upd_qco' => $login,
                'follow' => '2'
            );
        $cekId = $this->m_approve->get_by_id_array($id);
        if($cekId['upd_qco'] == "" || $cekId['upd_qco'] == NULL){
            $this->m_approve->update(array('id' => $id), $data);
            echo json_encode(array("status" => TRUE, "cekId" => "Success", "upd_qco" => $cekId['upd_qco']));
        }
        else {
            echo json_encode(array("status" => TRUE, "cekId" => "Gagal", "upd_qco" => $cekId['upd_qco']));
        }
    }
 
}