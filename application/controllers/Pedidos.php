<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedidos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pedido');
    }

    public function index()
    {
        $data['listaPedidos'] = $this->pedido->selectPedidos();
        $this->load->view('templates/header');
        $this->load->view('administrarPedidos', $data);
        $this->load->view('templates/footer');
    }

    public function insertarPedido()
    {
        $data = array(
            'descripcion_ped' => $this->input->post('descripcion_ped'),
            'ubicacion_ped' => $this->input->post('ubicacion_ped'),
        );
        $this->pedido->insertarPedido($data);
        //flash data
        $this->session->set_flashdata('mensaje', 'Pedido registrado exitosamente');
        redirect('pedidos');
    }

}