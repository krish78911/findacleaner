<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Home extends BaseController {

    public function __construct() {
        parent::__construct();
        // echo $_SESSION['email']." -- ".$_SESSION['password']." :: ".$_SESSION['loggedin'];
    }

    public function index() {
        $this->data['cleaners'] = $this->Cleaners->search();
        $this->data['cities'] = $this->Cities->search();
        $this->data['aboutus'] = $this->AboutusAndSlider->search();
        $this->data['slidertext'] = $this->AboutusAndSlider->search();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('slider', $this->data);
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
