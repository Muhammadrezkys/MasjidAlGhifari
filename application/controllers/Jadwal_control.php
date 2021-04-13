 <?php  

 class Jadwal_control extends CI_controller{

 	public function index(){
 		$data['jadwal'] = $this->Jadwal->tampil_data('jadwal')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/jadwal',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['jadwal'] = $this->Jadwal->tampil_data('jadwal')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/jadwal',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_jadwal (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_jadwal');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_jadwal (){
 		$id = $this->uri->segment(3);
 		$where=array('id_jadwal'=>$id);
 		$data['jadwal'] = $this->Jadwal->ubah_jadwal($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_jadwal',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_jadwal_aksi(){
 		$this->form_validation->set_rules('tanggal_jadwal', 'Tanggal jadwal', 'trim|required');
 		$this->form_validation->set_rules('jadwal_subuh', 'jadwal Subuh', 'trim|required');
 		$this->form_validation->set_rules('jadwal_zuhur', 'jadwal Zuhur', 'trim|required');
 		$this->form_validation->set_rules('jadwal_asar', 'jadwal Asar', 'trim|required');
 		$this->form_validation->set_rules('jadwal_magrib', 'jadwal Magrib', 'trim|required');
 		$this->form_validation->set_rules('jadwal_isya', 'jadwal Isya', 'trim|required');

 		if($this->form_validation->run()==FALSE){
 			$this->tambah_jadwal();
 		}else{

 			$tanggal_jadwal 			= $this->input->post('tanggal_jadwal');
 			$jadwal_subuh 				= $this->input->post('jadwal_subuh');
 			$jadwal_zuhur 				= $this->input->post('jadwal_zuhur');
 			$jadwal_asar 				= $this->input->post('jadwal_asar');
 			$jadwal_magrib 				= $this->input->post('jadwal_magrib');
 			$jadwal_isya				= $this->input->post('jadwal_isya');

 			$data = array(
 				'tanggal' 				=>  $tanggal_jadwal,
 				'jadwal_subuh ' 		=> 	$jadwal_subuh,
 				'jadwal_zuhur' 			=> 	$jadwal_zuhur,
 				'jadwal_asar' 			=> 	$jadwal_asar,
 				'jadwal_magrib' 		=> 	$jadwal_magrib,
 				'jadwal_isya' 			=> 	$jadwal_isya

 			);
 			$this->Jadwal->tambah_data('jadwal', $data);
 			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 			redirect('admin/Jadwal_v');
 		// } else {
 		// 	$post['gambar_artikel'] = null;
 		// 	$judul_artikel 			= $this->input->post('judul_artikel');
 		// 	$isi_artikel 			= $this->input->post('isi_artikel');
 		// 	$tanggal_artikel 		= $this->input->post('tanggal_artikel');

 		// 	$data = array(
 		// 		'judul_artikel' 	 =>  $judul_artikel,
 		// 		'isi_artikel' 		=> 	$isi_artikel,
 		// 		'gambar'			=>	$gambar_artikel,
 		// 		'tanggal' 			=> $tanggal_artikel,
 		// 	);
 		// 	$this->artikel_model->tambah_data('artikel', $data);
 		// 	$this->session->set_flashdata('pesan', 'Data Tersimpan!');
 		// 	redirect('admin/artikel');
 		// }
 		}
 	}
 	public function ubah_jadwal_aksi(){
 		$id = $this->uri->segment(3);
 		$tanggal_jadwal 			= $this->input->post('tanggal_jadwal');
 		$jadwal_subuh				= $this->input->post('jadwal_subuh');
 		$jadwal_zuhur 				= $this->input->post('jadwal_zuhur');
 		$jadwal_asar 				= $this->input->post('jadwal_asar');
 		$jadwal_magrib 				= $this->input->post('jadwal_magrib');
 		$jadwal_isya 				= $this->input->post('jadwal_isya');

 		$data = array(
 			'tanggal' 			=>  $tanggal_jadwal,
 			'jadwal_subuh' 		=> 	$jadwal_subuh,
 			'jadwal_zuhur' 		=> 	$jadwal_zuhur,
 			'jadwal_asar' 		=> 	$jadwal_asar,
 			'jadwal_magrib' 	=> 	$jadwal_magrib,
 			'jadwal_isya' 		=> 	$jadwal_isya,
 		);
 		$where = array ('id_jadwal'=>$id);
 		$this->Jadwal->simpan_data($where,'jadwal', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('admin/Jadwal_v');
 	}
 	public function hapus_jadwal_aksi(){
 		$id = $this->uri->segment(3);
 		$where = array('id_jadwal' => $id);
 		$this->Jadwal->hapus_data($where, 'jadwal');
 		$this->session->set_flashdata('pesan', 'Data Terhapus!');
 		redirect('admin/Jadwal_v');
 	}
 	public function detail_jadwal(){
 		$id = $this->uri->segment(3);
 		$data['jadwal'] = $this->Jadwal->detail_jadwal($id);
 		$this->load->view('default/Header');
 		$this->load->view('detail_jadwal',$data);
 		$this->load->view('default/Footer');
 	}
 	public function semua_jadwal(){
 		$data['jadwal'] = $this->Jadwal->semua_jadwal();
 		$this->load->view('default/Header');
 		$this->load->view('jadwal_lainnya',$data);
 		$this->load->view('default/Footer');
 	}
 } 	