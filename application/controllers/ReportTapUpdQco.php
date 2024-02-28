<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportTapUpdQco extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_report');
	}

	public function index()
	{
        $data["title"] = "Report Jumlah Tapping QCO";
        $data["nama_tipe"] = "REPORT";
		$this->load->view('report_tap_upd_qco_view', $data);
	}

    public function ajax_list()
    {
        $list = $this->m_report->get_datatables_report_tap_upd_qco();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $report) {
            $no++;
            $row = array();
 
            $row[] = $report->upd_qco;
            $row[] = $report->name;
            $row[] = $report->total;

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_report->count_all_report_tap_upd_qco(),
                        "recordsFiltered" => $this->m_report->count_filtered_report_tap_upd_qco(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}