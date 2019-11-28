<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('login_model');
	}

	public function index(){

		
		$this->load->view('login_view');
	}

	public function iniciar(){
		$datos['usuario'] = $_POST['usuario'];
		$datos['clave'] = md5($_POST['clave']);
		$data = $this->login_model->validar($datos);
		if($data){
			//variables de sesion
			$datos_usuario = array('id' => $data->id_usuario, 'nombre'=> $data->nombre, 'logueado' => TRUE);
			$this->session->set_userdata($datos_usuario);
			redirect('Welcome/','refresh');
		}else{
			$data['msj'] = "Error";
			$this->load->view('login_view',$data);

		}
	}

//Metodo para cerrar sesion y destruir la variable de sesion
	public function cerrar(){
		$user_data = array('Logueado' => FALSE);
		$this->session->set_userdata($user_data);
		$this->session->sess_destroy();
		redirect('login_controller/','refresh');
	}


}