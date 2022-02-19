<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Login extends BaseController {

    public function __construct() {
        parent::__construct();

        session_start();
    }

    public function index() {
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('admin/loginForm');
    }

    public function checkLogin() {
        $ifEmailAndPasswordExists = $this->Cleaners->searchWhereEmailAndPassword($this->input->post('email'), $this->input->post('password'));
        
        if(count($ifEmailAndPasswordExists) > 0) {
            $_SESSION["email"] = $ifEmailAndPasswordExists[0]->email;
            $_SESSION["password"] = $ifEmailAndPasswordExists[0]->password;
            $_SESSION["userrights"] = $ifEmailAndPasswordExists[0]->userright;
            $_SESSION["loggedin"] = true;
            echo "Yes";
        } else {
            echo "Wrong Email or Password";
        }
    }
}
