<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

	public function get_usuario(){

		$this->db->select('u.id_usuario, u.nombre, u.apellido, u.direccion, u.telefono, u.dui, u.correo, u.usuario, r.rol, s.sexo');
		$this->db->from('usuario u');
		$this->db->join('rol r','r.id_rol = u.id_rol');
		$this->db->join('sexo s','s.id_sexo = u.id_sexo');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_usuario',$id);
		return ($this->db->delete('usuario'));
	}

	public function get_sexo(){

		$exe = $this->db->get('sexo');
		return $exe->result();
	}

	public function get_rol(){

		$exe = $this->db->get('rol');
		return $exe->result();
	}

	public function set_usuario($datos){

		$this->db->set('nombre',$datos["nombre"]);
		$this->db->set('apellido',$datos["apellido"]);
		$this->db->set('direccion',$datos["direccion"]);
		$this->db->set('telefono',$datos["telefono"]);
		$this->db->set('dui',$datos["dui"]);
		$this->db->set('correo',$datos["correo"]);
		$this->db->set('usuario',$datos["usuario"]);
		$this->db->set('clave',$datos["clave1"]);
		$this->db->set('id_rol',$datos["rol"]);
		$this->db->set('id_sexo',$datos["sexo"]);
		$this->db->insert('usuario');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}

	}


	public function get_datos($id){

		$this->db->where('id_usuario',$id);
		$exe = $this->db->get('usuario');
		return $exe->result();

	}

	public function actualizar($datos){

		$this->db->set('nombre',$datos["nombre"]);
		$this->db->set('apellido',$datos["apellido"]);
		$this->db->set('direccion',$datos["direccion"]);
		$this->db->set('telefono',$datos["telefono"]);
		$this->db->set('correo',$datos["correo"]);
		$this->db->set('usuario',$datos["usuario"]);
		$this->db->set('id_rol',$datos["rol"]);
		$this->db->set('id_sexo',$datos["sexo"]);
		$this->db->where('id_usuario',$datos["id"]);
		$this->db->update('usuario');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function validarUsuario(){

		$usuario = $this->input->post('usuario');
		$this->db->where('usuario',$usuario);
		$this->db->get('usuario');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function validarCorreo(){

		$correo = $this->input->post('correo');
		$this->db->where('correo',$correo);
		$this->db->get('usuario');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}
