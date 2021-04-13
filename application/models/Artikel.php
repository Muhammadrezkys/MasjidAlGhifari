<?php 
/**
 * 
 */
class Artikel extends CI_model
{
	
	public $table = 'artikel';
	public $id 	= 'id_artikel';
	public $order='DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_artikel(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('artikel');
	}
	public function tampil_artikel_home(){
		$this->db->limit(6);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('artikel');
	}
	public function semua_artikel(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('artikel')->result();
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_artikel($where){
		$this->db->where($where);
		return $this->db->get('artikel');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function detail_artikel($id){
		$result = $this->db->where('id_artikel',$id)->get('artikel');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}
}