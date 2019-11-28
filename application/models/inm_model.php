<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inm_model extends CI_Model {

	public function get_inm(){

		$this->db->select('i.id_inmobiliario,o.modelo,m.marca,c.categoria,e.estado,i.codigo,i.fecha_ingreso,i.descripcion ');
		$this->db->from('inmobiliario i');
		$this->db->join('categoria c','c.id_categoria = i.id_categoria');		
		$this->db->join('modelo o','o.id_modelo = i.id_modelo');
		$this->db->join('marca m','m.id_marca = o.id_marca');
		$this->db->join('estado e','e.id_estado = i.id_estado');

		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_inmobiliario',$id);
		return ($this->db->delete('inmobiliario'));
	}

	public function get_modelo(){		
		$exe = $this->db->get('modelo');
		return $exe->result();
	}
	public function get_estado(){		
		$exe = $this->db->get('estado');
		return $exe->result();
	}

	public function get_categoria(){		
		$exe = $this->db->get('categoria');

		return $exe->result();
	}

	public function get_marca(){		
		$exe = $this->db->get('marca');
		
		return $exe->result();
	}


	public function set_inm($datos){

		$this->db->set('id_categoria',         $datos['categoria']);
		$this->db->set('id_modelo',       $datos['modelo']);
		$this->db->set('codigo',   $datos['codigo']);
		$this->db->set('id_estado',      $datos['estado']);
		$this->db->set('fecha_ingreso',  $datos['fecha']);
		$this->db->set('descripcion',  $datos['descripcion']);
		
		
		$this->db->insert('inmobiliario');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function get($id){

		$this->db->where('id_inmobiliario',$id);
		$exe = $this->db->get('inmobiliario');
		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('id_categoria',         $datos['categoria']);
		$this->db->set('id_modelo',       $datos['modelo']);
		$this->db->set('codigo',   $datos['codigo']);
		$this->db->set('id_estado',      $datos['estado']);
		$this->db->set('fecha_ingreso',  $datos['fecha']);
		$this->db->set('descripcion',  $datos['descripcion']);
		$this->db->where('id_inmobiliario', $datos['id']);
		$this->db->update('inmobiliario');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}


	public function validarCodigo(){

		$codigo = $this->input->post('codigo');
		$this->db->where('codigo',$codigo);
		$this->db->get('inmobiliario');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}
