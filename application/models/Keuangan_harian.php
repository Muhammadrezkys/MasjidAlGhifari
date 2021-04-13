<?php 

class Keuangan_harian extends CI_model
{
	
	public $table 	= 'keuangan_harian';
	public $id 		= 'id_harian';
	public $order	='DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_harian(){
		$this->db->order_by('tanggal','desc');
		return $this->db->query("select * from keuangan_harian");
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_harian($where){
		$this->db->where($where);
		return $this->db->get('keuangan_harian');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}
	
}