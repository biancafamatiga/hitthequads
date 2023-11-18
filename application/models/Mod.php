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



}
