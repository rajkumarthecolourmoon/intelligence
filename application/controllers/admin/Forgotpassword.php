<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgotpassword extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Profile_model");
        $this->load->model("user_model");
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->view('admin/forgot_password');
    }

    public function resetPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == false) {
        }
        $email = $this->input->post('email');

        $email_check = $this->Home_model->email_exists($email);
        if ($email_check) {
            $new_password = uniqid();
            $temp_pass = md5($new_password);
            $update = $this->Home_model->temp_reset_password($temp_pass);
          //  print_r($temp_pass);die;
           $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'localhost',
           // 'smtp_port' => 465,
           // 'smtp_user' => 'xxx@gmail.com', // change it to yours
           // 'smtp_pass' => 'xxx', // change it to yours
            'mailtype' => 'text/html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
          );
            $this->load->library('email', array('mailtype'=>'html',$config));
            $this->email->from('teja@demoworks.in', "Admin");
            $this->email->to("rajkumar@thecolourmoon.com");
            $this->email->subject("Intelligence - Admin Reset Password");
            $message = "Username: admin@intelligence.com \n";
            $message .= "Password: ".$new_password."";
            $this->email->message($message);   
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'check your email for instructions, thank you');
                redirect('admin/forgotpassword');
            } else {
               // show_error($this->email->print_debugger());
                $this->session->set_flashdata('error', 'email was not sent, please contact your administrator');
                redirect('admin/forgotpassword');
            }
        } else {
            $this->session->set_flashdata('email_check', 'Please Enter your pofile register email');
            redirect('admin/forgotpassword');
        }
    }
    public function reset_password($temp_pass){
     
        if ($this->Home_model->is_temp_pass_valid($temp_pass)) {
            $this->load->view('admin/password_update');
        } else {
            $this->session->set_flashdata('reset_pass', 'key is not valid');
        }
    }
   


}

    
