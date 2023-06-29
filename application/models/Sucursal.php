<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sucursal extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertarSucursal($data)
    {
        $this->db->insert('sucursal', $data);
    }

    public function selectSucursales()
    {
        $this->db->select('*');
        $this->db->from('sucursal');
        $query = $this->db->get();
        return $query->result();
    }

}