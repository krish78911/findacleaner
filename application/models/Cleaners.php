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

    function searchLimit($limit=5, $start=0, $all=false) {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->order_by("id", "asc");
        if($all) {
            $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function searchWhere($postData, $limit=5, $start=0, $all=false) {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->where('city', $postData['city']);
        if($postData['moping'] == 'Yes') {
            $this->db->where('moping', $postData['moping']);
        }
        if($postData['bathroomcleaning'] == 'Yes') {
            $this->db->where('bathroomcleaning', $postData['bathroomcleaning']);
        }
        if($postData['kitchencleaning'] == 'Yes') {
            $this->db->where('kitchencleaning', $postData['kitchencleaning']);
        }
        $this->db->order_by("id", "asc");
        if($all) {
            $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function searchWhereEmail($email) {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result();
    }

    function searchWhereEmailAndPassword($email, $password) {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->result();
    }

    function searchWhereUsername($email) {
        $this->db->select('*');
        $this->db->from('cleaner');
        $this->db->where('email', $email);
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