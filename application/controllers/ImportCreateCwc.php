<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportCreateCwc extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_import_create_cwc');
        $this->load->model('m_input_cwc');
	}

	public function index()
	{
        $data["title"] = "Import Create CWC";
        $data["nama_tipe"] = "MENU";
        
		$data['selectJenis'] = $this->m_input_cwc->selectJenis();
		$this->load->view('import_create_cwc_view', $data);
	}

    public function ajax_list()
    {
        $date_now = date("Y-m-d");
        $list = $this->m_import_create_cwc->get_datatables($date_now);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $approve) {
            $no++;
            $row = array();
 
            $row[] = $approve->tgl_upload;
            $row[] = $approve->nama_dm;
            $row[] = $approve->fastel;
            $row[] = $approve->tlp;
            $row[] = $approve->reg;
            $row[] = $approve->witel;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Follow UP" onclick="followup_data('.$approve->id_upload.')"><i class="fas fa-edit"></i></i> Input CWC</a';

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_import_create_cwc->count_all($date_now),
                        "recordsFiltered" => $this->m_import_create_cwc->count_filtered($date_now),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->m_import_create_cwc->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $reason = $this->input->post('reason');
		$penerima = $this->input->post('penerima');
		$status = $this->input->post('status');
		if($status == "Contacted") {
			if(($reason != NULL OR $reason != "")){ 
				if(($penerima != NULL OR $penerima != "")){
					$data['tgl']=$this->input->post('tgl');
					$data['login']=$this->input->post('login');
					$data['fastel']=$this->input->post('fastel');
					$data['nama_dm']=$this->input->post('nama_dm');
					$data['tlp']=$this->input->post('tlp');
					$data['reg']=$this->input->post('reg');
					$data['witel']=$this->input->post('witel');
					$data['jenis']=$this->input->post('jenis');
					$data['status']=$this->input->post('status');
					$data['kategori']=$this->input->post('kategori');
					$data['reason']=$this->input->post('reason');
					$data['penerima']=$this->input->post('penerima');
					$data['ket']=$this->input->post('ket');
					$data['tarif']=$this->input->post('tarif');
					$data['paket']=$this->input->post('paket');
					$data['follow']=$this->input->post('follow');
					$data['valid']='Not Valid';
					$data['input']='New';
                    $data['data']='UPLOAD';
					
                    
                    $this->m_import_create_cwc->hapus_data(array('id' => $this->input->post('id')));
					$response=$this->m_input_cwc->saverecords($data);
					$response="true";
				}
				else{
					$response = "kosong";
				}
			}
			else{
				$response = "kosong";
			}
		}
		else {
				$data['tgl']=$this->input->post('tgl');
				$data['login']=$this->input->post('login');
				$data['fastel']=$this->input->post('fastel');
				$data['nama_dm']=$this->input->post('nama_dm');
				$data['tlp']=$this->input->post('tlp');
				$data['reg']=$this->input->post('reg');
				$data['witel']=$this->input->post('witel');
				$data['jenis']=$this->input->post('jenis');
				$data['status']=$this->input->post('status');
				$data['kategori']=$this->input->post('kategori');
				$data['ket']=$this->input->post('ket');
				$data['tarif']=$this->input->post('tarif');
				$data['paket']=$this->input->post('paket');
				$data['follow']=$this->input->post('follow');
				$data['valid']='Not Valid';
				$data['input']='New';
                $data['data']='UPLOAD';
				
                $this->m_import_create_cwc->hapus_data(array('id' => $this->input->post('id')));
				$response=$this->m_input_cwc->saverecords($data);
				$response="true";
		}

		if($response=="kosong"){
			$this->session->set_flashdata('mesg', 'kosong');
		}
		else if($response=="true"){
			$this->session->set_flashdata('mesg', 'Success');
		}
		else{
			$this->session->set_flashdata('mesg', 'Gagal');
		}
       
        echo json_encode(array("status" => TRUE));
    }
}