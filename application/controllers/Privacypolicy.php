<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacypolicy extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['title'] = "Privacy Policy";
        $this->load->view('privacy-policy', $this->data);
    }
}