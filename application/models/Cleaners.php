<?php

class Cleaners extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    
    function search() {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    function insert($data) {
        $this->db->insert('cleaner', $data);
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('cleaner'); 
    }

    function update($data, $id) {
        
        $this->db->where('id', $id);
        $this->db->update('cleaner', $data);
    }
}