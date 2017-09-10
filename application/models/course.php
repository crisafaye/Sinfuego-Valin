<?php

class course extends CI_Model {
    
	private $table = "course";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	public function read($condition=null){
		
		$this->db->select('*');
		$this->db->from($this->table);
		
		
		if( isset($condition) ) $this->db->where($condition);
		
		$query=$this->db->get();

		return $query->result_array();			
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete_student($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}
