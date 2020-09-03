<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        $this->load->model("Profile_model");
        $this->load->model("User_model");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }
    
    public function index()
    {
        $this->data['images']  = $this->Profile_model->get_team();
        $this->data['totalusers'] =	$this->Home_model->users_count();
        $this->data['total_users'] =	$this->User_model->total_users_count();
        $this->data['total_countrys'] =	$this->User_model->total_countrys();
            $this->load->view('admin/index', $this->data);
      
    }
    public function file_check()
    {
        $allowed_mime_type_arr = array('image/jpeg', 'image/png');
        $mime = get_mime_by_extension($_FILES['image_desti']['name']);

        if (isset($_FILES['image_desti']['name']) && $_FILES['image_desti']['name'] != "") {
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
   
    public function aboutintelligence()
    {
        $this->data['intelligence']  = $this->User_model->intelligence_getAll();
       
        $this->load->view('admin/home_intelligence_view', $this->data);
    }
    public function intelligence_create()
    {
        $this->load->view('admin/home_intelligence_add');
    }
    
    public function intelligence_add(){
        $this->form_validation->set_rules('image_desti', '', 'callback_file_check');
        $this->form_validation->set_rules('description', 'description', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/dashboard/intelligence_create');
        }
        if ($_FILES['image_desti']['name'] != '') { // input  file  name ex: image_desti
            $image = $this->upload_file('image_desti');
        } else {
            $image = "empty";
        }
        $data = array(
                'image' => $image,
            'description' =>$this->input->post('description'),

        );
        
        $intelligence = $this->User_model->intelligence_insert($data);
                
        if ($intelligence) {
            $this->session->set_flashdata('success', ' Upload Successful.');
            redirect('admin/dashboard/aboutintelligence');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/dashboard/intelligence_add');
        }
    }
    
    public function intelligence_edit($id)
    {
         $this->data['intelligence'] = $this->User_model->intelligence_by_id($id);
        $this->load->view('admin/home_intelligence_edit', $this->data);
    }
    public function intelligence_update($id)
    {
        $data = array(
           
            'description' => $this->input->post('description'),
            'updated_dates' => date('Y-m-d H:i:s'),
        );
        if ($_FILES['image_desti']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image_desti', 'Image', 'required');

            $data['image_desti'] = $this->upload_file('image_desti');
        } 
        $this->User_model->intelligence_update($data,$id);
        $this->session->set_flashdata('success', 'successfully Update');
        redirect('admin/dashboard/aboutintelligence');
    }
    
    public function intelligence_delete($id)
    {
        $this->User_model->intelligence_delete($id);
       // $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/dashboard/aboutintelligence');
    }



    
    public function clients()
    {
        $this->data['client']  = $this->Profile_model->clients_get();
   
        $this->load->view('admin/client_view', $this->data);
        
    }
    public function create()
    {
        $this->load->view('admin/client_add');
    }
    public function add()
    {
        $this->form_validation->set_rules('client', '', 'callback_file_check');

        $this->form_validation->set_rules('name', 'Full Name', 'required');
      
        if ($this->form_validation->run() == false) {
            redirect('admin/dashboard/create');
        }
        if ($_FILES['image_desti']['name'] != '') { // input  file  name ex: images
            $place_image = $this->upload_file('image_desti');
        } else {
            $place_image = "empty";
        }
        $clients = array(
                'client_images' => $place_image,
                'name' => $this->input->post('name'),
                'status' => 1,
        );
        $data = $this->Profile_model->clients($clients);
        if ($data) {
            $this->session->set_flashdata('success', 'successfully upload');
            redirect('admin/dashboard/clients');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/dashboard/create');
        }
    }
  
     public function client_edit($id)
    {
        
        $this->data['client'] = $this->Profile_model->client_by_id($id);

        $this->load->view('admin/client_edit', $this->data);
    }  
    public function update($id)
    {
       
    
        $data = array(
            'name' => $this->input->post('name'),
            'updated_date' => date('Y-m-d H:i:s'),
        );
        if ($_FILES['image_desti']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('image_desti', 'Image', 'required');

            $data['client_images'] = $this->upload_file('image_desti');
        } 
        $this->Profile_model->update_client($data,$id);     
            $this->session->set_flashdata('success', 'successfully Update');
             redirect('admin/dashboard/clients');
    }
    public function delete($id)
    {
        $this->Profile_model->delete_client($id);
     //  $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/dashboard/clients');
    }

    public function socialmedialinks()
    {
        $this->data['socialmedia_links']  = $this->User_model->get_socialmedia_links();
        $this->load->view('admin/socialmedia_links_view', $this->data);
    }
    public function add_links(){
        $this->load->view('admin/socialmedia_links_add');
    }
    public function links()
    {
        $this->form_validation->set_rules('instagram', 'Instagram', 'required');
        $this->form_validation->set_rules('linkedin', 'Linkedin', 'required');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required');
        $this->form_validation->set_rules('youtube', 'Youtube', 'required');
        $this->form_validation->set_rules('twitter', 'Twitter', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/dashboard/add_links');
        }
        $links = array(
            'linkden_links' => $this->input->post('linkedin'),
            'facebook_links' =>$this->input->post('facebook'),
            'twitter_links' =>$this->input->post('twitter'),
            'status' => 1,
             );
        $s_links = $this->User_model->socialmedia_links($links);
        if ($s_links) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success"> Successful.</div>');
            redirect('admin/dashboard/socialmedialinks');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/dashboard/add_links');
        }
    }
}