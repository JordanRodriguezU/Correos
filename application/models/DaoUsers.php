<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUsers
 *
 * @author jordan
 */
class DaoUsers extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function Insertar($nombre, $mail, $pass) {
        $arreglo = array("correo" => $mail, "pass" => $pass, "nombre" => $nombre, "estado" => "pendiente");
        $this->db->insert("usuarios", $arreglo);
        return $this->db->insert_id();
    }

    public function AutoUpdate($param) {
        $this->db->where('id', $param);
        $data = array("estado" => "confirmado");
        return $this->db->update('usuarios', $data);
    }

    public function EliminarUsuario($id) {
        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        $this->db->delete('usuarios', $data);
    }

    public function Get_all() {
        $query = $this->db->query('select * from usuarios');
        foreach ($query->result() as $value) {
            var_dump($value);
        }
    }

    public function Login($user, $pass) {
        $this->db->select("id,nombre,correo");
        $this->db->from("usuarios");
        $this->db->where("nombre", $user);
        $this->db->where("pass", $pass);
        $this->db->where("estado", "confirmado");

        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function GetByNuser($nameuser) {
        $this->db->where('nombre', $nameuser);
        $this->db->from('usuarios');
        $result = $this->db->get();
        return $result;
    }

}
