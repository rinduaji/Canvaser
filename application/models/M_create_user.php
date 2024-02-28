<?php 
 
class M_create_user extends CI_Model{	

    public $table1 = 'cc147_main_users_extended';
    public $table2 = 'cc147_main_users';

	function saverecords_extended($data){	
		$this->db->insert($this->table1,$data);
        return true;
	}	

    function saverecords_main($data){	
		$this->db->insert($this->table2,$data);
        return true;
	}	

	function maxId(){	
		$this->db->select_max('id');
		$this->db->from($this->table1);
		$query = $this->db->get();
        $max = $query->row()->id;
        if($max == 0){
            $next_id = 1;
        }else{
            $next_id = $max+1;
        }
        return $next_id;
	}
}