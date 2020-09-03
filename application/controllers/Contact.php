<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
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
		$this->load->view('contact',$this->data);
	}
	public function mailsending(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile_number' => $this->input->post('phone'),          
            'message' => $this->input->post('message'),         
		);
		
        $mail = $this->User_model->contact_mail($data);
        if ($mail) {
            $to_email = $this->input->post('email');
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
            //$this->email->subject($data['subject']);
            $this->email->message($data['message']);
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Mail sent!');
                redirect('contact');
            } else {
                //$this->session->set_flashdata('msg', '<div class="alert alert-danger">Problem in sending</div>');
                redirect('contact');
            }
        }
	}
}
?>