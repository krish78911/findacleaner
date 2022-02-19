<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Logout extends BaseController {

    public function __construct() {
        parent::__construct();

        session_start();
    }

    public function index() {
        session_destroy();
        $urlRefresh = base_url();
        header("Refresh: 1; URL=\"" . $urlRefresh . "\""); // redirect in 5 seconds
    }
}
