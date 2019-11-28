<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equid_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('equid_model');
	}


	public function index()
	{
		$data = array(
			'title'    => 'Inventario USAM', 
			'equid'        => $this->equid_model->get_equid(), 
			'codigo'  		 => $this->equid_model->get_codigo(),
			'inm' 		 => $this->equid_model->get_inm(),
			'estado'      => $this->equid_model->get_estado());

		$this->load->view('template/header');
		$this->load->view('equid_view',$data);
		$this->load->view('template/footer');

	}

	public function eliminar($id){

		$this->equid_model->eliminar($id);
		redirect('equid_controller','refresh');
	}

	public function ingresar(){

		$datos['codigo']    = $_POST['codigo'];
		$datos['fecha']        = $_POST['fecha'];
		$datos['estado']       = $_POST['estado'];
		$datos['descripcion']  = $_POST['descripcion'];

		$result = $this->equid_model->set_equip($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'equid'        => $this->equid_model->get_equid(),
				'codigo'  		 => $this->equid_model->get_codigo(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('equid_view',$data);
			$this->load->view('template/footer');

		}

	}

	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'equid'        => $this->equid_model->get($id),
			'codigo'  		 => $this->equid_model->get_codigo(),
			'inm' 		 => $this->equid_model->get_inm(),
			'estado'      => $this->equid_model->get_estado());

		$this->load->view('template/header');
		$this->load->view('equid_viewAct',$data);
		$this->load->view('template/footer');

	}

	public function actualizar(){

		$datos['id']   	 = $_POST['id'];
		$datos['codigo']    = $_POST['codigo'];
		$datos['fecha']        = $_POST['fecha'];
		$datos['estado']       = $_POST['estado'];
		$datos['descripcion']  = $_POST['descripcion'];


		$result = $this->equid_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'equid'        => $this->equid_model->get_equid(),
				'codigo'  		 => $this->equid_model->get_codigo(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'equid'        => $this->equid_model->get_equid(),
				'codigo'  		 => $this->equid_model->get_codigo(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('equid_view',$data);
		$this->load->view('template/footer');

	} 


}
