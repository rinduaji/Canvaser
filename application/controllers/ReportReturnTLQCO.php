<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportReturnTLQCO extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_report');
	}

	public function index()
	{
        $data["title"] = "Report Return TL QCO";
        $data["nama_tipe"] = "REPORT";
		$this->load->view('report_return_tl_qco_view', $data);
	}

    public function ajax_list()
    {
        $login = $this->session->userdata("username");
        $list = $this->m_report->get_datatables_report_return_tl_qco($login);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $report) {
            $no++;
            $row = array();
 
            $row[] = $report->tgl;
            $row[] = $report->login;
            $row[] = $report->name;
            $row[] = $report->reg;
            $row[] = $report->witel;
            $row[] = $report->fastel;
            $row[] = $report->nama_dm;
            $row[] = $report->tlp;
            $row[] = $report->jenis;
            $row[] = $report->status;
            $row[] = $report->reason;
            $row[] = $report->kategori;
            $row[] = $report->valid;
            $row[] = $report->input;
            $row[] = $report->ket;
            $row[] = $report->upd_qco;
            $row[] = $report->rec_qco;

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_report->count_all_report_return_tl_qco($login),
                        "recordsFiltered" => $this->m_report->count_filtered_report_return_tl_qco($login),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}