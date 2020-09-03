<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

    }
	public function index()
	{
        $this->data['client'] = $this->Profile_model->clients_get();
        $this->data['about_services'] = $this->User_model->about_services_getAll(); 
        $this->data['leadership'] = $this->User_model->leadership_getAll();
        $this->data['core_competencies'] = $this->User_model->core_competencies_getAll();
        $this->data['getAll'] = $this->User_model->key_differentiators_getAll();

		$this->load->view('about', $this->data);
    }
      public function add(){


   }
   public function edit(){


}
public function update(){


}
}
?>