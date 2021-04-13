<?php 

class Keuangan_bulanan extends CI_model
{
	
	public $table 	= 'keuangan_bulanan';
	public $id 		= 'id_keuangan_bulanan';
	public $order	='DESC';

	public function tampil_data(){
		
		return $this->db->get($table);
	}
	public function tampil_bulanan(){
		return $this->db->query("select * from keuangan_bulanan");
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_bulanan($where){
		$this->db->where($where);
		return $this->db->get('keuangan_bulanan');
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