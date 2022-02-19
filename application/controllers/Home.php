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
        $this->data['cleanersAll'] = $this->Cleaners->searchLimit();
        $this->data['cleaners'] = $this->Cleaners->searchLimit(5, 0, true);
        $this->load->view('head', $this->data);
        $this->load->view('navigation');
        $this->load->view('slider');
        $this->load->view('home');
        $this->load->view('about');
        $this->load->view('footer');   
    }

    public function demo() {
        $this->vacuuming        = 'Yes';
        $this->moping           = 'No';
        $this->metersquare      = 1;
        $this->kitchencleaning  = 'No';
        $this->bathroomcleaning = 'No';

        $this->data['cleaners'] = 
            $this->Cleaners->searchLimit($this->input->post('limit'), $this->input->post('start'), true);
        $this->load->view('getCleanersAndPrices'
            , $this->data
            , $this->vacuuming
            , $this->moping
            , $this->metersquare
            , $this->kitchencleaning
            , $this->bathroomcleaning
        );    
    }

    public function findCleaners($limit, $start) {
        $postData                   = $this->input->post();
        $this->city                 = $postData['city'];
        $this->vacuuming            = $postData['vacuuming'];
        $this->moping               = $postData['moping'];
        $this->metersquare          = $postData['metersquare'];
        $this->kitchencleaning      = $postData['kitchencleaning'];
        $this->bathroomcleaning     = $postData['bathroomcleaning'];
        $this->data['cleanersAll']  = $this->Cleaners->searchWhere($postData);
        $this->data['cleaners']     = $this->Cleaners->searchWhere($postData, $limit, $start, true);
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
