<?php 
/**
 * 
 */
class Kegiatan extends CI_model
{
	
	public $table = 'kegiatan';
	public $id 	  = 'id_kegiatan';
	public $order ='DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_kegiatan(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('role_id',1);
		return $this->db->get('kegiatan');
	}
	public function tampil_kegiatan_home(){
		$this->db->limit(6);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('kegiatan');
	}
	public function semua_kegiatan(){
		$this->db->order_by('tanggal', 'asc');
		return $this->db->get('kegiatan')->result();
	}
	public function tambah_kegiatan_insidental($table,$data){
		$this->db->insert($table, $data);
		return TRUE;
	}
	public function ubah_kegiatan($where){
		$this->db->where($where);
		return $this->db->get('kegiatan');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function detail_kegiatan($id){
		$result = $this->db->where('id_kegiatan',$id)->get('kegiatan');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}

	public function tampil_data_rutin(){
		return $this->db->get($table);
	}
	public function tampil_kegiatan_rutin(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('role_id',2);
		return $this->db->get('kegiatan');
	}
	public function tampil_kegiatan_rutin_home(){
		$this->db->limit(6);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('kegiatan');
	}
	public function semua_kegiatan_rutin(){
		$this->db->order_by('tanggal', 'asc');
		return $this->db->get('kegiatan')->result();
	}
	public function tambah_kegiatan_rutin($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_kegiatan_rutin($where){
		$this->db->where($where);
		return $this->db->get('kegiatan');
	}
	public function simpan_data_rutin($where,$table,$data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data_rutin($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function detail_kegiatan_rutin($id){
		$result = $this->db->where('id_kegiatan',$id)->get('kegiatan');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}
	
	
}