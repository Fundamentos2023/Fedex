<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertarCliente($data)
    {
        $this->db->insert('cliente', $data);
    }

    public function selectClientes()
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $query = $this->db->get();
        return $query->result();
    }

}