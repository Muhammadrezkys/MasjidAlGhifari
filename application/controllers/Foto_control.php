 <?php  

 class Foto_control extends CI_controller{
 	public function index(){
 		$data['foto'] = $this->Foto->tampil_data('foto')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/foto_v',$data);
 		$this->load->view('admin/header');
 	}
 	public function detail ($id){
 		$data['foto'] = $this->Foto->tampil_data('foto')->result();
 		$this->load->view('admin/header');
 		$this->load->view('admin/sitebar');
 		$this->load->view('admin/foto_v',$data);
 		$this->load->view('admin/header');

 	}
 	public function tambah_foto (){
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Tambah_foto');
 		$this->load->view('admin/default1/footer');
 	}
 	public function ubah_foto (){
 		$id = $this->uri->segment(3);
 		$where=array('id_foto'=>$id);
 		$data['foto'] = $this->Foto->ubah_foto($where)->row();
 		$this->load->view('admin/default1/header');
 		$this->load->view('admin/default1/sitebar');
 		$this->load->view('admin/Ubah_foto',$data);
 		$this->load->view('admin/default1/footer');
 	}
 	
 	public function tambah_foto_aksi(){
 		 $this->form_validation->set_rules('nama_foto', 'Nama Foto', 'trim|required');
 		$this->form_validation->set_rules('gambar_kegiatan', 'Gambar', 'trim|required');
 		
 		if($this->form_validation->run()==FALSE){
 			$this->tambah_foto();
 		}else{
 			
 			$config['upload_path'] = './uploads';
 			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
 			$config['max_size']     = '10240';
 			$config['max_width'] = '8000';
 			$config['max_height'] = '10000';
 			$nama_foto = "foto_kegiatan-".time();

 			$config['file_name']=$nama_foto;

 			$this->load->library('upload', $config);

 			if($this->upload->do_upload('gambar') == true) {
 				$post['gambar'] = $this->upload->data('file_name');
 				$nama_foto = $this->input->post('nama_foto');
 				
 				$data = array(
 					'nama_foto' 	 =>  $nama_foto,
 					'gambar'		=>	$post['gambar']
 					
 				);
 				$this->Foto->tambah_foto( $data);
 				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
 				redirect('admin/foto_v');
 			} else {
 				$error;
 			}
 		}
 	}
 	public function ubah_foto_aksi(){

 		$id = $this->uri->segment(3);
 		$nama_foto 			= $this->input->post('nama_foto');
 		
 		$data = array(
 			'nama_foto' 	 =>  $nama_foto,
 			
 		);
 		$where = array ('id_foto'=>$id);
 		$this->Artikel->simpan_data($where,'foto', $data);
 		$this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
 		redirect('admin/Foto_v');
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


 // 	public function kirim_foto(){

 // 		$this->load->library('upload');

 // 		$config['upload_path'] = './uploads';
 // 		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
 // 		$config['max_size']     = '10240';
 // 		$config['max_width'] = '8000';
 // 		$config['max_height'] = '10000';
 // 		$nama_foto = "galeri_".time();

 // 		$config['file_name']=$nama_foto;


 // 		$this->upload->initialize($config);

	// 	// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:



 // 		$field_name = "foto_galeri";


 // 		if ($this->upload->do_upload($field_name) == true) {

 // 			$gambar = $this->upload->data();
 // 			$data = array(
 // 				'id_foto' =>"galeri_".time(),
 // 				'nama_foto' => $gambar['file_name'],
 // 			);

 // 			$this->Foto->tambah_foto($data);
 // 			echo '<script language="javascript">
 // 			alert ("Foto berhasil diunggah!")
 // 			location.replace("../admin/Upload_foto")
 // 			</script>';
	// 		//redirect('viewprofilanggota');
 // 		}
 // 		else 
 // 			{ $error = array('error' => $this->upload->display_errors()); 
 // 		var_dump($error);
 // 	}
 // }
 public function hapus_foto_aksi(){
 	$id = $this->uri->segment(3);
 	$where = array('id_foto' => $id);
 	$this->Foto->hapus_data($where, 'foto');
 	$this->session->set_flashdata('pesan', 'Data Terhapus!');
 	redirect('admin/foto_v');
 }
}