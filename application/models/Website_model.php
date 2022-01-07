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
		 $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where(['t1.top_news_status'=>1,'t1.menu_id'=>5]);
          $this->db->limit(6);
            $this->db->order_by('t1.id','desc');
          $query = $this->db->get();
          $topbusinessdetails = $query->result_array();
          return $topbusinessdetails;
	}

	public function toplifestyle(){
		  $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	      $this->db->where(['t1.menu_id'=>9]);
	      $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	      $query = $this->db->get();
	      $toplifestyledetails = $query->result_array();
	      return $toplifestyledetails;

	}


	public function topindianews(){
		   $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>2]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $topindianews = $query->result_array();
	      return $topindianews;
	}

	public function getsubmenuslistbyid($menu){
		$id = $menu['menu'];
		// print_r($id);die;
		 $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>$id]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $southasia = $query->result_array();
	      return $southasia;

	}

	public function topsouthasianews(){
		   $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>3]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $southasia = $query->result_array();
	      return $southasia;
	}

	public function topworldnews(){
		   $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>4]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $world = $query->result_array();
	      return $world;
	}

	public function topclimatenews(){
		   $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>8]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $world = $query->result_array();
	      return $world;
	}

	public function topopenionnews(){
		$this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>12]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $world = $query->result_array();
	      return $world;
	}
	public function topmorenews(){
		$this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>13]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $world = $query->result_array();
	      return $world;
	}

	public function topsportnews(){
		$this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>10]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $sportnews = $query->result_array();
	      return $sportnews;
	}

	public function toptechnews(){
		 $this->db->select('t1.*,t2.menu_name,t3.submenu');
	       $this->db->from('news t1');
	       $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
           $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
	       $this->db->where(['t1.menu_id'=>6]);
	       $this->db->limit(6);
	       $this->db->order_by('t1.id','desc');
	       $query = $this->db->get();
	       $world = $query->result_array();
	      return $world;
	}

	public function tech(){
		$this->db->select('*');
	      $this->db->from('news');
	      $this->db->where(['date'=>date('Y-m-d'),'menu_id'=>6]);
	      $this->db->limit(6);
	      $query = $this->db->get();
	      $details = $query->result_array();
	      return $toplifestyledetails;
	}
}