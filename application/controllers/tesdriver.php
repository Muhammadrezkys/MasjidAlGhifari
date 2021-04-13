<?php
class tesdriver extends CI_Controller{
	 public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        // $this->load->model(array('SiswaModel'))
        $kegiatan = $this->load->model('kegiatan');
    }
	public function tambah_kegiatan_aksi(){
		// PENGUJIAN UNIT

 		// $this->form_validation->set_rules('judul_kegiatan', 'Judul', 'trim|required');
 		// $this->form_validation->set_rules('isi_kegiatan', 'Isi Kegiatan', 'trim|required');
 		// $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'trim|required');
 		// $this->form_validation->set_rules('gambar_kegiatan', 'Gambar', 'trim|required');
		$form_validation = true;
		$gambar = true;
		$post['gambar_kegiatan'] ='foto_kegiatan-1569860638.jpg' ;
		$judul_kegiatan 		= 'persiapan pernikahan';
		$isi_kegiatan 			= 'assalamualaikum';
		$data = array (
           
        );
		$tanggal_kegiatan 		= '2019-12-28';
		if($form_validation==FALSE){
 			// $this->tambah_kegiatan();
		 echo "data gagal dimasukkan";
		}else{

 			// $config['upload_path'] = './uploads';
 			// $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
 			// $config['max_size']     = '10240';
 			// $config['max_width'] = '8000';
 			// $config['max_height'] = '10000';
 			// $nama_foto = "foto_kegiatan-".time();

 			// $config['file_name']=$nama_foto;

 			// $this->load->library('upload', $config);

 			if($gambar == true) {

			$data = array(
				'judul_kegiatan' 	 =>  $judul_kegiatan,
				'isi_kegiatan' 		=> 	$isi_kegiatan,
				'gambar'			=>	$post['gambar_kegiatan'],
				'tanggal' 			=> $tanggal_kegiatan,
			);
			// $this->kegiatan_model->tambah_data('kegiatan', $data);
			echo "berhasil menyimpan data";
			return $this->db->insert('kegiatan', $data);
			
 				// $this->session->set_flashdata('pesan', 'Data Tersimpan!');
 				// redirect('admin/kegiatan');
 			} else {
 			 	// $error;
 			 	echo "gambar tidak terunggah";
 			 }
		}
	}

	public function uji_tambah_kegiatan_aksi(){
		$data = array (
            // PENGUJIAN INTEGRASI
            'judul_kegiatan' => 'selamat datang',
            'isi_kegiatan' => 'selamat',
            'gambar' => 'foto_kegiatan-1569860638.jpg',
            'tanggal' => '2021-12-28',
            'role_id' => 1
            
        );
        $expected_result = false;
        $result= $this->Kegiatan->tambah_kegiatan_insidental('kegiatan', $data);
        echo $this->unit->run($result, $expected_result, 'Pengujian Jalur 1');
		
	}

	public function uji_ubah_kegiatan_aksi(){
		$data = array (
            
            'judul_kegiatan' => 'selamat siang',
            'isi_kegiatan' => 'selamat malam',
            'gambar' => 'foto_kegiatan-1569860638.jpg',
            'tanggal' => '2021-1-31',
            'role_id' => 1
            
        );
        $update = new Kegiatan();
        $expected_result = FALSE;
        $result= $this->Kegiatan->tambah_kegiatan_insidental('kegiatan', $data);
        echo $this->unit->run($result, $expected_result, 'Pengujian Jalur 2');
		
	}
	}

