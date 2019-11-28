<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo_model extends CI_Model {

	public function get_equipo(){

		$this->db->select('e.id_mant, u.nombre, u.apellido, i.id_inmobiliario, o.modelo, m.marca, c.categoria, e.f_recibido, e.f_salida, es.estado');
		$this->db->from('equipo_mant e');
		$this->db->join('usuario u','u.id_usuario = e.id_usuario');
		$this->db->join('inmobiliario i','i.id_inmobiliario = e.id_inmobiliario');
		$this->db->join('modelo o','o.id_modelo = i.id_modelo');
		$this->db->join('marca m','m.id_marca = o.id_marca');
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');
		$this->db->join('estado es','es.id_estado = e.id_estado');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_mant',$id);
		return ($this->db->delete('equipo_mant'));
	}

	public function get_usuario(){
		$exe = $this->db->get('usuario');
		return $exe->result();
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



	public function get_estado(){
		$exe = $this->db->get('estado');
		return $exe->result();
	}


	public function set_equipo($datos){

		$this->db->set('id_usuario',     	 $datos['nombre']);
		$this->db->set('id_inmobiliario',   $datos['categoria']);
		$this->db->set('f_recibido',     $datos['f_recibido']);
		$this->db->set('f_salida',       $datos['f_salida']);
		$this->db->set('id_estado',     $datos['estado']);
		$this->db->insert('equipo_mant');
		

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function get_datos($id){

		$this->db->where('id_mant',$id);
		$exe = $this->db->get('equipo_mant');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('id_usuario',     	 $datos['nombre']);
		$this->db->set('id_inmobiliario',   $datos['categoria']);
		$this->db->set('f_recibido',     $datos['f_recibido']);
		$this->db->set('f_salida',       $datos['f_salida']);
		$this->db->set('id_estado',     $datos['estado']);
		$this->db->where('id_mant', 	 $datos['id_mant']);
		$this->db->update('equipo_mant');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
