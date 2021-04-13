 <?php  

 class Artikel_control extends CI_controller{

 	public function index(){
 		$data['artikel'] = $this->Artikel->tampil_data('artikel')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Artikel_v',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['artikel'] = $this->Artikel->tampil_data('artikel')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/Artikel_v',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_artikel (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_artikel');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_artikel (){
 		$id = $this->uri->segment(3);
 		$where=array('id_artikel'=>$id);
 		$data['artikel'] = $this->Artikel->ubah_artikel($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_artikel',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	public function tambah_artikel_aksi(){
 		$this->form_validation->set_rules('judul_artikel', 'Judul', 'trim|required');
 		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim|required');
 		$this->form_validation->set_rules('tanggal_artikel', 'Tanggal', 'trim|required');
 		

 		if($this->form_validation->run()==FALSE){
 			$this->tambah_artikel();
 		}else{

 			$config['upload_path'] = './uploads';
 			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
 			$config['max_size']     = '10240';
 			$config['max_width'] = '8000';
 			$config['max_height'] = '10000';
 			$nama_foto = "foto_artikel-".time();

 			$config['file_name']=$nama_foto;

 			$this->load->library('upload', $config);

 			if($this->upload->do_upload('gambar_artikel') == true) {
 				$post['gambar_artikel'] = $this->upload->data('file_name');
 				$judul_artikel 			= $this->input->post('judul_artikel');
 				$isi_artikel 			= $this->input->post('isi_artikel');
 				$tanggal_artikel 		= $this->input->post('tanggal_artikel');

 				$data = array(
 					'judul_artikel' 	 =>  $judul_artikel,
 					'isi_artikel' 		=> 	$isi_artikel,
 					'gambar'			=>	$post['gambar_artikel'],
 					'tanggal' 			=> $tanggal_artikel,
 				);
 				
 				$this->Artikel->tambah_data('artikel', $data);
 				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 				redirect('admin/Artikel_v');
 			} else {
 				$error;
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
 		}
 	}
 	public function ubah_artikel_aksi(){

 		$id = $this->uri->segment(3);
 		$judul_artikel 			= $this->input->post('judul_artikel');
 		$isi_artikel 			= $this->input->post('isi_artikel');
 		$tanggal_artikel 		= $this->input->post('tanggal_artikel');

 		$data = array(
 			'judul_artikel' 	 =>  $judul_artikel,
 			'isi_artikel' 		=> 	$isi_artikel,
 			'tanggal' 			=> $tanggal_artikel,
 		);
 		$where = array ('id_artikel'=>$id);
 		$this->Artikel->simpan_data($where,'artikel', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('admin/Artikel_v');
 	}
 	public function hapus_artikel_aksi(){
 		$id = $this->uri->segment(3);
 		$where = array('id_artikel' => $id);
 		$this->Artikel->hapus_data($where, 'artikel');
 		$this->session->set_flashdata('pesan', 'Data Terhapus!');
 		redirect('admin/Artikel_v');
 	}
 	public function detail_artikel(){
 		$id = $this->uri->segment(3);
 		$data['artikel'] = $this->Artikel->detail_artikel($id);
 		$data['semua_artikel'] = $this->Artikel->semua_artikel();
 		$this->load->view('default/Header');
 		$this->load->view('Detail_artikel_v',$data);
 		$this->load->view('default/Footer');
 	}
 	public function semua_artikel(){
 		$data['artikel'] = $this->Artikel->semua_artikel();
 		$this->load->view('default/Header');
 		$this->load->view('Artikel_lainnya_v',$data);
 		$this->load->view('default/Footer');
 	}
 } 	