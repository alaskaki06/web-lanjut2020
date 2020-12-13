<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CModel extends CI_Model {

	
	public function getAll()
	{
		
		return $this->db->get('tabel_c')->result();
	}

	public function store($object)
	{
		
		return $this->db->insert('tabel_c',$object);
	}
}

 ?>