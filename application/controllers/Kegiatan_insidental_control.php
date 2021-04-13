 <?php  

 class Kegiatan_insidental_control extends CI_controller{

 	public function index(){
 		$data['kegiatan'] = $this->Kegiatan->tampil_data('kegiatan')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Kegiatan_insidental_v',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['kegiatan'] = $this->Kegiatan->tampil_data('kegiatan')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Kegiatan_insidental_v',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_kegiatan (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_kegiatan_insidental');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_kegiatan ($id){
 		$where=array('id_kegiatan'=>$id);
 		$data['kegiatan'] = $this->Kegiatan->ubah_kegiatan($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_kegiatan_insidental',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_kegiatan_aksi(){
 		 $this->form_validation->set_rules('judul_kegiatan', 'Judul', 'trim|required');
 		 $this->form_validation->set_rules('isi_kegiatan', 'Isi Kegiatan', 'trim|required');
 		 $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'trim|required');
 		// $this->form_validation->set_rules('gambar_kegiatan', 'Gambar', 'trim|required');
 		
 		if($this->form_validation->run()==FALSE){
 			$this->tambah_kegiatan();
 		}else{
 			
 			$config['upload_path'] = './uploads';
 			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG'; 
 			$config['max_size']     = '10240';
 			$config['max_width'] = '8000';
 			$config['max_height'] = '10000';
 			$nama_foto = "foto_kegiatan-".time();

 			$config['file_name']=$nama_foto;

 			$this->load->library('upload', $config);

 			if($this->upload->do_upload('gambar_kegiatan') == true) {
 				$post['gambar_kegiatan'] = $this->upload->data('file_name');
 				$judul_kegiatan 		= $this->input->post('judul_kegiatan');
 				$isi_kegiatan 			= $this->input->post('isi_kegiatan');
 				$tanggal_kegiatan 		= $this->input->post('tanggal_kegiatan');
 				
 				$data = array(
 					'judul_kegiatan' 	 =>  $judul_kegiatan,
 					'isi_kegiatan' 		=> 	$isi_kegiatan,
 					'gambar'			=>	$post['gambar_kegiatan'],
 					'tanggal' 			=> $tanggal_kegiatan,
 					'role_id'			=> 1
 				);
 				$this->Kegiatan->tambah_kegiatan_insidental('kegiatan', $data);
 				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 				redirect('admin/Kegiatan_insidental_v');
 			} else {
 				$error;
 			}
 		}
 	}
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

 	public function ubah_kegiatan_aksi(){
 		$id = $this->uri->segment(3);
 		 
 		// $this->upload->do_upload('gambar_kegiatan');

 		$judul_kegiatan 		= $this->input->post('judul_kegiatan');
 		$isi_kegiatan 			= $this->input->post('isi_kegiatan');
 		$tanggal_kegiatan 		= $this->input->post('tanggal_kegiatan');
 		$role_id 				= $this->input->post('Jenis_kegiatan');
 		// $post['gambar_kegiatan'] = $this->upload->data('file_name');

 		$data = array(
 			'judul_kegiatan' 	 =>  $judul_kegiatan,
 			'isi_kegiatan' 		=> 	$isi_kegiatan,
 			// 'gambar'			=>	$post['gambar_kegiatan'],
 			'tanggal' 			=> $tanggal_kegiatan,
 			'role_id'			=>1
 		);
 		$where = array('id_kegiatan'=>$id);
 		$this->Kegiatan->simpan_data($where,'kegiatan', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('Admin/Kegiatan_insidental_v');
 	}  	

 	// 	$judul_kegiatan 			= $this->input->post('judul_kegiatan');
 	// 	$isi_kegiatan 				= $this->input->post('isi_kegiatan');
 	// 	$tanggal_kegiatan 			= $this->input->post('tanggal_kegiatan');
 	// 	if($post['gambar_kegiatan'] != null) {
 	// 		$params['gambar'] = $post['gambar_kegiatan'];
 	// 	}

 	// 	$data = array(
 	// 		'judul_kegiatan' 		 =>  $judul_kegiatan,
 	// 		'isi_kegiatan' 			=> 	$isi_kegiatan,
 	// 		'gambar'	 		 =>  $gambar_kegiatan,
 	// 		'tanggal' 				=> $tanggal_kegiatan,
 	// 	);	
 	// 	$where = array ('id_kegiatan'=>$id);
 	// 	$this->kegiatan_model->simpan_data($where,'kegiatan', $data);
 	// 	$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 	// 	redirect('admin/kegiatan');
 	// }

 	public function hapus_kegiatan_aksi(){
 		$id = $this->uri->segment(3);
 		$where = array('id_kegiatan' => $id);
 		$this->Kegiatan->hapus_data($where, 'kegiatan');
 		$this->session->set_flashdata('pesan', 'Data Terhapus!');
 		redirect('admin/Kegiatan_insidental_v');
 	}
 	public function detail_kegiatan(){
 		$id = $this->uri->segment(3);
 		$data['kegiatan'] = $this->Kegiatan->detail_kegiatan($id);
 		$this->load->view('default/Header');
 		$this->load->view('Detail_kegiatan_v',$data);
 		$this->load->view('default/Footer');
 	}
 	public function semua_kegiatan(){
 		$data['kegiatan'] = $this->Kegiatan->semua_kegiatan();
 		$this->load->view('default/Header');
 		$this->load->view('kegiatan_lainnya',$data);
 		$this->load->view('default/Footer');
 	}
 } 	