<?php 
/**
 * 
 */
class Imam extends CI_model
{
	
	public $table = 'imam';
	public $id 	= 'id_imam';
	public $order='DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_imam(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('imam');
	}
	public function tampil_imam_home(){
		$this->db->limit(4);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('imam');
	}
	public function semua_imam(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('imam')->result();
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_imam($where){
		$this->db->where($where);
		return $this->db->get('imam');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function detail_imam($id){
		$result = $this->db->where('id_imam',$id)->get('imam');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}
}