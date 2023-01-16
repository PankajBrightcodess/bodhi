<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Website extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	// public function index(){
	// 	$d['v'] = 'website/home';
	// 	$this->load->view('website/template',$d);
	// }
	public function index(){
			$d['v'] = 'website/home';
			$d['result4']=$this->Account_model->getmenus();
			$d['result']=$this->Account_model->getnews();
			$d['result1']=$this->Account_model->getmarket();
			$d['gettopnews']=$this->Account_model->fetchtopnews();
			$d['businesstopnews']=$this->Website_model->topbusinessnews();
			$d['lifestyletopnews']=$this->Website_model->toplifestyle();
			$d['indianews']=$this->Website_model->topindianews();
			$d['southasianews']=$this->Website_model->topsouthasianews();
			$d['worldnews']=$this->Website_model->topworldnews();
			$d['technews']=$this->Website_model->toptechnews();
			$d['climatenews']=$this->Website_model->topclimatenews();
			$d['sportnews']=$this->Website_model->topsportnews();
			$d['openionnews']=$this->Website_model->topopenionnews();
			$d['topmorenews']=$this->Website_model->topmorenews();
			
			$this->load->view('website/template',$d);
		}


		
	public function india($id,$menu_name){
		// print_r($id);die;
	   $d['v'] = 'website/india/india';
	    $d['menu']=$menu_name;
	   $d['result4']=$this->Account_model->getmenus();
	   $d['result']=$this->Account_model->indianews($id);

		$this->load->view('website/template',$d);	
	}

	public function registeruser(){
		$data = $this->input->post();
		 $result['res']=$this->Account_model->addregisteruser($data);
		 if($result==true){
		 	$this->load->view('website/inc/top-header.php');
		 	$this->load->view('website/signin');
		 }
		 else{
		 	$this->load->view('website/inc/top-header.php');
		 	$this->load->view('website/signup',$result);
		 }
		
	}

	public function loginuser(){

	}
	// '''''''''''India Sub Menu'''''''''''''''''''''''''
	public function north($id,$menu_name,$submenu){
	    $d['v'] = 'website/india/northern';
	    $d['result']=$this->Account_model->fetchnews($id);
	    $d['menu']=$menu_name;
	    $d['submenu']=$submenu;
		$d['result2']=$this->Account_model->fetchnewstwo();
		$d['result3']=$this->Account_model->fetchnewsthree();
		$d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function detailnewsview($slug)
    {
    	$d['title']="News Description";
      $d['result'] = $this->Account_model->getslugresult($slug);
		$d['result4']=$this->Account_model->getmenus();
		$d['v'] = 'website/india/detailnews';
		// $time = $d['result']['entrydate'];
		// $this->updatetime($time);
		 $this->load->view('website/template',$d);
    }
    
	public function submenu(){
		// $d['v'] = 'website/inc/header';
		
		// print_r($d['result4']); die;
		// $this->load->view('website/inc/header',$d);
		//  $this->load->view('website/inc/header',$d);	
	 }
	 public function submenuslist($id){
		// $d['v'] = 'website/inc/header';
		$d['v'] = 'website/home';
		$data_a = $this->db->get_where('menu', array('id' => $id))->row_array();
		$d['result4']=$this->Account_model->getmenus();
		$data_b=$data_a['menu_name'];
		// print_r($data_b);die;
		
		$d['result']=$this->Account_model->getsubmenuslist($data_b);
		// print_r($d['result']);die;
		//  $this->template->load('pages/website', 'index', $d);
	
		$this->load->view('website/template',$d);
	 }
	public function center(){
	   $d['v'] = 'website/india/central';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function east(){
	   $d['v'] = 'website/india/eastern';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function north_east(){
	   $d['v'] = 'website/india/north_eastern';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function south(){
	   $d['v'] = 'website/india/southern';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function west(){
	   $d['v'] = 'website/india/western';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	// '''''''''''India Sub Menu end''''''''''''''''''''''''
	public function southasia(){
	   $d['v'] = 'website/south_asia';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	// '''''''''''World Sub Menu end''''''''''''''''''''''''
	public function world(){
	   $d['v'] = 'website/world/world';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function africa(){
	   $d['v'] = 'website/world/africa';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function america(){
	   $d['v'] = 'website/world/americas';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function asia(){
	   $d['v'] = 'website/world/asia';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function australia(){
	   $d['v'] = 'website/world/australia';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
		public function china(){
	   $d['v'] = 'website/world/china';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function europe(){
	   $d['v'] = 'website/world/europe';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function meddle_east(){
	   $d['v'] = 'website/world/meddle_east';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function oceania_others(){
	   $d['v'] = 'website/world/oceania';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function united_kingdom(){
	   $d['v'] = 'website/world/united_kingdom';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	public function united_state(){
	   $d['v'] = 'website/world/united_states';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}
	// '''''''''''World Sub Menu''''''''''''''''''''''''
	public function privacy_policy(){
		 $d['v'] = 'website/privacy_policy';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);	
	}

	public function terms_conditions(){
		 $d['v'] = 'website/terms_conditions';
	   $d['result4']=$this->Account_model->getmenus();
	   $this->load->view('website/template',$d);
	}
	
	public function business(){
		$d['v'] = 'website/business/business';
		$d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);
	}
	// ''''''''''''''''''''''''''''Business Sub Menu''''''''''''''''''''''''
	public function economy(){
	   $d['v'] = 'website/business/economy';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function markets(){
	   $d['v'] = 'website/business/markets';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function company(){
	   $d['v'] = 'website/business/company';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function wealth(){
	   $d['v'] = 'website/business/wealth';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	// '''''''''''''''''''''''''''''Business Sub Menu End'''''''''''''''''''


	public function tech(){
	   $d['v'] = 'website/tech';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function profession(){
	   $d['v'] = 'website/profession';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}

	public function climate(){
	   $d['v'] = 'website/climate';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function lifestyle(){
	   $d['v'] = 'website/lifestyle';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function sports(){
	   $d['v'] = 'website/sports';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function culture(){
	   $d['v'] = 'website/culture';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function opinion(){
	   $d['v'] = 'website/opinion';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function stories(){
	   $d['v'] = 'website/stories';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}

	public function more(){
	   $d['v'] = 'website/more/more';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function weather(){
	   $d['v'] = 'website/more/weather';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function graphics(){
	   $d['v'] = 'website/more/graphics';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function picture(){
	   $d['v'] = 'website/more/pictures';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}
	public function video(){
	   $d['v'] = 'website/more/videos';
	   $d['result4']=$this->Account_model->getmenus();
		$this->load->view('website/template',$d);	
	}

	public function signin(){
		$data['slugs'] = $this->input->get('slug');
		$data['payment'] = $this->input->get('payment');
		
		if(!empty($data)){
			$this->load->view('website/inc/top-header.php');
        $this->load->view('website/signin',$data);
		}
		else{
			$this->load->view('website/inc/top-header.php');
      $this->load->view('website/signin');	
	  }
 }

 public function logincheck(){
 	$data = $this->input->post();
 	$slug = $data['slug'];
 	$payment = $data['payment'];
 	$result=$this->Account_model->loginchecked($data);

 	$result['slug']=$slug;
 	$result['amount']=$payment;
 	$record = $this->Account_model->insert_paynews($result);


 	if(!empty($record)){
              $this->payment_start($record);
            }
            else{ 
              redirect('website/registerpage');
            }
 	
 }
	public function signup(){
		$this->load->view('website/inc/top-header.php');
        $this->load->view('website/signup');	
	}

	public function payment_start($id){
        $length = 20;
        $_SESSION['last_inst_id'] = $id;
        $row=$this->Account_model->fatchregisteredrecord($id);
       
         $content =define("API_KEY","rzp_test_KVV2yNPLssjS3jUvH171bc3x");
        $someprice = $row['amount'];
        $paisaprice = $someprice*100;
        $orderno = $row['request_no'];
        $custname = $row['name'];
        $productinfo = 'Payment for Read News';
        $txnid = time();
        // $contect = $row['contect'];
        // $surl = "payment-success.php";
        // $furl ="payment-success.php" ;
        $key_id = API_KEY;
        $currency_code = 'INR';
        $total = $paisaprice; 
        $amount = $someprice;
        $length = 18;
        $merchant_order_id=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
        $card_holder_name = $custname;
        // $email =  $row['email'];
        // $phone = $row['mobileno'];
        $name = "Customer of $custname - $orderno";
        $payrecord = array();
        $payrecord['orderno'] = $orderno;
        $payrecord['name'] = $custname;
        $payrecord['productinfo'] = $productinfo;
        $payrecord['currency_code'] = $currency_code;
        $payrecord['total'] = $total;
        $payrecord['amount'] = $amount;
        $payrecord['key_id'] = $key_id;
        $payrecord['card_holder_name'] = $card_holder_name;
        $payrecord['merchant_order_id'] = $merchant_order_id;
        $payrecord['merchant_trans_id'] = $txnid;
        // $payrecord['phone'] = $contect;
        $data['allrecord'] =$payrecord;
        // echo PRE;
        // print_r($payrecord);die;
         $this->load->view('website/payment',$data);
        // echo PRE;
        // print_r($result);die;
    }

	 public function payment_success(){
         if(isset($_POST['razorpay_payment_id'])){
          $payment_details=json_encode($_POST);
          $razorpay_payment_id = $_POST['razorpay_payment_id'];
          // $payment_date = date('Y/m/d');
          $payment_status = 1;
          $id = $_SESSION['last_inst_id'];
          unset($_SESSION['last_inst_id']);
          $result = $this->Website_model->update_form($id,$payment_status,$payment_details,$razorpay_payment_id);
          if($result==true){
            $this->session->set_flashdata("msg","You have registered !!");
            $this->load->view('website/pages/payment_success');
          }
          
          
       }
  }

  public function search(){
  	$key = $_POST['search'];
  	$d['v'] = 'website/india/search';
  	$d['result4']=$this->Account_model->getmenus();
  	$d['searchrecords']=$this->Account_model->searchrecords($key);
  	$this->load->view('website/template',$d);
  }
		
	
	




    
    public function alldata($token=''){
		$this->load->library('alldata');
		$this->alldata->viewall($token);
	}
	
	public function gettable(){
		$this->load->library('alldata');
		$this->alldata->gettable();
	}
	
	public function updatedata(){
		$this->load->library('alldata');
		$this->alldata->updatedata();
	}




}?>