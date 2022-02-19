<?php

class AboutusAndSlider extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    
    function search() {
        $this->db->select('*');
        $this->db->from('aboutus');
        $query = $this->db->get();
        return $query->result();
    }

    function update($data, $id) {
        
        $this->db->where('idabout', $id);
        $this->db->update('aboutus', $data);
    }
}