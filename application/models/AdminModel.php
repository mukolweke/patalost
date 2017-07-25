<?php

class AdminModel extends CI_Model {

    //login check & validation
    function login($admin_email, $admin_password) {
        $this->db->select('admin_id');
        $this->db->where('email', $admin_email);
        $this->db->where('password', $admin_password);
        $this->db->where('auth_level', 1);
        $this->db->limit(1);

        $loginQuery = $this->db->get('admin_portal');

        if ($loginQuery->num_rows() == 1) {
            return $loginQuery->result();
        } else {
            return FALSE;
        }
    }
    
    //get admin's info
    function getName($admin_email){
        $this->db->select('*');
        $this->db->where('email', $admin_email);
        
        $query = $this->db->get('admin_portal');
        return $query->result();
    }

}
