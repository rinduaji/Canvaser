<?php 
 
 class M_import_create_cwc extends CI_Model {
    
    var $table1 = 'app_data_upload';
    var $table2 = 'cc147_main_users';
    var $table3 = 'app_tam_jenis';
    var $table4 = 'cc147_main_users_extended';
    var $table5 = 'app_data_canvas';
    var $column_order = array('app_data_upload.id','tgl_upload','nama_dm','fastel','tlp','reg','witel',null); //set column field database for datatable orderable
    var $column_search = array('app_data_upload.id','tgl_upload','nama_dm','fastel','tlp','reg','witel'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('tgl_upload' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query($tanggal)
    {
        $this->db->select(" *, app_data_upload.id as id_upload");
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd = '.$this->table2.'.username');
        $this->db->join($this->table4, $this->table1.'.upd = '.$this->table4.'.user1');

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
        $this->db->select(" *, app_data_upload.id as id_upload");
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd = '.$this->table2.'.username');
        $this->db->join($this->table4, $this->table1.'.upd = '.$this->table4.'.user1');
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->select(" *, app_data_upload.id as id_upload");
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd = '.$this->table2.'.username');
        $this->db->join($this->table4, $this->table1.'.upd = '.$this->table4.'.user1');
        $this->db->where($this->table1.'.id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function get_by_id_array($id)
    {
        $this->db->select(" *, app_data_upload.id as id_upload");
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd = '.$this->table2.'.username');
        $this->db->join($this->table4, $this->table1.'.upd = '.$this->table4.'.user1');
        $this->db->where($this->table1.'.id',$id);
        $query = $this->db->get();
 
        return $query->row_array();
    }
 
    public function update($where, $data)
    {
        $this->db->update($this->table1, $data, $where);
        return $this->db->affected_rows();
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete($this->table1);
        return $this->db->affected_rows();
    }
}