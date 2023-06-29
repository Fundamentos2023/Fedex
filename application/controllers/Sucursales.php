<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sucursales extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sucursal');
    }

    public function index()
    {
        $data['listaSucursales'] = $this->sucursal->selectSucursales();
        $this->load->view('templates/header');
        $this->load->view('administrarSucursales', $data);
        $this->load->view('templates/footer');
    }

    public function insertarSucursal()
    {
        $data = array(
            'nombre_suc' => $this->input->post('nombre_suc'),
            'ubicacion_suc' => $this->input->post('ubicacion_suc'),
        );
        $this->sucursal->insertarSucursal($data);
        //flash data
        $this->session->set_flashdata('mensaje', 'Sucursal registrada exitosamente');
        redirect('sucursales');
    }

}