<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }

    public function index()
    { 
        $this->data['services'] = $this->Services_model->service();    
       
        $this->load->view('admin/services_view',$this->data);
    }
    public function add_services()
    { 
        $this->data['categories'] = $this->Services_model->get_category();  
     
        $this->load->view('admin/services_add', $this->data);
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
    public function add()
	{
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        $this->form_validation->set_rules('services', 'Services', 'required');
        $this->form_validation->set_rules('first_title', 'First Tittle', 'required');
        $this->form_validation->set_rules('tittle', 'Tittle', 'required');
        $this->form_validation->set_rules('comment', 'Description', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/services/add_services');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        $data = array(
                'image' => $image,
                'services_categories_id' =>$this->input->post('services'),
                'first_title' =>$this->input->post('first_title'),
                'tittle' =>$this->input->post('tittle'),
                'description' =>$this->input->post('comment'),
                'status' => 1,
                 );
        $services = $this->Services_model->insert_service($data);
                
        if ($services) {
            $this->session->set_flashdata('success', 'Upload successfully');
            redirect('admin/services');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/add_services');
        }
    }
      public function edit($id)
    { 
        $this->data['categories'] = $this->Services_model->get_category();  
        $this->data['edit'] = $this->Services_model->get_serv_by_id($id);
        $this->load->view('admin/services_edit', $this->data);
    }
    
    public function update($id){
       
        $data = array(
            'services_categories_id' => $this->input->post('services'),
            'tittle' => $this->input->post('tittle'),
            'description' => $this->input->post('description'),      
        );
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $data['image'] = $this->upload_file('image');
        } 
         $this->Services_model->update($data,$id);       
           $this->session->set_flashdata('success', 'Update successfully');
            redirect('admin/services');
    }
    public function delete($id)
    {
        $this->Services_model->delete($id);
       // $this->session->set_flashdata('delete', 'Delete successfully');
        redirect('admin/services');
    }



    public function categories()
    { 
        $this->data['categories'] = $this->Services_model->get_category();   
        $this->load->view('admin/categories_view',$this->data);
    }
    public function categories_create()
    { 
        $this->load->view('admin/categories_add');
    }
    public function file_check_categories()
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
    public function categories_add()
    {
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        $this->form_validation->set_rules('short_description', 'short_description', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('meta_keywords', 'Meta keywords', 'required');
        $this->form_validation->set_rules('meta_description', 'Meta description', 'required');
        $this->form_validation->set_rules('meta_title', 'meta Title', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/services/categories_create');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        $data = array(
            'service_category' => $this->input->post('category'),
            'p_link' => strtolower(preg_replace('/[^a-zA-Z0-9\.]/', "-", $this->input->post('category'))),
            'image'=>  $image,
            'short_description' => $this->input->post('short_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_title' => $this->input->post('meta_title'),


        );
       
        $category = $this->Services_model->inserts_category($data);
        if ($category) {
            $this->session->set_flashdata('success', 'Add  successfully');
            redirect('admin/services/categories');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/services/categories_create');
        }
    }
    public function categories_edit($id)
    {
       
        $this->data['cat_edit'] = $this->Services_model->get_category_by_id($id);
        $this->load->view('admin/categories_edit', $this->data);
    }
    public function categories_update($id){
       
        $data = array(
            'service_category' => $this->input->post('Categories'),
            'p_link' => strtolower(preg_replace('/[^a-zA-Z0-9\.]/', "-", $this->input->post('Categories'))),
            'short_description' => $this->input->post('short_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_title' => $this->input->post('meta_title'),
            'updated_date' => date('Y-m-d H:i:s'),

        );
        //print_r( $data);die();
        if ($_FILES['image']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image', 'Image', 'required');
            $data['image'] = $this->upload_file('image');
        } 
       $this->Services_model->category_update($data,$id);   
            $this->session->set_flashdata('success', 'Update  successfully');
            redirect('admin/services/categories');       
    }
    public function categories_delete($id)
    {
        $this->Services_model->category_delete($id);
       // $this->session->set_flashdata('delete', 'Delete successfully');
        redirect('admin/services');
    }

    
    
}

?>