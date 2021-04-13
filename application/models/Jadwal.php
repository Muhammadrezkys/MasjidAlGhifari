<?php 
/**
 * 
 */
class Jadwal extends CI_model
{
	
	public $table = 'jadwal';
	public $id 	= 'id_jadwal';
	public $order='DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_jadwal(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('jadwal');
	}
	public function tampil_jadwal_home(){
		$this->db->limit(4);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('jadwal');
	}
	public function semua_jadwal(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('jadwal')->result();
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_jadwal($where){
		$this->db->where($where);
		return $this->db->get('jadwal');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function detail_jadwal($id){
		$result = $this->db->where('id_jadwal',$id)->get('jadwal');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}
}