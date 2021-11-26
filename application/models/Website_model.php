<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}
	public function fetchnews(){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('id','1');
		$query = $this->db->get();
		$udetails = $query->result_array();
		return $udetails;
	}
	// public function fetchnewstwo(){
	// 	$this->db->select('*');
	// 	$this->db->from('news');
	// 	$this->db->limit(5);
	// 	$query = $this->db->get();
	// 	$udetails = $query->result_array();
	// 	return $udetails;
	// }
	public function fetchnewsthree(){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('id >=','6');
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		$udetails = $query->result_array();
		return $udetails;
	}
}