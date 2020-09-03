<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert_service($data)
    {
        $query = $this->db->insert('services', $data);
        return $query;
    }
    public function service()
    {
        $this->db->select('*');
        $query = $this->db->get('services');
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_serv_by_id($id)
    {
        $query = $this->db->get_where('services', array('id' => $id));
        return $query->row();
    }
     

    function update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('services', $data);
    }
    public function delete($id)
    {
        return $this->db->delete('services', array('id' => $id));

       // echo  $this->db->last_query();die;
    }

    public function get_id_by_p_link($p_link){
        $this->db->where("p_link", $p_link);
        return $this->db->get("services_categories")->row();
    }
    public function inserts_category($data)
    {
        $this->db->insert('services_categories', $data);
        $last_id =  $this->db->insert_id();
        return $last_id;

    }
    public function links_limit(){
        $this->db->select('*');
        $this->db->from('services_categories');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
        
    }


    public function  get_category()
    {
        $this->db->select('*');
        $query = $this->db->get('services_categories');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function  get_categories_for_home()
    {
        $this->db->select('*');
        $this->db->limit(4);
        $query = $this->db->get('services_categories');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_category_by_id($id)
    {
        $query = $this->db->get_where('services_categories', array('id' => $id));
        return $query->row();
    }
     

    function category_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('services_categories', $data);
        // echo  $this->db->last_query();
        // die;
    }
    public function category_delete($id)
    {
        return $this->db->delete('services_categories', array('id' => $id));

       
    }


    public function insert_about($data)
    {
        $query = $this->db->insert('about_servies', $data);
        return $query;
    }




    public function professionalservices_add($data)
    {
        $query = $this->db->insert('professionalservices', $data);
        return $query;
    }
     public function professionalservices_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('professionalservices');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function services_getAll()
    {
        $this->db->select('*');
        $query = $this->db->get('professionalservices');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
     public function get_by_id($id)
     {
       $query = $this->db->get_where('professionalservices', array('id' => $id));
       return $query->row();
     }


    function ps_update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('professionalservices', $data);
    }
    public function ps_delete($id)
    {
        return $this->db->delete('professionalservices', array('id' => $id));

    }

    public function insert_services($data)
    {
        $query = $this->db->insert('servies_1', $data);
        return $query;
    }
    public function services_image()
    {
        $this->db->select('*');
        $query = $this->db->get('servies_1');
        if ($query->num_rows()>0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function contact_enquiry($data)
    {
        $query = $this->db->insert('pm_enquiry', $data);
       
        return $query;
    }
    public function get_services_by_id($id)
    {
        $this->db->select('*');
        $this->db->where('services_categories_id',$id);
        $query = $this->db->get('services');
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function enquiry($data)
    {
        $query = $this->db->insert(' professional_services', $data);
       
        return $query;
    }
    // public function insert_pm($data)
    // {
    //     $query = $this->db->insert('program_management', $data);
    //     return $query;
    // }
    // public function pm_images()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('program_management');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    // public function insert_pm_add($data)
    // {
    //     $query = $this->db->insert('pm_content', $data);
    //     return $query;
    // }
    // public function insert_pm_get()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('pm_content');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    
   
    // public function add_devsecops($data)
    // {
    //     $query = $this->db->insert('devsecops', $data);
    //     return $query;
    // }
    // public function add_devsecops_get()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('devsecops');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }

   
    // public function devsecops_content($data)
    // {
    //     $query = $this->db->insert('devsecops_content', $data);
    //     return $query;
    // }
    // public function dev_get_content()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('devsecops_content');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    // public function cybersecurity_add($data)
    // {
    //     $query = $this->db->insert('cybersecurity', $data);
    //     return $query;
    // }
    // public function cybersecurity_get()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('cybersecurity');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    // public function  cysty_content($data)
    //     {
    //         $query = $this->db->insert('cybersecurity_content', $data);
    //         return $query;
    //     }
    // public function cysty_content_get()
    //     {
    //         $this->db->select('*');
    //         $query = $this->db->get('cybersecurity_content');
    //         if ($query->num_rows()>0) {
    //             return $query->result();
    //         } else {
    //             return false;
    //         }
    // }
    // public function cloudservices_add($data)
    // {
    //     $query = $this->db->insert('cloudservices', $data);
    //     return $query;
    // }
    // public function cloudservices_get()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('cloudservices');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    // public function  cloudservices_content($data)
    //     {
    //         $query = $this->db->insert('cloudservices_content', $data);
    //         return $query;
    //     }
    // public function  cloudservices_content_get()
    //     {
    //         $this->db->select('*');
    //         $query = $this->db->get('cloudservices_content');
    //         if ($query->num_rows()>0) {
    //             return $query->result();
    //         } else {
    //             return false;
    //         }
    // }
    // public function iv_v_add($data)
    // {
    //     $query = $this->db->insert('ivandv', $data);
    //     return $query;
    // }
    // public function iv_v_get()
    // {
    //     $this->db->select('*');
    //     $query = $this->db->get('ivandv');
    //     if ($query->num_rows()>0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    // public function  ivandv_content_add($data)
    //     {
    //         $query = $this->db->insert('ivandv_content', $data);
    //         return $query;
    //     }
    // public function  ivandv_content_get()
    //     {
    //         $this->db->select('*');
    //         $query = $this->db->get('ivandv_content');
    //         if ($query->num_rows()>0) {
    //             return $query->result();
    //         } else {
    //             return false;
    //         }
    // }
    
}