<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marca_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('marca_model');
	}


	public function index()
	{
		$data = array(
			'title'    => 'Inventario USAM', 
			'marca'  => $this->marca_model->get_marca());

		$this->load->view('template/header');
		$this->load->view('marca_view',$data);
		$this->load->view('template/footer');

	}

	public function eliminar($id){

		$this->marca_model->eliminar($id);
		redirect('marca_controller','refresh');
	}

	public function ingresar(){

		$datos["marca"]  = $_POST["marca"];

		$result = $this->marca_model->set_marca($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'marca'  => $this->marca_model->get_marca(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('marca_view',$data);
			$this->load->view('template/footer');

		}

	}

	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'marcas'  => $this->marca_model->get_datos($id));

		$this->load->view('template/header');
		$this->load->view('marca_viewAct',$data);
		$this->load->view('template/footer');

	}

	public function actualizar(){

		$datos["id"]  = $_POST["id"];
		$datos["marca"]  = $_POST["marca"];


		$result = $this->marca_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'marca'  => $this->marca_model->get_marca(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'marca'  => $this->marca_model->get_marca(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('marca_view',$data);
		$this->load->view('template/footer');

	} 
}
