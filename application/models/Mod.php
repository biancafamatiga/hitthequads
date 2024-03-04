<?php

class Mod extends CI_Model {

    
    
    // admin view table
    public function show_fieldtrip(){
        $q = $this->db->query('SELECT * FROM fieldtrip');
        return $q->result();
    }
    
    public function add_fieldtrip($data){
        $this->db->insert('fieldtrip', $data);
        return true;
    }

    // admin view table
    public function show_facilities(){
        $q = $this->db->query('SELECT * FROM facilities');
        return $q->result();
    }
    
    public function add_facilities($data){
        $this->db->insert('facilities', $data);
        return true;
    }

    // admin view table
    public function show_appointment(){
        $q = $this->db->query('SELECT * FROM appointment');
        return $q->result();
    }

    public function add_appointment($data){
        $this->db->insert('appointment', $data);
        return true;
    }

    //delete 

    public function delete_fieldtrip($id){
        $this->db->delete('fieldtrip', array('id' => $id));
    }

    public function delete_appointment($id){
        $this->db->delete('appointment', array('id' => $id));
    }

    public function delete_facilities($id){
        $this->db->delete('facilities', array('id' => $id));
    }


    // search 

    public function search_fieldtrip($keyword){
        $this->db->like('name', $keyword);
        $this->db->or_like('contactperson', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('time', $keyword);
        $this->db->or_like('participants', $keyword);
        $this->db->or_like('gradelevel', $keyword);
        $this->db->or_like('request', $keyword);
        
        $q = $this->db->get('fieldtrip');

        return $q->result();

    }

    public function search_facilities($keyword){
        $this->db->like('name', $keyword);
        $this->db->or_like('contactperson', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('time', $keyword);
        $this->db->or_like('type', $keyword);
        $this->db->or_like('purpose', $keyword);
        $this->db->or_like('participants', $keyword);
        $this->db->or_like('request', $keyword);
        
        $q = $this->db->get('facilities');

        return $q->result();

    }


    public function search_appointment($keyword){
        $this->db->like('name', $keyword);
        $this->db->or_like('organization', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('time', $keyword);
        $this->db->or_like('purpose', $keyword);
        $this->db->or_like('questions', $keyword);
        
        $q = $this->db->get('appointment');

        return $q->result();

    }

    public function loginpro($Email = '', $Password = '')
    {
        $data = array(
            'Email' => $Email,
            'Password' => $Password
        );

        $query = $this->db->get_where('admin', $data);
        if ($query->num_rows() == 0) {
            return false; 
        } else {
            return $query->row();
        }
        
    }


    //reservation
    //sign_up
    //log_in
    //3d
}



