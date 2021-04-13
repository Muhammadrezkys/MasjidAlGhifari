 <?php  

 class Keuangan_harian_control extends CI_controller{

 	public function index(){
 		$data['keuangan_harian'] = $this->Keuangan_harian->tampil_data('keuangan_harian')->result();
 		// $data['keuangan_harian'] = $this->db->get('keuangan_harian')->result();
 		$this->load->view('Keuangan_harian_v', $data);
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/keuangan_harian',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['keuangan_harian'] = $this->Keuangan_harian->tampil_data('keuangan_harian')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/keuangan_harian',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_harian (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_keuangan_harian');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_harian (){
 		$id = $this->uri->segment(3);
 		$where=array('id_harian'=>$id);
 		$data['keuangan_harian'] = $this->Keuangan_harian->ubah_harian($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_keuangan_harian',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_harian_aksi(){
 		$this->form_validation->set_rules('keterangan_harian', 'Keterangan', 'trim|required');
 		$this->form_validation->set_rules('debit_harian', 'Debit harian', 'trim|required');
 		$this->form_validation->set_rules('kredit_harian', 'Kredit harian', 'trim|required');
 		$this->form_validation->set_rules('tanggal_harian', 'harian', 'trim|required');

 		if($this->form_validation->run()==FALSE){
 			$this->tambah_harian();
 		}else{
 		
 			$keterangan_harian 			= $this->input->post('keterangan_harian');
 			$debit_harian 				= $this->input->post('debit_harian');
 			$kredit_harian 				= $this->input->post('kredit_harian');
 			$tanggal_harian 			= $this->input->post('tanggal_harian');

 			$data = array(
 				'keterangan_harian' 	=>  $keterangan_harian,
 				'debit_harian' 			=> 	$debit_harian,
 				'tanggal' 				=> $tanggal_harian,
 				'kredit_harian' 		=> 	$kredit_harian
 			);
 			$this->Keuangan_harian->tambah_data('keuangan_harian', $data);
 			$this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
 			redirect('admin/Keuangan_harian_v');
 		}
}
 		public function ubah_harian_aksi(){
 			$id = $this->uri->segment(3);
 			$keterangan_harian 		= $this->input->post('keterangan_harian');
 			$debit_harian 			= $this->input->post('debit_harian');
 			$kredit_harian 			= $this->input->post('kredit_harian');
 			$tanggal_harian 		= $this->input->post('tanggal_harian');

 			$data = array(
 				'keterangan_harian' 	 =>  $keterangan_harian,
 				'debit_harian' 			=> 	$debit_harian,
 				'tanggal' 				=> $tanggal_harian,
 				'kredit_harian' 		=> 	$kredit_harian,
 			);
 			$where = array ('id_harian'=>$id);
 			$this->Keuangan_harian->simpan_data($where,'keuangan_harian', $data);
 			$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 			redirect('admin/Keuangan_harian_v');
 		}
 		public function hapus_harian_aksi(){
 			$id = $this->uri->segment(3);
 			$where = array('id_harian' => $id);
 			$this->Keuangan_harian->hapus_data($where, 'keuangan_harian');
 			$this->session->set_flashdata('pesan', 'Data Terhapus!');
 			redirect('admin/Keuangan_harian_v');
 		}

 		// public function filter(){
 		// 	// $data['keuangan_harian'] = $this->Keuangan_harian->tampil_data('keuangan_harian')->result();
 		// 	$awal= $this->input->post('tgl_awal');
 		// 	$akhir= $this->input->post('tgl_akhir');
 		// 	$data['keuangan_harian'] = $this->db->get_where('keuangan_harian', array('tanggal>=' => $awal, 'tanggal<=' => $akhir))->result();
 		// 	$this->load->view('admin/default1/header');
 		// 	$this->load->view('admin/default1/sitebar');
 		// 	$this->load->view('admin/Keuangan_harian_v');
 		// 	$this->load->view('admin/default1/footer');
 			

 		// }
 		
 	} 	