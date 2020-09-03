<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function profileinsert($team)
    {
        $query = $this->db->insert("team", $team);
        return $query;
    }
    public function get_team()
    {
        $this->db->select('*');
        $query = $this->db->get('team');
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function team_by_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("team")->row();
    }
    function team_update( $data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('team', $data);      
    }
    public function team_delete($id)
    {
        return $this->db->delete('team', array('id' => $id));
    }
    public function clients($clients)
    {
        $query = $this->db->insert("clients", $clients);
        return $query;
    }
    public function clients_get()
    {
        $this->db->select('*');
        $query = $this->db->get('clients');
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    
    }
    public function client_by_id($id)
    {      
        $this->db->where("id", $id);
        return $this->db->get('clients')->row();
    }    
    public function update_client($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('clients', $data);
    }
    public function delete_client($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('clients');
    }





    public function profile($data)
    {
        $query = $this->db->insert('profile', $data);
        return $query;
    }
    public function get_profile()
    {

        $this->db->from('profile');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_profile1()
    {

        $this->db->from('profile');
        $query = $this->db->get();
        return $query->row();
    }
    public function profile_get()
    {
        $this->db->from('profile');
        $query = $this->db->get();
        return $query->row();
    }

    public function profile_by_id($id){
        $this->db->where("id", $id);
        return $this->db->get("profile")->row();
    }
    public function profile_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('profile', $data);
       
    }
    public function profile_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profile');
    }





}