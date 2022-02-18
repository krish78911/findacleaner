<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Register extends BaseController {

    public function __construct() {
        parent::__construct();
        // load models
        $this->load->model('Cleaners');
    }

    public function index() {
        $this->data['cleaners'] = $this->Cleaners->search();
        // var_dump($this->data['cleaners']);
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('admin/advertiseForm');
    }

    public function register() {

        $_SESSION["email"] = $this->input->post('email');
        $_SESSION["password"] = $this->input->post('password');
        $_SESSION["loggedin"] = true;

        /*
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'city' => $this->input->post('city'),
            'vcpricepermeter' => $this->input->post('vcpricepermeter'),
            'moping' => $this->input->post('moping'),
            'mopingpricepermeter' => $this->input->post('mopingpricepermeter'),
            'bathroomcleaning' => $this->input->post('bathroomcleaning'),
            'bathroomcleaningprice' => $this->input->post('bathroomcleaningprice'),
            'kitchencleaning' => $this->input->post('kitchencleaning'),
            'kitchencleaningprice' => $this->input->post('kitchencleaningprice'),
            'password' => $this->input->post('password'),
        );
        */

        $data = array(
            'firstname' => 'test',
            'lastname' => 'test',
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('password'),
            'city' => 'test',
            'vcpricepermeter' => 1,
            'moping' => 'Yes',
            'mopingpricepermeter' => 1,
            'bathroomcleaning' => 'Yes',
            'bathroomcleaningprice' => 1,
            'kitchencleaning' => 'Yes',
            'kitchencleaningprice' => 1,
            'password' => '123',
        );
        $this->Cleaners->insert($data);

        if($this->db->affected_rows() > 0) {
            echo "Record added..";
        } else {
            echo "Error..";
        }
    }
}
