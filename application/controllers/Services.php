<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
    }
	public function index()
	{  
        $this->data['categories'] = $this->Services_model->service(); 
        $this->data['services'] = $this->Services_model->services_image();           
		$this->load->view('services', $this->data);
    }
    public function view($p_link){
        $this->data['services_category'] = $this->Services_model->get_id_by_p_link($p_link);     
        $this->data['meta_keywords'] = $this->data['services_category']->meta_keywords;
        $this->data['meta_description'] = $this->data['services_category']->meta_description;
        $this->data['meta_title'] =$this->data['services_category']->meta_title;   
        $this->data['services'] = $this->Services_model->get_services_by_id($this->data['services_category']->id);
        $this->load->view('services_view', $this->data);
    }
 

    
    public function pm_enquiry(){
       
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            'status' => 1,
        );
        $pm_enquiry = $this->Services_model->contact_enquiry($data);
        if ($pm_enquiry ) {
            $to_email=$this->input->post('email'); 
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
                $this->session->set_flashdata('msg', 'Mail sent');
                redirect('services/program_management');
            } else {
                $this->session->set_flashdata('error', 'Problem in sending');
                redirect('services/program_management');
            }
        }

    }

}
?>