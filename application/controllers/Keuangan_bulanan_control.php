 <?php  

 class Keuangan_bulanan_control extends CI_controller{

 	public function index(){
 		$data['keuangan_bulanan'] = $this->Keuangan_bulanan->tampil_data()->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/keuangan_bulanan',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['keuangan_bulanan'] = $this->Keuangan_bulanan->tampil_data('keuangan_bulanan')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/keuangan_bulanan',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_bulanan (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_keuangan_bulanan');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_bulanan (){
 		$id = $this->uri->segment(3);
 		$where=array('id_bulanan'=>$id);
 		$data['keuangan_bulanan'] = $this->Keuangan_bulanan->ubah_bulanan($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_keuangan_bulanan',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_bulanan_aksi(){
 		$this->form_validation->set_rules('keterangan_bulanan', 'Keterangan', 'trim|required');
 		$this->form_validation->set_rules('debit_bulanan', 'Debit bulanan', 'trim|required');
 		$this->form_validation->set_rules('kredit_bulanan', 'Kredit bulanan', 'trim|required');
 		$this->form_validation->set_rules('tanggal_bulanan', 'Tanggal', 'trim|required');

 		if($this->form_validation->run()==FALSE){

 			$this->tambah_bulanan();
 		}else{
 		
 			$keterangan_bulanan 			= $this->input->post('keterangan_bulanan');
 			$debit_bulanan 					= $this->input->post('debit_bulanan');
 			$kredit_bulanan 				= $this->input->post('kredit_bulanan');
 			$tanggal_bulanan 				= $this->input->post('tanggal_bulanan');
 			$role_id 						= $this->input->post('Jenis_keuangan');

 			$data = array(
 				'keterangan' 				=>  $keterangan_bulanan,
 				'debit_bulanan' 			=> 	$debit_bulanan,
 				'tanggal' 					=> $tanggal_bulanan,
 				'kredit_bulanan' 			=> 	$kredit_bulanan,
 				'role_id'					=>	$role_id
 			);
 			$this->Keuangan_bulanan->tambah_data('keuangan_bulanan', $data);
 			$this->session->set_flashdata('pesan', 'Data Tersimpan!');
 			redirect('admin/Keuangan_bulanan_v');
 		}
}
 		public function ubah_bulanan_aksi(){
 			$id = $this->uri->segment(3);
 			$keterangan_bulanan 			= $this->input->post('keterangan_bulanan');
 			$debit_bulanan 					= $this->input->post('debit_bulanan');
 			$kredit_bulanan 				= $this->input->post('kredit_bulanan');
 			$tanggal_bulanan 				= $this->input->post('tanggal_bulanan');

 			$data = array(
 				'keterangan' 	 			=>  $keterangan_bulanan,
 				'debit_bulanan' 			=> 	$debit_bulanan,
 				'tanggal' 					=> $tanggal_bulanan,
 				'Kredit_bulanan' 			=> 	$kredit_bulanan,
 			);
 			$where = array ('id_bulanan'=>$id);
 			$this->Keuangan_bulanan->simpan_data($where,'keuangan_bulanan', $data);
 			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 			redirect('admin/Keuangan_bulanan_v');
 		}
 		public function hapus_bulanan_aksi(){
 			$id = $this->uri->segment(3);
 			$where = array('id_bulanan' => $id);
 			$this->Keuangan_bulanan->hapus_data($where, 'keuangan_bulanan');
 			$this->session->set_flashdata('pesan', 'Data Terhapus!');
 			redirect('admin/Keuangan_bulanan_v');
 		}
 		
 	} 	