<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cliente');
    }

    public function index()
    {
        $data['listaClientes'] = $this->cliente->selectClientes();
        $this->load->view('templates/header');
        $this->load->view('administrarClientes', $data);
        $this->load->view('templates/footer');
    }

    public function insertarCliente()
    {
      
        $data = array(
            'apellidos_cli' => $this->input->post('apellidos_cli'),
            'nombres_cli' => $this->input->post('nombres_cli'),
            'ubicacion_cli' => $this->input->post('ubicacion_cli'),
        );
        $this->cliente->insertarCliente($data);
        //flash data
        $this->session->set_flashdata('mensaje', 'Cliente registrado exitosamente');
        redirect('clientes');
    }

}
