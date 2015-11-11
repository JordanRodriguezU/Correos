<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class VerifyLogin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('DaoUsers','',TRUE);
        
    }

    public function index() {

    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user','Username','trim|required');
        $this->form_validation->set_rules('pass','Password','trim|required|callback_check_database');
        if ($this->form_validation->run()==FALSE) {
            $this->load->view('Inicio');
        }  else {
            redirect('Salida','refresh');    
        }

    }
    function check_database($pass) {
        $username=  $this->input->post('user');
        $result=  $this->DaoUsers->Login($username,  md5($pass));
        if ($result) {
            $sess_array=array();
            foreach ($result as $row) {
                $sess_array=array(
                    'id'=>$row->id,
                    'username'=>$row->nombre,
                    'correo'=>$row->correo
                   // 'pass'=>$row->pass
                );
                $this->session->set_userdata('logged_in',$sess_array);
                
        }
        return TRUE;
        }else{
            $this->form_validation->set_message('check_database',"<p id='Error'>Invalid Username or Password</p>");
            return FALSE;
        }
    }

    }



