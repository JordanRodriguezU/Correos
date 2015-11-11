<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enviados
 *
 * @author jordan
 */
class Enviados extends CI_Controller {
    //put your code here
        function __construct() {
        parent::__construct();
    }
    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data=  $this->session->userdata('logged_in');
            $data['username']=$session_data['username'];
            $data['correo']=$session_data['correo'];
            $this->load->model('DaoMails');
            $result=  $this->DaoMails->GetAllSent_ByIdUser($session_data['id']);
            $data['result']=$result;
            $this->load->view('Home_Enviados',$data);
        }else{
            redirect('login','refresh');
        }
    }
    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('Salida','refresh');
    }
}
