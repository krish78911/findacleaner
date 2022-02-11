<?php

class Cleaners extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    
    function getAll() {
        $this->db->select('*');
        $this->db->from('cleaner');
        $query = $this->db->get();
        return $query->result();
    }
}