<?php 

class Pengumuman extends CI_model
{
	
	public $table 	= 'pengumuman';
	public $id 		= 'id_pengumuman';
	public $order	= 'DESC';

	public function tampil_data(){
		return $this->db->get($table);
	}
	public function tampil_pengumuman_home(){
		$this->db->limit(6);
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('pengumuman');
		// return $this->db->query("select * from pengumuman limit 4");
	}
	public function tampil_pengumuman(){
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('pengumuman');
	}
	public function semua_pengumuman(){
		$this->db->order_by('tanggal', 'asc');
		return $this->db->get('pengumuman')->result();
	}
	public function tambah_data($table,$data){
		return $this->db->insert($table, $data);
	}
	public function ubah_pengumuman($where){
		$this->db->where($where);
		return $this->db->get('pengumuman');
	}
	public function simpan_data($where,$table,$data){
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function detail_pengumuman($id){
		$result = $this->db->where('id_pengumuman',$id)->get('pengumuman');
		if ($result->num_rows()>0) {
			return $result->result();
		}else{
			return false;
		}
	}
}