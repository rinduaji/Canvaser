<?php 
 
 class M_report extends CI_Model {
    
    var $table1 = 'app_data_canvas';
    var $table2 = 'cc147_main_users';
    var $table3 = 'cc147_main_users_extended';
    var $column_order = array('id','tgl','login','name','reg','witel','fastel','nama_dm','tlp','jenis','status','reason','kategori','valid','input','ket','upd_qco','rec_qco'); //set column field database for datatable orderable
    var $column_search = array('id','tgl','login','name','reg','witel','fastel','nama_dm','tlp','jenis','status','reason','kategori','valid','input','ket','upd_qco','rec_qco'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('tgl' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query_report_call_agent($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);

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
 
    function get_datatables_report_call_agent($login)
    {
        $this->_get_datatables_query_report_call_agent($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_call_agent($login)
    {
        $this->_get_datatables_query_report_call_agent($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_call_agent($login)
    {
        $this->_get_datatables_query_report_call_agent($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_call()
    {
        $login = $this->input->post('login');
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
            $this->db->where('login', $login);
        }

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
 
    function get_datatables_report_call()
    {
        $this->_get_datatables_query_report_call();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_call()
    {
        $this->_get_datatables_query_report_call();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_call()
    {
        $this->_get_datatables_query_report_call();
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_call_agree()
    {
        $login = $this->input->post('login');
        $this->db->select('*, COUNT(login) as total');
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
            $this->db->where('login', $login);
        }
        $this->db->where('status', 'Contacted');
        $this->db->where('kategori', 'Agree');
        $this->db->where('valid', 'Valid');
        $this->db->where('follow', '6');
        $this->db->group_by('login');

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
 
    function get_datatables_report_call_agree()
    {
        $this->_get_datatables_query_report_call_agree();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_call_agree()
    {
        $this->_get_datatables_query_report_call_agree();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_call_agree()
    {
        $this->_get_datatables_query_report_call_agree();
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_recall_agent($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);
        $this->db->where('input', 'Recall');
        $this->db->where('follow', '6');

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
 
    function get_datatables_report_recall_agent($login)
    {
        $this->_get_datatables_query_report_recall_agent($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_recall_agent($login)
    {
        $this->_get_datatables_query_report_recall_agent($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_recall_agent($login)
    {
        $this->_get_datatables_query_report_recall_agent($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_follow_agent($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);
        $this->db->where('input', 'New');
        $this->db->where('follow', '1');
        $this->db->where('status', 'Contacted');
        $this->db->where('kategori', 'Follow Up');

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
 
    function get_datatables_report_follow_agent($login)
    {
        $this->_get_datatables_query_report_follow_agent($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_follow_agent($login)
    {
        $this->_get_datatables_query_report_follow_agent($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_follow_agent($login)
    {
        $this->_get_datatables_query_report_follow_agent($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_recall()
    {
        $login = $this->input->post('login');
        $this->db->select('*, COUNT(login) as total');
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
            $this->db->where('login', $login);
        }
        $this->db->where('input', 'Recall');
        $this->db->where('follow', '6');
        $this->db->group_by('login');

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
 
    function get_datatables_report_recall()
    {
        $this->_get_datatables_query_report_recall();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_recall()
    {
        $this->_get_datatables_query_report_recall();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_recall()
    {
        $this->_get_datatables_query_report_recall();
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_follow()
    {
        $login = $this->input->post('login');
        $this->db->select('*, COUNT(login) as total');
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
            $this->db->where('login', $login);
        }
        $this->db->where('input', 'New');
        $this->db->where('status', 'Contacted');
        $this->db->where('kategori', 'Follow Up');
        $this->db->where('follow', '1');
        $this->db->group_by('login');

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
 
    function get_datatables_report_follow()
    {
        $this->_get_datatables_query_report_follow();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_follow()
    {
        $this->_get_datatables_query_report_follow();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_follow()
    {
        $this->_get_datatables_query_report_follow();
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_valid_qco($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);
        $this->db->where('valid', 'Valid');

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
 
    function get_datatables_report_valid_qco($login)
    {
        $this->_get_datatables_query_report_valid_qco($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_valid_qco($login)
    {
        $this->_get_datatables_query_report_valid_qco($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_valid_qco($login)
    {
        $this->_get_datatables_query_report_valid_qco($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_not_valid_qco($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);
        $this->db->where('valid', 'Not Valid');

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
 
    function get_datatables_report_not_valid_qco($login)
    {
        $this->_get_datatables_query_report_not_valid_qco($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_not_valid_qco($login)
    {
        $this->_get_datatables_query_report_not_valid_qco($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_not_valid_qco($login)
    {
        $this->_get_datatables_query_report_not_valid_qco($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_return_tl_qco($login)
    {
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.login = '.$this->table2.'.username');
        if ($this->input->post('datetime1')) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl >=', $datetime1);
            $this->db->where('tgl <=', $datetime2);
        }
        $this->db->where('login', $login);
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
 
    function get_datatables_report_return_tl_qco($login)
    {
        $this->_get_datatables_query_report_return_tl_qco($login);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_return_tl_qco($login)
    {
        $this->_get_datatables_query_report_return_tl_qco($login);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_return_tl_qco($login)
    {
        $this->_get_datatables_query_report_return_tl_qco($login);
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_validasi_qco()
    {
        $this->db->select("upd_qco, name ,
        sum(case when Valid='Valid' then 1 else 0 end) as total_valid,
        sum(case when Valid='Not Valid' then 1 else 0 end) as total_not_valid ,
        sum(case when Follow='3' then 1 else 0 end) as total_return_tl,
        count(valid) as total");
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd_qco = '.$this->table2.'.username');
        $this->db->join($this->table3, $this->table1.'.upd_qco = '.$this->table3.'.user1');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl_qco1 >=', $datetime1);
            $this->db->where('tgl_qco1 <=', $datetime2);
        }
        $this->db->where('user3', 'QCO');
        $this->db->group_by('upd_qco');

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
 
    function get_datatables_report_validasi_qco()
    {
        $this->_get_datatables_query_report_validasi_qco();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_validasi_qco()
    {
        $this->_get_datatables_query_report_validasi_qco();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_validasi_qco()
    {
        $this->_get_datatables_query_report_validasi_qco();
        return $this->db->count_all_results();
    }

    private function _get_datatables_query_report_tap_upd_qco()
    {
        $login = $this->input->post('login');
        $this->db->select('*, COUNT(upd_qco) as total');
        $this->db->from($this->table1);
        $this->db->join($this->table2, $this->table1.'.upd_qco = '.$this->table2.'.username');
        if ($this->input->post('datetime1') AND $login != NULL) {
            $datetime1 = $this->input->post("datetime1");
            $datetime2 = $this->input->post("datetime2");
            $this->db->where('tgl_qco1 >=', $datetime1);
            $this->db->where('tgl_qco1 <=', $datetime2);
            $this->db->where('upd_qco', $login);
        }
        $this->db->group_by('upd_qco');

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
 
    function get_datatables_report_tap_upd_qco()
    {
        $this->_get_datatables_query_report_tap_upd_qco();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_report_tap_upd_qco()
    {
        $this->_get_datatables_query_report_tap_upd_qco();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_report_tap_upd_qco()
    {
        $this->_get_datatables_query_report_tap_upd_qco();
        return $this->db->count_all_results();
    }
}