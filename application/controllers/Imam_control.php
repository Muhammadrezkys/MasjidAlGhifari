 <?php  

 class Imam_control extends CI_controller{

 	public function index(){
 		$data['imam'] = $this->Imam->tampil_data('imam')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Imam_v',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['imam'] = $this->Imam->tampil_data('imam')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Imam_v',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_imam (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_imam');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_imam (){
 		$id = $this->uri->segment(3);
 		$where=array('id_imam'=>$id);
 		$data['imam'] = $this->Imam->ubah_imam($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_imam',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_imam_aksi(){
 		$this->form_validation->set_rules('tanggal_imam', 'Tanggal Imam', 'trim|required');
 		$this->form_validation->set_rules('imam_subuh', 'Imam Subuh', 'trim|required');
 		$this->form_validation->set_rules('imam_zuhur', 'Imam Zuhur', 'trim|required');
 		$this->form_validation->set_rules('imam_asar', 'Imam Asar', 'trim|required');
 		$this->form_validation->set_rules('imam_magrib', 'Imam Magrib', 'trim|required');
 		$this->form_validation->set_rules('imam_isya', 'Imam Isya', 'trim|required');

 		if($this->form_validation->run()==FALSE){
 			$this->tambah_imam();
 		}else{

 			$tanggal_imam 				= $this->input->post('tanggal_imam');
 			$imam_subuh 				= $this->input->post('imam_subuh');
 			$imam_zuhur 				= $this->input->post('imam_zuhur');
 			$imam_asar 					= $this->input->post('imam_asar');
 			$imam_magrib 				= $this->input->post('imam_magrib');
 			$imam_isya					= $this->input->post('imam_isya');

 			$data = array(
 				'tanggal' 				=>  $tanggal_imam,
 				'imam_subuh ' 			=> 	$imam_subuh,
 				'imam_zuhur' 			=> 	$imam_zuhur,
 				'imam_asar' 			=> 	$imam_asar,
 				'imam_magrib' 			=> 	$imam_magrib,
 				'imam_isya' 			=> 	$imam_isya

 			);
 			$this->Imam->tambah_data('imam', $data);
 			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 			redirect('admin/Imam_v');
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
 	public function ubah_imam_aksi(){
 		$id = $this->uri->segment(3);
 		$tanggal_imam 			= $this->input->post('tanggal_imam');
 		$imam_subuh				= $this->input->post('imam_subuh');
 		$imam_zuhur 			= $this->input->post('imam_zuhur');
 		$imam_asar 				= $this->input->post('imam_asar');
 		$imam_magrib 			= $this->input->post('imam_magrib');
 		$imam_isya 				= $this->input->post('imam_isya');

 		$data = array(
 			'tanggal' 			=>  $tanggal_imam,
 			'imam_subuh' 		=> 	$imam_subuh,
 			'imam_zuhur' 		=> 	$imam_zuhur,
 			'imam_asar' 		=> 	$imam_asar,
 			'imam_magrib' 		=> 	$imam_magrib,
 			'imam_isya' 		=> 	$imam_isya,
 		);
 		$where = array ('id_imam'=>$id);
 		$this->Imam->simpan_data($where,'imam', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('admin/Imam_v');
 	}
 	public function hapus_imam_aksi(){
 		$id = $this->uri->segment(3);
 		$where = array('id_imam' => $id);
 		$this->Imam->hapus_data($where, 'imam');
 		$this->session->set_flashdata('pesan', 'Data Terhapus!');
 		redirect('admin/Imam_v');
 	}
 	public function detail_imam(){
 		$id = $this->uri->segment(3);
 		$data['imam'] = $this->Imam->detail_imam($id);
 		$this->load->view('default/Header');
 		$this->load->view('detail_imam',$data);
 		$this->load->view('default/Footer');
 	}
 	public function semua_imam(){
 		$data['imam'] = $this->Imam->semua_imam();
 		$this->load->view('default/Header');
 		$this->load->view('imam_lainnya',$data);
 		$this->load->view('default/Footer');
 	}
 } 	