<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Envio extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function selectEnvios()
    {
        $query = $this->db->get('envio');
        return $query->result();
    }

    public function insertarEnvio($data)
    {
        $this->db->insert('envio', $data);
    }

    public function eliminarEnvio($id_env)
    {
        $this->db->where('id_env', $id_env);
        $this->db->delete('envio');
    }

    public function editarEnvio($id_env)
    {
        $this->db->where('id_env', $id_env);
        $query = $this->db->get('envio');
        return $query->row();
    }

    public function selectEnvio($id_env)
    {
        $this->db->where('id_env', $id_env);
        $query = $this->db->get('envio');
        return $query->row();
    }

}
