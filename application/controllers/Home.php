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
        $this->city = $this->input->post('city');
        $this->vacuuming = $this->input->post('vacuuming');
        $this->moping = $this->input->post('moping');
        $this->meterSquare = $this->input->post('metersquare');
        $this->kitchenCleaning = $this->input->post('kitchenCleaning');
        $this->bathroomCleaning = $this->input->post('BathroomCleaning');

        $this->data['cleaners'] = $this->Cleaners->search();
        $this->load->view('getCleanersAndPrices', $this->data, $this->meterSquare);   
    }
}
