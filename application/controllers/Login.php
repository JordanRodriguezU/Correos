<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
//        echo md5("hola");
        $this->load->helper(array('form'));
        $this->load->view('Inicio');
    }

}
