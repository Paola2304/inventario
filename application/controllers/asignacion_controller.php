<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asignacion_controller extends CI_Controller{

	public function __construct(){ 
		parent :: __construct();
		$this->load->model('asignacion_model');
	}

	public function index(){
		$data = array(
			'title'   => 'Equipo || Asignacion', 
			'asignacion'  => $this->asignacion_model->get_asignacion(),
			'inmobiliario'  => $this->asignacion_model->get_inmobiliario(),
			'encargado'  => $this->asignacion_model->get_encargado(),
			'estado' => $this->asignacion_model->get_estado());

		$this->load->view('template/header',$data);
		$this->load->view('asignacion_view');
		$this->load->view('template/footer');
	}

	public function ingresar(){
		$datos['categoria']    = $_POST['categoria'];
		$datos['id_enc']      = $_POST['id_enc'];
		$datos['estado']       = $_POST['estado'];
		$datos['fecha_asig'] = $_POST['fecha_asig'];
		$this->asignacion_model->set_asignacion($datos);
		redirect('/asignacion_controller/index','refresh');
	}

	public function eliminar($id){
		$this->asignacion_model->eliminar($id);
		redirect('/asignacion_controller/index','refresh');
	}

	public function get_datos($id){
		$data = array(
			'title'   => 'Equipo || Asignacion', 
			'asignacion'  => $this->asignacion_model->get_datos($id),
			'inmobiliario'  => $this->asignacion_model->get_inmobiliario(),
			'encargado'  => $this->asignacion_model->get_encargado(),
			'estado' => $this->asignacion_model->get_estado());

		$this->load->view('template/header',$data);
		$this->load->view('asignacion_view_act');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		$datos['id_asignacion'] = $_POST['id_asignacion'];
		$datos['categoria']    = $_POST['categoria'];
		$datos['id_enc']      = $_POST['id_enc'];
		$datos['estado']       = $_POST['estado'];
		$datos['fecha_asig'] = $_POST['fecha_asig'];
		$this->asignacion_model->actualizar($datos);

		redirect('/asignacion_controller/index','refresh');

	}
}

