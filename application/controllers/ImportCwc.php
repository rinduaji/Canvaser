<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportCwc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->library(array('excel','session'));
        $this->load->model('m_import_excel');
    }

    public function index()
    {
        $this->load->helper('url');
		$data["title"] = "Import CWC";
        $data["nama_tipe"] = "MENU";
        // $this->load->view('navbar');
        $this->load->view('import_cwc_view',$data);

        // $data = array(
		// 	'list_data'	=> $this->ImportModel->getData()
		// );
		// $this->load->view('import_excel.php',$data);
    }

	public function import_excel(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$tgl_input = date("Y-m-d h:i:s");
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$nama_dm = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$fastel = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$tlp = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$reg = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$witel = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$status = "UPLOAD";
					$upd = $this->session->userdata('username');
					$temp_data[] = array(
						'nama_dm'	=> $nama_dm,
						'fastel'	=> $fastel,
						'tlp'	=> $tlp,
						'reg'	=> $reg,
						'witel'	=> $witel,
						'data'	=> $status,
						'tgl_upload'	=> $tgl_input,
						'upd' => $upd
					); 	
				}
			}
			// $this->load->model('ImportModel');
			$insert = $this->m_import_excel->insert($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '
				<div class="btn btn-success">
					Data Berhasil di Import ke Database
				</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '
				<div class="btn btn-danger">
					Terjadi Kesalahan
				</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}
 
}