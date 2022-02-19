<?php

class AboutSliderContact extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    
    function search() {
        $this->db->select('*');
        $this->db->from('aboutslidercontactdata');
        $query = $this->db->get();
        return $query->result();
    }

    function update($data, $id) {
        
        $this->db->where('idabout', $id);
        $this->db->update('aboutslidercontactdata', $data);
    }
}