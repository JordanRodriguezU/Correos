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
    public function LoadCorreosSalida() {
        $id = $this->input->post('id');
        $this->load->model('DaoMails');
        $result = $this->DaoMails->GetAllOut_ByIdUser($id);
        if ($result->num_rows() > 0) {
            header('Content-Type: application/json');
            echo json_encode(array('Result' => $result->result_array()));
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('Result' => "No Results"));
        }
    }

    public function LoadCorreosEnviados() {
        $id = $this->input->post('id');
        $this->load->model('DaoMails');
        $result = $this->DaoMails->GetAllSent_ByIdUser($id);
        if ($result->num_rows()> 0) {
            header('Content-Type: application/json');
            echo json_encode(array('Result' => $result->result_array()));
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('Result' => "No Results"));
        }
    }

}
