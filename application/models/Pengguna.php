<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Pengguna extends CI_Model{

	public function login($post){
		$this->db->from('pengguna');
		$this->db->where('nama', $post['nama']);
		$this->db->where('pass', $post['pass']);
		return $this->db->get();
	}
	public function ambil_data($id){
		$this->db->whare('nama',$id);
		return $this->db->get('nama')->row();
	}
	// public function hitung_data($tabel){
	// 	$query = $this->db->get($tabel);
	// 	if($query->num_rows() > 0){
	// 		return $query->num_rows();
	// 	} else{
	// 		return 0;
	// 	}
	// }

} 