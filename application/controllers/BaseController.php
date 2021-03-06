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

        // load models
        $this->load->model('Cleaners');
        $this->load->model('Cities');
        $this->load->model('AboutSliderContact');

        $this->data['cities'] = $this->Cities->search();
        $this->data['aboutus'] = $this->AboutSliderContact->search();
        $this->data['slidertext'] = $this->AboutSliderContact->search();
        $this->data['contact'] = $this->AboutSliderContact->search();
    }
}