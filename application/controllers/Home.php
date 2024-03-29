<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('upload');
	}
	
	public function index(){
		$data['total_news'] = $this->Account_model->getnewsdashboardcount();
		$data['reporters']= $this->Account_model->getreporterslist();
		
		$data['title']="Home";
		$this->template->load('pages','home',$data);
	}

	public function sidebar(){
		checklogin();
		//validateurl_withrole('1');
		$data['title'] = "Sidebar Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$this->template->load('pages/sidebar','add',$data);
	}

	public function savesidebar(){
		//checklogin();
		$postdata = $this->input->post();		
		$status = $this->Account_model->savesidebar($postdata);
		if($status){
			$this->session->set_flashdata("msg","Added Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function edit_sidebar($edit_id){
		//checklogin();
		//validateurl_withrole('1');
		$data['title'] = "Edit Sidebar Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$one_sidebar = $this->Account_model->getsidebar(array('status'=>'1','id'=>$edit_id),'single');	
		$data['one_sidebar'] = $one_sidebar;
		$this->template->load('pages/sidebar','edit',$data);
	}

	public function updatesidebar(){
		//checklogin();
		//validateurl_withrole('1');
		$postdata = $this->input->post();		
		$status = $this->Account_model->update_sidebar($postdata);
		if($status){
			$this->session->set_flashdata("msg","Updated Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function delete_sidebar($delete_id){
		//checklogin();
		//validateurl_withrole('1');
		$status = $this->Account_model->deletesidebar($delete_id);
		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function ajax_sidebar(){
		$dupid = $this->input->post('dupid');
		$sidebardata = $this->Account_model->getsidebar(array('status'=>'1','id'=>$dupid),'single');
		if(!empty($sidebardata)){
			if(!empty($sidebardata['role_id'])){
				$sidebardata['role_id'] = str_replace(',','|',str_replace("\"",'',$sidebardata['role_id']));
			}
			echo json_encode($sidebardata);
		}else{
			echo false;
		}
	}
    
	public function getOrderList(){
		$parent_id=$this->input->post('parent_id');
		$array=$this->Account_model->getOrderList($parent_id);
		echo json_encode($array);
	}
	public function form(){
		$data['title']="Form";
		$this->template->load("pages","form",$data);
	}
	
	public function upload(){
		$this->load->helper('upload');
		$result=upload_file("image","./assets/uploads/","jpg|png|jpeg","image");
		$src=$result['path'];
		$this->load->helper('tinify');
		tinifyresizeimage(".".$src,400,400,"cover");
		print_r($src);
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
	public function dashboard(){
		$data['total_news'] = $this->Account_model->getnewsdashboardcount();
		$data['reporters']= $this->Account_model->getreporterslist();
		// print_r($data['total_news']);die;
		$data['title'] = "Dashboard";
		
		$data['datatable'] = true;
		// $data['result']=$this->Account_model->getmenus();
		
		$this->template->load('pages/admin','dashboard',$data);
	}

	public function createmenu(){
		
		$data['title'] = "Add Menu";
		
		$data['datatable'] = true;
		$data['result']=$this->Account_model->getmenus();
		
		$this->template->load('pages/admin','createmenu',$data);
	}
	public function createsubmenu(){
		$data['title'] = "Create Submenu";
		$data['datatable'] = true;
		$data['result1']=$this->Account_model->getmenus();
		$data['result']=$this->Account_model->getsubmenus();
		$this->template->load('pages/admin','createsubmenu',$data);
	}

	public function savemenu(){
		// checklogin();
		$data=$this->input->post();
		$run=$this->Account_model->savemenus($data);
		if($run){
			$this->session->set_flashdata("msg","Menu Added Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/createmenu');
	}

	public function savesubmenu(){
		// checklogin();
		$data=$this->input->post();

		$run=$this->Account_model->savesubmenus($data);
		if($run){
			$this->session->set_flashdata("msg","Submenu Added Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/createsubmenu');
	}

	public function publish_news(){
		$data['title']="Published News";
		$data['datatable']=true;
		$data['result']=$this->Account_model->get_publishednews(array('published'=>'1','status'=>'0'));
		$this->template->load('pages/admin','published_news',$data);
	}
	public function desk_basket(){
		$data['title']="Un-Published News";
		$data['datatable']=true;
		$data['result']=$this->Account_model->get_publishednews(array('published'=>'0','status'=>'0'));
		$this->template->load('pages/admin','unpublished_news',$data);
	}
	public function addnews(){
		
		$data['title'] = "Add news";
		$data['datatable'] = true;
		$data['ckeditor'] = true;
		$data['result1']=$this->Account_model->getmenus();
		$data['result2']=$this->Account_model->getsubmenus();
		$data['result']=$this->Account_model->getnews();
		
		$this->template->load('pages/admin','addnews',$data);
	}

	public function edit_news(){
		$data['title'] = "Update news";
		$id = $this->input->get('id');
		$data['result1']=$this->Account_model->getmenus();
		$data['result2']=$this->Account_model->getsubmenus();
		$data['result']=$this->Account_model->getnews_byid($id);

		$this->template->load('pages/admin','edit_updatenews',$data);
	}
	public function market(){
		
		$data['title'] = "Add Market Details";
		$data['datatable'] = true;
		$data['result']=$this->Account_model->getmarket();
		$this->template->load('pages/admin','market',$data);
	}
	public function reporterslist(){
		$data['title'] = "Reporter List";
		$data['datatable'] = true;
		$data['result']=$this->Account_model->getreporterslist();
		// echo '<pre>';
		// print_r($data['result']);die;
		$this->template->load('pages/admin','reporterslist',$data);
	}
	public function savemarket(){
		// checklogin();
		$data=$this->input->post();
		$run=$this->Account_model->savemarket($data);
		if($run){
			$this->session->set_flashdata("msg","Details Added Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/market');
	}

	public function update_market(){
		$data=$this->input->post();
		$run=$this->Account_model->updatemarket($data);
		if($run){
			$this->session->set_flashdata("msg","Market Updated Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/market');
	}

	public function update_menu(){
		$data=$this->input->post();
		$run=$this->Account_model->updatemenu($data);
		if($run){
			$this->session->set_flashdata("msg","Menu Updated Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/createmenu');
	}
	public function update_submenu(){
		$data = $this->input->post();
		// rint_r($data);die;p
		$menu = $data['menu'];
		$value = explode(" ", $menu);
		$id = $value[0];
		$record = $value[1];
		$subrecord = $data['submenu'];

		$run=$this->Account_model->updatesubmenu($id,$record,$subrecord);
		if($run){
			$this->session->set_flashdata("msg","Menu Updated Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/createsubmenu');
	}

	public function delete_market(){
		$id = $this->input->get('id');
		$run=$this->Account_model->delete_market($id);
		if($run){
			$this->session->set_flashdata("msg","Market Deleted Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/addnews');
	}

	public function delete_submenu(){
		$id = $this->input->get('id');
		
		$run=$this->Account_model->delete_submenu($id);
		if($run){
			$this->session->set_flashdata("msg","Sub Menu Deleted Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/addnews');	
	}
	public function savenews(){

		// echo PRE;
		// print_r($_POST);die;
		$data=$this->input->post();
		unset($data['save_news']);
		$upload_path = './assets/newsimagedb';
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		  if($_FILES['image']['name'] !=''){
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  }
		   if($_FILES['other_image']['name'] !=''){
			  $image = upload_file("other_image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['other_image'] = $image['path'];
				
			  }
		  }
		   if($_FILES['other_image_one']['name'] !=''){
			  $image = upload_file("other_image_one", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['other_image_one'] = $image['path'];
				
			  }
		  }
		$run=$this->Account_model->savenews($data);
		if($run){
			$this->session->set_flashdata("msg","News Added Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/addnews');
	}

	public function updatenews(){
		$data=$this->input->post();
		// echo PRE;
		
		
		if($_FILES['image']['size']!=0){
			unset($data['save_news']);
		$upload_path = './assets/newsimagedb';
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		  if($_FILES['image']['name'] !=''){
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
				
			  }
		  }
	   }
		$run=$this->Account_model->updatenews_byid($data);
		if($run){
			$this->session->set_flashdata("msg","News Updated Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/addnews');

	}


	public function delete_news(){
		$id = $this->input->get('id');
		$run=$this->Account_model->delete_news($id);
		if($run){
			$this->session->set_flashdata("msg","News Deleted Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/addnews');

	}

	public function published_news(){
		$id = $this->input->get('id');
		$run=$this->Account_model->published_status_news($id);
		print_r($run);
	}
	public function delete_menu(){
		$id = $this->input->get('id');
		$run=$this->Account_model->delete_menulist($id);
		if($run){
			$this->session->set_flashdata("msg","Menu Deleted Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
		}
		redirect('home/createmenu');

	}


	public function get_submenulist(){
		$id = $this->input->post('id');
		$result =  $this->Account_model->getsubmenuslistbyid($id);
		$final = json_encode($result);
		print_r($final);
	}

    public function donation_list(){
       	$data['title'] = "Donation List";
		$data['datatable'] = true;
		$data['result']=$this->Account_model->donation_list();
		// echo '<pre>';
		// print_r($data['result']);die; // 
		$this->template->load('pages/admin','donation_list',$data);
    }
	
	
}
