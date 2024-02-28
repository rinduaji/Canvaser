<?php 
 
class M_login extends CI_Model{	

    public $table1 = 'cc147_main_users';
	public $table2 = 'cc147_main_users_extended';

	function cek_login($username, $password){	
		$this->db->select('*');
		$this->db->from($this->table1); 
		$this->db->join($this->table2, $this->table1.'.user_id='.$this->table2.'.id');
		$this->db->where('username', $username);	
		$this->db->where($password);	
		$query = $this->db->get(); 

		if($query->num_rows() != 0)
		{
			return $query->num_rows();
		}
		else
		{
			return false;
		}
	}	

	function data_login($username, $password){		
		$this->db->select('*');
		$this->db->from($this->table1); 
		$this->db->join($this->table2, $this->table1.'.user_id='.$this->table2.'.id');
		$this->db->where('username', $username);	
		$this->db->where($password);		
		$query = $this->db->get(); 

		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}