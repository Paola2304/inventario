<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class encargado_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('encargado_model');
	}

	public function index(){

		$data = array(
			'title'    => 'Inventario USAM', 
			'encargado' =>  $this->encargado_model->get_encargado(),
			'sexo'      =>  $this->encargado_model->get_sexo(),
			'area'      =>  $this->encargado_model->get_area());

		$this->load->view('template/header');
		$this->load->view('encargado_view',$data);
		$this->load->view('template/footer');
	}

	public function eliminar($id){

		$this->encargado_model->eliminar($id);
		redirect('encargado_controller','refresh');

	}

	public function ingresar(){

		$datos['dui']       = $_POST['dui'];
		$datos['nombres']   = $_POST['nombres'];
		$datos['apellidos'] = $_POST['apellidos'];
		$datos['correo']    = $_POST['correo'];
		$datos['telefono']  = $_POST['telefono'];
		$datos['direccion'] = $_POST['direccion'];
		$datos['sexo']      = $_POST['sexo'];
		$datos['area']      = $_POST['area'];

		$result = $this->encargado_model->set_encargado($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'encargado' =>  $this->encargado_model->get_encargado(),
				'sexo'      =>  $this->encargado_model->get_sexo(),
				'area'      =>  $this->encargado_model->get_area(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('encargado_view',$data);
			$this->load->view('template/footer');

		}
	}


	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'encargado' =>  $this->encargado_model->get_datos($id),
			'sexo'      =>  $this->encargado_model->get_sexo(),
			'area'      =>  $this->encargado_model->get_area());

		$this->load->view('template/header');
		$this->load->view('encargado_viewact',$data);
		$this->load->view('template/footer');
	}

	public function actualizar(){

		$datos['id'] = $_POST['id'];
		$datos['nombres'] = $_POST['nombres'];
		$datos['apellidos'] = $_POST['apellidos'];
		$datos['correo'] = $_POST['correo'];
		$datos['telefono'] = $_POST['telefono'];
		$datos['direccion'] = $_POST['direccion'];
		$datos['sexo'] = $_POST['sexo'];
		$datos['area'] = $_POST['area'];

		$result = $this->encargado_model->set_encargadoAct($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'encargado' =>  $this->encargado_model->get_encargado(),
				'sexo'      =>  $this->encargado_model->get_sexo(),
				'area'      =>  $this->encargado_model->get_area(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'encargado' =>  $this->encargado_model->get_encargado(),
				'sexo'      =>  $this->encargado_model->get_sexo(),
				'area'      =>  $this->encargado_model->get_area(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('encargado_view',$data);
		$this->load->view('template/footer');

	}


	public function validarCorreo(){

		$res = $this->encargado_model->validarCorreo();
		echo json_encode($res);
	}
	
}
