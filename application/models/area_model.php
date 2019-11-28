<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class area_model extends CI_Model {

	public function get_area(){

		$this->db->select('id_area,area');
		$this->db->from('area');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_area',$id);
		return ($this->db->delete('area'));
	}


	public function set_area($datos){

		$this->db->set('area',$datos["area"]);
		$this->db->insert('area');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

	public function get_datos($id){

		$this->db->where('id_area',$id);
		$exe = $this->db->get('area');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('area',$datos["area"]);
		$this->db->where('id_area',$datos["id_area"]);
		$this->db->update('area');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
