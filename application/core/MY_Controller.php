<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $data ;
	public function __construct(){
		parent::__construct();
		$this->load->model("Services_model");
		$this->load->model("Home_model");
		$this->load->model("User_model");
		$this->load->model("Profile_model");
		$this->data = array();
		$this->data['profile']  = $this->Profile_model->profile_get();
		$this->data['category'] = $this->Services_model->get_category();
		$this->data['social_media_links'] = $this->Home_model->get_social_media_links();
		$this->data['address']  = $this->User_model->get_address();
		$this->data['seo_meta']  = $this->Profile_model->get_profile1();

	  $this->data['meta_keywords'] = $this->data['seo_meta']->meta_keywords;	
	   $this->data['meta_description'] = $this->data['seo_meta']->meta_description;
	   $this->data['meta_title'] =$this->data['seo_meta']->meta_title;  
	 

		
	}

	function site_view($design = null) {
		$this->load->view("includes/header", $this->data);
		$this->load->view($design);
		$this->load->view("includes/footer", $this->data);
	}

	public function upload_file($file_name) {
		$upload_path1 = "uploads/";
		$config1['upload_path'] = $upload_path1;
		$config1['allowed_types'] = '*';
		$config1['max_size'] = "2000";
		$img_name1 = strtolower($_FILES[$file_name]['name']);
		$img_name1 = preg_replace('/[^a-zA-Z0-9\.]/', "_", $img_name1);
		$config1['file_name'] = date("YmdHis") . rand(0, 9999999) . "_" . $img_name1;
		$this->load->library('upload', $config1);
		$this->upload->initialize($config1);
		$this->upload->do_upload($file_name);
		$fileDetailArray1 = $this->upload->data();
		return $fileDetailArray1['file_name'];
	}

	
}
