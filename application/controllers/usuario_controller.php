<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('usuario_model');
	}

	public function index(){

		$data = array(
			'title'    => 'Inventario USAM', 
			'usuario'  => $this->usuario_model->get_usuario(),
			'sexo'     => $this->usuario_model->get_sexo(),
			'rol'      => $this->usuario_model->get_rol());

		$this->load->view('template/header');
		$this->load->view('usuario_view',$data);
		$this->load->view('template/footer');
	}

	public function eliminar($id){

		$this->usuario_model->eliminar($id);
		redirect('usuario_controller','refresh');

	}

	public function ingresar(){

		$datos["dui"] = $_POST["dui"];
		$datos["nombre"] = $_POST["nombre"];
		$datos["apellido"] = $_POST["apellido"];
		$datos["sexo"] = $_POST["sexo"];
		$datos["direccion"] = $_POST["direccion"];
		$datos["telefono"] = $_POST["telefono"];
		$datos["correo"] = $_POST["correo"];
		$datos["usuario"] = $_POST["usuario"];
		$datos["clave1"] = md5($_POST["clave1"]);
		$datos["rol"] = $_POST["rol"];

		$result = $this->usuario_model->set_usuario($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'usuario'  => $this->usuario_model->get_usuario(),
				'sexo'     => $this->usuario_model->get_sexo(),
				'rol'      => $this->usuario_model->get_rol(),
				'msj'     => "success");

			$this->load->view('template/header');
			$this->load->view('usuario_view',$data);
			$this->load->view('template/footer');

		}
	}


	public function get_datos($id){

		$data = array(
			'title'    => 'Inventario USAM', 
			'usuario'  => $this->usuario_model->get_datos($id),
			'sexo'     => $this->usuario_model->get_sexo(),
			'rol'      => $this->usuario_model->get_rol());

		$this->load->view('template/header');
		$this->load->view('usuario_viewAct',$data);
		$this->load->view('template/footer');
	}

	public function actualizar(){

		$datos["id"] = $_POST["id"];
		$datos["nombre"] = $_POST["nombre"];
		$datos["apellido"] = $_POST["apellido"];
		$datos["sexo"] = $_POST["sexo"];
		$datos["direccion"] = $_POST["direccion"];
		$datos["telefono"] = $_POST["telefono"];
		$datos["correo"] = $_POST["correo"];
		$datos["usuario"] = $_POST["usuario"];
		$datos["rol"] = $_POST["rol"];

		$result = $this->usuario_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'    => 'Inventario USAM', 
				'usuario'  => $this->usuario_model->get_usuario(),
				'sexo'     => $this->usuario_model->get_sexo(),
				'rol'      => $this->usuario_model->get_rol(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => 'Inventario USAM', 
				'usuario'  => $this->usuario_model->get_usuario(),
				'sexo'     => $this->usuario_model->get_sexo(),
				'rol'      => $this->usuario_model->get_rol(),
				'msj'     => "ErrorM");

		}

		$this->load->view('template/header');
		$this->load->view('usuario_view',$data);
		$this->load->view('template/footer');

	}


	public function validarUsuario(){

		$res = $this->usuario_model->validarUsuario();
		echo json_encode($res);
	}


	public function validarCorreo(){

		$res = $this->usuario_model->validarCorreo();
		echo json_encode($res);
	}
}
