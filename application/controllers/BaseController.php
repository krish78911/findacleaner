<?php

/**
 * @author Krishna Kumar Singh
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/** base controller */
class BaseController extends CI_Controller {

    public function __construct() {
        parent::__construct();

        error_reporting(1); //disable error reporting
        ini_set('display_errors', 1); //disable error reporting
		
        session_start();

        //echo $_SESSION['email']." -- ".$_SESSION['password']." :: ".$_SESSION['loggedin'];

        $this->load->library(array('upload', 'image_lib', 'calendar', 'email', 'pagination', 'unit_test')); //load necessary libraries
        $this->load->database();
        $this->load->helper(array('url', 'form', 'html', 'directory', 'file')); //load necessary helpers

        // load models
        $this->load->model('Cleaners');
        $this->load->model('Cities');
        $this->load->model('AboutSliderContact');

        $this->data['cities'] = $this->Cities->search();
        $this->data['aboutus'] = $this->AboutSliderContact->search();
        $this->data['slidertext'] = $this->AboutSliderContact->search();
        $this->data['contact'] = $this->AboutSliderContact->search();

        /*
            -SEARCH CONDITION FOR PRICE
            -SEND EMAIL
            -LOGOUT
            -ON EDIT EMAIL AND PASSWORD, MANAGE LOGIN, LOGOUT
            -SHOW MOPING, KITCHEN, BATHROOM PRICE INPUT IF YES SELECTED
            -LOGIN, use newly created login form
            -REGISTER (check if username exists), if session exists then submit to admin, else to register
            -ON USER DELETE logout
            -PUT LABEL ABOVE FORM INPUTS (edit form, login form)
            -EDIT FORM SHOW HIDE PRICE INPUTS NOT WORKING
            -AJAX WORKS ONLY ONCE ERROR
            -CHECK IF PRICE INPUTS EMPTY THEN ENTER 0
            -CITIES FROM TABLE
            -ADMIN SHOW ALL BUT EDIT ONLY USERRIGHT
            -ABOUT US FROM DB AND EDIT, DELETE
            PAGINATION
            STYLING
            TEST
            LANGUAGES
        */
    }
}