<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Profile_model");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }
    public function index()
    {
       
        $this->load->view('admin/contact', $this->data);
    }
    
    public function address_list()
    {
        $this->data['address']  = $this->User_model->address_get();
        
        $this->load->view('admin/address_view',  $this->data);
    }
    public function address_add(){
        $this->load->view('admin/address_add');
    }

    public function file_check()
    {
        $allowed_mime_type_arr = array('image/jpeg', 'image/png');
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
    public function address()
    {
        
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('image', '', 'callback_file_check');

        if ($this->form_validation->run() == false) {
            redirect('admin/contacts/address_add');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        $address = array(

            'company' => $this->input->post('company'),
            'mobile_number' => $this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'state' => $this->input->post('state'),
            'pin_code' =>$this->input->post('pincode'),
            'country' =>$this->input->post('country'),
            'image' => $image,
        );
        $add = $this->User_model->add_address($address);
        if ($add) {
            $this->session->set_flashdata('message', 'Add successfully');
            redirect('admin/contacts/address_list');
        } else {
            $this->session->set_flashdata('error', 'fill the correct fields');
            redirect('admin/contacts/address_add');
        }
    }
    public function edit($id)
    {
        $this->data['edit'] = $this->User_model->address_by_id($id);
        $this->load->view('admin/address_edit', $this->data);
    }
    public function update($id){

        $address = array(

            'company' => $this->input->post('company'),
            'mobile_number' => $this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'state' => $this->input->post('state'),
            'pin_code' =>$this->input->post('pincode'),
            'country' =>$this->input->post('country'),
          
        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $address['image'] = $this->upload_file('image');
        }     
        $this->User_model->address_update($address,$id);
        $this->session->set_flashdata('success', 'successfully Update');
        redirect('admin/contacts/address_list');
    }
    public function delete($id)
    {
        $this->User_model->address_delete($id);
      //  $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/contacts/address_list');
    }
    public function contact_enquery_list()
    {
       
        $this->data['contact_enquery']  = $this->User_model->contact_enquery();
        //print_r($this->data['contact_enquery']);die;
        $this->load->view('admin/contact_enquery_view', $this->data);       
    }
    public function contact_enquery_delete($id)
    {
        $this->User_model->contact_enquery_delete($id);
        redirect('admin/contacts/contact_enquery_list');
    }
}