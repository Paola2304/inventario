<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asignacion_model extends CI_Model {

	public function get_asignacion(){

		$this->db->select('a.id_asignacion, en.nombres, en.apellidos, i.id_inmobiliario, o.modelo,m.marca,c.categoria, en.dui_enc, a.fecha_asig, e.estado');
		$this->db->from('asignacion a');
		$this->db->join('encargado en','en.id_enc = a.id_enc');
		$this->db->join('inmobiliario i','i.id_inmobiliario = a.id_inmobiliario');
		$this->db->join('modelo o','o.id_modelo = i.id_modelo');
		$this->db->join('marca m','m.id_marca = o.id_marca');
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');		
		$this->db->join('estado e','e.id_estado = i.id_estado');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_asignacion',$id);
		return ($this->db->delete('asignacion'));
	}

	public function get_inmobiliario(){
		$this->db->select('i.id_inmobiliario,o.modelo,m.marca,c.categoria,e.estado,i.codigo,i.fecha_ingreso,i.descripcion ');
		$this->db->from('inmobiliario i');
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');		
		$this->db->join('modelo o','o.id_modelo = i.id_modelo');
		$this->db->join('marca m','m.id_marca = o.id_marca');
		$this->db->join('estado e','e.id_estado = i.id_estado');
		$exe = $this->db->get();
		return $exe->result();
	}


	public function get_encargado(){		
		$exe = $this->db->get('encargado');
		return $exe->result();
	}

	public function get_estado(){		
		$exe = $this->db->get('estado');
		return $exe->result();
	}


	public function set_asignacion($datos){

		$this->db->set('id_inmobiliario',  $datos['categoria']);
		$this->db->set('id_enc',     	 $datos['id_enc']);
		$this->db->set('id_estado',     $datos['estado']);
		$this->db->set('fecha_asig',     $datos['fecha_asig']);
		$this->db->insert('asignacion');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function get_datos($id){

		$this->db->where('id_inmobiliario',$id);
		$exe = $this->db->get('inmobiliario');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('id_inmobiliario',     $datos['categoria']);
		$this->db->set('id_enc',     	 $datos['id_enc']);
		$this->db->set('id_estado',     $datos['estado']);
		$this->db->set('fecha_asig',     $datos['fecha_asig']);
		$this->db->where('id_asignacion', $datos['id_asignacion']);
		$this->db->update('asignacion');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

	
}
