<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputCwc extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_input_cwc');
	}

	public function index()
	{
		$data['selectRegional'] = $this->m_input_cwc->selectRegional();
		// $data['selectWitel'] = $this->m_input_cwc->selectWitel('I');
		$data['selectJenis'] = $this->m_input_cwc->selectJenis();
		// $data['selectStatus'] = $this->m_input_cwc->selectStatus();
		// $data['selectKategori'] = $this->m_input_cwc->selectKategori();
		// $data['selectReason'] = $this->m_input_cwc->selectReason();

        $data["title"] = "Input CWC";
        $data["nama_tipe"] = "MENU";

		$this->load->view('input_cwc_view',$data);
	}

    public function insertDataCwc(){	
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
					$data['data']='MANUAL';
					
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
				$data['data']='MANUAL';
				
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
		// print_r($response);
		redirect(base_url('index.php/InputCwc'));
	}
	
	function get_select_witel(){
        $reg = $this->input->post('reg',TRUE);
        $data = $this->m_input_cwc->selectWitel($reg);
        echo json_encode($data);
    }

	function get_select_tarif(){
        $jenis = $this->input->post('jenis',TRUE);
        $data = $this->m_input_cwc->selectTarif($jenis);
        echo json_encode($data);
    }

	function get_select_nominal_tarif(){
        $jenis = $this->input->post('jenis',TRUE);
		$paket = $this->input->post('paket',TRUE);
        $data = $this->m_input_cwc->selectTarifNominal($jenis,$paket);
        echo json_encode($data);
    }

	function get_select_status(){
        $jenis = $this->input->post('jenis',TRUE);
        $data = $this->m_input_cwc->selectStatus($jenis);
        echo json_encode($data);
    }

	function get_select_kategori(){
        $jenis = $this->input->post('jenis',TRUE);
		$status = $this->input->post('status',TRUE);
        $data = $this->m_input_cwc->selectKategori($jenis, $status);
        echo json_encode($data);
    }

	function get_select_follow(){
		$jenis = $this->input->post('jenis',TRUE);
		$status = $this->input->post('status',TRUE);
		$kategori = $this->input->post('kategori',TRUE);
		$reason = $this->input->post('reason',TRUE);
        $data = $this->m_input_cwc->selectFollow($jenis, $status, $kategori, $reason);
        echo json_encode($data);
	}

	function get_select_reason(){
        $jenis = $this->input->post('jenis',TRUE);
		$status = $this->input->post('status',TRUE);
		$kategori = $this->input->post('kategori',TRUE);
        $data = $this->m_input_cwc->selectReason($jenis, $status, $kategori);
        echo json_encode($data);
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
