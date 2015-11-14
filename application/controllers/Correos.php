<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Correos
 *
 * @author jordan
 */
class Correos extends CI_Controller {

    //put your code here
    public function LoadCorreos() {
        $id = $this->input->post('id');
        $this->load->model('DaoMails');
        $result = $this->DaoMails->GetAllOut_ByIdUser($id);
        header('Content-Type: application/json');
        echo json_encode(array('Result'=>$result->result_array()));
    }

}
