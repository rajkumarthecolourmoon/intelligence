<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        $this->load->model("Profile_model");
        $this->load->model("User_model");
        $this->load->library('form_validation');

        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }

   
    public function index() {
        $this->data['about_services'] = $this->User_model->about_services_getAll(); 
        $this->load->view('admin/about_view',$this->data);
    }
    public function create()
    {
        $this->load->view('admin/about_add');
    }
    public function add()
    {
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('first_title', 'First Ttitle', 'required');
        $this->form_validation->set_rules('	description', '	Description', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/about/create');
        }

        if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        
        $data = array(
            'image' => $image,
            'title' => $this->input->post('title'),
            'first_title' => $this->input->post('first_title'),
            'description' => $this->input->post('description'),
            
        );
       // print_r($data);die;
        $about = $this->User_model->insert_about_services($data);
        if ($about) {   
            $this->session->set_flashdata('success', 'Add Successfully');
            redirect('admin/about');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/about/create');
        }
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
    public function edit($id)
    {
        $this->data['about_services'] = $this->User_model->about_services_by_id($id);   
        $this->load->view('admin/about_edit', $this->data);
    }
    public function update($id){
       
        $data = array(
          
            'title' => $this->input->post('title'),
            'first_title' => $this->input->post('first_title'),
            'description' => $this->input->post('description'),
            'updated_date' => date('Y-m-d H:i:s'),        
        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image', 'Image', 'required');

            $data['image'] = $this->upload_file('image');
        } 
          $this->User_model->about_services_update($data,$id);
            $this->session->set_flashdata('success', 'Update Successfully');
            redirect('admin/about');
    }
    public function delete($id){
        $this->User_model->about_services_delete($id);
       // $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/about');

    }

















    public function leadership(){
        $this->data['leadership'] = $this->User_model->leadership_getAll();

     $this->load->view('admin/about_leadership_view', $this->data);
    }
    public function leadership_create(){
        $this->load->view('admin/about_leadership_add');
      }
    public function leadership_add(){
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        $this->form_validation->set_rules('description_one', 'Description one ', 'required');
        $this->form_validation->set_rules('description', 'Description ', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/about/leadership_create');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        
        $data = array(
            'image' => $image,
            'description_one' => $this->input->post('description_one'),
            'description' => $this->input->post('description'), 
        );
        //print_r($data);die();
        $insert = $this->User_model->leadership_insert($data);
        if ($insert) {   
            $this->session->set_flashdata('success', 'Add Successfully');
            redirect('admin/about/leadership');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/about/aboutleadership_create');
        }
    }
    public function file_check_add()
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

    public function leadership_edit($id){
        $this->data['leadership_edit'] = $this->User_model->leadership_by_id($id);  
           
        $this->load->view('admin/about_leadership_edit', $this->data);
    }
   
    public function leadership_update($id){
      
        $data = array(
            
            'description_one' => $this->input->post('description_one'),
            'description' => $this->input->post('description'),
            'updated_date' => date('Y-m-d H:i:s'),
        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image', 'Image', 'required');

            $data['image'] = $this->upload_file('image');
        }
        
         $this->User_model->leadership_update($data,$id);     
            $this->session->set_flashdata('success', 'update Successfully');
            redirect('admin/about/leadership');
      
    }
   
    public function leadership_delete($id){
        $this->User_model->leadership_delete($id);
      //  $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/about/leadership');
    }






    public function about_key_differentiators(){
        $this->data['getAll'] = $this->User_model->key_differentiators_getAll();
     $this->load->view('admin/about_key_differentiators_view', $this->data);
    }
    public function about_key_differentiators_create(){
        $this->load->view('admin/about_key_differentiators_add');
      }
      
    public function about_key_differentiators_add(){
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        if ($this->form_validation->run() == false) {
            redirect('admin/about/about_key_differentiators_create');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
       
        $data = array(
            'image' => $image, 
            'text_line' => $this->input->post('text'), 
            'description' => $this->input->post('description'),
        );
     
        $insert = $this->User_model->key_differentiators_insert($data);
        if ($insert) {   
            $this->session->set_flashdata('success', 'Add Successfully');
            redirect('admin/about/about_key_differentiators');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/about/about_key_differentiators_create');
        }
    }
    public function file_check_key()
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
    public function about_key_differentiators_edit($id){
        $this->data['key'] = $this->User_model->key_differentiators_by_id($id);
      
        $this->load->view('admin/about_key_differentiators_edit', $this->data);
    }
    public function about_key_differentiators_update($id){
        // if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
        //     $image = $this->upload_file('image');
        // } else {
        //     $image = "empty";
        // }    
        $data = array(
          
            'text_line' => $this->input->post('text'), 
            'description' => $this->input->post('description'),
            'updated_date' => date('Y-m-d H:i:s'),

        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image', 'Image', 'required');

            $data['image'] = $this->upload_file('image');
        } 
         $this->User_model->key_differentiators_update($data,$id);     
            $this->session->set_flashdata('success', 'update Successfully');
            redirect('admin/about/about_key_differentiators');
      
    }
    public function about_key_differentiators_delete($id){
        $this->User_model->key_differentiators_delete($id);
       // $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/about/about_key_differentiators');
    }















    public function about_core_competencies()
    {
        $this->data['core_competencies'] = $this->User_model->core_competencies_getAll();
        $this->load->view('admin/about_core_view', $this->data);
    }
    public function about_core_competencies_create()
    {
        $this->load->view('admin/about_core_add');
    }
    public function about_core_competencies_add()
    {
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        if ($this->form_validation->run() == false) {
            redirect('admin/about/about_core_competencies_create');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }

        $data = array(
            'image' => $image,
            'text_line' => $this->input->post('text'),
            'description' => $this->input->post('description'),
        );
        $insert = $this->User_model->about_core_competencies_insert($data);
        if ($insert) {
            $this->session->set_flashdata('success', 'Add Successfully');
            redirect('admin/about/about_core_competencies');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/about/about_core_competencies_create');
        }
    }

    public function file_check_core()
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


    public function about_core_competencies_edit($id)
    {
        $this->data['core'] = $this->User_model->about_core_competencies_by_id($id);

        $this->load->view('admin/about_core_edit', $this->data);
    }
    public function about_core_competencies_update($id)
    {
        $data = array(
           
            'text_line' => $this->input->post('text'),
            'description' => $this->input->post('description'),
            'updated_date' => date('Y-m-d H:i:s'),
        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image', 'Image', 'required');

            $data['image'] = $this->upload_file('image');
        } 
        $this->User_model->about_core_competencies_update($data, $id);
        $this->session->set_flashdata('success', 'update Successfully');
        redirect('admin/about/about_core_competencies');
    }
    public function about_core_competencies_delete($id)
    {
        $this->User_model->about_core_competencies_delete($id);
        //$this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/about/about_core_competencies');
    }







}