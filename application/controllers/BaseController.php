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

        $this->load->library(array('upload', 'image_lib', 'calendar', 'email', 'pagination', 'unit_test')); //load necessary libraries
        $this->load->database();
        $this->load->helper(array('url', 'form', 'html', 'directory', 'file')); //load necessary helpers

        /*
            SEARCH CONDITION FOR PRICE
            IF KITCHEN OR BATHROOM CLEANING THEN ONLY PUT PRICE
            -SEND EMAIL
            PAGINATION
            LOGIN
            LOGOUT
            STYLING
            
            REGISTER (check if username exists)
            ON USER DELETE logout
        */
    }
}