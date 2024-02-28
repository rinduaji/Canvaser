<?php 
 
 class M_approve_tl extends CI_Model {
    
    var $table1 = 'app_data_canvas';
    var $table2 = 'cc147_main_users';
    var $column_order = array('id','tgl','login','name','witel','fastel','nama_dm','tlp','jenis','reason','input','ket','upd_qco','rec_qco','upd_tl','rec_tl',null); //set column field database for datatable orderable
    var $column_search = array('id','tgl','login','name','witel','fastel','nama_dm','tlp','jenis','reason','input','ket','upd_qco','rec_qco','upd_tl','rec_tl'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('tgl' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query($tanggal)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        $this->db->where('follow', '3');

        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($tanggal)
    {
        $this->_get_datatables_query($tanggal);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($tanggal)
    {
        $this->_get_datatables_query($tanggal);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($tanggal)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        $this->db->where('follow', '3');
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        $this->db->where('id',$id);
        $this->db->where('follow', '3');
        $query = $this->db->get();
 
        return $query->row();
    }

    public function get_by_id_array($id)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        $this->db->where('id',$id);
        $this->db->where('follow', '3');
        $query = $this->db->get();
 
        return $query->row_array();
    }
 
    public function update($where, $data)
    {
        $this->db->update($this->table1, $data, $where);
        return $this->db->affected_rows();
    }
}