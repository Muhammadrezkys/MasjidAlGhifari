<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Model {
	
	
	public $id 		= 'id_foto';
	public $table = 'foto';

	public function tambah_foto($data)
	{
		return $this->db->insert('foto', $data);
	}

	public function tampil_foto()
	{
		return $this->db->get('foto');
	}
	public function ubah_foto($where){
		$this->db->where($where);
		return $this->db->get('foto');
	}
	public function hapus_data($where ){
		$this->db->where($where);
		return $this->db->delete('foto');
	}

}

