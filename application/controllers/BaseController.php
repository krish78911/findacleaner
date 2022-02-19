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
            PAGINATION
            STYLING
            CHECK IF PRICE INPUTS EMPTY THEN ENTER 0
            EDIT FORM SHOW HIDE PRICE INPUTS NOT WORKING
            AJAX WORKS ONLY ONCE ERROR
        */
    }
}