<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model("Profile_model");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }

    public function index()
    {
       $this->data['profile']  = $this->Profile_model->profile_get();
       $this->data['logo']  = $this->Profile_model->get_profile();
       //echo"<pre/>";print_r( $this->data['logo']);die();
        $this->load->view('admin/profile_view', $this->data);
    }
    public function create(){

        $this->load->view('admin/profile_add');  
    }
    public function file_check()
    {
        $allowed_mime_type_arr = array('image/jpeg', 'image/png');
        $mime = get_mime_by_extension($_FILES['logo']['name']);

        if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != "") {
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
    
    public function add()
    {
        $this->form_validation->set_rules('logo', '', 'callback_file_check');
        $this->form_validation->set_rules('title', 'Title', 'required');        
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('meta_keywords', 'Meta keywords', 'required');
        $this->form_validation->set_rules('meta_description', 'Meta description', 'required');
        $this->form_validation->set_rules('meta_title', 'meta Title', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/profile/create');
        }      
        if ($_FILES['logo']['name'] != '') { 
            $image = $this->upload_file('logo');
        } else {
            $image = "empty";
        }
        $data = array(
            'title' =>$this->input->post('title'),
            'description' =>$this->input->post('description'),
            'image' => $image,
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_title' => $this->input->post('meta_title'),
             'forgot_pass_email' => $this->input->post('email'),
        );
      
        $profile = $this->Profile_model->profile($data);
       
        if ($profile) {
            $this->session->set_flashdata('message', 'success');
            redirect('admin/profile');
        } else {
            $this->session->set_flashdata('error', 'faild');
            redirect('admin/create');
        }
    }
    public function edit($id)
    {     
        $this->data['edit'] = $this->Profile_model->profile_by_id($id);
        $this->load->view('admin/profile_edit', $this->data);
    }  
    public function update($id)
    {
       
     
        $data = array(
            'title' =>$this->input->post('title'),
            'description' =>$this->input->post('description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_title' => $this->input->post('meta_title'),
            'forgot_pass_email' => $this->input->post('email'),

        );
        if ($_FILES['logo']['name'] != '') { // input  file  name ex: image_desti
            $data['image'] = $this->upload_file('logo');
        } 
      
        $this->Profile_model->profile_update($data,$id);     
            $this->session->set_flashdata('success', 'successfully Update');
             redirect('admin/profile');
    }
    public function delete($id)
    {
        $this->Profile_model->profile_delete($id);
       // $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/profile');
    }
}