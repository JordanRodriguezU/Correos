<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewMail
 *
 * @author jordan
 */
class NewMail extends CI_Controller {

    //put your code here
    function index() {
        $this->load->helper(array('form'));
        $this->load->view('CreateMail');
    }

}
