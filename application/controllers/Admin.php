<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Admin extends BaseController {

    public function __construct() {
        parent::__construct();
        /*
        if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
            header("Location: " . base_url('Admin/login'));
        }
        */
        $_SESSION["email"] = 'admin';
        $_SESSION["password"] = 'admin';
        $_SESSION["loggedin"] = true;
        echo $_SESSION['email']." -- ".$_SESSION['password']." :: ".$_SESSION['loggedin'];
        // load models
        $this->load->model('Cleaners');
    }

    public function login() {
        echo "test";
    }

    public function index() {
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
            if($_SESSION["email"] != "admin") {
                $this->data['cleaners'] = $this->Cleaners->searchWhereUsername($_SESSION["email"]);
            }
            else {
                $this->data['cleaners'] = $this->Cleaners->search();
            }
            // var_dump($this->data['cleaners']);
            $this->load->view('head');
            $this->load->view('navigation');
            $this->load->view('admin/body', $this->data);
            $this->load->view('footer');
        }
        
    }

    public function admin() {
        $this->data['cleaners'] = $this->Cleaners->search();
        
        // var_dump($this->data['cleaners']);
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('admin/body', $this->data);
        $this->load->view('footer');
    }

    public function editAdvertisement() {
        $id = $this->input->post('id');
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
        $this->Cleaners->update($data, $id);

        /*
        $data = array(
            'firstname' => 'deffr',
            'lastname' => 'deffr',
            'email' => 'deffr',
            'phone' => 'deffr',
            'vcpricepermeter' => 'deffr',
            'mopingpricepermeter' => 'deffr',
            'bathroomcleaning' => 'deffr',
            'bathroomcleaningprice' => 'deffr',
            'kitchencleaning' => 'deffr',
            'kitchencleaningprice' => 'deffr',
        );
        */

        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
            if($_SESSION["email"] != "admin") {
                $this->data['cleaners'] = $this->Cleaners->searchWhereUsername($_SESSION["email"]);
            }
            else {
                $this->data['cleaners'] = $this->Cleaners->search();
            }
        }
        $this->load->view('admin/allCleaners', $this->data);
    }

    public function deleteAdvertisement($id) {

        $this->Cleaners->delete($id);

        if($this->db->affected_rows() > 0) {
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
                if($_SESSION["email"] != "admin") {
                    session_destroy();
                    $urlRefresh = base_url();
                    header("Refresh: 1; URL=\"" . $urlRefresh . "\""); // redirect in 5 seconds
                }
                else {
                    $this->data['cleaners'] = $this->Cleaners->search();
                    $this->load->view('admin/allCleaners', $this->data);
                }
            }
        } else {
            echo "Error..";
        }
    }
}
