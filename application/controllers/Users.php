<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    public function index() {
        $this->load->view('CreateUser');
    }

    public function Confirmar() {
        $this->load->model('DaoUsers');
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $id = $this->DaoUsers->Insertar($nombre, $mail, md5($pass));
        $mensaje = "Registro en " . base_url() . "\n\n";
        $mensaje .= "Estos son tus datos de registro:\n";
        $mensaje .= "Usuario: $nombre.\n";
        $mensaje .= "Contraseña: $pass.\n\n";
        $mensaje .= "Debes activar tu cuenta pulsando este enlace: " . base_url('Users/UserLink/'.$id);

        $asunto = "Activación de tu cuenta en " . base_url();

        $this->load->library('email');


        $data = array("mail" => $mail);
        if (mail($mail, $asunto, $mensaje)) {

            $this->load->view('Confirmacion', $data);
        } else {
           
            $this->DaoUsers->EliminarUsuario($id);
            $this->load->view('ErrorSendMail', $data);
        }
    }

    public function UserLink($param) {
        $this->load->model('DaoUsers');
        $this->DaoUsers->AutoUpdate($param);
        $this->load->view('LinkConfirmado');
    }

    public function LoginUser() {
        $this->load->model('DaoUsers');
    }

}
