<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mod_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('mod_model');
	}


	public function index()
	{
		$data = array(
			'title'    => 'Inventario USAM', 
			"modelo"=>$this->mod_model->datos(),
			"marca"=>$this->mod_model->get_mar());

		$this->load->view('template/header');
		$this->load->view('mod_view',$data);
		$this->load->view('template/footer');

	}

	public function eliminar($id){

		$this->mod_model->eliminar($id);
		redirect('mod_controller','refresh');
	}

	public function ingresar(){

		$datos['modelo'] = $_POST["modelo"];
		$datos['marca'] = $_POST["marca"];

		$result = $this->mod_model->set_mod($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				"modelo"  =>$this->mod_model->datos(),
				"marca"   =>$this->mod_model->get_mar(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('mod_view',$data);
			$this->load->view('template/footer');

		}

	}

	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			"mod"=>$this->mod_model->get_datos($id),
			"marca"=>$this->mod_model->get_mar());

		$this->load->view('template/header');
		$this->load->view('mod_viewAct',$data);
		$this->load->view('template/footer');

	}

	public function actualizar(){

		$datos['id'] = $_POST["id"];
		$datos['modelo'] = $_POST["modelo"];
		$datos['marca'] = $_POST["marca"];


		$result = $this->mod_model->set_modac($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				"modelo"  =>$this->mod_model->datos(),
				"marca"   =>$this->mod_model->get_mar(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				"modelo"  =>$this->mod_model->datos(),
				"marca"   =>$this->mod_model->get_mar(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('mod_view',$data);
		$this->load->view('template/footer');

	} 
}
