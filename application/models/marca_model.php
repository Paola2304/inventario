<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marca_model extends CI_Model {

	public function get_marca(){

		$this->db->select('m.id_marca, m.marca');
		$this->db->from('marca m');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_marca',$id);
		return ($this->db->delete('marca'));
	}


	public function set_marca($datos){

		$this->db->set('marca',$datos["marca"]);
		$this->db->insert('marca');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

	public function get_datos($id){

		$this->db->where('id_marca',$id);
		$exe = $this->db->get('marca');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('marca',$datos["marca"]);
		$this->db->where('id_marca',$datos["id"]);
		$this->db->update('marca');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
