<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('equipo_model');
	}


	public function index()
	{
		$data = array(
			'title'    => 'Inventario USAM', 
			'equipo'  => $this->equipo_model->get_equipo(),
			'nombre'  => $this->equipo_model->get_usuario(),
			'inmobiliario'  => $this->equipo_model->get_inmobiliario(),
			'estado' => $this->equipo_model->get_estado());

		$this->load->view('template/header');
		$this->load->view('equipo_view',$data);
		$this->load->view('template/footer');

	}

	public function eliminar($id){

		$this->equipo_model->eliminar($id);
		redirect('equipo_controller','refresh');
	}

	public function ingresar(){

		$datos['nombre']       = $_POST['nombre'];
		$datos['categoria']    = $_POST['categoria'];
		$datos['f_recibido']   = $_POST['f_recibido'];
		$datos['f_salida']     = $_POST['f_salida'];
		$datos['estado']       = $_POST['estado'];

		$result = $this->equipo_model->set_equipo($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'equipo'  => $this->equipo_model->get_equipo(),
				'nombre'  => $this->equipo_model->get_usuario(),
				'inmobiliario'  => $this->equipo_model->get_inmobiliario(),
				'estado' => $this->equipo_model->get_estado(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('equipo_view',$data);
			$this->load->view('template/footer');

		}

	}

	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'equipo'  => $this->equipo_model->get_datos($id),
			'nombre'  => $this->equipo_model->get_usuario(),
			'inmobiliario'  => $this->equipo_model->get_inmobiliario(),
			'estado' => $this->equipo_model->get_estado(),);

		$this->load->view('template/header');
		$this->load->view('equipo_view_act',$data);
		$this->load->view('template/footer');

	}

	public function actualizar(){

		$datos['id_mant']      = $_POST['id_mant'];
		$datos['nombre']       = $_POST['nombre'];
		$datos['categoria']    = $_POST['categoria'];
		$datos['f_recibido']   = $_POST['f_recibido'];
		$datos['f_salida']     = $_POST['f_salida'];
		$datos['estado']       = $_POST['estado'];


		$result = $this->equipo_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'equipo'  => $this->equipo_model->get_equipo(),
				'nombre'  => $this->equipo_model->get_usuario(),
				'inmobiliario'  => $this->equipo_model->get_inmobiliario(),
				'estado' => $this->equipo_model->get_estado(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'equipo'  => $this->equipo_model->get_equipo(),
				'nombre'  => $this->equipo_model->get_usuario(),
				'inmobiliario'  => $this->equipo_model->get_inmobiliario(),
				'estado' => $this->equipo_model->get_estado(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('equipo_view',$data);
		$this->load->view('template/footer');

	} 


}
