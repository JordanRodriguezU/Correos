<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author jordan
 */
class Salida extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['correo'] = $session_data['correo'];
            $this->load->model('DaoMails');
            $result = $this->DaoMails->GetAllOut_ByIdUser($session_data['id']);
            $data['result'] = $result;
            $data['id'] = $session_data['id'];
            $this->load->view('Home_Salida', $data);
        } else {
            redirect('login', 'refresh');
        }
    }

    function Edit() {
        $asunto = $this->input->post('asunto');
        $destinatario = $this->input->post('destinatario');
        $contenido = $this->input->post('contenido');
        $id = $this->input->post('id');
        $this->load->model('DaoMails');
        $this->DaoMails->Update($id, $asunto, $destinatario, $contenido);
        echo "Ready";
    }

    function Delete() {
        $id = $this->input->post('id');
        $this->load->model('DaoMails');
        $this->DaoMails->Delete($id);
        echo "Ready";
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('Salida', 'refresh');
    }

}
