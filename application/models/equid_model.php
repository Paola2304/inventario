<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equid_model extends CI_Model {

	public function get_equid(){

		$this->db->select('e.id_danado,i.id_inmobiliario,o.modelo,m.marca,c.categoria,es.estado,i.codigo,e.fecha_ingreso,e.descripcion ');
		$this->db->from('equipo_danado e');
		$this->db->join('inmobiliario i','i.id_inmobiliario = e.id_inmobiliario');
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');		
		$this->db->join('modelo o','o.id_modelo = i.id_modelo');
		$this->db->join('marca m','m.id_marca = o.id_marca');
		$this->db->join('estado es','es.id_estado = i.id_estado');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_danado',$id);
		return ($this->db->delete('equipo_danado'));
	}

	public function get_inm(){	
		$this->db->select("i.id_inmobiliario,c.categoria");
		$this->db->from("inmobiliario i");
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');	
		$exe = $this->db->get();
		return $exe->result();
	}
	public function get_estado(){		
		$exe = $this->db->get('estado');
		return $exe->result();
	}


	public function get_codigo(){		
		$exe = $this->db->get('inmobiliario');
		return $exe->result();
	}


	public function set_equip($datos){

		$this->db->set('id_inmobiliario', $datos['codigo']);
		$this->db->set('fecha_ingreso',  $datos['fecha']);
		$this->db->set('descripcion',  $datos['descripcion']);
		$this->db->set('id_estado',      $datos['estado']);
		
		
		$this->db->insert('equipo_danado');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function get($id){

		$this->db->where('id_danado',$id);
		$exe = $this->db->get('equipo_danado');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('id_inmobiliario',         $datos['codigo']);
		$this->db->set('fecha_ingreso',  $datos['fecha']);
		$this->db->set('descripcion',  $datos['descripcion']);
		$this->db->set('id_estado',      $datos['estado']);
		$this->db->where('id_danado', $datos['id']);
		$this->db->update('equipo_danado');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
