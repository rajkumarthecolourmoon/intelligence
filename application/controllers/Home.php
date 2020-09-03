<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_controller {
    public $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model("User_model");
		$this->load->model("Profile_model");
        $this->load->model("Services_model");
        $this->load->model("Profile_model");

    }  
	public function index()
	{
        $this->data['meta_keywords'] = "Meta Keywords";
        $this->data['meta_description'] = "Meta Description";
        $this->data['meta_title'] = "Meta Title";

        $this->form_validation->set_rules('captcha', 'Captcha', 'required|callback_captcha_check');
        if ($this->form_validation->run() == false) {          
        }
        $data = $this->input->post("captcha");
        $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($set), 0, 5);
        $vals = array(
            'word'          => $code,
            'img_path'      => 'uploads/captcha/',
            'img_url'       => base_url().'uploads/captcha/',
            'font_path'     => '.uploads/captcha/texb.ttf',
            'img_width'     => '150',
            'img_height'    => 50,
        );        
        $this->data['cap'] = create_captcha($vals);
        $this->data['slider'] =	$this->User_model->slider_images_get();
        $this->data['list_images'] =	$this->User_model->intelligence_getAll();
        $this->data['team'] = $this->Profile_model->get_team();
        $this->data['home_categories'] = $this->Services_model->get_categories_for_home();
        $this->data['about_services'] = $this->User_model->about_services_getAll(); 

	$this->load->view('index',$this->data);
	}
	public function send()
	{
	
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile_number' => $this->input->post('phone'),          
            'message' => $this->input->post('message'),         
		);
		
        $mail = $this->User_model->contact_mail($data);
        if ($mail) {
            $to_email = $this->input->post('email'); //Webmaster email, who receive mails
            //Mail settings
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'localhost',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
              );
            $this->email->initialize($config);
            //Send mail with data
            $this->email->from('teja@demoworks.in', "Admin");
            $this->email->to("rajkumar@thecolormoon.com");
            $this->email->subject($data['subject']);
            $this->email->message($data['message']);
            if ($this->email->send()) {
                $this->session->set_flashdata('msg', 'Mail sent!');
                redirect('home');
            } else {
                //$this->session->set_flashdata('msg', '<div class="alert alert-danger">Problem in sending</div>');
                redirect('home');
            }
        }
	}
}
?>