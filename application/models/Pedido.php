<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedido extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertarPedido($data)
    {
        $this->db->insert('pedido', $data);
    }

    public function selectPedidos()
    {
        $this->db->select('*');
        $this->db->from('pedido');
        $query = $this->db->get();
        return $query->result();
    }

}