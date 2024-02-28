<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportTappingQCO extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_report');
	}

	public function index()
	{
        $data["title"] = "Report Tapping QCO";
        $data["nama_tipe"] = "REPORT";
		$this->load->view('report_tapping_qco_view', $data);
	}

    public function ajax_list()
    {
        $data = array();
        $list = $this->m_report->get_datatables_report_validasi_qco();
        $no = $_POST['start'];
        foreach ($list as $report) {
            $no++;
            $row = array();
 
            $row[] = $report->upd_qco;
            $row[] = $report->name;
            $row[] = $report->total_valid;
            $row[] = $report->total_not_valid;
            $row[] = $report->total_return_tl;
            $row[] = $report->total;

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_report->count_all_report_validasi_qco(),
                        "recordsFiltered" => $this->m_report->count_filtered_report_validasi_qco(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}