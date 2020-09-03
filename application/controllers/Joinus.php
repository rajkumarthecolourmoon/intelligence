<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinus extends MY_Controller {
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

		$this->load->view('joinus',$this->data);
    }
    public function file_check()
    {
        $allowed_mime_type_arr = array('application/pdf|doc|docx');
        $mime = get_mime_by_extension($_FILES['image']['name']);

        if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only jpeg and png file.');
                $this->session->set_flashdata('file_check', 'Please select only jpeg and png file.');

                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            $this->session->set_flashdata('file_check1', 'Please choose a file to upload.');

            return false;
        }
    }
    public function apply()
	{
       
        $this->form_validation->set_rules('image', '', 'callback_file_check');   
        if ($this->form_validation->run() == false) {
            
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        $data = array(
            'name' =>$this->input->post('name'),
            'email' =>$this->input->post('email'),
            'mobile_number' =>$this->input->post('phone'),
           'image' =>  $image,
            'message' =>$this->input->post('message'),
        );
        //print_r($data);die;
         $apply = $this->User_model->joinus_apply($data);
          if ($apply) {
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
            $this->email->to("rajkumar@thecolormoon.com","rajkumarramineni19@gmail.com");
            $this->email->subject($data['subject']);
            $this->email->message($data['message']);
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Mail sent!');
                redirect('joinus');
            } else {
                $this->session->set_flashdata('error', 'Problem in sending');
                redirect('joinus');
            }
        }
    }

}
?>