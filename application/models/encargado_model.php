<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class encargado_model extends CI_Model {

	public function get_encargado(){

		$this->db->select('e.id_enc,e.dui_enc,e.nombres,e.apellidos,e.correo,e.telefono,e.direccion,s.sexo,area');
		$this->db->from('encargado e');
		$this->db->join('sexo s','s.id_sexo=e.id_sexo');
		$this->db->join('area a','a.id_area=e.id_area');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_enc',$id);
		return ($this->db->delete('encargado'));
	}

	public function get_sexo(){

		$exe = $this->db->get('sexo');
		return $exe->result();
	}

	public function get_area(){

		$exe = $this->db->get('area');
		return $exe->result();
	}

	public function set_encargado($datos){

		$this->db->set('dui_enc',$datos['dui']);
		$this->db->set('nombres',$datos['nombres']);
		$this->db->set('apellidos',$datos['apellidos']);
		$this->db->set('correo',$datos['correo']);
		$this->db->set('telefono',$datos['telefono']);
		$this->db->set('direccion',$datos['direccion']);
		$this->db->set('id_sexo',$datos['sexo']);
		$this->db->set('id_area',$datos['area']);
		$this->db->insert('encargado');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}

	}


	public function get_datos($id){

		$this->db->where('id_enc',$id);
		$exe = $this->db->get('encargado');
		return $exe->result();

	}

	public function set_encargadoAct($datos){

		$this->db->set('nombres',$datos['nombres']);
		$this->db->set('apellidos',$datos['apellidos']);
		$this->db->set('correo',$datos['correo']);
		$this->db->set('telefono',$datos['telefono']);
		$this->db->set('direccion',$datos['direccion']);
		$this->db->set('id_sexo',$datos['sexo']);
		$this->db->set('id_area',$datos['area']);
		$this->db->where('id_enc',$datos['id']);
		$this->db->update('encargado');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function validarCorreo(){

		$correo = $this->input->post('correo');
		$this->db->where('correo',$correo);
		$this->db->get('encargado');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}
