<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Profile_model");
        $this->load->model("user_model");
        $this->load->library("session");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $this->data['images']  = $this->Profile_model->get_images();
        $this->data['export_list'] = $this->user_model->export();
        $this->load->view('admin/users', $this->data);
    }
    
    public function save()
    {
        $this->load->library('upload');
        $upload_path = 'adminassests/img/'; // path where image will be saved
        $config['upload_path']   =  $upload_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $errors = array('error' => $this->upload->display_errors());
            $img = 'no_image.png';
        } else {
            $data = array('upload_data' => $this->upload->data());
            $img = $_FILES['image']['name'];  //name must be picture
        }
        $data = array(
          'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('mobile'),
          'state' => $this->input->post('state'),
          'image' =>  $img,
          'gender' => $this->input->post('gender'),
          'message' =>$this->input->post('comment'),
        );
        $check = $this->user_model->user_save($data);
        if ($check) {
            $this->session->set_flashdata('success', 'Form submitted successfully');
            $this->load->view('admin/users');
        } else {
            $this->session->set_flashdata('error', 'plese fill the correct deatilas');
            $this->load->view('admin/users');
        }
    }
        
    public function view()
    {
        $u = $this->input->get_post('search');
        $filters = [];
        if ($u!='') {
            $filters['search'] = $u;
        } else {
            $filters['search']='';
        }
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/user/view');
        $config['total_rows'] = $this->user_model->record_count();
        $config['per_page'] = 3;
        $config['uri_segment'] = 4;
        $config['reuse_query_string'] = true;
        $page =($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $filters['per_page'] = 3;
        $filters['page'] = $config['per_page'];
       // $filters['offset'] = $offset;
        $this->data['employee'] = $this->user_model->getall($filters);
        $data['links'] = $this->pagination->create_links();
        $this->pagination->initialize($config);
        $this->data['images']  = $this->Profile_model->get_images();
        $this->load->view('admin/blank', $this->data);
    }

    public function edit($id)
    {
        $this->data['images']  = $this->Profile_model->get_images();
        $this->data['employee'] = $this->User_model->edit($id);
        $this->load->view('admin/users_update', $this->data);
    }

    public function update()
    {
        $this->load->library('upload');
        $upload_path = 'adminassests/img/'; // path where image will be saved
        $config['upload_path']          =  $upload_path;
        $config['allowed_types']        = 'gif|jpg|png';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('profile')) {
            $errors = array('error' => $this->upload->display_errors());
            $image = 'no_image.png';
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image = $_FILES['profile']['name'];  //name must be picture
        }
        $update_data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'phone' => $this->input->post('mobile'),
      'state' => $this->input->post('state'),
      'image' =>  $image,
      'gender' => $this->input->post('gender'),
      'message' =>$this->input->post('comment'),
     );
        $check = $this->user_model->update($update_data);
        if ($check) {
            $this->session->set_flashdata('success', 'Update successfully');
            $this->load->view('admin/users_update');
        } else {
            $this->session->set_flashdata('error', 'plese fill the correct deatilas');
            $this->load->view('admin/users_update');
        }
    }
    public function delete($id)
    {
        $this->user_model->delete($id);
        $this->load->view('admin/blank');
    }
    public function search()
    {
        $search = $this->input->post('search');
        $this->data["employee"] = $this->User_model->get_search($search);
        $this->load->view('admin/blank', $this->data);
    }

  
}