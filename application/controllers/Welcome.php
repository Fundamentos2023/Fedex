<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		// $this->load->view('welcome_message');
		$this->load->view('plantilla');
		$this->load->view('templates/footer');
	}

}