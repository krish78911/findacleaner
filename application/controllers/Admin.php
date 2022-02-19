<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class Admin extends BaseController {

    public function __construct() {
        parent::__construct();
        // echo $_SESSION['email']." -- ".$_SESSION['password']." :: ".$_SESSION['loggedin'];
    }

    public function index() {
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
            if($_SESSION["userrights"] != "admin") {
                $this->data['cleaners'] = $this->Cleaners->searchWhereUsername($_SESSION["email"]);
            }
            else {
                $this->data['cleaners'] = $this->Cleaners->search();
                
            }
            
            $this->data['aboutusAndSliderText'] = $this->AboutSliderContact->search();
            // var_dump($this->data['cleaners']);
            $this->load->view('head', $this->data);
            $this->load->view('navigation');
            $this->load->view('admin/body');
            ($_SESSION["userrights"] != "admin") 
                ? '' : $this->load->view('admin/editAboutAndSliderTextForm');
            $this->load->view('about');
            $this->load->view('footer');
        }
        
    }

    public function editAdvertisement() {
        $id = $this->input->post('id');
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
                    ? 0 : $this->input->post('mopingpricepermeter'),
            'bathroomcleaning'      => $this->input->post('bathroomcleaning'),
            'bathroomcleaningprice' => 
                (empty($this->input->post('bathroomcleaningprice')) || $this->input->post('bathroomcleaning')=='No') 
                    ? 0 : $this->input->post('bathroomcleaningprice'),
            'kitchencleaning' => $this->input->post('kitchencleaning'),
            'kitchencleaningprice'  => 
                (empty($this->input->post('kitchencleaningprice')) || $this->input->post('kitchencleaning')=='No') 
                    ? 0 : $this->input->post('kitchencleaningprice'),
            'password' => $this->input->post('password'),
            'userright' => $this->input->post('userright'),
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

        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
            if($_SESSION["userrights"] != "admin") {
                $this->data['cleaners'] = $this->Cleaners->searchWhereUsername($_SESSION["email"]);
            }
            else {
                $this->data['cleaners'] = $this->Cleaners->search();
            }
            // var_dump($this->data['cleaners']);
        }
        $this->load->view('admin/allCleaners', $this->data);
    }

    public function deleteAdvertisement($id) {

        $this->Cleaners->delete($id);

        if($this->db->affected_rows() > 0) {
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
                if($_SESSION["userrights"] != "admin") {
                    session_destroy();
                    $urlRefresh = base_url();
                    header("Refresh: 1; URL=\"" . $urlRefresh . "\""); // redirect in 5 seconds
                }
                else {
                    $this->data['cleaners'] = $this->Cleaners->search();
                    $this->load->view('admin/allCleaners', $this->data);
                }
            }
        } else {
            echo "Error..";
        }
    }

    public function editAboutAndSliderText() {
        $id = $this->input->post('id');
        $data = array(
            'title'             => $this->input->post('title'),
            'aboutustext'       => $this->input->post('aboutustext'),
            'slidertext'        => $this->input->post('slidertext'),
            'contactaddress'    => $this->input->post('contactaddress'),
            'contactphone'      => $this->input->post('contactphone'),
            'contactemail'      => $this->input->post('contactemail'),
        );
        $this->AboutSliderContact->update($data, $id);

        if($this->db->affected_rows() > 0) {
            echo  'Updated..';
        } else {
            echo "Error..";
        }
    }
}
