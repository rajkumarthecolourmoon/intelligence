<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function user_save($data)
    {
        $query = $this->db->insert('user', $data);
        return $query;
    }
    public function get_user($id)
    {
        $get = $this->db->get_where('user', array('id'=>$id));
        return $get->row_array();
    }
    public function get_social_media_links()
    {
        $this->db->where('id', 1);
        $result = $this->db->get('social_media_links')->row();
        return $result;
    }
    public function account_activate($data, $id)
    {
        $query = $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function loginuser($data)
    {
        $this->db->where('email', $data['email']);
        $this->db->where("password", $data['password']);
        // $this->db->where("status", 1);
        $query = $this->db->get('user');
        return $query;
    }
    //email  exits //
     public function email_exists($email)
    {     
    $this->db->where('forgot_pass_email',$email);
    $query = $this->db->get('profile');
    
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}
public function temp_reset_password($temp_pass){
    $data =array(
        'email' =>$this->input->post('email'),
        'password'=>$temp_pass);
        $email = $data['email'];

            if($data){
            $this->db->where('email', $email);
            $this->db->update('user', $data);  
            return TRUE;
            }else{
            return FALSE;
}

}

public function is_temp_pass_valid($temp_pass){
    $this->db->where('password', $temp_pass);
    $query = $this->db->get('user',$data);
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}




















    public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
      return  $this->db->update('user', $userdata);
       // echo $this->db->last_query();die;
    }
    public function get_pass($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        
        return $query->row();
    }







    //forgotpassword
    public function forgot_password($email)
    {
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query=$this->db->get();
        return $query->row_array();
    }
    public function users_count()
    {
        $this->db->select('count(*) as no');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }
    public function getuserallrecords()
    {
        $query = $this->db->get('user');
        return $query->row();
    }
    public function getuser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    public function user_update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }
    public function subscribes($email)
    {
        $this->db->set('subscribe_mail', $email);
        $query = $this->db->insert('subscribe');
        return $query;
    }
}