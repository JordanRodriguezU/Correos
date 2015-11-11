<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoMails
 *
 * @author jordan
 */
class DaoMails extends CI_Model{
    //put your code here
    public function Insert($asunto,$destinatario,$contenido,$estado,$idusuario) {
        $data=array('asunto'=>$asunto,'destinatario'=>$destinatario,'contenido'=>$contenido,
            'estado'=>$estado,'usuario'=>$idusuario);
        $this->db->insert('correo',$data);
    }
    public function GetAllOut_ByIdUser($idUser) {
        $this->db->where('usuario',$idUser);
        $this->db->where('estado','Salida');
        $this->db->from('correo');
        $result= $this->db->get();
        return $result;
    }
        public function GetAllSent_ByIdUser($idUser) {
        $this->db->where('usuario',$idUser);
        $this->db->where('estado','Enviado');
        $this->db->from('correo');
        $result= $this->db->get();
        return $result;
    }
}
