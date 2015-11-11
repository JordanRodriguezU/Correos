<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VerifyMail
 *
 * @author jordan
 */
class VerifyMail extends CI_Controller {

    //put your code here
    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('asunto', 'Asunto', 'trim|required');
        $this->form_validation->set_rules('destinatario', 'Destinatario', 'trim|required');
        $this->form_validation->set_rules('informacion', 'Mensaje', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('CreateMail');
        } else {
            if ($this->session->userdata('logged_in')) {
                $session_data = $this->session->userdata('logged_in');
                $asunto=  $this->input->post('asunto');
                $destinatario=  $this->input->post('destinatario');
                $contenido=  $this->input->post('informacion');
          

                $this->load->model('DaoMails');
                $this->DaoMails->Insert($asunto,$destinatario,$contenido,"Salida",$session_data['id']);
                redirect('Salida', 'refresh');
            }
            
        }
    }

}
