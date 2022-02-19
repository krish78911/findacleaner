<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class CheckIfEmailExists extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $ifEmail = $this->Cleaners->searchWhereEmail($this->input->post('email'));
        if(count($ifEmail) > 0) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
}
