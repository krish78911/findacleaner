<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Register extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('head', $this->data);
        $this->load->view('navigation');
        $this->load->view('admin/advertiseForm');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function register() {
        
        $ifEmail = $this->Cleaners->searchWhereEmail($this->input->post('email'));
        if(count($ifEmail) > 0) {
            echo "Email Exists";
        } else {
            $data = array(
                'firstname'             => $this->input->post('firstname'),
                'lastname'              => $this->input->post('lastname'),
                'email'                 => $this->input->post('email'),
                'phone'                 => $this->input->post('phone'),
                'city'                  => $this->input->post('city'),
                'vcpricepermeter'       => $this->input->post('vcpricepermeter'),
                'moping' => $this->input->post('moping'),
                'mopingpricepermeter'   => 
                    (empty($this->input->post('mopingpricepermeter')) || $this->input->post('moping')=='No') 
                        ? 0 : $this->input->post('vcpricepermeter'),
                'bathroomcleaning'      => $this->input->post('bathroomcleaning'),
                'bathroomcleaningprice' => 
                    (empty($this->input->post('bathroomcleaningprice')) || $this->input->post('bathroomcleaning')=='No') 
                        ? 0 : $this->input->post('bathroomcleaningprice'),
                'kitchencleaning' => $this->input->post('kitchencleaning'),
                'kitchencleaningprice'  => 
                    (empty($this->input->post('kitchencleaningprice')) || $this->input->post('kitchencleaning')=='No') 
                        ? 0 : $this->input->post('kitchencleaningprice'),
                'password' => $this->input->post('password'),
                'userright' => 'user',
            );
            /*
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
                'userright' => 'user',
            );
            */
            $this->Cleaners->insert($data);
    
            if($this->db->affected_rows() > 0) {
                $_SESSION["email"]      = $this->input->post('email');
                $_SESSION["password"]   = $this->input->post('password');
                $_SESSION["userrights"] = 'user';
                $_SESSION["loggedin"]   = true;
                echo "Record added..";
            } else {
                echo "Error..";
            }
        }

        
    }
}
