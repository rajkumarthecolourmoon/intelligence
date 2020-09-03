<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professionalservices extends MY_Controller {
public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
    }
	public function index()
	{
        $this->data['view'] = $this->Services_model->services_getAll();
		$this->load->view('professional-services', $this->data);
    }
    public function enquiry()
	{
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
        );
        $enquiry = $this->Services_model->enquiry($data);
        if ($enquiry ) {
            $to_email=$this->input->post('email'); //Webmaster email, who receive mails
            //Mail settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'rajkumarraminen19@gmail.com'; // Your email address
            $config['smtp_pass'] = 'mailpassword'; // Your email account password
            $config['mailtype'] = 'html'; // or 'text'
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = true; //No quotes required
            $config['newline'] = "\r\n"; //Double quotes required
            $this->email->initialize($config);
            //Send mail with data
            $this->email->from($data['email'], $data['name']);
            $this->email->to($to_email);
            $this->email->message($data['message']);
            if ($this->email->send()) {
                $this->session->set_flashdata('message', 'Mail sent');
                redirect('services/professionalservices');
            } else {
                $this->session->set_flashdata('error', 'Problem in sending');
                redirect('services/professionalservices');
            }
        }
    }
    
}
?>