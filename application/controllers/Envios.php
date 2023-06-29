<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Envios extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('envio');
        $this->load->model('cliente');
    }

    public function index()
    {
        $data['listaEnvios'] = $this->envio->selectEnvios();
        // $data['listaEnvios'] = $this->envio->selectEnvios();
        $this->load->view('templates/header');
        $this->load->view('listadoEnvios', $data);
        $this->load->view('templates/footer');
    }

    public function nuevoEnvio()
    {
        $data['listaClientes'] = $this->cliente->selectClientes();
        $this->load->view('templates/header');
        $this->load->view('administrarEnviar', $data);
        $this->load->view('templates/footer');
    }

    public function insertarEnvio()
    {
        $data = array(
            'fk_id_cli' => $this->input->post('fk_id_cli'),
            'detalle_env' => $this->input->post('detalle_env'),
            'origen_env' => $this->input->post('origen_env'),
            'destino_env' => $this->input->post('destino_env')
        );
        $this->envio->insertarEnvio($data);
        $this->session->set_flashdata('mensaje', 'Envio registrado exitosamente');
        redirect('envios');
    }

    public function eliminarEnvio($id_env)
    {
        $this->envio->eliminarEnvio($id_env);
        $this->session->set_flashdata('mensaje', 'Envio eliminado exitosamente');
        redirect('envios');
    }

    public function verRuta($id_env)
    {
        $data['verEnvio'] = $this->envio->selectEnvio($id_env);
        $this->load->view('templates/header');
        $this->load->view('verRuta', $data);
        $this->load->view('templates/footer');
    }

    // public function editarEnvio($id_env)
    // {
    //     $data['envio'] = $this->envio->editarEnvio($id_env);
    //     $data['listaClientes'] = $this->cliente->selectClientes();
    //     $this->load->view('templates/header');
    //     $this->load->view('administrarEnvio', $data);
    //     $this->load->view('templates/footer');
    // }


}