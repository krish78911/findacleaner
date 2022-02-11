<?php

/**
 * @author Krishna Kumar Singh
 * 
 * @company Euro Metrimony
 * @version 1.0 (2018)
 * 
 * No copy rights available.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller

class Admin extends BaseController {

    public function __construct() {
        parent::__construct();
        // load models
        $this->load->model('Cleaners');
    }

    public function index() {
        $this->data['cleaners'] = $this->Cleaners->getALl();
        // var_dump($this->data['cleaners']);
        
        $this->load->view('admin/head');
        $this->load->view('admin/body', $this->data);
        $this->load->view('admin/footer');
        
    }
}
