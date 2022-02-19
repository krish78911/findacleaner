<?php

class Cities extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    
    function search() {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->order_by("idcity", "asc");
        $query = $this->db->get();
        return $query->result();
    }
}