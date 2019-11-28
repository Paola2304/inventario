<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mod_model extends CI_Model {

	public function datos(){

		$this->db->select("m.id_modelo,m.modelo,a.marca");
		$this->db->from("modelo m");
		$this->db->join("marca a","a.id_marca=m.id_marca");

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where("id_modelo",$id);
		return $this->db->delete("modelo");
	}

	public function get_mar(){
		$exe=$this->db->get("marca");
		return $exe->result();
	}


	public function set_mod($datos){

		$this->db->set("modelo",$datos["modelo"]);
		$this->db->set("id_marca",$datos["marca"]);
		$this->db->insert("modelo");

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function get_datos($id){

		$this->db->where("id_modelo",$id);
		$exe = $this->db->get("modelo");
		return $exe->result();
	}

	public function set_modac($datos){

		$this->db->set("modelo",$datos["modelo"]);
		$this->db->set("id_marca",$datos["marca"]);
		$this->db->where("id_modelo",$datos["id"]);
		$this->db->update("modelo");

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
