<?php 
 
 class M_dashboard extends CI_Model {
    
    var $table1 = 'app_data_canvas';
    var $column_order = array('id','tgl','login','name','reg','witel','fastel','nama_dm','tlp','jenis','status','reason','kategori','valid','input','ket','upd_qco','rec_qco'); //set column field database for datatable orderable
    var $column_search = array('id','tgl','login','name','reg','witel','fastel','nama_dm','tlp','jenis','status','reason','kategori','valid','input','ket','upd_qco','rec_qco'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('tgl' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getDashboard()
    {
        $this->db->select("sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
        sum(case when `kategori`='Agree' and `follow`in('2','3') then 1 else 0 end) as OnProcess,
        sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
        sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
        count(id) as transaksi,
        sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
        sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall,
        sum(case when `kategori`='Agree' and `follow` ='2' then 1 else 0 end) as QCO,
		sum(case when `kategori`='Agree' and `follow` ='3' then 1 else 0 end) as TL");
        $this->db->from($this->table1);
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $query = $this->db->get();
        return $query->row();
    }
 }
 ?>