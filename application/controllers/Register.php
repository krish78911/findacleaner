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
        echo "test";
        $this->data['cleaners'] = $this->Cleaners->search();
        // var_dump($this->data['cleaners']);
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('admin/advertiseForm');
        $this->load->view('footer');  
    }
}
