<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends MY_controller
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
        $this->data['slider'] =    $this->User_model->slider_images_get();
        $this->load->view('admin/slider_view', $this->data);
    }
    public function create()
    {      
        $this->load->view('admin/slider_add', $this->data);
    }

    // public function file_check()
    // {
    //     $allowed_mime_type_arr = array('image/jpeg', 'image/png');
    //     $mime = get_mime_by_extension($_FILES['image']['name']);

    //     if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check', 'Please select only jpeg and png file.');
    //             $this->session->set_flashdata('file_check', 'Please select only jpeg and png file.');

    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
    //         $this->session->set_flashdata('file_check1', 'Please choose a file to upload.');

    //         return false;
    //     }
    // }
    public function add()
    {
        $this->form_validation->set_rules('image', '', 'callback_file_check');
        $this->form_validation->set_rules('technology', 'Technology', 'required');
        $this->form_validation->set_rules('caption', 'Caption', 'required');
       // $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/slider/create');
        }
        if ($_FILES['image']['name'] != '') { // input  file  name ex: slider
            $slider_image = $this->upload_file('image');
        } else {
            $slider_image = "empty";
        }
        $data = array(
            'slider_image' => $slider_image,
            'technology' => $this->input->post('technology'),
            'caption' => $this->input->post('caption'),
            'status' => 1,
        );
      
        

        // echo "<pre/>";
        // print_r($data['slider_image']);
        // die;
        $slider = $this->User_model->slider_images($data);

        if ($slider) {
            $this->session->set_flashdata('success', 'Add Successfully');
            redirect('admin/slider');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/slider/create');
        }
        
    }


    public function edit($id)
    {
        $this->data['list'] = $this->User_model->slider_by_id($id);
    
        $this->load->view('admin/slider_edit', $this->data);
    }
    public function file_check()
    {
        $allowed_mime_type_arr = array('image/jpeg', 'image/png');
        $mime = get_mime_by_extension($_FILES['slider2']['name']);

        if (isset($_FILES['slider2']['name']) && $_FILES['slider2']['name'] != "") {
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
    
    public function update($id)
    {      
        $this->form_validation->set_rules('slider2', '', 'callback_file_check');
        $this->form_validation->set_rules('technology', 'Technology', 'required');
        $this->form_validation->set_rules('caption', 'Caption', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/slider/edit');
        }

        $data = array(
           
            'technology' => $this->input->post('technology'),
            'caption' => $this->input->post('caption'),
            'updated_date' => date('Y-m-d H:i:s'),
        );
        if ($_FILES['slider2']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('slider2', 'Image', 'required');
            $data['slider_image'] = $this->upload_file('slider2');
        } 
       $this->User_model->update_sliders($data,$id);
    
            $this->session->set_flashdata('success', 'update Successfully');
            redirect('admin/slider');
    }
    public function delete($id)
    {
        $this->User_model->delete_sliders($id);
   //     $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/slider/');
    }

    public function team()
    {
        $this->data['team']  = $this->Profile_model->get_team();
        $this->load->view('admin/team_view', $this->data);
    }
    public function create_team()
    {
        $this->load->view('admin/team_add');
    }
    public function add_team()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/slider/create_team');
        }
        if ($_FILES['team']['name'] != '') { // input  file  name ex: images
            $place_image = $this->upload_file('team');
        } else {
            $place_image = "empty";
        }
        $team = array(
            'image' => $place_image,
            'fullname' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'status' => 1,
        );
        $places = $this->Profile_model->profileinsert($team);
        if ($places) {
            $this->session->set_flashdata('success', 'successfully upload');
            redirect('admin/slider/team');
        } else {
            $this->session->set_flashdata('error', 'Please Enter Correct  deatilas');
            redirect('admin/slider/create_team');
        }
    }
    public function team_edit($id)
    {
        $this->data['team_list'] = $this->Profile_model->team_by_id($id);
        $this->load->view('admin/team_edit', $this->data);
    }
    public function team_update($id)
    {
        // if ($_FILES['team']['name'] != '') { // input  file  name ex: images
        //     $team = $this->upload_file('team');
        // } else {
        //     $team = "empty";
        // }
        $data = array(
            'fullname' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'updated_date' => date('Y-m-d H:i:s'),

        );
        if ($_FILES['team']['name'] != '') { // input  file  name ex: image_desti
            $data['image'] = $this->upload_file('team');
        } 
        $this->Profile_model->team_update($data,$id);     
            $this->session->set_flashdata('success', 'successfully upload');
            redirect('admin/slider/team');
      
    }
    public function team_delete($id)
    {
        $this->Profile_model->team_delete($id);
      //  $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/slider/team');
    }




  
}
