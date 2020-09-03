<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // public function user_save($data)
    // {
    //     $query = $this->db->insert('employe', $data);
    //     return $query;
    // }
    // public function record_count()
    // {
    //     return $this->db->count_all("employe");
    // }
    // public function getall($filters=null)
    // {
    //     if ($filters['search']!='') {
    //         $this->db->group_start();
    //         $this->db->like('name', $filters['search']);
    //         $this->db->or_like('email', $filters['search']);
    //         $this->db->or_like('phone', $filters['search']);
    //         $this->db->or_like('state', $filters['search']);
    //         $this->db->group_end();
    //     }
    //     $this->db->limit($filters['per_page']);
    //     $this->db->offset($filters['offset']);
    //     return $this->db->get('employe')->result();
    // }
    // public function get_users()
    // {
    //     $query = $this->db->get('employe');
    //     return $query->result();
    // }
    // public function update($update_data)
    // {
    //     $this->db->set($update_data);
    //     $this->db->where("id");
    //     $this->db->update("employe", $update_data);
    // }
    // public function edit($id)
    // {
    //     $this->db->where("id", $id);
    //     return $this->db->get("employe")->row();
    // }
    // public function delete($id)
    // {
    //     $this->db->where("id", $id);
    //     $this->db->delete("employe");
    // }
    // public function export()
    // {
    //     $this->db->select("*");
    //     $this->db->from('employe');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    // public function excel_insert($inserdata)
    // {
    //     $query = $this->db->insert('employe', $inserdata);
    //     return $query;
    // }
    // public function pdflist()
    // {
    //     $this->db->select("*");
    //     $this->db->from('employe');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    
    public function slider_images($data)
    {
        $query = $this->db->insert("slider_images", $data);
        return $query;
    }
    public function slider_images_get()
    {
        $this->db->select("*");
        $this->db->from('slider_images');
        // $this->db->order_by('id','ASC');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function slider_by_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("slider_images")->row();
    }
    // public function slider_by_id($id){
    //     $this->db->where("id", $id);
    //     return $this->db->get("slider_images")->row();
    // }
    public function update_sliders($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('slider_images', $data);
    }
    public function delete_sliders( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider_images');
    }
    public function intelligence_insert($data)
    {
        $query = $this->db->insert("aboutcontent", $data);
        return $query;
    }
    public function intelligence_getAll()
    {
        $this->db->select("*");
        $this->db->from('aboutcontent');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function intelligence_by_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("aboutcontent")->row();
    }
    function intelligence_update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('aboutcontent', $data);
    }
    public function intelligence_delete($id)
    {
        return $this->db->delete('aboutcontent', array('id' => $id));
    }
    
    public function socialmedia_links($links)
    {
        $query = $this->db->insert("social_media_links", $links);
        return $query;
    }
    public function get_socialmedia_links()
    {
        $this->db->select("*");
        $this->db->from('social_media_links');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function contact($data)
    {
        $query = $this->db->insert('about_us', $data);
        return $query;
    }
    public function get_contact()
    {
        $query = $this->db->get('about_us');
        return $query->result();
    }

    public function total_users_count()
    {
        $this->db->select('id')->from('user');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function total_countrys()
    {
        $this->db->select('id')->from('aboutcontent');
        $query = $this->db->get();
        return $query->num_rows();
    }
    // public function total_empolyes()
    // {
    //     $this->db->select('id')->from('employe');
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }
    public function add_address($address)
    {
        $query = $this->db->insert('contact_us', $address);
        return $query;
    }
    public function get_address()
    {
        $this->db->select("*");
        $this->db->from('contact_us');
        $query = $this->db->get();
        return $query->row();
    }
    public function address_get()
    {
        $this->db->select("*");
        $this->db->from('contact_us');
        $query = $this->db->get();
        return $query->result();
    }
    public function contact_enquery()
    {
        $this->db->select("*");
        $this->db->from(' contact_mail');
        $query = $this->db->get();
        return $query->result();
    }
    public function address_by_id($id){
        $this->db->where("id", $id);
        return $this->db->get("contact_us")->row();
    }
    public function address_update($address,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('contact_us', $address);
       
    }
    public function address_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('contact_us');
    }
    public function contact_enquery_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete(' contact_mail');
    }

















    public function contact_mail($data)
    {
        $query = $this->db->insert('contact_mail', $data);
       
        return $query;
    }
    public function get_contact_list()
    {
        $query = $this->db->get('contact_mail');
        return $query->result();
    }

    public function joinus_apply($data)
    {
        $query = $this->db->insert('join_us', $data);
       
        return $query;
    }
    public function get_joinus_apply()
    {
        $query = $this->db->get('join_us');
        return $query->result();
    }
    public function joinus_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('join_us');
    }
    public function insert_about_services($data)
    {
        $query = $this->db->insert('about_servies', $data);    
        return $query;
    }
    public function about_services_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('about_servies');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function about_services_by_id($id){
        $this->db->where("id", $id);
        return $this->db->get("about_servies")->row();
    }
    public function about_services_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('about_servies', $data);
       
    }
    public function about_services_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_servies');
    }


    public function leadership_insert($data)
    {
        $query = $this->db->insert('about_leadership', $data);    
        return $query;
    }
    public function leadership_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('about_leadership');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function leadership_by_id($id){
        $this->db->where("id", $id);
        return $this->db->get("about_leadership")->row();
    }
    public function leadership_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('about_leadership', $data);
       
    }
    public function leadership_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_leadership');
    }







    public function key_differentiators_insert($data)
    {
        $query = $this->db->insert('about_key_differentiators', $data);    
        return $query;
    }
    public function key_differentiators_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('about_key_differentiators');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function key_differentiators_by_id($id){
        $this->db->where("id", $id);
        return $this->db->get("about_key_differentiators")->row();
    }
    public function key_differentiators_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('about_key_differentiators', $data);
       
    }
    public function key_differentiators_delete( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_key_differentiators');
    }










    public function about_core_competencies_insert($data)
    {
        $query = $this->db->insert('about_core_competencies', $data);
        return $query;
    }
    public function core_competencies_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('about_core_competencies');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function about_core_competencies_by_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("about_core_competencies")->row();
    }
    public function about_core_competencies_update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('about_core_competencies', $data);
    }
    public function about_core_competencies_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_core_competencies');
    }

}