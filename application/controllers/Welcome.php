<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}

	public function cambiar(){
		$datos['oldClave']   = md5($_POST['oldClave']);
		$datos['newClave']   = md5($_POST['newClave']);

		$this->login_model->cambiar_clave($datos);
		redirect('welcome/index','refresh');


	}
}
