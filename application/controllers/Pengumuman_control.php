 <?php  

 class Pengumuman_control extends CI_controller{

 	public function index(){
 		$data['pengumuman'] = $this->Pengumuman->tampil_data('pengumuman')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/pengumuman',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['pengumuman'] = $this->Pengumuman->tampil_data('pengumuman')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/pengumuman',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_pengumuman (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_pengumuman');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_pengumuman (){
 		$id = $this->uri->segment(3);
 		$where=array('id_pengumuman'=>$id);
 		$data['pengumuman'] = $this->Pengumuman->ubah_pengumuman($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_pengumuman',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_pengumuman_aksi(){
 		$this->form_validation->set_rules('judul_pengumuman', 'Judul', 'trim|required');
 		$this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'trim|required');
 		$this->form_validation->set_rules('tanggal_pengumuman', 'Tanggal', 'trim|required');
 		// $this->form_validation->set_rules('gambar_pengumuman', 'Gambar', 'trim|required');

 		if($this->form_validation->run()==FALSE){
 			$this->tambah_pengumuman();
 		}else{

 			$config['upload_path'] = './uploads';
 			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
 			$config['max_size']     = '10240';
 			$config['max_width'] = '8000';
 			$config['max_height'] = '10000';
 			$nama_foto = "foto_pengumuman-".time();

 			$config['file_name']=$nama_foto;

 			$this->load->library('upload', $config);

 			if($this->upload->do_upload('gambar_pengumuman') == true) {
 				$post['gambar_pengumuman'] 	= $this->upload->data('file_name');
 				$judul_pengumuman 			= $this->input->post('judul_pengumuman');
 				$isi_pengumuman 			= $this->input->post('isi_pengumuman');
 				$tanggal_pengumuman 		= $this->input->post('tanggal_pengumuman');

 				$data = array(
 					'judul_pengumuman' 	 	=>  $judul_pengumuman,
 					'isi_pengumuman' 		=> 	$isi_pengumuman,
 					'gambar'				=>	$post['gambar_pengumuman'],
 					'tanggal' 				=> $tanggal_pengumuman
 				);
 				$this->Pengumuman->tambah_data('pengumuman', $data);
 				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 				redirect('admin/Pengumuman_v');
 			} else {
 				$error;
 			} 	
 		}
 	}
 	public function ubah_pengumuman_aksi(){
 		$id = $this->uri->segment(3);
 		$judul_pengumuman 			= $this->input->post('judul_pengumuman');
 		$isi_pengumuman				= $this->input->post('isi_pengumuman');
 		$tanggal_pengumuman 		= $this->input->post('tanggal_pengumuman');

 		$data = array(
 			'judul_pengumuman' 	=>  $judul_pengumuman,
 			'isi_pengumuman' 	=> 	$isi_pengumuman,
 			'tanggal' 			=> $tanggal_pengumuman,
 		);
 		$where = array ('id_pengumuman'=>$id);
 		$this->Pengumuman->simpan_data($where,'pengumuman', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('admin/Pengumuman_v');
 	}
 	public function hapus_pengumuman_aksi(){
 		$id = $this->uri->segment(3);
 		$where = array('id_pengumuman' => $id);
 		$this->Pengumuman->hapus_data($where, 'pengumuman');
 		$this->session->set_flashdata('pesan', 'Data Terhapus!');
 		redirect('admin/Pengumuman_v');
 	}
 	public function detail_pengumuman(){
 		$id = $this->uri->segment(3);
 		$data['pengumuman'] = $this->Pengumuman->detail_pengumuman($id);
 		$data['semua_pengumuman'] = $this->Pengumuman->semua_pengumuman();
 		$this->load->view('default/Header');
 		$this->load->view('Detail_pengumuman_v',$data);
 		$this->load->view('default/Footer');
 	}
 	public function semua_pengumuman(){
 		$data['pengumuman'] = $this->Pengumuman->semua_pengumuman();
 		$this->load->view('default/Header');
 		$this->load->view('Pengumuman_lainnya_v',$data);
 		$this->load->view('default/Footer');
 	}
 } 	