<?php 
 
class M_input_cwc extends CI_Model{	

    public $table1 = 'app_data_canvas';
	public $table2 = 'app_tam_witel';
	public $table3 = 'app_tam_jenis';
	public $table4 = 'app_tam_status';
	public $table5 = 'app_tam_kategori';
	public $table6 = 'app_tam_reason';
	public $table7 = 'app_tam_paket';

	function saverecords($data){	
		$this->db->insert($this->table1,$data);
        return true;
	}	

	function selectRegional(){	
		$this->db->distinct('reg');
		$this->db->select('reg');
		$this->db->from($this->table2);
		$this->db->where('aktif','1');
		$query = $this->db->get();
        return $query->result();
	}

	function selectWitel($reg){	
		$this->db->from($this->table2);
		$this->db->where('aktif','1');
		$this->db->where('reg',$reg);
		$query = $this->db->get();
        return $query->result();
	}

	function selectJenis(){	
		$this->db->from($this->table3);
		$this->db->where('aktif','1');
		$query = $this->db->get();
        return $query->result();
	}

	function selectTarif($jenis){	
		$this->db->from($this->table7);
		$this->db->where('aktif','1');
		$this->db->where('jenis',$jenis);
		$query = $this->db->get();
        return $query->result();
	}

	function selectTarifNominal($jenis,$paket){	
		$this->db->from($this->table7);
		$this->db->where('aktif','1');
		$this->db->where('jenis',$jenis);
		$this->db->where('paket',$paket);
		$query = $this->db->get();
        return $query->result();
	}

	function selectStatus($jenis){	
		$this->db->from($this->table4);
		$this->db->where('aktif','1');
		$this->db->where('jenis', $jenis);
		$query = $this->db->get();
        return $query->result();
	}

	function selectKategori($jenis, $status){	
		$this->db->from($this->table5);
		$this->db->where('aktif','1');
		$this->db->where('jenis', $jenis);
		$this->db->where('status', $status);
		$query = $this->db->get();
        return $query->result();
	}

	function selectFollow($jenis, $status, $kategori, $reason){	
		$this->db->from($this->table6);
		$this->db->where('aktif','1');
		$this->db->where('jenis', $jenis);
		$this->db->where('status', $status);
		$this->db->where('kategori', $kategori);
		$this->db->where('reason', $reason);
		$query = $this->db->get();
        return $query->result();
	}

	function selectReason($jenis, $status, $kategori){	
		$this->db->from($this->table6);
		$this->db->where('aktif','1');
		$this->db->where('jenis', $jenis);
		$this->db->where('status', $status);
		$this->db->where('kategori', $kategori);
		$query = $this->db->get();
        return $query->result();
	}
}