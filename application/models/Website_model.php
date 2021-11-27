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

	// '''''''''''''''''''''''''''''''''Top News'''''''''''''''''''''''''''''''''''''''
	public function topbusinessnews(){
		 $this->db->select('*');
          $this->db->from('news');
          $this->db->where(['top_news_status'=>1,'date'=>date('Y-m-d'),'menu_id'=>5]);
          $this->db->limit(8);
          $query = $this->db->get();
          $topbusinessdetails = $query->result_array();
          return $topbusinessdetails;
	}

	public function toplifestyle(){
		  $this->db->select('*');
	      $this->db->from('news');
	      $this->db->where(['date'=>date('Y-m-d'),'menu_id'=>9]);
	      $this->db->limit(8);
	      $query = $this->db->get();
	      $toplifestyledetails = $query->result_array();
	      return $toplifestyledetails;

	}

	public function tech(){
		$this->db->select('*');
	      $this->db->from('news');
	      $this->db->where(['date'=>date('Y-m-d'),'menu_id'=>6]);
	      $this->db->limit(8);
	      $query = $this->db->get();
	      $details = $query->result_array();
	      return $toplifestyledetails;
	}
}