<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Home extends BaseController {

    public function __construct() {
        parent::__construct();
        // load models
        $this->load->model('Cleaners');
    }

    public function index() {
        $this->data['cleaners'] = $this->Cleaners->search();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('slider');
        $this->load->view('home', $this->data);
        $this->load->view('about');
        $this->load->view('footer');   
    }

    public function findCleaners() {
        $postData = $this->input->post();
        $this->city = $this->input->post('city');
        $this->vacuuming = $postData['vacuuming'];
        $this->moping = $postData['moping'];
        $this->metersquare = $postData['metersquare'];
        $this->kitchencleaning = $postData['kitchencleaning'];
        $this->bathroomcleaning = $postData['bathroomcleaning'];

        echo $postData['bathroomcleaning'];
        $this->data['cleaners'] = $this->Cleaners->searchWhere($postData);
        $this->load->view('getCleanersAndPrices'
            , $this->data
            , $this->vacuuming
            , $this->moping
            , $this->metersquare
            , $this->kitchencleaning
            , $this->bathroomcleaning
        );   
    }
}
