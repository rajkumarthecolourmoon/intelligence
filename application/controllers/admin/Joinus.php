<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Joinus extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        if ($this->session->userdata('logged_in') !== true) {
            redirect('admin/login');
        }
    }

    public function index()
    {       
        $this->data['joinus']  = $this->User_model->get_joinus_apply();
        $this->load->view('admin/joinus',$this->data);
    }
    public function delete($id)
    {
        $this->User_model->joinus_delete($id);
       // $this->session->set_flashdata('delete', 'Delete Successfully');
        redirect('admin/joinus');
    }
}
?>