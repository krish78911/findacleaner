<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Admin extends BaseController {

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
        $this->load->view('admin/body', $this->data);
        $this->load->view('footer');
        
    }

    public function addAdvertisement() {

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'city' => $this->input->post('city'),
            'vcpricepermeter' => $this->input->post('vcpricepermeter'),
            'mopingpricepermeter' => $this->input->post('mopingpricepermeter'),
            'bathroomcleaning' => $this->input->post('bathroomcleaning'),
            'bathroomcleaningprice' => $this->input->post('bathroomcleaningprice'),
            'kitchencleaning' => $this->input->post('kitchencleaning'),
            'kitchencleaningprice' => $this->input->post('kitchencleaningprice'),
        );
        $this->Cleaners->insert($data);

        $this->data['cleaners'] = $this->Cleaners->search();
        $this->load->view('admin/allCleaners', $this->data);
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
            'mopingpricepermeter' => $this->input->post('mopingpricepermeter'),
            'bathroomcleaning' => $this->input->post('bathroomcleaning'),
            'bathroomcleaningprice' => $this->input->post('bathroomcleaningprice'),
            'kitchencleaning' => $this->input->post('kitchencleaning'),
            'kitchencleaningprice' => $this->input->post('kitchencleaningprice'),
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

        $this->data['cleaners'] = $this->Cleaners->search();
        $this->load->view('admin/allCleaners', $this->data);
    }

    public function deleteAdvertisement($id) {
        $this->Cleaners->delete($id);

        $this->data['cleaners'] = $this->Cleaners->search();
        $this->load->view('admin/allCleaners', $this->data);
    }
}
