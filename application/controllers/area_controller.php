<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class area_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('area_model');
	}


	public function index()
	{
		$data = array(
			'title'    => 'Inventario USAM', 
			'area'  => $this->area_model->get_area());

		$this->load->view('template/header');
		$this->load->view('area_view',$data);
		$this->load->view('template/footer');

	}

	public function eliminar($id){

		$this->area_model->eliminar($id);
		redirect('area_controller','refresh');
	}

	public function ingresar(){

		$datos["area"]  = $_POST["area"];

		$result = $this->area_model->set_area($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'area'  => $this->area_model->get_area(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('area_view',$data);
			$this->load->view('template/footer');

		}

	}

	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'area'  => $this->area_model->get_datos($id));

		$this->load->view('template/header');
		$this->load->view('area_viewact',$data);
		$this->load->view('template/footer');

	}

	public function actualizar(){

		$datos["id_area"]  = $_POST["id_area"];
		$datos["area"]  = $_POST["area"];


		$result = $this->area_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'area'  => $this->area_model->get_area(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'area'  => $this->area_model->get_area(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('area_view',$data);
		$this->load->view('template/footer');

	} 
}
