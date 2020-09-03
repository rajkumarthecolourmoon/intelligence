<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Professionalservices extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
        $this->load->library('Form_validation');

        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $this->data['view'] = $this->Services_model->professionalservices_getAll();
        $this->load->view('admin/professionalservices_view', $this->data);
    }
    public function create()
    {
        $this->load->view('admin/professionalservices_add');
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
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('first_title', 'First Tittle', 'required');
        $this->form_validation->set_rules('tittle', 'Tittle', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/professionalservices/create');

        }
        if ($_FILES['image']['name'] != '') {
            $this->form_validation->set_rules('image', 'Image', 'required');
// input  file  name ex: image_desti
            $image = $this->upload_file('image');
        } else {
            $image = "empty";
        }
        $data = array(
            'title' => $this->input->post('title'),
            'first_title' => $this->input->post('first_title'),
            'images' => $image,
            'descriptions' => $this->input->post('description'),
        );
        
        $add = $this->Services_model->professionalservices_add($data);

        if ($add) {
            $this->session->set_flashdata('success', 'Upload successfully');
            redirect('admin/professionalservices');
        } else {
            $this->session->set_flashdata('worng', 'Please Enter Correct  deatilas');
            redirect('admin/professionalservices/create');
        }
    }
    public function edit($id)
    {
        $this->data['edit'] = $this->Services_model->get_by_id($id);
        $this->load->view('admin/professionalservices_edit', $this->data);
    }

    public function update($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'first_title' => $this->input->post('first_title'),
          
            'descriptions' => $this->input->post('description'),
            'updated_date' => date('Y-m-d H:i:s'),

        );
        if ($_FILES['services1']['name'] != '') { // input  file  name ex: image_desti
            $this->form_validation->set_rules('services1', 'Image', 'required');

            $data['images'] = $this->upload_file('services1');
        } 
        $this->Services_model->ps_update($data, $id);
        $this->session->set_flashdata('success', 'Update successfully');
        redirect('admin/professionalservices');
    }
    public function delete($id)
    {
        $this->Services_model->ps_delete($id);
      //  $this->session->set_flashdata('delete', 'Delete successfully');
        redirect('admin/professionalservices');
    }
}
